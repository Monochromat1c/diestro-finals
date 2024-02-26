<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
<title>Welcome!</title>

<div id="navPosition">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navigationBar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#welcomeMessage" id="navTitle">EntomoloGlee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText" id="navbarPosition">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="#aboutOurWebsite" id="navLink">Our Website</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#aboutUs" id="navLink">About us</a>
            </li>
        </ul>
        <div class="navbar-text">
            <a id="signUp" href="<?=base_url()?>signup">Sign Up</a>
            <a id="signIn" href="<?=base_url()?>signin">Sign In</a>
        </div>
        </div>
    </div>
    </nav>
    </div>
    <div id="welcomeMessage">
        <h2 id="title" class="welcomeTitle" >EntomoloGlee: Delighting in the Wonders of Entomology</h2>
        <p class="welcomeParagraph">Welcome to EntomoloGlee, where we take delight in exploring the fascinating world of entomology. Here, we meticulously document a diverse array of insect species, providing a comprehensive database dedicated to the captivating realm of insects.</p>
        <p class="welcomeParagraph2">Our website serves as a hub for enthusiasts, researchers, and curious minds, offering a rich and engaging collection of information about these remarkable creatures. Join us on this enthralling journey as we delve into the wonders of entomology, showcasing the beauty, diversity, and significance of the insect kingdom. </p>
    </div>
    <div id="aboutOurWebsite">
        <h2 class="ourWebsiteTitle" id="title">Our Website</h2>
        <p class="ourWebsiteParagraph" >As avid enthusiasts, we have curated a dynamic platform that serves as a valuable resource for insect aficionados, nature lovers, and curious minds alike.</p>
        <p class="ourWebsiteParagraph2" >Our mission is to share the captivating information of these remarkable creatures, showcasing their diverse species and natural habitat. Whether you're a budding entomologist or simply intrigued by the small wonders of the natural world, EntomoloGlee invites you to embark on a journey of discovery. Join us in celebrating the marvels of insects, as we delve into their fascinating world with a genuine love for the tiny creatures that play an essential role in our ecosystem.</p>
        <p class="ourWebsiteParagraph2" >At EntomoloGlee, we strive to foster a community that shares our fascination with the enchanting realm of entomology.</p>
    </div>
    <div id="aboutUs">
        <h2 id="About Us" class="aboutUsTitle" >About Us</h2>
        <p class="aboutUsParagraph">Meet the passionate team behind EntomoloGlee – a collective effort driven by our shared love for entomology. Comprising three dedicated individuals: Diestro, Charles Manuel; Manuel, Charles Diestro; and Charles, Manuel Diestro.What started as a project, born from our mutual fascination with insects, has evolved into a thriving platform dedicated to the exploration and celebration of the insect kingdom.  </p>
        <p class="aboutUsParagraph2">You can contact us at the following:<br> <strong>Facebook:</strong> TeamEntomoloGlee <br> <strong>Twitter:</strong> @EntomoloGleeHQ <br> <strong>Instagram:</strong> @EntomoloGleeHQ <br> <strong>WhatsApp:</strong> @EntomoloGleeHQ</p>
        <p class="aboutUsParagraph3">Copyright © 2024 Filamer Christian University, College of Computer Studies, BSIT 3B 2023-2024. <br> All Rights Reserved.</p>
    </div>

<?=$this->endSection('content')?>