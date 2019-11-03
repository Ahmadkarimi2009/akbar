  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <style type="text/css">
      #greet{
        background: seagreen;
        color:white;
        font-family: monospace;
        padding: 20px;
        text-align: center;
      }
    </style>
  </head>
  <body>
      <h2 id="greet">Welcome {{$user->name}} to KARMONDANA.COM</h2>
      <br/>
      <p class="lead">Thank you for registering to our website. It's an honor to have you in our community.</p>
      <br/>
      <p class="lead">Your account has been successfully created. in order to be able to login for the first time, click the link below to activate your account.</p>
      <br/>
      <a class="btn btn-sucess pl-5 pr-5" href="{{url('company/verify', $user->varificationcode)}}">Verify Email</a>
  </body>
  </html>