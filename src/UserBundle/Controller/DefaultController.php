<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use EntityAppBundle\Form\UserType;

	/**
	 * @Route("")
	 */
class DefaultController extends Controller
	{
		/**
		 * /**
		 * @param Request $request
		 * @return array
		 * @Template()
		 * @Route("/register",name="app_register")
		 */
		public function registerAction(Request $request)
		{
			$form = $this->createForm(UserType::class);
	
			if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
				/* $user=$form->getData();
				$user->encodePassword($this->get('security.password_encoder'));
	
				$em = $this->get('doctrine.orm.entity_manager');
	
				// check d'unicit� de l'username ou du mail
				$oldUserName = $em->getRepository("EntityAppBundle:User")->findoneby(array("username" => $user->getUsername()));
				$oldUserMail = $em->getRepository("EntityAppBundle:User")->findoneby(array("email" => $user->getEmail()));
	
				if ($oldUserName !== null){
					$this->addFlash('warning', 'An user with the same username already exists. Please choose another username.');
					return $this->redirectToRoute('app_register');
				}
				elseif($oldUserMail !== null){
					$this->addFlash('warning', 'An user with the same mail already exists. Please choose another mail.');
					return $this->render('UserBundle:Default:register.html.twig',array("form"=>$form->createView()));
				}
	
	
				$em->persist($user);
				$em->flush();
	
				$this->addFlash('notice', 'User registered');*/
			}
			return $this->render('UserBundle:Default:register.html.twig',array("form"=>$form->createView()));
		}
	
		/**
		 * @Route("/login",name="app_login")
		 *
		 */
		public function loginAction()
		{
			$authenticationUtils = $this->get('security.authentication_utils');
			
			
			// get the login error if there is one
			$error = $authenticationUtils->getLastAuthenticationError();
			
			// last username entered by the user
			$lastUsername = $authenticationUtils->getLastUsername();
			
			if ($error === null){
				$this->addFlash('notice', 'Authentification OK'. $lastUsername);
			}
			else{
				$this->addFlash('warning', $error->getMessage());
			}
			
			
	
			return $this->render('UserBundle:Default:login.html.twig', array(
					'last_username' => $lastUsername,
					'error'         => $error,
			));
		}
		
		/**
		 * @param Request $request
		 * @return array
		 * @Template()
		 * @Route("/logout",name="app_logout")
		 *
		 */
		public function logoutAction(Request $request)
		{
		
			$authenticationUtils = $this->get('security.authentication_utils');
		
			// get the login error if there is one
			$error = $authenticationUtils->getLastAuthenticationError();
		
			// last username entered by the user
			$lastUsername = $authenticationUtils->getLastUsername();
		
			return $this->render('UserBundle:Default:login.html.twig', array(
					'last_username' => $lastUsername,
					'error'         => $error,
			));
		}
	
	
}
