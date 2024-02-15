<?php

namespace App\Models;

use App\Models\Govofficial;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [
        'username',
        'email',
        'password',
        'type'
    ];



    /**

     * The attributes that should be hidden for serialization.

     *

     * @var array

     */

    protected $hidden = [
        'password',
        'remember_token',
    ];



    /**

     * The attributes that should be cast.

     *

     * @var array

     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /**

     * Interact with the user's first name.

     *

     * @param  string  $value

     * @return \Illuminate\Database\Eloquent\Casts\Attribute

     */

    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "manager"][$value],
        );
    }

    public function govofficial(){
        return $this->hasOne(Govofficial::class);
    }
}
