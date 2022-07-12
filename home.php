<?php include('config.php');
require_once('repository/MangaRepository.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body> <?php include('navbar.php'); ?>

    <div id="banner">
        HOME
    </div>

    <div class="space">
        <p> MANGAS RECEM LANÇADOS </p> 

        <div class="pad">
            <div class="slideshow-container">
                <?php foreach(fnListMangas() as $manga): ?>
                    <div class="mySlides fade">
                        <a href="mangaDetalhe.php?id=<?= $manga->id?>"><img class="cropped_slide" src="<?= $manga->capa ?>" style="width:100%"></a>
                        <div class="text"><?= $manga->titulo ?></div>
                    </div>
                <?php endforeach; ?>
        
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
        </div>
    </div>

</body> <?php include("rodape.php"); ?>
</html>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }
</script>