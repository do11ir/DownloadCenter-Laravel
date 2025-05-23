<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\File;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
       'name', 'email', 'password', 'role', 'student_id', 'master_id', 'approved'
    ];
    protected $casts = [
        'approved' => 'boolean',
    ];

    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function isMaster() {
        return $this->role === 'master';
    }

    public function isStudent() {
        return $this->role === 'student';
    }

    public function files(){
    return $this->hasMany(File::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
}
