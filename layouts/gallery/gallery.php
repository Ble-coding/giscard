<?php include(__DIR__ . '/galerie-data.php'); ?>
<section>
      <div class="cs_height_126 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center cs_mb_60">
                <h2 class="cs_section_title cs_fs_50 cs_mb_15 wow fadeInDown">Galerie</h2>
                <p class="cs_section_text mb-0 wow fadeInUp">  Explorez en images notre savoir-faire à travers une sélection de produits installés, d’affiches réalisées et de projets informatiques développés.</p>
            </div>

            <div class="row cs_gap_y_40">
            <!-- <div class="row cs_gap_y_40"> -->
      <?php foreach ($galerie as $item): ?>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="cs_card cs_style_1 cs_type_4 h-100 text-center wow fadeInUp">
            <div class="cs_card_thumbnail cs_radius_15 position-relative mb-3">
              <img src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" class="img-fluid">
            </div>
            <h5 class="mb-1"><?= $item['label'] ?></h5>
            <small class="text-muted"><?= $item['categorie'] ?></small>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
       </div>

</section>