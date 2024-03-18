<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    use HasFactory;
    protected $table='projects';
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
    

    public function getLamaPekerjaanAttribute()
    {
        // Menghitung selisih hari antara tanggal sekarang dan tanggal selesai kontrak
        $selesaiKontrak = Carbon::parse($this->selesai_kontrak);
        return Carbon::now()->diffInDays($selesaiKontrak);
    }
    };

