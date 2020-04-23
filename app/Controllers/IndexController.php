<?php

namespace App\Controllers;

use ManaPHP\WebSocket\Controller;

/**
 * Class IndexController
 *
 * @package App\Controllers
 *
 * @property-read \ManaPHP\ErrorHandlerInterface $errorHandler
 */
class IndexController extends Controller
{
    public function openAction()
    {
        if ($token = $this->request->getToken()) {
            $this->identity->setClaims(jwt_decode($token, 'pusher.admin'));
        }

        return 0;
    }

    public function messageAction($data)
    {
        return $this->response->setContent($data);
    }

    public function closeAction()
    {
        
    }
}
