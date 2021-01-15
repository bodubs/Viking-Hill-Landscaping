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
            <div class="slide fade">
                <img src="images/image0.jpeg" alt="">
            </div>
            <div class="slide fade">
                <img src="images/image1.jpeg" alt="">
            </div>
            <div class="slide fade">
                <img src="images/image3.jpeg" alt="">
            </div>
            <div class="slide fade">
                <img src="images/image4.jpeg" alt="">
            </div>
            <div class="slide fade">
                <img src="images/image5.jpeg" alt="">
            </div>
            <div class="slide fade">
                <img src="images/image6.jpeg" alt="">
            </div>
            <div class="slide fade">
                <video src="images/Video_1.MOV" controls="controls"></video>
            </div>
            <div class="slide fade">
                <video src="images/Video_2.MOV" controls="controls"></video>
            </div>
            <div class="slide fade">
                <video src="images/Video.MOV" controls="controls"></video>
            </div>
            <div class="carousel-arrow" id="arrow-right"><i class="fas fa-chevron-right"></i></div>
        </div>  

        <div class="caption-container">
            <div class="caption">
                <p>Stone Patio</p>
            </div>
            <div class="caption">
                <p>Results of a Fall Cleanup</p>
            </div>
            <div class="caption">
                <p>Fall Cleanup in Progress</p>
            </div>
            <div class="caption">
                <p>Fall Cleanup in Progress</p>
            </div>
            <div class="caption">
                <p>Fall Cleanup in Progress</p>
            </div>
            <div class="caption">
                <p>Fall Cleanup in Progress</p>
            </div>
            <div class="caption">
                <p>Results of a Fall Cleanup and a Mow</p>            
            </div>
            <div class="caption">
                <p>Fall Cleanup in Progress</p>
            </div>
            <div class="caption">
                <p>Brick patio</p>
            </div>
            <div class="caption">
                <p>Grey Stone Patio</p>            
            </div>
            <div class="caption">
                <p>Tree-Removal in Progress</p>            
            </div>
            <div class="caption">
                <p>Cleaning and Putting the Finishing touches on a Grey Stone Walk-way</p>
            </div>
            <div class="caption">
                <p>Fall Cleanup in Progress</p>
            </div>

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
            <div class="thumbnail">
                <a onclick="currentSlide(5)"><img src="images/image0.jpeg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(6)"><img src="images/image1.jpeg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(7)"><img src="images/image3.jpeg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(8)"><img src="images/image4.jpeg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(9)"><img src="images/image5.jpeg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(10)"><img src="images/image6.jpeg" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(11)"><img src="images/video_1_thumbnail.png" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(12)"><img src="images/video_2_thumbnail.png" alt=""></a>
            </div>
            <div class="thumbnail">
                <a onclick="currentSlide(13)"><img src="images/video_thumbnail.png" alt=""></a>
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

        showCaptions(n);
    }

    function showCaptions(n) {
        var i;
        const captions = document.querySelectorAll(".caption");
        if (n > captions.length) {slideIndex = 1}
        if (n < 1) {slideIndex = captions.length}
        for (i = 0; i < captions.length; i++) {
            captions[i].style.display = "none";
        }

        captions[slideIndex-1].style.display = "block";
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