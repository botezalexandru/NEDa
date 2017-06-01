<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DistrictController extends Controller {

    /**
     * @Route("/districts", name="Districts");
     */

    public function getDistricts() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT c
        FROM AppBundle:Districts c'
        );
        $districts = $query->getArrayResult();
        $response = new JsonResponse(array('districts' => $districts));

        return $response;
    }

}