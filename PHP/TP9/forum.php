<?php
include('header.php');
require('cnx.php');
        try {
            $sql= "SELECT * FROM forum";
            $result = $conn->query($sql);
?>
<table border="1" style=" margin-bottom: 20px">
    <tr style="background: black; color: white">
        <td> Posted By</td>
        <td> Subject </td>
        <td> Message </td>
    </tr>
<?php
            foreach  ($conn->query($sql) as $row) {
                ?>
    <tr>
        <td> <?php echo $row['first_name'] ." " .$row['last_name'] ." ".$row['post_date']?></td>
        <td> <?php echo $row['subject'] ?> </td>
        <td> <?php echo $row['message'] ?> </td>
    </tr>
    <?php
            }
            
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    //echo  " There are currently no messges."
?>
</table>

<?php
include('footer.php');
?>