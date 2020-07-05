@extends('welcome')

@section('content')
<form action='/article' method='POST'>
@csrf
    <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name='judul' placeholder="Title">
</div>
<div class="form-group">
    <label for="context">Context</label>
    <input type="text" class="form-control" id="context" name="isi" placeholder="context">
</div>
<div class="form-group">
    <label for="tag">Tag</label>
    <input type="text" class="form-control" id="tag" name="tag" placeholder="hashtag">
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection