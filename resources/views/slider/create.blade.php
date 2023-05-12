@extends('layouts.app')

@section('title','Data Slider')

@section('content')

    <div class="container">
        <a href="/sliders" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12 ">
                <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Service</label>
                        <input type="text" class="form-control" name="service_name" placeholder="Nama Service">
                        @error('service_name')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                        @error('description')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="image" >
                        @error('image')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <button class="submit btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection