<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoTriagem extends Model
{
    //
      use HasFactory;
    protected $table = 'nos_triagem';


    protected $fillable = ['pergunta', 'sim', 'nao', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
