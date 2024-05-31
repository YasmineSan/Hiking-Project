<?php require __DIR__ . '/../model/model.php'; ?>
<h1>The trail hiking</h1>
<p>Nos dernières balades :</p>


<?php
$trails = getTrails();
foreach ($trails as $trail) {
    ?>


    <article>
        <div class="hikes">
            <img class="hike_details" src="images/metallica1.webp" height="300" width="300">
            <div class="flex-container">
                <figure>1</figure>
                <a href="trail-details.php?id=<?= htmlspecialchars($trail['id'])?>">
                    <h3>
                        <?= htmlspecialchars($trail['name']);?>
                    </h3>
                </a>
            </div>
            <div class="icons">
                <span class="icon">&#x23F1; 05:09</span>
                <span class="icon">&#x1F3D4;<p>distance : <?= htmlspecialchars($trail['distance']);?></p></span>
                <span class="icon">&#x2197; 250 m</span>
            </div>
            <p><?= nl2br(htmlspecialchars($trail['description'])); ?></p>
            <button>See details</button>
            <a href="delete-hike.php?id=<?= htmlspecialchars($trail['id']) ?>">Delete</a>
        </div>
    </article>
    <?php
}
?>
