<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'title',
        'price',
        'description',
        'image',
    ];


    //forenkey for seller deatils

    public function seller(){
        return $this->belongsTo(User::class,'seller_id');
    }

    use HasFactory;
}
