<!-- start block.tpl.php -->
<div class="block-wrapper <?php print $block_zebra; ?>">

  <div class="rounded-block rounded-block-top">
    <div class="rounded-inside">
      <p class="rounded-topspace"></p>

      
        <div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">
        <?php if ($block->subject): ?>
          <h2 class="title block-title"><?php print $block->subject ?></h2>
        <?php endif;?>
          <div class="content">
            <?php print $block->content ?>
          </div>
        </div>

      <p class="rounded-bottomspace"></p>
    </div><!-- /rounded-inside -->
    <div class="rounded-block-bottom"></div>
  </div><!-- /rounded-block -->
  
</div>
<!-- /end block.tpl.php -->