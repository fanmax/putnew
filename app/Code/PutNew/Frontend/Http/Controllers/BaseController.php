<?php

namespace PutNew\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use PutNew\Backend\Models\SettingsGeneral;

class BaseController extends Controller
{

    /**
     * Not clear this array
     * @var array
     */
    public $dataView = [];

    public function __construct()
    {
        $this->dataView['blog_name'] = SettingsGeneral::find(1)->site_name;
        $this->dataView['blog_description'] = SettingsGeneral::find(1)->site_description;
    }

    public function view($view = null, $mergeData = [])
    {
        return view($view,$this->dataView,$mergeData);
    }

}