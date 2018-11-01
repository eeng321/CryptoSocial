<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="display-4 text-center">News Feed</h1>
            @if(count($news) > 0) 
            @foreach(array_chunk($news['articles'], 3) as $articles)
            <div class='row'>
               @foreach($articles as $article)
               @php
                    echo "<div class='col-md-4'>";
                    echo "<img class='card-img-thumb' src=".$article['urlToImage']." alt='Card image cap'>";
                    echo "<h2 class= 'card-title'>".$article['author']."</h2>";
                    echo "<p class= 'card-text news-card'>".$article['description']."</p>";
                    echo  "<a class='btn btn-secondary' href=".$article['url']." role='button'>View details &raquo;</a>";
                    echo "</div>";
                @endphp
                @endforeach
            </div>
            <hr>
            @endforeach
            @endif
        </div>
    </div>
</div>
