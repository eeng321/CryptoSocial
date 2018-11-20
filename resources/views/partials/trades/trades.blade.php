<?php use App\Http\Controllers\UsersController; ?>
<?php use App\Http\Controllers\ReplyController; ?>

<div id="accordion">
    {{-- Filler. Implement a For loop to dynamically add updates--}}


        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Recent Posts</h6>

            @foreach($trades as $trade)
            <div class="media text-muted pt-3">
                @php
                    $avatar = 'storage/avatars/' . UsersController::getAvatar($trade->user_id);
                @endphp
                <img src='{{ $avatar }}' alt="" class="mr-2 rounded" width="60" height="60">
                <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">{{ $trade->coin}}</strong>
                    <strong class="d-block text-gray-dark">{{ UsersController::getName($trade->author_id) }} - {{ $trade->created_at}}</strong>
                    Bought at: {{ $trade->buy_price }}. Sold at: {{ $trade->sell_price }}. Difference: {{ $trade->buy_price - $trade->sell_price }}
                    <br>
                    <a class="d-block text-right mt-3" data-toggle="collapse" href="#collapse{{ $trade->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Comments</a>
                </p>
            </div>
             <div id="collapse{{ $trade->id}}" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <h6 class="border-bottom border-gray pb-2 mb-0">Replies</h6>
                        @foreach(ReplyController::getReplies($trade->id) as $reply)
                        @php
                            $avatar = 'storage/avatars/' . UsersController::getAvatar($reply->user_id);
                        @endphp
                            <div class="media text-muted pt-3">
                            <img src='{{$avatar}}'alt="" class="mr-2 rounded" width="60" height="60">
                            <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark">{{ UsersController::getName($reply->user_id) }} - {{$reply->created_at}}</strong>
                                {{$reply->content}}
                            </p>
                            <br>
                        </div>
                        @endforeach
                        @if (!Auth::guest())
                        <form method="POST" action="{{ route('replies.store') }}">
                        @csrf
                                <input type='hidden' name='post_id' value={{ $trade->id }}>
                                <input type='hidden' name='user_id' value='{{ $myId }}'>

                                <div class="form-group small">
                                    <input class="form-control" type="text" placeholder="Enter Comment" name="content"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        @endif
                    </div>
                </div>
            @endforeach
        {{ $trades->links()}}
        </div>
</div>
