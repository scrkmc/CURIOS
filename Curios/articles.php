
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">CURIOS</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="articles.php"><i class="fa fa-fw fa-newspaper-o"></i> Research Articles</a>
                    </li>
                    <li class="active">
                        <a href="investments.php"><i class="fa fa-fw fa-leaf"></i> R&D Investments</a>
                    </li>
                    <li class="active">
                        <a href="logout.php"><i class="fa "></i> Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Research Articles and open access content by typing keywords in the search box

                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


                <div class="container mt-5">

<div class="row d-flex justify-content-center">

    <div class="col-md-10">

        <div class="card p-3  py-4">

            <h4>Search for Research Articles    </h4>

            <div class="row g-3 mt-2">

                <div class="col-md-3">

                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        Any Status
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Rural</a></li>
                        <li><a class="dropdown-item" href="#">Urban</a></li>
                        <li><a class="dropdown-item" href="#">All</a></li>
                      </ul>
                    </div>
                    
                </div>

                <div class="col-md-6">

                    <input type="text" class="form-control" placeholder="Research Title">
                    
                </div>

                <div class="col-md-3">

                    <button class="btn btn-secondary btn-block">Search Results</button>
                    
                </div>
                
            </div>


            <div class="mt-3">
                
<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="advanced">
Advance Search With Filters <i class="fa fa-angle-down"></i>
</a>


<div class="collapse" id="collapseExample">
<div class="card card-body">

<div class="row">

<div class="col-md-4">

    <input type="text" placeholder="Author Name" class="form-control">
    
</div>


<div class="col-md-4">

    <input type="text" class="form-control" placeholder="Keywords">
    
</div>
 

 <div class="col-md-4">

    <input type="text" class="form-control" placeholder="Domain">
    
</div>
 
</div>

</div>
</div>


            </div>


            


    
        </div>
        
    </div>
    
</div>





</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
