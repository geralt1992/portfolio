@extends('master.master')

@section('content')


 <!-- NAV BAR -->

<header>

    <div class="menu-toggler">
        <div class="bar-half-start"></div>
        <div class="bar"></div>
        <div class="bar-half-end"></div>
    </div>
    <nav class="top-nav">
        <ul class="nav-list">
            <li>
            <a href="#" class="nav-link">Home</a>
            </li>
            <li>
                <a href="#about" class="nav-link">About</a>
            </li>
            <li>
                <a href="#services" class="nav-link">Services</a>
            </li>
            <li>
                <a href="#portfolio" class="nav-link">Portfolio</a>
            </li>
            <li>
                <a href="#expirience" class="nav-link">Skills</a>
            </li>
            <li>
                <a href="#contact" class="nav-link">Contact</a>
            </li>
        </ul>
    </nav>

    <div class="landing-text">
        <h1>Marin Sabljo #dev</h1>
        <h6>FR0NT END | LARAVEL Web developer!</h6>
    </div>
</header>



 <!-- ABOUT -->

<section class="about" id="about">

    <div class="container">
        <div class="profile-img"  data-aos="fade-right" data-aos-delay="300"   data-aos-once="true"  data-aos-duration="2000" >
            <img src="{{'pictures/profile_picture_2.jpg'}}" alt="profile-picture">
        </div>
    <div class="about-details" data-aos="fade-left" data-aos-delay="600"  data-aos-once="true" data-aos-duration="2000">
        <div class="about-heading" >
            <h1>About</h1>
            <h6>Myself</h6>
        </div>
        <p>Moje ime je Marin, imam 27 godina te dolazim iz Hrvatske i samoouki sam web developer.
            Po zvanju sam završio studiji povijesti i pedagogije u Osijeku, ali oduvijek su me zanimale
            informatika i informacijske znanosti. Web developmentom sam se počeo baviti početkom 2018.
            godine te sam sredinom iste (u sveučilištu Algebra) završio osposobljavanje za PHP.
            Vladam znanjima iz područja: HTML-a, CSS-a, PHP-a (Laravel) te nešto slabije JS-om. Također,
            upoznat sam i s: git hubom, web apiima te integracijom aplikacije s payment gatewayovima. Trenutno
            se bavim freelancingom,stoga ako imate projekt i trebate usluge web developmenta popunite formular na kraju stranice ;)
        </p>

        <div class="social-media">
            <ul class="nav-list">
                <li>
                    <a href="https://www.facebook.com/marin.sabljo" target="_blank" class="icon-link">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/MarinSabljo" target="_blank" class="icon-link">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://dribbble.com/Sabljo" target="_blank" class="icon-link">
                        <i class="fab fa-dribbble-square"></i>
                    </a>
                </li>
            </ul>

        </div>

        <div class="cv">
        <a href="{{route('cv')}}"><input type="submit" value="Download CV"  class="d-flex justify-content-center"></a>
        </div>

    </div>

    </div>
</section>


 <!-- SERVICES -->

<section class="services" id="services">
    <div class="container">
        <div class="section-heading">
            <h1>Services</h1>
            <h6>What I can do for you</h6>
        </div>
        <div class="my-skills">
            <div class="skill" data-aos="fade-in" data-aos-delay="300"  data-aos-once="true">
                <div class="icon-container">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h1>Web Design | UI Front End Dev</h1>
                <p>Upoznat sam s najnovima tehnologijama web dizajna te vam mogu ponuditi
                privlačna UI i UX rješenja kroz HTML (Bootstrap), CSS i JS (njega još učim),
                a sve to prilagođeno za mobilne uređaje.
                </p>
            </div>

            <div class="skill" data-aos="fade-in" data-aos-delay="600"  data-aos-once="true">
                <div class="icon-container">
                    <i class="fas fa-code"></i>
                </div>
                <h1>Back-End Web Development</h1>
                <p>Mogu Vam pomoći s uslugom back-end developmenta (web shopovi! / Stripe) jer
                    poznajem tehnologije kao što su PHP (Laravel framework).
                </p>
            </div>

            <div class="skill" data-aos="fade-in" data-aos-delay="900"  data-aos-once="true">
                <div class="icon-container">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h1>Web Strategy</h1>
                <p>Pomoći ću vam s SEO rješenjima te boljim pozicioniranjem
                    vašeg sadržaja na internetu.
                </p>
            </div>


        </div>
    </div>
</section>


 <!-- PORTFOLIO -->


