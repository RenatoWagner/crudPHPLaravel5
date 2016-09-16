<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
      'nome'
    ];

    public $timestamps = false;

    protected $table = 'pessoas';
}
