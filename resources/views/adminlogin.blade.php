<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- Custom styles for this template -->
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: khaki;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            background:white;
            box-shadow: 4px 4px 10px gray;
        }

/************************************************************/
/************************************************************/
/************************************************************/
/*                                                          */
/*                                                          */
/*                          Forms                           */
/*                                                          */
/*                                                          */
/************************************************************/
/************************************************************/
/************************************************************/

        .input-group-icon *{
            border: none !important;
            padding:0px !important;
            font-size:13px;
            font-family:"Segoe UI", Arial, sans-serif;
            background:#f9f9ff;
        }
        .input-group-icon{
            border: 1px solid #f9f9ff;
            cursor:pointer !important;
            background:#f9f9ff;
        }
        .input-group-icon label{
            padding: 8px 0px 0px 8px !important;
            text-transform:uppercase;
            margin-bottom:0px;
            width:98%;
            color:black
        }
        .input-group-icon label span{
            color:red
        }
        .input-group-icon input{
            padding: 0px 0px 0px 8px !important;
            height:28px !important
        }

        .input-group-icon input:focus{
            box-shadow:none !important;
            background:#f9f9ff;
        }
        .fieldsets{
            border: 1px solid green;
        }
        legend{
            color:green;
        }
    </style>
  </head>

  <body class="">
    <form class="form-signin"  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="logo-area mb-4 mt-5 text-center">
            <a href="index.html"><img src="{{asset('assets/images/logogreen.png')}}" alt="logo" class="w-50"></a>
        </div>
        <fieldset class="fieldsets p-3 rounded">
            <legend class="w-auto pl-3 pr-3"><h5>Admin Login</h5></legend>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group-icon mt-3">
                        <label class="text-left">{{ __('E-Mail Address') }}<span class="float-right">*</span></label>
                        <input type="text" name="email" placeholder="admin@example.com"   required="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mr-2" autocomplete="off">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group-icon mt-3">
                        <label class="text-left">{{ __('Password') }}<span class="float-right">*</span></label>
                        <input type="password" name="password" placeholder="admin123"   required="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mr-2" autocomplete="off">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <input class="d-none" value="admin" name="admin">
            <div class="row mt-2">
                <div class="col-md-12 text-center">
                        <label>
                            <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                </div>
            </div>

            <button class="btn btn-lg btn-success btn-block mt-3" type="submit">Sign in</button>
        </fieldset>
    </form>
  </body>
</html>

