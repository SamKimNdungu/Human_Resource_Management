<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" ng-app>
    <head >
      
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <script type="text/javascript" src="/assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/angular.min.js"></script>
        <script type="text/javascript" src="/assets/js/toggleVisibility.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Entry</title>
    </head>
    <body style="min-height: 100vh";>
         <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#nav-toggle" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
                <a href="menu_main.php" class="navbar-brand">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="nav-toggle">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Data_Retrieval.php">Data Entry</a></li>

                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            <h4>Search For Records By Name</h4>
                        </div>
                        <div class="card-body">
                            <form action="Data_Retrieval.php" method="GET">
                                
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>           
              </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                    <?php
                                    include ('connection.php');
                                    if(isset($_GET['search'])) {
                                        $search = $_GET["search"];
                                    $query = "SELECT * FROM data_entry WHERE fname = '$search' || lname = '$search' || sname = '$search' ";
                                    $query_run = mysqli_query($connect, $query);
                                    
                                    if(mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                          
                                            ?>
                                           <div class="form-group mb-3">
                                        <label for="">First Name</label>
                                        <input type="text" readonly value="<?= $row['fname']; ?>" class="form-control">
                                    </div>
                                     <div class="form-group mb-3">
                                        <label for="">Second Name</label>
                                        <input type="text" readonly value="<?= $row['lname']; ?>" class="form-control">
                                    </div>
                                     <div class="form-group mb-3">
                                        <label for="">Third Name</label>
                                        <input type="text" readonly value="<?= $row['sname']; ?>" class="form-control">
                                    </div>
                                     <div class="form-group mb-3">
                                        <label for="">Country</label>
                                        <input type="text" readonly value="<?= $row['country']; ?>" class="form-control">
                                    </div>
                                     <div class="form-group mb-3">
                                        <label for="">Diocese</label>
                                        <input type="text" readonly value="<?= $row['diocese']; ?>" class="form-control">
                                    </div>
                                     <div class="form-group mb-3">
                                        <label for="">Year</label>
                                        <input type="number" readonly value="<?= $row['doa']; ?>" class="form-control">
                                    </div>
                                     <div class="form-group mb-3">
                                        <label for="">Parish</label>
                                        <input type="text" readonly value="<?= $row['parish']; ?>" class="form-control">
                                    </div>
                                      <div class="form-group mb-3">
                                        <label for="">Unique ID</label>
                                        <input type="text" readonly value="<?= $row['ID']; ?>" class="form-control">
                                    </div>
                                    <?php
                                        }
                                    } else {
                                        echo 'No record found';    
                                    }
                                    }
                                    ?>
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>