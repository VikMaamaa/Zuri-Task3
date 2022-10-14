<?php 
//iniitalize variables
$name = $email = $dob =$gender = $country = "" ;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    //clean inputs from form
    $name = cleaner($_POST['name']);
    $email = cleaner($_POST['email']);
    $dob = cleaner($_POST["dob"]);
    $gender = cleaner($_POST["gender"]);
    $country = cleaner($_POST['country']);

   
    print_r($name);
    print_r($email);
    print_r($dob);
    print_r( $gender);
    print_r( $country);
    $filename= 'userdata.csv';

    $file = fopen($filename, 'w');

    if($file == false) {
        echo 'error opening the file '.$filename;

    }

    fputcsv($file, [$name, $email, $dob, $gender, $country]);

    fclose($file);

    
}

function cleaner($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>