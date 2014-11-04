<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tapster Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><img src="img/logo.png" class="img-responsive" alt="Tapster"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#product">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	    <!-- Header -->
    <header class="application">
        <div class="container">
					<div class="intro-title">Tapster's Application Form</div>
        </div>
    </header>
    
<form class="form-horizontal" style="margin: 0 auto; padding-bottom:50px;">
<fieldset>

<!-- Form Name 
<legend>application</legend> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Full Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="disName">Display Name</label>  
  <div class="col-md-4">
  <input id="disName" name="disName" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company">Company</label>  
  <div class="col-md-4">
  <input id="company" name="company" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="designation">Designation / Position</label>  
  <div class="col-md-4">
  <input id="designation" name="designation" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="offNum">Office Number</label>  
  <div class="col-md-4">
  <input id="offNum" name="offNum" type="text" placeholder="eg. 0377100110" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mobile">Mobile</label>  
  <div class="col-md-4">
  <input id="mobile" name="mobile" type="text" placeholder="eg. 0123456789" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="example@test.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Office Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address" required=""></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="picture">Card Softcopy</label>
  <div class="col-md-4">
    <input id="picture" name="picture" class="input-file" type="file">
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="usage">I'm getting Tapster for</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="usage-0">
      <input type="checkbox" name="usage" id="usage-0" value="1">
      my company's staff and team usage
    </label>
	</div>
  <div class="checkbox">
    <label for="usage-1">
      <input type="checkbox" name="usage" id="usage-1" value="2">
      own usage
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="remark">Remark</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="remark" name="remark"></textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sources">How did you know about Tapster?</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="sources-0">
      <input type="checkbox" name="sources" id="sources-0" value="1">
      A Tapster official
    </label>
	</div>
  <div class="checkbox">
    <label for="sources-1">
      <input type="checkbox" name="sources" id="sources-1" value="2">
      Social Media (facebook/twitter etc.)
    </label>
	</div>
  <div class="checkbox">
    <label for="sources-2">
      <input type="checkbox" name="sources" id="sources-2" value="3">
      Friends or family
    </label>
	</div>
  <div class="checkbox">
    <label for="sources-3">
      <input type="checkbox" name="sources" id="sources-3" value="4">
      Google
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="category">Card Category</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="category-0">
      <input type="radio" name="category" id="category-0" value="1" checked="checked">
      General Design
    </label>
	</div>
  <div class="radio">
    <label for="category-1">
      <input type="radio" name="category" id="category-1" value="2">
      Customized Design
    </label>
	</div>
  </div>
</div> -->

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="cardPic">Custom Card Design</label>
  <div class="col-md-4">
    <input id="cardPic" name="cardPic" class="input-file" type="file">
  </div>
</div>
<label class="col-md-4 control-label" for="address"> </label>
<button type="submit" class="btn btn-default" onclick="location.href='#top'">Submit</button>
</fieldset>
</form>

    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Tapster 2014. All Rights Reserved.</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/tapsterme" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="copyright">Designed & Developed by Steven Lee</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</body>

</html>
