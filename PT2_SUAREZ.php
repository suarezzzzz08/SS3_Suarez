<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT2_SUAREZ.php</title>

  <style type="text/css">
    h1{
      text-align: center;
      font-family: 'verdana', sans-serif;
      color: #cc3360;
    }

    h2{
      text-align: center;
      font-family: 'georgia', serif;
      color: #7a2142;
    }

    table{
      width: 85%;
      border-collapse: collapse;
      margin-left: auto; 
      margin-right: auto;
      height: 35px;
      font-family: courier, monospace;
      table-layout: fixed;
    }

    body{
      background-color: #f6dee4;
      border: 2px solid #ff6f82;
      border-style: outset;
      border-width: 15px;
      padding: 75px;
      margin: 0%;
    }

    .answer{
      color: #02642a;
      font-style: italic;
    }

    .total{
      color: #039f14;
    }

    p{
      font-family: sans-serif;
      font-weight: 600;
      margin-right: 8%;
      color: #190003;
    }
  </style>
</head>
<body>

<?php
  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Ccost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $totalsum1 = $Lcost * $Increase1 + $Lcost;
  $totalsum2 = $Lcost * $Increase2 + $Lcost;
  $totalsum3 = $Lcost * $Increase3 + $Lcost;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Ccost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $totalsum4 = $Ccost * $Increase1 + $Ccost;
  $totalsum5 = $Ccost * $Increase2 + $Ccost;
  $totalsum6 = $Ccost * $Increase3 + $Ccost;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Cocost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $totalsum7 = $Dcost * $Increase1 + $Dcost;
  $totalsum8 = $Dcost * $Increase2 + $Dcost;
  $totalsum9 = $Dcost * $Increase3 + $Dcost;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Cocost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $totalsum10 = $Pcost * $Increase1 + $Pcost;
  $totalsum11 = $Pcost * $Increase2 + $Pcost;
  $totalsum12 = $Pcost * $Increase3 + $Pcost;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Cocost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $totalsum13 = $Mcost * $Increase1 + $Mcost;
  $totalsum14 = $Mcost * $Increase2 + $Mcost;
  $totalsum15 = $Mcost * $Increase3 + $Mcost;

  $Expendituresumcost = $Lcost + $Ccost + $Dcost + $Pcost + $Mcost;
  $Expendituresum10 = $totalsum1 + $totalsum4 + $totalsum7 + $totalsum10 + $totalsum13;
  $Expendituresum15 = $totalsum2 + $totalsum5 + $totalsum8 + $totalsum11 + $totalsum14;
  $Expendituresum20 = $totalsum3 + $totalsum6 + $totalsum9 + $totalsum12 + $totalsum15;										
  ?>

  <h1>Public Library Expansion Project</h1>
  <h2>Cost Estimates</h2>
<table bgcolor='#c39aab'>
  <tr>
    <th>Expenditures</th>
    <th>Estimated Cost</th>
    <th>10% Increase</th>
    <th>15% Increase</th>
    <th>20% Increase</th>
  </tr>
</table>
<table bgcolor='#dd96ad'>
  <tr align="center">
    <td>Lumber</td>
    <td>$150,000.00</td>
    <td class="answer">$<?php echo number_format($totalsum1 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum2 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum3 ,2);?></td>
  </tr>
</table>			
<table bgcolor='#e3a9c5'>
  <tr align="center">
    <td>Concrete</td>
    <td>$78,000.00</td>
    <td class="answer">$<?php echo number_format($totalsum4 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum5 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum6 ,2);?></td>
  </tr>
</table>		
<table bgcolor='#dd96ad'>
  <tr align="center">
    <td>Drywall</td>
    <td>$69,000.00</td>
    <td class="answer">$<?php echo number_format($totalsum7 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum8 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum9 ,2);?></td>
  </tr>
</table>		
<table bgcolor='#e3a9c5'>
  <tr align="center">
    <td>Paint</td>
    <td>$12,000.00</td>
    <td class="answer">$<?php echo number_format($totalsum10 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum11 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum12 ,2);?></td>
  </tr>
</table>		
<table bgcolor='#dd96ad'>	
  <tr align="center">
    <td>Miscellaneous</td>
    <td>$20,000.00</td>
    <td class="answer">$<?php echo number_format($totalsum13 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum14 ,2);?></td>
    <td class="answer">$<?php echo number_format($totalsum15 ,2);?></td>
  </tr>
</table>
<br>
<table>
  <tr align="center">
    <td align="right"><b>Total Expenditures:</b></td>
    <td class="total"><b>$<?php echo number_format($Expendituresumcost ,2);?></b></td>
    <td class="total"><b>$<?php echo number_format($Expendituresum10 ,2);?></b></td>
    <td class="total"><b>$<?php echo number_format($Expendituresum15 ,2);?></b></td>
    <td class="total"><b>$<?php echo number_format($Expendituresum20 ,2);?></b></td>
  </tr>
</table>
<br>
  <p align="right">Created by: <em>Suarez, Jhelian Ashley</em></p>
</body>
</html>