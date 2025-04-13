<?php
$pageTitle = 'Erreur lors de l’envoi du mail- Groupe KACOU';
$pageDescription = 'Une erreur est survenue lors de l’envoi de votre message. Veuillez réessayer.';

ob_start();
?>




    <!-- Start CTA Section -->
    <section>
      <div class="cs_height_134 cs_height_lg_80"></div>
      <div class="container">
        <div class="cs_cta cs_style_2 cs_type_1 cs_heading_bg cs_bf_filed cs_radius_10" data-src="assets/img/counter_bg.svg">
          <div class="cs_center_column text-center position-relative z-1">
            <h2 class="cs_contet_title cs_fs_70 cs_white_color cs_mb_55 wow fadeInDown">     Erreur lors de l'envoi du mail
            Veuillez réessayer plus tard.</h2>
            
          </div>
        </div>
      </div>
    </section>
    <!-- End CTA Section -->

<?php
$content = ob_get_clean(); // Capture et stocke le contenu
require __DIR__ . '/../layouts/base.php'; // Inclut le layout principal
