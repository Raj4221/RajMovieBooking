@extends('layouts.master')
@section('title',"Insert")
@section('page_content')

<form method="post" action="{{route('theatre.update',$theatre->t_id]}}">
@method("put")
@csrf
<div class="form-group">
<label for="d_branch">Movie_id</label>
<input type="text" class="form-control form-control-sm" name="m_id" value="{{$theatre->m_id}}" readonly>
</div>
<div class="form-group">
<label for="d_branch">name</label>
<input type="text" class="form-control form-control-sm" name="name" value="{{$theatre->t_name}}" placeholder="Enter Name">
</div>
<div class="form-group">
<label for="d_branch">city</label>
<input type="text" class="form-control form-control-sm" name="city" value="{{$theatre->t_city}}" placeholder="Enter city">
</div>
<div class="form-group">
<label for="d_branch">rate</label>
<input type="text" class="form-control form-control-sm" name="rate" value="{{$theatre->rate}}" placeholder="Enter rate">
</div>


<input type="submit" name="btnIns" value="Update Data">
</form>
{{session('msg','')}}

@endsection