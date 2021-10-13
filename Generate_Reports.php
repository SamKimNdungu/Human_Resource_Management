<?php 
include 'connection.php';
?>
<!DOCTYPE html>

<html lang="en" ng-app>
    <head >
        <link rel="stylesheet" type="text/css" href="reports.css">
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
                    <li class="active"><a href="Generate_Reports.php">Data Entry</a></li>

                </ul>
            </div>
        </nav>
        <div class="container_c">
            <div class="wrapper">
                <h1>Reports</h1>
            </div>
            <div class="data">
                <form action="Generate_Reports.php" method="post">
                <select name="country">
                    <option>Country</option>
                    <?php
                    
                    $query= "SELECT * FROM data_entry";
                    $result = mysqli_query($connect,$query);
                    while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                       
                        $country = $rows['country'];
                        $rowsData = $rows['country'];
                 
                    ?>
                    <option value="<?php echo $country;?>"><?php echo $rowsData;?></option>
                    <?php
                    }
                    ?>
                </select>     
                  <select name="diocese">
                   <option>Diocese</option>
                    <?php
                    
                    $query1= "SELECT * FROM data_entry";
                    $result1 = mysqli_query($connect,$query1);
                    while ($rows1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                       
                        $diocese = $rows1['diocese'];
                        $rowsData1 = $rows1['diocese'];
                 
                    ?>
                    <option name="<?php echo $diocese;?>"><?php echo $rowsData1;?></option>
                    <?php
                    }
                    ?>
                </select>  
                      <select name="doa">
                   <option>Year</option>
                    <?php
                    
                    $query2= "SELECT * FROM data_entry";
                    $result2 = mysqli_query($connect,$query2);
                    while ($rows2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
                       
                        $doa = $rows2['doa'];
                        $rows1Data3 = $rows2['doa'];
                 
                    ?>
                    <option name="<?php echo $doa;?>"><?php echo $rows1Data3;?></option>
                    <?php
                    }
                    ?>
                </select>  
       
                
                 <input type="submit" class="submit">
                 <table border="1" class="table">
                     <tr>
                         <th>First Name</th>
                         
                         <th>Country</th>
                         
                         <th>Year</th>
                     </tr>
                     <tr>
                     <?php 
                    
                     $country_ = $_POST['country'];
                     $diocese_ = $_POST['diocese'];       
                     $year_ = $_POST['doa'];
                     $query3 =  "SELECT * from data_entry where diocese = '$diocese_' OR doa = '$year_' OR country = '$country_'";
                     $result3 = mysqli_query($connect, $query3);
                             while($rows3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
                                 $name = $rows3['fname'];    
                                 $yeardoa = $rows3['doa'];
                                
                                 $country3 = $rows3['country'];
                               ?>
                     </tr>
                     <tr>
                            <td> <?php echo $name; ?> </td>
                            
                            <td> <?php echo $country3; ?> </td>
                         
                            <td> <?php echo $yeardoa; ?> </td>
                     </tr>
                     
                      <?php
}
                             
                     ?>
                     </tr>
                 </table>
                 <button onClick="window.print()">Print</button>
                </form>
            </div>
        </div>
    </body>
</html>