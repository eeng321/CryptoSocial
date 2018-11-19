@extends('layouts.app')

@section('title', 'Trade')

@section('navbar')

@section('content')
<div class="my-3 p-3 bg-white rounded shadow-sm">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 pt-4">
                
                <form method="POST" action="">
                @csrf
                      
                  
        
                    <input type='hidden' name='id' value='{{Auth::user()}}->id'>
             
                    <div class="form-group">
                        <label for="Name">Name<span class="require">*</span></label>
                        <input type="text" class="form-control" value='{{Auth::user()->name}}' name = "name" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="Name">Email<span class="require">*</span></label>
                        <input type="text" class="form-control" value='{{ Auth::user()->email }}' name = "name" required readonly/>
                    </div>

                    <div class="form-group">
                            <label for="password">New Password<span class="require">*</span></label>
                            <input type="password" class="form-control"  name ="password" required/>
                        </div>

                    <div class="form-group">
                        <label for="password-confirm">Confirm Password<span class="require">*</span></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                         </div>
                    
                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>

                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection()

@section('footer')