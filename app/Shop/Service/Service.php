<?php
/**
 * Created by PhpStorm.
 * User: Ong Lo
 * Date: 7/29/2019
 * Time: 1:35 PM
 */

namespace App\Shop\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use Notifiable;
    protected $table = 'services';
    protected $fillable = [
        'name',
        'descriptions',
        'status',
        'created_at',
        'updated_at'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

}
