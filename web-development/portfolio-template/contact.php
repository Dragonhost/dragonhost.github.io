<?php  require 'html/head.php' ?>

<div class="contect_container">
    <?php  require 'html/nav.php' ?>
    <div class="contact_box">
        <div class="contact_text">
            <h1 class="contact">Contact</h1>
            <div class="contact_links">
                <a href="https://github.com/Dragonhost/Dragonhost.github.io" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/kamal-teja-157111168/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com/kamal.gaajula" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
        <form action="contact.php" class="contact_form">
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Email">
            <textarea placeholder="Message"></textarea>
        </form>
    </div>

    <?php  require 'html/footer.php' ?>
</div>