<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Class Product
 * @package App
 * @mixin Eloquent
 */

class Product extends Model
{
    protected $fillable = [
        'user_id','name','price','description','slug','foto','isPublic','user_instagram','user_whatsapp','user_email','approve'
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
