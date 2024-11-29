<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'data_nascimento',
        'endereco',
        'telefone',
        'data_matricula',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($aluno) {
            if (is_null($aluno->data_matricula)) {
                $aluno->data_matricula = now()->toDateString(); // Define a data atual
            }
        });
    }
}
