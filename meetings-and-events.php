<?php $title="Meetings and Events";
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
        margin-left: auto;
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
    }
    .txt-position h1 {
        font-size: 60px;
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
            <img src="images/meeting-event.webp" alt="meeting and events">
        </div>
        <div class="txt-overlay">
            <div class="justify adjust">
            <div class="txt-position">
                <h1>Meetings & Events</h1>
                <p>Warner AV is a leading provider of audio visual services for corporate events. We have been providing the technology, experience, and know-how to execute corporate meetings and events for over 50 years.</p>
                <p>Our talented team will ensure that your event is executed with precision and perfection. Our knowledgeable technicians, expert project managers, and efficient operations staff will take care of the details, so you can focus on other components of the event.</p>
            </div>
            </div>
        </div>
    </div>
    <section class="justify adjust">
        <h2>We can handle any event, big or small</h2>
    </section>
    <section class="justify adjust">
        <div class="events-grid">
            <div class="event-card">
                <h3>Corporate Meeting</h3>
                <p>Corporate meetings are gatherings of company stakeholders to discuss and make decisions about the company's business.</p>
                <a href="corporate-meetings.php" class="button">Learn More</a>
            </div>
            <div class="event-card">
                <h3>Business Conferences</h3>
                <p>Business conferences are gatherings of professionals from a particular industry or field to share knowledge, learn about new trends, and network.</p>
                <a href="business-conferences.php" class="button">Learn More</a>
            </div>
            <div class="event-card">
                <h3>Breakout Rooms</h3>
                <p>A breakout room is a virtual space that enables focused discussions and interactive sessions within a larger online meeting or event</p>
                <a href="breakout-rooms.php" class="button">Learn More</a>
            </div>
            <div class="event-card">
                <h3>Product Launches</h3>
                <p>A successful product launch can generate excitement and buzz around a product, drive sales, and help a company achieve its business goals.</p>
                <a href="product-launches.php" class="button">Learn More</a>
            </div>
            <div class="event-card">
                <h3>Company Events</h3>
                <p>Company events are gatherings of employees, or other stakeholders organized by a company for a variety of purposes, such as team building, marketing, or education.</p>
                <a href="company-events.php" class="button">Learn More</a>
            </div>
            <div class="event-card">
                <h3>Corporate Entertainment</h3>
                <p>Corporate entertainment offers engaging performances to elevate events and enhance brand experiences.</p>
                <a href="corporate-entertainment.php" class="button">Learn More</a>
            </div>
        </div>
    </section>
    <section class="grey">
        <div class="justify adjust">
            <h2>Here are just a few of the ways we can help you make your corporate meetings more productive and engaging</h2>
            <ul>
                <li>
                    Provide the latest audio-visual technology. We have a wide selection of audio-visual equipment to choose from, including projectors, screens, sound systems, and videoconferencing equipment. We can help you choose the right equipment for your needs and budget.
                </li>
                <li>
                    Set up and troubleshoot equipment. We have a team of experienced professionals who can set up and troubleshoot audio-visual equipment. This will free up your time so you can focus on your meeting.
                </li>
                <li>
                    Provide technical support. We offer 24/7 technical support in case of any problems with your audio-visual equipment. This will ensure that your meeting runs smoothly.
                </li>
            </ul>
        </div>
        <div class="button-position">
                    <a class="button" href="contact.php">Contact Us Today</a>
                </div>
    </section>
</main>

<?php include'includes/footer.php'?>