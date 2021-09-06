<html>
<body>



<form method="post">


<input type="submit" value="Click ME to generate Random Numbers" name="Submit1"><br/><br/>

<?php
if(isset($_POST["Submit1"]))
{
echo "1. ".$R1=(rand(0,100))."<br>";
echo "2. ".$R2=(rand(0,100))."<br>";
echo "3. ".$R3=(rand(0,100))."<br>";
echo "4. ".$R4=(rand(0,100))."<br>";
echo "5. ".$R5=(rand(0,100))."<br>";


}
?>
<?php

echo "The Sum of 5 random numbers is ".$Ave=((int)$R1+(int)$R2+(int)$R3+(int)$R4+(int)$R5)."<br>";
echo "The Ave of 5 random numbers is ".((int)$Ave/5);
?>

</form>


</body>
</html>