<html>
<body>
<form method="post" action="http://localhost/foadzkia/admin/?p=jadwal/inicoba.php">
Flights on: <br/>
<input type="checkbox" name="Days" value="Daily">Daily<br>
<input type="checkbox" name="Days" value="Sunday">Sunday<br>
<input type="checkbox" name="Days" value="Monday">Monday<br>
<input type="checkbox" name="Days" value="Tuesday">Tuesday <br>
<input type="checkbox" name="Days" value="Wednesday">Wednesday<br>
<input type="checkbox" name="Days" value="Thursday">Thursday <br>
<input type="checkbox" name="Days" value="Friday">Friday<br>
<input type="checkbox" name="Days" value="Saturday">Saturday <br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php



$checkBox = $_POST['Days'];

if(isset($_POST['submit']))
{
    for ($i=0; $i<sizeof($checkBox); $i++)
        {
           echo $checkBox."[$i]";
        }
    

}

?>