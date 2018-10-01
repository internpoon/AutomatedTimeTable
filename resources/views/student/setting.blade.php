@extends('layouts.home')

@section('content')
    <example-component></example-component>
    <hr>
    <form method="POST" action="{!! action('SettingController@changePassword') !!}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="fName">Name</label>
            <input id="fName" class="form-control" name="fName" type="text" placeholder="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" type="text" name="email" placeholder="{{$user->email}}" readonly>
            <small id="emailHelp" class="form-text text-muted">This field is cannot be modified.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Current Password</label>
            <input type="password" class="form-control" name="currentPassword" id="currentPassword" placeholder="Current Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
        </div>
        <div class="form-group" id="pw">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control has-error" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
            <small id="pwHelp" class="form-text text-muted" hidden style="color: #a94442;">Password not match !</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('custom_js')
<script>
    $(document).ready(function () {
        $('#newPassword, #confirmPassword').on('keyup', function () {
            if ($('#newPassword').val() == $('#confirmPassword').val() || $('#confirmPassword').val() == '' ) {
                $('#pw').removeClass('has-error');
                $('#pwHelp').hide()
            } else {
                $('#pw').addClass('has-error');
                $('#pwHelp').show();
            }
        });
    });
</script>
@if(Session::has('error'))
    <script>
        $(function() {
            toastr.error('{{ Session::get('error') }}');
        })
    </script>
@endif
@endsection