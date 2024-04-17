<?php

namespace SultanulArefin\PasswordChangedNotification\Tests\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use SultanulArefin\PasswordChangedNotification\Contracts\PasswordChangedNotificationContract;
use SultanulArefin\PasswordChangedNotification\Traits\PasswordChangedNotificationTrait;

class User extends Authenticatable implements PasswordChangedNotificationContract
{
    use HasFactory, Notifiable, PasswordChangedNotificationTrait;

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
