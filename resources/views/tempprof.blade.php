@extends('layouts.app')


@section('title', 'Temp Prof')

@section('navbar')

@section('content')
{{-- stuff --}}
{{"Currently On ".$userProfile['name']."'s page, their id is". $userProfile['id']}}
@if(Auth::user()->id != $userProfile['id'])
<button id="followBtn" type="button" data-url={{$isFollowing ? 'unfollow' : 'follow'}}>{{ $isFollowing ? 'Unfollow' : 'Follow'}} </button>
@endif 



@endsection()

@section('footer')

@section('scripts')
<script>
    var uid = JSON.parse("{{ json_encode(Auth::user()->id)}}");
    var fid = JSON.parse("{{ json_encode($userProfile['id']) }}");
    function executeCallback(callback) {
        callback();
    }
    $("#followBtn").click(function(e) {
        $(this).attr("disabled",true);
        var action = $(this).data("url");
        var btnContext = this;
        // console.log(typeof(urlData));
        // console.log(typeof("follow"));
        executeCallback( function() {
            btnCallback(uid,fid, action, btnContext);
        });
    });

    function btnCallback(uid,fid, action, context) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url : "/follow",
            data: {
                user_id: uid,
                user_following_id: fid,
                action: action,
            },
            error: function(result,status,errorMsg) {
                console.log(status+" Message: "+errorMsg);
                if($(".text-danger").length) {
                    $(".text-danger").text("Unable to follow user!!");
                } else {
                    $(`<div class="text-danger"> ${"Unable to follow user"}</div>`).insertAfter(context);
                }
            },
            complete: function(data, status) {
                if(data.status === 200) {
                    if(action === "follow") {
                        $(context).data("url",'unfollow');
                        $(context).text("Unfollow");
                    } else if (action === "unfollow") {
                        $(context).data("url",'follow');
                        $(context).text("Follow");
                    }
                }
                $(context).attr("disabled",false);
            }
        });
    }
 </script>
 @endsection()

