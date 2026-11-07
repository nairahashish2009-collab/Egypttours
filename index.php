<?php
$pageTitel = "Home";
$page = "home";
include("./inc/header.php");
$search = strtolower(trim($_GET['search'] ?? ''));
$category = $_GET['category'] ?? '';
$filteredcities = [];
foreach ($cities as $city_id => $city) {
    $matchSearch = $search === '' ||strpos(strtolower($city['title']), $search) !== false;
    $matchCategory =$category === '' || $city['category'] === $category;
    if ($matchSearch && $matchCategory) {
        $filteredcities[$city_id] = $city;
    }
}
?>
<section class="mb-5">
    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($slides as $index => $image): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img src="<?= $image ?>" class="d-block w-100" alt="slide">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>
<div class="container my-5">
    <div class="row g-3">
        <div class="col-md-7">
            <form method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search for a city..."
                        value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <form method="GET">
                <select name="category" class="form-select" onchange="this.form.submit()">
                    <option value=""> All Categories </option>
                    <option value="Beach" <?= $category === 'Beach' ? 'selected' : '' ?>> Beach</option>
                    <option value="Historical" <?= $category === 'Historical' ? 'selected' : '' ?>>Historical</option>
                </select>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row g-4">
        <?php if (count($filteredcities) > 0): ?>
            <?php foreach ($filteredcities as $city_id => $city): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="images/<?= $city['img'] ?>" class="card-img-top" alt="<?= $city['title'] ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"> <?= $city['title'] ?> </h5>
                            <p class="card-text"><?= $city['desc'] ?></p>
                            <a href="details.php?id=<?= $city_id ?>" class="btn btn-outline-info mt-auto"> Learn more </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="text-center">
                <h4>No destinations found</h4>
                <p>Try another search or category.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php
include("inc/footer.php");
?>