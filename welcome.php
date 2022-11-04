<html>

<head>
	<title> Welcome Page</title>
	<style>
		 body{
			 background-image: url(bm.jpg);
			 text-align: center;
			 color:white;
			 background-repeat: no-repeat;
			background-size: 1600px 1000px;
			margin-top: 25%;
		 }

		 input[type=submit] {
			 margin-top: 5%;
			 background-color: #C377EF;
			 cursor: pointer;
			 border-radius: 5px;
			 color: white;
			 padding: 5px 15px;
		 }
		 button {
			background-color: #C377EF;
			margin-bottom: 5%;
			font-size: 20px;
			cursor: pointer;
		}
		 
	</style>
</head>






<body>

<h1>Hi, Welcome to WHO WANTS TO BE A MILLIONAIRE?  </h1>

<form action="q1.php" method="post">
<h2>Name: </h2><input type="text" placeholder="ENTER NAME HERE" name= "user_name"> </input>
<br>
<div>
<input type = "submit" value="START GAME"> </input>
</div>
</form>


<br>

<a href="logout.php"><button>Log Out</button></a>


</body>

</html>

