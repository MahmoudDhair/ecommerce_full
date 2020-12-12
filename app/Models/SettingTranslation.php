<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{

    protected $guarded = [];
    public function usesTimestamps() : bool{
        return false;
    }

}
