<?php

namespace App\Traits;

trait AuthFunction{

    public function getGuard(){
      return auth('admin');
    }
}
