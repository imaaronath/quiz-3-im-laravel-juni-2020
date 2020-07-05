@extends('welcome')

@section('content')
<form action="/article/{{$item->id}}" method="POST">
@method('put')
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="judul" value="{{$item->judul}}"placeholder="Title">
</div>
    <div class="form-group">
    <label for="context">Context</label>
    <input type="text" class="form-control" id="context" value="{{$item->isi}}"name="isi"placeholder="Context">
<div class="form-group">
    <label for="tag">Tag</label>
    <input type="text" class="form-control" id="tag" value="{{$item->tag}}"name="tag"placeholder="Hashtag">
<div class="form-group">
    <label for="slug">slug</label>
    <input type="text" class="form-control" id="slug" value="{{$item->slug}}"name="slug"placeholder="Slug">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection