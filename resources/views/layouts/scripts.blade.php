@include('modals')

<!--CSRF SCRIPT-->
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<!--<script type="text/javascript">
    $.ajax({
        type: "GET",
        url: "showWeight",
        dataType: "json",

        success: function(data) {
            
            var html;

            html += '<h5 class="font-weight-bolder mb-0">' 
        }
    });
</script>-->

<!--TABLE SCRIPT-->
<script type="text/javascript">
displayData();

function displayData() {

    $.ajax({
        type: "GET",
        url: "showData",
        dataType: "json",

        success: function(data) {

            var html;
            var i;

            for (i = 0; i < data.length; i++) {

                html += '<tr>';

                html += '<td>' + data[i].child_id + '</td>';
                html += '<td>' + data[i].zone + '</td>';
                html += '<td>' + data[i].mothersname + '</td>';
                html += '<td>' + data[i].childsname + '</td>';
                html += '<td>' + data[i].indigenous + '</td>';
                html += '<td>' + data[i].sex + '</td>';
                html += '<td>' + data[i].birthdate + '</td>';
                html += '<td>' + data[i].actualdate + '</td>';
                html += '<td>' + data[i].weight + ' kg</td>';
                html += '<td>' + data[i].height + ' cm</td>';
                html += '<td>' + data[i].ageinmonths + '</td>';
                html += '<td><strong>' + data[i].weightst + '</strong></td>';
                //html += '<td>' + status + '</td>';
                html += '<td><strong>' + data[i].heightst + '</strong></td>';
                html += '<td><strong>' + data[i].weightforlengthst + '</strong></td>';
                //html += '<td><a href="javascript:void(0);" class="btn btn-primary ReadChild" data-toggle="modal" data-child_id="'+data[i].child_id+'" data-zone="'+data[i].zone+'" data-mothersname="'+data[i].mothersname+'" data-childsname="'+data[i].childsname+'" data-ind_id="'+data[i].ind_id+'" data-sex_id="'+data[i].sex_id+'" data-birthdate="'+data[i].birthdate+'" data-actualdate="'+data[i].actualdate+'" data-weight="'+data[i].weight+'" data-height="'+data[i].height+'" data-id="'+data[i].id+'"><i class="fas fa-eye"></i></a></td>';

                html += '<td>';
                html +=
                    '<a href="javascript:void(0);" class="btn btn-warning UpdateChild" data-child_id="' +
                    data[i].child_id + '" data-zone="' + data[i].zone + '" data-mothersname="' + data[i]
                    .mothersname + '" data-childsname="' + data[i].childsname + '" data-ind_id="' + data[i]
                    .ind_id + '" data-sex_id="' + data[i].sex_id + '" data-birthdate="' + data[i]
                    .birthdate + '" data-actualdate="' + data[i].actualdate + '" data-weight="' + data[i]
                    .weight + '" data-height="' + data[i].height + '" data-id="' + data[i].id +
                    '" data-ageinmonths="' + data[i].ageinmonths + '" data-weightst="' + data[i].weightst +
                    '" data-heightst="' + data[i].heightst +
                    '" data-weightforlengthst="' + data[i].weightforlengthst +
                    '"><i class="fas fa-edit"></i></a>';
                html += '</td>';

                html += '<td>';

                html +=
                    '<a href="javascript:void(0);" class="btn btn-danger DeleteChild" title="Double Click To Delete" data-child_id="' +
                    data[i].child_id + '"><i class="fas fa-trash"></i></a>';

                html += '</td>';
                //html += '<td>'+data[i].userid+'</td>';

                html +=
                    '<td><a href="javascript:void(0);" class="btn btn-primary Calculate" data-toggle="modal" data-child_id="' +
                    data[i].child_id + '" data-zone="' + data[i].zone + '" data-mothersname="' + data[i]
                    .mothersname + '" data-childsname="' +
                    data[i].childsname + '" data-ind_id="' + data[i].ind_id + '" data-sex_id="' + data[i]
                    .sex_id + '" data-birthdate="' +
                    data[i].birthdate + '" data-actualdate="' + data[i].actualdate + '" data-weight="' +
                    data[i].weight + '" data-height="' +
                    data[i].height + '" data-id="' + data[i].id + '" data-ageinmonths="' + data[i]
                    .ageinmonths + '"><i class="fas fa-eye"></i></a></td>';

                html += '</tr>';

            }

            $('#data_list').html(html);
        }

    });
}
</script>

