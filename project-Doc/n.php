    <?php
    $username = filter_input(INPUT_POST, 'username');
    $address = filter_input(INPUT_POST, 'address');
	$age = filter_input(INPUT_POST, 'age');
    $contact = filter_input(INPUT_POST, 'contact');
	$gender = filter_input(INPUT_POST, 'gender');
    $email = filter_input(INPUT_POST, 'email');
	$date = filter_input(INPUT_POST, 'date');
    $desease = filter_input(INPUT_POST, 'desease');
	$time = filter_input(INPUT_POST, 'time');
    
    if(!empty($username) ||!empty($address)|| !empty($contact)|| !empty($age)|| !empty($gender)|| !empty($email)|| !empty($date)|| !empty($desease)|| !empty($time)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "appoint";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO account (username,address,contact,age,gender,email,date,desease,time)
    values ('$username','$address','$contact','$age','$gender','$email','$date','$desease','$time')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "all fields are required";
    die();
    
    }
    
    ?>