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
<h1>Add Beneficary</h1>  
<div class="error-msg"><span id="erroralert"></span></div> 
<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="originalaccount"><b>Beneficary Name</b></label><br>
    <input type="text" placeholder="Enter Beneficary name" name="beneficaryname" id="beneficaryname">
</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="originalaccount"><b>IFSC Code</b></label><br>
    <input type="text" placeholder="Enter IFSC code" name="ifsccode" id="ifsccode">
</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="originalaccount"><b>Bank</b></label><br>
    <input type="text" placeholder="Enter Bank name" name="bankname" id="bankname">
</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12">
    <label for="originalaccount"><b>Branch</b></label><br>
    <input type="text" placeholder="Enter Branch Name" name="branchname" id="branchname">
</div>
</div>


<div class="row">
<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 col-12 btn-center">
    <button type="submit" id="submit">Add</button>
</div>
</div>
</div> 
  </div>

</form>
<script>
$( document ).ready(function(){
$("#submit").click(function(e){
e.preventDefault();
var beneficaryname=$("#beneficaryname").val();
var ifsccode=$("#ifsccode").val();
var bankname=$("#bankname").val();
var branchname=$("#branchname").val();
if(beneficaryname==""){
$("#erroralert").html("Enter Beneficary Name").css("color","red");
return false;
}
if(ifsccode==""){
$("#erroralert").html("Enter IFSC Code").css("color","red");
return false;
}
if(bankname==""){
$("#erroralert").html("Enter Bank Name").css("color","red");
return false;
}
if(branchname==""){
$("#erroralert").html("Enter Branch Name").css("color","red");
return false;
}


$.ajax({
type:"POST",
url: "login.php",
dataType:"JSON",
data:{beneficaryname:beneficaryname,ifsccode:ifsccode,bankname:bankname,branchname:branchname},
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