<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'identification',
        'email',
        'password',
        'role_id',
    ];

    public function isAdmin()
    {
        return $this->role_id == 2;
    }
}
