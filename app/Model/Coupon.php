<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public $timestamps = true;
    protected $guarded = array();  // Important
    protected $table = 'coupons';
}
