@extends('layouts.header')


@section('content')

<div id="wrapper">
        <!-- start header -->

        <!-- end header -->
        <section id="inner-headline">
        <div class="container">
            
        </div>
        </section>
        <section id="content">
    <div class="container">
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <h1>Register Now</h1>

            <!-- Display Validation Error -->
            @if ($errors->any())

            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
            @endforeach
            @endif 

            {!! Form::open(['action' => 'ApplicantController@store', 'method'=>'POST']) !!}
    
            <!--<form role="form" class="register-form" method="post" action="http://www.paypoint.ind.in/insert.php">-->
                <h5>ELIGIBLITY FOR OPENING & MAINTAINING OF CSP</h5>
                <hr class="colorgraph">
                <div class="row">
    
                    <div class="col-xs-12 col-sm-6 col-md-12">
                        
    
                        <div class="form-group">
                            {{Form::label('bank', 'Kiosk banking (required)')}}
                            <!--<b>Kiosk banking (required)</b>-->
                            {{Form::select('bankname', [''=>'--Select Bank--',
                             'State Bank of India' => 'State Bank of India',
                             'Punjab National Bank' => 'Punjab National Bank',
                             'Bank of Baroda' => 'Bank of Baroda',
                             'Bank of India' => 'Bank of India',
                             'Central Bank of India' => 'Central Bank of India',
                             'Canara Bank' => 'Canara Bank',
                             'Allahabad Bank' => 'Allahabad Bank',
                             'ICIC Bank' => 'ICIC Bank',
                             'Axis Bank' => 'Axis Bank',
                             'Bandhan bank' => 'Bandhan bank',
                             'Union Bank of India' => 'Union Bank of India',
                             'Bihar Kshetriya Gramin Bank' => 'Bihar Kshetriya Gramin Bank',
                             'UCO Bank' => 'UCO Bank',
                             'Indian Bank' => 'Indian Bank',
                             'Others' => 'Others'], 'bankname',['class'=>'form-control'])}}

                            
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="form-group">
                            {{Form::label('username', 'Name of the Candidate (required)')}}
                            {{Form::text('name','',['class'=>'form-control input-lg','placeholder'=>'Name', 'tabindex'=>'1'])}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="form-group">
                            {{Form::label('email', 'Your Email (required)')}}        
                            {{Form::text('email','',['class'=>'form-control input-lg','placeholder'=>'Email', 'tabindex'=>'2'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('mobileno', 'Mobile No. (required)')}}
                    {{Form::text('mobileno','',['class'=>'form-control input-lg','placeholder'=>'Mobile', 'tabindex'=>'3'])}}
                </div>
                <div class="form-group">
                    {{Form::label('city', 'Your City. (required)')}}

                        {{Form::text('city','',['class'=>'form-control input-lg','placeholder'=>'City', 'tabindex'=>'4'])}}
                </div>
                <!-- <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
                        <span class="button-checkbox">
                            
                            <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                            <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                        </span>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                         By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                    </div>
                </div>
                
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" name="sub" value="Register" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
                    <!-- <div class="col-xs-12 col-md-6">Already have an account? <a href="login.html">Sign In</a></div> -->
                </div>

            {{Form::submit('Submit',['class'=>'label label-primary'])}}
           {!! Form::close() !!}
            
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
                                    <span>&copy;  2018 Digitalcspgroup.in All Rights Reserved | 
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