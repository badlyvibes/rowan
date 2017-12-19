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
        return 'rowan_index';
    }

    public function toSearchableArray()
    {
        $extra_data = [];
        $extra_data['common_names'] = array_map(function ($data) {
            return $data['name'];
        }, $this->commonNames->toArray());

        return array_merge($this->toArray(), $extra_data);
    }

}
