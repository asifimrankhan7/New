<!-- ==================== INSIGHTS PAGE ==================== -->
<div id="page-insights" class="page">
  <?php
  $hero = [
    'variant' => 'page',
    'eye' => 'Intelligence',
    'title' => 'Research & Insights',
    'subtitle' => 'Award-winning market analysis and property intelligence',
    'bg_image' => 'https://images.unsplash.com/photo-1460472178825-e5240623afd5?w=1800&q=70',
  ];
  include 'includes/components/hero.php';
  ?>
  <section>
    <div class="wrap">
      <div class="sec-head reveal">
        <p class="sec-eye">Latest</p>
        <h2 class="sec-title serif">Market Reports</h2>
      </div>
      <div class="insights-grid" id="all-insights">
        <?php foreach ($INSIGHTS as $i): ?>
          <div class="insight-card reveal" onclick="toast('Opening: <?= addslashes(mb_substr($i['title'], 0, 30)) ?>…')">
            <div class="insight-thumb"><img src="<?= $i['img'] ?>" alt="<?= $i['title'] ?>" loading="lazy" /></div>
            <div class="insight-body">
              <p class="insight-tag"><?= $i['tag'] ?></p>
              <h3 class="insight-title serif"><?= $i['title'] ?></h3>
              <p class="insight-meta"><?= $i['date'] ?> · <?= $i['read'] ?> read</p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>