<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DistrictController extends Controller {

    /**
     * @Route("/districts", name="Districts");
     */

    public function getDistricts() {
        $districts = $this->getDoctrine()->getRepository('AppBundle:Districts')->findAll();


    }

}