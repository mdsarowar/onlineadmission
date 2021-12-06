<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\studentssc as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class studentssc extends Model
{
    use HasFactory,Notifiable;

    protected $table ="studentsscs";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Ssc_type',
        'Ssc_group',
        'School_name',
        'Ssc_board',
        'Ssc_grade',
        'Ssc_gpa',
        'Ssc_4sub',
       
        'Ssc_roll',
        'Ssc_registration_number',
        'Ssc_passing_year',
        'Ssc_duration',
        'email'
    ];
}
