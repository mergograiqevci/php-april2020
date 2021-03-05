<form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Edit Category</label>

                                    <?php

                                    if(isset($_GET['edit'])){

                                    $kat_id = $_GET['edit'];
                                    
                                     $query = "SELECT * FROM kategorite WHERE kat_id = $kat_id";
                                     $select_kategorite = mysqli_query($connection, $query);
                 
                                     while($row = mysqli_fetch_assoc($select_kategorite)){
                                         
                                         $kat_id = $row['kat_id'];
                                         $kat_emri = $row['kat_emri'];
                                         
                                        ?>

                                        <input value="<?php if(isset($kat_emri)){echo $kat_emri;} ?>" type="text" class="form-control" name="kat_emri">
                                       <?php }} ?>     
                                    

                                    <?php
                                     if(isset($_POST['update_category'])){

                                        $get_kat_emri = $_POST['kat_emri']; 
                                        
                                        $query = "UPDATE kategorite SET kat_emri ='$get_kat_emri' WHERE kat_id = {$kat_id} ";
                                        $update_query = mysqli_query($connection, $query);
                                            if(!$update_query){
                                                die("QUERY FAILED" . mysqli_error($connection));
                                            }
                                     }
                                    ?>


                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="update_category" value="Update Category"> 
                                </div>

                            </form>