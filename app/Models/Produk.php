<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table="produk";
    // protected $primaryKey="id";
    protected $fillable=['id','nama_produk','brand_id','stok','deskripsi','lokasi','foto_produk'];

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
}
