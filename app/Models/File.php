<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'path', 'category', 'id_user', 'id_client'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }


    public function client()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
