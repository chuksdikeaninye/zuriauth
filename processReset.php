<?php 

if (isset($_POST['forgotPassword'])) {

//Your variables
$email = $_POST['email'];
$newpassword = $_POST['newpassword'];
$newpassword1 = $_POST['newpassword1'];



function changePassword( $email, $newpassword, $newpassword1){

  //Call the function to change the password
     changePassword( $email, $newpassword, $newpassword1 );

    //The status will be updated to true if successful.
    //This function returns boolean.
    $status = false;

    //The new password can't have spaces
    if( strpos( $newpassword1, " " ) !== false ){
        return $status;
    }

    //Read the file.
    $file = fopen( "usersInfo/chuks.txt", "r+", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES );
    $read = fread( $file, filesize( "usersInfo/chuks.txt" ));

    //Close the file
    fclose( $file );

    //Explode the data. There are two values which make up a user, so chunk into users.
    $data = array_chunk( explode( " ", $read ), 2 );

    //The names of each element (purely to make code easier)
    $keys = array(
            "email",
            "newpassword",
            "newpassword1"
        );

    //For every user in the data file.
    foreach( $data as $userID=>$user ){
        //Combine the user data with keys
        $user = array_combine( $keys, $user );

        //If the current credentials are correct
        if( $user["email"] == $email && $user["newpassword"] == $newpassword ){
            //Change the password on this user
            $user["newpassword1"] = $newpassword1;

            //Update the user record
            $data[$userID] = $user;

            //We have changed the user password, change status
            $status = true;

            //Since we updated the user, we don't need to proceed through the loop
            break 1;
        }
    }

    //This is the output data
    $outputData = array();

    //Since we broke the array into users, we need to put it back into a 1d array
    foreach($data as $userID=>$user){
        $outputData[] = implode( ' ', $user );
    }

    //Implode the array so we can put it back in the file
    $outputData = implode( " ", $outputData );

    //Write the data to the file.
    file_put_contents( "usersInfo/chuks.txt", $outputData );

     echo "<b>Password reset, Login with new password<b>";

    //Return the status, which will be true.
    return $status;
    
}
}
