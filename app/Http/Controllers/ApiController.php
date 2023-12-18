<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Referensi;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function module(Request $request)
    {
        $token = '25d55ad283aa400af464c76d713c07ad';
        $headerValue = $request->header('token');

        if ($headerValue == $token) {

            $module = Module::orderBy('id', 'DESC')->get();

            return response()->json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $module,
            ]);
        } else {
            $data = [
                'status' => 400,
                'message' => 'Token Salah',
            ];
            return response()->json(['data' => $data]);
        }
    }

    public function referensi(Request $request)
    {
        $token = '25d55ad283aa400af464c76d713c07ad';
        $headerValue = $request->header('token');

        if ($headerValue == $token) {

            $referensi = Referensi::orderBy('id', 'DESC')->get();

            return response()->json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $referensi,
            ]);
        } else {
            $data = [
                'status' => 400,
                'message' => 'Token Salah',
            ];
            return response()->json(['data' => $data]);
        }
    }

    public function student(Request $request)
    {
        $token = '25d55ad283aa400af464c76d713c07ad';
        $headerValue = $request->header('token');

        if ($headerValue == $token) {

            $student = Student::orderBy('id', 'DESC')->get();

            return response()->json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $student,
            ]);
        } else {
            $data = [
                'status' => 400,
                'message' => 'Token Salah',
            ];
            return response()->json(['data' => $data]);
        }
    }

    public function user(Request $request)
    {
        $token = '25d55ad283aa400af464c76d713c07ad';
        $headerValue = $request->header('token');

        if ($headerValue == $token) {

            $user = User::orderBy('id', 'DESC')->get();

            return response()->json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $user,
            ]);
        } else {
            $data = [
                'status' => 400,
                'message' => 'Token Salah',
            ];
            return response()->json(['data' => $data]);
        }
    }

    public function login(Request $request)
    {
        $token = '25d55ad283aa400af464c76d713c07ad';

        // dd($token);
        $headerValue = $request->header('token');

        $email = strip_tags($request->input('email'));
        $password = strip_tags($request->input('password'));

        $user = User::where('email', $email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $user = Auth::user();
            if ($user) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Login Berhasil',
                    'data' => $user,
                ]);
            } else {
                return response()->json([
                    'status' => 400,
                    'message' => 'Login Gagal, Silahkan Perikasa kembali username dan password anda',
                ]);
            }
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Login Gagal, Silahkan Perikasa kembali username dan password anda',
            ]);
        }
    }

    public function register(Request $request)
    {
        $nama = $request->input('nama');
        $no_hp = $request->input('no_hp');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $email = $request->input('email');
        $password = $request->input('password');

        $cekEmail = Student::where('email', $email)->first();
        if ($cekEmail) {
            return response()->json([
                'status' => 400,
                'message' => 'Email Sudah digunakan'
            ],);
        }

        $student = Student::create([
            'nama' => $nama,
            'no_hp' => $no_hp,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Registrasi Berhasil'
        ],);
    }

    public function logout(Request $request)
    {

        $token = '25d55ad283aa400af464c76d713c07ad';
        $headerValue = $request->header('token');

        $user = auth()->user();
        if (!$user) {
            return response()->json([
                'status' => 400,
                'message' => 'User is not logged in'
            ],);
        }

        if ($headerValue == $token) {
            Auth::logout();
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil Logout',
            ]);
        } else {
            $data = [
                'status' => 400,
                'message' => 'Token Salah',
            ];
            return response()->json(['data' => $data]);
        }
    }
}
