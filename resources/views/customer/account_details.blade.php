<!DOCTYPE html>
<html lang="en">
<head>
<style>

form {
  border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width:75%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  text-align:center;
  
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.error-msg{
color:red;
font-weight:bold;
font-size:14px;
text-align:center;
}
.btn-center{
text-align:center;
}
.border{
border:1px solid #ccc;
padding:10px;
}
.summary{
border:1px solid #ccc;
padding:10px 25px;
font-weight:400;
font-size:18px;
}
.summary span{
	margin-left:10px;
	font-weight:500;
}

h1{
text-align:center;
font-weight:bold;
}
.mt-5p{
	margin-top:5%;
}
.table-align{
margin-top:30px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}




</style
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
      <a class="nav-link active" href="/customer-deatils">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/customer-deatils">Account Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/transaction/create">Transfer</a>
    </li>

  </ul>
</nav>

</div>

<div class="summary">
<div class="row">
<label>Account Number: </label><span id="accno">{{ $data->account_number }}</span>
</div>
<div class="row">
<label>Available Balance: </label><span id="availbalance">{{ $data->account_balance }}</span>
</div>
<div class="row">
<label>Account Creation Date: </label><span id="accdate">{{ $data->created_at }}</span>
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
