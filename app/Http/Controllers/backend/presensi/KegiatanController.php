<?php

namespace App\Http\Controllers\backend\presensi;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Event;
use App\Models\Structure;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $tags = Event::latest()->get();
            return DataTables::of($tags)
                ->addColumn('action', function ($content) {

                    return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pen"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                                 <a href="'.route('kode.show',$content->id).'" class="btn btn-warning btn-sm showProduct"><i class="fa fa-eye"></i></a>
                        ';
                })
                ->removeColumn('id')
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = "KEGIATAN";
        $data['structure'] = Structure::all();
        return view('backend.presensi.kegiatan.index', compact('data'));
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
        $request->validate([
            'name' => 'required',
            'structure_id' => 'required',
        ]);

        $currentTime = Carbon::now();
        Event::updateOrCreate(
            ['id' => $request->id],
            [
                'name' => $request->name,
                'status' => 1,
                'structure_id' => $request->structure_id
            ]
        );
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
        $data = Event::find($id);
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
        $data = Event::find($id)->delete();
        return response()->json(['message', 'deleted success']);
    }
}
