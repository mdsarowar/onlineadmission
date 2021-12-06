<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\studentaddress as Authenticatable;
use Illuminate\Notifications\Notifiable;

class studentaddress extends Model
{
    use HasFactory,Notifiable;
    protected $table ="studentaddresses";

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Department_name',
        'Program',
        'Semester',
        'name',
        'phone',
        'email',
        'Student_gender',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
