<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
    	$data = Customer::all();
    	return view('customer.index', compact('data'));
    }

    public function create()
    {
    	return view('customer.create');
    }

    public function store(Request $request)
    {
        $data = new Customer;
        $fname = request('nama_depan');
        $lname = request('nama_belakang');
        $data->nama_depan = $fname;
        $data->nama_belakang = $lname;
        $data->nama_lengkap = $fname.' '.$lname;
        $data->fastel1 = request('fastel1');
        $data->email = request('email');
        $data->no_hp = request('no_hp');
        $data->alamat1 = request('alamat1');
        $data->save();

        return redirect('/customers');
    }
}
