<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class UserController extends Controller
{
    public function index()
    {
        $data = UserResource::collection(User::paginate(10));
        return response()->json([
            "data" => $data
        ]);
    }
    public function store(Request $request)
    {

        $validation = $request->validate([
            "username" => "required|string",
            "email" => "required|email|string",
            "password" => "required|min:8|password",
            "phone_number" => "required | string",
            "birth_date" => "required",
            "role" => "required"
        ]);

        User::create($validation);

        return response()->json([
            "message" => "data telah ditambahkan",
        ], 200);
    }

    public function update(Request $request)
    {


        $validation = $request->validate([
            "username" => "required|string",
            "email" => "required|email|string",
            "password" => "required|min:8|password",
            "no_telp" => "required | string",
            "birth_date" => "required"
        ]);

        User::update($validation);

        return response()->json([
            "message" => "data telah di ubah",
        ], 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return response()->json([
            "status" => "succeess",
            "message" => "data berhasil dihapus"
        ]);
    }
}
