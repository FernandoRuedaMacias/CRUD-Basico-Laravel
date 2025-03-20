<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    private $id;
    private $titulo;
    private $contenido;
    private $autor;
    private $fecha;
    
    use HasFactory;
}
