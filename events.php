<?php 
    require_once "partials/top.php"; 
    function set_title() {
        return "Events";
    }

    require_once "_db_conn.php";
    $sql = "SELECT * FROM events WHERE status=1 ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
?>

<main class="min-h-screen py-10 px-10 max-w-[40rem] mx-auto">
    <h2 class="text-4xl font-rbto-cnsd font-bold text-center">Events</h2>
    <h4 class="text-xl font-rbto-cnsd text-center text-gray-500 mb-10">Our Upcoming and Past Events</h4>

    <div class="grid gap-8">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <article class="flex border-2 rounded-lg p-4">
                <div>
                    <h3 class="font-bold leading-tight"><?= $row['title'] ?></h3>
                    <p class="text-sm text-gray-500 italic mt-2">Date: <?= date("d-m-Y", strtotime($row['datetime'])) ?></p>
                    <p class="text-sm text-gray-500 italic">Venue: <?= $row['venue'] ?></p>
                    <p class="text-sm text-gray-500 italic mb-2">Guests/Speakers: <?= $row['speakers'] ?></p>
                    <a class="text-sm font-bold italic underline text-blue-500" href="events-view.php?id=<?= $row['id'] ?>">Read More</a>
                </div>
                <img class="block w-32 mx-auto mr-4" src="<?= $row['image'] ?>" alt="">
            </article>
        <?php } ?>
    </div>
</main>

<?php require_once "partials/bottom.php"; ?>