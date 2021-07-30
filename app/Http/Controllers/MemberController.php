<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::paginate(10);
        return view('admin.member',compact('users'));
    }

    public function destroy($id)
    {
        $users = User::find($id);

        $users->delete();
        return redirect()->route('member.index')->with('sukses','Data Brand Berhasil Dihapus');
    }

}
