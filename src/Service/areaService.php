<?php
/**
 * Created by PhpStorm.
 * User: Ashish S.
 * Date: 1/7/22
 * Time: 2:26 PM
 */
namespace App\Service;

use Symfony\Component\Config\Definition\Exception\Exception;

class areaService
{
    /**
     * @param $radius
     * @return array
     */
    public function calculateCircleArea($radius) {
        $pi = 3.14; // default value

        // Calculate circle circumference using 2πr.
        $circumference = 2*$pi*$radius;

        // Calculate circle surface using πr².
        $surface = 3.14*pow($radius, 2); // use πr²

        return [
            'type' => 'circle',
            'radius'=>$radius,
            'surface' => number_format($surface,2),
            'circumference' => number_format($circumference, 2)
        ];
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return array
     */
    public function calculateTriangleArea($a, $b, $c) {

        if ($a < 0 || $b < 0 || $c < 0 || ($a + $b <= $c) || ($a + $c <= $b) || ($b + $c <= $a)) {
            throw new Exception('Not a valid triangle value.');
        }
        // Calculate circumference
        $circumference = $a+$b+$c;

        // Calculate
        $s = $circumference/2;

        // Calculate surface using heron's squre root formula
        $surface = sqrt(($s * ($s-$a) * ($s-$b) * ($s-$c)));

        return [
            'type' => 'triangle',
            'a'=>$a,
            'b'=>$b,
            'c'=>$c,
            'surface' => number_format($surface, 2),
            'circumference' => number_format($circumference, 2)
        ];
    }



}