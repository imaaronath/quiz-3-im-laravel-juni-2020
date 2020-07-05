@extends('welcome')

@section('content')
<div class="container">           
<table class="table table-bordered">
<thead>
    <tr>
    <th>ID</th>
    <th>Isi</th>
    <th>Tag</th>
    <th>Slug</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->isi}}</td>
        <td class='badge badge-success'>{{$item->tag}}</td>
        <td>{{$item->slug}}</td>
    </tr>
</tbody>
</table>
</div>
@endsection