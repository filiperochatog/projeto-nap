<?php
$servername = "localhost"; /* nome da conexão */
$username = "root"; /* nome do usuario da conexãp */
$password = ""; /*senha do banco de dados caso exista */
$dbname = "login"; /* nome do seu banco  */

// Create connectionn
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>