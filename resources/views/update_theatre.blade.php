@extends('layouts.update')
@section('title',"Insert")
@section('page_content')

@foreach($affected as $theatre)
<form method="post" action="/update_theatre/{{$theatre->t_id}}">
@csrf
<div class="form-group">
<label for="d_branch">Theatre_id</label>
<input type="text" class="form-control form-control-sm" name="t_id" value="{{$theatre->t_id}}" readonly>
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
@endforeach

{{session('msg','')}}

@endsection