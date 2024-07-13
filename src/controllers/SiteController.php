<?php
namespace app\controllers;

use app\Application;
use app\Controller;
use app\Request;

class SiteController extends Controller
{
    
    public function handleContact (Request $request)
    {
        $body = $request->getBody();
        return 'ssubmitted data';
    }

    public function home ()
    {
        $params = [
            'name' => 'kevin'
        ];
        return $this->render('home', $params);
    }

    public function contact ()
    {
        return $this->render('contact', $params);
    }

}

?>