    <!-- ==================== PROPERTIES PAGE ==================== -->
    <div id="page-properties" class="page">
      <?php
      $hero = [
        'variant' => 'page',
        'eye' => 'Browse',
        'title' => 'Properties for Sale & Rent',
        'subtitle' => 'Exclusively curated homes across London, the country and beyond',
        'bg_image' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=1400&q=50',
      ];
      include 'includes/components/hero.php';
      ?>
      <div class="filter-bar">
        <div class="wrap">
          <div class="filter-row">
            <select class="filter-sel" id="f-status">
              <option value="">For Sale</option>
              <option>To Rent</option>
              <option>New Homes</option>
            </select>
            <select class="filter-sel" id="f-type">
              <option value="">All types</option>
              <option>Apartment</option>
              <option>House</option>
              <option>Cottage</option>
              <option>Penthouse</option>
              <option>Country house</option>
            </select>
            <select class="filter-sel" id="f-price">
              <option value="">Any price</option>
              <option>Up to £500k</option>
              <option>Up to £1m</option>
              <option>Up to £2.5m</option>
              <option>Up to £5m</option>
              <option>£5m+</option>
            </select>
            <select class="filter-sel" id="f-beds">
              <option value="">Any beds</option>
              <option>1+</option>
              <option>2+</option>
              <option>3+</option>
              <option>4+</option>
              <option>5+</option>
            </select>
            <select class="filter-sel" id="f-loc">
              <option value="">All locations</option>
              <option>London</option>
              <option>South East</option>
              <option>South West</option>
              <option>Midlands</option>
              <option>Scotland</option>
            </select>
            <button class="filter-btn" onclick="renderAllProps()">
              Update
            </button>
            <span class="filter-count" id="f-count">Showing 12 properties</span>
          </div>
        </div>
      </div>
      <section>
        <div class="wrap">
          <!-- Client-side JS will hydrate this based on window.PROPERTIES -->
          <div class="props-grid" id="all-props"></div>
          <div style="text-align: center; margin-top: 44px">
            <button class="btn-outline" id="load-more" onclick="loadMore()">
              Load more properties
            </button>
          </div>
        </div>
      </section>
    </div>
