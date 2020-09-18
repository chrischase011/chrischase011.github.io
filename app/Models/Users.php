<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
class Users extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    public $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    //Fields that can be filled
    protected $fillable = [
        'username', 'email','usercontrol', 'password','bday','fname','lname','company','position','business_arena','address','zip','city','country','contact', 'pic_location',
    ];
    // Use to hide the fields in an array
    protected $hidden = [
        'password', 'remember_token',
    ];
    
}
