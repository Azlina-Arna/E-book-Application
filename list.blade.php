@extends('master')

@section('title', 'E-Book List')

@section('content')
<table class= "table">
    <tr>
    <th scope="row"> Title</th>
    @foreach($books['book'] as $list)
        <td>{{$list['title']}}</td>
    @endforeach
    </tr>
    <tr>
    <th scope="row"> isbn</th>
    @foreach($books['book'] as $list)
        <td>{{$list['isbn']}}</td>
    @endforeach
    </tr>
    <tr>
    <th scope="row"> category</th>
    @foreach($books['book'] as $list)
        <td>{{$list['category']}}</td>
    @endforeach
    </tr>
    <tr>
    <th scope="row"> Page</th>
    @foreach($books['book'] as $list)
        <td>{{$list['page']}}</td>
    @endforeach
    </tr>
</table>
@endsection