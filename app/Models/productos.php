detalle<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected  $fillable = ["cotigo","categoria","producto","descripcion","detalle","alto","ancho","cantidad","material","imagen","img2","img3","costo","neto","iva","total","stock"];
}
}
