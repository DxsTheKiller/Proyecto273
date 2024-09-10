<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'imagen_path' ,'precio', 'stock'];

    public function artesano()
    {
        return $this->belongsTo(Artesano::class);
    }

    public function reseña()
    {
        return $this->hasMany(Reseña::class);
    }
    public function promocione()
    {
        return $this->hasOne(Promocione::class);
    }
    public function detalle_compra()
    {
        return $this->hasMany(Detalle_Compra::class);
    }

    public function hanbleUploadImage($image){
        $file=$image;
        $name=time() . $file->getClientOriginalName();
        /*$file->move(public_path().'/img/productos/', $name);*/
        Storage::putFileAs('/public/productos/', $file, $name,'public');
        return $name;
    }
}
