@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Daftar Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pets.store') }}" method="POST">
    @csrf
 
     <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Petugas:</strong>
                <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas">
            </div>
        </div>
       
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Jenis Kelamin</strong>
            <select class="form-control" name="jk_petugas" id="jk_petugas">
                <option value="Laki-laki">Laki-laki</option>
                 <option value="Perempuan" >Perempuan</option>
                 </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level</strong>
                <select class="form-control" name="nama_level" id="nama_level">
                @foreach($levels as $level)
                <option value="{{$level->nama_level}}">{{$level->nama_level}}</option>
                @endforeach
                </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection