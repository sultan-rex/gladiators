<html>
<title>Login</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="POST">
  
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
<script>
$( document ).ready(function(){
$("#submit").click(function(e){
e.preventDefault();
var username=$("#uname").val();
var password=$("#psw").val();
if(username==""){
$("#erroralert").html("Enter Customer id").css("color","red");
return false;
}
if(password==""){
$("#erroralert").html("Enter Password").css("color","red");
return false;
}

$.ajax({
type:"POST",
url: "login.php",
dataType:"JSON",
data:{username:username,password:password},
 success: function(result){
    if(result.response=='00'){
	window.location.href="";
	}
	else{
	$("#erroralert").html(result.data).css("color","red");
	}
  },
  error:function(xhr,error,status){
  alert(xhr.responseText);
  },
  async:false
  });


});
});
</script>
</body>
</div>