<!DOCTYPE html>
<html>

<head>

	<title>Simple Website using Laravel</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset('dist/dist/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/_all-skins.css') }}">

	<script src="{{ asset('dist/dist/bootstrap.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/demo.js') }}"> </script>
	<script src="{{ asset('dist/dist/fastclick.js') }}"> </script>
	<script src="{{ asset('dist/dist/jquery.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/jquery.slimscroll.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/icheck.min.js') }}"> </script>

</head>

<body>

	<br>
	<br>
	<h1 align="center">Simple Crud Website</h1>
	<br>
	<div class="container">
		<div class="container">
		<button type="button" class="btn btn-warning" style="float: right;">Add</button>
		  		<table class="table table-bordered" style="border-radius: 5px;">
		    		<thead>
		      			<tr>
		        			<th>User ID</th>
		        			<th>Firstname</th>
		        			<th>Lastname</th>
		        			<th>Username</th>
		        			<th>Password</th>
		        			<th>Role ID</th>
		        			<th>Edit</th>
		        			<th>Delete</th>
		      			</tr>
		    		</thead>
		    		<tbody id="id_list">

		    		</tbody>
		  		</table>
		</div>
	</div>

	<!--<div class="modal fade" id="addModal" role="dialog">
    	<div class="modal-dialog modal-sm">
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">Modal Header</h4>
        		</div>
        		<div class="modal-body">
          			<p>This is a small modal.</p>
        		</div>
        		<div class="modal-footer">
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		</div>
      		</div>
    	</div>
  	</div>-->

</body>

<script type="text/javascript">
	
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

</script>

<script type="text/javascript">

	showData();

    function showData(){

        $.ajax({
          type: "GET",
          url: "retData",
          dataType: "json",
          
          success: function(data){

            var html;
            var i;
            //var x = i;

             for(i=0; i<data.length; i++){

                html += '<tr>';

                html += '<td>'+data[i].Userx_ID+'</td>';
                html += '<td>'+data[i].firstname+'</td>';
                html += '<td>'+data[i].lastname+'</td>';
                html += '<td>'+data[i].username+'</td>';
                html += '<td>'+data[i].password+'</td>';
                html += '<td>'+data[i].Role_ID+'</td>';
                html += '<td><button class="btn btn-primary">Edit</button></td>';
                html += '<td><button class="btn btn-danger">Delete</button></td>';

                html += '</tr>';

             }

              $('#id_list').html(html);
          }

        });
    }

</script>

</html>

<!--PORTAL VIEW BACKUP-->
<!--<!DOCTYPE html>
<html>
<head>
	<title>NCF Social Network Portal</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset('dist/dist/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/_all-skins.css') }}">

	<script src="{{ asset('dist/dist/demo.js') }}"> </script>
  	<script src="{{ asset('dist/dist/jquery.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/bootstrap.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/fastclick.js') }}"> </script>
	<script src="{{ asset('dist/dist/jquery.slimscroll.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/icheck.min.js') }}"> </script>

  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navx">
			<a class="navbar-brand" href="portal"><img src="{{ asset('images/portal/ncftiger2.png') }}" height="60px;" width="50px;" style="margin: -25px 5px;"></a><a class="navbar-brand a1" href="portal">Home</a>
		</nav>
	</header>
	
	<a><div class="container bgnewx">
			<div class="contentnews">
				<img class="bgnewsimg" src="{{ asset('images/portal/bgnews.jpg') }}">
					<a><h1><b>News</b></h1></a>
					
			</div>
	</div></a>

	<footer class="footer bg-success footerx">
		<div class="container footerdiv">
			<span class="text-muted">Naga College Foundation Inc.</span>
		</div>
	</footer>
</body>
<script type="text/javascript">
		
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
		}
	});
</script>
<style type="text/css">
	.footerx{
		position: fixed;
		left: 0;
		bottom: 0;
		width: 1700px;
	}

	.footerdiv{
		padding: 15px;
		margin-left: 0px;
	}

	.navx{
		background-color: #006400;
		border-radius: 0px;
	}

	.a1{
		color:white; 
		margin: 0px -20px;
	}

	.bgnews{
		padding: 150px;
  		position: relative;
	}

	.bgnewsimg{
		background-repeat: no-repeat;
		opacity: 0.6;
  		position: absolute;
  		left: 0;
  		top: 0;
  		width: 50%;
  		height: 65%;	
	}

	.bgnewsimg:hover{
		opacity: 1.0;
	}

	.newscontent{
		color: white; 
		position: relative; 
		bottom: 65px;
		right: 105px;
	}

	.bgnewx{
		position: relative;
	}

	.bgnewx:before{
		 content: ' ';
 		 display: block;
  		 position: absolute;
  		 padding: 115px;
  		 left: 0;
 		 top: 0;
 		 width: 50%;
 		 height: 65%;
 		 opacity: 0.6;
 		 background-image: url('images/portal/bgnews.jpg');
 		 background-repeat: no-repeat;
 		 background-position: 50% 0;
 		 background-size: cover;
 		 border-radius: 15px;
	}

	.bgnewx:hover{
		opacity: 1.0;
	}
	
	.contentnews{
		position: relative;
		color: white; 
		top: 105px;
		left: 30px;
		-webkit-text-stroke: 1.5px black;
	}
</style>
</html>-->