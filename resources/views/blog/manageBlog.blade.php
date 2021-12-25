@extends('master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Manage blog</h4>
                            <hr>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                            @endif
                            <table class="table table-bordered table-hover">
                                <thead class="text-center text-primary">
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Author Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop ->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td><img src="{{asset($blog->image)? asset($blog->image):''}}" height="100"
                                                 width="100" alt=""></td>
                                        <td>
                                            <a href="{{route('editBlog',['id'=>$blog->id])}}" class="btn btn-warning">Edit</a>
                                            <a href="{{route('deleteBlog',['id'=>$blog->id])}}" onclick="return confirm('Are you Sure?')" class="btn btn-danger">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection