<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idkelas');
    }
}
