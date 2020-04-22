
<?php ob_start();   ?>
<?php include "../includes/db_connection.php";   ?>
<!-- to call file and make it available  -->
<?php include "../includes/functions.php";   ?>

<?php
	
	if(isset($_SESSION['user_username'])){
		
		$user_username = $_SESSION['user_username'];
	}

        global $connection;

        $query  =  "SELECT * FROM user WHERE user_role = '3' AND user_username = '{$user_username}'";    
        $select_buyer = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_buyer)){

            
            $user_id = escape($row['user_id']);
            $user_image = escape($row['user_image']);
            $user_username = escape($row['user_username']);
            $user_email = escape($row['user_email']);
            $user_phone = escape($row['user_phone']);
            $user_state = escape($row['user_state']);
            $user_address = escape($row['user_address']);
            $user_website = escape($row['user_website']);
            $user_password = escape($row['user_password']);
                             
        }
    
         $_SESSION['user_phone'] = $user_phone;
         $_SESSION['user_email'] = $user_email;
    
    if(isset($_POST['edit_buyer_profile'])){
        
        $user_image       = escape($_FILES['user_image']['name']);
        $user_image_temp  = escape($_FILES['user_image']['tmp_name']);
        $user_name        = escape($_POST['user_name']);
        $user_phone       = escape($_POST['user_phone']);
        $user_email       = escape($_POST['user_email']);
        $user_website     = escape($_POST['user_website']);
        $user_state       = escape($_POST['user_state']);
        $user_address     = escape($_POST['user_address']);
        $user_password    = escape($_POST['user_password']);
		
		$password = password_hash($buyer_password, PASSWORD_BCRYPT, array('cost' => 12));

        move_uploaded_file($user_image_temp,"../img/$user_image" );

        //UPDATE query
        $query = "UPDATE buyer SET                               ";
        $query .= "user_image        = '{$user_image}',     ";
        $query .= "user_name         = '{$user_name}',      ";
        $query .= "user_phone        = '{$user_phone}',     ";
        $query .= "user_email        = '{$user_email}',     ";
        $query .= "user_website      = '{$user_website}',   ";
        $query .= "user_state        = '{$user_state}',     ";
        $query .= "user_address      = '{$user_address}'    ";
        $query .= "WHERE user_id     =  {$user_id}          ";

        $edit_buyer_query = mysqli_query($connection,$query);
        confirmQuery($edit_buyer_query);
    }
?>  


<!-- enctype is   -->
     <form action="" method="post" enctype="multipart/form-data">
    
        <div class="container-fluid">

          <!-- Starting of profile content-->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Maklumat Pengguna</h6>
            </div>
            <div class="card-body">

        <div class="row">
            
            <div class="col-md-6 mb-3">
                 <b for="product_image">Gambar :</b>
                <input type="file"  name="buyer_image">
            </div>
                </div>
                 <div class="row">
            
          <div class="col-md-6 mb-3">
            <label for="firstName">Nama</label>
            <input type="text" class="form-control" name="supplier_name" placeholder="" value="<?php echo $user_username ?>" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Nombor Telefon</label>
            <input type="text" class="form-control" name="supplier_phone" placeholder="" value="<?php echo $user_phone ?>" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
            
        <div class="col-md-6 mb-3">
            <label for="lastName">Emel</label>
            <input type="text" class="form-control" name="supplier_email" placeholder="" value="<?php echo $user_email ?>" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
           <div class="col-md-6 mb-3">
            <label for="lastName">Website</label>
            <input type="text" class="form-control" name="supplier_website" placeholder="" value="<?php echo $user_website ?>" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        
            <div class="col-md-6 mb-3">
            <label for="lastName">Negeri</label>
            <input type="text" class="form-control" name="supplier_state" placeholder="" value="<?php echo $user_state ?>" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">Alamat</label>
            <input type="text" class="form-control" name="supplier_address" placeholder="" value="<?php echo $user_address ?>" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
		<div class="col-md-6 mb-3">
            <label for="lastName">Katalaluan</label>
            <input type="password" class="btn border-secondary form-control" name="user_password" placeholder="" value="<?php echo $user_password ?>" required="">
         </div>
            
        
                     
        </div>
      
        <div class="form-group">
                <input class="btn btn-primary" type="submit" name="edit_buyer_profile" value="Kemaskini">
        </div>
  
                  
                </div>
                </div>

          <!--End of profile content-->
           </div> 
     </form> 

       