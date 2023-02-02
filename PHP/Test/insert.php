<?php


$allOk = true;
if(isset($_POST['submit'])) {
    foreach ( $_POST as $key => $value) {
        if(empty($_POST[$key]) ) {
            $allOk = false;
        }
    }

    if($allOk) {
        if(!filter_var($_POST['solde'], FILTER_VALIDATE_INT)) {
            ?>
            <script> alert("Veuillez fournir un solde valide")</script>
            <?php
        } else {
            try {
                $sql = "INSERT INTO compte  VALUES (NULL,'".$_POST['propr']."','".$_POST['type_compte']."','".$_POST['solde']."')";
                $conn->exec($sql);

            ?>
                <script> alert("l'enregistrement a été bien ajouté")</script>
            <?php

            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    } else {
            ?>
            <script> alert("Veuillez remplir les champs")</script>
            <?php
    }
}
?>
<section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <h2> Ajouter un compte </h2>
            <div>
                <input type="text" placeholder="Propriétaire" name="propr">
            </div>
            <div>
                <p>Type de compte:</p>
                <input type="radio" name="type_compte" value="Compte courant" checked/>Compte courant
                <input type="radio" name="type_compte" value="Compte epargne" />Compte epargne
                <input type="radio" name="type_compte" value="Compte a terme"/>Compte a terme
            </div>
            <div>
                <input type="text" placeholder="Solde" name="solde">
            </div>
            <div>
                <input type="submit" value="Ajouter compte" name="submit">
            </div>
        </form>
    </section>
