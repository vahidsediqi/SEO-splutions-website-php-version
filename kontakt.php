<?php
$curr_page = "contact";
$PageTitle = 'Kontakt';
$PageDescription = 'Kontaktieren Sie uns! 06641077144 office@seosolutions.at Pyrkergasse 30-32, A-1190 Wien';
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

          <form action="kontakt.php" method="POST" name="contact">
                <input class="form-fields" type="text" name="name" id="name" placeholder="Ansprechpartner" required minlength="3" maxlength="35">
                 <input class="form-fields tel-input" type="tel" name="phone"
                   pattern="[0-9]{9,14}"
                   placeholder="Telefonnumer">
                <input class="form-fields" type="email" name="email" id="email" placeholder="E-Mail">
                <textarea name="msg" class="form-text" placeholder="Nachricht"></textarea>
                <button type="submit" class="talk-btn hvr-bounce-to-right" onClick="sendEmail()">Senden</button>
            </form>
     
        </div>
    </div>
    <!-- FOOOTER STARTS HERE -->
    <?php include_once('footer.php');?>