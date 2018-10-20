<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class CommonName extends Model
{
    use Searchable;

    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function searchableAs()
    {
        return 'common_names_index';
    }

    public function toSearchableArray()
    {
        return array_merge($this->toArray());
    }
}
