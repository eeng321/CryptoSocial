<!--main content start-->
<div class="wrapper">
    <section id="content">
        <div class="border-head">
            <h3>My Watchlist</h3>
        </div>
        <!-- Search form -->
        
        <form class="form-inline">
            <input class="form-control form-control-md ml-3 w-60" type="text" placeholder="Search" aria-label="Search">
            <button type="button" class="btn btn-theme" onclick="addRow();">Add</button>
        </form>
        
        <table class="myTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Market Cap</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Bitcoin</td>
                <td>$110,609,408,006</td>
                <td>$1337</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Urmumcoin</td>
                <td>6969</td>
                <td>69</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>XRP</td>
                <td>9001</td>
                <td>0.69</td>
            </tr>
            </tbody>
        </table>
    </section>
</div>

{{-- <script>
function addRow (argument) {
    var myTable = document.getElementById("myTable");
    var currentIndex = myTable.rows.length;
    var currentRow = myTable.insertRow(-1);

    var linksBox = document.createElement("input");
    linksBox.setAttribute("name", "links" + currentIndex);

    var keywordsBox = document.createElement("input");
    keywordsBox.setAttribute("name", "keywords" + currentIndex);

    var violationsBox = document.createElement("input");
    violationsBox.setAttribute("name", "violationtype" + currentIndex);

    var addRowBox = document.createElement("input");
    addRowBox.setAttribute("type", "button");
    addRowBox.setAttribute("value", "Add another line");
    addRowBox.setAttribute("onclick", "addField();");
    addRowBox.setAttribute("class", "button");

    var currentCell = currentRow.insertCell(-1);
    currentCell.appendChild(linksBox);

    currentCell = currentRow.insertCell(-1);
    currentCell.appendChild(keywordsBox);

    currentCell = currentRow.insertCell(-1);
    currentCell.appendChild(violationsBox);

    currentCell = currentRow.insertCell(-1);
    currentCell.appendChild(addRowBox);
}
</Script> --}}