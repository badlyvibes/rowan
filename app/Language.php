<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

    public function code($code)
    {
        return $query->where('code', $code)->get();
    }

}
