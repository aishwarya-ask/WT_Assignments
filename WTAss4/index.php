<!DOCTYPE html>
<html>
    <head>
	<title>Indian Food</title>
	   <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		
		<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   
		
		<script
			src="https://code.jquery.com/jquery-3.5.1.js"
			integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
		</script>

	</head>
<body>
<style type="text/css">


.button5 {
  background-color: white;
  color: white;
  border: 2px solid #555555;


}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


}
</style>
</head>

<style>
body
{
background-image:url('bg3.jpg');
background-size:cover;
}
input#search {
    background-image: url('http://www.clker.com/cliparts/z/1/T/u/9/2/search-icon-hi.png');
    background-size:contain;
    background-repeat: no-repeat;
    text-indent: 20px;
}
input#search:focus {
    background-image:none;
    text-indent:0px
    }
</style>
<br>

<h3 style="text-align:right;">
<button class="button5"><a href="#" style="color:black;">Login</a></button>
<button class="button5" style="margin-right:100px;"><a href="#" style="color:black;" >Sign up</a></button>
</h3>
</center>


<div class="topnav" style="text-align:center;">

  <a class="active" href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Contact</a>
  <a href="#">Gallery</a>
</div>
<div>
<center>
<img src="mk.png" height="100" width="500" style="color:white" >

<h3 style="color:white;"><b><i>Discover the best food</i><b></h3>
 
<div id="div1">
    <?php
	include 'Data.php';
	$url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new jsonData($url);
	$show->getValues();
	?>
</div>
 <div id="d"></div>
 </center>
 <script type="text/javascript" defer="true">
		
            $(document).ready(function(){
				
            $('#menu').change(function(){
                //Selected value
                var inputValue = $(this).val();
                
				
					//Ajax for calling php function
                $.post('Display.php', { dropdownValue: inputValue }, function(data){
                    alert('Press OK to view selected food details');
					
					
					$('#d').html(data);
					
                   
                });
				
            });
        });
		
</script>
	

<div id="div2">
</div>
</div>
</div>
</center>	

</body>
</html>
