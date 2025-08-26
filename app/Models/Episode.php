<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $timestamps = false;
    protected $fillable = ["number"];
    //
    public function season()
    {
        $this->belongsTo(Season::class);
    }
}
