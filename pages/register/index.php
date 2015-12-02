   <?php 
        session_start();
        if(isset($_SESSION['Start&Boost'])){
            header("location:../index.php");
        }else{
            $_SESSION['pages']='timeline';
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Start&Boost</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/iCheck/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  <body style="background-color:#eee;" class="hold-transition skin-blue fixed sidebar-mini">
    <div class="">
        <nav class="navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <i class="navbar-brand"><img src="../../images/SNBlogo.png" style="width:13%;"></i>
            </div><!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                    <li class="active"><a href="../index.php" class="scroll-link">Back</a></li>                  
                </ul>
            </div><!--/.navbar-collapse-->
        </nav>
    </div>
<!-- CONTENT --><br/><br/>
    <div class="container">
    <div class="row">
        <div class="form-group col-md-6">  
            <form action="index.php" method="post">
                <div class="col-md-7">                          
                    <select id="userType" name="userType" class="form-control select2" style="width: 100%;">
                        <option name="userType" selected="selected">-- Type of User --</option>
                        <option name="userType" value="ideator">Ideator</option>
                        <option name="userType" value="investor">Investor</option>
                        <option name="userType" value="company">Company</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <input class="btn btn-primary pull-right " type="submit" value="GO" name="go">                    
                </div>
            </form>
        </div>
    </div>
        <br/>
        <div class="nav-tabs-custom">
        <?php if(isset($_POST['go'])){
                #if($_POST['userType']='ideator'){
                    echo '<ul class="nav nav-tabs">
                            <li class="active"><a href="#ideator" data-toggle="tab">Ideator</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="active tab-pane" id="ideator">';
                    include("ideator.php");
                    echo '
                        </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->';
                /*}
                if($_POST['userType']='investor')){
                    #include("investor.php");
                }
                if($_POST['userType']='company')){
                    #include("company.php");
                }*/
            }
            
        ?>

        </div><!-- /.nav-tabs-custom -->
    </div>
<!-- FOOTER -->
    <?php include("../dashboard/end.php");}?>