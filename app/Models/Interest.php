<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Interest Model
class Interest extends Model
{
    protected $fillable = [
        'Reading',
        'Video Games',
        'Sports',
        'Travelling'
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
