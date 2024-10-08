<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    //SoftDeletes -> Archiving Purposes (deleted_at)

    protected $fillable = [
        'title',
        'post_content',
        'user_id',
    ];

    public function user(){

        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
