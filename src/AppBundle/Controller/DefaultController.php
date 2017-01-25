<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DefaultController extends AppAbstractController {

    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function indexAction(Request $request) {
        $users = $this->getEm()->getRepository('AppBundle:User\User')->findAll();
        return [
            'users' => $users
        ];
    }

    protected function get_client_ip() {
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            //check for ip from share internet
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            // Check for the Proxy User
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }
        return $ip;
    }

    /**
     * @Route("/{id}/vote", name="app_vote")
     * @ParamConverter("user", class="AppBundle:User\User")
     * @Template
     */
    public function voteAction(\AppBundle\Entity\User\User $user, Request $request) {

//        $CustomerIp = system("curl -s ipv4.icanhazip.com");

        $answers = $this->getEm()->getRepository("AppBundle:AnswerQuestion")->findByQuestion();
        $votes = $this->getEm()->getRepository("AppBundle:Vote")->findAll();
        if ($request->getSession()->get('vote') != NULL) {
            foreach ($request->getSession()->get('vote') as $userV) {
                if ($userV === $user->getId()) {
                    $this->addFlash('error', 'شما در نظرسنجی این استاد شرکت کرده اید');
                    return $this->redirectToRoute("homepage");
                }
            }
        }
        foreach ($votes as $vote) {
            if ($vote->getIp() === $this->get_client_ip() && $vote->getUser() === $user) {
                $this->addFlash('error', 'شما در نظرسنجی این استاد شرکت کرده اید');
                return $this->redirectToRoute("homepage");
            }
        }

        if ($request->getMethod() === 'POST') {

            $session = $request->getSession();
            $note = $request->get('app_note');
            $vote = new \AppBundle\Entity\Vote();
            $vote->setUser($user);
            $vote->setIp($this->get_client_ip());
            $Answers = $request->get('answers');
            if ($note != NULL) {
                $vote->setNote($note);
            }
            $this->getEm()->persist($vote);

            foreach ($Answers as $Value) {
                $answer = new \AppBundle\Entity\Answer();
                $answer->setVote($vote);
                $answer->setAnswer($this->getEm()->getRepository("AppBundle:AnswerQuestion")->find($Value));
                $this->getEm()->persist($answer);
            }

            $this->getEm()->persist($vote);
            $this->getEm()->flush();
            $this->addFlash('success', 'با موفقیت ثبت شد.');

            $getS = $session->get('vote');
            $getS[] = $user->getId();
            $session->set('vote', $getS);

            return $this->redirectToRoute("homepage");
        }
        foreach ($answers as $ans) {
            $questions[$ans->getQuestion()->getId()] = [
                'Question' => $ans->getQuestion(),
                'Answers' => $this->getEm()->getRepository('AppBundle:AnswerQuestion')->findBy(['question' => $ans->getQuestion()->getId()])
            ];
        }
   
        return [
            'user' => $user,
            'questions' => $questions
        ];
    }

}
