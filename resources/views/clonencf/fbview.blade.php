<!DOCTYPE html>
<html>
<head>
	<title>Health System</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset('dist/dist/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/dist/_all-skins.css') }}">

	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
	<script src="{{ asset('dist/dist/demo.js') }}"> </script>
  <script src="{{ asset('dist/dist/jquery.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/bootstrap.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/fastclick.js') }}"> </script>
	<script src="{{ asset('dist/dist/jquery.slimscroll.min.js') }}"> </script>
	<script src="{{ asset('dist/dist/icheck.min.js') }}"> </script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

</head>
<body>
	<br>
	<br>
	<br>
	<div class="container" style="margin-right: 230px;">
		<div class="container">
			<a type="button" class="btn btn-warning" href="health">Home</a>
			<button href="#" class="btn btn-success" data-toggle="modal" data-target="#modalAddChild" style="float: right;">Add</button>
			<br>
		  	<h2 class="text-primary"><strong>Health Organizer</strong></h2>
		  	<p>List of information of children:</p>            
		  		<table class="table table-bordered" id="data_table" style="border-radius: 5px;">
		  			<thead>
		      			<tr>
		      				<th>No.</th>
		        			<th>Address/Zone</th>
		        			<th>Name of Mother/Caregiver</th>
		        			<th>Fullname of Child</th>
		        			<th>Sex</th>
		        			<th>Date of Birth</th>
		        			<th>Weight</th>
		        			<th>Height</th>
		        			<th>Edit</th>
                  <th>Update</th>
		        			<th>Delete</th>
		      			</tr>
		    		</thead>
		  			<tbody id="data_list">
		  				
		  			</tbody>
		  		</table>
		</div>
	</div>

  <!--Create modal form-->
	<div id="modalAddChild" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title"><b>Add Child</b></h4>
      			</div>
      			<div class="modal-body">
        			<form  id="saveChild" method="post">
        				<!--@csrf_field
        				@csrf_field
        				{{ method_field('PUT') }}-->
  						<div class="form-group">
    						<label for="zone">Zone:</label>
    						<input type="text" class="form-control" id="zone" name="zone" required>
  						</div>

  						<div class="form-group">
    						<label for="mothersname">Mother's Name:</label>
    						<input type="text" class="form-control" id="mothersname" name="mothersname" required>
  						</div>

  						<div class="form-group">
    						<label for="childsname">Child's Name:</label>
    						<input type="text" class="form-control" id="childsname" name="childsname" required>
  						</div>

						  <div class="form-group">
  							<label>Sex:</label>
  							<select class="form-control" id="sex_id" name="sex_id" required>
    							<option value="">M or F</option>
    							@foreach ($sex as $key => $value)
    							<option id="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
    							@endforeach							
  							</select>
						  </div>

						  <div class="form-group">
    						<label>Date of Birth:</label>
    						<input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="YYYY-MM-DD" required>
  					  </div>

  						<div class="form-group">
    						<label>Weight(kg):</label>
    						<input type="" class="form-control" id="weight" name="weight" required>
  						</div>

  						<div class="form-group">
    						<label>Height(cm):</label>
    						<input type="" class="form-control" id="height" name="height" required>
  						</div>
  						
  						<div class="form-group">
  							<button type="submit" class="btn btn-flat btn-primary" id="saveBtn">Submit</button>
  						</div>
  						
					</form>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			</div>
    		</div>
  		</div>
	</div>

  <!--Read modal form-->
  <div id="modalReadChild" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>Read Child</b></h4>
            </div>
            <div class="modal-body">
              <form  id="readChild" method="post">

              <div class="form-group">
                <label for="zone">Zone:</label>
                <input type="text" class="form-control" id="zone1" name="zone1" readonly>
              </div>

              <div class="form-group">
                <label for="mothersname">Mother's Name:</label>
                <input type="text" class="form-control" id="mothersname1" name="mothersname1" readonly>
              </div>

              <div class="form-group">
                <label for="childsname">Child's Name:</label>
                <input type="text" class="form-control" id="childsname1" name="childsname1" readonly>
              </div>

              <div class="form-group">
                <label>Sex:</label>
                <select class="form-control" id="sex_id1" name="sex_id1" readonly>
                  <option value="">M or F</option>
                  @foreach ($sex as $key => $value)
                  <option id="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                  @endforeach             
                </select>
              </div>

              <div class="form-group">
                <label>Date of Birth:</label>
                <input type="text" class="form-control" id="birthdate1" name="birthdate1" placeholder="YYYY-MM-DD" readonly>
              </div>

              <div class="form-group">
                <label>Weight(kg):</label>
                <input type="" class="form-control" id="weight1" name="weight1" readonly>
              </div>

              <div class="form-group">
                <label>Height(cm):</label>
                <input type="" class="form-control" id="height1" name="height1" readonly>
              </div>
              
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
  </div>

