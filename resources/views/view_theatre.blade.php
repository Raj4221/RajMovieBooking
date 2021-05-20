@extends('layouts.master')
@section('title',"Insert")
@section('page_content')

<center><h1>Records</h1></center><br>
    <div class='container-fluid'>
        <table class='table table-bordered' style='margin-left: auto;margin-right: auto;width: 90%;'>
            <thead class='table-Primary'>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>name</th>
                <th scope='col'>city</th>
                <th scope='col'>rate</th>
                <th>UPDATE</th>
                <th scope='col'>remove</th>
            </tr>
            </thead>

            @foreach ($affected as $pro)
                <tr>
                    <td>{{$pro->t_id}}</td>
                    <td>{{$pro->t_name}}</td>
                    <td>{{$pro->t_city}}</td>
                    <td>{{$pro->rate}}</td>
                    <td><a href="#" style="text-decoration:none;">UPDATE</a></td>
                    <td><a href="/theatre_delete/{{$pro->t_id}}" style="text-decoration:none;">DELETE</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection