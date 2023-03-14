<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lastyear = Student::latest()->get();
        if ($request->ajax()) {
            if ($request->year != null) {
                $year = intval($request->year);

                $student = Student::where('year', $year)->get();
            } else {
                $latestyear = Structure::orderBy('year', 'desc')->first();
                $student = Student::where('year', $latestyear->year)->get();
            }

            return DataTables::of($student)
                //     ->addColumn('image', function ($data) {
                //         if (count($data->files) > 0) {
                //             return '
                //   <img height="200px" src="' . asset('storage/' . $data->files->last()->link) . '">
                //            ';
                //         } else {
                //             return '';
                //         }
                //     })


                ->addColumn('action', function ($content) {
                    return '
                          <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                          <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                          ';
                })

                ->removeColumn('id')
                ->addIndexColumn()
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        $data['title'] = "Mahasiswa Sistem Komputer";
        $latestyear = Student::orderBy('year', 'desc')->first();
        $data['student'] = Student::orderBy('year', 'desc')->get();


        $data['year'] = Student::all()->unique('year')->sortByDesc('year');

        return view('backend.mahasiswa.index', compact('data', 'latestyear'));
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
        $path = null;
        // dd($request->name);
        if (!isset($request->id)) {
            $user = User::create([
                'name' => $request->full_name,
                'nim' => $request->nim,
                'password' => Hash::make($request->nim.'_'.$request->year),
            ]);
        }
        else {
            $user = Student::find($request->id);
            $user = User::find($user->user_id)->first();
        }

        $data = Student::updateOrCreate(
            ['id' => $request->id],
            [
                'full_name' => $request->full_name,
                'nim' => $request->nim,
                'year' => $request->year,
                'address' => $request->address,
                'religion' => $request->religion,
                'phone_number' => $request->phone_number,
                'hobbies' => $request->hobbies,
                'status' => $request->status,
                'user_id' => $user->id,
            ]
        );
        if ($request->file('image')) {
            $name_picture = Str::random(6) . '.webp';
            $picture = Image::make($request['image'])->orientate()->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('webp', 100);
            //    $picture->orientate();
            $namePath = "members";
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
        $data = Student::find($id);
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
        $data = Student::find($id);
        $data = User::find($data->user_id)->delete();
        return response()->json(['message', 'deleted success']);
    }
}
