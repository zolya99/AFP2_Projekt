<?php

namespace App\Models;

use App\Models\Addresses;
use App\Helpers\AppHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpFoundation\Cookie;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birth',
        'sex',
        'address',
        'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * @var mixed
     */
    private $billing;
    /**
     * @var mixed
     */
    private $shipping;

    /**
     * @var mixed
     */


    public static function testUser() : User
    {
        $users = User::query()->where('id', '=', '0');
        if($users->count() > 0)
            return $users->get()->last();
        factory(User::class)->create();
        return User::all()->last();

    }

    public function billing(){
        if($this->billing)
            return Addresses::find($this->billing);
        return null;
    }

    public function shipping(){
        if($this->shipping)
            return Addresses::find($this->shipping);
        return null;
    }

    public static function cart(){
        $order_id = Order::getCartIDFor(User::whoami());
        $packages = Package::forOrder($order_id);
        $ans = [];
        foreach ($packages as $pack){
            array_push($ans, ['products' => Drink::find($pack->id), 'count' => $pack->quantity]);
        }
        return $ans;
    }

    public static function whoami(){
        if (Auth::check()) {
            $user_id = Auth::id();
        } else {
            /*$user_id = Cookie::get('guest_id');
            if(strlen($user_id) > 10){
                $user_id = Crypt::decryptString($user_id);
            }*/
        }
        return $user_id ?? AppHelper::generateUserID();
    }
}
