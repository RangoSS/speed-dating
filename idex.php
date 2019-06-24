<!DOCTYPE html>
<html>
<head>
	<title>speed</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><!--this comes first-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->
<link rel="stylesheet" type="text/css" href="game.css">
</head>
<body>


<div class="container cal">
  <h1 class="text-center">Pick a question </h1>

  <div class="row" >
  	<div class="col-sm-6 mb-5 rowColor">
      <h2>Wellcome Press button To start</h2>
  		<form>
  		  <input class="btn btn-success" type="button" name="" value="Lets Play " onclick="getRando();" /><br>
  		  <span class="askMe" style="background-color: ">hgh</span>
  		  <input class="form-control mb-2" type="type" name="answear" id="answear" placeholder="enter your answear here" />
  		</form>
  	</div>

  	<div class="col-sm-5 ml-2 mb-5 rowColor">
  		<h1>game rules</h1>
  		<p><b>to 10 players. The
           initiating experience can start at the age of 8 years old.<br>
         There is no right or wrong answer</b></p>
  </div>

</div>
</body>
</html>


<script type="text/javascript"> 
 $(document).ready(function(){
    
     $(".askMe").css("font-weight", "bold");
    
 });

 function getRando(){

    $.ajax({
      url:"http://localhost/REST_API_SPEED_DATING/api.php?action=display_game",
      method: "POST",
      data:{action:'display_game'},

      success:function(data){
        $('.askMe').html(data);
      }
      });
 }
</script>