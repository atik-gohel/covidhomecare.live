<!doctype html>
<html>

<head>
    <title>Covid-19 Home care Junagadh</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content="Home-care" />
    <meta name="keywords" content="Covi-home-care" />
    <meta name="keywords" content="home-service" />
    <meta name="developer" content="Atik Gohel">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon-->
    <link rel="icon" href="assets/images/covid home care logo1.png" sizes="16x16">
    <!-- bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/whatsapp.css">

</head>

<body>


    <div class="navigation-wrap    py-lg-4 pt-md-4 py-sm-4 py-3 " id="home">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 ">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <a href="index.html" class="logo_site"><img src="assets/images/logo1.svg" class="img-fluid logo"></a>
                        <!-- <a href="index.php" class="logo_site">Covid-19</a> -->

                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">


                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>


                                </li>
                                <li class="nav-item  pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link " href="#What-we-do">What we do?</a>

                                </li>
                                <li class="nav-item  pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link " href="#Prevention">Prevention</a>
                                </li>


                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#Symptoms">Symptoms</a>
                                </li>


                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#Contact-us">Contact Us</a>
                                </li>

                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section id="hero" class="clearfix  py-lg-4  py-md-1 py-sm-4 py-4">
        <div class="container ">
            <img src="assets/images/header virus.svg" class="header-virus" alt="">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 intro-info order-md-first order-last justify-content-center align-self-center">
                    <p class="alert-header"><img src="assets/images/header alert icon.svg" alt=""> COVID-19 ALERT</p>
                    <h2>Together we fight <br> COVID-19
                    </h2>
                    <div class="header-tag-line">
                        According to the World Health Organisation [WHO] this pandemic coronavirus can be defined as ???The COVID-19 is an infectious disease caused by a newly discovered coronavirus???. The Best-experienced professionals are ready to help you for coming out from
                        the covid situation. Get perfect home treatment for corona patients by skilled staff.

                    </div>
                    <a href="#What-we-do" class="btn-get-started mt-4">Let us help</a>
                </div>

                <div class="col-md-6  order-md-last order-first ">
                    <img src="assets/images/header.svg" alt="" class="img-fluid px-lg-1 px-md-0 px-sm-4 px-5">
                </div>
            </div>

        </div>
    </section>


    <section id="" class="py-5 my-4">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="cardss">
                        <?php 

                        $data = file_get_contents('https://api.covid19india.org/data.json');
                        $coronalive = json_decode($data, true);
                        ?>

                        <div class="cards">
                            <div class="card-body pt-xl-4 pb-xl-4 py-lg-4 py-md-4 py-sm-4 pb-0">
                                <h5 class="card-title title">Total Cases</h5>
                                <p class="card-text number">
                                    <?php echo $coronalive['statewise'][14]['confirmed']; ?>
                                </p>
                                <p class="card-text percentage">
                                    <?php echo $coronalive['statewise'][14]['deltaconfirmed']; ?> New Cases (Today)</p>
                            </div>


                            <div class="card-body pt-xl-4 pb-xl-4 py-lg-4 py-md-4 py-sm-4 pb-0 ">
                                <h5 class="card-title title">Active Cases</h5>
                                <p class="card-text number">
                                    <?php echo $coronalive['statewise'][14]['active']; ?>
                                </p>
                                <p class="card-text percentage">Total Active cases</p>
                            </div>


                            <div class="card-body pt-xl-4 pb-xl-4 py-lg-4 py-md-4 py-sm-4 pt-4 pb-0">
                                <h5 class="card-title title">Recovered</h5>
                                <p class="card-text number" style="color:#64CF82">
                                    <?php echo $coronalive['statewise'][14]['recovered']; ?>
                                </p>
                                <p class="card-text percentage">
                                    <?php echo $coronalive['statewise'][14]['deltarecovered']; ?> New Recovered (Today)</p>
                            </div>


                            <div class="card-body pt-xl-4 pb-xl-4 py-lg-4 py-md-4 pb-sm-4 pt-sm-0  pt-4">
                                <h5 class="card-title title">Deaths</h5>
                                <p class="card-text number" style="color: #FF0000;">
                                    <?php echo $coronalive['statewise'][14]['deaths']; ?>
                                </p>
                                <p class="card-text percentage">
                                    <?php echo $coronalive['statewise'][14]['deltadeaths']; ?> New Death (Today)</p>
                            </div>
                        </div>
                        <div class="card-tag-line pb-3 ">
                            <img src="assets/images/flag.svg" alt="india flag | atik gohel">
                            <span class="country img-fluid"><?php echo $coronalive['statewise'][14]['state']; ?></span>
                            <span class="separator"> | </span>
                            <span class="title">Last update: </span>
                            <span class="date"><?php echo $coronalive['statewise'][14]['lastupdatedtime']; ?></span>
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </section>


    <section id="What-we-do" class="what-we-do mt-5 pt-5 pb-5 mb-5 ">

        <div class="container">

            <img src="assets/images/what we do virus.svg" class="what-we-do-virus img-fluid" alt="">
            <div class="row  ">
                <div class="col-md-6 what-we-do-left  align-self-center ">
                    <img src="assets/images/what we do.svg" alt="" class="img-fluid px-4">
                </div>

                <div class="col-md-6 what-we-do-right pl-4 pr-0 align-self-center mt-md-0 mt-5">
                    <h2 class="heading">What we do?</h2>
                    <hr class="what-we-do-hr">
                    <p>
                        Covid 19 positive or Pneumonitis patient will be treated at home as per doctor order by GNC certified nursing staff.
                    </p>
                    <ul>
                        <li>
                            <img src="assets/images/bullet.png" alt="bullet" class="img-fluid mr-1"> <span class="line"> Facilities of blood sugar </span>
                        </li>
                        <li>
                            <img src="assets/images/bullet.png" alt="bullet" class="img-fluid mr-1"> <span class="line"> B.P. Measurement </span>
                        </li>
                        <li>
                            <img src="assets/images/bullet.png" alt="bullet" class="img-fluid mr-1"> <span class="line"> Spo2 Measurement </span>
                        </li>
                        <li>
                            <img src="assets/images/bullet.png" alt="bullet" class="img-fluid mr-1"> <span class="line"> Ryle's tube insertion </span>
                        </li>
                        <li>
                            <img src="assets/images/bullet.png" alt="bullet" class="img-fluid mr-1"> <span class="line"> Catheterisation </span>
                        </li>
                        <li>
                            <img src="assets/images/bullet.png" alt="bullet" class="img-fluid mr-1"> <span class="line"> Dressing facilities are available 24*7 </span>
                        </li>
                    </ul>

                    <div class="btn-default  ml-3">
                        <a href="#Contact-us" class="cta">
                            <span>Contact Us</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                        </a>
                    </div>


                </div>
            </div>
        </div>

    </section>


    <section id="Prevention" class="prevention mt-5 pt-5 pb-5 mb-5 text-center">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Prevention</h2>
                    <hr class="preventionhr ml-auto mr-auto">
                </div>
                <div class="col-12">
                    <p class="tagline px-lg-5 px-md-4">Protect yourself and others around you by knowing the facts and taking appropriate precautions. Floow advice provided by your local health authority.</p>
                </div>
                <div class="col-12">
                    <div class="row">

                        <div class="col-md-4 px-22">
                            <div class="prevention-card ">
                                <img src="assets/images/Wear a mask.png" class="img-fluid" alt="">
                                <div class="card-detail">
                                    <h3 class="card-title">Wear a mask</h3>
                                    <p class="card-line">Masks can help prevent spread of the virus from the person wearing the mask to others.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 px-22">
                            <div class="prevention-card ">
                                <img src="assets/images/Wash your hands often.png" class="img-fluid" alt="">
                                <div class="card-detail">
                                    <h3 class="card-title">Wash your hands often</h3>
                                    <p class="card-line">Clean your hands with soop and water, or alcohol-based hand sanitizer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 px-22">
                            <div class="prevention-card ">
                                <img src="assets/images/Physical distancing.png" class="img-fluid" alt="">
                                <div class="card-detail">
                                    <h3 class="card-title">Physical distancing</h3>
                                    <p class="card-line">Maintain a safe distance especially from anyone who is coughinf or sneezing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Symptoms" class="symptoms mt-5 pt-5 pb-5 mb-5 text-center">
        <div class="container">
            <img src="assets/images/left side symptoms virus.svg" class="symptoms-virus-left img-fluid" alt="">
            <img src="assets/images/right side symptoms virus.svg" class="symptoms-virus-right img-fluid" alt="">

            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Symptoms</h2>
                    <hr class="symptomshr ml-auto mr-auto">
                </div>
                <div class="col-12">
                    <p class="tagline px-lg-5 px-md-4">COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
                </div>
                <div class="col-12 mt-5">
                    <img src="assets/images/symptoms.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="" class="need-help mt-5 pt-5 pb-5  text-center ">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cards-need-help">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="heading mt-xl-4 mt-md-3 mt-sm-3 mt-3">Need Help!</h2>
                                <hr class="need-help-hr ml-auto mr-auto">
                            </div>
                            <div class="col-12 px-0">
                                <p class="tagline ">helping hands will always remember while we have a look at the past. We are ready to help you to fight against this critical situation. </p>
                            </div>
                            <div class="col-12 mt-4">
                                <img src="assets/images/need help.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row pt mb-2">
                            <div class="col-md-6 text-left pl-lg-5">
                                <div class="emp ">
                                    <img src="assets/images/number.png" class="img-fluid" alt="">
                                    <div class="ditail ">
                                        <div class="name">Danish</div>
                                        <div class="number">(+91) 9157999875</div>
                                    </div>
                                </div>
                                <div class="emp mt-4">
                                    <img src="assets/images/number.png" alt="">
                                    <div class="ditail">
                                        <div class="name">Nilesh</div>
                                        <div class="number">(+91) 8980530888</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pr-lg-5 mt-md-0 mt-5">
                                <div class="">
                                    <form class="row g-3" method="POST" action="form.php" name="myForm" id="contact-form">

                                        <div class="form-group col-md-12 filds">
                                            <span class="form-control-feedback"> <img src="assets/images/name 1.png" alt=""> </span>
                                            <input type="text" class="form-control" name="username" placeholder="Name*" required>
                                        </div>


                                        <div class="form-group col-md-12 filds number">
                                            <span class="form-control-feedback"> <img src="assets/images/number-1.png" alt=""> </span>
                                            <input type="text" class="form-control" pattern="^[6789]\d{9,9}$" title="Phone number with 6-9 and remaing 10 digit with 0-9" name="number" placeholder="Number*" required>
                                        </div>


                                        <div class="form-group col-md-12 filds">
                                            <span class="form-control-feedback"> <img src="assets/images/number-1.png" alt=""> </span>
                                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="email" placeholder="Email Address*" required>
                                        </div>

                                        <div class="form-group col-md-12 filds ">
                                            <span class="form-control-feedback "> <img src="assets/images/text 1.png" class="comment" alt=""> </span>

                                            <textarea class="form-control" name="message" placeholder="Leave a comment here*" style="height: 90px" required></textarea>

                                        </div>

                                        <div class="col-12">
                                            <div class="btn-default2  ">
                                                <button>
                                                    <p href="#!" name="submit" class="cta">      
                                                        <span>I need help</span>
                                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                                            <path d="M1,5 L11,5"></path>
                                                            <polyline points="8 1 12 5 8 9"></polyline>
                                                        </svg>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>

                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Contact-us" class="footer py-2">

        <div class="container ">
            <div class="row ">
                <div class="col-md-6 left">
                    <p>?? 2021, Design & Developed by <a href="https://www.instagram.com/atik_gohel/">Atik Gohel</a> </p>
                </div>
                <div class="col-md-6 right d-flex justify-content-end">
                    <a href="#home"> <img src="assets/images/top.png" class="mr-1 img-fluid" alt="">Back to top</a>
                </div>
            </div>
        </div>
    </section>






    <div id="myButton"></div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>


    <!-- Custom Scripts-->
    <script src="assets/js/whatsapp.js"></script>

    <script>
        $('img').on('dragstart', function(event) {
            event.preventDefault();
        });
        $("body").on("contextmenu", "img", function(e) {
            return false;
        });
    </script>


    <script type="text/javascript">
        $(function() {
            $('#myButton').floatingWhatsApp({
                phone: '919157999875',
                popupMessage: 'Hello, how can we help you?',
                message: "Hi Danish, ...",
                showPopup: true,
                showOnIE: true,
                headerTitle: "<img src='assets/images/danish gohel.png' style= ' width: 40px; margin-right: 11px;   margin-bottom: 0px; border-radius: 8px;'>Whatsapp Chat! ????",
                // headerColor: 'crimson',
                // backgroundColor: 'crimson',
                // buttonImage: '<img src="whatsapp.svg" />'
            });
        });
    </script>
</body>

</html>