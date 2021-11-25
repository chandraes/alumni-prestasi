<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nama_role'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
