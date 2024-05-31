<?php require __DIR__ . '/../model/model.php'; ?>



<?php
$trails = getTrails();
foreach ($trails as $trail) {
    ?>

<div class="hikes-box">
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
                <span class="icon">&#x23F1; <?= htmlspecialchars($trail['duration']);?>H</span>
                <span class="icon">&#x1F3D4; <?= htmlspecialchars($trail['distance']);?>Km</span>
                <span class="icon">&#x2197; <?= htmlspecialchars($trail['elevation_gain']);?> m</span>
            </div>
                <p><?= nl2br(htmlspecialchars($trail['description'])); ?></p>
                <button>See details</button> \n
                <button><a href="delete-hike.php?id=<?= htmlspecialchars($trail['id']) ?>">Delete</a></button>
            </div>
    </article>
</div>
    <?php
}
?>
