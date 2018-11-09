<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
  protected $fillable = ['nombre', 'email', 'asunto', 'texto'];
  protected $table = "contact";
}
