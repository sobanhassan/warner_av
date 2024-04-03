<?php $title="Corporate Meeting";
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
            <img src="images/corporate-meeting.webp" alt="meeting and events">
        </div>
        <div class="txt-overlay">
            <div class=" justify adjust">
            <div class="txt-position">
                <h1>Elevating Your Meetings to Inspire Collaboration</h1>
                <p>Corporate meetings are essential touchpoints for businesses, fostering idea sharing and teamwork. Yet, without the right approach, they can lose their spark. With Warner Audio Visual, ensure every meeting is engaging, productive, and far from mundane. Let&#39;s reinvigorate your team sessions!</p>
            </div>
            </div>
        </div>
    </div>
    <section class="justify adjust">
        <h2>That's where Warner Audio Visual comes in</h2>
    </section>
    <section class="grey justify adjust">
        <p>Elevate Your Corporate Meetings with Warner Audio Visual</p>
        <p>Transforming ordinary meetings into extraordinary events requires a touch of expertise – something we&#39;ve perfected over 50 years at Warner Audio Visual. Here&#39;s how we can magnify the impact of your gatherings:</p>
        <ul>
            <li><strong>Decades of Experience:</strong> With over half a century under our belt, we understand the unique nuances of audio-visual intricacies like few can. We bring a legacy of knowledge to every setup, ensuring quality and reliability.</li>
            <li><strong>Tailored Room Ambiance:</strong> Dive into immersive experiences with our state-of-the-art audio-visual solutions. Whether it&#39;s powerful presentations or engaging team dialogues, we set the mood right.</li>
            <li><strong>Hassle-Free Equipment Setup:</strong>Our dedicated team meticulously plans optimal room designs, always staying in sync with your vision. And rest easy – our techs are with you onsite throughout the full show, ensuring everything runs perfectly.</li>
        </ul>
        <p>Looking to craft meetings that leave a mark? Reach out to Warner Audio Visual, where experience meets innovation for sessions that truly resonate.
        </p>
        <div class="button-position">
                    <a class="button" href="contact.php">Contact Us Today</a>
                </div>
    </section>
</main>

<?php include'includes/footer.php'?>