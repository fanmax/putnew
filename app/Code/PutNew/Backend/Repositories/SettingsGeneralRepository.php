<?php

namespace PutNew\Backend\Repositories;


use PutNew\Backend\Models\SettingsGeneral;

class SettingsGeneralRepository extends AbstractRepository
{
    /**
     * @var Company
     */
    protected $model;

    public function __construct(SettingsGeneral $model)
    {
        $this->model = $model;
    }
}