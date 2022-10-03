<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Marco's Project"
        ];
        return $this->render('home', $params);
    }

    public function purchases()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('purchases', $params);
    }

    public function providers()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('providers', $params);
    }

    public function users()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('users', $params);
    }

    public function typologies()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('typologies', $params);
    }

    public function login()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('login', $params);
    }

    public function register()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('register', $params);
    }

    public function profile()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('profile', $params);
    }

    public function logout()
    {
        $params = [
            'name' => "Marco's Small Project"
        ];
        return $this->render('logout', $params);
    }
}