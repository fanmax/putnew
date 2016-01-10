<?php

namespace PutNew\Backend\Http\Controllers;


class DashboardController extends BaseController
{
    protected $title = 'Dashboard';

    public function index()
    {
        return $this->view('backend::dashboard');
    }
}