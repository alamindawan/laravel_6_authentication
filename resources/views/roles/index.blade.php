@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <h3>Role List</h3>
        </div>
        <div class="col-md-12">
            <a href="{{URL::to('roles/create')}}" class="btn btn-info" role="button">Create New</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Info</th>
                        <th>User Level</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($targetArr as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->info}}</td>
                        <td>{{$item->level}}</td>
                        <td>{{$item->createdAt}}</td>
                        <td>
                            <a href="{{ route('roles.edit',$item->id)}}" class="btn btn-info">Edit</a>
                            <form action="{{ route('roles.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
