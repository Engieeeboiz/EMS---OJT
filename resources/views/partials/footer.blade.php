<footer id="footer" 
    class="w-full flex absolute bottom-0 border-t-2 border-[#33372C] transition-all duration-300 ease-in-out max-h-10 overflow-hidden"
    style="background-color:#0a9c84;">
    <div id="footer-content" class="h-36 w-max flex flex-row px-40 items-center space-x-10 opacity-0 transition-opacity duration-300 ease-in-out">
        <div class="space-y-4 flex flex-col">
            <a href="https://www.facebook.com/randomone00"
            target = "_blank"
            class="pointer-cursor">
                <img src="{{ asset('img/icons/auth-icons/facebook-circle-logo-60.png') }}" alt="" class="h-10 w-10">
            </a>
            <a href="https://www.instagram.com/engieboy_xd/"
            target = "_blank"
            class="pointer-cursor">
                <img src="{{ asset('img/icons/auth-icons/instagram-alt-logo-60.png') }}" alt="" class="h-10 w-10">
            </a>
        </div>
        <div class="space-y-4">
            <div class="h-max w-max flex flex-row space-x-4">
                <img src="{{ asset('img/icons/auth-icons/map-pin-regular-60.png') }}" alt="" class="h-10 w-10">
                <p class="content-center text-sm font-semibold tracking-wide"> 2F Silver Star Market, Remulla Drive, <br> Sahud-Ulan, Tanza, Cavite </p>
            </div>
            <div>
                <div class="h-max w-max flex flex-row space-x-4">
                    <img src="{{ asset('img/icons/auth-icons/phone-regular-60.png') }}" alt="" class="h-10 w-10">
                    <p class="content-center font-semibold"> +63 9XX-XXXX-XXX </p>
                </div>
            </div>
        </div>
        <div class="ps-8">
            <p class="font-bold"> &copy;{{date('Y')}} EMS . All rights reserved </p>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let footer = document.getElementById('footer');
    let footerContent = document.getElementById('footer-content');

    footer.classList.add('max-h-10');
    footerContent.classList.add('opacity-0');

    footer.addEventListener('mouseenter', function() {
        footer.classList.remove('max-h-10');
        footer.classList.add('max-h-32');
        footerContent.classList.remove('opacity-0');
        footerContent.classList.add('opacity-100');
    });

    footer.addEventListener('mouseleave', function() {
        footer.classList.remove('max-h-32');
        footer.classList.add('max-h-10');
        footerContent.classList.remove('opacity-100');
        footerContent.classList.add('opacity-0');
    });
});
</script>