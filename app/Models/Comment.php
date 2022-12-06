<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'content', 'id_client', 'sendEmail'];


    public function client()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
