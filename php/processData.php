<?php 
include('../db.php');

if ($_POST) {
	$case_no = $_POST['case_no'];
	$description = $_POST['description'];
	$filename = $_POST['filename'];
	$dfile = $_POST['dfile'];


	// ***************upload File************************
	if ($_FILES['uploaded_file']['type'] == "application/pdf") {
		$source_file = $_FILES['uploaded_file']['tmp_name'];
		$file_name = $_FILES['uploaded_file']['name'];
		$dest_file = "../upload/".$_FILES['uploaded_file']['name'];

		if (file_exists($dest_file)) {
			echo "The file name already exists!!";
			header("location: ../document/documents.php");
		}
		else {
			move_uploaded_file( $source_file, $dest_file )

			or die ("Error!!");
			if($_FILES['uploaded_file']['error'] == 0) {
					if (!empty($case_no) && !empty($description) && !empty($filename)) {
					 	$sql = "INSERT INTO files (case_no, description, file_name, dfile, file) VALUES ('$case_no', '$description', '$filename', '$dfile', '$dest_file') ";
					 	$results = mysqli_query($connect, $sql);
					 	if ($results == TRUE) {
					 		echo "Successfully Submitted";
					 		header("location: ../document/Search.php");

					 	}else{
					 		echo "error while submititng the data".mysqli_error($connect);
					 		header("location: ../document/documents.php");
					 	}
					}
			}
		}
	}
	else {
		if ( $_FILES['uploaded_file']['type'] != "application/pdf") {
			header("location: ../document/documents.php");
			print "Error occured while uploading file : ".$_FILES['uploaded_file']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['uploaded_file']['error']."<br/>";
		}
	}
	
}



?>