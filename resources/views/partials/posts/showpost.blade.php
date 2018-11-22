<?php use App\Http\Controllers\UsersController; ?>
<?php use App\Http\Controllers\ReplyController; ?>
@php
    $avatar = 'storage/avatars/' . UsersController::getAvatar($post->author_id);
@endphp
<div class="card-body rounded bg-white shadow-sm">
<div class="d-flex align-items-center p-3 my-3 text-black-50 ">
        <img class="mr-3 rounded" src="{{ $avatar }}" alt="" width="100" height="100">
        <div class="lh-100 border-bottom border-gray">
            <h3 >{{ $post->title }}</h3>
            <p>{{UsersController::getName($post->author_id)}} @ {{ $post->created_at}}</p>
        </div>
    </div>
        <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
        {!! nl2br(e($post->content)) !!}
            <br>
        </p>
</div>
@if (!Auth::guest())
    @include('partials.posts.createreply')
@endif    
<div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Replies</h6>
            @foreach($posts as $reply) 
            @php
                $avatar = 'storage/avatars/' . UsersController::getAvatar($reply->user_id);
            @endphp
                <div class="media text-muted pt-3">
                <img src='{{$avatar}}'alt="" class="mr-2 rounded" width="60" height="60">
                <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">{{ UsersController::getName($reply->user_id) }} - {{$reply->created_at}}</strong>
                    <br>
                    {!! nl2br(e($reply->content)) !!}
                    @if (!Auth::guest())
                    @if (Auth::user()->id == $reply->user_id) 
                        <form action="{{ route('replies.destroy', $reply->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                        <button class="btn btn-link btn-sm">Delete Comment</button>
                    @endif
                    @endif
                </form>
                </p>
                <br>
            </div>
            @endforeach
            {{$posts->appends(request()->except('page'))->links()}}
        </div>
