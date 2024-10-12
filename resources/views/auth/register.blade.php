<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Car Admin | Register</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- Custom Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
</head>
<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form method="POST" action="{{ route('admin.register.submit') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <h1>Create Account</h1>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="name" type="text" id="first-name" required="required" class="form-control ">
                                    @error("name") 
                                        {{ $message }} 
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user-name">Username <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="user-name" name="user_name" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="email" class="form-control" type="email" name="email" required="required">
                                    @error("email") 
                                        {{ $message }} 
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="flat">
                                    </label>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="password" name="password" required="required" class="form-control">
                                    @error("password") 
                                        {{ $message }} 
                                    @enderror
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <p class="change_link">Already a member? 
                                    <a href="{{ route('login') }}" class="to_register"> Log in </a>
                                </p>
                            </div>
                        </form>
                    </section>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>
