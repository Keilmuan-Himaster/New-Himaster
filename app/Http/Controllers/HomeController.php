<?php

namespace App\Http\Controllers;

use App\Models\Buster;
use App\Models\Content;
use App\Models\Member;
use App\Models\Structure;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function index(){
        $data['content'] = Content::latest()->get()->first();
        $latestyear = Structure::orderBy('year', 'desc')->first()->value('year');
        $data['structures'] = Structure::where('year', $latestyear)->get();
        $data['news'] = Content::latest()->take(3)->get();
        // dd($data['structures']);
        return view('frontend.home.index', $data);
    }
    public function gallery(){
        return view('frontend.gallery.index');
    }
    public function blog(){
        $data['blog'] = Content::orderBy('id','DESC')->paginate(6);
        $data['tags'] = Tag::orderBy('id','DESC')->get();
        return view('frontend.blog.index',$data);
    }
    public function singleBlog($slug){
        $data['blog'] = Content::where('slug',$slug)->first();
        $data['tags'] = Tag::orderBy('id','DESC')->get();
        $data['news'] = Content::orderBy('id','DESC')->take(4)->get();
        return view('frontend.blog.single-page.index', $data);
    }
    public function buletin(){
        $data['buster'] = Buster::all();
        return view('frontend.buletin.index',$data);
    }
    public function structure(){
        $latestyear = Structure::orderBy('year', 'desc')->first()->value('year');
        $data['structures'] = Structure::where('year', $latestyear)->get();
        return view('frontend.structure.index', $data);
    }
    public function members($id){
        $data['member'] = Member::where('structure_id', $id)->get();
        $data['structures'] = Structure::find($id);
        return view('frontend.structure.members.index', $data);
    }
}
