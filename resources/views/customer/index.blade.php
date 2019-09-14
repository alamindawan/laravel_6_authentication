@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <a href="{{URL::to('customers/create')}}" class="btn btn-info" role="button">Create New</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($targetArr as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
