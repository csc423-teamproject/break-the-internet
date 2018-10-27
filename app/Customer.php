<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Table Name
    protected $table = 'customers';
    //Primary Key
    public $primaryKey = 'CustomerId';
    //Timestamps
    public $timestamps = false;

    //protected $fillable = ['CustomerName', 'CustomerAddress', 'City', 'StateCode', 'ZIP', 'Phone', 'email'];
}
