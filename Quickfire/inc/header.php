<head>
    <title> Quickfire </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script src="https://kit.fontawesome.com/8ac16a56cb.js" crossorigin="anonymous"></script>

    <link rel ="stylesheet" href ="dist/style.min.css">

</head>
<header>
    <?php
    include "inc/menu.php";
    $year=2021;
    ?>
    <div id="navigation">
        <div id = "menu">
        <i id="openMenu" class="fas fa-th"></i>
        </div>
    </div>

<div id ="headerWrapper">
    <div class = "headerImage">
        <img src ="images/appartment.png" alt="Luxery appartment"/>
        <div class ="headerOverlay">
            <div class ="heading">
                <h1>Mercury Communications</h1>
                <h1>Luxury &amp; corporate Communications</h1>
            </div>
            <div class ="headingLinks">
                <?php
                    /**
                     * Use Json to extract the links and then display them.
                     */

                    $headingLinks = json_decode(file_get_contents("data/headingLinks.json"));
                    foreach($headingLinks->heading->LinkInfo as $info){
                        echo '<div class ="linkInfo">';
                            echo '<h3>'.$info->title.'</h3>';
                            echo '<a href ="'.$info->LinkDestination.'">'.$info->linkText.'</a>';
                        echo'</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>