<!--CREATE NEW DATA SCRIPT-->
<script type="text/javascript">
$('#saveChild').submit('click', function() {

    var id = $('#id').val();
    var zone = $('#zone').val();
    var mothersname = $('#mothersname').val();
    var childsname = $('#childsname').val();
    var ind_id = $('#ind_id').val();
    var sex_id = $('#sex_id').val();
    var birthdate = $('#birthdate').val();
    var actualdate = $('#actualdate').val();
    var weight = $('#weight').val();
    var height = $('#height').val();
    var ageinmonths = $('#ageinmonths').val();

    $.ajax({
        type: "POST",
        dataType: "JSON",
        data: {
            id: id,
            zone: zone,
            mothersname: mothersname,
            childsname: childsname,
            ind_id: ind_id,
            sex_id: sex_id,
            birthdate: birthdate,
            actualdate: actualdate,
            weight: weight,
            height: height,
            ageinmonths: ageinmonths,
            "_token": "{{ csrf_token() }}"
        },
        url: "insert_child",
        success: function(data) {

            //alert("Data successfully added!");

            displayData();
        }
    });

    return false;
});

$('#saveBtn').click(function() {
    $('#modalAddChild').modal('hide');
});

$('#modalAddChild').on('hidden.bs.modal', function(e) {
    $(this)
        .find("input,textarea,select")
        .val('')
        .end()
        .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
        .end();
})
</script>

<!--<script type=text/javascript>
    $('#ageBtn').submit('click',function(){
        var birthdate = $('#birthdate').val();
        var actualdate = $('#actualdate').val();
        var age = actualdate - birthdate;
        var ageInMonths = Math.floor(age / (1000 * 60 * 60 * 24 * 30.4375));
        
        $('#ageInMonths').val(ageInMonths);
        
        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: {ageInMonths:ageInMonths},
            url: "insert_child",
            success: function(data){
                alert("Data successfully changed.");
                displayData();
            }
        });
        return false;
    });
</script>-->

<!--DELETE DATA SCRIPT-->
<script type="text/javascript">
$('#data_table').on('dblclick', '.DeleteChild', function() {

    var child_id = $(this).data('child_id');

    if (confirm("Are you sure you want to delete this data?")) {

        $.ajax({
            type: "post",
            dataType: "json",
            data: {
                child_id: child_id
            },
            url: "delete_child",
            success: function(data) {

                alert("Successfully Deleted!");

                displayData();
                window.location.reload();
            }
        });
    }

    return false;
});
</script>

