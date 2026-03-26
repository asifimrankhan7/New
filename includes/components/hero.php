<?php
// Reusable hero component.
// Usage: set $hero array before include.
// Supported keys:
// - variant: page|feature (default feature)
//   page variant keys: eye, title, subtitle, bg_image
// - media_type: video|image
// - video_src, video_poster, image_src, image_alt
// - eyebrow, title_html, subtitle, content_html
// - show_scroll (bool), scroll_text

$hero = $hero ?? [];
$variant = $hero['variant'] ?? 'feature';

if ($variant === 'page') {
  $eye = $hero['eye'] ?? '';
  $title = $hero['title'] ?? '';
  $subtitle = $hero['subtitle'] ?? '';
  $bgImage = $hero['bg_image'] ?? '';
  ?>
  <div class="page-hero"<?= $bgImage !== '' ? ' style="--bg: url(\'' . htmlspecialchars($bgImage, ENT_QUOTES, 'UTF-8') . '\');"' : '' ?>>
    <div class="page-hero-inner">
      <?php if ($eye !== ''): ?>
        <p class="sec-eye"><?= htmlspecialchars($eye, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>
      <?php if ($title !== ''): ?>
        <h1 class="serif"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h1>
      <?php endif; ?>
      <?php if ($subtitle !== ''): ?>
        <p><?= htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>
    </div>
  </div>
  <?php
  return;
}

$mediaType = $hero['media_type'] ?? 'image';
$eyebrow = $hero['eyebrow'] ?? '';
$titleHtml = $hero['title_html'] ?? '';
$subtitle = $hero['subtitle'] ?? '';
$contentHtml = $hero['content_html'] ?? '';
$showScroll = $hero['show_scroll'] ?? false;
$scrollText = $hero['scroll_text'] ?? 'Scroll';

$videoSrc = $hero['video_src'] ?? '';
$videoPoster = $hero['video_poster'] ?? '';
$imageSrc = $hero['image_src'] ?? '';
$imageAlt = $hero['image_alt'] ?? 'Hero image';
?>

<div class="hero">
  <div class="hero-video-wrap">
    <?php if ($mediaType === 'video' && $videoSrc !== ''): ?>
      <video autoplay muted loop playsinline<?= $videoPoster !== '' ? ' poster="' . htmlspecialchars($videoPoster, ENT_QUOTES, 'UTF-8') . '"' : '' ?>>
        <source src="<?= htmlspecialchars($videoSrc, ENT_QUOTES, 'UTF-8') ?>" type="video/mp4" />
      </video>
    <?php elseif ($imageSrc !== ''): ?>
      <img src="<?= htmlspecialchars($imageSrc, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($imageAlt, ENT_QUOTES, 'UTF-8') ?>" loading="eager" />
    <?php endif; ?>
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <?php if ($eyebrow !== ''): ?>
      <p class="hero-eyebrow"><?= htmlspecialchars($eyebrow, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <?php if ($titleHtml !== ''): ?>
      <h1 class="hero-title serif"><?= $titleHtml ?></h1>
    <?php endif; ?>

    <?php if ($subtitle !== ''): ?>
      <p class="hero-sub"><?= htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <?php if ($contentHtml !== ''): ?>
      <?= $contentHtml ?>
    <?php endif; ?>
  </div>

  <?php if ($showScroll): ?>
    <div class="scroll-hint">
      <i data-lucide="mouse" style="width: 18px; height: 24px;"></i>
      <span><?= htmlspecialchars($scrollText, ENT_QUOTES, 'UTF-8') ?></span>
    </div>
  <?php endif; ?>
</div>
