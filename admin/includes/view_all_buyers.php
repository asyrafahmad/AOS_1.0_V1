<?php ob_start();   ?>
<?php include "../includes/db_connection.php";   ?>
<!-- to call file and make it available  -->
<?php include "../includes/functions.php";   ?>


<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pemborong</h1>
          <p class="mb-4">Senarai Pemborong. <a target="_blank" href="https://datatables.net">@PenerajuMedia.Sdn.Bhd</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Senarai Pemborong</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  
                  
<!--           TODO: put product table-->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Nama Pemborong</th>
                      <th>Emel</th>
                      <th>Nombor Telefon</th>
                      <th>Tarikh Buka Akaun</th>
                      <th>Profil Pemborong</th>
                      <th>Kemaskini Profil Pemborong</th>
                      <th>Sejarah Pembelian</th>
<!--                      <th>Padam</th>-->
                    </tr>
                  </thead>
                 
                  <tbody>
                  
                     <?php
                      
                       if(isset($_SESSION['user_id'])){
                          
                            $user_id = $_SESSION['user_id'];
                        }
                      
                        $query  =  "SELECT * FROM user WHERE user_role = '3' ";    
                        $select_buyers = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($select_buyers)){

                            $user_id = escape($row['user_id']);
                            $user_username = escape($row['user_username']);
                            $user_image = escape($row['user_image']);
                            $user_email = escape($row['user_email']);
                            $user_phone = escape($row['user_phone']);
                            $user_date_register = escape($row['user_date_register']);
                            
                            //Set as global
                            $_SESSION['buyer_id'] = $user_id;
                            $_SESSION['buyer_name'] = $user_username;
                            
                            echo "<tr>";
                            echo "<td>$user_id </td>";
                            echo "<td><img width='100'  src='../img/$user_image'  alt='image' class='rounded-circle' ></td>";
                            echo "<td>$user_username  </td>";
                            echo "<td>$user_email  </td>";
                            echo "<td>0$user_phone  </td>";
                            echo "<td>$user_date_register</td>";
                            
//                            echo "<td><a href='users.php?change_to_admin={$user_id} '>Admin </a></td>";
//                            echo "<td><a href='users.php?change_to_subscriber={$user_id} '>Atlet </a></td>";
                            echo "<td><a class='btn btn-info' href='buyer.php?source=view_buyer&buyer_id={$user_id}'>Lihat Profil</a></td>";
                            echo "<td><a class='btn btn-info' href='buyer.php?source=edit_buyer&buyer_id={$user_id}'>Kemaskini </a></td>";
                            echo "<td><a class='btn btn-info' href='buyer.php?source=view_buyer_history&buyer_id={$user_id}'>Lihat </a></td>";
//                            echo "<td><a class='btn btn-danger' onClick=\"javascript: return confirm('Are you sure you want to delete? ');  \"  href='buyer.php?delete={$user_id} '>Padam </a></td>";
                            echo "</tr>";

                                }
                         ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>