<!--CALENDAR SCRIPT-->
<script>
$(document).ready(function() {
    var date_input = $('input[name="birthdate"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);
})
</script>

<script>
$(document).ready(function() {
    var date_input = $('input[name="actualdate"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);
})
</script>

<!--UPDATE MODAL SCRIPT-->
<script type="text/javascript">
$('#data_list').on('click', '.UpdateChild', function() {

    var child_id = $(this).data('child_id');
    var uid = $(this).data('id');
    var zone = $(this).data('zone');
    var mothersname = $(this).data('mothersname');
    var childsname = $(this).data('childsname');
    var ind_id = $(this).data('ind_id');
    var sex_id = $(this).data('sex_id');
    var birthdate = $(this).data('birthdate');
    var actualdate = $(this).data('actualdate');
    var weight = $(this).data('weight');
    var height = $(this).data('height');
    var ageinmonths = $(this).data('ageinmonths');

    $('#child_idx').val(child_id);
    $('#useridx').val(uid);
    $('#zonex').val(zone);
    $('#mothersnamex').val(mothersname);
    $('#childsnamex').val(childsname);
    $('#ind_idx').val(ind_id);
    $('#sex_idx').val(sex_id);
    $('#birthdatex').val(birthdate);
    $('#actualdatex').val(actualdate);
    $('#weightx').val(weight);
    $('#heightx').val(height);
    $('#ageinmonthsx').val(ageinmonths);

    /*if (confirm("Are you sure you want to edit this data?")) {
        $('#modalUpdateChild').modal('show');
    }*/
    $('#modalUpdateChild').modal('show');
    return false;
});
</script>

<!--UPDATE DATA SCRIPT-->
<script type="text/javascript">
$('#update_Child').submit('click', function(event) {

    var child_id = $('child_idx').val();
    var zone = $('#zonex').val();
    var mothersname = $('#mothersnamex').val();
    var childsname = $('#childsnamex').val();
    var weight = $('#weightx').val();
    var height = $('#heightx').val();
    var ageinmonths = $('#ageinmonthsx').val();

    $.ajax({
        type: "POST",
        dataType: "JSON",
        data: {
            child_id: child_id,
            zone: zone,
            mothersname: mothersname,
            childsname: childsname,
            weight: weight,
            height: height,
            ageinmonths: ageinmonths,
        },
        url: "update_child",
        success: function(data) {
            alert("Data successfully changed.");
            displayData();
        }
    });
    return false;
});

$('#saveChangesBtn').click(function() {
    $('#modalUpdateChild').modal('hide');
});
</script>

<!--CALCULATE MODAL SCRIPT-->
<script type="text/javascript">
$('#data_list').on('click', '.Calculate', function() {

    var child_id = $(this).data('child_id');
    var id = $(this).data('id');
    var sex = $(this).data('sex_id');
    var weight = $(this).data('weight');
    var height = $(this).data('height');
    var ageinmonths = $(this).data('ageinmonths');

    var weightst;
    var heightst;
    var weightforlengthst;

    //WEIGHT
    //Female
	if(sex == 3){
		if(ageinmonths == 1){
			if(4.9 < weight && weight < 6.0){
				weightst = "N";
			}else if(5.1 < weight && weight < 5.7){
				weightst = "UW";
			}else if(weight > 9.3){
				weightst = "OW";
			}else if(61.1 < height && height < 70.4){
				heightst = "N"; 
			}else if(58.8 < height && height < 61.2){
				heightst = "ST";
			}else if(height > 70.3){
				heightst = "T"; 
			}else if(height < 58.8){
				heightst = "SST"; 
			}
		}else if(ageinmonths == 2){
            if(4.9 < weight && weight < 6.0){
				weightst = "UW";
			}else if(5.1 < weight && weight < 5.7){
				weightst = "UW";
			}else if(weight > 9.3){
				weightst = "OW";
			}
        }		
	}else if(sex == 2){
		if(ageinmonths == 1){
			if(4.9 < weight && weight < 6.0){
				weightst = "N";
			}else if(5.1 < weight && weight < 5.7){
				weightst = "UW";
			}else if(weight > 9.3){
				weightst = "OW";
			}else if(weight < 3.1){
				weightst = "SUW";
			}
		}
	}     

    $('#child_id1').val(child_id);
    $('#userid1').val(id);
    $('#sex2').val(sex);
    $('#weightstatus1').val(weightst);
    $('#heightstatus1').val(heightst);
    $('#weightforlengthstatus1').val(weightforlengthst);
    $('#weight2').val(weight);
    $('#height2').val(height);
    $('#ageinmonths1').val(ageinmonths);

    $('#modalCalculate').modal('show');
    
    return false;
});
</script>

<!--CALCULATE DATA SCRIPT-->
<script type="text/javascript">
$('#calculate').submit('click', function(event) { 

    var child_id = $('#child_id1').val();
    var weightst = $('#weightstatus1').val();
    var heightst = $('#heightstatus1').val();
    var weightforlengthst = $('#weightforlengthstatus1').val();

    $.ajax({
        type: "POST",
        dataType: "JSON",
        data: {
            child_id: child_id,
            weightst: weightst,
            heightst: heightst,
            weightforlengthst: weightforlengthst,
        },
        url: "calculate_status",
        success: function(data) {
            //alert("Data successfully changed.");
            displayData();
        }
    });
    return false;
});



$('#calculateStatus').click(function() {
    $('#modalCalculate').modal('hide');
});

$('#modalCalculate').on('hidden.bs.modal', function(e) {
    $(this)
        .find("input,textarea,select")
        .val('')
        .end()
        .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
        .end();
})
</script>

<script>
/* Edit child */
$('data_list').on('click', '#edit-child', function() {
    var customer_id = $(this).data('id');
    $.get('customers/' + customer_id + '/edit', function(data) {
        $('#customerCrudModal').html("Edit customer");
        $('#btn-update').val("Update");
        $('#btn-save').prop('disabled', false);
        $('#crud-modal').modal('show');
        $('#cust_id').val(data.id);
        $('#name').val(data.name);
        $('#email').val(data.email);
        $('#address').val(data.address);
    })
});
/* Show child */
$('body').on('click', '#show-customer', function() {
    $('#customerCrudModal-show').html("Customer Details");
    $('#crud-modal-show').modal('show');
});
</script>

<script type="text/javascript">
function predict() {
    var gender = $(this).parent().find(".sex").val();
    var age = $(this).parent().find(".ageinmonths").val();
    var weight = $(this).parent().find(".weight").val();
    var height = $(this).parent().find(".height").val();

    val status;

    if (gender == 2 && age == 0 && weight <= 2.1) {
        status = "SW";
    } else if (gender == 2 && age == 1 && weight <= 2.9) {
        status = "SW";
    }
}
</script>