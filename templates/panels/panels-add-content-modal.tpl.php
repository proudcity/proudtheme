<?php
/**
 * @file
 * Template to control the add content modal.
 */
$content = !empty($categories[$category]['content']) ? $categories[$category]['content'] : array();
//dpm(get_defined_vars());
?>
<div class="panels-add-content-modal row">
  <div class="panels-section-column panels-section-column-categories col-md-3">

        <ul class="nav in">
          <?php foreach ($categories_array as $category): ?>
            <li><?php print $category; ?></li>
          <?php endforeach; ?>
        </ul>

  </div>

  <?php print $messages; ?>

  <?php if (!empty($content)): ?>
  <div class="panels-section-columns col-md-9">
    <div class="row">
      <?php foreach ($content as $id => $item): ?>

        <a class="card card-block text-center card-btn" href="#">
        <i class="fa <?php print !empty($item['fa_icon']) ? $item['fa_icon'] : 'fa-sticky-note'; ?> fa-3x"></i>
        <h6><?php print $item['title']; ?></h6>
        </a>

      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>
</div>
