@extends('layouts.header')


@section('content')

<div id="wrapper">
        <!-- start header -->
       
        <!-- end header -->
        <section id="inner-headline">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Features</a><i class="icon-angle-right"></i></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div> -->
        </div>
        </section>
        <section id="content">
    <div class="container">
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" class="register-form" method="post">
                <h2>Please Enter <small>Your Credential	</small></h2>
                <hr class="colorgraph">
    
                <div class="form-group">
                    <input type="text" name="user" id="email" class="form-control input-lg" placeholder="Username" tabindex="4">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
    
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
                        <!-- <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info" tabindex="7">Remember me</button>
                            <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                        </span> -->
                    </div>
                </div>
                
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Check Status" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    <!-- <div class="col-xs-12 col-md-6">Don't have an account? <a href="register.html">Register</a></div> -->
                </div>
            </form>
        </div>
    </div>
    
    </div>
        </section>
    
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="widget">
                            <h4>Business Hours:</h4>
                            <ul>
                                <li>Mon-Fri: 10 to 5pm</li>
                                <li>Saturday: 10 to 2pm</li>
                                <li>All Sundays: Closed</li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-sm-2 col-lg-2">
                         
                    </div>
                    <div class="col-sm-7 col-lg-7">
                        <img src="img/p1.png" style="width: 400px; height: 30px;">
                    </div>
                    
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>
                                    <span>&copy;  2018 DIGITALCSPGROUP.COM All Rights Reserved | 
                                     <!-- 
                                        All links in the footer should remain intact. 
                                        Licenseing information is available at: http://bootstraptaste.com/license/
                                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Sailor
                                    -->
                                
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="social-network">
                                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>	
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script src="js/jquery.cubeportfolio.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    
        
@endsection