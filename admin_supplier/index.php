<?php include "../includes/db_connection.php";   ?>
<?php include "../includes/functions.php";   ?>


<?php  include "../includes/admin_header.php"; ?>

<div class="wrapper d-flex align-items-stretch">

  <?php include "includes/supplier_sidebar_navigation.php" ?>
  
  <!-- Page Content  -->
  <div id="content" class="">

    <?php include "../includes/topbar_nav.php" ?>

    <div class="container-fluid">
      
    <div class="d-sm-flex align-items-center justify-content-between m-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> 
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Product -->
      <div class="col-xl-4 mb-2">
        <div class="card py-2 border">
          <div class="card-body dashboard">
            <div class="icon-bg" style="background: #d4d5f9;">
              <img class="img-icon" src="../img/icon/product.png" height="32" width="32">
            </div>
            <h1 class="pt-2 font-weight-bold text-dark dashboard-font">
              <?php 
                global $connection;
                $query = "SELECT * FROM product";
                $select_all_products = mysqli_query($connection,$query);
                $product_count = mysqli_num_rows($select_all_products);

                echo $product_count;
            ?>
            </h1>
            <h5>Produk</h5>
          </div>
        </div>
      </div>

      <!-- Complete Payment -->
      <div class="col-xl-4 mb-2">
        <div class="card py-2 border">
          <div class="card-body dashboard">
            <div class="icon-bg" style="background: #A8F4E5;">
              <img class="img-icon" src="../img/icon/Buyer.png" height="32" width="32">
            </div>
            <h1 class="pt-2 font-weight-bold text-dark dashboard-font">
              <?php 
                global $connection;
                $query = "SELECT * FROM product";
                $select_all_products = mysqli_query($connection,$query);
                $product_count = mysqli_num_rows($select_all_products);

                echo $product_count;
            ?>
            </h1>
            <h5>Lengkap Pembayaran</h5>
          </div>
        </div>
      </div>

      <!-- E-lodge -->
      <div class="col-xl-4 mb-2">
        <div class="card py-2 border">
          <div class="card-body dashboard">
            <div class="icon-bg" style="background: #FF9E9E;">
              <img class="img-icon" src="../img/icon/file.png" height="32" width="32">
            </div>
            <h1 class="pt-2 font-weight-bold text-dark dashboard-font">
              <?php 
                global $connection;
                $query = "SELECT * FROM product";
                $select_all_products = mysqli_query($connection,$query);
                $product_count = mysqli_num_rows($select_all_products);

                echo $product_count;
            ?>
            </h1>
            <h5>E-Lodge</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="card-body">  
              <div class="col-xl-16">
                <div class="card shadow mb-5">
                  
                   <?php  
                     $query = "SELECT buyer_state, count(*) as number FROM buyer GROUP BY buyer_state";  
                     $result = mysqli_query($connection, $query);  
                     ?>  

                   <script type="text/javascript" src="../js/resizeChart.js"></script>
                   <script type="text/javascript" src="../js/barChartProductSupplier.js"></script>
        
                   <script type="text/javascript">
                       
                    google.charts.load('current', {'packages':['bar']});                    
                    google.charts.load('current', {'packages':['corechart']});  
                       
                    google.charts.setOnLoadCallback(drawCharts);
                    google.charts.setOnLoadCallback(drawChart);  

                       
                    function drawCharts() {
                        var data = google.visualization.arrayToDataTable([
                          ['Nama Buah', 'Kuantiti'],
                                <?php
                                global $connection;

                                $query  =  "SELECT * FROM product WHERE product_type = 'Buah-buahan' ";    
                                $select_suppliers = mysqli_query($connection, $query);
                                $all_product_count = mysqli_num_rows($select_suppliers);

                                while ($row = mysqli_fetch_assoc($select_suppliers)){

                                    $product_name = escape($row['product_name']);
                                    $product_quantity = escape($row['product_quantity']);

                                    echo "['$product_name'" . "," . "{$product_quantity}],";
                                }
                                ?> 
                        ]);

                        var options = {
                          chart: {
                            title: '',
                            subtitle: '',
                          },
                          bars: 'horizontal',
                          series: {
                            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                          },
                          axes: {
                            x: {
                              distance: {label: 'Jumlah'}, // Bottom x-axis.
                              brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
                            }
                          }
                        };
                          
                        var chart = new google.charts.Bar(document.getElementById('fruit_graph'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                      }
                       
                       
                    function drawChart(){ 
                        var data = google.visualization.arrayToDataTable([  
                                  ['Negeri', 'Jumlah'],  
                                  <?php  
                                  while($row = mysqli_fetch_array($result))  
                                  {  
                                       echo "['".$row["buyer_state"]."', ".$row["number"]."],";  
                                  }  
                                  ?>  
                             ]);  
                        var options = {  
                              //title: 'Jumlah pembeli mengikut negeri',  
                              //is3D:true,  
                              pieHole: 0.5  
                             };  
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                        chart.draw(data, options);  
                    }
                       
                    //RESPONSIVE CHART
                    $(window).resize(function(){
                        drawCharts();
                        drawChart();
                    });
                       
                    </script>
                  
                  
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Pembelian Mengikut Kontan</h6>
                    </div><br>
                    <div id="fruit_graph" style="width: 95%; height: 800px;"></div><br>

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pembeli Mengikut Negeri</h6>
                    </div>

                    <div id="piechart" style="width: 100%; height: 350px;"></div>  
                
                  
               </div>       
              </div>
        </div> 
        
        
             
    </div>
    <div class="row">
       <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
    </div>
    </div>

       <!-- Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Agro Online System 2020 - Ver1.0</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

</div>
</div>


<?php  include "../includes/admin_footer.php"; ?>