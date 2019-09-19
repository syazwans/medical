<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/PERKESO_UI/assets/images/perkeso.jpg">
    <title>BeAMS</title>
    
    {{--@include('css')--}}
    <link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />
    <link href="PERKESO_UI/horizontal-nav-fullwidth/dist/css/pages/login-register-lock.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="PERKESO_UI/horizontal-nav-fullwidth/dist/css/style.min.css" rel="stylesheet">

</head>

<body id="login">
    
<div id='container'>
    <div id='imagediv'>
        <div class="form-group">
            <section id="wrapper" class="login-register login-sidebar" style='background-image:url(PERKESO_UI/assets/images/background/pks_bground.jpg)'></section>
        </div>

    </div>  
    
        
    <div id='logindiv' class="login-box card">
        <div class="card-body">
            
                
                
            <form class="form-horizontal form-material  text-center" method="POST" action="/login">
                <a><img src="/PERKESO_UI/assets/images/perkeso.jpg" class="text-center" alt="Home" /></a>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <br>
                <h3 class="text-center m-b-20">Sign In</h3>

                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" id='loginid' type="text" name="loginid" required="" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" id='password' type="password" name="password" required="" placeholder="Password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">

             <!--            <div class="d-flex no-block align-items-center">
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                               </label>
                           </div>
                       </div> -->

                       <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded">
                             Login
                         </button>
                     </div>
               <!--  {{--  <a href="/home" class="btn btn-info btn-lg btn-block text-uppercase btn-rounded"> LOGIN</a>
               </div> --}} -->
                       </div>
                    </div>
                </div>

               <div class="flex-col-c p-t-50 p-b-1">
                <label class="txterror p-b-9">
                    {{Session::get('error')}}
                </label>
                </div>
               </form>
                        </div>
                 </div>
        
    
</div>




<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/popper/popper.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });

        // history.pushState(null, null, location.href);
        // window.onpopstate = fuction (){
        //  history.go(1);

     </script>

  {{--   <script type="text/javascript">
        function preback(){window.history.forward();}
        setTimeout("preback()",0);
        window.onunload=function(){null};
    </script> --}}

      {{-- <script type="text/javascript">
       history.pushState(null, null, location.href);
        window.onpopstate = fuction (){
           history.go(1);
       };
   </script> --}}
   
</body>

</html>
</section>
