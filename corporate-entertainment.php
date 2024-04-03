<?php $title="Corporate Entertainment";
include'includes/header.php'?>

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
<style>
    main p {
        line-height: 1.8em;
    }
    .black * {
        color: white;
    }
    .grey {
        background:rgb( 51,51,51 );
    }
    .black h1, .black h2 {
        font-weight: 100;
    }
    .img-wrapper {
        display: relative;
        margin-right: auto;
        max-width: 1200px;
        height: 720px;
    }
    .img-wrapper img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .heading-style {
        position: relative;
    }
    .txt-overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        
    }
    .txt-overlay * {
        color: white;
    }
    .txt-overlay > div {
        display: grid;
        align-items: center;
        height: 100%;
        
    }
    .txt-position {
        background: rgb( 51,51,51 );
        padding: 40px 60px 60px 60px;
        max-width: 500px;
        margin-left: auto;
    }
    .txt-position h1 {
        font-size: 40px;
        line-height: 1em;
    }
    section h2 {
        font-size: 2em;
        line-height: 1em;
        text-align: center;
    }
    .events-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        
    }
    .event-card {
        padding: 54px;
        text-align: center;
        display: grid;
        align-content: space-between;
    }
</style>
<main class="black">
    <div class="heading-style">
        <div class="img-wrapper">
            <img src="images/corpEnt.jpg" alt="meeting and events">
        </div>
        <div class="txt-overlay">
            <div class=" justify adjust">
            <div class="txt-position">
                <h1>
Corporate entertainment transcend boundaries and  ignite events with experiences that captivate, engage, and inspire.</h1>
                <p>Immerse yourself in a world of captivating entertainment tailored for the corporate stage, where business objectives meet the art of engagement. Discover how our corporate entertainment services redefine the boundaries of professional events, offering experiences that seamlessly blend creativity, networking, and brand enhancement. Yet, delving into the realm of corporate entertainment independently can prove challenging, from managing technical intricacies to ensuring seamless coordination among various performers and elements.</p>
            </div>
            </div>
        </div>
    </div>
    <section class="justify adjust">
        <h2>That's where Warner Audio Visual comes in</h2>
    </section>
    <section class="grey justify adjust">
        <p>Through our expertise and commitment to creating unforgettable experiences, we transform ordinary corporate events into extraordinary spectacles that captivate, engage, and leave a lasting impression.</p>
        <ul>
            <li><strong>Engagement Amplification:</strong> Elevate engagement with interactive shows and performances that involve the audience, turning passive spectators into active participants and fostering meaningful connections.</li>
            <li><strong>Networking Catalyst:</strong> Break the ice and facilitate networking through entertainment that sparks conversations and connections, creating a relaxed atmosphere where business relationships can thrive.</li>
            <li><strong>Memorable Experiences:</strong> Leave a lasting impact on attendees with memorable entertainment moments that resonate long after the event, enhancing the overall impression of your company.</li>
            <li><strong>Stress-Free Execution:</strong> Rest assured as we handle all logistics and technical aspects, leaving you free to focus on the event itself while we bring your entertainment vision to life.</li>
        </ul>
        <p>With our dedication to delivering tailored, innovative, and seamless entertainment solutions, we guarantee that your event will not only meet but exceed your expectations. Contact us today to embark on a journey of corporate entertainment that leaves a lasting impact on both your brand and your audience.
        </p>
        <div class="button-position">
                    <a class="button" href="contact.php">Contact Us Today</a>
                </div>
    </section>
</main>

<?php include'includes/footer.php'?>