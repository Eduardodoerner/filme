<?php
$username = 'root';
$pasword = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=aula',$username,$pasword);
} catch(PODException $e) {
    echo 'ERROR: '. $e->getmessage();    
}
