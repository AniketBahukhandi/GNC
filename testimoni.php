<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/csss.css/global.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        .testimonial-section::before {

            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: inherit;
            background-image: url('upload/pharmacy-head.webp');
            filter: grayscale(100%);
            /* Convert to grayscale */

            /* Place the pseudo-element behind the content */
        }

        /* Make sure the testimonial-section is positioned relative */
        .testimonial-section {
            position: relative;

            /* Contain the pseudo-element within this element */
        }

        .page-heading h2 {
            font-weight: bold;
        }

        .testimonial-section P {
            font-size: 16PX !important;
        }

        .application-process {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .steps,
        .development {
            flex: 1;
            min-width: 250px;
        }

        .step {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;

        }

        .active-development {
            background: rgb(255 123 50);
            color: white;
        }

        .development {
            background: #333;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-left: 12px;
        }

        .development img {
            width: 100%;
            border-radius: 5px;
        }

        .development-line {
            width: 342px;
            height: auto;
        }

        .development-back {
            width: 350px;
            background-color:#00b5fbf0;
            padding: 10px 0px 1px 10px;
            margin: -10px 0px 0px -10px;
            border-bottom-right-radius: 10px;
        }

        @media (max-width: 768px) {
            .application-process {
                flex-direction: column;
            }
        }
    </style>

</head>

<body>
    <section>
        <div class="testimonial-section pt-8 pb-8 position-relative">
            <div class="container testimonial-section-background">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="page-heading">
                            <h2 class="mb-3 text-black ">What our students say?</h2>
                            <p class="text-black ">Guru Nanak College believes in a holistic approach to education by emphasizing not just the academic component.</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="testimonial-section__slider">
                            <!-- Testimonial 1 -->
                            <div class="card testimoni-item br-20 overflow-hidden">
                                <div class="card-body p-4">
                                    <h4 style="color:black">Rewarded with the best!</h4>
                                    <p style="color:black">GNC College has been an exceptional institution that has provided us with a transformative educational experience. The college is known for its dedicated faculty members who possess deep knowledge in their respective fields. They go above and beyond to ensure that we receive a well-rounded education and are always available to support us in our academic endeavors.</p>
                                </div>
                                <div class="card-footer bg-white border-0 p-4">
                                    <div class="testimoni-user d-flex">
                                        <div class="userDp"><img src="upload/Rasika.webp" alt="User Image"></div>
                                        <div class="userInfo">
                                            <p style="color:black">Mrs. Rasika Bhardwaj</p>
                                            <small style="color:black">B.pharma</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Additional testimonials... -->
                            <div class="card testimoni-item br-20 overflow-hidden">
                                <div class="card-body p-4">
                                    <h4 style="color:black">It is the epitome of learning</h4>
                                    <p style="color:black">GNC College has been an exceptional institution that has provided us with a transformative educational experience. The college is known for its dedicated faculty members who possess deep knowledge in their respective fields. They go above and beyond to ensure that we receive a well-rounded education and are always available to support us in our academic endeavors.</p>
                                </div>
                                <div class="card-footer bg-white border-0 p-4">
                                    <div class="testimoni-user d-flex">
                                        <div class="userDp"><img src="upload/abbas.webp" alt="User Image"></div>
                                        <div class="userInfo">
                                            <p style="color:black">Mr. Abbas Alam</p> <small style="color:black">B.Pharm.</small><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card testimoni-item br-20 overflow-hidden ">
                                <div class="card-body p-4">
                                    <h4 style="color:black">Helped me identify my hidden potential</h4>
                                    <p style="color:black">We received a transforming educational experience from GNC College, an amazing school. The college is renowned for its devoted professors who are highly knowledgeable in their professions. They go above and beyond to make sure we have a well-rounded education, and they are always there to help us out with our schoolwork.</p>
                                </div>
                                <div class="card-footer bg-white border-0 p-4">
                                    <div class="testimoni-user d-flex">
                                        <div class="userDp"><img src="upload/Abhishek.webp" alt="User Image"></div>
                                        <div class="userInfo">
                                            <p style="color:black">Mr. Abhishek</p> <small style="color:black">B.Pharm.</small><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card testimoni-item br-20 overflow-hidden">
                                <div class="card-body p-4">
                                    <h4 style="color:black">It is the epitome of learning</h4>
                                    <p style="color:black">GNC College also places great emphasis on co-curricular and extracurricular activities. The college organizes various events, sports competitions, and cultural festivals throughout the year. These activities have not only helped us develop our skills and talents but have also fostered a sense of camaraderie among the students.</p>
                                </div>
                                <div class="card-footer bg-white border-0 p-4">
                                    <div class="testimoni-user d-flex">
                                        <div class="userDp"><img src="upload/amit.webp" alt="User Image"></div>
                                        <div class="userInfo">
                                            <p style="color:black">Mr. Amit Biswas</p> <small style="color:black">B.Pharm.</small><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(document).ready(function($) {
            setTimeout(function() {
                $('.testimonial-section__slider').slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 3, // Default for desktop
                    adaptiveHeight: false,
                    autoplay: true, // Autoplay enabled
                    autoplaySpeed: 2000, // 2 seconds per slide
                    responsive: [{
                            breakpoint: 992, // Bootstrap's large breakpoint
                            settings: {
                                slidesToShow: 3 // 3 slides for larger devices
                            }
                        },
                        {
                            breakpoint: 768, // Bootstrap's medium/small breakpoint
                            settings: {
                                slidesToShow: 1 // 1 slide for tablets and phones
                            }
                        }
                    ]
                });
            }, 1000); // 1-second delay
        });
    </script>


</body>

</html>