<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Testimonio
 *
 * @property $id
 * @property $nombre
 * @property $titulo
 * @property $contenido
 * @property $calificacion
 * @property $fecha
 * @property $estado
 * @property $imagen
 * @property $video
 * @property $producto_servicio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Testimonio extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'titulo', 'contenido', 'calificacion', 'fecha', 'estado', 'imagen', 'video', 'producto_servicio'];



}
