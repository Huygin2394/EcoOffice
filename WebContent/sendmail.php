<?php 
    $myfile = fopen("server.txt", "w") or die("Unable to open file!");
    $txt =  "Welcome {$_POST["Name"]}";
    fwrite($myfile, $txt);

    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "huy";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully\n";
    
    
    //add info
    $sql = "INSERT INTO client_mail(Name, Email, Message)
    VALUES ('$_POST[Name]', '$_POST[Email]', '$_POST[Message]')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully\n";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>