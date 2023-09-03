<?php 
    require_once "_db_conn.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM events WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];

    require_once "partials/top.php"; 
    function set_title() {
        global $title;
        return $title;
    }
?>

<main class="min-h-screen py-10 px-10 max-w-[50rem] mx-auto">
    <article class="prose">
        <p class="font-bold text-sm uppercase underline">DSF Event</p>
        <h1><?= $row['title'] ?></h1>
        <span class="block text-sm text-gray-500 italic mt-2">Date: <?= date("d-m-Y", strtotime($row['datetime'])) ?></span>
        <span class="block text-sm text-gray-500 italic">Venue: <?= $row['venue'] ?></span>
        <span class="block text-sm text-gray-500 italic mb-2">Guests/Speakers: <?= $row['speakers'] ?></span>
        <?= $row['description'] ?>
    </article>
</main>

<?php require_once "partials/bottom.php"; ?>