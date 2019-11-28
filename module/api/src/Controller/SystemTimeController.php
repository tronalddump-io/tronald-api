<?php

/**
 * SystemTimeController.php - created Mar 6, 2016 3:03:18 PM
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Tronald\App\Api\Controller;

use Silex;
use Symfony\Component\HttpFoundation;
use Tronald\Lib\Http;

/**
 *
 * SystemTimeController
 *
 * @package Tronald\Api\Web
 */
class SystemTimeController
{

    /**
     *
     * @param  Silex\Application      $app
     * @param  HttpFoundation\Request $request
     * @return Http\JsonResponse
     */
    public function getAction(Silex\Application $app, HttpFoundation\Request $request)
    {
        $date = new \DateTime();

        return new Http\JsonResponse($date);
    }
}