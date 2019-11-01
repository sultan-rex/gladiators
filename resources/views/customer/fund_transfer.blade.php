
<html>
<title>Fund Transfer</title>
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
<h1>Fund Transfer</h1>  
<div class="error-msg"><span id="erroralert"></span></div> 
<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="originalaccount"><b>Original Account</b></label><br>
    <input type="text" placeholder="Enter Original Account" name="originalaccount" id="originalaccount">
</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="destinationaccount"><b>Destination Account</b></label><br>
    <select name="destinationaccount" id="destinationaccount" class="form-control">
	<option value="">Select destination Account</option>
	<option value="1">1234567890</option>
	<option value="2">1000200300</option>
	<option value="3">4000500060</option>
	<option value="4">6000700070</option>
	</select>
</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="amount"><b>Amount</b></label><br>
    <input type="text" placeholder="Enter Amount" name="amount" id="amount">
</div>
</div>
<div class="row">
<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="comments"><b>Comments</b></label><br>
    <textarea type="text" placeholder="Enter Comments" name="comments" id="comments" class="form-control"></textarea>
</div>
</div>
<div class="row">
<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12 btn-center">
    <button type="submit" id="submit">Transfer</button>
</div>
</div>
</div> 
  </div>

</form>
<script>
$( document ).ready(function(){
$("#submit").click(function(e){
e.preventDefault();
var originalaccount=$("#originalaccount").val();
var destinationaccount=$("#destinationaccount").val();
var amount=$("#amount").val();
var comments=$("#comments").val();
if(originalaccount==""){
$("#erroralert").html("Enter Original Account").css("color","red");
return false;
}
if(destinationaccount==""){
$("#erroralert").html("Choose Destination Account").css("color","red");
return false;
}
if(amount==""){
$("#erroralert").html("Enter Amount").css("color","red");
return false;
}


$.ajax({
type:"POST",
url: "login.php",
dataType:"JSON",
data:{originalaccount:originalaccount,destinationaccount:destinationaccount,amount:amount,comments:comments},
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
