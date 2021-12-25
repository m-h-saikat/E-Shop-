<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model

{
    use HasFactory;
    protected static $blog;
    protected static $image, $imageName, $directory, $imageUrl;
    protected $fillable = ['title', 'author', 'decsription', 'image'];


    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if (self::$image) {
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = './blog-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }
        else {
            return '';
        }
    }

    public static function createBlog($request)
    {


        self::$blog = new Blog();
        self::$blog->title = $request->title;
        self::$blog->author = $request->author;
        self::$blog->description = $request->description;
        self::$blog->image = self::getImageUrl($request);
        self::$blog->save();
    }

    public static function updateBlog($request){

        self::$blog =Blog::find($request->blog_id);


if ($request->file ('image')){
    if(file_exists(self::$blog->image)){
        unlink(self::$blog->image);
    }
    self::$imageUrl = self::getImageUrl($request);
}
else{
    self::$imageUrl=self::$blog->image;
}

        self::$blog->title = $request->title;
        self::$blog->author = $request->author;
        self::$blog->description = $request->description;
        self::$blog->image =    self::$imageUrl;
        self::$blog->save();
    }

}
