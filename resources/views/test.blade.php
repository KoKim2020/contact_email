@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <form method="post" action="{{ route('test.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="" placeholder="Enter Name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter your message</label>
                    <textarea  class="form-control @error('message') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                    @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>       
    </div>
@endsection