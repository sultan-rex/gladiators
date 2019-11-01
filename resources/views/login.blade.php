<!DOCTYPE html>
<html lang="en">
<head>
  <title>Account Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>



<form action="/login" method="post">
  

  <div class="container">
    <label for="uname"><b>User ID</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>

 
</form>
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

