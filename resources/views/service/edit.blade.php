@extends('layouts.app')

@section('title','Data Service')

@section('content')

    <div class="container">
        <a href="/services" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12 ">
                <form action="{{route('services.update', $service->id_service)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Service</label>
                        <input type="text" class="form-control" name="service_name" placeholder="Judul" value="{{$service->service_name}}">
                        @error('service_name')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$service->description}}

                        </textarea>
                        @error('description')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <img src="/image/{{$service->image}}" alt="" class="img-fluide" width="240">
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