<?php 
    require_once "_db_conn.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM statements WHERE id='$id'";
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
    <article class="prose mx-auto my-10">
        <p class="font-bold text-sm uppercase underline">DSF Statement</p>
        <?= $row['content'] ?>
        <p class="text-sm text-gray-500 font-bold text-right italic my-4">Dated: <?= date("d-m-Y", strtotime($row['publication_date'])) ?></p>
    </article>
</main>

<?php require_once "partials/bottom.php"; ?>