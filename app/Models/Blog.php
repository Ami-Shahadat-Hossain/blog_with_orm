<?php

namespace App\Models;


use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'image',
        'description'
    ];


//    public function getCreatedAtAttribute($value)
//    {
//        return Carbon::parse($value)->format('jS F');
//    }
    public function comment(){
        return $this->hasMany(Comment::class,'blogs_id');
    }

}
