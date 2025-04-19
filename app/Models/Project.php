<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
        /** @use HasFactory<\Database\Factories\UserFactory> */
        use HasFactory, Notifiable;
    
        protected $fillable = [
            'code_name',
            'lore',
        ];
    
}
