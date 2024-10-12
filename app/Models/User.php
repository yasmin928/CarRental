<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable  implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Accessor to convert the active status to a string.
     *
     * @param  bool  $value
     * @return string
     */
    public function getActiveAttribute($value)
    {
        return $value ? 'Yes' : 'No';
    }

    public function testimonials(){
        return $this->hasMany(Testimonial::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class , 'role_user');
    }
    // Check if the user has the admin role
    public function isAdmin()
    {
        // Assuming the role name for admins is 'admin'
        return $this->roles()->where('role_name', 'admin')->exists();
    }
}
