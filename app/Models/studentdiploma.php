<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\studentdiploma as Authenticatable;
use Illuminate\Notifications\Notifiable;

class studentdiploma extends Model
{
    use HasFactory,Notifiable;
    protected $table ="studentdiplomas";

         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Diploma_type',
        'Diploma_group',
        'Diploma_School name',
        'Diploma_scale',
        'Diploma_cgpa',
        'Diploma_grade',
        'Diploma_passing year',
        'Diploma_duration',
        'email'
    ];
}
