<?php  

    if(isset($_GET['edit_user'])){

        $the_user_id =  escape($_GET['edit_user']);  

        $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
        $select_users_query = mysqli_query($connection,$query);  

        while($row = mysqli_fetch_assoc($select_users_query)) {

            $user_id        = $row['user_id'];
            $username       = $row['username'];
            $password       = $row['password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname  = $row['user_lastname'];
            $user_email     = $row['user_email'];
            $user_role      = $row['user_role'];
            
        }
    
?>
  

   
 <?php  
   

   if(isset($_POST['edit_user'])) {
         
            $user_firstname   = escape($_POST['user_firstname']);
            $user_lastname    = escape($_POST['user_lastname']);
            $user_role        = escape($_POST['user_role']);
            $username         = escape($_POST['username']);
            $user_email       = escape($_POST['user_email']);
            $password         = escape($_POST['password']);
           

        if(!empty($password)) { 

            $query_password = "SELECT password FROM users WHERE user_id =  $the_user_id";
            $get_user_query = mysqli_query($connection, $query_password);
            confirmQuery($get_user_query);

            $row = mysqli_fetch_array($get_user_query);

            $db_user_password = $row['password'];

            if($db_user_password != $password) {

                $hashed_password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

            }


            $query = "UPDATE users SET ";
            $query .="user_firstname  = '{$user_firstname}', ";
            $query .="user_lastname = '{$user_lastname}', ";
            $query .="user_role   =  '{$user_role}', ";
            $query .="username = '{$username}', ";
            $query .="user_email = '{$user_email}', ";
            $query .="password   = '{$hashed_password}' ";
            $query .= "WHERE user_id = {$the_user_id} ";
        
        
                $edit_user_query = mysqli_query($connection,$query);
        
                confirmQuery($edit_user_query);


            echo "User Updated" . " <a href='users.php'>View Users?</a>";

        }  

    } 

    } else {  // If the user id is not present in the URL we redirect to the home page

            header("Location: index.php");

        }
    
?>

    <form action="" method="post" enctype="multipart/form-data">    
     
      <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
      </div>

       <div class="form-group">
         <label for="post_status">Lastname</label>
          <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
      </div>
     
     
        <div class="form-group">
        
            <select name="user_role" id="">
            
                <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>

            <?php 

                if($user_role == 'admin') {
                
                    echo "<option value='subscriber'>subscriber</option>";
                
                } else {
                
                    echo "<option value='admin'>admin</option>";
                
                }

            ?>  

            </select>
            
        </div>
        
        <div class="form-group">
            <label for="post_tags">Username</label>
            <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
        </div>
        
        <div class="form-group">
            <label for="post_content">Email</label>
            <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
        </div>
        
        <div class="form-group">
            <label for="post_content">Password</label>
            <input type="password" value="<?php //echo $user_password; ?>" class="form-control" name="password">
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="edit_user" value="Update User">
        </div>

    </form>
    