<!--Update modal form-->
<div id="modalUpdateChild" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>Update Child</b></h4>
            </div>
            <div class="modal-body">
              <form id="updateChild" enctype="multipart/form-data">
                @csrf
                <!--{{ method_field('PUT') }}-->
              <div class="form-group">
                <label for="zone">Zone:</label>
                <input type="text" class="form-control" id="zonex" name="zone" required>
              </div>

              <div class="form-group">
                <label for="mothersname">Mother's Name:</label>
                <input type="text" class="form-control" id="mothersnamex" name="mothersname" required>
              </div>

              <div class="form-group">
                <label for="childsname">Child's Name:</label>
                <input type="text" class="form-control" id="childsnamex" name="childsname" required>
              </div>

              <div class="form-group">
                <label>Sex:</label>
                <select class="form-control" id="sex_idx" name="sex_id" required>
                  <option value="">M or F</option>
                  @foreach ($sex as $key => $value)
                  <option id="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                  @endforeach             
                </select>
              </div>

              <div class="form-group">
                <label>Date of Birth:</label>
                <input type="text" class="form-control" id="birthdatex" name="birthdate" placeholder="YYYY-MM-DD" required>
              </div>

              <div class="form-group">
                <label>Weight(kg):</label>
                <input type="" class="form-control" id="weightx" name="weight" required>
              </div>

              <div class="form-group">
                <label>Height(cm):</label>
                <input type="" class="form-control" id="heightx" name="height" required>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-flat btn-primary" id="saveChangesBtn">Save Changes</button>
              </div>
              
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
  </div>

</body>

<script type="text/javascript">
		
	$.ajaxSetup({
  		headers: {
    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		}
	});

</script>

<!--Script for showing the datas on the table-->
<script type="text/javascript">

	displayData();

    function displayData(){

        $.ajax({
          type: "GET",
          url: "showData",
          dataType: "json",
          
          success: function(data){

            var html;
            var i;

             for(i=0; i<data.length; i++){

                html += '<tr>';

                html += '<td>'+data[i].child_id+'</td>';
                html += '<td>'+data[i].zone+'</td>';
                html += '<td>'+data[i].mothersname+'</td>';
                html += '<td>'+data[i].childsname+'</td>';
                html += '<td>'+data[i].sex+'</td>';
                html += '<td>'+data[i].birthdate+'</td>';
                html += '<td>'+data[i].weight+' kg</td>';
                html += '<td>'+data[i].height+' cm</td>';
                html += '<td><a href="javascript:void(0);" class="btn btn-primary ReadChild" data-toggle="modal" data-target="#modalReadChild" data-child_id="'+data[i].child_id+'" data-zone="'+data[i].zone+'" data-mothersname="'+data[i].mothersname+'" data-childsname="'+data[i].childsname+'" data-sex_id="'+data[i].sex_id+'" data-birthdate="'+data[i].birthdate+'" data-weight="'+data[i].weight+'" data-height="'+data[i].height+'">Read</a></td>';

                html += '<td> <a href="javascript:void(0);" class="btn btn-warning UpdateChild" data-toggle="modal" data-target="#modalUpdateChild" data-child_id="'+data[i].child_id+'" data-zone="'+data[i].zone+'" data-mothersname="'+data[i].mothersname+'" data-childsname="'+data[i].childsname+'" data-sex_id="'+data[i].sex_id+'" data-birthdate="'+data[i].birthdate+'" data-weight="'+data[i].weight+'" data-height="'+data[i].height+'">Update</a> </td>'

                html += '<td>';

                html += '<a href="javascript:void(0);" class="btn btn-danger DeleteChild" title="Double Click To Delete" data-child_id="'+data[i].child_id+'">Delete</a>';

                html += '</td>';

                html += '</tr>';

             }

              $('#data_list').html(html);
          }

        });
    }

