<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $table = 'producto';

    protected $fillable = [
        'ID',
        'MARCA',
        'LINEA',
        'MODELO',
        'DESCRIPCION',
        'PRECIO',
        'FECHA_SALIDA',
        'IMAGEN',
        'ID_PAGINA'
    ];
    
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
