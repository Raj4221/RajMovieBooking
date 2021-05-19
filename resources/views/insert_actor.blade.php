@extends('layouts.master')
@section('title',"Insert")
@section('page_content')

<form method="post" enctype="multipart/form-data" action="{{route('actor.store')}}">
        @csrf

        <div class="form-group">
            <label for="d_branch">name</label>
            <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="d_branch">Bio</label>
            <input type="text" class="form-control form-control-sm" name="bio" placeholder="Enter Bio">
        </div>
        <div class="form-group">
            <label for="d_branch">DOB</label>
            <input type="text" class="form-control form-control-sm" name="dob" placeholder="Enter Date Of Birth">
        </div>
    

        <input type="submit" name="btnIns" value="Insert Data">
    </form>
    {{session('msg','')}}

@endsection
