


<?php
session_start();

//Create connection
$conn = mysqli_connect("localhost", "root", "dbpass");
//initialize variables
$firstname = "";
$lastname = "";
$phone = "";
$address = "";
$city = "";
$state = "";
$zipcode = "";
$birthdate = "";
$sex = "";
$username = "";
$password = "";
$relationship = "";


//initialize schema and the tabe
$db = "Records";             /* variable for schema/database name to be used */ 
$tbl = "FamilyAndFriend";    /* variable for table to be used */




// insert 
if (isset($_POST['add'])) {
		$firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zipcode = $_POST['zipcode'];
                $birthdate = $_POST['birthdate'];
                $sex = $_POST['sex'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $relationship = $_POST['relationship'];
		
                // insert querry
		mysqli_query($conn, "INSERT INTO $db.$tbl (firstname, lastname, phone, address, city, state, zipcode, birthdate, sex, username, password, relationship) VALUES ('$firstname', '$lastname','$phone','$address','$city','$state','$zipcode','$birthdate','$sex','$username','$password','$relationship')");
                
                // message to verify the add
		$_SESSION['message'] = "UserName Added"; 
		header('location: FriendsAndFamily.php ');
                
	}
 //Update      
if (isset($_POST['update'])) {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zipcode = $_POST['zipcode'];
                $birthdate = $_POST['birthdate'];
                $sex = $_POST['sex'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $relationship = $_POST['relationship'];
                //Update querry
                mysqli_query($conn, "UPDATE $db.$tbl"." SET firstname='$firstname', lastname='$lastname', address = '$address', city= '$city', state='$state', zipcode='$zipcode', birthdate='$birthdate', sex='$sex', relationship='$relationship'"." WHERE username='$username'");
                $_SESSION['message'] = "updated!"; 
                header('location: FriendsAndFamily.php');
}



//initialize output variable
$output = NULL;
//Search
if (isset($_POST['search'])){
                
                // to make clean search 
                $searchby = $conn->real_escape_string($_POST['searchby']);
                // select querry
                $querry = mysqli_query($conn, "SELECT * FROM Records.FamilyAndFriend WHERE firstname LIKE '%$searchby%' OR lastname LIKE '%$searchby%'");
                
                if ($querry > 0){
                   while ($row = mysqli_fetch_array($querry)){
                        $fname = $row ['firstname'];
                        $lname = $row ['lastname'];
                        $uname = $row ['username'];
                        $address= $row ['address'];
                        $city = $row ['city'];
                        $state = $row ['state'];
                        $zipcode = $row ['zipcode'];
                        $birthdate = $row ['birthdate'];
                        $relationship = $row ['relationship'];
                        // output the the search result
                        $output .= "<div> First name:\t".$fname." | \t Lastname:\t" .$lname.""
                                . " | \t Username:\t".$uname." | \t BOD:\t".$birthdate." | \t RL:\t" .$relationship."</div>";
                    }
                } else {
                        // if the search dosen't go throw
                        $output = "there was no search results";
                    }
                
                // message to show the search result
                $_SESSION['message'] = "Your Search result: $output "; 
                header('location: FriendsAndFamily.php');
}    
        ?>        
         
        





