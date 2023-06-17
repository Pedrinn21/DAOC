<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Lista extends Model{
    use HasFactory;

    protected $table = 'list';

    protected $fillable = [
        'user_id',
        'lixo_id'
    ];
}