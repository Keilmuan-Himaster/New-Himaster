<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Buster;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image as Img;

class BusterController extends Controller
{
    public function index(Request $request){
      if($request->ajax()){
         $buster = Buster::latest()->get();
         return DataTables::of($buster)
         ->editColumn('image',function($data){
           return '<img src="'.asset('storage/'.$data->image).'" width="100px" height="100px">';
         })
         ->addColumn('action', function ($content) {
            return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
         })
         ->removeColumn('id')
         ->addIndexColumn()
         ->rawColumns(['action','image'])
         ->make(true);
       }
      $data['title'] = "BUSTER";
       return view('backend.buster.index', compact('data'));
    }

    public function store(Request $request){
      $tujuan = "buster/";
      $nama_foto = time().'_'.pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME).'.webp';
      $gambar = Img::make($request->image)->resize(500, null, function ($constraint) {
         $constraint->aspectRatio();
         })->encode('webp', 80);
         Storage::put('public/'.$tujuan.$nama_foto, $gambar);
        // $buster = new Buster();
        // $buster->title = $request->title;
        // $buster->link = $request->link;
        // $buster->image = $tujuan.$nama_foto;
        // // dd($buster->slug);
        // $buster->save();
        $buster = Buster::updateOrCreate(
            ['id' => $request->id],
            ['link' => $request->link,
            'title' => $request->title,
            'image' => $tujuan.$nama_foto]
            );
        return $buster;
    }

    public function edit($id)
    {
        $data = Buster::find($id);
        return response()->json($data);
    }

    public function update(Request $request, Buster $buster)
    {
        //
    }

    public function destroy(Buster $buster)
    {
        $buster->delete();
        return response()->json(['message', 'deleted success']);

    }
}
