<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{

    public function scopeName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%')->get();
    }

    public static function genus($genus)
    {
        return static::where('genus', $genus)->get();
    }

    public static function genera()
    {
        return static::distinct()->get(['genus']);
    }

    public static function species($genus, $species)
    {
        $tree = static::where(['genus' => $genus, 'species' => $species])->get();
        return isset($tree[0]) ? $tree[0] : null;
    }

    public function commonNames()
    {
        return $this->hasMany(CommonName::class);
    }

}
