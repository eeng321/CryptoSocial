<?php 
    function displayArticle($article) {
        echo "<div class='row'>";
        echo "<div class='col blogShort'>";
        echo "<em><strong>".$article['author']."</strong></em>";
        echo "<img class='rounded float-left article-thumbnail' src=".$article['urlToImage']." alt='Card image cap'>";
        echo "<article><p>".$article['description']."</p></article>";
        echo  "<a class='btn btn-secondary article-link' target='_blank' href=".$article['url']." role='button'>Read More</a>";
        echo "</div>";        
        echo "</div>";
    }
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="display-4 text-center">News Feed</h1>
            @if(!empty($news))
                <div class='container-fluid'>
                @foreach(array_chunk($news['articles'], 3) as $articles)
                    @foreach($articles as $article)
                    @php
                        displayArticle($article);
                    @endphp
                    @endforeach
                @endforeach
                </div>
            @else
                <h2 class='card-title text-center'>No news to display</h2>
            @endif
        </div>
    </div>
</div>
