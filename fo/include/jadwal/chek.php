<?php

// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("foadzkia") or die(mysql_error());
$checkBox = $_POST['Days'];

if(isset($_POST['submit']))
{
    for ($i=0; $i<sizeof($checkBox); $i++)
        {
            $query="INSERT INTO example (orange) VALUES ('" . $checkBox[$i] . "')";     

            mysql_query($query) or die (mysql_error() );
        }
    echo "Complete";

}

?>