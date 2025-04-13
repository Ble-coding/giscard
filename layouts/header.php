   
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
              <a class="cs_site_branding" href="/" aria-label="Groupe KACOU">
              <img src="/assets/img/logo_agrandi.png" alt="Logo">
              </a>
            </div>
            <div class="cs_main_header_center">
              <div class="cs_nav">
                <ul class="cs_nav_list">
                  <li><a href="/" class="<?= $currentRoute === '' ? 'active' : '' ?>">Accueil</a></li>
                  <li class="menu-item-has-children <?= in_array($currentRoute, ['about', 'contact']) ? 'active' : '' ?>">
                        <a href="#" class="<?= in_array($currentRoute, ['about', 'contact']) ? 'active' : '' ?>" aria-label="Menu link">Groupe Kacou</a>
                        <ul>
                            <li><a href="/about" class="<?= $currentRoute === 'about' ? 'active' : '' ?>" aria-label="Menu link">À propos</a></li>
                             <li><a href="/contact" class="<?= $currentRoute === 'contact' ? 'active' : '' ?>" aria-label="Menu link">Contact</a></li>
                        </ul>
                </li>

                  <li><a href="/service" class="<?= $currentRoute === 'service' ? 'active' : '' ?>">Nos services</a></li>
                  <li><a href="/formation" class="<?= $currentRoute === 'formation' ? 'active' : '' ?>">Formations</a></li>
                  <li><a href="/interim" class="<?= $currentRoute === 'interim' ? 'active' : '' ?>">Intérim</a></li>
                  <li><a href="/gallery" class="<?= $currentRoute === 'gallery' ? 'active' : '' ?>">Galerie</a></li>
                </ul>


              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Section -->