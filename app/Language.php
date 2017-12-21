<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

    public function code($code)
    {
        return $query->where('code', $code)->get();
    }

    public static function selectList()
    {
        $selectList = [];
        foreach(self::all() as $language) {
            $selectList[$language->id] = $language->iso_name;
        }
        return $selectList;
    }

}
