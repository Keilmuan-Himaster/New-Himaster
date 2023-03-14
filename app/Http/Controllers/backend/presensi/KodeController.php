<?php

namespace App\Http\Controllers\backend\presensi;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class KodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        //
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
        $currentTime = Carbon::now('Asia/jakarta');
        $data=Code::create([
            'title' => $request->title,
            'code' => Str::slug($request->title,'-')."-".Str::slug($currentTime->format('Y-m-d'),'-'),
            'status' => 1,
            'start' => $currentTime->toDateTimeString(),
            'end' => $currentTime->addHour()->toDateTimeString(),
            'event_id' => $request->event_id,
            'place' => $request->place,
            'link' => $request->link,
            'desc' => $request->desc,
            // 'qr' => 'qr/'.$request->title.'png',
        ]);
        $qr = QrCode::format('png')->size(500)->generate($data->code);
        // dd($qr);

        // dd(QrCode::format('png')->size(500)->generate($data->code));
        Storage::put('public/qr/'.$data->code.'.png',$qr);
        // QrCode::size(500)->format('png')->generate($data->code);
        Alert::success('Data berhasil disimpan');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if ($request->ajax()) {
            $data = Code::where('event_id', $id)->get();
            return DataTables::of($data)
                ->addColumn('action', function ($content) {
                    return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pen"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                                 <a href="" class="btn btn-warning btn-sm showProduct"><i class="fa fa-eye"></i> Aktivasi</a>
                        ';
                })
                ->addColumn('gambar',function($content){
                    return '
                    <a href="'.asset('storage/qr/'.$content->code.'.png').'" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-image"></i>Lihat Gambar</a>
                    <a href="'.asset('storage/qr/'.$content->code.'.png').'" download class="btn btn-primary btn-sm"><i class="fa fa-image"></i>Download Gambar</a>
                    ';
                })
                ->removeColumn('id')
                ->addIndexColumn()
                ->rawColumns(['action','gambar'])
                ->make(true);
        }
        $data['title'] = "Kode";
        $data['event'] = Event::find($id);
        return view('backend.presensi.kode.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Code::find($id);
        return $data;
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

        $data = Code::find($id)->delete();
        return response()->json(['message', 'deleted success']);
    }
}
