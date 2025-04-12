   
   <?php
// router.php ou header.php inclus après définition de $currentRoute
$currentRoute = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>
   <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_sticky_header">
      <div class="cs_main_header cs_fs_18 cs_heading_color">
        <div class="container">
          <div class="cs_main_header_in">
            <div class="cs_main_header_left">
              <a class="cs_site_branding" href="/" aria-label="Groupe Giscard kacou">
              <img src="/assets/img/logo_agrandi.png" alt="Logo">
              </a>
            </div>
            <div class="cs_main_header_center">
              <div class="cs_nav">
              <ul class="cs_nav_list">
                <li><a href="/" class="<?= $currentRoute === '' ? 'active' : '' ?>">Accueil</a></li>
                <li><a href="/about" class="<?= $currentRoute === 'about' ? 'active' : '' ?>">À propos</a></li>
                <li><a href="/service" class="<?= $currentRoute === 'service' ? 'active' : '' ?>">Nos services</a></li>
                <li><a href="/formation" class="<?= $currentRoute === 'formation' ? 'active' : '' ?>">Formations</a></li>
                <li><a href="/interim" class="<?= $currentRoute === 'interim' ? 'active' : '' ?>">Service d’intérim </a></li>
                <li><a href="/gallery" class="<?= $currentRoute === 'gallery' ? 'active' : '' ?>">Galerie</a></li>
                <li><a href="/contact" class="<?= $currentRoute === 'contact' ? 'active' : '' ?>">Contact</a></li>
              </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Section -->