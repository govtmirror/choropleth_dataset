<?php
/**
 * @file
 * Template for the chororpleth map wrapper.
 * 
 * Variables passed in from theme function:
 *  - $node - The fully loaded dataset node object.
 *  - $dataset_url = The url to the dataset for this map.
 *  - $embedable_url = The url to embed this map.
 *  - $choropleth = The choropleth map html.
 *  - $embed_toggle_text = The text that activates the ebmed toggle.
 *  - $embed_help_text = The text that tells the visitor what to do with the 
 *    embed code.
 *  - $link_source_title = THe text for the title attribute on the source link.
 */
?>
<?php if ($choropleth) : ?>
<div class="choropleth-map-wrapper">
  <?php print $choropleth; ?>  
</div>
<div class="choropleth-map-links">
  <div>source: <a href="<?php print $dataset_url ?>" target="_blank" title="<?php print $link_source_title ?> <?php print $dataset_url ?>"><?php print $dataset_url ?></a></div>
  <div>
    <a id="embed-toggle"><?php print $embed_toggle_text ?></a>
    <div id="embed-toggle-reveal" class="element-hidden">
      <div class="help-text"><?php print $embed_help_text ?></div>
      <textarea id="embed-me" ><iframe src="<?php print $embedable_url ?>" height="655" width="100%" frameborder="0" scrolling="auto" seamless></iframe></textarea>
    </div>
  </div>
</div>
<?php endif; ?>