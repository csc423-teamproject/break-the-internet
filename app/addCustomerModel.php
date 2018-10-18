<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addCustomerModel extends Model
{
    protected $fillable = ['CustomerName', 'CustomerAddress', 'City', 'StateCode', 'ZIP', 'Phone', 'email'];
}
