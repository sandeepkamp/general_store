<!DOCTYPE html>
<html lang="en">
<head>
<title>IRS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<form action="{{route('storeitem.store')}}" method="post">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
{{csrf_field()}}
<div class="table-responsive">
<table class="table table-bordered table-hover" id="dynamicInput">
	<thead>
		<tr class="Form_Text_Label"> 
		<td align="center" bgcolor="#B7E4B4" rowspan="2" style="text-align:center;">Barrel No.</td> 
		<td align="center" bgcolor="#99C2E5" colspan="3" style="text-align:center;">Stabalized Condition</td>       
		<td align="center" bgcolor="#D2D5EE" colspan="3" style="text-align:center;">No. of application for payout 'E' Dimm</td>       
		<td align="center" bgcolor="#EFACAA" colspan="1" style="text-align:center;">For Take up</td>      
		<td align="center" bgcolor="#789EC9" rowspan="2" style="text-align:center;"><br><br>Pay in</br></br></td>
		<td align="center" bgcolor="#99C2E5" colspan="3" style="text-align:center;">Stabalized Condition</td>       
		<td align="center" bgcolor="#D2D5EE" colspan="3" style="text-align:center;">No. of application for payout 'E' Dimm</td>       
		<td align="center" bgcolor="#EFACAA" colspan="1" style="text-align:center;">For Take up</td>    
		<td align="center" bgcolor="#789EC9" rowspan="2" style="text-align:center;"><br><br>Pay in</br></br></td>
		<td align="center" bgcolor="#99C2E5" colspan="3" style="text-align:center;">Stabalized Condition</td>       
		<td align="center" bgcolor="#918151" rowspan="2" style="text-align:center;">Loss of Force 40mm in 310 kg</td>
		<td align="center" bgcolor="FDC148" rowspan="2" style="text-align:center;">Date & Remarks</td> 
		<td rowspan="3">Delete</td> 
		<tr>
			<th bgcolor="#4882B4" style="text-align:center;">A70<sup>+2</sup><sub>-0</sub></th>
			<th bgcolor="#4882B4" style="text-align:center;">A98<sup>+1</sup><sub>-4</sub></th>
			<th bgcolor="#4882B4" style="text-align:center;">E</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">1st</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">2nd</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">3rd</th>
			<th bgcolor="#D6A8A6" style="text-align:center;">E</th>
			<th bgcolor="#4882B4" style="text-align:center;">A70<sup>+2</sup><sub>-0</sub></th>
			<th bgcolor="#4882B4" style="text-align:center;">A98<sup>+1</sup><sub>-4</sub></th>
			<th bgcolor="#4882B4" style="text-align:center;">E</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">1st</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">2nd</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">3rd</th>
			<th bgcolor="#D6A8A6" style="text-align:center;">E</th>
			<th bgcolor="#4882B4" style="text-align:center;">A70<sup>+2</sup><sub>-0</sub></th></th>
			<th bgcolor="#4882B4" style="text-align:center;">A98<sup>+1</sup><sub>-4</sub></th>
			<th bgcolor="#4882B4" style="text-align:center;">E</th>
		</tr>
		<tr>
    	    <th bgcolor="" style="text-align:center;"></th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
            <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
            <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
            <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
         	<th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
            <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
            <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
            <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">mm</th>
    	    <th bgcolor="" style="text-align:center;">kg</th>
    	    <th bgcolor="" style="text-align:center;"></th>
        </tr>
	</thead>
	<tbody>
	</tbody>
</table>
</div> 
	<div>
	<div class="col-sm-6">
		<input type="button" value="+Add Row" class="btn btn-primary" onClick="addTableRow($('#dynamicInput'));" style="font-family:Calibri; font-size:15px; " >
		<button type="submit" name="submit_val" class="btn btn-primary">submit</button>
	</div>
	</div>
</form>
</body>

</html>


