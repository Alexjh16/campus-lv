<?php

namespace App\Models;

use Database\Factories\EstudianteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estudiante extends Model
{
    use HasFactory;
    //
    /*protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'user_id'
    ];*/

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function configure(){
        return $this->afterCreating(function (Estudiante $estudiante){
            Asignatura::factory()->create(['estudiante_id' => $estudiante]);
        });
    }





}
