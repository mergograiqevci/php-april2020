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
                                           
                        
                    <div class="col-lg-12">
 
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                               
                                <th class="text-center">Emri</th>
                                <th class="text-center">Mbiemri</th>
                                <th class="text-center">Nisja</th>
                                <th class="text-center">Destinacioni</th>
                                <th class="text-center">Nete</th>
                                <th class="text-center">Dhoma</th>
                                <th class="text-center">Femije</th>
                                <th class="text-center">Data nisjes</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php findAllReservations(); ?>

                            <?php deleteReservations(); ?>

                        </tbody>
                    </table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>
