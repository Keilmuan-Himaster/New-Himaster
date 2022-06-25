<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Structure;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request->ajax()){

          $gallery = Gallery::latest()->get();
          return DataTables::of($gallery)
          ->addColumn('action', function ($content) {
             return '
             <a class="btn btn-danger btn-sm"  onclick="deleteItem(' . $content->id . ')"><i class="fa fa-trash"></i></span></a>
             <a class="btn btn-info btn-sm" onclick="editItem(' . $content->id . ')"><i class="fa fa-pencil"></i></span></a>
             ';
          })
          ->addColumn('divisi', function ($content) {
             return $content->structure->name;
          })
          ->removeColumn('id')
          ->addIndexColumn()
          ->rawColumns(['action'])
          ->make(true);
        }
        $data['title'] = 'GALLERY';
        $data['structure'] = Structure::all();
        return view('backend.gallery.index',compact('data'));
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
        $tujuan = "storage/gallery/";
      $nama_foto = time().'_'.pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME).'.webp';
      Image::make($request->image)->resize(500, null, function ($constraint) {
         $constraint->aspectRatio();
         })->encode('webp', 80)->save($tujuan.$nama_foto);

        $data = Gallery::updateOrCreate(
            ['id' => $request->id],
            [
                'title' => $request->title,
                'structure_id' => $request->structure_id,
                'gallery' => $request->gallery,
            ]
            );
        return $data;
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
        $data = Gallery::find($id);
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
        $data = Gallery::find($id)->delete();
        return response()->json(['message', 'deleted success']);
    }
}
