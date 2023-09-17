<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .img_with_gradient_border {
            position: relative;
        }

        .img_with_gradient_border::before {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(90deg, #e73167, #2432c9);
            z-index: -1;
        }
    </style>
    <title>Your Page Title</title>
</head>

<body>
    <div class="col-mg-6 col-lg-6 col-sm-12 px-5">
        <!-- <img src="./images/library.jpg" alt="" class="img_with_gradient_border" height="700px" width="700px"> -->
    </div>


    <p class="display-4">HASTI</p>

    <!-- Add your JavaScript or additional content here -->

    <!-- Bootstrap and jQuery scripts (make sure to include jQuery if needed) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>