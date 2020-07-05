@extends('welcome')

@section('content')
<div class="container">           
<table class="table table-bordered">
<thead>
    <tr>
    <th>ID</th>
    <th>Judul</th>
    <th></th>
    </tr>
</thead>
<tbody>
    @foreach($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->judul}}</td>
        <td>
        <a href='/article/{{$item->id}}' class = 'btn btn-sm btn-info'>Detail</a>
        <a href='/article/{{$item->id}}/edit' class = 'btn btn-sm btn-default'>edit</a>
        <form action = '/article/{{$item->id}}' method='POST' style="display:inline">
            @csrf
            @method('delete')
            <button type='submit' class='btn btn-sm btn-danger'><i class= 'fas fa-trash'></i></button>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection

@push('script')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush