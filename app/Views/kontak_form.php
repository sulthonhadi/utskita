<?php
echo $this->extend('template_by_nofal');
echo $this->section('content');
?>
<div class="container">
    <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

        <h3>Contact Form</h3>
        <h4>Hubungi kami dengan mengisi isian dibawah</h4>
        <fieldset>
            <input placeholder="Nama Anda" type="text" name="name" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Email Anda" type="text" name="email" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input placeholder="Subject (optional)" type="text" name="subject" tabindex="4" required>
        </fieldset>
        <fieldset>
            <textarea placeholder="Ketikan pesan Anda" name="message" tabindex="5" required></textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan">Kirim</button>
        </fieldset>
    </form>
</div>

<?php
echo $this->endSection();

?>