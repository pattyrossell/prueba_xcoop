<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Ticket;

class Email extends Model
{
     protected $table = 'emails';

     protected $fillable = [
         'email'
         ];

     public function ticket() {
         return $this->hasMany(Ticket::class);
     }
}
