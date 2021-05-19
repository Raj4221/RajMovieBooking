@extends('layouts.app')
@section('content')

{{session()->put("id",request()->route('id'))}}
<book-component></book-component>

@endsection