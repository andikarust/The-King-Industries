@extends('layouts.app')

@section('title','Data Service')

@section('content')

    <div class="container">
        
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
                    @foreach ($services as $service)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$service->service_name}}</td>
                        <td>{{$service->description}}</td>
                        <td>
                            <img src="/image/{{$service->image}}" alt="image-fluid" width="120">
                        </td>
                        <td>
                            <a href="{{route('services.edit', $service->id_service)}}" class="btn btn-warning">Edit</a>

                            <form action="{{route('services.destroy', $service->id_service)}}" method="POST">
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