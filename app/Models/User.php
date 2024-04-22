<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; 

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'phone', 'date_of_birth'];

    /**
     * Get the user's age.
     *
     * @return int
     */
    public function getAgeAttribute()
    {
        return Carbon::parse($this->date_of_birth)->age;
    }
}
