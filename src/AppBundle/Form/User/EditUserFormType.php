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

class EditUserFormType extends BaseType {

    private $class;

    /**
     * @param string $class The User class name
     * @param Roles $roles Array or roles.
     */
    public function __construct($class, Role $roles) {
        parent::__construct($class);

        $this->roles = $roles;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                ->add('plainPassword', \Symfony\Component\Form\Extension\Core\Type\RepeatedType::class, array(
                    'required' => false,
                    'type' => \Symfony\Component\Form\Extension\Core\Type\PasswordType::class,
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'form.password'),
                    'second_options' => array('label' => 'form.password_confirmation'),
                    'invalid_message' => 'fos_user.password.mismatch',
                ))
                ->add('person',new PersonType())
                ->add('roles', 'choice', array(
                    'choices' => array($this->roles->getRoles()),
                    'expanded' => true,
                    'multiple' => true,
                    'required' => true
                ))
        ;
    }

    // BC for SF < 3.0
    public function getName() {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix() {
        return 'fos_user_registration';
    }

}
