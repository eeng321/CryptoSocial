<!--main content start-->
<div class="wrapper">
    <section id="content">
        <div class="border-head">
            <h3>My Watchlist</h3>
        </div>
        <!-- Search form -->
        <div class="form-inline">
            <form class="watchlistForm">
                <input id="watchlistSearch"class="form-control form-control-md ml-3 w-60" type="text" placeholder="Search" aria-label="Search">
                <button type="button" class="btn btn-theme" onclick="addWatchlistItem(document.getElementById('watchlistSearch').value)">Add</button>
            </form>
        </div>
        
        <table id="watchlistTable" class="table table-dark">
            <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Last 24hr</th>
            </tr>
            </thead>
            
            </tbody>
        </table>
    </section>
</div>
