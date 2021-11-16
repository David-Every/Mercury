<?php
echo '<div id = "carouselWrapper">';
    echo '<div id = "carousel">';
        $carouselSlide = json_decode(file_get_contents("data/carouselSlides.json"));

        foreach($carouselSlide->slides->slide as $slide){
            echo '<div class = "slide">';
                echo '<a href ="'.$slide->topLink.'">'.$slide->toplinkText .'</a>';
                echo '<img src="'.$slide->image.'" alt ="'.$slide->imageAlt.'">';
                echo '<a class = "bottomLink" href ="'.$slide->bottomLink.'">'.$slide->bottomLinkText .'</a>';
                echo '<p>'.$slide->paragraph .'</p>';
            echo '</div>';
        }
    echo '</div>';
echo '</div>';

