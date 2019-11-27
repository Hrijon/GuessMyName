<!DOCTYPE html>
    <html lang="en">
        <head>
  
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
 
            <link rel="stylesheet" href="ex6.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>  
            <title>Ex 4</title>            
<style>
.error {color: #FF0000;}
</style>
        </head>

        <body>
<?php
$name = "";
$nameErr = "";
$correct ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	
	if ($name != "rijan") {
		$nameErr = "Name dosen't match Try again!!"; 
	}
	else
	{
		$correct = "Congrats, you get it right.";
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
            <div class="forms">
		<h4>Return to index page <a href="../../index.html">Click here!</a></h4>

                <form id = "form" method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    Guess My Name: <input type="text" name="name" id="name" value="<?php echo $name;?>"> 
			<span class="error">* <?php echo $nameErr;?> </span> <br><br>
			<strong> <?php echo $correct;?></strong><br><br>

                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit">
                </form>
            </div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";

?>


     </body>
</html>
