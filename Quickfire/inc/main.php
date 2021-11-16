
<div class ="topMain">
    <div class="grid-container">
        <?php
        for($i= 1;$i < 22; $i++){
            echo '<div class="grid-item item'.$i.'"></div>';
        }
        ?>
    </div>
</div>

<div class ="middleMain">
    <!-- Iframe Video -->
 
    <!-- Temporary Gif as placeholder for video. -->
    <iframe src="images/giphy.gif"> </iframe>

    <h3>
        Mercury focuses its strengths of <br>
        business in the following industries
    </h3>
    <div id="articleWrapper">
        <div class = "articles">
            <?php
                $main = json_decode(file_get_contents("data/articles.json"));
        
                $article = 1;
                foreach($main->articles->article as $article){
                    echo '<div class ="article">';
                        echo '<h2>'.$article->title.'</h2>';
                        echo '<p>'.$article->content.'</p>';

                        echo '<a href ="#">our services</a>';
                    echo '</div>';
                    $article++;
                }

            ?>
        </div>
    </div>


    <div class = "overlayWrapper">
        <div class="lowerImage">
            <img src = "images/camel.jpg" alt="Camel Racing">
        </div>

        <div class="overlayText">
            <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam"
            </p>
        <a href ="#">Ben vestey, CEO &amp partner ar british polo day</a>
        </div>
    </div>

</div>

<div class ="middleBackground"></div>

<div class="overlayedImagesWrapper">
    <div class = "londonImage">
        <img src = "images/london.jpg" alt="London night scene">
    </div>
    <div class="overlayedImage">
        <img src ="images/businessLifestyle.jpg">
    </div>
</div>

<div class ="bottomBackground"></div>


<div class ="bottomMain">
    <h2>
        Driven by Professionalism to provide<br> our clients the best service
    </h2>
    <div class = "lowerText">
        <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam"
        </p>
        <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam"
        </p>
    </div>
    <div class ="lowerLinks">
        <a href ="#">Contact Us</a>
        <a href ="#">about us</a>
    </div>

</div>