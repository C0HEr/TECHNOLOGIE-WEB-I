<?php


$sqlShow = "SELECT * FROM compte";
$resultShow = $conn->query($sqlShow);

if(isset($_POST['update'])) {

    foreach ( $_POST as $key => $value) {
        if(empty($_POST[$key]) ) {
            $allOk = false;
        }
    }

    if($allOk) {
        foreach ( $resultShow as $row ) {
            if($row['idcompte'] === $_POST["idSelect"]) {
                if($_POST["opera"] == 'Verser')
                    $sqlUp = "UPDATE compte set solde = '". ($row['solde'] + $_POST['montant'] )."' where idcompte = '". $_POST["idSelect"]."'";
                else if($_POST["opera"] == 'Retirer')
                    $sqlUp = "UPDATE compte set solde = '". ($row['solde'] - $_POST['montant']) ."' where idcompte = '". $_POST["idSelect"]."'";



                ?>
                <script> alert("l'enregistrement a été bien modiffier")</script>
                <?php
                header('Location: /Test/');

                $conn->exec($sqlUp);

            }
        }

    }



}

$allOk = true;
?>
<section>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <h2>Opérations</h2>
            <div>
                <label>ID:</label>
                <select name="idSelect">
                    <?php
                        foreach ( $resultShow as $row ) {
                           echo "<option value=".$row['idcompte'].">".$row['idcompte']." </option>";
                        }
                    ?>

                </select>
            </div>
            <div>
                <label>Type d'opération:</label>
                <div>
                    <input type="radio" name="opera" value="Verser" checked>Verser
                    <input type="radio" name="opera" value="Retirer">Retirer
                </div>
            </div>
            <div>
                <input type="text" placeholder="Montant" name="montant">
            </div>
            <input type="submit" name="update" value="Ajouter opération">
        </form>
    <a href="#" class="autor"> Group A : Abdelhakim ER-RAFAIY</a>

    </section>