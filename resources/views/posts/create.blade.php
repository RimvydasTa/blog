@extends('layouts.master')

@section('content')
    <div class="col-sm-8">


    <h1>Create a Post</h1>
    {{csrf_field()}}
        <form method="post" action="/posts">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="" >
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1" name="body" placeholder="" ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
       @include('layouts.errors.error')
    </div>
    @endsection
