
<?php 
    $title="Home";
    include '_top.php';     
?>

<div class="body">
    <div class='slider-wrapper'>
        <div class='slider'>
            <picture>
                <source media="(min-width:1000px)" srcset="./assets/SlickCruise3-1200.jpeg">
                <source media="(min-width:40px)" srcset="./assets/SlickCruise3-350.png">
                <img style="width:100%; height: auto" alt="Slider Img">
            </picture>

            <picture>
                <source media="(min-width:1000px)" srcset="./assets/SlickCruise4-1200.jpeg">
                <source media="(min-width:40px)" srcset="./assets/SlickCruise4-350.png">
                <img style="width:100%; height: auto" alt="Slider Img">
            </picture>

            <picture>
                <source media="(min-width:1000px)" srcset="./assets/SlickCruise3-1200.jpeg">
                <source media="(min-width:40px)" srcset="./assets/SlickCruise3-350.png">
                <img style="width:100%; height: auto" alt="Slider Img">
            </picture>

            <picture>
                <source media="(min-width:1000px)" srcset="./assets/SlickCruise4-1200.jpeg">
                <source media="(min-width:40px)" srcset="./assets/SlickCruise4-350.png">
                <img style="width:100%; height: auto" alt="Slider Img">
            </picture>
        </div>
    </div>

    <div class='blogs'>
        <p>Recent Blog Articles</p>
        <div class='blog-wrapper'>
            <a class="blog" href="#">
                <div class="blog-title">What to take</div>
                <div class="blog-date">May 1, 2018</div>
            </a>
            <a class="blog" href="#">
                <div class="blog-title">Who to bring</div>
                <div class="blog-date">May 2, 2018</div>
            </a>
            <a class="blog" href="#">
                <div class="blog-title">Urban Vacations</div>
                <div class="blog-date">May 3, 2018</div>
            </a>
            <a class="blog" href="#">
                <div class="blog-title">Choosing a hotel</div>
                <div class="blog-date">May 4, 2018</div>
            </a>
        </div>
    </div>  
</div>
    
<?php include '_bot.php'; ?>