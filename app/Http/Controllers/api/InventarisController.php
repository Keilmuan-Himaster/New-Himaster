<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InventarisResource;
use App\Models\Inventaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image as Img;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'INVENTARIS';
        if ($request->ajax()) {
            $data = Inventaris::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($content) {
                    return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
                })
                ->make(true);
                return view('admin.inventaris.index',compact(['data']));
        }

        $get = Inventaris::all();
        // $test = InventarisResource::collection($get);

        return response()->json(['success' =>'Data Berhasil Diambil', 'data'=>$get]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->image) {
            $name_picture = $request->kode . '_'. $request->nama .'.webp';
            $picture = Img::make($request->image)->resize(null, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('webp', 100);
            $namePath = strtolower('inventaris');
            $path = $namePath . "/" . $name_picture;
            Storage::put("public/" . $path, $picture);
            $data = Inventaris::updateOrCreate(['id' => $request->id],
            [   'kode'=>$request->kode,
            'nama' =>$request->nama,
            'deskripsi' =>$request->deskripsi,
            'gambar' => $path
            ]
        );
        return response()->json(['success'=>'Informasi berhasil ditambahkan','data'=>$data,'gambar'=>$path]);
    }
    return response()->json(['success'=>'Informasi berhasil ditambahkan']);
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
        $data = Inventaris::find($id);

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
        Inventaris::find($id)->delete();

        return response()->json(['success'=>'data berhasil dihapus']);
    }

    public function check(Request $request){
        $request->validate([
            'kode' => 'required',
        ]);
        $data = Inventaris::where('kode', $request->kode)->first();
        if($request->kode != null){
            $data->update($request->kode);
        }
    }
}
