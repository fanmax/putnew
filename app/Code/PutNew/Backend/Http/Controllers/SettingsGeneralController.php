<?php

namespace PutNew\Backend\Http\Controllers;


use Illuminate\Http\Request;
use PutNew\Backend\Repositories\SettingsGeneralRepository;

class SettingsGeneralController extends BaseController
{
    protected $title = 'General Settings';

    /**
     * @return SettingsGeneralRepository
     */
    private $settingsGeneralRepository;

    public function __construct(SettingsGeneralRepository $settingsGeneralRepository){
        parent::__construct();

        $this->settingsGeneralRepository = $settingsGeneralRepository;
    }

    public function index()
    {
        $this->dataView['general'] = $this->settingsGeneralRepository->find(1);
        return $this->view('backend::settings.general');
    }

    public function store(Request $request)
    {
        $this->settingsGeneralRepository->update($request->input(),1);
        return redirect()->route('settings.general');
    }
    
}