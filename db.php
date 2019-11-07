<?php
/**
 * Created by PhpStorm.
 * User: kevinmijwaart
 * Date: 07/11/2019
 * Time: 10:54
 */

$user = "monkeyuser";
$pass = "root";


try {
    $dbh = new PDO('mysql:host=localhost;dbname=apen;port=8889', $user, $pass);
    foreach($dbh->query('SELECT * from aap') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>