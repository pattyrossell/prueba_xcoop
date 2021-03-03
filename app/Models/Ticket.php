<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Email;

class Ticket extends Model
{
      protected $table = 'tickets';

      protected $fillable = [
          'ticket',
          'email_id',
          'expiration_date'
      ];

      public function email(){
          return $this->belongsTo(Email::class);
      }
}
