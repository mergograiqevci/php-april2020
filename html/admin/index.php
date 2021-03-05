<?php include "includes/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                             
                    </div>

                </div>
                <!-- /.row -->
                  <!-- /.row -->
                
                <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php 

                                    $query = "SELECT * FROM rezervimet";
                                    $select_all_reservations = mysqli_query($connection,$query);
                                    $reservation_count = mysqli_num_rows($select_all_reservations);

                                    echo  "<div class='huge'>{$reservation_count}</div>"

                                    ?>
                                            <div> Rezervimet</div>
                                    </div>
                                </div>
                            </div>
                            <a href="reservations.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php 

                                        $query = "SELECT * FROM mesazhet";
                                        $select_all_messages = mysqli_query($connection,$query);
                                        $message_count = mysqli_num_rows($select_all_messages);

                                         echo  "<div class='huge'>{$message_count}</div>"

                                    ?>
                                        <div>Mesazhet</div>
                                    </div>
                                </div>
                            </div>
                            <a href="messages.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                       <?php 

                                        $query = "SELECT * FROM users";
                                        $select_all_users = mysqli_query($connection,$query);
                                        $user_count = mysqli_num_rows($select_all_users);

                                         echo  "<div class='huge'>{$user_count}</div>"

                                        ?>

                                            <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                     <?php 

                                    $query = "SELECT * FROM ofertat";
                                    $select_all_offers = mysqli_query($connection,$query);
                                    $offers_count = mysqli_num_rows($select_all_offers);

                                        echo  "<div class='huge'>{$offers_count}</div>"

                                    ?>

                                        <div>Ofertat</div>
                                    </div>
                                </div>
                            </div>
                            <a href="ofertat.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                

                <div class="row">
                    
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Data', 'Count'],
                
                                <?php
                                        
                                $element_text = ['Reservations', 'Messages', 'Users', 'Ofertat'];       
                                $element_count = [$reservation_count, $message_count, $user_count, $offers_count];

                                for($i =0; $i < 4; $i++) {
                                
                                    echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                        
                                }
                                                                                    
                                ?>
               
                             ]);

                                var options = {
                                    chart: {
                                        title: 'Te dhenat ne databaze',
                                        subtitle: 'Grafiku',
                                    }
                                };

                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                    </script>
                                
                    <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>
