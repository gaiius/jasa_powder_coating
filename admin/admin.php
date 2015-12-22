<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" type="text/css" href="template/lib/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="template/stylesheets/theme.css">
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

        <script src="template/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

        <!-- Demo page code -->

        <style type="text/css">
            #line-chart {
                height:300px;
                width:800px;
                margin: 0px auto;
                margin-top: 1em;
            }
            .brand { font-family: georgia, serif; }
            .brand .first {
                color: #ccc;
                font-style: italic;
            }
            .brand .second {
                color: #fff;
                font-weight: bold;
            }
        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../favicon.ico">
    </head>

    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
    <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> 
    <body class=""> 
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                       
                    </li>
                    <li id="fat-menu" class="dropdown">
                        <form action="logout.php" method="post">
                            <input type="hidden" size="1" name="id_user" value="<?php
                            include"../config/koneksi.php";
                            echo "$_SESSION[id_user]";
                            ?>" />
                            <input type="submit" value="Logout" class="btn-success" />
                        </form>
                    </li>
                </ul>
                <a class="brand" href="#"><span class="first"></span> <span class="second"><span></a>
            </div>
        </div>




        <div class="sidebar-nav">

            <a href="?page=home" class="nav-header" data-toggle="collapse"></a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=home">Home</a></li>
            </ul>

            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>HOME</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=banner">Banner List 1</a></li>
                <li ><a href="?page=banner2">Banner List 2</a></li>
            </ul>
            
            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>CORPORATE</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
            	<li ><a href="?page=corporate">Corporate Indentity</a></li>
                <li ><a href="?page=kaizen">Kaizen Activities</a></li>
                <li ><a href="?page=social">Social Activities</a></li>
                <li ><a href="?page=visimisi">Visi & Misi</a></li>
            </ul>
            
            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>SAFETY & QUALITY POLICY</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
            	<li ><a href="?page=iso">ISO</a></li>
                <li ><a href="?page=5r">5R Activities</a></li>
            </ul>

            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>NEWS</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=berita">News List</a></li>
                <li ><a href="?page=popular">Popular Post</a></li>
            </ul>
            
             <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>PRODUCT</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=tambahproduk">Category Product</a></li>
                <li ><a href="?page=listspek">Spesification List</a></li>
            </ul>
			
            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>CSR</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=csr">CSR</a></li>
            </ul>
            
             <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>SALES</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=customer">Top Customer</a></li>
            </ul>
            
            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Testimoni</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=testimoni">View Testimoni</a></li>
            </ul>

 
            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Sejarah Perusahaan</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=sejarah">Sejarah</a></li>
            </ul>
            
            <a href="#" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>User</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li ><a href="?page=sales_list">Data User</a></li>
            </ul>

        </div>



        <div class="content">
            <ul class="breadcrumb">
                <li><a href="?page=lappendaftaran"><input type="button" class="btn-primary" value="Laporan" /></a> <span class="divider">/</span></li>
                <li><a href="?page=lappembayaran"><input type="button" class="btn-primary" value="Laporan" /></a> <span class="divider">/</span></li>
            </ul>

            <div class="container-fluid">
                <div class="row-fluid">


                    <div class="row-fluid"></div>

                    <?php
                    if (isset($_GET['page'])) {
                        $page = htmlentities($_GET['page']);
                        $halaman = "$page.php";
                        if (!file_exists($halaman) || empty($page)) {
                            echo "Welcome";
                        } else {
                            include_once "$halaman";
                        }
                    } else {
                        include "home.php";
                    }
                    ?>


                    <div class="row-fluid"></div>
                </div>
            </div>
        </div>


    </body>
</html>