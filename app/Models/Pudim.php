<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pudim extends Model
{
    protected $Pudim;
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['tamanho', 'sabor', 'custo', 'marca'];
}
