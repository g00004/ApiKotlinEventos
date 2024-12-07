<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    use HasFactory;

    protected $table = 'rsvp';
    protected $primaryKey = 'id_rsvp';
    public $timestamps = false;
 
}
