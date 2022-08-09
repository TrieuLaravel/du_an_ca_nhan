<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table="users";
    protected $fillable =['account_id','image_url','fullname','sex','birthday','citizen_ID','address','phone','email','status','permission','created_at','updated_at'];
    public function account() {
        return $this->hasOne('App\Models\Account','id','account_id');
    }
    public function invoiceProvided() {
        return $this->hasOne('App\Models\InvoiceProvided','account_id','id');
    }
    public function invoice() {
        return $this->hasMany('App\Models\Invoice','account_id','id');
    }
    public function product() {
        return $this->hasMany('App\Models\Product','account_id','id');
    }

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

}
