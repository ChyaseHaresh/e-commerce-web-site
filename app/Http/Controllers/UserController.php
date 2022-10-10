<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $socialuser = Socialite::driver('google')->user();
        // $this->createOrUpdateUser($socialuser, 'google');

        // dd($socialuser->getAvatar());

        $user = User::where(['email' => $socialuser->getEmail()])->first();
        if (!$user) {
            // Auth::logout();
            // $request->session()->invalidate();
            // $request->session()->regenerateToken();

            $user = User::firstOrCreate([
                'name' => $socialuser->name,
                'email' => $socialuser->email,
                'avatar' => $socialuser->avatar,
                'provider_id' => $socialuser->id,
                'provider' => "GOOGLE",
            ]);
        }

        Auth::login($user);
        Session::put('uid', $user->id);
        Session::put('u_name', $user->name);
        return redirect('/');
    }

    private function createOrUpdateUser($data, $provider)
    {
        $user = User::where('email', $data->email)->first();
        if ($user) {
            $user->update([
                'provider' => $provider,
                'provider_id' => $data->id,
                'avatar' => $data->avatar,
            ]);
        } else {
            $user = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'provider' => $provider,
                'provider_id' => $data->id,
                'avatar' => $data->avatar,
            ]);
        }
        Auth::login($user);
        return redirect('/');

    }

    public function registration_process(Request $request)
    {
        $valid = Validator::make($request->all(), [
            "fullname" => 'required',
            "email" => 'required|email|unique:users,email',
            "password" => 'required',
            "phone" => 'required|numeric|max:15|min:10',
        ]);
        $arr = [
            "name" => $request->fullname,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "phone" => $request->phone,
        ];
        $query = DB::table('users')->insert($arr);
        if ($query) {
            $model = User::where('email', $request->email)->first();
            Auth::login($model);
            return redirect('/');

        }
    }

    public function login_process(Request $request)
    {

        $result = DB::table('users')
            ->where('email', $request->email)
            ->get();

        if (isset($result[0])) {
            // $db_pwd = Crypt::decrypt($result[0]->password);
            // dd($result[0]);
            // die;
            if (Hash::check($request->password, $result[0]->password)) {

                $model = User::where('email', $request->email)->first();

                Auth::login($model);
                return redirect('/');

            } else {
                $status = "error";
                echo "Please enter valid password";
            }
        } else {
            $status = "error";
            echo "Please enter valid email id";
        }
        //$request->password
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
