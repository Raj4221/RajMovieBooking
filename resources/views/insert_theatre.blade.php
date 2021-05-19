@extends('layouts.master')
@section('title',"Insert")
@section('page_content')

    <form method="post" enctype="multipart/form-data" action="{{route('theatre.store')}}">
        @csrf

        <div class="form-group">
            <label for="d_branch">Movie_id</label>
            <input type="text" class="form-control form-control-sm" name="m_id" value="<?php echo $_REQUEST['id'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="d_branch">name</label>
            <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="d_branch">city</label>
            <input type="text" class="form-control form-control-sm" name="city" placeholder="Enter city">
        </div>
        <div class="form-group">
            <label for="d_branch">rate</label>
            <input type="text" class="form-control form-control-sm" name="rate" placeholder="Enter rate">
        </div>
    

        <input type="submit" name="btnIns" value="Insert Data">
    </form>
    {{session('msg','')}}
@endsection
