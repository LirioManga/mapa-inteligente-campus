<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
      use HasFactory;

    protected $fillable = ['nome', 'descricao'];

    public function nodos()
    {
        return $this->hasMany(NoTriagem::class, 'departamento_id');
    }
}
