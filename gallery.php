<?php $title="Gallery";
include'includes/header.php'?>

<style>
    .image_gallery{
        margin: 10px 50px;
    }
    .image_gallery img{
        width: 230px;
        padding: 5px;
        filter: grayscale();
        transition: 1s;
    }
    
    .image_gallery img:hover{
        filter: grayscale(0);
        transform: scale(1.1);
    }
    
    .single_image_display {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.9);
        padding: 100px 0px 0px 0px;
    }
    .single_image_display img {
        width: 40%;
    }
    .image_content {
        margin: auto;
        display: block;
        max-width: 80%;
        max-height: 80%;
    }
    .close {
        position: absolute;
        margin-top: 50px;
        top: 20px;
        right: 30px;
        font-size: 50px;
        font-weight: bold;
        color: white;
        cursor: pointer;
    }
</style>


<div class="header-wrapper">
        <img src="images/Banner-img.png">
    </div>
    
    <nav id="nav">
        <a href="#nav" title="Show navigation">Show Navigation</a>
        <a href="#" title="Hide navigation">Hide Navigation</a>
        <ul>
            <?php include'includes/nav.html'?>
        </ul>
    </nav>
    
</header>
<main>
    <div class="image_gallery">
        <img src="images/gallery/taiho-conference.webp" onclick="showImage('images/gallery/taiho-conference.webp')">
        <img src="images/gallery/award-show.webp" onclick="showImage('images/gallery/award-show.webp')">
        <img src="images/gallery/sales-conference.webp" onclick="showImage('images/gallery/sales-conference.webp')">
        
        <img src="images/gallery/harvester-booth.webp" onclick="showImage('images/gallery/harvester-booth.webp')">
        <img src="images/gallery/lit-projections.webp" onclick="showImage('images/gallery/lit-projections.webp')">
        <img src="images/gallery/max-armstrong.webp" onclick="showImage('images/gallery/max-armstrong.webp')">
        <img src="images/gallery/unstoppable-conference.webp" onclick="showImage('images/gallery/unstoppable-conference.webp')">
        <img src="images/gallery/agios-tradeshow-booth.webp" onclick="showImage('images/gallery/agios-tradeshow-booth.webp')">
        <img src="images/gallery/american-automobile-conference.webp" onclick="showImage('images/gallery/american-automobile-conference.webp')">
        <img src="images/gallery/bankers-life.webp" onclick="showImage('images/gallery/bankers-life.webp')">
        <img src="images/gallery/behind-scenes-corporate.webp" onclick="showImage('images/gallery/behind-scenes-corporate.webp')">
        <img src="images/gallery/behind-scenes-tradeshow1.webp" onclick="showImage('images/gallery/behind-scenes-tradeshow1.webp')">
        <img src="images/gallery/groove-nacr.webp" onclick="showImage('images/gallery/groove-nacr.webp')">
        
        <img src="images/gallery/ballroom.webp" onclick="showImage('images/gallery/ballroom.webp')">
        <img src="images/gallery/healthcare.webp" onclick="showImage('images/gallery/healthcare.webp')">
        <img src="images/gallery/honeywell-conference.webp" onclick="showImage('images/gallery/honeywell-conference.webp')">
        <img src="images/gallery/honeywell-conference1.webp" onclick="showImage('images/gallery/honeywell-conference1.webp')">
        <img src="images/gallery/honeywell-conference2.webp" onclick="showImage('images/gallery/honeywell-conference2.webp')">
        <img src="images/gallery/projections.webp" onclick="showImage('images/gallery/projections.webp')">
        <img src="images/gallery/stage-with-seal.webp" onclick="showImage('images/gallery/stage-with-seal.webp')">
        <img src="images/gallery/stage-with-seal1.webp" onclick="showImage('images/gallery/stage-with-seal1.webp')">
        <img src="images/gallery/theatre-set.webp" onclick="showImage('images/gallery/theatre-set.webp')">
        <img src="images/gallery/tradeshow-booth.webp" onclick="showImage('images/gallery/tradeshow-booth.webp')">
        <img src="images/gallery/tradeshow-booth1.webp" onclick="showImage('images/gallery/tradeshow-booth1.webp')">
        <img src="images/gallery/agios-tradeshow-booth1.webp" onclick="showImage('images/gallery/agios-tradeshow-booth1.webp')">
        <img src="images/gallery/central-square.webp" onclick="showImage('images/gallery/central-square.webp')">
        
        <img src="images/gallery/booth-tree.webp" onclick="showImage('images/gallery/booth-tree.webp')">
        <img src="images/gallery/behind-scenes-tradeshow.webp" onclick="showImage('images/gallery/behind-scenes-tradeshow.webp')">
    </div>

    <div id="expanded_img" class="single_image_display">
        <span class="close" onclick="closeImage()">&times;</span>
        <img class="image_content" id="image">
    </div>

</main>
<script>
    function showImage(src) {
    var expanded_img_element = document.getElementById("expanded_img");
    var image_element = document.getElementById("image");
    expanded_img_element.style.display = "block";
    image_element.src = src;
    }

    function closeImage() {
    var expanded_img_element = document.getElementById("expanded_img");
    expanded_img_element.style.display = "none";
    }
</script>
<?php include'includes/footer.php'?>