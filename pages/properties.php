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
  $filterStatus = $_GET['status'] ?? '';
  $filterType   = $_GET['type']   ?? '';
  $perPage      = 6;
  $page         = max(1, (int)($_GET['p'] ?? 1));

  $filtered = array_values(array_filter($PROPERTIES, function($p) use ($filterStatus, $filterType) {
    if ($filterStatus && $p['status'] !== $filterStatus) return false;
    if ($filterType   && $p['type']   !== $filterType)   return false;
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
        <select class="filter-sel" name="status" onchange="this.form.submit()">
          <option value="" <?= !$filterStatus ? 'selected' : '' ?>>For Sale</option>
          <option value="For Sale"  <?= $filterStatus === 'For Sale'  ? 'selected' : '' ?>>For Sale</option>
          <option value="To Rent"   <?= $filterStatus === 'To Rent'   ? 'selected' : '' ?>>To Rent</option>
          <option value="New Homes" <?= $filterStatus === 'New Homes' ? 'selected' : '' ?>>New Homes</option>
        </select>
        <select class="filter-sel" name="type" onchange="this.form.submit()">
          <option value="" <?= !$filterType ? 'selected' : '' ?>>All types</option>
          <option value="Apartment"    <?= $filterType === 'Apartment'    ? 'selected' : '' ?>>Apartment</option>
          <option value="House"        <?= $filterType === 'House'        ? 'selected' : '' ?>>House</option>
          <option value="Penthouse"    <?= $filterType === 'Penthouse'    ? 'selected' : '' ?>>Penthouse</option>
          <option value="Country house"<?= $filterType === 'Country house'? 'selected' : '' ?>>Country house</option>
        </select>
        <span class="filter-count">Showing <?= count($showing) ?> of <?= $total ?> properties</span>
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
                <i data-lucide="heart"></i>
              </div>
            </div>
            <div class="prop-body">
              <div class="prop-price serif"><?= $p['price'] ?></div>
              <div class="prop-name"><?= $p['name'] ?></div>
              <div class="prop-loc">
                <i data-lucide="map-pin" style="width:11px;height:11px;margin-right:4px"></i>
                <?= $p['loc'] ?>
              </div>
              <div class="prop-meta">
                <span class="prop-meta-item">
                  <i data-lucide="bed" style="width:13px;height:13px;margin-right:4px"></i>
                  <?= $p['beds'] ?> beds
                </span>
                <span class="prop-meta-item">
                  <i data-lucide="bath" style="width:13px;height:13px;margin-right:4px"></i>
                  <?= $p['baths'] ?> baths
                </span>
                <span class="prop-meta-item">
                  <i data-lucide="maximize-2" style="width:13px;height:13px;margin-right:4px"></i>
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
