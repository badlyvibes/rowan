<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommonName extends Model
{
    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
