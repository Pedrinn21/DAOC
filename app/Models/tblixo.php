<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class tblixo extends Model{
    use HasFactory;

    protected $table = 'tblixo';

    protected $fillable = [
        'nome',
        'tipolixo',
        'infolixo',
        'carac',
        'descarte'
    ];
}