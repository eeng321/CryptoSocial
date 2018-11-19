<?php use App\Http\Controllers\UsersController; ?>

<div id="accordion">
    {{-- Filler. Implement a For loop to dynamically add updates--}}

   
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Recent Trades</h6>

            @foreach($posts as $post) 
            <div class="media text-muted pt-3">
                <img src="{{"img/default.png"}}"alt="" class="mr-2 rounded" width="60" height="60">
                <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">This is the Tiltle</strong>
                    <strong class="d-block text-gray-dark">{{ UsersController::getName($post->author_id) }} - {{$post->created_at}}</strong>
                    {{$post->content}}
                    <br>
                    <a class="d-block text-right mt-3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Comments</a>
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
            @endforeach
        {{$posts->links()}}
        </div>
</div>