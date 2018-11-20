<?php use App\Http\Controllers\UsersController; ?>
<?php use App\Http\Controllers\ReplyController; ?>
   
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            @if (!$post)
            <h6 class="border-bottom border-gray pb-2 mb-0">Recent Trades</h6>
            @endif
            @foreach($posts as $post) 
            <div class="media text-muted pt-3">
                @php
                    $avatar = 'storage/avatars/' . UsersController::getAvatar($post->author_id);
                @endphp
                <img src='{{ $avatar }}' alt="" class="mr-2 rounded" width="60" height="60">
                <p class="media-body mb-0  lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">{{$post->title}}</strong>
                    <strong class="d-block text-gray-dark">{{ UsersController::getName($post->author_id) }} @ {{$post->created_at}}</strong>
                    {{$post->content}}
                    <a class="d-block text-right mt-3" href="/trades?postId={{$post->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Comments ({{ ReplyController::getReplyCount($post->id) }})</a>
                    <br>
                </p>
            </div>
            @endforeach
        {{$posts->links()}}
        </div>
