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
  <!-- <button type="button" class="btn btn-primary" href="{{ route('bukus.create') }}" >Tambah Buku</button> -->
  <div class="pull-right" width="100%">
                <a class="btn btn-primary" href="{{ route('bukus.create') }}"> Tambah Buku</a>
            </div>
    </div>
    
    @foreach($bukus as $b)
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body" pos>
     
        <h5 class="card-title">{{$b->judul}}</h5>
        <p class="card-text">{{$b->sinopsis}}</p>
        <a href="{{ route('bukus.edit',$b->id_buku) }}" class="btn btn-success">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('bukus.destroy',$b->id_buku) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
      </div>
      <div class="card-footer">
      
        <small class="text-muted">Last updated {{$b->updated_at}} ago</small>
      </div>
    </div>
  </div>
  
  <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body" pos>
     
        <h5 class="card-title">{{$b->judul}}</h5>
        <p class="card-text">{{$b->sinopsis}}</p>
        <a href="{{ route('bukus.edit',$b->id_buku) }}" class="btn btn-success">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('bukus.destroy',$b->id_buku) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
      </div>
      <div class="card-footer">
      
        <small class="text-muted">Last updated {{$b->updated_at}}</small>
      </div>
    </div>

    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body" pos>
     
        <h5 class="card-title">{{$b->judul}}</h5>
        <p class="card-text">{{$b->sinopsis}}</p>
        <a href="{{ route('bukus.edit',$b->id_buku) }}" class="btn btn-success">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('bukus.destroy',$b->id_buku) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
      </div>
      <div class="card-footer">
      
        <small class="text-muted">Last updated {{$b->updated_at}}</small>
      </div>
    </div>

  
 
 

</div>
@endforeach
</div>
@endsection
