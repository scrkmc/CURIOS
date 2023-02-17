
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">CURIOS</a>
            </div>
     
         
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
        
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           CURIOS <small>     Caraga Unified Repository of Innovations and Scientific Studies</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                  <h2>Add New Record</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transac.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Project Title" name="proj_title" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Proponents" name="proponents" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Fund Source" name="fund_source" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Project Duration" name="proj_duration" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Funds Allocated" name="funds_alloc" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Sector" name="sector" required>
                            </div> 
                            <button type="submit" class="btn btn-default">Save</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
                
            </div>
      

        </div>
   

    </div>
  
    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

