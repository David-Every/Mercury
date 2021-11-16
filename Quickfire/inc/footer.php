<footer>
    <?php
    $footerJson = json_decode(file_get_contents("data/footer.json"));

        //TODO:Refactor to only use One loop for entire footer
        //Address section
        echo '<div id = "FooterContentWrapper">';
        echo '<div class = "address">';
        foreach($footerJson->footer->address as $footer){

            //TODO: echo Logo here

                for($i = 0; $i < 4; $i++){
                    echo '<p>'. $footer->address[$i]. '</p>';
                }
                for($i = 0; $i < 3; $i++){
                    echo '<span class = "socials">';
                    //TODO: change text for socials to FA icons

                    echo '<a href = "'.$footer->socialLinks[$i].'" target = "_blank">'. $footer->social[$i]. '</a><br>';
                    echo '</span>';
                }
        }
        echo '</div>';
        echo '<div class = "usefulLinks">';
        foreach($footerJson->footer->links as $footer){
            echo '<h2>'.$footer->title.'</h2>';
            for($i = 0; $i < 5; $i++){
                echo '<a href = "'.$footer->pageLinks[$i].'" target = "_blank">'. $footer->pages[$i]. '</a><br>';
            }
        }
        echo '</div>';
        echo '<div class ="important">';

        foreach($footerJson->footer->important as $footer){
            echo '<h2>'.$footer->title.'</h2>';
            for($i = 0; $i < 4; $i++){
                echo '<a href = "'.$footer->pageLinks[$i].'" target = "_blank">'. $footer->pages[$i]. '</a><br>';
            }
        }
        echo '</div>';

        /**
         * Form Info will be here
         */
        echo '</div>';

        echo '<div class = "underbar">';
        //TODO: add in copyright
            echo'<span>cp Copyright Mercury Comms '.$year.'</span>';
        echo '</div>';

    ?>