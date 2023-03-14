<?php

namespace App\Http\Controllers\api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Data;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PresensiController extends Controller
{
    public function __construct(){

    }
    public function index() {
        $user = Auth::user();
        $getUser = Auth::user();
        $event = $getUser->event;
        // $data = Data::where('user_id', $user->id)->get();
        // dd($user->id);
        $data = Data::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        foreach ($event as $event){
            foreach($event->code as $get){
                if ($get->status == 0)
                continue;
                else {
                    $get->get();
                    // dd($d);
                }
                // dd($event);
            }
        }
        return ResponseFormatter::success([
            'user' => $getUser,
            'history' => $data
        ]);

    }
    public function login(Request $request){
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required',
            ]);
            $credentials = request(['email','password']);

            if(!Auth::attempt($credentials)){
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ],'Authentication Failed', 500);
            }

            $user = User::where('email', $request['email'])->first();

            if(!Hash::check($request['password'],$user->password, [])) {
                throw new \Exception('Invalid credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user,
            ],'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Unauthorized',
                'error' => $error,
            ],'Authentication Failed', 500);
        }
    }

    public function post(Request $request){
            $request->validate([
                'code' => 'required',
                'validate' => 'required',
                'description' => 'required|in:MOBILE-BIO,MOBILE'
            ]);
            $user = Auth::user();
            $code = Data::where('code_id', $request->id)->where('user',$user->name)->get()->first();
            // dd($code);
            $currentTime = Carbon::now('Asia/jakarta');
            if($request->code == $request->validate){
                if(isset($code)){
                    return ResponseFormatter::error([
                        'message' => 'You allready in'
                    ]);
                }
                else {
                    Data::create(
                        [
                            'user' => $user->name,
                            'code_id'=> $request->id,
                            'user_id'=> $user->id,
                            'title' => $request->title,
                            'description' => $request->description,
                            'time' => $currentTime->toDateTimeString(),
                        ]
                    );
                    return ResponseFormatter::success([
                        'message' => 'Success'
                    ]);
                }
            }
            else  {
                return ResponseFormatter::error([
                    'message' =>'wrong code'
                ]);
            }

    }

    public function register(Request $request){
        try{
            $request->validate([
                'name' => ['required','string','max:255'],
                'email' => ['required','string','max:255','unique:users'],
                'password' => ['required','string'],
            ]);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
            ]);
            $user = User::where('email',$request->email)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user,
            ], 'User Registered');
        }
        catch(Exception $error){
            return ResponseFormatter::success([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'User Unregistered', 500);
        }
    }
    public function logout(Request $request) {
        $token = $request->user()->currentAccessToken()->delete();
        return ResponseFormatter::success($token, 'Token Revoked');
    }

    public function addEvent(Request $request){
        $request->validate([
            'code' => 'required'
        ]);
        // dd($request);
        $user = Auth::user();
        $check = Event::where('name', $request->code)->value('id');
        // dd($check);
        if (isset($check)){
            $test = EventUser::where('user_id', $user->id)->where('event_id', $check)->get()->first();
            // dd($test);
            if(isset($test)){
                return ResponseFormatter::error(['message'=>$request->name . ' Sudah terdaftar pada kegiatan ini']);
            }
            else{
                EventUser::create([
                    'event_id' => $check,
                    'user_id' => $user->id,
                ]);
                return ResponseFormatter::success('Success');
            }
        }
        else{
            return ResponseFormatter::error('Kode salah');
        }
    }
}
