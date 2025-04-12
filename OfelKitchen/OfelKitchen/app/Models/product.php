<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'stok',
    ];

    /**
     * The attributes that should be cast.
     * Optional: untuk memastikan tipe data
     *
     * @var array<string, string>
     */
    protected $casts = [
        'harga' => 'decimal:2', // Casting ke decimal dengan 2 angka di belakang koma
        'stok' => 'integer',
    ];
}
