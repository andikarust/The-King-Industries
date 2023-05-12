@extends('layouts.app')

@section('title','Data Quote')

@section('content')

        
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
                        <th><center>Quote</center></th>
                </thead>
                <tbody>
                    @foreach ($quote as $quote)
                    <tr>
                        <td>{{$quote->description}}</td>
                        <td>
                            <a href="{{route('quotes.edit', $quote->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
    </div>
@endsection