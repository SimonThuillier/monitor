<?php

namespace EntityAppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EntityAppBundle\Entity\User;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class UserType extends AbstractType{
	
	
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('username',TextType::class,array('label' => 'Nom d\'utilisateur : '))
		->add('email', EmailType::class, array('label' => 'Email : '))
		->add('passwordRaw', PasswordType::class,array('label' => 'Mot de passe : '))
		->add('button', SubmitType::class,array('label' => 'Creer utilisateur'))
		;
	}
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => User::class,
		));
	}
	
	public function getName()
	{
		return 'entity_app_bundle_user_type';
	}
	
	public function __toString()
	{
		return 'entity_app_bundle_user_type';
	}
}