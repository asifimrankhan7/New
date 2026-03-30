<!-- ==================== PROPERTIES PAGE ==================== -->
<div id="page-properties" class="page">
  <?php
  $hero = [
    'variant'   => 'page',
    'eye'       => 'Browse',
    'title'     => 'Properties for Sale & Rent',
    'subtitle'  => 'Exclusively curated homes across London, the country and beyond',
    'bg_image'  => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=1400&q=50',
  ];
  include 'includes/components/hero.php';

  // Server-side filtering via query params
  $filterStatus   = $_GET['status']   ?? '';
  $filterType     = $_GET['type']     ?? '';
  $filterLocation = $_GET['location'] ?? '';
  $filterPrice    = $_GET['price']    ?? '';
  $filterBeds     = $_GET['beds']     ?? '';
  $perPage        = 6;
  $page           = max(1, (int)($_GET['p'] ?? 1));

  // Price range helper — strips non-numeric chars and compares
  function extractPrice(string $price): ?int {
    preg_match('/[\d,]+/', $price, $m);
    return $m ? (int)str_replace(',', '', $m[0]) : null;
  }

  $priceRanges = [
    'under-500k'  => [0,        500000],
    'under-1m'    => [0,       1000000],
    'under-2-5m'  => [0,       2500000],
    'under-5m'    => [0,       5000000],
    'over-5m'     => [5000000, PHP_INT_MAX],
  ];

  $filtered = array_values(array_filter($PROPERTIES, function($p) use (
    $filterStatus, $filterType, $filterLocation, $filterPrice, $filterBeds, $priceRanges
  ) {
    if ($filterStatus   && $p['status'] !== $filterStatus) return false;
    if ($filterType     && $p['type']   !== $filterType)   return false;
    if ($filterBeds     && (int)$p['beds'] < (int)$filterBeds) return false;
    if ($filterLocation && stripos($p['loc'], $filterLocation) === false) return false;
    if ($filterPrice && isset($priceRanges[$filterPrice])) {
      // Skip properties listed as rent (pcm) when filtering by price
      if (stripos($p['price'], 'pcm') !== false) return false;
      $v = extractPrice($p['price']);
      [$min, $max] = $priceRanges[$filterPrice];
      if ($v === null || $v < $min || $v > $max) return false;
    }
    return true;
  }));

  $total   = count($filtered);
  $showing = array_slice($filtered, 0, $perPage * $page);
  $hasMore = count($showing) < $total;
  ?>

  <div class="filter-bar">
    <div class="wrap">
      <form class="filter-row" method="get" action="index.php">
        <input type="hidden" name="page" value="properties">
        <span class="filter-label">Filter</span>
        <div class="filter-divider"></div>

        <label class="filter-field">
          <span class="filter-field-label">Status</span>
          <select class="filter-sel" name="status" onchange="this.form.submit()">
            <option value=""          <?= !$filterStatus                  ? 'selected' : '' ?>>All</option>
            <option value="For Sale"  <?= $filterStatus === 'For Sale'    ? 'selected' : '' ?>>For Sale</option>
            <option value="To Rent"   <?= $filterStatus === 'To Rent'     ? 'selected' : '' ?>>To Rent</option>
            <option value="New Homes" <?= $filterStatus === 'New Homes'   ? 'selected' : '' ?>>New Homes</option>
          </select>
        </label>

        <label class="filter-field">
          <span class="filter-field-label">Type</span>
          <select class="filter-sel" name="type" onchange="this.form.submit()">
            <option value=""              <?= !$filterType                          ? 'selected' : '' ?>>All types</option>
            <option value="Apartment"     <?= $filterType === 'Apartment'           ? 'selected' : '' ?>>Apartment</option>
            <option value="House"         <?= $filterType === 'House'               ? 'selected' : '' ?>>House</option>
            <option value="Penthouse"     <?= $filterType === 'Penthouse'           ? 'selected' : '' ?>>Penthouse</option>
            <option value="Country house" <?= $filterType === 'Country house'       ? 'selected' : '' ?>>Country house</option>
          </select>
        </label>

        <label class="filter-field">
          <span class="filter-field-label">Location</span>
          <select class="filter-sel" name="location" onchange="this.form.submit()">
            <option value=""        <?= !$filterLocation                    ? 'selected' : '' ?>>Anywhere</option>
            <option value="London"  <?= $filterLocation === 'London'        ? 'selected' : '' ?>>London</option>
            <option value="Bristol" <?= $filterLocation === 'Bristol'       ? 'selected' : '' ?>>Bristol</option>
            <option value="Bath"    <?= $filterLocation === 'Bath'          ? 'selected' : '' ?>>Bath</option>
            <option value="Cornwall"<?= $filterLocation === 'Cornwall'      ? 'selected' : '' ?>>Cornwall</option>
            <option value="Wiltshire"<?= $filterLocation === 'Wiltshire'   ? 'selected' : '' ?>>Wiltshire</option>
          </select>
        </label>

        <label class="filter-field">
          <span class="filter-field-label">Price</span>
          <select class="filter-sel" name="price" onchange="this.form.submit()">
            <option value=""           <?= !$filterPrice                    ? 'selected' : '' ?>>Any price</option>
            <option value="under-500k" <?= $filterPrice === 'under-500k'    ? 'selected' : '' ?>>Under £500k</option>
            <option value="under-1m"   <?= $filterPrice === 'under-1m'      ? 'selected' : '' ?>>Under £1m</option>
            <option value="under-2-5m" <?= $filterPrice === 'under-2-5m'    ? 'selected' : '' ?>>Under £2.5m</option>
            <option value="under-5m"   <?= $filterPrice === 'under-5m'      ? 'selected' : '' ?>>Under £5m</option>
            <option value="over-5m"    <?= $filterPrice === 'over-5m'       ? 'selected' : '' ?>>£5m+</option>
          </select>
        </label>

        <label class="filter-field">
          <span class="filter-field-label">Bedrooms</span>
          <select class="filter-sel" name="beds" onchange="this.form.submit()">
            <option value="" <?= !$filterBeds            ? 'selected' : '' ?>>Any</option>
            <option value="1" <?= $filterBeds === '1'    ? 'selected' : '' ?>>1+</option>
            <option value="2" <?= $filterBeds === '2'    ? 'selected' : '' ?>>2+</option>
            <option value="3" <?= $filterBeds === '3'    ? 'selected' : '' ?>>3+</option>
            <option value="4" <?= $filterBeds === '4'    ? 'selected' : '' ?>>4+</option>
            <option value="5" <?= $filterBeds === '5'    ? 'selected' : '' ?>>5+</option>
          </select>
        </label>

        <span class="filter-count">
          <span><?= count($showing) ?> of <?= $total ?></span> properties
        </span>
      </form>
    </div>
  </div>

  <section>
    <div class="wrap">
      <div class="props-grid">
        <?php foreach ($showing as $p): ?>
          <div class="prop-card reveal" onclick="toast('Viewing: <?= addslashes($p['name']) ?>')">
            <div class="prop-thumb">
              <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>" loading="lazy" />
              <span class="prop-badge"><?= $p['status'] ?></span>
              <div class="prop-fav" onclick="toggleFav(event,this)">
                <i class="ph-light ph-heart"></i>
              </div>
            </div>
            <div class="prop-body">
              <div class="prop-price serif"><?= $p['price'] ?></div>
              <div class="prop-name"><?= $p['name'] ?></div>
              <div class="prop-loc">
                <i class="ph-light ph-map-pin" style="font-size: 14px; margin-right: 4px;"></i>
                <?= $p['loc'] ?>
              </div>
              <div class="prop-meta">
                <span class="prop-meta-item">
                  <i class="ph-light ph-bed" style="font-size: 16px; margin-right: 4px;"></i>
                  <?= $p['beds'] ?> beds
                </span>
                <span class="prop-meta-item">
                  <i class="ph-light ph-bathtub" style="font-size: 16px; margin-right: 4px;"></i>
                  <?= $p['baths'] ?> baths
                </span>
                <span class="prop-meta-item">
                  <i class="ph-light ph-corners-out" style="font-size: 16px; margin-right: 4px;"></i>
                  <?= $p['sqft'] ?> sq ft
                </span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <?php if ($hasMore): ?>
        <div style="text-align:center;margin-top:44px">
          <a class="btn-outline"
             href="index.php?page=properties&status=<?= urlencode($filterStatus) ?>&type=<?= urlencode($filterType) ?>&p=<?= $page + 1 ?>">
            Load more properties
          </a>
        </div>
      <?php endif; ?>
    </div>
  </section>
</div>
