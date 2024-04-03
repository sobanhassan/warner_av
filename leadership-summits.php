<?php $title="Leadership Summits";
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
            <img src="images/leadership-summit.webp" alt="meeting and events">
        </div>
        <div class="txt-overlay">
            <div class=" justify adjust">
            <div class="txt-position">
                <h1>Bringing Leaders Together to Achieve Greatness</h1>
                <p>Leadership summits are a great way for leaders to come together and discuss the challenges and opportunities facing their organizations. They can also be a great way to learn from each other and share best practices. However, planning a successful leadership summit can be a daunting task. There are many things to consider, such as choosing the right speakers, managing the logistics of the event, and creating an engaging and productive environment.</p>
            </div>
            </div>
        </div>
    </div>
    <section class="justify adjust">
        <h2>That's where Warner Audio Visual comes in</h2>
    </section>
    <section class="grey justify adjust">
        <p>We can help you make your leadership summit a success by providing the latest audio-visual technology and support. We have a team of experienced professionals who can help you choose the right equipment, set it up, and troubleshoot any problems that may arise.</p>
        <p>Here are just a few of the ways we can help you make your leadership summit a success:</p>
        <ul>
            <li>Provide the latest audio-visual technology. We have a wide selection of audio-visual equipment to choose from, including projectors, screens, sound systems, and videoconferencing equipment. We can help you choose the right equipment for your needs and budget.</li>
            <li>Set up and troubleshoot equipment. We have a team of experienced professionals who can set up and troubleshoot audio-visual equipment. This will free up your time so you can focus on your summit.</li>
            <li>Provide technical support. We offer 24/7 technical support in case of any problems with your audio-visual equipment. This will ensure that your summit runs smoothly.</li>
            <li>Create an engaging and productive environment. We can help you create an environment that is conducive to learning and collaboration. We can do this by setting up the room in a way that promotes interaction, providing comfortable seating, and catering to the needs of your attendees.</li>
        </ul>
        <p>If you're looking for a way to make your leadership summit a success, contact Warner Audio Visual today. We can help you choose the right equipment, set it up, and troubleshoot any problems that may arise.
        </p>
    </section>
</main>

<?php include'includes/footer.php'?>