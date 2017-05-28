<?php

namespace StatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EntityAppBundle as E;


/**
 * @Route("/chart")
 */
class ChartController extends Controller
{
	/**
	 * @Route("/first-chart/{nb}")
	 */
	public function firstChartAction($nb=30)
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		
		$q = $em->createQuery('SELECT d.id,d.datePrise,d.temperature FROM EntityAppBundle:Data d ORDER BY d.id DESC')
		->setMaxResults($nb);
		$dataset = $q->getResult();
		$dataset = array_reverse($dataset);
		
		
		//$currentData->getTemperature()
		
		/**
		 * 
		 * @var array $dataset2
		 */
		$dataset2 = array();
		foreach ($dataset as $d){
			$dataset2[]=array("id" => $d["id"],"datePrise" =>($d["datePrise"])->format('Y-m-d-H-i-s'),"temperature" => $d["temperature"]);
		}
		
		
		
		return $this->render('StatBundle:Chart:first-chart.html.twig',array(
				'dataset' => $dataset2
		));
	}
	
	/**
	 * @Route("/demo-d3")
	 */
	public function demoD3()
	{
		return $this->render('StatBundle:Chart:demo-d3.html.twig');
	}
}