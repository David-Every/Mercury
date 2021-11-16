<div id = "clients">

<h2>Some of our current and Former clients</h2>

    <?php
    /**
     * Change the  second $i to the needed logo.
    */
    echo'<div class = "gridstart">';
    for($i=1; $i < 17; $i++){
        echo '<div class="clientGrid-item clientItem'.$i.'">'. $i.'</div>';
    }
    echo'</div>';

    ?>
</div>