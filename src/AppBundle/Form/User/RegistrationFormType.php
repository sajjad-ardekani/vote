<?php

namespace AppBundle\Form\User;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use AppBundle\Entity\User\Role;

class RegistrationFormType extends BaseType {

    /**
     * @var Roles
     */
    private $roles;

    /**
     * @param string $class The User class name
     * @param Roles $roles Array or roles.
     */
    public function __construct($class, Role $roles) {
        parent::__construct($class);

        $this->roles = $roles;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        parent::buildForm($builder, $options);

        $builder

                ->add('person',new PersonType())
                ->add('roles', 'choice', array(
                    'choices' => array($this->roles->getRoles()),
                    'expanded' => true,
                    'multiple' => true,
                    'required' => true,
                    'label' => 'سطح دسترسی'
                ));
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return 'user_registration';
    }

}
