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
            <div class="slide fade">
                <img src="images/leaf-cleanup.jpeg" alt="Man is blowing leaves off of lawn">
            </div>
            <div class="slide fade">
                <img src="images/leaf-cleanup2.jpeg" alt="">
            </div>
            <div class="carousel-arrow" id="arrow-right"><i class="fas fa-chevron-right"></i></div>
        </div>  

        <div class="thumbnail-track">
            <div class="thumbnail">
                <a onclick="currentSlide(1)"><img src="images/picture1.jpg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(2)"><img src="images/picture2.jpg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(3)"><img src="images/leaf-cleanup.jpeg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(4)"><img src="images/leaf-cleanup2.jpeg" alt=""></a>
            </div>
        </div>

    </div>

</section>

<script>
    var slideIndex = 1;

    showSlides(slideIndex);
    updateThumbnails();
    

    
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
        updateThumbnails();
    }

    function updateThumbnails() {
        const thumbnails = document.getElementsByClassName("thumbnail");

        for (var i = 0; i < thumbnails.length; i++){
            if(thumbnails[i].classList.contains("selected")){
                thumbnails[i].classList.remove("selected");
            }
        }

        thumbnails[slideIndex-1].classList.add("selected");
    }
    document.getElementById("arrow-right").addEventListener("click", () => {
        showSlides(slideIndex += 1);
        updateThumbnails();
    })
    document.getElementById("arrow-left").addEventListener("click", () => {
        showSlides(slideIndex -= 1);
        updateThumbnails();
    })


</script>

<?php
include 'contact-action.php';
include 'footer.php';
?>