<?php
include 'connection.php';
$q=$_GET['q'];
$sql="select District from state_dist where State='$q' ";
$res=mysqli_query($con,$sql);

?>
<select class="form-control" name="district" id="distname">
    <?php
while($row=mysqli_fetch_assoc($res))
{
    ?>
  <option value="<?php echo $row['District']?>"><?php echo $row['District']?></option>
<?php
}
    ?>
</select>
<?php
?>