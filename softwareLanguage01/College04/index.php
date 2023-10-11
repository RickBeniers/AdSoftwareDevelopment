<?php
/**
 * Server variabelen
 * SERVER
 * GET
 * POST
 */

$App = require 'private.php';
$conn = $App['database'];

$basicRoute = "/softwareLanguage01/College04";
$routes = [
    $basicRoute."/" => "controllers/index.php",
    $basicRoute."/about" => "controllers/about.php",
    $basicRoute."/details" => "controllers/details.php",
    $basicRoute."/contact" => "controllers/contact.php"
];
//$routes[$_SERVER['REQUEST_URI']]. "<br>";

if(array_key_exists($_SERVER['REQUEST_URI'], $routes)){
    require $routes[$_SERVER['REQUEST_URI']];
}else{
    //echo "Error 404.";
}
//echo $_SERVER['REQUEST_URI'];
/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */

/**
 * PDO - connect to database
 *
 */
$servername = $conn['servername'];
$username = $conn['username'];
$password = $conn['password'];
$dbname = $conn['dbname'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
//require 'views/index.view.php';

$sql = 'SELECT MU.id, MU.userId, MU.grade, MU.moduleId, M.name 
        FROM modules_users AS MU
        LEFT JOIN modules AS M
        ON MU.moduleId = M.id';
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt ->fetchall(PDO::FETCH_ASSOC);

echo'<table>';
foreach ($result as $user)
{
    echo'<tr>';
    echo'<td>'."Student ".$user["userId"]." studeerd ".$user["name"]." Met als cijfer: ".$user["grade"].'</td><td>'.'</td>';
    echo'</tr>';
}
echo'</table>';
