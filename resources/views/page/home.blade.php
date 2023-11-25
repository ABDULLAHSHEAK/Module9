@extends('layouts.master')

@section('home')

  <div class="header-img-main">
    <div class="header-img">
      <img src="img/6.png" alt="">
    </div>
  </div>
  <div class="container-hero" id="home">
    <div class="sub-hero">
      <div class="row">
        <div class="hero-text col-md-5  wow animate__animated animate__slideInLeft ">
          <div class="hero-wlc">
            <span>Hi There!</span>
            <h1 class="wow animate__animated animate__bounce">I am Abdullah Shake</h1>
            <div class="typed">
              <h1>
                <span class="element"></span>
              </h1>
            </div>
            <p>I am Font-end Developer & Wordpress Expert . I have 3 year experience of web designe . I have others
              experience such as Video Editing , Graphics Design etc.</p>
            <div class="hero-button">
              <button class="hero-btn btn1">
                Hire Me &#8594
              </button>
              <button class="hero-btn btn2">
                View Portfolio &#8594
              </button>
            </div>
          </div>
        </div>
        <div class="hero-middle col-md-2"></div>
        <div class="hero-img col-md-5  wow animate__animated animate__slideInRight">
          <img src="img/6.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="feather-area wow bounceInUp" id="about">
    <div class="sub-feather">
      <div class="row">
        <div class="feather-img col-md-6">
          <img src="img/4.png" alt="">
        </div>
        <div class="feather-tab col-md-6  wow animate__animated animate__slideInRight">
          <div class="feather-tab-main">
            <div class="tab-btn">
              <button id="btn1" onclick="openAbout()">ABOUT</button>
              <button id="btn2" onclick="openSkill()">SKILLS</button>
              <button id="btn3" onclick="openExp()">EXPERIANCE</button>
            </div>
            <div id="content1" class="content">
              <div class="sub-content">
                <h1 class="wow bounceInUp">About Me</h1>
                <p>I am Font-end Developer & Wordpress Expert . I have 3 year experince of web designe . I have others
                  experince such as
                  Video Editing , Graphics Design , SEO , Degital Marketing .</p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas aliquam officiis sapiente excepturi
                sunt architecto temporibus, accusantium pariatur <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eaque aspernatur architecto, labore
                pariatur adipisci sed. Maxime veritatis blanditiis minus.b

                <br><br>
                <button class="defultBtn" id="about-see-more-btn">see more</button>
              </div>
            </div>
            <div id="content2" class="content">
              <div class="sub-content">
                <h1>Skills</h1>

                <!-- tab skill section ===== -->
                <div class="skills">
                  <div class="skill">
                    <div class="skill-name">
                      HTML
                    </div>
                    <div class="skill-bar">
                      <div class="skill-per" per="90%" style="max-width: 90%;"></div>
                    </div>
                  </div>
                </div>

                <div class="skills">
                  <div class="skill">
                    <div class="skill-name">
                      CSS
                    </div>
                    <div class="skill-bar">
                      <div class="skill-per" per="70%" style="max-width: 70%;"></div>
                    </div>
                  </div>
                </div>

                <div class="skills">
                  <div class="skill">
                    <div class="skill-name">
                      JavaScript
                    </div>
                    <div class="skill-bar">
                      <div class="skill-per" per="50%" style="max-width: 50%;"></div>
                    </div>
                  </div>
                </div>

                <div class="skills">
                  <div class="skill">
                    <div class="skill-name">
                      PHP
                    </div>
                    <div class="skill-bar">
                      <div class="skill-per" per="40%" style="max-width: 40%;"></div>
                    </div>
                  </div>
                </div>

                <div class="skills">
                  <div class="skill">
                    <div class="skill-name">
                      Wordpress
                    </div>
                    <div class="skill-bar">
                      <div class="skill-per" per="90%" style="max-width: 90%;"></div>
                    </div>
                  </div>
                </div>

                <div class="skills">
                  <div class="skill">
                    <div class="skill-name">
                      Adobe Photoshop
                    </div>
                    <div class="skill-bar">
                      <div class="skill-per" per="90%" style="max-width: 90%;"></div>
                    </div>
                  </div>
                </div>


                <div class="skills">
                  <div class="skill">
                    <div class="skill-name">
                      Filmora
                    </div>
                    <div class="skill-bar">
                      <div class="skill-per" per="80%" style="max-width: 80%;"></div>
                    </div>
                  </div>
                </div>
                <br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sint et excepturi repudiandae
                  debitis, quaerat labore temporibus vero. Rem eos doloribus atque fuga cupiditate officiis a, tempora
                  aut dignissimos nobis veniam repellat? Dignissimos!</p>
              </div>
            </div>
            <div id="content3" class="content">
              <div class="sub-content">
                <h1>Experience</h1>
                <p>I have already completed many projects with my font-end experience and I have made many websites with
                  WordPress such as
                  newspaper website , ecomerce website , business website and personal portfolio website also . i can
                  design youtube
                  thumbnail banner logo poster etc . i can edit video for youtube channel .</p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, libero! Illum tempora iusto
                  tenetur, esse in numquam ducimus. Atque, omnis!
                </p>
                <button class="defultBtn" id="about-see-more-btn2">see more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- popup code start -->

  <div class="popup-hero" id="popup">
    <div class="popup-content">
      <div class="popup-header">
        <h2>
          About Me
        </h2>
        <button id="croseButton">&times;</button>
      </div>
      <div class="popup-body">

        <p> <strong>Hi! I am Md Abdullah Shake</strong>
          I am a Font-end Developer & Wordpress Expert . I have 3 year experience of web designe . I have others
          experience such as
          Video Editing , Graphics Design etc.</p>
        <p>I have already completed many projects with my font-end experience and I have made many websites with
          WordPress such as
          newspaper website , ecomerce website , business website and personal portfolio website also . i can design
          youtube
          thumbnail banner logo poster etc . i can edit video for youtube channel .</p>

      </div>
      <div class="popup-footer">
        <button id="footer-close" class="defultBtn">Close</button>
      </div>
    </div>
  </div>


  <!-- Service section  -->


  <section class="section services-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title wow animate__animated animate__slideInLeft">
            <h2 class="wow bounceInUp">What I Do</h2>
            <p>
              I design and develop creating stylish, modern websites for client requirement . I also provide SEO and
              graphics design services .
            </p>
          </div>
        </div>
      </div>
      <div class="row wow animate__animated animate__slideInUp">
        <!-- feaure box -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature-box-1">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="feature-content">
              <h5>Unique design</h5>
              <p>
                I design and develop specializing in creating stylish, modern
                websites.
              </p>
              <span class="read-more-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque soluta fugiat molestiae earum?
                Obcaecati harum
                illo beatae facere aut!
              </span> <br>
              <button class="card-btn">See More &#8594</button>
            </div>
          </div>
        </div>
        <!-- / -->
        <!-- feaure box -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature-box-1">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="feature-content">
              <h5>Different Layout</h5>
              <p>I design unic and stylish, modern
                websites.</p>
              <span class="read-more-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque soluta fugiat molestiae earum?
                Obcaecati harum illo beatae facere aut!
              </span> <br>
              <button class="card-btn">See More &#8594</button>
            </div>
          </div>
        </div>
        <!-- / -->
        <!-- feaure box -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature-box-1">
            <div class="icon">
              <i class="fa fa-comment"></i>
            </div>
            <div class="feature-content">
              <h5>Moderne</h5>
              <p>I design and develop specializing in creating stylish, modern
                websites.</p>
              <span class="read-more-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque soluta fugiat molestiae earum?
                Obcaecati harum
                illo beatae facere aut!
              </span> <br>
              <button class="card-btn">See More &#8594</button>
            </div>
          </div>
        </div>
        <!-- / -->
        <!-- feaure box -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature-box-1">
            <div class="icon">
              <i class="fa fa-image"></i>
            </div>
            <div class="feature-content">
              <h5>Responsiveness</h5>
              <p>I design and develop responsive
                websites.</p>
              <span class="read-more-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque soluta fugiat molestiae earum?
                Obcaecati harum
                illo beatae facere aut!
              </span> <br>
              <button class="card-btn">See More &#8594</button>
            </div>
          </div>
        </div>
        <!-- / -->
        <!-- feaure box -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature-box-1">
            <div class="icon">
              <i class="fa fa-th"></i>
            </div>
            <div class="feature-content">
              <h5>SEO</h5>
              <p>I provide best seo services such as on page seo , off page seo , backlink etc ,</p>
              <span class="read-more-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque soluta fugiat molestiae earum?
                Obcaecati harum
                illo beatae facere aut!
              </span> <br>
              <button class="card-btn">See More &#8594</button>
            </div>
          </div>
        </div>
        <!-- / -->
        <!-- feaure box -->
        <div class="col-sm-6 col-lg-4">
          <div class="feature-box-1">
            <div class="icon">
              <i class="fa fa-cog"></i>
            </div>
            <div class="feature-content">
              <h5>Graphics Design</h5>
              <p>I Provide any type of design for my client requirement</p>
              <span class="read-more-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque soluta fugiat molestiae earum?
                Obcaecati harum
                illo beatae facere aut!
              </span> <br>
              <button class="card-btn">See More &#8594</button>
            </div>
          </div>
        </div>
        <!-- / -->
      </div>
    </div>
  </section>

  <!-- completed project section  -->

  <div class="counter wow animate__animated animate__slideInUp">
    <div class="sub-counter">
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="count-data text-center">
            <h6 class="count" data-target="500">0</h6>
            <p class="m-0px font-w-600 count-text">Happy Clients</p>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="count-data text-center">
            <h6 class="count" data-target="150">0</h6>
            <p class="m-0px font-w-600 count-text">Project Completed</p>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="count-data text-center">
            <h6 class="count" data-target="850">0</h6>
            <p class="m-0px font-w-600 count-text">Pending project</p>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="count-data text-center">
            <h6 class="count" data-target="190">0</h6>
            <p class="m-0px font-w-600 count-text">Telephonic Talk</p>
          </div>
        </div>
        <center><button class="defultBtn reload" id="reload">see number</button></center>
      </div>
    </div>;
  </div>

  <!-- ------------client revew system sectin ------------ -->

  <section class="home-testimonial">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center testimonial-pos">
        <div class="col-md-12 pt-4 d-flex justify-content-center">
          <h3>Testimonials</h3>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
          <h2 class=" wow animate__animated animate__bounce">Explore the my client experience</h2>
        </div>
      </div>
      <section class="home-testimonial-bottom  wow animate__animated animate__slideInUp">
        <div class="container testimonial-inner">
          <div class="row d-flex justify-content-center">
            <div class="col-md-4 style-3">
              <div class="tour-item ">
                <div class="tour-desc bg-white">
                  <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Sint, dignissimos. Excepturi explicabo fuga, delectus aliquam praesentium
                    adipisci&rdquo;</div>
                  <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="img/m.jpg"></div>
                  <div class="link-name d-flex justify-content-center">Mahiuddin Faruque</div>
                  <div class="link-position d-flex justify-content-center">Client</div>
                </div>
              </div>
            </div>
            <div class="col-md-4 style-3">
              <div class="tour-item ">
                <div class="tour-desc bg-white">
                  <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Totam nihil reiciendis atque maxime repudiandae nisi recusandae at facere
                    explicabo voluptatum?.&rdquo;</div>
                  <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="img/r.jpg"
                      alt="client img"></div>
                  <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                  <div class="link-position d-flex justify-content-center">Client</div>
                </div>
              </div>
            </div>
            <div class="col-md-4 style-3">
              <div class="tour-item ">
                <div class="tour-desc bg-white">
                  <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Natus qui consequatur omnis molestias dolorem nisi nemo ad culpa delectus
                    molestiae!&rdquo;</div>
                  <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="img/m.jpg" alt="">
                  </div>
                  <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                  <div class="link-position d-flex justify-content-center">Client</div>
                </div>
              </div>
            </div>
          </div>
      </section>
  </section>


@endsection