<section class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-heading">
            <h1>Portfolio</h1>
            <h6>View some of my recent work</h6>
        </div>



    <div class="portfolio-item">
        <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="300"  data-aos-once="true">
            <img src="{{'pictures/web3.jpg'}}" alt="picture of portfolio item">
        </div>
        <div class="portfolio-description" data-aos="fade-left" data-aos-delay="600"  data-aos-once="true">
            <h6>Back-End Web Development</h6>
            <h1>Jednostavni web shop</h1>
            <p>Projekt jednostavnog web shopa s registracijom korisnika, povezan s SQL DB,
                payment gateway je povezan kroz Stripe, admin panel riješen putem Voyagera.
                Uključeni i automatski pozdravni mail (prilikom registracije), cart za kupce
                te automatski task sceduler (tjedni newsletter).
            </p>

            <a href="#" class="cta">Git Hub (source code)</a>
        </div>
    </div>


    <div class="portfolio-item">

        <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="600"  data-aos-once="true">
            <h6>Web Design</h6>
            <h1>Stranica za apartmane - AOS</h1>
            <p>Projekt koji uključuje veliki landing video, newsletter (povezan s SQL DB) te galeriju slika (JS).
            </p>
            <a href="" class="cta">Git Hub (source code)</a>
        </div>
        <div class="portfolio-img  has-margin-right" data-aos="fade-left" data-aos-delay="700"  data-aos-once="true">
            <img src="{{'pictures/web2.jpg'}}" alt="picture of portfolio item">
        </div>
    </div>



    <div class="portfolio-item">
        <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="800"  data-aos-once="true">
            <img src="{{'pictures/web1.jpg'}}" alt="picture of portfolio item">
        </div>
        <div class="portfolio-description has-margin-right" data-aos="fade-left" data-aos-delay="900"  data-aos-once="true">
            <h1>Gym site - FullPage.JS</h1>
           <p>Projekt koji uključuje veliki landing video, newsletter (povezan s SQL DB) te galeriju slika (JS).
        </p>

            <a href="" class="cta">Git Hub (source code)</a>
        </div>
    </div>


    <div class="portfolio-item">

        <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="600"  data-aos-once="true">
            <h6>Web Design</h6>
            <h1>Stomatoški site - Swiper.Js / AOS</h1>
            <p>Projekt koji uključuje veliki landing video, newsletter (povezan s SQL DB) te galeriju slika (JS).
            </p>
            <a href="" class="cta">Git Hub (source code)</a>
        </div>
        <div class="portfolio-img  has-margin-right" data-aos="fade-left" data-aos-delay="700"  data-aos-once="true">
            <img src="{{'pictures/web2.jpg'}}" alt="picture of portfolio item">
        </div>
    </div>


</div>
</section>


 <!-- EXPIRIENCE -->



<section class="expirience" id="expirience">
    <div class="container">
        <div class="section-heading">
            <h1>My Skills</h1>
            <h6>My Developer Path (for now)</h6>
        </div>

        <div class="timeline" data-aos="fade-down" data-aos-delay="300"  data-aos-once="true">
             <ul>
                 <li class="date" date-date="dec. 2019 - 2020">
                    <h1>Java Script</h1>
                    <p>Trenutno učim JS programski jezik, te usavršavam ranije stečena znanja, a plan mi je nastaviti se razvijati u novim web tehnologijama
                    </p>
                 </li>

                 <li class="date" date-date="jn. 2019 - dec. 2019">
                    <h1>PHP i LARAVEL</h1>
                    <p>Pohađanje PHP osposobljavanja te razvijanje znanja kroz Laravel framework.
                    </p>
                 </li>

                 <li class="date" date-date="oct. 2018 - jn. 2019">
                    <h1>HTML i CSS</h1>
                    <p>Početno učenje osnovnih pojmova web developmenta, svladavanje stvari kao što su HTML i CSS.
                    </p>
                 </li>

             </ul>
        </div>
    </section>


 <!-- CONTACT -->


    <section class="contact" id="contact">
        <div class="container">
            <div class="section-heading">
                <h1>Contact</h1>
                <h6>Let's work together</h6>
            </div>
            <form action="{{route('contact')}}" method="POST" data-aos="fade-up" data-aos-delay="300"  data-aos-once="true">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name..." required>
                <br>
                <label for="mail">Email:</label>
                <input type="email" id="mail" name="mail" placeholder="Enter your email..." required>
                <br>
                <label for="services">Services:</label>
                <select name="services" id="services" required>
                    <option value="web design">Web Design</option>
                    <option value="web development">Web Development</option>
                    <option value="dew design/development">Web Design/Development</option>
                </select>
                <br>
                <label for="subject">Subject:</label>
                <textarea name="subject" id="subject" cols="10" rows="10"></textarea>
                <br>
                <input type="submit" value="Submit">

            </form>
    </section>


 <!-- FOOTER -->


    <footer class="copyright">
        <div class="up" id="up">
            <a href="#"> <i class="fas fa-chevron-circle-up fa-3x"></i>
            </a>

        </div>

        <p>&copy; 2020 Crafted by: Marin Sabljo</p>
    </footer>


@endsection