</script>

<!--Script for deleting the specific data on the table-->
<script type="text/javascript">
	
	$('#data_table').on('dblclick','.DeleteChild', function(){

		var child_id = $(this).data('child_id');

		if(confirm("Are you sure you want to delete this data?")){

			$.ajax({
				type: "post",
				dataType: "json",
				data: {child_id:child_id},
				url: "delete_child",
				success: function(data){

					alert("Successfully Deleted!");

					displayData();
				}
			});
		}

		return false;
	});

</script>

<!--Script for creating new data-->
<script type="text/javascript">
	
	$('#saveChild').submit('click',function(){

		var zone = $('#zone').val();
		var mothersname = $('#mothersname').val();
		var childsname = $('#childsname').val();
		var sex_id = $('#sex_id').val();
		var birthdate = $('#birthdate').val();
		var weight = $('#weight').val();
		var height = $('#height').val();

		$.ajax({
			type: "POST",
			dataType: "JSON",
			data: {zone:zone, mothersname:mothersname, childsname:childsname, sex_id:sex_id, birthdate:birthdate, weight:weight, height:height, "_token":"{{ csrf_token() }}"},
			url: "insert_child",
			success: function(data){

				alert("Data successfully added!");

				displayData();
			}
		});

		return false;
	});

  $('#saveBtn').click(function() {
    $('#modalAddChild').modal('hide');
  });

  $('#modalAddChild').on('hidden.bs.modal', function (e) {
    $(this)
      .find("input,textarea,select")
        .val('')
          .end()
      .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
          .end();
  })

</script>

<!--Script for calendar-->
<script>

    $(document).ready(function(){
      var date_input=$('input[name="birthdate"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })

</script>

<!--Script for reading data by clicking read button-->
<script type="text/javascript">
  
  $('#data_table').on('click','.ReadChild', function(){

    var child_id = $(this).data('child_id');
    var zone = $(this).data('zone');
    var mothersname = $(this).data('mothersname');
    var childsname = $(this).data('childsname');
    var sex_id = $(this).data('sex_id');
    var birthdate = $(this).data('birthdate');
    var weight = $(this).data('weight');
    var height = $(this).data('height');

    $('#zone1').val(zone)
    $('#mothersname1').val(mothersname)
    $('#childsname1').val(childsname)
    $('#sex_id1').val(sex_id)
    $('#birthdate1').val(birthdate)
    $('#weight1').val(weight)
    $('#height1').val(height)

    if(confirm("Are you sure you want to view this data?")){

      $('#modalReadChild').modal('show');
    }

    return false;
    
  });

</script>

<!--Script for updating data by clicking read button-->
<script type="text/javascript">
  
  $('#data_table').on('click','.UpdateChild', function(){

    var child_id = $(this).data('child_id');
    var zone = $(this).data('zone');
    var mothersname = $(this).data('mothersname');
    var childsname = $(this).data('childsname');
    var sex_id = $(this).data('sex_id');
    var birthdate = $(this).data('birthdate');
    var weight = $(this).data('weight');
    var height = $(this).data('height');

    $('#zonex').val(zone)
    $('#mothersnamex').val(mothersname)
    $('#childsnamex').val(childsname)
    $('#sex_idx').val(sex_id)
    $('#birthdatex').val(birthdate)
    $('#weightx').val(weight)
    $('#heightx').val(height)

    if(confirm("Are you sure you want to view this data?")){

      $('#modalUpdateChild').modal('show'); 
    }

    $('#updateChild').submit('click',function(){

      var zonex = $('#zonex').val();
      var mothersnamex = $('#mothersnamex').val();
      var childsnamex = $('#childsnamex').val();
      var sex_idx = $('#sex_idx').val();
      var birthdatex = $('#birthdatex').val();
      var weightx = $('#weightx').val();
      var heightx = $('#heightx').val();

      $.ajax({
        type: "post",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "JSON",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        url: "update_child",
        success: function(response){

          alert("Data successfully changed!");
          //return back();
          displayData();
        }
      });
    });
    return false;
  });

  $('#saveChangesBtn').click(function() {
    $('#modalUpdateChild').modal('hide');
  });

  $('#modalUpdateChild').on('hidden.bs.modal', function (e) {
    $(this)
      .find("input,textarea,select")
        .val('')
          .end()
      .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
          .end();
  })

</script>

<script type="text/javascript">
		
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
		}
	});

