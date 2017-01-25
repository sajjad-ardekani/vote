<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Security("has_role('ROLE_USER')")
 * 
 */
class DashboardController extends AppAbstractController {

    /**
     * @Route("/admin", name="app_admin_dashboard")
     * @Template
     */
    public function dashboardAction(Request $request) {

        $answers = $this->getEm()->getRepository("AppBundle:Answer")->findByUser($this->getUser());
        $countOfVote = $this->getEm()->getRepository("AppBundle:Vote")->CountOfVote($this->getUser());
        $CountOfNoteVote = $this->getEm()->getRepository("AppBundle:Vote")->CountOfNoteVote($this->getUser());
        $votes = $this->getEm()->getRepository("AppBundle:Vote")->findByNote($this->getUser());
        $data = $this->pageNumber($votes, $request);
        $questionAnswerss = array();
        if (!empty($answers)) {
            foreach ($answers as $key => $answer) {
                $questionAnswersArr = array(
                    'answer' => $answer->getAnswer()->getText(),
                );
                $questionAnswers[$answer->getAnswer()->getQuestion()->getText()][$answer->getAnswer()->getId()][] = $questionAnswersArr;
            }
            foreach ($questionAnswers as $ke => $value) {
                foreach ($value as $k => $v) {

                    foreach ($v as $kk => $i) {

                        $questionAnswersArrr = array(
                            'answer' => $i['answer'],
                            "count" => count($v)
                        );
                    }
                    $questionAnswerss[$ke][$k] = $questionAnswersArrr;
                }
            }
        }
        return array(
            'questionAnswerss' => $questionAnswerss,
            'countOfVote' => $countOfVote,
            'CountOfNoteVote' => $CountOfNoteVote,
            'votes' => $data
        );
    }

}
