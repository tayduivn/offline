<?php

namespace App\Shop\Customer;

use App\Shop\Addresses\Address;
use App\Shop\Orders\Order;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomerStatus extends Authenticatable
{
    use Notifiable;
    protected $table = 'oad_status';




    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'status'
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

    protected $dates = ['deleted_at'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'customers.name' => 10,
            'customers.email' => 5
        ]
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany(Address::class)->whereStatus(true);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * @param $term
     *
     * @return mixed
     */
    public function searchCustomer($term)
    {
        return self::search($term);
    }
}
