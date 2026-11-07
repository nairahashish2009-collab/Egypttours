<?php
$pageTitel = "Details";
$page = "details";
include("./inc/header.php");
if (isset($_GET['id'])) {
    $city_id = $_GET['id'];
    if (array_key_exists($city_id, $cities)) {
        $city = $cities[$city_id];
    }
}
if (!isset($city)) {
    header("Location: index.php");
    exit();
}
?>
<main class="container my-4">
    <section class="p-5 bg-light rounded">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="images/<?= $city['img'] ?>" class="img-fluid
rounded" alt="<?= $city['title'] ?>">
            </div>
            <div class="col-md-6">
                <h2 class="display-5 fw-bold"><?= $city['title'] ?></h2>
                <p class="lead"><?= $city['desc'] ?></p>
                <a href="index.php" class="btn btn-warning btn-lg mt-3">Back to Home</a>
            </div>
        </div>
    </section>
</main>
<?php include 'inc/footer.php'; ?>