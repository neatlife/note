<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'note';
    public $timestamps = false;

    protected $fillable = [
        'subject', 'content', 'email',
    ];

    protected $hidden = [
    ];
}
