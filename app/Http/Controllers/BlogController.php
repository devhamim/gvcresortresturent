<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class BlogController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::all();

        return view('backend.blog.index', [
            'blogs'=>$blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title'         =>'required',
            'image'         =>'required',
            'description'   =>'required',
            'define'       =>'required',
        ];

        $validatesData = $request->validate($rules);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/blog'), $file_name);
            $validatesData['image'] = $file_name;
        }

        $validatesData['added_by'] = Auth::id();
        $validatesData['slug'] = Str::lower(str_replace(' ', '-', $request->title)). '-'. rand(0, 999999);

        blog::create($validatesData);
        toast('Add Success','success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = blog::find($id);
        $tagsAsString = $blogs->tags;
        return view('backend.blog.edit', [
            'blogs'=>$blogs,
            'tagsAsString'=>$tagsAsString,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title'             =>'required',
            'image'             =>'',
            // 'tags'              =>'array',
            'description'       =>'required',
            'define'            =>'required',
            'status'            =>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/blog'), $file_name);
            $validatesData['image'] = $file_name;
        }
        // if (!isset($validatesData['tags'])) {
        //     $validatesData['tags'] = [];
        // }
        // $tagsAsString = implode(',', $validatesData['tags']);
        // $validatesData['tags'] = $tagsAsString;

        blog::where('id', $id)->update($validatesData);
        toast('Update Success','success');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        blog::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }


}
