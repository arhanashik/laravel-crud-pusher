@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/sender" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <strong>Content</strong>
                    <textarea class="form-control" name="content" rows="8" cols="80"></textarea>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-sm btn-primary">Send Push</button>
                </div>
            </div>
        </form>
    </div>
@endsection