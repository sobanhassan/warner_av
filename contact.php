<?php $title="Contact Us";
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
<main>
    <h1 align="center"><?php echo $title ?></h1>
    <div class="black-bg">
        <div class="justify adjust" style="position: relative; display: grid;">
                <div align="center">
                    <img src="images/about.webp" alt="trade 1">
                </div>
                <div class="grid-two-columns contact-grid">
                <div align="center">
                    <h2>Chicago</h2>
                    <p>9510 Corsair Rd<br />
                    Frankfort, Il 60423</p>
                    <p>Phone: <a href="tel:815-469-1422">815-469-1422<br />
                    </a>Email: <a href="mailto:info@warnerav.com" target="_self">info@warnerav.com</a></p>
                    <p>Monday - Friday<br />
                      9:00 AM - 5:00 PM</p>
                    <h2>Phoenix</h2>
                    <p>1660 N Rosemont<br />
                      Mesa, AZ 85205</p>
                    <p>Phone : <a href="tel:815-469-1422">815-469-1422<br />
                    </a>Email : <a data-auto-recognition="true" href="mailto:Kpeterson@warnerav.com">Kpeterson@warnerav.com</a></p>
                    <p>​Monday - Friday <br />
                      9:00 AM - 5:00 PM</p>
                    <h2>Orlando</h2>
                    <p>Phone : <a href="tel:815-469-1422">815-469-1422<br />
                    </a>Email : <a href="mailto:info@warnerav.com" target="_self">info@warnerav.com</a></p>
                </div>
                <div align="center">
                    <script type="text/javascript" src="https://form.jotform.com/jsform/232184828799171"></script>
                </div>
</div>
</div>
        </div>
    </div>
</main>

<?php include'includes/footer.php'?>