<?php
include('data.php');
include('components.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=IBM+Plex+Mono&family=Montserrat:ital@0;1&family=Poppins:wght@300;400;500;600;700;800&family=Raleway:ital@0;1&family=Roboto&family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <title>Support - Creatic Creative Agency</title>
    <script src="js/carousel.js" defer></script>
</head>
<body>

    <!-- Header -->
    <?php setHeader($headerData); ?>

    <!-- Support Section -->
    <?php setSupport($supportData); ?>

    <!-- Footer -->
    <?php setFooter($footerMenuData, $socialMediaData); ?>

</body>
</html>