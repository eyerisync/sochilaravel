<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Node js upload/Import excel file to MySQL database - Tutsmake.com</title>
      <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset('dist/dist/bootstrap.min.css') }}">
	<!--<link rel="stylesheet" href="{{ asset('dist/dist/font-awesome.min.css') }}">-->
	<link rel="stylesheet" href="{{ asset('dist/dist/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/_all-skins.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
  

	<script src="{{ asset('dist/dist/demo.js') }}"> </script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
  <script src="{{ asset('dist/dist/jquery.min.js') }}"> </script>
  <script src="{{ asset('dist/dist/bootstrap.min.js') }}"> </script>
  <script src="{{ asset('dist/dist/fastclick.js') }}"> </script>
  <script src="{{ asset('dist/dist/jquery.slimscroll.min.js') }}"> </script>
  <script src="{{ asset('dist/dist/icheck.min.js') }}"> </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    </head>
    <body>
      <h1>Node js upload Excel file to MySQL database - Tutsmake.com</h1>
      <form action="/uploadfile" enctype="multipart/form-data" method="post">
        <input type="file" name="uploadfile" accept='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel' >
        <input type="submit" value="Upload Excel">
      </form>  
    </body>
</html>