<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/csss.css/global.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>

        <section class="placementLogos-section pt-5 pb-5">
            <div class="container">
                <div class="main-heading mb-4 " style="margin-top: 20px;">
                    <h2><span>Industry-Top</span> Recruiters</h2>
                </div>
                <div class="placementLogos-section__slider">
                    <div class="pl-item">
                        <img src="upload/31.webp" alt="Recruiters Logo">
                    </div>
                    <!-- Add other slides here in the same format as above -->
                    <div class="pl-item">
                        <img src="upload/32.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/33.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/34.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/35.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/36.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/37.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/38.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/39.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/40.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/41.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/42.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/43.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/44.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/45.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/46.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/47.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/48.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/49.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/50.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/51.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/52.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/32.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/54.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/55.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/56.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/57.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/58.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/59.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/60.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/61.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/62.webp" alt="Recruiters Logo">
                    </div>
                    <div class="pl-item">
                        <img src="upload/63.webp" alt="Recruiters Logo">
                    </div>
                    <!-- ... And so on for other logos ... -->
                </div>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                jQuery('.placementLogos-section__slider').slick({
                    infinite: true, // Infinite loop sliding
                    slidesToShow: 7, // Number of slides to show at a time
                    slidesToScroll: 1, // Number of slides to scroll at a time
                    autoplay: true, // Auto play enabled
                    autoplaySpeed: 250, // Auto play speed in milliseconds
                    dots: false, // Show pagination dots
                    arrows: true, // Show navigation arrows
                    responsive: [{
                        breakpoint: 768, // Set the breakpoint for mobile devices
                        settings: {
                            slidesToShow: 4, // On devices less than 768px wide, show 4 slides
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false, // Optionally, you can enable dots for navigation on mobile
                            arrows: false // Optionally, disable arrows on mobile for more space
                        }
                    }]
                });
            });
        </script>
    </body>
</html>