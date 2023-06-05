<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personaje
 *
 * @property $id
 * @property $nombre
 * @property $ataques
 * @property $hp
 * @property $edad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personaje extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ataques' => 'required',
		'hp' => 'required',
		'edad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ataques','hp','edad'];



}
