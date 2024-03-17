<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Type\NullType;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('blog.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);



        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->content = $request->content;
        $blog->user_id = auth()->id();

        $filename = $this->imageUpload($request);
        $blog->image = $filename;
        $blog->save();

        return redirect()->back()->withSuccess(' Blog Created');
    }

    protected function imageUpload($request): string
    {
        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/', $filename);
            return $filename;
        }
        return null;
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.create', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newFile= $blog->image;
        if ($request->hasFile('image')) {
            //If new image is selected, remove the old one from path and 
            //then upload new one and update information accordingly
            $oldFilePath = $blog->image;
            if (Storage::exists($oldFilePath)) {
                Storage::delete($oldFilePath);
            }
            $newFile = $this->imageUpload($request);
        }
        

        $blog->fill([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $newFile
        ])->save();

        return redirect()->back()->withSuccess('Blog edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->back()->withSuccess('Blog Deleted.');
    }
}
