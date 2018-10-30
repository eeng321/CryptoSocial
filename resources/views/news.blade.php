{{-- @extends(layouts.app)  //templating 
@section('title','YeetlyNews')
@section('navbar')
    @parent() --}}
{{-- simple html file for now --}}
<?php 
    use Carbon\Carbon;
    $articleList = $news['articles'];
?>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YeetlyNews</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style> 
            .articleitems {
                padding: 10px;
                text-align: center;
                font-size: 15pt; 
            }
            .articleitems article {
                display: inline-block;
                max-width: 500px;
                margin: 5px;
                text-align: left;
                vertical-align: top;
                overflow: hidden;
            }
            .articleitems article img {
                width: 100%;
                height: 175px;
            }
            .articleitem {
                padding-top: 20px;
                background-color: rgba(34, 202, 31, 0.5);
            }
            article div div.articledate,div.articleauthor {
                font-size: 10pt;
            }
        </style>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <h2> Popular Crypto Articles for the past week </h2>
        <section class="articleitems">
            @foreach($articleList as $newsitem)
            <article>
                <img src="{{$newsitem['urlToImage']}}" /> 
                <div class="articleitem">
                    <h3>{{$newsitem['source']['name'].": ".$newsitem['title']}}</h3>
                    <p class="articledetails"> 
                        {{$newsitem['description']}} 
                        <a href="{{$newsitem['url']}}" target="_blank"> more details </a>
                    </p>
                    <div class="articleauthor">
                        @if (!empty($newsitem['author']))
                            {{"Author: ".$newsitem['author']}}
                        @else {
                            {{"Author: not known."}}
                        }
                        @endif
                    </div>
                    <div class="articledate"> 
                        @if (!empty($newsitem['publishedAt']))
                            Date Published: {{ Carbon::parse($newsitem['publishedAt'])->format('l F jS Y \a\t h:i:s A')}}
                        @else
                            Date Published: {{'not listed.'}}
                        @endif
                    </div>
                </div>
            </article>
            @endforeach 
            <p>Powered by <a href="https://newsapi.org" target="_blank">News API.org </a> </p>
        </section>
    </body>