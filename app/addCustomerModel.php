<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addCustomerModel extends Model
{
    protected $fillable = ['CustomerName', 'Address', 'City', 'StateCode', 'ZIP', 'Phone', 'email'];
}
