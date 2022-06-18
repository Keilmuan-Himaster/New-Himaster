<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
                    $link = asset('storage/'.$content->files);
                    return '<img src="'.$link.'" alt="kosong">';

               })
               ->addColumn('action', function ($content) {
                  return '

                                <a class="btn btn-danger btn-sm"  onclick="deleteItem(' . $content->id . ')"><i class="fa fa-trash"></i></span></a>
                                <a class="btn btn-info btn-sm" onclick="editItem(' . $content->id . ')"><i class="fa fa-pencil"></i></span></a>
                                ';
               })
               ->addColumn('status', function ($content) {
                  if ($content->status == true) {
                     return '
                              <p class="btn btn-success btn-trans btn-sm" >Published</span></a>
                           ';
                  } else {
                     return '
                        <p class="btn btn-warning btn-trans btn-sm" >Draft</span></a>
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
