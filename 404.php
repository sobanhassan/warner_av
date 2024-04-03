<?php $title="Page Not Found";
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
            <img src="images/business-conf.webp" alt="meeting and events">
        </div>
        <div class="txt-overlay">
            <div class=" justify adjust">
            <div class="txt-position">
                <h1>404 Error</h1>
                <h2>Whoops, something is wrong.</h2>
                <p>We couldn't find that page. Try using the navigation links above, or <a href="index.php">visit our home page.</a></p>
            </div>
            </div>
        </div>
    </div>
</main>

<?php include'includes/footer.php'?>