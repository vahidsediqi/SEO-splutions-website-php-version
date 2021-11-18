<?php
$curr_page = "contact";
include_once('header.php');
?>
    <div class="homepage-section-wrapper-img-lg contact-page-wrapper">
        <div class="contact-section-content-wrapper">
            <h2 class="contact-title">
                <span>Ko</span>
                <span>nta</span>
                <span>Kt</span>
            </h2>
            <span class="contact-subtitle">Online Marketing ist die Zukunft</span><br>
            <span class="contact-subtitle" style="color: #CA0000">des Unternehmenserfolgs.</span>
        </div>

        <!-- CONTACT FORM -->
        <div class="form-wrapper">
            <form action="mail.php" method="POST">
                <input class="form-fields" type="text" name="name" id="" placeholder="Ansprechpartner">
                <input class="form-fields" type="text" name="tel" id="" placeholder="Telefonnummer">
                <input class="form-fields" type="email" name="email" id="" placeholder="E-Mail">
                <textarea class="form-text" placeholder="Nachricht" name="message"></textarea>
                <button type="submit" class="talk-btn hvr-bounce-to-right">Senden</button>
            </form>
        </div>
    </div>
    <!-- FOOOTER STARTS HERE -->
    <?php 

include_once('footer.php');
?>