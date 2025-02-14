<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" href="/assets/images/site/favicon.png" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/slick.min.css" />
    <link rel="stylesheet" href="/assets/css/slick-theme.min.css" />
    <link rel="stylesheet" href="/assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <div class="top-strip bg-primary py-1">
        <div class="container-xxl ">
            <div class="d-flex justify-content-between xtest">
                <div>
                    <span class="text-dark">Contact Us - </span>
                    <span><a href="tel:095990 21336" class="text-white text-decoration-none">095990 21336</a></span>
                    |
                    <span><a href="mailto:dr.mansisurgeon@gmail.com"
                            class="text-white text-decoration-none">dr.mansisurgeon@gmail.com</a></span>

                </div>
                <div>
                    <a href="" class="text-white"><i class="fa fa-facebook-square"></i></a>
                    <a href="" class="text-white"><i class="fa fa-youtube"></i></a>
                    <a href="" class="text-white"><i class="fa fa-linkedin-square"></i></a>
                    <a href="" class="text-white"><i class="fa fa-instagram"></i></a>
                    <a href="" class="text-white"><i class="fa fa-map"></i></a>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container-xxl">
            <nav>
                <a href="/" class="logo">
                    <img src="/assets/images/logo.png" alt="logo" />
                </a>
                <button class='menu-toggle'>
                    <i class='fa fa-bars'></i>
                </button>
                <div class="menu">
                    <button class='cross'><i class='fa fa-times'></i></button>
                    <div class="menu-item">
                        <a href="/" class="nav-link <?php echo (isset($pageActive) && $pageActive=="/")?"active":""; ?>">Home</a>
                    </div>
                    <div class="menu-item">
                        <a href="drmansi" class="nav-link <?php echo (isset($pageActive) && $pageActive=="drmansi")?"active":""; ?>">Dr. Mansi</a>
                    </div>
                    
                    <div class="menu-item dropdown">
                        <a href="" class="nav-link">Experties <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <div><a href="/breast-conservation-surgery/" class="<?php echo (isset($pageActive) && $pageActive=="breast-conservation-surgery")?"active":""; ?>">Breast Conservation Surgery</a></div>

                            <div><a href="/breast-oncoplasty-level-1/" class="<?php echo (isset($pageActive) && $pageActive=="breast-oncoplasty-level-1")?"active":""; ?>">Breast Oncoplasty Level 1</a></div>

                            <div><a href="/breast-oncoplasty-level-2/" class="<?php echo (isset($pageActive) && $pageActive=="breast-oncoplasty-level-2")?"active":""; ?>">Breast Oncoplasty Level 2</a></div>

                            <div><a href="/modified-radical-mastectomy/" class="<?php echo (isset($pageActive) && $pageActive=="modified-radical-mastectomy")?"active":""; ?>">Modified Radical Mastectomy</a></div>

                            <div><a href="/therapeutic-mammoplasty/" class="<?php echo (isset($pageActive) && $pageActive=="therapeutic-mammoplasty")?"active":""; ?>">Therapeutic Mammoplasty</a></div>

                            <div><a href="/sentinel-lymph-node-biopsy/" class="<?php echo (isset($pageActive) && $pageActive=="sentinel-lymph-node-biopsy")?"active":""; ?>">Sentinel Lymph Node Biopsy</a></div>

                            <div><a href="/icg-dye-sentinel-ln-biopsy/" class="<?php echo (isset($pageActive) && $pageActive=="icg-dye-sentinel-ln-biopsy")?"active":""; ?>">ICG dye Sentinel LN Biopsy</a></div>

                            <div><a href="/axillary-dissection/" class="<?php echo (isset($pageActive) && $pageActive=="axillary-dissection")?"active":""; ?>">Axillary Dissection</a></div>

                            <div><a href="/breast-lump-excision/" class="<?php echo (isset($pageActive) && $pageActive=="breast-lump-excision")?"active":""; ?>">Breast Lump Excision</a></div>

                            <div><a href="/radio-guided-breast-surgery/" class="<?php echo (isset($pageActive) && $pageActive=="radio-guided-breast-surgery")?"active":""; ?>">Radio-Guided Breast Surgery</a></div>

                            <div><a href="/palliative-mastectomy/" class="<?php echo (isset($pageActive) && $pageActive=="palliative-mastectomy")?"active":""; ?>">Palliative Mastectomy</a></div>

                            <div><a href="/breast-reconstruction/" class="<?php echo (isset($pageActive) && $pageActive=="breast-reconstruction")?"active":""; ?>">Breast Reconstruction</a></div>
                            
                            <div><a href="/bilateral-prophylactic-mastectomy-reconstruction/" class="<?php echo (isset($pageActive) && $pageActive=="bilateral-prophylactic-mastectomy-reconstruction")?"active":""; ?>">Bilateral Prophylactic
                                    Mastectomy Reconstruction</a></div>

                            <div><a href="/surgery-for-nipple-discharge/" class="<?php echo (isset($pageActive) && $pageActive=="surgery-for-nipple-discharge")?"active":""; ?>">Surgery For Nipple Discharge</a></div>

                            <div><a href="/nipple-sparing-mastectomy/" class="<?php echo (isset($pageActive) && $pageActive=="nipple-sparing-mastectomy")?"active":""; ?>">Nipple-Sparing Mastectomy</a></div>

                            <div><a href="/implant-based-breast-reconstruction/" class="<?php echo (isset($pageActive) && $pageActive=="implant-based-breast-reconstruction")?"active":""; ?>">Implant-Based Breast Reconstruction</a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a href="news/" class="nav-link <?php echo (isset($pageActive) && $pageActive=="news")?"active":""; ?>">News</a>
                    </div>
                    <div class="menu-item">
                        <a href="/informative/" class="nav-link <?php echo (isset($pageActive) && $pageActive=="informative")?"active":""; ?>">Informative</a>
                    </div>
                    <div class="menu-item">
                        <a href="/testimonials/" class="nav-link <?php echo (isset($pageActive) && $pageActive=="testimonials")?"active":""; ?>">Testimonials</a>
                    </div>
                    <div class="menu-item">
                        <a href="/faqs/" class="nav-link <?php echo (isset($pageActive) && $pageActive=="faqs")?"active":""; ?>">faqs</a>
                    </div>
                    <div class="menu-item">
                        <a href="blog/" class="nav-link <?php echo (isset($pageActive) && $pageActive=="blog")?"active":""; ?>">Blog</a>
                    </div>
                    <div class="menu-item">
                        <a href="/contact-us/" class="nav-link <?php echo (isset($pageActive) && $pageActive=="contact-us")?"active":""; ?>">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>