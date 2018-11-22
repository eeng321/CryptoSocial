<!--main content start-->
<div class="wrapper">
    <section id="content">
        <div class="border-head">
            <h3>Watchlist</h3>
        </div>
        <!-- show only if user is owner of profile -->
        @if(!Auth::guest() && Auth::user()->id == basename(Request::segment(2)) ) 
        <!-- Search form -->
        <div class="form-inline">
            <form class="watchlistForm">
                <input id="watchlistSearch"class="form-control form-control-md ml-3 w-60" type="text" placeholder="Search" aria-label="Search">
                <button type="button" class="btn btn-theme" onclick="getCoinInfo()">Add</button>
            </form>
        </div>
        @endif
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
