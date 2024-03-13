<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table='projects';
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
    }
    

    };

