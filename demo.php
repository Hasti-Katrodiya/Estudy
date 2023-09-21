<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slick Slider with 4 Cards</title>

    <!-- Slick Slider CSS and jQuery -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- jQuery (Slick Slider dependency) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Slider JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Your existing CSS styles */
        .profile-card {
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(230, 221, 221, 0.146);
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info {
            margin-left: 20px;
            margin-top: 20px;
            /* Add margin-top to create space */
        }

        /* Updated styling for Previous and Next buttons */
        .slick-prev,
        .slick-next {
            background-color: #EE3163;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            font-size: 24px;
        }

        /* Styling for icons inside the buttons */
        .slick-prev i,
        .slick-next i {
            font-size: inherit;
        }
    </style>
</head>

<body>
    <section class="section_bg">
        <p class="display-4 bold_font text-center color_linear_gradient">Explore Our Popular Courses</p>
        <p class="letter_spacing bold_font text-center">eStudy Guaranteed Success</p>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="card-slider" class="slider">
                        <div class="profile-card">
                            <div class="profile-info">
                                <img src="./images/card1.jpg" alt="Profile 1" class="profile-img">
                                <h4 class="bold_font" style="margin-bottom: 0; color: #EE3163;">John Doe</h4>
                                <p>Designer</p>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                    </div>
                    <button class="slick-prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="slick-next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('#card-slider').slick({
                slidesToShow: 4, // Display 4 cards in a row
                slidesToScroll: 1,
                autoplay: false, // Set to true for autoplay
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                prevArrow: $('.slick-prev'),
                nextArrow: $('.slick-next'),
                responsive: [
                    {
                        breakpoint: 768, // Adjust breakpoints as needed
                        settings: {
                            slidesToShow: 1 // Change to 1 card on smaller screens if desired
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>