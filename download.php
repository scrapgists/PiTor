<?php




function fileupload(){
// Check if the form was submitted + File upload scripts
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $allowed = "torrent";
        $filename = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];
        //echo $filename; 
    }

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
   
    //To display extension
    // echo $ext."\n";
    // echo $allowed."\n";

    // To display filetype
    // echo gettype($ext)." \n";
    // echo gettype($allowed)."\n";

    //To check filetype
    if($ext!=$allowed) {
       // die("Invalid Filetype!!!!");
    }

    // Verify file size - 5MB maximum
    $maxsize = 1 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

 
        move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
        echo "Your file was uploaded successfully.";
}
}

$magnet=$_REQUEST['magnet'];



if($magnet===''){
        //calling magnet function
    echo "hello";
}
else{   //calling fileupload fn
    fileupload();
}
//magnet link
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "db");

// //get time
// $date = date('m/d/Y h:i:s a', time());

// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }


// // Attempt insert query execution
// $sql = "INSERT INTO Magnet_DB  VALUES (1, "sampletorrent", 'magnet:?dadafahfe',$date)";
// if(mysqli_query($link, $sql)){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// // Close connection
// mysqli_close($link);

?>