<?php

namespace PutNew\Frontend\Http\Controllers;


class HomeController extends BaseController
{

    public function index()
    {

        return $this->view('frontend::default.home.index');
    }

}