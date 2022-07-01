<?php
/**
 * Created by PhpStorm.
 * User: Ashish S.
 * Date: 1/7/22
 * Time: 2:26 PM
 */

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
