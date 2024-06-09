<?php
    echo "<h1 style='color:red'>Php with HTML</h1>";
    echo "<h1 style='color:green'>Php with HTML</h1>";
?>


<?php

$name = "SALIM_KHAN_x010";
$Name = "SALIM KHAN";

$name_color = "Blue";

echo "<h1 style='color:red' >My name is : $Name</h1>";

?>  


<h1 style = "color: <?php echo $name_color?>">
    My name is : <?php echo $name?>
</h1>
<h1 style = "color: <?php echo $name_color?>">
    My name is : <?php echo $name?>
</h1>
<h1 style = "color: <?php echo $name_color?>">
    My name is : <?php echo $name?>
</h1>