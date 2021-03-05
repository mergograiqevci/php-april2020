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
                               
                                <th class="text-center">Id</th>
                                <th class="text-center">Emri</th>
                                <th class="text-center">Kontinenti</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Cmimi</th>
                                <th class="text-center">Koha e postimit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php findAllOffers(); ?>

                            <?php deleteOffers(); ?>

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
