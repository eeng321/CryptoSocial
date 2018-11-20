<div class="my-3 p-3 bg-white rounded shadow-sm">
        <div>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapsePost" role="button" aria-expanded="false" aria-controls="collapseExample">Reply to Post</a>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 pt-4 collapse hide" id= "collapsePost">
                
                <form method="POST" action="{{ route('replies.store') }}">
                @csrf
                      
                    <input type='hidden' name='post_id' value={{ $post->id }}>
                    <input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
             
                    
                    <div class="form-group">
                        <label for="description">Reply<span class="require">*</span></label>
                        <textarea rows="5" class="form-control" name="content" ></textarea>
                    </div>
                    
                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Reply
                        </button>

                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>