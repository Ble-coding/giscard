
<?php
// session_start();

// Récupération des erreurs et des anciennes valeurs (s'ils existent)
$errors = $_SESSION['form_errors'] ?? [];
$old = $_SESSION['old_input'] ?? [];

// Optionnel : vider les erreurs après affichage
unset($_SESSION['form_errors'], $_SESSION['old_input']);
?>

    <!-- Start Contact Section -->
    <section>
      <div class="cs_height_131 cs_height_lg_70"></div>
      <div class="container">
        <div class="row cs_gap_y_40">
          <div class="col-lg-5">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_mb_23">UNE DEMANDE ? <span class="cs_pill"></span></p>
              <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInDown">Remplissez ce formulaire, nous vous répondrons rapidement.</h2>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
          <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>


            <form  id='contact-form' action="mail/mail.php" method="POST" class="cs_contact_form row cs_gap_y_24" >
              <!-- <input type="hidden" name="access_key" value="cd98b256-0db3-478c-ab28-1ec94f80447c"> -->
              <div class="col-sm-6">
                <label for="name">Nom complet*</label>
                <input type="text" name="name" class="cs_form_field cs_radius_30" id="name" 
                value="<?= htmlspecialchars($old['name'] ?? '') ?>">
              </div>
              <div class="col-sm-6">
                <label for="email">Adresse Email*</label>
                <input type="email" name="email" class="cs_form_field cs_radius_30" id="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>">
              </div>
              <div class="col-sm-6">
                <label for="companyname">Nom de l'entreprise*</label>
                <input type="text" name="companyname" class="cs_form_field cs_radius_30" id="companyname" value="<?= htmlspecialchars($old['companyname'] ?? '') ?>">
              </div>
              <div class="col-sm-6">
                <label for="phone">Téléphone*</label>
                <input type="number" name="phone" class="cs_form_field cs_radius_30" id="phone" value="<?= htmlspecialchars($old['phone'] ?? '') ?>">
              </div>
              <div class="col-sm-12">
                <label for="message">Votre message*</label>
                <textarea name="message" rows="7" id="message" class="cs_form_field cs_radius_30"><?= htmlspecialchars($old['message'] ?? '') ?></textarea>
              </div>
              <div class="col-sm-12">
                <button type="submit" aria-label="Send message button" class="cs_btn cs_style_1 cs_accent_bg cs_purple_hover cs_fs_16 cs_semibold cs_white_color cs_radius_30 wow fadeInUp">
                <span>Envoyer le message</span>
                </button>
                <div id="cs_result" class="cs_result"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Contact Section -->


