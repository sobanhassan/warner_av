<?php $title="Company Events";
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
            <img src="images/company-event.webp" alt="meeting and events">
        </div>
        <div class="txt-overlay">
            <div class=" justify adjust">
            <div class="txt-position">
                <h1>Celebrating Your Company Culture</h1>
                <p>Company events are a great way to celebrate your company culture, build morale, and create a sense of community. They can also be a great way to attract and retain top talent. However, planning a successful company event can be a daunting task. There are many things to consider, such as choosing the right venue, selecting the right activities, and managing the logistics of the event.</p>
            </div>
            </div>
        </div>
    </div>
    <section class="justify adjust">
        <h2>That's where Warner Audio Visual comes in</h2>
    </section>
    <section class="grey justify adjust">
        <p> We can help you make your product launch a success by providing the latest audio-visual technology and support. We have a team of experienced professionals who can help you choose the right equipment, set it up, and troubleshoot any problems that may arise.</p>
        <p>Here are just a few of the ways we can help you make your product launch a success:</p>
        <ul>
            <li>Provide the latest audio-visual technology. We have a wide selection of audio-visual equipment to choose from, including projectors, screens, sound systems, and videoconferencing equipment. We can help you choose the right equipment for your needs and budget.</li>
            <li>
                Set up and troubleshoot equipment. We have a team of experienced professionals who can set up and troubleshoot audio-visual equipment. This will free up your time so you can focus on your event.</li>
            <li>Provide technical support. We offer 24/7 technical support in case of any problems with your audio-visual equipment. This will ensure that your event runs smoothly.</li>
            <li>Create a memorable experience for your guests. We can help you create an environment that is conducive to fun and excitement. We can do this by setting up the room in a way that promotes interaction, providing comfortable seating, and catering to the needs of your guests.</li>
        </ul>
        <p>If you're looking for a way to make your company event a success, contact Warner Audio Visual today. We can help you choose the right equipment, set it up, and troubleshoot any problems that may arise.
        </p>
    </section>
    <section class="justify adjust">
        <h2>Here are some additional tips for planning a successful company event</h2>
        <ul>
            <li>Choose the right venue. The venue you choose will set the tone for your event. Consider the size of your audience, the type of event you are hosting, and the budget.</li>
            <li>Plan ahead. Start planning your event well in advance. This will give you enough time to choose the right venue, select the right activities, and promote your event.</li>
            <li>Get creative. There are endless possibilities when it comes to company events. Get creative and think outside the box. You want your event to be something that your employees will remember for years to come.</li>
            <li>Budget wisely. Company events can be expensive. It's important to budget wisely and make sure that you're not overspending.</li>
            <li>Follow up with your guests. After your event, be sure to follow up with your guests. Send them a thank-you note and ask for feedback. This will help you improve your event for next time.</li>
        </ul>
        <p>By following these tips, you can plan a successful company event that will celebrate your company culture, build morale, and create a sense of community.</p>
        <div class="button-position">
                    <a class="button" href="contact.php">Contact Us Today</a>
                </div>
    </section>
</main>

<?php include'includes/footer.php'?>