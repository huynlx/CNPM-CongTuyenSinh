<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/logo.jpg" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/styles-admin.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/Responsive.css">

  <style>
    .content-header {
      padding-top: 7px;
      padding-bottom: 0px;
    }

    /* .page-display {
      float: right;
    } */

    /* .pagination b {
      border: 1px solid #999999;
      transition: background-color .3s;
      text-decoration: none;
      padding: 8px 16px;
      color: #fff;
      background: #999999;
      float: left;

    } */

    .pagination a:first-child {
      border-bottom-left-radius: 6px;
      border-top-left-radius: 6px;
    }

    .pagination a:last-child {
      border-bottom-right-radius: 6px;
      border-top-right-radius: 6px;
    }

    /* .pagination .label-pagination {
      float: left;
    } */

    .pagination a:hover {
      background: #999999;
    }

    .pagination {
      display: inline-block;
      width: 100%;
    }

    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
    }



    /* .pagination a.active {
      background-color: #4CAF50;
      color: white;
      border: 1px solid #4CAF50;
    } */

    .pagination a:hover:not(.active) {
      background-color: #ddd;
    }

    /* .pagination-btns {
      float: right;
    } */

    .table-bordered td,
    .table-bordered th,.table thead th {
      border: 1px solid #b2b9ce;
      padding: 8px;
      color: #10182F;
    }

    table.table-list td,
    table.table-list tr {
      text-align: center;
      vertical-align: middle ! important;
    }

    .small-box {
      background-color: #0E1731;
      border-radius: 10px;
      color: white;
      padding: 15px 20px;
      box-shadow: 0px 14px 20px -5px rgba(4, 26, 90, 0.340773);
      top: 0;
      transition: top 0.11s linear;
      transition: all 0.11s ease;
      cursor: pointer;

    }


    .small-box:hover {
      top: 10px;
      box-shadow: 0px 0px 0px rgba(33, 33, 107, 0.35);
    }

    body {
      background-color: #F5F6FA;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">