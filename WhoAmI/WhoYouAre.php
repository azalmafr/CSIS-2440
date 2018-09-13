<!DOCTYPE html> 
<html>
    <head>
        <style>
            
            *{
                color: white;
            }
            </style>
            
    </head>
<?php
//parameterize the variables
    $sex = !empty($_POST['sex']) ? $_POST['sex'] : '';
    $name = $_POST["Name"];
    $age = $_POST["Age"];
    $address = $_POST["Address"];
    $state = $_POST["State"];
    $postPagefile = 'PostPage.txt';
 
    // Function to changing the BG color
    function changeBGColorBasedOnSex($sex) {
        $bgColor = '';
        
        if ($sex === "F") {
            $bgColor = 'pink';
         } elseif ($sex === "M") {
             $bgColor = 'blue';
         }
         
         return $bgColor;
    }
    // Function to print the years
    function printDOBYears($age) {
        
        $currentYear = 2018;
        $yearsDiff = $currentYear - $age;
        $outPut = [];
        
        for ($year=$yearsDiff;$year<=$currentYear;$year++) {
        $outPut[] = $year;
        }
        
        return $outPut;
    }
?>
 <!-- called the function to change the BG color-->
<body bgcolor="<?= changeBGColorBasedOnSex($sex); ?>">
    <pre>

    <?php
    // display the variables and the text file
        echo '';
        
        printf("name is: $name<br>"."Age: $age <br>"."Address: $address<br>"."State: $state<br>"."Gender: $sex<br>");
        print_r($_POST);
        echo '<br/><br/>Post Page File Contents <br />';
        print_r(readFile($postPagefile));
        echo'<br/><br/>';
        print_r(printDOBYears($age));
        
    ?>

    </pre>
</body>
</html>