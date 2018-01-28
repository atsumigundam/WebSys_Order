<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $primaryKey = "ISBN";
    public $incrementing = false;
    public $timestamps = false;
}
