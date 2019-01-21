@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>New Biodata</h3>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Woops </strong> there are some problems with your input
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>        
        @endif

        <form action="{{ route('biodata.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>Name: </strong>
                    <input class="form-control" type="text" name="name" />
                </div>
                <div class="col-md-12">
                    <strong>Address: </strong>
                    <textarea class="form-control" type="text" name="address" rows="8" cols="80"></textarea>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
@endsection