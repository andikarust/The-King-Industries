@extends('layouts.app')

@section('title','Data Slider')

@section('content')

    <div class="container">
        <a href="/sliders" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12 ">
                <form action="{{route('sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$slider->title}}">
                        @error('title')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$slider->description}}

                        </textarea>
                        @error('description')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <img src="/image/{{$slider->image}}" alt="" class="img-fluide" width="240">
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