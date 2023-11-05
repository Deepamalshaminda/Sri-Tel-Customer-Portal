<?php

namespace App\Models;

// warehouse table get data

use Illuminate\Database\Eloquent\Model;

class NewBill extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
   
    protected $table = 'new_bill';
    public $timestamps = false;

    public $fillable = ['id','data','payment','month'];

    
   
}
