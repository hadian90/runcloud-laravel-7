<?php

namespace App\Traits;

use Vinkla\Hashids\Facades\Hashids;

trait Hashidable
{
    public function getHashidAttribute($value)
    {
        return Hashids::encode($this->id);
    }
}
