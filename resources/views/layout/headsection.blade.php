<!DOCTYPE html>
@if(session()->has('locale'))
    @if(session()->get('locale')=='en')
        <html lang="en">
    @else
        <html lang="pt" dir="rtl">
    @endif
@else
    <html lang="en">
@endif
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143925072-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-143925072-2');
    </script>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style type="text/css">
        .logindropdowncontainer{
            background: #28a745;
            text-align: right;
        }
        .dropdown-item:hover{
            background: #28a745;
        }

        .topnavbarwithoutuserinfo{
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
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

        .select2-container .select2-selection--single{
            height:auto;
            padding:10px;
        }


        .select2{
            display:block !important;
            width: 100% !important;
            height: 28px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height:auto;
            top:50%;
        }
        .header-area.single-page{
            background-image:none;
            background:inherit;
        }

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
        .input-group-icon .select2, .input-group-icon input{
            padding: 0px 0px 0px 8px !important;
            height:28px !important
        }
        .input-group-icon textarea{
            padding: 0px 0px 0px 8px !important;
        }
        .input-group-icon .select2, .input-group-icon input:focus, .input-group-icon .select2, .input-group-icon textarea:focus{
            box-shadow:none !important;
            background:#f9f9ff;
        }

        .select2-dropdown{
            border:1px solid rgb(240,240,240);
        }


        .datepicker-days th{
            color:limegreen
        }




/************************************************************/
/************************************************************/
/************************************************************/
/*                                                          */
/*                                                          */
/*                     Tagging Inputs                       */
/*                                                          */
/*                                                          */
/************************************************************/
/************************************************************/
/************************************************************/
        .selectize-input, .selectize-control.single .selectize-input.input-active{
            background:#f9f9ff !important;
        }
        .selectize-input{
            padding-left:10px !important;
        }
        .selectize-input.focus{
            box-shadow:none !important;
        }
        .selectize-control.multi .selectize-input > div{
            padding: 3px 15px !important;
            background:#28a745 !important;
            color:white !important;
        }


        @media (max-width: 967.98px){
            .main-menu.main-menu-light ul{
                background: #28a745;
            }
            .logindropdowncontainer{
                text-align: left;
            }
        }

        @media (max-width: 991.98px){
            .topnavbarwithoutuserinfo{
                width: 100%;
            }
        }

    </style>