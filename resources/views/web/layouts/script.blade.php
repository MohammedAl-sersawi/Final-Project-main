    <script src="{{ asset('siteassets/js/mixitup.js') }}"></script>
    <script src="{{ asset('siteassets/js/jquery.js') }}"></script>
    <script src="{{ asset('siteassets/js/popper.min.js') }}"></script>
    <script src="{{ asset('siteassets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('siteassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('siteassets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('siteassets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('siteassets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('siteassets/js/owl.js') }}"></script>
    <script src="{{ asset('siteassets/js/wow.js') }}"></script>
    <script src="{{ asset('siteassets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('siteassets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('siteassets/js/validate.js') }}"></script>
    <script src="{{ asset('siteassets/js/main.js') }}"></script>
    <script src="{{ asset('siteassets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('siteassets/js/appear.js') }}"></script>
    <script src="{{ asset('siteassets/js/script.js') }}"></script>
    <script src="{{ asset('siteassets/js/color-settings.js') }}"></script>
    <!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD39_Mb1wKUcuRD-0KPmQT6SQHhEMVX1O0"></script>
<script src="{{ asset('siteassets/js/map-script.js') }}"></script>
<!--End Google Map APi-->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let tabButtons = document.querySelectorAll(".tab-btn");
            let tabs = document.querySelectorAll(".tab");

            tabButtons.forEach(button => {
                button.addEventListener("click", function () {
                    let tabId = this.getAttribute("data-tab");

                    // إزالة التفعيل من جميع الأزرار
                    tabButtons.forEach(btn => btn.classList.remove("active-btn"));
                    this.classList.add("active-btn");

                    // إخفاء جميع الأقسام
                    tabs.forEach(tab => tab.style.display = "none");

                    // إظهار القسم المحدد
                    document.getElementById(tabId).style.display = "block";
                });
            });
        });
    </script>