<?php $title="Breakout Rooms";
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
            <img src="images/breakout-rooms.webp" alt="meeting and events">
        </div>
        <div class="txt-overlay">
            <div class=" justify adjust">
            <div class="txt-position">
                <h1>
Explore the power of collaboration and engagement with our breakout rooms</h1>
                <p>Welcome to our innovative breakout rooms experience, where the boundaries of virtual collaboration are redefined. Step into an environment designed to enhance engagement and productivity, as participants converge in focused discussions and interactive sessions that harness the true potential of teamwork. Whether you're an educator aiming to create dynamic virtual classrooms or a business professional seeking seamless remote meetings, our breakout rooms offer the ideal platform for meaningful interactions and shared exploration. Join us in unlocking new levels of collaboration within customizable virtual spaces, where ideas flow and connections flourish. However, we understand that setting up and managing breakout rooms on your own can be a daunting challenge, often requiring technical expertise and valuable time.!</p>
            </div>
            </div>
        </div>
    </div>
    <section class="justify adjust">
        <h2>That's where Warner Audio Visual comes in</h2>
    </section>
    <section class="grey justify adjust">
        <p>With our comprehensive range of services, we take the complexity out of setting up and managing breakout rooms, allowing you to focus on the content and interactions that matter most. Here's how we can enhance your breakout room experience:</p>
        <ul>
            <li><strong>Expert Setup:</strong> Our audiovisual experts will seamlessly configure and deploy breakout rooms, ensuring all technical aspects are taken care of, from audio clarity to video quality.</li>
            <li><strong>Smooth Transitions:</strong> Our team ensures smooth transitions between main sessions and breakout rooms, managing the switch seamlessly so participants can focus on content rather than technical hiccups.</li>
            <li><strong>Technical Support:</strong> Throughout your event, our dedicated support team is on standby to troubleshoot any audiovisual issues that may arise, minimizing disruptions and maximizing engagement.</li>
            <li><strong>Flexible Scalability:</strong> Whether you have a small group or a large conference, our solutions are scalable to accommodate any number of participants and breakout rooms, ensuring a consistent experience.</li>
        </ul>
        <p>Elevate your events to new heights with Warner Audio Visual's expertise and solutions. Our commitment to seamless setup, technical support, and engagement enhancement ensures that your breakout room experience is not only hassle-free but also leaves a lasting impact on participants. Let us transform your virtual collaborations into dynamic, interactive, and productive sessions. Contact us today to embark on a journey of elevated virtual engagement and unmatched audiovisual excellence.
        </p>
        <div class="button-position">
                    <a class="button" href="contact.php">Contact Us Today</a>
                </div>
    </section>
</main>

<?php include'includes/footer.php'?>