<html>
    <head>
        <title>Details</title>
</head>
<body>
    <center>
        <h3>Displaying the details</h3>
        <form action="" method="POST">
        <select name="icno"  >

<option value="N" selected>-------Ic No------</option>

<?php

                         
                          $connection = mysqli_connect("localhost", "root", "", "staff");
                          $data = mysqli_query($connection,"select distinct icno from student_master ");

                         

while($row1=mysqli_fetch_array($data))

{?>

<option value="<?=$row1['icno'];?>">

  <?=$row1['icno'];?>

  </option>

 

<?php

}

?>

</select>&nbsp;<font color="#FB1E21"><strong>*</strong></font></td>
<input type="submit" name="search" value="search by ic"></input>
</form>
<table>
    <tr>
        <th>Faculty Name</th>
        <th>Personality</th>
        <th>Knowledge</th>
        <th>Attitute</th>
        <th>Performance</th>
        <th>Punctuality</th>
</tr> <br>
<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,'staff');
if(isset($_POST['search']))
{
    $icno = $_POST['icno'];
    $query = "SELECT * FROM school where icno='$icno' ";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <tr>
            <td><?php echo $row['faculty_name'];?></td>
            <td><?php echo $row['rating1'];?></td>
            <td><?php echo $row['rating2'];?></td>
            <td><?php echo $row['rating3'];?></td>
            <td><?php echo $row['rating4'];?></td>
            <td><?php echo $row['rating5'];?></td>
    </tr>
        <?php

    }
}