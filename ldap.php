<?php

//$ldap = ldap_connect("ldap://172.24.122.183:389");
//if ($bind = ldap_bind($ldap, $_POST['username'], $_POST['password'])) {
  //echo"yay"
//} else {
  // error message
//}
//?>


<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>


<?php
 
// This will return all files in that folder
$files = scandir("uploads");
 

for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <!-- Displaying file name !-->
        <?php echo $files[$a]; ?>
 
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
    Delete
</a>
    </p>
    <?php
}


?>
