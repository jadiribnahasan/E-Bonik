<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retailers extends Model
{
    use HasFactory;
    protected $table="retailers";
    protected $fillable=['id','company','product_name','product_quantity','order_date','payment','delivery_date'];
}
