<!-- Footer -->
<div class="footer w-100 p-5">
    <div class="row">
        <div class="col-lg-3 mb-lg-0 mb-md-4 mb-4">
            <img src="images/logo/Datta pets & Kennel.png" class="mb-3" alt="Logo" width="100"
                style="border-radius: 50%;">
            <p class="text-white pe-lg-5" style="font-size: 12px;">
                Datta Pets and Kennel is a one-stop shop for all your pet needs, from food and accessories to
                grooming
                and veterinary services. They also offer a kennel service for pet owners who need to board their
                pets
                while they are away.
            </p>
        </div>
        <div class="col-lg-2 mb-lg-0 mb-md-4 mb-4">
            <h6 class="text-white mb-3">Stay Connected</h6>
            <a href="#" class="text-white text-decoration-none me-3"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white text-decoration-none me-3"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white text-decoration-none me-3"><i class="bi bi-youtube"></i></a>
        </div>
        <div class="col-lg-2 mb-lg-0 mb-md-4 mb-4">
            <h6 class="text-white mb-3">Contacts</h6>
            <div class="row mb-3">
                <a href="tel:9836176084" class="text-white text-decoration-none me-2"><i
                        class="bi bi-telephone me-3"></i>+91 9836-17-6084</a>
            </div>
            <div class="row">
                <a href="#" class="text-white text-decoration-none me-2"><i
                        class="bi bi-envelope-at me-3"></i>example@gmail.com</a>
            </div>
        </div>
        <div class="col-lg-2 mb-lg-0 mb-md-4 mb-4">
            <h6 class="text-white mb-3">Payment</h6>
            <div class="row mb-2">
                <img src="./images/payment/QR.jpg" alt="">
            </div>
            <div class="row">
                <p class="text-light text-center">Arnab Datta</p>
            </div>
        </div>
        <div class="col-lg-3">
            <h6 class="text-white mb-3"><i class="bi bi-geo me-3"></i>Direction</h6>
            <iframe class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14726.762325501786!2d88.4093308!3d22.6653223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89f9c616bbe85%3A0x4f87c96fcfe1f86!2sDatta%20Pets%20And%20Kennel%2FPet%20store%20in%20North%20Dumdum%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1718110097142!5m2!1sen!2sin"
                height="200" loading="lazy"></iframe>
            <div class="w-100 mt-2" id="google_translate"></div>
        </div>
    </div>
</div>
<!-- After footer -->
<div class="after_footer w-100 p-3 text-white bg-dark text-center" style="font-size: 12px;">
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

    <script>
        function loadGoogleTranslate() {
            new google.translate.TranslateElement("google_translate");
        }
    </script>
    <i class="bi bi-c-circle me-2"></i><span class="me-2" id="current_year"></span>All Right Reserved || Datta Pets
    &
    Kennel
    <script>
        let show_year = document.getElementById('current_year');
        let date = new Date();
        show_year.innerText = date.getFullYear();
    </script>
</div>