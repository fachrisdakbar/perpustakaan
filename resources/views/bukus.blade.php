@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perpustakaanku') }}</div>
<!-- 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> -->
  <button type="button" class="btn btn-primary" href="http://localhost:8000/bukus/create" >Tambah Buku</button>
    </div>
    @foreach($bukus as $b)
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body" pos>
     
        <h5 class="card-title">{{$b->judul}}</h5>
        <p class="card-text">{{$b->sinopsis}}</p>
        <a href="{{ route('bukus.edit',$b->id_buku) }}" class="btn btn-info">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('bukus.destroy',$b->id_buku) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        <!-- <button type="button" class="btn btn-success" href="/bukus/{{$b->id_buku}}/edit">Edit</button>
        <button type="button" class="btn btn-danger"action="/bukus/{{$b->id_buku}}/edit" >Delete</button> -->
      </div>
      <div class="card-footer">
      
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
 
 
 

</div>
@endforeach
</div>
@endsection

<script>
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
