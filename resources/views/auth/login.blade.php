<html>
<title>Login</title>
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




</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="{{action('CustomerController@postLogin')}}" method="POST">
  {{ csrf_field() }}
  <div class="container">
  
<div class="border">
<h1>Login</h1>  
<div class="error-msg"><span id="erroralert"></span></div> 
<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="uname"><b>Customer Id</b></label><br>
    <input type="text" placeholder="Enter Customer Id" name="uname" id="uname">
</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
</div>
</div>
<div class="row">
<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12 btn-center">
    <button type="submit" id="submit">Login</button>
</div>
</div>
</div> 
  </div>

</form>
</body>
</div>