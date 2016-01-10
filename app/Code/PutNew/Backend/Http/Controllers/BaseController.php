<?php

namespace PutNew\Backend\Http\Controllers;

use App\Http\Controllers\Controller;

abstract class BaseController extends Controller
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * Not clear this array
     * @var array
     */
    protected $dataView = [];

    public function __construct()
    {
        $this->dataView['title'] = $this->title;
    }

    public function view($view = null, $mergeData = [])
    {
        return view($view,$this->dataView,$mergeData);
    }
}