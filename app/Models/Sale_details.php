<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_details extends Model
{
    use HasFactory;
    protected $fillable = ['price','quantity','sale_details','sale_id','product_id'];

    
}
