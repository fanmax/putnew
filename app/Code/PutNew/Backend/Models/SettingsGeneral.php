<?php

namespace PutNew\Backend\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsGeneral extends Model
{
    protected $fillable = ['site_name','site_description','timezone_string'];
}
