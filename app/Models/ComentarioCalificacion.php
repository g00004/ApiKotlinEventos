<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioCalificacion extends Model
{
    use HasFactory;

    protected $table = 'comentarioscalificaciones';
    protected $primaryKey = 'id_comentario';
    public $timestamps = false;

    protected $fillable = ['id_usuario', 'id_evento', 'comentario', 'calificacion'];

}
