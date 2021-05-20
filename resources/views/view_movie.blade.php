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
                <th scope='col'>Image</th>
                <th scope='col'>Descrition</th>
                <th scope='col'>director</th>
                <th scope='col'>rate</th>
                <th scope='col'>Insert Screens</th>
                <th scope='col'>Insert Cast</th>
            </tr>
            </thead>

            @foreach ($affected as $pro)
                <tr>
                    <td class="id">{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td><img src="images/{{$pro->image}}" width="100px" height="150px"></td>
                    <td>{{$pro->description}}</td>
                    <td>{{$pro->director}}</td>
                    <td>{{$pro->rate}}</td>
                    <td>
                       <a href="{{route('theatre.create',['id' => $pro->id])}}" style="text-decoration:none;">THEATRE</a>
                    </td>
                    <td>
                        <a href="{{route('actor.create',['id' => $pro->id])}}" style="text-decoration:none;"> ACTOR</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection