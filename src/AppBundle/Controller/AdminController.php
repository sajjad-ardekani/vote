<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Security("has_role('ROLE_USER')")
 * 
 */
class AdminController extends AppAbstractController {

    /**
     * @Route("/question/list", name="app_question_list")
     * @Template
     */
    public function questionListAction(Request $request) {

        $questions = $this->getEm()->getRepository("AppBundle:Question")->findBy(['del' => 0]);

        return ['questions' => $questions];
    }

    /**
     * @Route("/question/add", name="app_question_add")
     * @Template
     */
    public function questionAddAction(Request $request) {

        if ($request->getMethod() === 'POST') {
            $text = $request->get('appbundle_question');
            $questionAnswers = $request->get('p');
            if ($text != NULL && $questionAnswers != NULL) {
                $question = new \AppBundle\Entity\Question();
                $question->setText($text);
                $this->getEm()->persist($question);
                foreach ($questionAnswers as $answer) {
                    if ($answer != null) {
                        $questionAnswer = new \AppBundle\Entity\AnswerQuestion();
                        $questionAnswer->setText($answer);
                        $questionAnswer->setQuestion($question);
                        $this->getEm()->persist($questionAnswer);
                    }
                }
                $this->getEm()->flush();

                $this->addFlash('seccess', 'سوال با موفقیت طراحی شد');
                return $this->redirectBack();
            } else {
                $this->addFlash('error', 'لطفا هر دو فیلد را پر کنید');
            }
        }

        return [];
    }

    /**
     * @Route("/{id}/edit", name="app_question_edit")
     * @ParamConverter("question", class="AppBundle:Question")
     * @Template
     */
    public function questionEditAction(\AppBundle\Entity\Question $question, Request $request) {
        $form = $this->createForm(\AppBundle\Form\QuestionType::class, $question);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $question = $form->getData();
            $this->getEm()->persist($question);
            $this->getEm()->flush();
            $this->addFlash('success', 'جواب با موفقیت اضافه شد');
            return $this->redirectToRoute("app_question_list");
        }

        return array(
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/{id}/delete", name="app_question_delete")
     * @ParamConverter("question", class="AppBundle:Question")
     * @Template
     */
    public function questionDeleteAction(\AppBundle\Entity\Question $question, Request $request) {
        $question->setDel(1);

//        $this->getEm()->persist($question);
        $this->getEm()->flush();
        $this->addFlash('success', 'سوال با موفقیت حذف شد');
        return $this->redirectToRoute("app_question_list");
    }

}
