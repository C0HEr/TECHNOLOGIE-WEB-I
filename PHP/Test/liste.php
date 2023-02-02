<?php



    try {
        $sql = "SELECT * FROM compte";
        $result = $conn->query($sql);
    ?>
    <section>
    <h2>Liste des comptes</h2>
<?php
        if($result->rowCount() > 0){
            echo "<table border>";
            foreach ( $result as $row ) {
                ?>

                    <tr>
                        <td><?php echo $row['idcompte']; ?></td>
                        <td><?php echo $row['proprietaire']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['solde']; ?></td>
                        <td> <a href="/Test/delete.php?id=<?php echo $row['idcompte']; ?>" >Delete</a></td>
                    </tr>

                <?php

            }
            echo "</table>";
        } else {
            echo "    <p>Pas de données a afficher</p>";
        }


    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>
</section>
