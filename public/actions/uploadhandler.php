<pre><?php

//make a variable, $target_dir, which indicates where files will be uploaded.  In this case, the uploads directory.  Don't forget the separating / between the directory and any file that will come after.
$target_dir = "../../includes/uploads/";
//make a variable, $target_file, that combines the target directory with the uploaded file name.  This can be found in the $_FILES superglobal, in the fileToUpload key, in the name subkey
$target_file = $target_dir . $_FILES['fileToUpload']['name'];
print_r($_FILES);

//set an initial flag to indicate success.  $uploadOK.  Set it initially to true
$uploadOK = true;
//see if we have a post superglobal variable for the submit field
if(file_exists($target_file))
//check if the $target_file exists with the file_exists() function
{
//echo out an error message that we already have the file
	echo "That file has already been downloaded";
//set our $uploadOK to false
	$uploadOK = false;
}
if(isset($_POST['submit']))
{
	//check if the file's size is not greater than 3 megabytes.  File size can be found in the $_FILES superglobal for our fileupload field.
	if($_FILES['fileToUpload']['size']>12000000)
	{
	//echo an error message that it is too large
		echo "The file is too large.  Please upload files under 12 megs";
	//set our $uploadOK flag to false
		$uploadOK = false;
	}

}


//using the pathinfo function, get our $target_file extension with PATHINFO_EXTENSION as the second argument
$imageFileExt = pathinfo($target_file, PATHINFO_EXTENSION);
//make an array, $acceptable_types, with the file extensions (without period), for jpeg, gif, and png.  jpeg can have two extensions, jpeg and jpg
$acceptable_types = ['mp3', 'mp4'];
// use the in_array function to see if $imageFileType is the same as one of the elements in $acceptable_types
$checkExt = in_array( $imageFileExt, $acceptable_types);
//echo an error message that the file type is invalid
if(!$checkExt)
{
	echo "The file type is invalid";
	//set our $uploadOk flag to false
	$uploadOK = false;
}
if ($uploadOK)
{
    //set a variable, $move_succeeded, to the results of the move_uploaded_file function.  The move_uploaded_file needs the tmp_name key of your $_FILES superglobal value for the filetoupload key
    $move_succeeded = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
    //if $move_succeeded is true
    if($move_succeeded)
    {
        //echo a success message for the upload
        echo "Successful upload";
        //echo an HTML img tag with the $target_file as its src
        header('Location: ../index.php');
    }
    //else if $move_succeeded wasn't true
    else 
    {
        //echo a failure message, because the move failed
        echo "Failed to upload file";
    }

    //else if the $uploadOk wasn't true

//echo a failure message, because some criteria didn't match
    //echo "Something went wrong";
}
?></pre>