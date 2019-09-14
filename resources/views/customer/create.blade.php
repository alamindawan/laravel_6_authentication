@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-offset-4  col-md-6">
        <h3>Create New Admin</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-3  col-md-6">
        <form action="#" id="formSubmit" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input name="name" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input name="password" type="password" class="form-control" id="pwd">
            </div>
            <button type="button" class="btn btn-default">Submit</button>
            <a href="{{URL::to('customers')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click', 'button', function () {
            var formData = new FormData($('#formSubmit')[0]);
            $.ajax({
                url: "{{URL::to('customers')}}",
                cash: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                     setTimeout(function () {
                        window.location.replace("{{URL::to('customers')}}");
                    }, 2000)
                }
            })
        });
    });
</script>
@endsection