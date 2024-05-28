
<h1>The trail hiking</h1>
<p>Nos dernières balades :</p>


<?php
$trails = getTrails();
foreach ($trails as $trail) {
    ?>
    <div class="card_trails">
        <a href="src/view/trail-details.php?id=<?= htmlspecialchars($trail['id'])?>">
            <h3>
                <?= htmlspecialchars($trail['name']);?>
                <em>distance : <?= htmlspecialchars($trail['distance']);?></em>
            </h3>
        </a>
        <p>
            <?= nl2br(htmlspecialchars($trail['description'])); ?>
            <br />
        </p>
    </div>
    <?php
}
?>
