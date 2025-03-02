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

     const ROLE_ADMIN = 'Admin';
     const ROLE_USER = 'User';

     const GENDER_NAM = 'Nam';
     const GENDER_NU = 'Nữ';
     const GENDER_KHAC = 'Khác';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
       
        
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

    public function donHangs (){
        return $this->hasMany(DonHang::class);
    }

    public function binhLuans(){
        return $this->hasMany(BinhLuan::class);
    }

    public function daMua($productId)
    {
        return $this->donHangs()->whereHas('chiTietDonHangs', function ($query) use ($productId) {
            $query->where('san_pham_id', $productId);
        })->exists();
    }

    public function getOrderedDonHangs()
    {
        return $this->donHangs()->orderBy('created_at', 'desc')->get();
    }
}
