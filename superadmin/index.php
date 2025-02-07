<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../login/");
    exit;
}

if (isset($_SESSION['role']) && $_SESSION['role'] != 'superadmin') {
    header("Location: ../login/");
    exit;
}

include '../config.php';
$query = new Database();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../src/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include 'includes/header.php' ?>
        <div class="content-wrapper">

            <section class="content">
                <div class="container-fluid">

                    <section class="content">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>

                                            <p>New Orders</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                                            <p>Bounce Rate</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>44</h3>

                                            <p>User Registrations</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>

                                            <p>Unique Visitors</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </section>
                </div>

                <?php include 'footer.php'; ?>
        </div>

        <!-- jQuery -->
        <script src="../src/js/jquery.min.js"></script>

        <!-- Bootstrap 4 -->
        <script src="../src/js/bootstrap.bundle.min.js"></script>
        <script src="../src/js/adminlte.min.js"></script>
</body>

</html>