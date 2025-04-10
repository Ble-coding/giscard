<?php
$pageTitle = 'Mail envoyé avec succès - Groupe Giscard Kacou';
$pageDescription = 'Votre message a été envoyé. Nous vous répondrons rapidement.';
ob_start();
?>




    <!-- Start CTA Section -->
    <section>
      <div class="cs_height_134 cs_height_lg_80"></div>
      <div class="container">
        <div class="cs_cta cs_style_2 cs_type_1 cs_heading_bg cs_bf_filed cs_radius_10" data-src="assets/img/counter_bg.svg">
          <div class="cs_center_column text-center position-relative z-1">
            <h2 class="cs_contet_title cs_fs_70 cs_white_color cs_mb_55 wow fadeInDown"> Message envoyé avec succès</h2>
            
          </div>
        </div>
      </div>
    </section>
    <!-- End CTA Section -->

<?php
$content = ob_get_clean(); // Capture et stocke le contenu
require __DIR__ . '/../layouts/base.php'; // Inclut le layout principal
