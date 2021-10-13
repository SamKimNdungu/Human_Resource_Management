<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include ('Data_Entry_Sql.php') ?>
<html lang="en" ng-app>
    <head >
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script type="text/javascript" src="/assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/angular.min.js"></script>
        <script type="text/javascript" src="/assets/js/toggleVisibility.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Entry</title>
    </head>
    <body style="min-height: 100vh;">
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
                    <li class="active"><a href="Data_Entry.php">Data Entry</a></li>

                </ul>
            </div>
        </nav>
        <form action="Data_Entry.php" class="form-horizontal">
            <fieldset>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-10">
                            <div id="ui">
                                <form action="Data_Entry.php" class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>First Name: </label>
                                            <input type="text" name="fname" placeholder="john doe" required class="form-control">
                                        </div>
                                          <div class="col-lg-6">
                                            <label>Second Name: </label>
                                            <input type="text" name="sname" placeholder="john doe" required class="form-control">
                                        </div>
                                         <div class="col-lg-6">
                                            <label>Third Name: </label>
                                            <input type="text" name="lname" placeholder="john doe"  class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Country: </label>
                                            <input type="text" name="country" placeholder="Kenya" required class="form-control">
                                        </div>
                                    </div>
                                    <label>Diocese </label>
                                    <input type="text" name="diocese" placeholder="Catholic Dioces of Muranga" required class="form-control">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Year: </label>
                                            <input type="number" name="year" required class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Parish: </label>
                                                  <input type="text" name="parish" required class="form-control">
                                        </div>

                                </form>
                            </div>
                           <br>
                            <button type="submit"  class="btn-primary btn-block">Submit</button>
                        </div>
                    </div>

                </div>
<div class="footer-content">
    <h3><i>Institutum Missionum a Consolata  </i></h3>
                <p><i>ad gents </i></p>
               
            </div>
            </fieldset>
        </form>
        
    </body>
</html>