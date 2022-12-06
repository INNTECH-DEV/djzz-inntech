<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',

        // Extra
        'denumire_firma',
        'cui_firma',
        'reg_firma',
        'adresa_firma',
        'localitate_firma',
        'judet_firma',
        'capital_firma',
        'telefon_firma',
        'fax_firma',
        'email_firma',
        'website_firma',
        'aditionale_firma',
        'nume_administrator_firma',
        'email_administrator_firma',
        'telefon_administrator_firma',
        'adresa_administrator_firma',
        'oras_administrator_firma',
        'judet_administrator_firma',
        'tara_administrator_firma'
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
    ];


    /**
     * Get the clients associated with the user.
     */
    public function clients()
    {
        return $this->hasMany(Client::class, 'id_user');
    }


    public function files()
    {
        return $this->hasMany(Client::class, 'id_user');
    }
}
