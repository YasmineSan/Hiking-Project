<?php require __DIR__ . '/../model/model.php'; ?>
<h1>The trail hiking</h1>
<p>Nos dernières balades :</p>


<?php
$trails = getTrails();
foreach ($trails as $trail) {
    ?>
    <div class="card_trails">
        <a href="trail-details.php?id=<?= htmlspecialchars($trail['id'])?>">
            <h3>
                <?= htmlspecialchars($trail['name']);?>
            </h3>
        </a>
        <p><em>distance : <?= htmlspecialchars($trail['distance']);?></em> Km<br></p>
            <p><?= nl2br(htmlspecialchars($trail['description'])); ?></p>
            <br />
        </p>
    </div>
    <a href="delete-hike.php?id=<?= htmlspecialchars($trail['id']) ?>">Delete</a>
    <?php
}
?>
