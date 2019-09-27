@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-offset-4  col-md-6">
        <h3>Create New Role</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-3  col-md-6">
        <form action="#" id="formSubmit" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input name="name" type="text" class="form-control" id="name" value="{{$target->name}}">
            </div>
            <div class="form-group">
                <label for="name">User Level:</label>
                <input name="level" type="number" min="0" max="3" class="form-control" id="level" placeholder="Enter Between 1 to 3" value="{{$target->level}}">
            </div>
            <input type="hidden" name="id" value="{{$target->id}}"/>
            <button type="button" class="btn btn-default">Submit</button>
            <a href="{{URL::to('roles')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click', 'button', function () {
            var formData = new FormData($('#formSubmit')[0]);
            $.ajax({
                url: "{{URL::to('roles')}}",
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
                    $.toast({heading: 'Success',text: 'Updated Successfully',icon: 'success'});
                    setTimeout(function () {
                        window.location.replace("{{URL::to('roles')}}");
                    }, 2000)
                }
            })
        });
    });
</script>
@endsection