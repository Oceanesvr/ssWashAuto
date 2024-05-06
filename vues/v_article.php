<section>
    <div class="container2">
        <div class="block-img">
            <table border="1">
                <tr>
                    <th>Photo</th>
                    <th>Désignation</th>
                    <th>Caractéristique</th>
                    <th>Description</th>
                    <th>Prix</th>
                </tr>



            <?php 
             
    foreach($lesArticles as $unArticle) {
        echo '<tr>';
        echo "<td> <img src='" .$unArticle['photoArt']." ' ></td>";
        echo '<td>'.($unArticle['desiArt'].'$</td>');
        echo '<td>'.($unArticle['caractArt'].'</td>');
        echo '<td>'.($unArticle['descripArt'].'</td>');
        echo '<td>'.($unArticle['prixArt'].'</td>');                
        echo '</tr>';
    }
            
?>
            </table>
        </div>
    </div>
</section>
