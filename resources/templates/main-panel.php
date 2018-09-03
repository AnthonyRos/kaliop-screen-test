<main class="MainPanel">
    <div class="MainPanel-previous">
        <a href="#" class="MainPanel-previousLink">
            <img src="./img/_ionicons_svg_md-arrow-back.svg" class="MainPanel-previousIcon" alt="Previous arrow">
            <p class="MainPanel-previousText">Back to team members list</p> 
        </a>
    </div>
    <?php include("./resources/templates/member.php"); ?>
    <?php include("./resources/templates/member-nav.php"); ?>
    <h2 class="MainPanel-title">Articles</h2>
    <div class="Articles">
        <?php include("./resources/templates/article-box.php"); ?>
        <?php include("./resources/templates/article-box.php"); ?>
        <?php include("./resources/templates/article-box.php"); ?>
        <div class="Articles-loader">
            <a href="#" class="Articles-loaderLink">Load more articles</a>  
        </div>
        <?php include("./resources/templates/author-box.php"); ?>   
    </div>
</main>