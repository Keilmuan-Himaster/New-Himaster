<?php

namespace App\Http\Controllers\backend\master_data;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use App\Models\Timeline;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if($request->year!= null){
               $year = intval($request->year);
               $structures = Structure::where('year',$year)->get();
            }else{
               $latestyear = Structure::orderBy('year','desc')->first();
               $structures = Structure::where('year',$latestyear->year)->get();

            }

            return DataTables::of($structures)
            ->addColumn('image', function ($structure) {
               if(count($structure->files)>0){
                  return '
               <img height="200px" src="'.asset('storage/'.$structure->files->first()->link).'">
                        ';
               }else{
                  return'';
               }

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
        $data['title'] = "STRUCTURE";
        $data['year'] = Structure::all()->unique('year')->sortByDesc('year');

        return view('backend.master_data.struktur.index', compact('data'));
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
        $data = Structure::updateOrCreate(
            ['id'=> $request->id],
            [
            'name'=> $request->name,
            'year' => $request->year,
            'description' => $request->description,
        ]
    );
    $path = null;
    if ($request->file('image')) {
        $name_picture = Str::random(6) . '.png';
        $picture = Image::make($request['image'])->resize(null, 300, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->encode('png', 100);
        $namePath = "structures";
        $path = $namePath . "/" . $name_picture;

        Storage::put("public/" . $path, $picture);
        // dd(Storage::exists($content->images));
    }
    if ($path != null) {
        $data->files()->create(['link' => $path, 'type' => 'image']);

    }

     //   dd($content->files);
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
        $data = Structure::find($id);
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
        $data = Structure::find($id)->delete();
        return response()->json(['message', 'deleted success']);

    }
}
