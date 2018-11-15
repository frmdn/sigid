<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
    	$data = Transaction::all();
        $user = DB::table('transactions')->join('users','transactions.petugas','=','users.nik')->get();
    	return view('transaction.index', compact('data','user'));
    }

    public function create()
    {
    	return view('transaction.create');
    }

    public function store(Request $request)
    {
        $data = new Transaction;

        $data->fastel = request('fastel');
        $data->nama_pengunjung = request('nama_pengunjung');
        $data->action = request('action');
        $data->escalation_req = request('escalation_req');
        $data->keterangan = request('keterangan');
        $data->petugas = request('petugas');
        $data->save();

        return redirect('/transactions');
    }
}
