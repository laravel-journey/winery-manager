<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }

    public function awards()
    {
        return $this->belongsToMany(Award::class);
    }
}
