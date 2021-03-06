<?php if (tainacan_has_document() && !get_theme_mod('tainacan_single_item_gallery_mode', false)): ?>
<!-- Let's put everything in one row. -->
<div class="row">

  <!-- First column: the images -->
  <div class="col">
    <div class="mt-3 tainacan-single-post">
      <?php if (get_theme_mod('tainacan_single_item_document_section_label', __('Document', 'tainacan-interface')) != ''): ?>
        <h2 class="title-content-items" id="single-item-document-label">
          <?php echo esc_html(get_theme_mod('tainacan_single_item_document_section_label', __('Document', 'tainacan-interface'))); ?>
        </h2>
      <?php endif;?>

      <section class="tainacan-content single-item-collection margin-two-column">
        <div class="single-item-collection--document">
          <?php
            tainacan_the_document();
            if (!get_theme_mod('tainacan_single_item_hide_download_document', false) && function_exists('tainacan_the_item_document_download_link') && tainacan_the_item_document_download_link() != '') {
              echo '<span class="tainacan-item-file-download">' . tainacan_the_item_document_download_link() . '</span>';
            }
          ?>
        </div>
      </section>
    </div>
  </div> <!-- End of images column -->

  <!-- Metadata -->
  <div class="col"></div> <!-- End of metadata column -->

</div> <!-- End of row -->

<div class="my-5 border-bottom border-silver s-i-d"></div>
<?php endif;?>

