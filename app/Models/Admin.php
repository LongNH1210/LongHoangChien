<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'admin_name',
        'admin_phone',
        'admin_email',
        'admin_username',
        'admin_password'
    ];
}
