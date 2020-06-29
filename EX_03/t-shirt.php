    <?php
    $nom="T-shirt simple";
    $couleur="Blanc";
    $prix="10.50";
    $disponible="true";
    $quantite=10;
    $chiffre=3;
    $operation= $chiffre*$prix;
    $total=$quantite*$prix;
    $TOTAL=$quantite-$chiffre;
    ?>

    <h3><?php echo "Le nom du produit est $nom. "?></h3>
    <h3><?php echo "Il reste $quantite produits en stock."?></h3>
    <h3><?php echo "Le produit $nom est de couleur $couleur."?></h3>
    <h4><?php echo "Acheter 3 produits coûterait $operation €."?></h4>
    <h4><?php echo "Acheter la totalité des produits disponibles coûterait $total €."?></h4>
    <h4><?php echo "Si 3 produits sont vendus, il en restera $TOTAL."?></h4>

    <?php 
        if($disponible="true"){
            echo "<p>Le produit $nom est disponible en ligne.</p>";
        }
        else{
            echo "<p>Le produit $nom n'est malheureusement plus disponible.</p>";
        }
    
        if($quantite>=5){
            echo "<p>Il reste $quantite produits en magasin.";
        }
        if($quantite<5 and $quantite>1){
            echo "<p>Il ne reste plus que $quantite produits en magasin.";
        }
        if($quantite==1){
            echo "<p>Il ne reste qu'un produit en magasin.";
        }
        if($quantite==0){
            echo "<p>Il ne reste plus de produit en magasin.";
        }
    ?>