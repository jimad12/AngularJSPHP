<?php
//Setting up the connection variables to your Mysql Database.

//Change these to match your own credentials.
$serverName = "localhost";
$userName ="root";
$password ="root";
$db ="CompanyName";

//Connect to database using a pdo object
$dbh = new PDO("mysql:host=$serverName;dbname=$db", $userName, $password);


//Do a Select query to get the desired column to be returned by Customer's table
$sqlSearch = 'SELECT Id, Name, City, Country FROM Customers';

// Use prepared statements this is good practice but not required.
$APIstmtSearch = $dbh->prepare($sqlSearch);

//Execute the query
$APIstmtSearch->execute();

//Fetch the results into an array
$resultSearch = $APIstmtSearch->fetchAll(PDO::FETCH_ASSOC);

//convert to json
$json = json_encode($resultSearch);

//echo the json string
echo $json;
?>