@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Show details of <span class="font-weight-bold"> {{$contact->name}}</span> </h2>
    <div class="card w-100 shadow rounded p-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="row">

                <div class="col-md-6 font-weight-bolder ">The ID of record :</div>
                <div class="col-md-6">{{$contact->id}}</div>
                <div class="col-md-6 font-weight-bolder ">The Name of record :</div>
                <div class="col-md-6">{{$contact->name}}</div>
                <div class="col-md-6 font-weight-bolder ">The Email of record :</div>
                <div class="col-md-6">{{$contact->email}}</div>
                <div class="col-md-6 font-weight-bolder ">The Contact of record :</div>
                <div class="col-md-6">{{$contact->contact}}</div>
            </div>
            <div class="row my-4">

                <a href="{{route('contact.edit',$contact)}}"  class="btn btn-warning mx-3"><i class="fas fa-edit"></i>Edit</a>
                <form method="POST" action="{{route('contact.destroy',$contact)}}">
                    @method('DELETE')
                    @csrf
                    <button  onclick="return confirm('Are you sure you want to delete this record?');"  class="btn btn-danger"">
                        <i class="fas fa-trash"></i>Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
