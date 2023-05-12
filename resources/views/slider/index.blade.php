@extends('layouts.app')

@section('title','Data Slider')

@section('content')

    <div class="container">
        <a href="/sliders/create" class="btn btn-primary mb-3">Tambah Data</a>
        
        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Judul</center></th>
                        <th><center>Deskripsi</center></th>
                        <th><center>Gambar</center></th>
                        <th><center>Aksi</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach ($sliders as $slider)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->description}}</td>
                        <td>
                            <img src="/image/{{$slider->image}}" alt="image-fluid" width="120">
                        </td>
                        <td>
                            <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-warning">Edit</a>

                            <form action="{{route('sliders.destroy', $slider->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
    </div>
@endsection