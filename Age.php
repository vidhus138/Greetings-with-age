<html>
<body>
<form name="m" method="POST">
Enter day of birth<input type="number" name="day"><br><br>
Enter month of birth<input type="number" name="month"><br><br>
Enter year of birth<input type="number" name="year"><br><br>
<input type="submit">
</form>
</body>
</html>

<?php 
function findAge( $current_date,  $current_month,  
                  $current_year,  $birth_date,  
                  $birth_month,  $birth_year) 
{ 
      
    $month = array(31, 28, 31, 30, 31, 30,  
                   31, 31, 30, 31, 30, 31 ); 
  
    if ($birth_date > $current_date)  
    { 
        $current_date = $current_date +  
                        $month[$birth_month - 1]; 
        $current_month = $current_month - 1; 
    } 
  
    if ($birth_month > $current_month) 
    { 
        $current_year = $current_year - 1; 
        $current_month = $current_month + 12; 
    } 
  
    $calculated_date = $current_date -  
                       $birth_date; 
    $calculated_month = $current_month -  
                        $birth_month; 
    $calculated_year = $current_year -  
                       $birth_year; 
  
 
    echo "Hello your Present Age is\nYears:",$calculated_year, 
         " " , "Months:", $calculated_month, " ";  
                                  
} 
   
    $current_date = date("d"); 
    $current_month = date("m"); 
    $current_year = date("Y"); 
   
    $birth_date = $_POST['day']; 
    $birth_month = $_POST['month']; 
    $birth_year = $_POST['year']; 
  
  
    findAge($current_date, $current_month,  
            $current_year, $birth_date,  
            $birth_month, $birth_year); 
              
?> 