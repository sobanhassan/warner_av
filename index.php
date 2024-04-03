<?php $title="Home";
include'includes/header.php';?>
    <img src="images/Banner-img.png">
    <nav id="nav">
        <a href="#nav" title="Show navigation">Show Navigation</a>
        <a href="#" title="Hide navigation">Hide Navigation</a>
        <ul>
            <?php include'includes/nav.html'?>
        </ul>
    </nav>
    <h1 class="banner-header">Event Technologies &<br> Staging Solutions</h1>
    <p class="banner-text">
        Elevate your event with <br>Warner Audio Visual's Expertise!
    </p>
    <a href="contact.php" class="banner-btn"> Get Quote!</a>
</header>
<main>
    <div class="services">
        <h2 class>OUR SERVICES</h2>
        <div class="services-grid">
            <div class="services-child">
                <div>
                    <img src="images/tradeshow.jpg">
                </div>
                <div>
                    <p class="services-text-header">TRADE <span>SHOWS</span></p>
                    <p class="services-text">
                        Let Warner AV be your trade show ally! Our seasoned team crafts tailored AV solutions, ensuring your booth shines. Dive into meaningful interactions with your audience, while we ensure everything looks and sounds perfect. Make your next event unforgettable with us by your side!   
                    </p>
                    <a class="button" href="trade-shows.php">MORE</a>
                </div>
            </div>
            <div class="services-child">
                <div>
                    <img src="images/meetingsandevents.jpg">
                </div>
                <div>
                    <p class="services-text-header">MEETINGS & <span>EVENTS</span></p>
                    <p class="services-text">
                        Let us handle the details while you prioritize the big moments. Your dedicated project manager ensures a seamlessly impressive meeting or event from start to finish. Delight your clients and stakeholders with ease!
                    </p>
                    <a class="button" href="meetings-and-events.php">MORE</a>
                </div>
            </div>
            <div class="services-child">
                <div>
                    <img src="images/img2.png">
                </div>
                <div>
                    <p class="services-text-header"><span>GALLERY</span></p>
                    <p class="services-text">
                        Warner AV is a family-owned and operated audio visual company that has been providing one-stop services for audio visual and technical direction for corporate events and trade shows worldwide for over 50 years. We are committed to providing our clients with the highest quality service and products, and we are dedicated to helping them achieve their event goals.
                    </p>
                    <a class="button" href="gallery.php">MORE</a>
                </div>
            </div>
        </div>
    </div>
    <section class="about">
        <div class="about-content-container">
            <img src="images/About-background-photo.png" />
            <h2>ABOUT US</h2>
            <p>A family owned Audio Visual Company
                for more than 50 years, Warner AV
                provides one-stop services for audio
                visual and technical direction for
                corporate events and trade shows
                worldwide.</p>
            <a href="about.php">MORE</a>
        </div>
    </section>
</main>
<?php include'includes/footer.php'?>