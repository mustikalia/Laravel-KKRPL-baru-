<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request){
        $data = User::orderBy('id')->get();
        return response()->json(
            [
                'status'=> true,
                'message'=> 'data ditemukan',
                'data'=>$data
            ],
        );
    }

    public function tambah(Request $request){
        $request->validate([
            'Email'=> 'required|email|unique:users,Email',
            'Username'=> 'required',
            'Password'=> 'required'
        ]);
        $data = User::create([
            'Email' => $request->Email,
            'Password' => bcrypt($request->Password),
            'Username' => $request->Username
        ]);
        return response()->json('OK');
    }

    public function editan(Request $request){
        $request->validate([
            'Email'=> 'required|email|unique:users,Email,'.$request->id,
            'Username'=> 'required',
            'Password'=> 'required'
        ]);
        $data = User::where('id', $request->id)->update([
            'Email' => $request->Email,
            'Password' => bcrypt($request->Password),
            'Username' => $request->Username
        ]);
        return response()->json('Berhasil Diedit');
    }

    public function hapus(string $id){
        $data = User::find($id);
        if(empty($data)){
            return response()->json([
                'status' => false,
                'message' => 'data tidak ditemukan'
            ]);
        }
        $post=$data->delete();
        return response()->json('Data Terhapus');
    }
}