<script>

	var cc = 1; 
	var counter = 1;
	function addTableRow(jQtable){

		jQtable.each(function() {

			var $table = $(this);

			var tBodyRowNo = $("#dynamicInput > tbody").find("tr").length;

			var barrelNo = 0;

			//BELOW IF ELSE BLOCK IS FOR AUTO GENERATING BARREL NO
			if (tBodyRowNo > 0) 
			{
				//IF THERE IS ROWS PRESENT IN TABLE BODY IT WILL FETCH LAST ROW'S BARREL NO
			
				var lastRowId = $('#dynamicInput tbody tr:last').attr('id');
				var rowId = lastRowId[lastRowId.length -1];
				var lastBarrelNo = document.getElementById('Barrelno_' + rowId).value;
				barrelNo = parseInt(lastBarrelNo) + 1;
			} 
			else 
			{
				//NOTE : I AM ASSIGNING A HARDCODED DEFAULT VALUE HERE IF THERE IS NO ROW IN TABLE BODY.
				barrelNo = 1;			
			}

			//NOTE : HERE YOU WILL HAVE TO MAKE A SERVER CALL USING AJAX IN ORDER TO GET THE DEFAULT VALUES AND PUT THEM INTO THE "data" VARIABLE'S RELATED INPUT'S VALUE
			var data = "<tr id = 'dataRow_" + cc + "'><td class='Arial_4C8966'><input name='Barrelno[]' class='form-control Barrelno[]' style='width:90px' type='text' id='Barrelno_" + cc + "' size='10' value = '" + barrelNo + "' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][A70]' style='width: 50px;' class='form-control A70' type='text' onblur='copy(this.id);' id='A70_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][A98]' style='width: 50px;' class='form-control A98' type='text' onblur='copy(this.id);' id='A98_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][E]'  onkeyup='sub(this.id);'  style='width: 50px;'  class='form-control E' type='text' onblur='copy(this.id);' id='E_"  + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][1st]' style='width: 50px;' class='form-control 1st' type='text' onblur='copy(this.id);' id='1st_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][2nd]' style='width: 50px;' class='form-control 2nd' type='text' onblur='copy(this.id);' id='2nd_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][3rd]'  onkeyup='sub(this.id);'  style='width: 50px;' class='form-control 3rd' type='text' onblur='copy(this.id);' id='3rd_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][E2]' style='width: 50px;' class='form-control E2' type='text' onblur='copy(this.id);' id='E2_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=barrelNo["+counter+"][payin]' style='width: 50px;' class='form-control payin' type='text' readonly='readonly' id='payin_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=A70_2[]' style='width: 50px;' class='form-control A70_2' type='text' id='A70_2_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=A98_2[]' style='width: 50px;' class='form-control A98_2' type='text' id='A98_2_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=E3[]' style='width: 50px;' class='form-control E3' type='text' id='E3_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=first[]' style='width: 50px;' class='form-control first' type='text' id='first_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=second[]' style='width: 50px;' class='form-control second' type='text' id='second_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=third[]' style='width: 50px;' class='form-control third' type='text' id='third_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=E4[]' style='width: 50px;' class='form-control E4' type='text' id='E4_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=payin_2[]' style='width: 50px;' class='form-control payin_2' readonly='readonly' type='text' id='payin_2_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=A70_3[]' style='width: 50px;' class='form-control A70_3' type='text' id='A70_3_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=A98_3[]' style='width: 50px;' class='form-control A98_3' type='text' id='A98_3_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=E5[]' style='width: 50px;' class='form-control E5' type='text' id='E5_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=loss[]' style='width: 115px;' class='form-control loss' type='text' id='loss_" + cc + "' size='10' /></td><td class='Arial_4C8966'><input name=date[]' style='width: 115px;' class='form-control date' type='text' id='date_" + cc + "' size='10' /></td><td class='Arial_4C8966'><button type='button'  onclick='rowDelete(this);'  class='btn btn-danger'>X</td></tr>";
              
			var tds = data;

			$(this).append(tds); 

			cc++;	
			console.log(counter);
			
			counter++;
		});
	}

	

	function sub(sentId){
		var rowId = sentId[sentId.length -1];
		var w = document.getElementById('E_' + rowId).value;
		var x = document.getElementById('3rd_' + rowId).value;

		var z = 0;

		//BELOW CHECKING WILL AVOID GENERATING OF NaN GENERATION IN Payin Columns
		if(parseInt(w) && parseInt(x))
		{
			z = parseInt(x)-parseInt(w);
		}

		document.getElementById('payin_' + rowId).value = z; 
	}

	function copy(sentId)
	{
		var rowId = sentId[sentId.length -1];
		document.getElementById('A70_3_' + rowId).value = document.getElementById('A70_' + rowId).value;
		document.getElementById('A98_3_' + rowId).value = document.getElementById('A98_' + rowId).value;
		document.getElementById('E5_' + rowId).value = document.getElementById('E_' + rowId).value;

		document.getElementById('first_' + rowId).value = document.getElementById('1st_' + rowId).value;
		document.getElementById('second_' + rowId).value = document.getElementById('2nd_' + rowId).value;
		document.getElementById('third_' + rowId).value = document.getElementById('3rd_' + rowId).value;
		document.getElementById('E4_' + rowId).value = document.getElementById('E2_' + rowId).value;

	
		document.getElementById('payin_2_' + rowId).value = document.getElementById('payin_' + rowId).value;
	}

	function rowDelete(link) {
		var row = link.parentNode.parentNode;
		var table = row.parentNode; 
		table.removeChild(row);
	}
</script>

