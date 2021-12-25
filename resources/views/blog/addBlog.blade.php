@extends('master')

@section('title')
    Add blog
@endsection

@section('body')
    <section class="PY-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header text-center">
                            @if($message=Session::get('message'))
                                <h3 class="text-danger text-center">{{$message}}</h3>
                            @endif
                            <div class="card-body">
                                <h2>Add a New Blog</h2>
                                <form action="{{route('newBlog')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3"> Blog title </label>
                                        <div class="col-md-9">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3"> Blog Author </label>
                                        <div class="col-md-9">
                                            <input type="text" name="author" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3"> Blog Description </label>
                                        <div class="col-md-9">
                                            <textarea name="description" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3"> Blog Image </label>
                                        <div class="col-md-9">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" name="" class="btn btn-success btn-block"
                                                   value="Add Blog ">
                                        </div>

                                    </div>


                                </form>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection