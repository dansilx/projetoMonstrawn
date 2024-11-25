<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id', 'professor_id', 'plano_id', 'data_matricula', 'status'
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function plano()
    {
        return $this->belongsTo(Plano::class);
    }
}
