<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function coments()
    {
        return $this->hasMany('App\Coment');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'website', 'experience', 'description', 'facebook', 'instagram', 'twitter', 'linkedin', 'level', 'city', 'zone', 'job', 'isEfective', 'isVisa', 'isMercadoPago', 'isMasterCard', 'whatsapp', 'age', 'category', 'img','rol', 'inhourlunes','outhourlunes', 'inhourafterlunes', 'outhourafterlunes',
        'inhourmartes','outhourmartes', 'inhouraftermartes', 'outhouraftermartes', 'inhourmiercoles','outhourmiercoles', 'inhouraftermiercoles', 'outhouraftermiercoles', 'inhourjueves','outhourjueves', 'inhourafterjueves', 'outhourafterjueves', 'inhourviernes','outhourviernes', 'inhourafterviernes', 'outhourafterviernes', 'inhoursabado','outhoursabado', 'inhouraftersabado', 'outhouraftersabado', 'inhourdomingo','outhourdomingo', 'inhourafterdomingo', 'outhourafterdomingo',
        'category2', 'category3', 'job2', 'job3'
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
}
