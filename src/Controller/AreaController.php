<?php
/**
 * Created by PhpStorm.
 * User: Ashish S.
 * Date: 1/7/22
 * Time: 2:26 PM
 */
namespace App\Controller;

use App\Service\areaService;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Area Controller.
 * @property areaService areaService
 * @Rest\Route("/api/rest",name="api_")
 */

class AreaController extends AbstractFOSRestController
{

    /**
     * @var areaService
     */
    private $areaService;

    /**
     * AreaController constructor.
     * @param areaService $areaService
     */
    public function __construct(areaService $areaService)
    {
        $this->areaService = $areaService;
    }

    /**
     * @Rest\Get("/circle/{radius}")
     * @param $radius
     * @return JsonResponse
     */
    public function circleAction($radius):JsonResponse
    {
        try {
            $calculateCircle = $this->areaService->calculateCircleArea($radius);

            return new JsonResponse($calculateCircle);
        } catch (\Exception $exception) {
            $error = array(
                'error' => array(
                    'msg' => $exception->getMessage(),
                    'code' => $exception->getCode(),
                ),
            );
            return new JsonResponse($error);
        }

    }

    /**
     * @Rest\Get("/triangle/{a}/{b}/{c}")
     * @param $a
     * @param $b
     * @param $c
     * @return JsonResponse
     */
    public function triangleAction($a, $b, $c):JsonResponse
    {
        try {
            $calculateTriangle = $this->areaService->calculateTriangleArea($a, $b, $c);

            return new JsonResponse($calculateTriangle);
        } catch (\Exception $exception) {
            $error = array(
                'error' => array(
                    'msg' => $exception->getMessage(),
                    'code' => $exception->getCode(),
                ),
            );
            return new JsonResponse($error);
        }

    }


}