<div class="my-3 p-3 bg-white rounded shadow-sm">
        <div>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapsePost" role="button" aria-expanded="false" aria-controls="collapseExample">Create Post</a>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 pt-4 collapse hide" id= "collapsePost">
                
                <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                      
                  
        
                    <input type='hidden' name='author_id' value='{{ $myId }}'>
             
                    <div class="form-group">
                        <label for="title">Title<span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description<span class="require">*</span></label>
                        <textarea rows="5" class="form-control" name="content" ></textarea>
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