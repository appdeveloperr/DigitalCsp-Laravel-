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
                <form method="POST" action="{{ route('login') }}">
                        <h2>Please Enter <small>Your Credential	</small></h2>
                        <hr class="colorgraph">
            
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="userid" type="text" class="form-control input-lg @error('userid') is-invalid @enderror" name="userid" value="{{ old('userid') }}" required autocomplete="userid"  placeholder="Enter UserID" tabindex="4"autofocus>

                                @error('userid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                     
                        
                        <hr class="colorgraph">
                        
                        <div class="form-group row mb-0">
                                <div class="col-xs-12 col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="7">
                                        {{ __('Check Status') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
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