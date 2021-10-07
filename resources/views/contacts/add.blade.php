@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-6 mx-auto">

            <h5 class="card-title my-3 text-center">Add new Contact</h5>
            <form class="card shadow rounded p-5" action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required class="form-control @error('name') border-danger @enderror" name="name" id="name"  placeholder="Enter the name">
                    @error('name')
                    <small  class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="Email"  required class="form-control @error('email') border-danger @enderror" name="email" id="email"  placeholder="Enter the email ">
                    @error('email')
                    <small  class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" required class="form-control @error('contact') border-danger @enderror" name="contact" id="contact"  placeholder="Enter the contact number">
                    @error('contact')
                    <small  class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-primary">
                    <input type="reset" value="reset"  class="btn btn-secondary">
                </div>
            </form>
        </div>

        </div>
    </div>
</div>

@endsection
