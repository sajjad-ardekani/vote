<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form\User;

use FOS\UserBundle\Util\LegacyFormHelper;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\User\Role;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;
use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;

class loginFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('recaptcha', EWZRecaptchaType::class, array(
            'attr' => array(
                'options' => array(
                    'theme' => 'light',
                    'type' => 'image',
                    'size' => 'normal'
                )
            ),
            'mapped' => false,
            'constraints' => array(
                new RecaptchaTrue()
            )
        ));
    }

//    public function configureOptions(OptionsResolver $resolver) {
//        $resolver->setDefaults(array(
//            'data_class' => 'AppBundle\Entity\User\User',
//                )
//        );
//    }

}
