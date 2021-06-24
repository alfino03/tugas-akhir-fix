<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi= User::all();
        return view('admin.lokasi',compact('lokasi'));
    }

}
