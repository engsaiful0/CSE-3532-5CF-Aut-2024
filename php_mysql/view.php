<html>

<head>

</head>

<body>
    <?php 
    include("db_connect.php");
    $result=mysqli_query($connnection,"SELECT * FROM students");
    //echo '<pre>';
    //print_r($result);?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Mobile</td>
            <td>Department</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

    
    <?php
    while($row=mysqli_fetch_array($result))
    {
       // echo '<pre>';
    //print_r($row);
    $id=$row['id'];
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['mobile']?></td>
        <td><?php echo $row['department']?></td>
        <td>
            <a href="edit.php?id=<?php echo  $id?>">Edit</a>
        </td>
        <td>
            <a href="delete.php?id=<?php echo  $id?>">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</body>

</html>