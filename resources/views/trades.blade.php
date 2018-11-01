@extends('layouts.app')

@section('title', 'Trade')

@section('navbar')

@section('content')
<main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-black-50 rounded shadow-sm">
            <img class="mr-3" src="{{"img/homam.png"}}" alt="" width="60" height="60">
            <div class="lh-100">
                <h3 >Trades</h3>
            </div>
        </div>

<div class="my-3 p-3 bg-white rounded shadow-sm">
        <div>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapsePost" role="button" aria-expanded="false" aria-controls="collapseExample">Create Post</a>
        </div>
        <div class="row">
	    <div class="col-md-8 col-md-offset-2 pt-4 collapse hide" id= "collapsePost">
	         		
    		<form action="" method="POST">
    		    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="description" ></textarea>
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
    
<div id="accordion">
  {{-- Filler. Implement a For loop to dynamically add updates--}}
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent Trades</h6>
        <div class="media text-muted pt-3">
            <img src="{{"img/default.png"}}"alt="" class="mr-2 rounded" width="60" height="60">
            <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                <br>
            <a class="d-block text-right mt-3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Comments
              </a>
            </p>
            
                

        </div>
        <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                        <div class="media text-muted pt-3">
                        <img src="{{"img/default.png"}}"alt="" class="mr-2 rounded" width="60" height="60">
                        <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <form class>
                            <div class="form-group small">
                                <input class="form-control" type="text" placeholder="Enter Comment" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                 </div>
              </div>
        <div class="media text-muted pt-3">
            <img src="{{"img/default.png"}}"alt="" class="mr-2 rounded" width="60" height="60">
            <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
            
        </div>
        <div class="media text-muted pt-3">
            <img src="{{"img/default.png"}}"alt="" class="mr-2 rounded" width="60" height="60">
            <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>
        <small class="d-block text-right mt-3">
        <a href="#">All updates</a>
        </small>
    </div>
</div>
    @endsection()
@section('footer')
