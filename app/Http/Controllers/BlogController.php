<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    protected $blogs;
    protected $blog;


    public function addBlog()
    {
        return view('blog.addBlog');
    }

    public function newBlog(Request $request)
    {

        Blog::createBlog($request);
        return redirect()->back()->with('message', 'Blog  Post Successfully');
//        blog::create($request->all());
        return 'success';
    }

    public function manageBlog()
    {

        $this->blogs = blog::all();
        return view('blog.manageBlog', ['blogs' => $this->blogs]);
    }

    public function deleteBlog($blogId)
    {

        $this->blog = blog::find($blogId);
        if (file_exists($this->blog->image)) {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog Delete Successfully');
    }
    public function editBlog($id)
    {
        $this->blog=blog::find($id);
        return view('blog.editBlog',['blog'=>$this->blog]);
    }
    public function updateBlog(Request $request)
    {

        Blog::updateBlog($request);
        return redirect('/manageBlog')->with('message',"Blog Updated Successfully ...");
    }
}
