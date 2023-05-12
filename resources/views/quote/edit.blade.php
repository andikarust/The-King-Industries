@extends('layouts.app')

@section('title','Data Quote')

@section('content')

    <div class="container">
        <a href="/quotes" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12 ">
                <form action="{{route('quotes.update', $quote->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="">Quote</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Quote">{{$quote->description}}

                        </textarea>
                        @error('description')
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