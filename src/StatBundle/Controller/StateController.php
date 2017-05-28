<?php

namespace StatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EntityAppBundle\Entity as E;

/**
 * @Route("/state")
 */
class StateController extends Controller
{
	/**
	 * @Route("/current-state")
	 */
	public function currentStateAction()
	{
		$em = $this->getDoctrine();
		
		/** @var E\Commande $currentCommand */
		$currentCommand = $em->getRepository('EntityAppBundle:Commande','rep')
		->findOneByActif(1)
		;
		
		$state = array("has_command" => false,"has_data" => false);
		
		/** @var E\Data $currentData */
		$currentData = null;
		if ($currentCommand !== null){
			$state['has_command'] = true;
			$state['command_date'] = $currentCommand->getDateDebut();
			$state['command_delta'] = $currentCommand->getDelta();
			// 1 heating, 0 nothing, -1 cooling
			$state['command_on'] = ($currentCommand->getAllumage()>0)?$currentCommand->getAllumage():(($currentCommand->getAllumageFroid()>0)?-1:0);
			$state['command_alarm'] = $currentCommand->getAlarme();
			
			$currentData = $currentCommand->getData();
			if ($currentData!== null){
				$state['has_data'] = true;
				$state['data_date'] = $currentData->getDatePrise();
				$state['data_temp'] = $currentData->getTemperature();
				$state['data_hygro'] = $currentData->getHygrometrie();
				$state['device_id'] = $currentData->getDeviceId();
				$state['command_temp'] = round($currentData->getTemperature() + $currentCommand->getDelta(),1);
			}	
		}
		
		//$currentData->getTemperature()
		return new Response($currentCommand->getAllumage() .'-'.$currentCommand->getAllumageFroid().'-'.$state['command_on'])
		
		
		return $this->render('StatBundle:State:display.html.twig',$state);
	}
}