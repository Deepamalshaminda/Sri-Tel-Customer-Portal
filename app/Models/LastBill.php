<?php

namespace App\Models;

// warehouse table get data

use Illuminate\Database\Eloquent\Model;

class LastBill extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
   
    protected $table = 'last_bill';
    public $timestamps = false;

    public $fillable = ['id','data','payment','month'];

    
   
}
