<?php

/**
 * implementation of hook_panels_layouts
 */
function panels_tnt_panel_panels_layouts() {
  $items['tnt_panel'] = array(
    'module' => 'panels',
    'title' => t('Panels layout for your TNT Theme'),
    'icon' => 'layouts/tnt_panel.png',
    'theme' => 'panels_tnt_panel',
    'css' => 'layouts/tnt_panel.css',
    'panels' => array('preface_first' => t('Preface First'), 'preface_last' => t('Preface Last'), 'main_upper' => t('Main Upper'), 'main_lower' => t('Main Lower'), 'postscript_first' => t('Postscript First'), 'postscript_last' => t('Postscript Last'))
  );

  return $items;
}

/**
 * This function uses heredoc notation to make it easier to convert
 * to a template.
 */
function theme_panels_tnt_panel($id, $content) {
  if ($id) {
    $idstr = " id='$id'";
  }

  $output = <<<EOT
<div class="panel-display tnt-panel" $idstr>

  <div class="panel-preface-wrapper">
    <div class="panel-panel panel-preface-first">
      <div class="inside">$content[preface_first]</div>
    </div>

    <div class="panel-panel panel-preface-last">
      <div class="inside">$content[preface_last]</div>
    </div>
  </div>
  
  <div class="panel-panel panel-main-upper">
    <div class="inside">$content[main_upper]</div>
  </div>
  <div class="panel-panel panel-main-lower">
    <div class="inside">$content[main_lower]</div>
  </div>
  
  <div class="panel-postscript-wrapper">
    <div class="panel-panel panel-postscript-first">
      <div class="inside">$content[postscript_first]</div>
    </div>

    <div class="panel-panel panel-postscript-last">
      <div class="inside">$content[postscript_last]</div>
    </div>
  </div>
  
</div>
EOT;
  return $output;
}
