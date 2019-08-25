<?php

session_start();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HOD's Dashboard | HETC Feedback System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
            #selection{
                padding:20px;
            }
            .form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=password],
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=password]:focus,
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
table.purpleHorizon {
  border: 4px solid #792396;
  background-color: #555555;
  width: 350px;
  text-align: center;
  border-collapse: collapse;
}
table.purpleHorizon td, table.purpleHorizon th {
  border: 1px solid #555555;
  padding: 5px 2px;
}
table.purpleHorizon tbody td {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
}
table.purpleHorizon tr:nth-child(even) {
  background: #CC3BFC;
}
table.purpleHorizon thead {
  background: #792396;
  border-bottom: 4px solid #792396;
}
table.purpleHorizon thead th {
  font-size: 19px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: left;
  border-left: 2px solid #792396;
}
table.purpleHorizon thead th:first-child {
  border-left: none;
}

table.purpleHorizon tfoot {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  background: #CE3CFF;
  background: -moz-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  background: -webkit-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  background: linear-gradient(to bottom, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  border-top: 5px solid #792396;
}
table.purpleHorizon tfoot td {
  font-size: 13px;
}
table.purpleHorizon tfoot .links {
  text-align: right;
}
table.purpleHorizon tfoot .links a{
  display: inline-block;
  background: #792396;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
table.minimalistBlack {
  border: 3px solid #000000;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}
    </style>
</head>

<body>
   
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="prof-dash.php"><br><h2>HETC</h2></a>
                
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                
                                <li><a title="Add Professor" href="add-teacher.php"><span class="mini-sub-pro">Add Professors</span></a></li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="update.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Update</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="addsub.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Add Subjects</span></a>
                        </li>
                         <li>
                            <a class="has-arrow" href="request.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Requests</span></a>
                        </li>
                       <li>
                            <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Log Out</span></a>
                        </li>
                        
                       
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            
            <!-- Mobile Menu end -->
            
        </div>
        
       

    
    <?php
        $uname=$_SESSION['uname'];
        $deptt=$_SESSION['dept'];
        $con = mysqli_connect("localhost","root","","feedback");
        $sql = "select * from `sub` where `dept`='$deptt' and `status`=0" ;
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        
    ?>
    <br>
    <br>
    <br>
    <h4 align="center">Requests</h4>
    <table class="minimalistBlack">
        <thead>
        <tr>
        <th>Department</th>
        <th>Semester</th>
        <th>Sub Code</th>
        <th>Prof Code</th>
        <th>Subject Name</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($result)) 
            {

        ?>
        <tr>
        <td><?php echo $row['dept']?></td>
        <td><?php echo $row['sem']?></td>
        <td><?php echo $row['subcode']?></td>
        <td><?php echo $row['teacode']?></td>
        <td>
            <?php 

        $subcode=$row['subcode'];
                                        $s="SELECT `subname` from `subjects` where `subcode`='$subcode'";
                                        $r=mysqli_query($con,$s);
                                        if(mysqli_num_rows($r)>0)
                                        {
                                            $rr= mysqli_fetch_assoc($r);
                                            echo $rr['subname'];
                                        }

                                        else
                                        {
                                            echo "Null";
                                        }




        ?>



        </td>
         <td>
                    
                    <form action="request.php" method="post">
                        <input type="hidden" name="dept" value=<?php echo $row['dept']?>>
                        <input type="hidden" name="sem" value=<?php echo $row['sem']?>>
                        <input type="hidden" name="subcode" value=<?php echo $row['subcode']?>>
                        <input type="hidden" name="teacode" value=<?php echo $row['teacode']?>>
                        <input type="submit" name="del" value="Approve" class="w3-button w3-border w3-tiny">
                    </form> 


         </td>
        </tr>
        <?php

            }
        ?>
        </tbody>
        </table>   
       <?php

         if(isset($_POST['del']))
        {
            $uname=$_SESSION['uname'];
            $dept=$_POST['dept'];
            $sem=$_POST['sem'];
            $subcode=$_POST['subcode'];
            $teacode=$_POST['teacode'];
            $sql="UPDATE`sub` set `status`=1 WHERE `dept`='$dept' and `subcode`='$subcode' and `teacode`='$teacode' and `sem`=$sem"; 
            $con = mysqli_connect("localhost","root","","feedback");
            $result=mysqli_query($con,$sql);
            if(!$result)
            {
                echo "not approved";
            }
            echo '<meta http-equiv="refresh" content="0">';
        }

       ?>

       <br>
       <br>
    <footer>

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. All rights reserved. Developed by Shashikant Shaw</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    
</body>

</html>