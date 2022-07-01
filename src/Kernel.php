<?php
/**
 * Created by PhpStorm.
 * User: Ashish S.
 * Date: 1/7/22
 * Time: 2:26 PM
 */
namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
