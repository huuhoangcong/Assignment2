<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="http://localhost/Assignment2/Home" class="nav-link">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-4">Thống Kê Doanh Thu <?php echo $data['nam']?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search">
                </div>
            </div>
            <table class="table table-striped table-dark" id="myTable">
                <thead>
                    <tr>
                        <th>Tháng</th>
                        <th>Doanh Thu (VNĐ)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0 ?>
                    <?php foreach ($data['rooms'] as $room): ?>
                        <tr>
                            <td>
                                <?php echo $room['Thang']; ?>
                            </td>
                            <td>
                                <?php echo $room['TongDoanhThuVND']; 
                                      $total += $room['TongDoanhThuVND'];?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                        <tr>
                            <td>
                                <?php echo "<h4>Total</h4>"; ?>
                            </td>
                            <td>
                                <?php echo "<h4>$total</h4>"; ?>
                            </td>
                        </tr>    
                </tbody>
            </table>
            </div>
        </div>
    </div>

</section>

<script>
    function myFunction() {
        // Declare variables 
        var input = document.getElementById("myInput");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("myTable");
        var trs = table.tBodies[0].getElementsByTagName("tr");

        // Loop through first tbody's rows
        for (var i = 0; i < trs.length; i++) {
            // define the row's cells
            var tds = trs[i].getElementsByTagName("td");
            // hide the row
            trs[i].style.display = "none";
            // loop through row cells
            for (var i2 = 0; i2 < tds.length; i2++) {
                // if there's a match
                if (tds[i2].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    // show the row
                    trs[i].style.display = "";
                    // skip to the next row
                    continue;
                }
            }
        }
    }
</script>






