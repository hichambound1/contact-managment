@extends('layouts.app')
@section('content')

<div class="container">

    <a href="{{route('contact.create')}}" class="btn btn-primary">Add new Contact</a>
    @if (session('msg'))
    <div class="alert alert-success my-3">
        {{ session('msg') }}
        <span class="close" data-dismiss="alert">&times;</span>
    </div>
@endif
    <div class="row ">
        <div class="card w-100 mt-5 shadow rounded p-3">
            <h2 class="card-title d">List of Contacts </h2>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)

                    <tr>
                        <td scope="row">{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->contact}}</td>
                        <td>
                            <a href="{{route('contact.show',$contact)}}" class="btn btn-success""><i class="fas fa-eye"></i></a>
                            <a href="{{route('contact.edit',$contact)}}"  class="btn btn-warning""><i class="fas fa-edit"></i></a>
                            <form method="POST" action="{{route('contact.destroy',$contact)}}">
                                @method('DELETE')
                                @csrf
                                <button  onclick="return confirm('Are you sure you want to delete this record?');"  class="btn btn-danger"">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td>
                                <h4>
                                    There no record
                                </h4>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
        </div>
    </div>

@endsection
