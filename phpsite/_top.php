<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabot Cruises: <?php echo($title); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/d56106c196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
</head>
<body>
    <div class='body-wrapper'>
        <div class="header">

            <div class='smallHeader'>
                <?php 
                    include '_nav.php';     
                ?>

                <form class="search" >
                    <input type="text" placeholder="Search.." name="search">
                </form>
            </div>


            <div class="top-header">
                <figure>
                    <img
                        alt='logo'
                        class='logo'
                        srcset="./assets/Sedovo 1.png 1x, ./assets/Sedovo 2.png 2x, ./assets/Sedovo 2.png 3x"
                        src="./assets/Sedovo 1.png" 
                    />
                </figure>
                <p class='phone'><a href="tel:123-456-7890">123-456-7890</a></p>
            </div>
    
            <div class="nav">
                    <?php 
                        include '_nav.php';     
                    ?>
                    <form class="search" >
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
            </div>



        </div>