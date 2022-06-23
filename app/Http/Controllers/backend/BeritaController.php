<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Img;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $contents = Content::latest()->get();
            return DataTables::of($contents)
               ->addColumn('category', function ($item) {
                  return $item->category->name;
               })
               ->addColumn('tag', function ($item) {
                  $name = "";
                  $tag = $item->tags->map(function ($data) {
                     return $data->name;
                  });
                  if (count($tag) > 0) {
                     for ($i = 0; $i < count($tag); $i++) {
                        $name = $name . $tag[$i] . ", ";
                     }
                  } else {
                     $name = "-";
                  }

                  return $name;
               })
               ->addColumn('gambar', function ($content){
                    $gambar = 'berita.index';
                    return '<a href="/admin/berita/show/'.$content->id .'" class="edit btn btn-success btn-sm"><i class="bi bi-card-image"></i></a>';

               })
               ->addColumn('action', function ($content) {
                    return '
                            <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                    ';
               })
               ->addColumn('status', function ($content) {
                  if ($content->status == true) {
                     return '
                              <a class="btn btn-success btn-trans btn-sm" >Published</span></a>
                           ';
                  } else {
                     return '
                        <a class="btn btn-warning btn-trans btn-sm" >Draft</span></a>
                           ';
                  }
               })
               ->removeColumn('id')
               ->addIndexColumn()
               ->rawColumns(['action', 'status','gambar'])
               ->make(true);
         }
        $data['tag'] = Tag::all();
        $data['category'] = Category::all();
        $data['title'] = 'Berita';

        return view('backend.berita.index',compact('data'));
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
        $data =Content::updateOrCreate(
                [
                    'id' => $request->get('id'),
                ],
                [
                    'title' =>$request->get('title'),
                    'body' =>$request->get('body'),
                    'slug' => Str::slug($request->get('title')),
                    'category_id' =>$request->get('category_id'),
                    'status' => false,
                ]
            );
        $data->tags()->attach($request->tag_id);
// dd(Category::find($data->category_id)->name);
        $path = null;
        if ($request->gambar) {
            $name_picture = $request->judul . ' '. Str::random(6) .'.webp';
            $picture = Img::make($request->gambar)->resize(null, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('webp', 100);
            $namePath =  $namePath = strtolower(Category::find($data->category_id)->name);
            $path = $namePath . "/" . $name_picture;
            Storage::put("public/" . $path, $picture);

            if ($path != null) {
                $data->files()->updateOrcreate(['type' => 'image', 'link' => $path]);
            }

        }
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
        $get = Content::find($id);
        // dd($get);
        $data = $get->files;
        // $data = Gambar::where('gambars_id',$id)->where('gambars_type', 'App\Models\Berita')->get();
        // dd($data);
        $title = $get->judul;
        return view('backend.berita.gambar', compact(['data','title']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Content::find($id);
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
        $data = Content::find($id);
    }
}
