<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\studentbsc as Authenticatable;
use Illuminate\Notifications\Notifiable;

class studentbsc extends Model
{
    use HasFactory,Notifiable;

    protected $table ="studentbscs";

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'BSc_type',
        'BSc_group',
        'BSc_School name',
        'BSc_scale',
        'BSc_cgpa',
        'BSc_grade',
        'BSc_passing year',
        'BSc_duration',
        'email'
    ];
}
