<?php
namespace App\Http\Controllers;
use App\Models\LastBill;
use App\Http\Controllers\Controller;
use App\Models\NewBill;

class HomeController extends Controller
{
    public function index()
    {   
        
        return view('dashboard');
    }

    public function bill()
    {   
        $bill = LastBill::get();
        return view('Lastbill')-> with('bill', $bill);
    }

    public function newBill()
    {
        $bill = NewBill::get();
        return view('newBill')-> with('bill', $bill);
    }

    public function payment()
    {
        return view('payment');
    }
}