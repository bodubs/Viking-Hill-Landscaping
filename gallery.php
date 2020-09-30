<?php
include "top.php"
?>

<section class="gallery">
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-arrow" id="arrow-left"><i class="fas fa-chevron-left"></i></div>
            <div class="slide fade">
                <img src="images/picture1.jpg" alt="">
            </div>
            <div class="slide fade">
                <img src="images/picture2.jpg" alt="">
            </div>
            <div class="carousel-arrow" id="arrow-right"><i class="fas fa-chevron-right"></i></div>
        </div>  

    </div>

</section>

<script>
    var slideIndex = 1;

    showSlides(slideIndex);
    
    function showSlides(n){
        var i;
        const slides = document.querySelectorAll(".slide");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex-1].style.display = "block";
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    document.getElementById("arrow-right").addEventListener("click", () => {
        showSlides(slideIndex += 1);
    })
    document.getElementById("arrow-left").addEventListener("click", () => {
        showSlides(slideIndex -= 1);
    })
</script>

<?php
include 'footer.php';
?>