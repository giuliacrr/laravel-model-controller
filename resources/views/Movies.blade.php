@extends('Layouts.layout')
@section("title", "Movies - Homepage")

@section("content")
<h1 class="text-center text-senape mt-5 mb-2">Movie list from Database!</h1>
<div class="container pt-5 pb-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">OG Title</th>
          <th scope="col">Nationality</th>
          <th scope="col">Date</th>
          <th scope="col">Vote</th>
        </tr>
      </thead>
      <tbody>
        @foreach($movies as $movie )
        <tr>
          <th scope="row">{{$movie["id"]}}</th>
          <td>{{$movie["title"]}}</td>
          <td>{{$movie["original_title"]}}</td>
          <td>{{$movie["nationality"]}}</td>
          <td>{{$movie["date"]}}</td>
          <td>{{$movie["vote"]}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
