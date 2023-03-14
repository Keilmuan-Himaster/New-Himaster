<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Event;
use App\Models\EventUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check = Auth::check();
        if($check){
            $user = Auth::user();
            $currentTime = Carbon::now()->toTimeString();
            if($currentTime > '00:00:00' && $currentTime < '06:00:00'){
                $currentTime = 'Subuh';
            }
            else if ($currentTime > '06:00:00' && $currentTime < '11:00:00'){
                $currentTime = 'Pagi';
            }
            else if ($currentTime > '11:00:00' && $currentTime < '15:00:00'){
                $currentTime = 'Siang';
            }
            else if ($currentTime > '15:00:00' && $currentTime < '18:00:00'){
                $currentTime = 'Sore';
            }
            else {
                $currentTime = 'Malam';
            }
            // dd($currentTime);
            $event = $user->event;
            $check_code = $user->event;
            $data = Data::where('user_id',$user->id)->latest()->pluck('code_id')->toArray();
            // dd($data);
            $waktu = Carbon::now();
            return view('frontend.presensi.index',compact(['user','event','check_code','data','currentTime','waktu']));
        }
        else{
            return view('frontend.presensi.index');
        }
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
        // dd($request);
        $user = Auth::user();
        $request->validate([
            'code' => 'required',
        ]);
        $code = Data::where('code_id', $request->code_id)->where('user_id',$user->id)->get()->first();
        $currentTime = Carbon::now('Asia/jakarta');
        if($request->code == $request->cek){
            if(isset($code)){
                Alert::error('Anda sudah mengisi');
                return redirect()->back();
            }
            else {
                Data::create(
                    [
                        'user' => $user->name,
                        'code_id'=> $request->id,
                        'user_id'=> $user->id,
                        'description'=> $request->description,
                        'title' => $request->title,
                        'time' => $currentTime->toDateTimeString(),
                    ]
                );
                Alert::success('Sukses');
                return redirect()->back();
            }
        }
        else  {
            Alert::error('Kode Salah');
            return redirect()->back();
        }
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
    public function addEvent(Request $request){
        $check = Event::where('name', $request->check_code)->value('id');
        // dd($check);
        if (isset($check)){
            $test = EventUser::where('user_id', Auth::user()->id)->where('event_id', $check)->get()->first();
            // dd($test);
            if(isset($test)){
                Alert::error($request->name . ' Sudah terdaftar pada kegiatan ini');
                return redirect()->back();
            }
            else{
                EventUser::create([
                    'event_id' => $check,
                    'user_id' => Auth::user()->id,
                ]);
                Alert::success('Success');
                return redirect()->back();
            }
        }
        else{
                Alert::error('Kode salah');
                return redirect()->back();
        }
    }
}
