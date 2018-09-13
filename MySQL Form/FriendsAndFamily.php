
<?php  include('ResultsPage.php'); ?>

<!DOCTYPE html>

<html>
    <head>
        <script type="text/javascript">
            
            // Form validation code will come here.
      function validate()
      {
         if( document.myForm.firstname.value === "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.firstname.focus() ;
            return false;
         }
         if(document.myForm.lastname.value === "")
         {
             
         alert( "Please provide your Last Name!" );
         document.myForm.lastname.focus();
         return false;
         
         }
         
         expression =  /^[a-zA-Z]+$/;
         if(!expression.test(document.myForm.firstname.value)) {
            alert( "Pleas Fix your First Name!" );
            document.myForm.firstname.focus();
            return false;
         }
         
         expression =  /^[a-zA-Z]+$/;
         if(!expression.test(document.myForm.lastname.value)) {
            alert( "Please Fix your lastname!" );
            document.myForm.lastname.focus() ;
            return false;
         }
         
         expression =  /^[0-9]+$/;
         if(!expression.test(document.myForm.phone.value)) {
            alert( "Please Fix your Phone number!" );
            document.myForm.phone.focus() ;
            return false;
         }
         
         if( document.myForm.zipcode.value === "" ||
         isNaN( document.myForm.zipcode.value ) ||
         document.myForm.zipcode.value.length !== 5 )
         {
            alert( "Please provide a zip in the format #####." );
            document.myForm.zipcode.focus() ;
            return false;
         }
         
         
         
         
         return( true );
      }
 
            
        </script>        
        
        
        
        <style>
           body {
               color: whitesmoke;
               background-color: black;
                font-size: 19px;
}
table{
    width: 100%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
    background-color: #794601;
}
tr {
    border-bottom: 6px solid silver;
   
}
th, td{
    
   
    height: 30px;
    padding: 5px;
}
tr:hover {
    background:  #a3a3a3;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
    background-color: darkgoldenrod;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px 15px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    margin-left: 70px;
    
}


.msg {
    margin: 60px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 70%;
    text-align: center;
}
        </style>
        <title>Ahmed Almafrachi</title>
    </head>
    <body>
        
       <!--form for the search result-->
        <form  action="ResultsPage.php" method="post">
            
            <input type="text" name="searchby" placeholder="Search">
            <input type="submit" name="search" value="search" >
            
            
        </form>
        
        
        
        
        <!-- message to show the result-->
        <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
        <?php endif ?>
        
         <h1 style="text-align: center" style="color:blue"> Records Of Family and Friend </h1>
       
<!--table of the database-->
<table 
	<thead>
		<tr>
                        
			<th>First Name</th>
			<th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip Code</th>
                        <th>Birthdate</th>
                        <th>SEX</th>
                        <th>Username</th>
                        <th>Relationship</th>
			
		</tr>
	</thead>
	
	<?php 
        //querry of to select the information inside the data
        $results = mysqli_query($conn, "SELECT * FROM $db.$tbl");
        while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['firstname']; ?></td>
			<td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['State']; ?></td>
                        <td><?php echo $row['zipcode']; ?></td>
                        <td><?php echo $row['birthdate']; ?></td>
                        <td><?php echo $row['sex']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['relationship']; ?></td>
                        
			
			
		</tr>
	<?php } ?>
</table>
        
        
        
        
        
        
        
        
        <!-- form for insert and update the data-->
        <form  method="post" action="ResultsPage.php" name="myForm" onsubmit="return(validate());" >
            <fieldset> 
            
            <div class="input-group">
            <label>First Name: </label> 
            <input type="text"  name="firstname" value="" required="">
            </div>
            
            <div class="input-group">
            <label>Last Name: </label>
            <input type="text"  name="lastname" value="" required="">
            </div>
            
            <div class="input-group">
            <label>Phone Number: </label>
            <input type="text"  name="phone" value="" required="">
            </div>
            
            <div class="input-group">
            <label>Address: </label> <span id="adressError"></span>
            <input type="text"  name="address"  value="" >
            </div>
            
            
            <div class="input-group">
            <label>City: </label>
            <input type="text"  name="city"  value="" required="">
            </div>
            
            <div class="input-group">
            <label>State: </label>
            <select   name="state" required >
                <option value="" ></option>
                <option value="AL">AL</option>
                <option value="AK">AK</option>
                <option value="AZ">AZ</option>
                <option value="AR">AR</option>
                <option value="CA">CA</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="ME">ME</option>
                <option value="MD">MD</option>
                <option value="MA">MA</option>
                <option value="MI">MI</option>
                <option value="NY">NY</option>
                <option value="NC">NC</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="WY">WY</option>
                <option value="WI">WI</option>
            </select>
            </div>
            
            <div class="input-group">
            <label>Zip Code: </label>
            <input type="text"  name="zipcode" value="" required="">
            </div>
            
            <div class="input-group">
            <label>Birthdate: </label>
            <input type="date"  name="birthdate" value="" required="">
            </div>
            
            <div class="input-group">
                <label>SEX: </label> 
            <label>male:</label>
            <input type="radio"  name="sex"  value="m" required="">
            <label>female:</label>
            <input type="radio"  name="sex"  value="f" required="">
            <label>other:</label>
            <input type="radio"  name="sex"  value="other" required="">
            </div>
            
           
            <div class="input-group">
            <label>Username: </label>
            <input type="text"  name="username" value="" required>
            </div>
           
            <div class="input-group">
            <label>Password: </label>
            <input type="password"  name="password" value="" required>
            </div>
            
            <div class="input-group">
            <label>Relationship: </label>
            <select name="relationship" required="">
                <option value=""></option>
                <option value="friend">friend</option>
                <option value="family">family</option>
                <option value="other">other</option>
            </select>
            </div>
            
            
            
                <button class="btn" type="submit"  name="update" >Update</button>
                <button class="btn" type="submit" name="add" >Add</button>
         
            
            
           
            
            
        </fieldset>
 
        </form>
    </body>
</html>
