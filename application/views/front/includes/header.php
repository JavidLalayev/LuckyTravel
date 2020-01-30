<!--

    Developers:
        Lələyev Cavid   : cavidleleyev@gmail.com
        Qədirov Mutalib : mutalib0101@gmail.com
        Aslanov Elxan   : aslanov.elxan@gmail.com

-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="<?php echo base_url("uploads/logo/$logo[img]")?>"/>
    <link href="<?php echo base_url("public/front/") ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url("public/front/") ?>css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url("public/front/") ?>css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url("public/front/") ?>css/font-awesome.min.css">
    <link href="<?php echo base_url("public/front/") ?>css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url("public/front/") ?>css/custom.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url("public/front/") ?>js/jquery-2.1.4.min.js"></script>

    <style>
        .search-form .form-group {
            float: right !important;
            transition: all 0.35s, border-radius 0s;
            width: 32px;
            height: 32px;
            background-color: #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
            border-radius: 25px;
            border: 1px solid #ccc;
        }
        .search-form .form-group input.form-control {
            padding-right: 20px;
            border: 0 none;
            background: transparent;
            box-shadow: none;
            display:block;
        }
        .search-form .form-group input.form-control::-webkit-input-placeholder {
            display: none;
        }
        .search-form .form-group input.form-control:-moz-placeholder {
            /* Firefox 18- */
            display: none;
        }
        .search-form .form-group input.form-control::-moz-placeholder {
            /* Firefox 19+ */
            display: none;
        }
        .search-form .form-group input.form-control:-ms-input-placeholder {
            display: none;
        }
        .search-form .form-group:hover,
        .search-form .form-group.hover {
            width: 100%;
            border-radius: 4px 25px 25px 4px;
        }
        .search-form .form-group span.form-control-feedback {
            position: absolute;
            top: -1px;
            right: -2px;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            color: #3596e0;
            left: initial;
            font-size: 14px;
        }

    </style>

    <title>Let's Travel</title>
</head>


<body class="no-overflow" data-color="theme-1">

<div class="c_spinner">
    <div class="loader-18"></div>
</div>