<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="{{ asset("bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css")}}">
  <link rel="stylesheet" href="{{ asset("bower_components/admin-lte/dist/css/adminlte.min.css")}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  @include('admin.header')
  @include('admin.sidebar')
  @include('admin.content')
  @include('admin.control-sidebar')
  @include('admin.footer')

</div>

<script src="{{ asset("bower_components/admin-lte/plugins/jquery/jquery.min.js")}}"></script>
<script src="{{ asset("bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{ asset("bower_components/admin-lte/dist/js/adminlte.min.js")}}"></script>
</body>
</html>
