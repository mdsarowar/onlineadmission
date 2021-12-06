<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\studenthsc as Authenticatable;
use Illuminate\Notifications\Notifiable;

class studenthsc extends Model
{
    use HasFactory,Notifiable;

    protected $table ="studenthscs";
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'HSC_type',
        'HSC_group',
        'HSC_School name',
        'HSC_board',
        'HSC_grade',
        'HSC_gpa',
        'HSC_4sub',
        
        'HSC_roll',
        'HSC_registration_number',
        'HSC_passing_year',
        'HSC_duration',
        'email'
    ];
}