</script>

</html>


<!--controller-->

public function update_child(Request $request){

		$result = new Health();

		$result->UpdateChild($request);

		return response()->json($result);
	}

<!--model-->

public function UpdateChild($request){

        $child_id = $request->input('child_id');
        $zone = $request->input('zone');
        $mothersname = $request->input('mothersname');
        $childsname = $request->input('childsname');
        $sex_id = $request->input('sex_id');
        $birthdate = $request->input('birthdate');
        $weight = $request->input('weight');
        $height = $request->input('height');

        $result = DB::update('UPDATE child SET zone = ?, mothersname = ?, childsname = ?, sex_id = ?, birthdate = ?, weight = ?, height = ? WHERE child_id = ?', [$zone, $mothersname, $childsname, $sex_id, $birthdate, $weight, $height, $child_id]);

        return $result;
    }


    //pag close kang modal after ma save
  $('#saveChangesBtn').click(function() {
    $('#modalUpdateChild').modal('hide');
  });

  //pag clear kang mga data sa input
  $('#modalUpdateChild').on('hidden.bs.modal', function (e) {
    $(this)
      .find("input,textarea,select")
        .val('')
          .end()
      .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
          .end();
  });

  <!--ajax-->

  <script type="text/javascript">
  
  $('#data_table').on('click','.UpdateChild', function(){

    var child_id = $(this).data('child_id');
    var zone = $(this).data('zone');
    var mothersname = $(this).data('mothersname');
    var childsname = $(this).data('childsname');
    var sex_id = $(this).data('sex_id');
    var birthdate = $(this).data('birthdate');
    var weight = $(this).data('weight');
    var height = $(this).data('height');

    $('#zonex').val(zone)
    $('#mothersnamex').val(mothersname)
    $('#childsnamex').val(childsname)
    $('#sex_idx').val(sex_id)
    $('#birthdatex').val(birthdate)
    $('#weightx').val(weight)
    $('#heightx').val(height)

    if(confirm("Are you sure you want to view this data?")){

      $('#modalUpdateChild').modal('show'); 
    }

    $('#updateChild').submit('click',function(){

      var zonex = $('#zonex').val();
      var mothersnamex = $('#mothersnamex').val();
      var childsnamex = $('#childsnamex').val();
      var sex_idx = $('#sex_idx').val();
      var birthdatex = $('#birthdatex').val();
      var weightx = $('#weightx').val();
      var heightx = $('#heightx').val();

      $.ajax({
        type: "post",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "JSON",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        url: "update_child",
        success: function(response){

          alert("Data successfully changed!");
          //return back();
          displayData();
        }
      });
    });
    return false;
  });

  $('#saveChangesBtn').click(function() {
    $('#modalUpdateChild').modal('hide');
  });

  $('#modalUpdateChild').on('hidden.bs.modal', function (e) {
    $(this)
      .find("input,textarea,select")
        .val('')
          .end()
      .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
          .end();
  })

</script>