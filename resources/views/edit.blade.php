@extends('layouts.app')

@section('title', 'Edit')

@section('navbar')

@section('content')
<main role="main" class="container">
<div class="my-3 p-3 bg-white rounded shadow-sm">
        <h1 class="border-bottom border-gray pb-2 mb-0">Edit Profile</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 pt-4">
                    <div class="profile-header-container">
                            <div class="profile-header-img">
                                <img class="rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar}}" width="100" height="100" />

                            </div>
                        </div>

                <form method="POST" action="" enctype="multipart/form-data">
                @csrf



                    <input type='hidden' name='id' value='{{isset($new_name) ? $new_name : $userData->id}}'>

                    <div class="form-group">
                            <input type="file" class="form-control-file" name= "pic" id="avatarFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                        </div>

                    <div class="form-group">
                        <label for="Name">Name<span class="require">*</span></label>
                        <input type="text" class="form-control" value='{{$userData->name}}' name = "name" required/>
                    </div>

                    <div class="form-group">
                        <label for="Name">Email<span class="require">*</span></label>
                        <input type="text" class="form-control" value='{{ $userData->email }}' name = "email" required readonly/>
                    </div>

                    <div class="form-group">
                            <label for="password">New Password<span class="require">*</span></label>
                            <input type="password" class="form-control" minlength=6  name ="password" id="passwordone" onkeyup='check();' required/>
                        </div>

                    <div class="form-group">
                        <label for="password-confirm">Confirm Password<span class="require">*</span></label>
                        <input id="password-confirmone" type="password"  minlength=6 class="form-control" name="password_confirmation" onkeyup='check();' required>
                         </div>
                         <span id='message'></span>

                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="mybutton" class="btn btn-primary">
                            Create
                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection()

@section('footer')
@section('scripts')
<script>
//adapted from https://stackoverflow.com/questions/21727317/how-to-check-confirm-password-field-in-form-without-reloading-page/21727555
    var check = function() {
    if (document.getElementById('passwordone').value ==
        document.getElementById('password-confirmone').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
        document.getElementById('mybutton').style.visibility = 'visible';
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
        document.getElementById('mybutton').style.visibility = 'hidden'
    }
}
</script>
@endsection()
