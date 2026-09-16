<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $datas = Order::paginate(10);
        return view('data',compact($datas));
    }

    public function create()
    {

    return view('')

    }



}
