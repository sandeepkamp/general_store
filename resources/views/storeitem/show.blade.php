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
<table  width="100%" border="2" cellspacing="0" cellpadding="0">
  <thead bgcolor="#00BFFF">
   <tr>
     <th align="center" bgcolor="#B7E4B4" rowspan="2" style="text-align:center;">Barrel No.</th>
     <th align="center" bgcolor="#99C2E5" colspan="3" style="text-align:center;">Stabalized Condition</th>
     <th align="center" bgcolor="#D2D5EE" colspan="3" style="text-align:center;">No. of application for payout 'E' Dimm</th>
     <th align="center" bgcolor="#EFACAA" colspan="1" style="text-align:center;">For Take up</th>
     <th align="center" bgcolor="#789EC9" rowspan="2" style="text-align:center;"><br><br>Pay in</th>
   </tr>
   <tr>
      <th bgcolor="#4882B4" style="text-align:center;">A70<sup>+2</sup><sub>-0</sub></th>
			<th bgcolor="#4882B4" style="text-align:center;">A98<sup>+1</sup><sub>-4</sub></th>
			<th bgcolor="#4882B4" style="text-align:center;">E</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">1st</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">2nd</th>
			<th bgcolor="#A5ABE1" style="text-align:center;">3rd</th>
			<th bgcolor="#D6A8A6" style="text-align:center;">E</th>
   </tr>
  </thead>
  <tbody>
    @foreach($storeItem as $storeItems)
    <tr>
      <td style="text-align:center;">{{$storeItems->barrelno}}</td>
      <td style="text-align:center;">{{$storeItems->A70}}</td>
      <td style="text-align:center;">{{$storeItems->A98}}</td>
      <td style="text-align:center;">{{$storeItems->E}}</td>
      <td style="text-align:center;">{{$storeItems->first}}</td>
      <td style="text-align:center;">{{$storeItems->second}}</td>
      <td style="text-align:center;">{{$storeItems->third}}</td>
      <td style="text-align:center;">{{$storeItems->Takeup}}</td>
      <td style="text-align:center;">{{$storeItems->payin}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>