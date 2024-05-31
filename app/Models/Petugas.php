<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'nama_petugas',
    ];

    public function inventaris()
    {
        return $this->hasMany(Inventaris::class,'id_petugas');
    }
        
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}