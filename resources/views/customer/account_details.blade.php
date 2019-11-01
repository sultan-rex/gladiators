<!DOCTYPE html>
<html lang="en">
<head>
  <title>Account Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<body>


<div class="container mt-5p">
<h3>Account Details</h3>
<div class="row">
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="account_summary.html">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="account_details.html">Account Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="transfer.html">Transfer</a>
    </li>
    
  </ul>
</nav>

</div>

<div class="summary">
<div class="row">
<label>Account Number: </label><span id="accno">10000110024</span>
</div>
<div class="row">
<label>Available Balance: </label><span id="availbalance">1000</span>
</div>
<div class="row">
<label>Account Creation Date: </label><span id="accdate">dd/mm/YYYY</span>
</div>
</div>
<div class="table-align">

<div class="row">
<h4>Transactions</h4>

<table>
  <tr>
    <th>From Account</th>
    <th>To Account</th>
    <th>Amount</th>
	<th>Transaction Date</th>
	<th>Transaction Type</th>
  </tr>
  <tr>
    <td>123456789</td>
    <td>987654321</td>
    <td>100</td>
	<td>dd/mm/YYYY</td>
    <td>Savings</td>
    
  </tr>
  <tr>
    <td>123456789</td>
    <td>987654321</td>
    <td>100</td>
	<td>dd/mm/YYYY</td>
    <td>Savings</td>
    
  </tr>
</table>
</div>
</div>
</div>
</div>

</body>
</html>
