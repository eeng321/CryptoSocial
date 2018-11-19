<?php 
    $indexArticle = 0;  // Starting index for the article array
    $numArticles = 3;  // Number of articles to display per iteration
    $addArticles = 10;  // Number of articles to add to the visible ones 
    $totalArticles = sizeof($news['articles']);

    function displayArticle($article) {
        echo "<div class='row'>";
            echo "<div class='col blogShort'>";
                echo "<img class='float-left rounded article-thumbnail' src=".$article['urlToImage']." alt='Card image cap'>";
                echo "<em><strong>".$article['author']."</strong></em>";
                echo "<article><p>".$article['description']."</p></article>";
                echo  "<a class='float-right btn btn-secondary article-link' target='_blank' href=".$article['url']." role='button'>Read Article</a>";
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
                    @foreach(array_splice($news['articles'], $indexArticle, $numArticles) as $article)
                    @php
                        displayArticle($article);
                    @endphp
                    @endforeach
                    
                    @if($numArticles < $totalArticles)
                        <div class="collapse" id="collapseArticles">
                        @foreach(array_slice($news['articles'], $indexArticle, $addArticles) as $article)
                        @php    
                            displayArticle($article);
                        @endphp
                        @endforeach
                        </div>
                        <div class='row' style='padding-top: 15px'>
                            <button class="btn btn-primary text-center btn-show-more" id='showMoreBtn' type="button" data-toggle="collapse" data-target="#collapseArticles" aria-expanded="false" aria-controls="collapseArticles">
                                Show More
                            </button>
                        </div>
                    @endif
                </div>
            @else
                <h2 class='card-title text-center'>No news to display</h2>
            @endif
        </div>
    </div>
</div>
