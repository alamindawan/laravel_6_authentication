@extends('layouts.app')

@section('content')
<style> 
    #example1 {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px;
    }

    #example2 {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px #888888;
    }

    #example3 {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px red;
    }
</style>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Auth::user()->level != 3)
                <div class="col-md-4">
                    <div id="example1">
                        <a href="{{URL::to('customers')}}">User Management</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="example1">
                        <a href="{{URL::to('customers')}}">Role Management</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="example1">
                        <a href="{{URL::to('customers')}}">Customer Management</a>
                    </div>
                </div>
                @endif

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br><br><br>
                <h4>Login History</h4>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>In Time</th>
                            <th>Out Time</th>
                            <th>IP Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
