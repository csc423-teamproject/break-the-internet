<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RetailStore extends Model
{
    //
    protected $primaryKey = 'StoreId';
//    protected $fillable = [
//      'StoreCode', 'StoreName', 'Address',
//      'City', 'State', 'ZIP', 'Phone', 'ManagerName',
//      'ActiveStatus'
//    ];
    protected $guarded = [];
    protected $guard = [];
//
//    public function getRouteKeyName()
//    {
//        return 'StoreId';
//    }
}
