<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEvento extends Model
{
    use HasFactory;

    protected $table = 'historialeventos';
    protected $primaryKey = 'id_historial';
    public $timestamps = false;

    protected $fillable = ['id_usuario', 'id_evento', 'asistio'];
 
}
