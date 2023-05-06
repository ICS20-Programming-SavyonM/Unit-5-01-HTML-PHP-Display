<!DOCTYPE html>
<html>
<head>

   <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Savyon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--for favicon on this page-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    
    <!--Style on this page-->
    <link rel="stylesheet" href="./css/style.css">
  
  <title>Number Display</title>
   <h1>Number Display</h1>
<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  // Get the minimum and maximum numbers
  $minNum = intval($_POST['minNum']);
  $maxNum = intval($_POST['maxNum']);
  
  // Initialize the counter and the output string
  $counter = $minNum;
  $output = "";
  
  // Check if the minimum number is greater than the maximum number
  if ($minNum > $maxNum) {
    $output = "The minimum number has to be less than or equal to the maximum number.";
  } {
    
    // Use a while loop to generate the numbers between min and max number
    while ($counter <= $maxNum) {
      $output .= $counter . " ";
      
      // increment the counter
      $counter = $counter + 1; 
    }
  }
} else {
  
  // If the form hasn't been submitted, set default values
  $minNum = "";
  $maxNum = "";
  $output = "";
}
?>

<!-- area for user to enter values -->
<form method="post">
  <label for="minNum">Minimum Number:</label>
  <input type="number" name="minNum" id="minNum" value="<?php echo $minNum; ?>">
  <br><br>
  <label for="maxNum">Maximum Number:</label>
  <input type="number" name="maxNum" id="maxNum" value="<?php echo $maxNum; ?>">
  <br><br>
  <button type="submit">Display Numbers</button>
</form>
  
<!-- image on this page --> 
<br></br>
  <img src="./images/numbers.png" alt="numbers" width="30%">
       
<!-- Display the form and the output -->
<div id="output">
  <?php echo $output; ?>
</div>
