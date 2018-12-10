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
     <th rowspan="2" style="text-align:center;">Barrel no</th>
     <th colspan="3" style="text-align:center;">Stabalized Condition</th>
     <th colspan="3" style="text-align:center;">No. Of Application For Payout 'E' Dimm</th>
     <th colspan="1" style="text-align:center;">For Take up</th>
     <th rowspan="2" style="text-align:center;">Payin</th>
   </tr>
   <tr>
     <th style="text-align:center;">A70</th>
     <th style="text-align:center;">A98</th>
     <th style="text-align:center;">E</th>
     <th style="text-align:center;">1st</th>
     <th style="text-align:center;">2nd</th>
     <th style="text-align:center;">3rd</th>
     <th style="text-align:center;">E</th>
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