<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Table Name
    protected $table = 'customers';
    //Primary Key
    //Timestamps
    public $timestamps = false;

    protected $guarded = [];
    //protected $fillable = ['CustomerName', 'Address', 'City', 'StateCode', 'ZIP', 'Phone', 'email'];
}
