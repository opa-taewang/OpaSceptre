<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // Event to Create profile table on setup
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            // Move visitor's cart to user
            $update = DB::table('carts')
                // ->where('identifier', $_COOKIE[strtolower(env('APP_NAME') . '_cart')])
                ->update([
                    'user_id' => Auth::id(),
                    'identifier' => NULL
                ]);
            \App\MyCookie::visitorIdDelete();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'first_name', 'last_name', 'middle_name', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function wishlists()
    {
        return $this->belongsTo(Wishlist::class);
    }

    public function shippingaddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }

    public function products()
    {
        return $this->belongsToMany(Wishlist::class);
    }
}
