@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            @if(Auth::user()->level == 1)
            <h3>Admin List</h3>
            @else
            <h3>Customer List</h3>
            @endif
        </div>
        <div class="col-md-12">
            <a href="{{URL::to('customers/create')}}" class="btn btn-info" role="button">Create New</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($targetArr as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="" class="btn btn-info">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
