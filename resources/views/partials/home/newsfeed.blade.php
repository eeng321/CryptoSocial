@php
    echo "<div class='col-md-4'>";
    echo "<img class='card-img-thumb' src=".$article['urlToImage']." alt='Card image cap'>";
    echo "<h2 class= 'card-title'>".$article['author']."</h2>";
    echo "<p class= 'card-text news-card'>".$article['description']."</p>";
    echo  "<a class='btn btn-secondary' href=".$article['url']." role='button'>View details &raquo;</a>";
    echo "</div>";
@endphp