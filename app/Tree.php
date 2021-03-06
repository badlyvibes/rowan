<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{

    use Searchable;

    public function scopeName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%')->get();
    }

    public static function id($id)
    {
        return static::where('id', $id)->get();
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

    public function searchableAs()
    {
        return 'trees_index';
    }

    public function toSearchableArray()
    {
        return array_merge($this->toArray());
    }

}
