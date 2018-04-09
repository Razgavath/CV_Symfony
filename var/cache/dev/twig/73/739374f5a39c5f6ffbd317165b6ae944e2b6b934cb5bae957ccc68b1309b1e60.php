<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_a79652717898fcd0112ce86b3425b5bf2f8a5afa44adbbab93d08c9044187e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f664269cc09c302a3b22442688b5c46fd36b45c5829fb3cdcd165f96bd334c9 = $this->env->getExtension("native_profiler");
        $__internal_8f664269cc09c302a3b22442688b5c46fd36b45c5829fb3cdcd165f96bd334c9->enter($__internal_8f664269cc09c302a3b22442688b5c46fd36b45c5829fb3cdcd165f96bd334c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f664269cc09c302a3b22442688b5c46fd36b45c5829fb3cdcd165f96bd334c9->leave($__internal_8f664269cc09c302a3b22442688b5c46fd36b45c5829fb3cdcd165f96bd334c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eaf26698c47fe5604abe33d7792368cbd76a3705a6e1eaced431c7560569a9b = $this->env->getExtension("native_profiler");
        $__internal_0eaf26698c47fe5604abe33d7792368cbd76a3705a6e1eaced431c7560569a9b->enter($__internal_0eaf26698c47fe5604abe33d7792368cbd76a3705a6e1eaced431c7560569a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<!-- Preloader -->
\t<div id=\"tt-preloader\">
\t\t<div id=\"pre-status\">
\t\t\t<div class=\"preload-placeholder\"></div>
\t\t</div>
\t</div>

\t<!-- Home Section -->
\t<section id=\"home\" class=\"tt-fullHeight\" data-stellar-vertical-offset=\"50\" data-stellar-background-ratio=\"0.2\">
\t\t<div class=\"intro\">
\t\t\t<div class=\"intro-sub\">I am X</div>
\t\t\t<h1>Creative <span>Designer</span></h1>
\t\t\t<p>I am a fully professional freelance creative User Interface Designer &amp; Developer<br> Involving with latest web designing and technologies is a great <br> feel free to contact creative.</p>

      <div class=\"social-icons\">
        <ul class=\"list-inline\">
          <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
        </ul>
      </div> <!-- /.social-icons -->
\t\t</div>

\t\t<div class=\"mouse-icon\">
\t\t\t<div class=\"wheel\"></div>
\t\t</div>
\t</section><!-- End Home Section -->




\t<!-- Navigation -->
\t<header class=\"header\">
\t\t<nav class=\"navbar navbar-custom\" role=\"navigation\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#custom-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\"><img src=\"assets/images/logo.png\" alt=\"\"></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"custom-collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"#home\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#about\">About</a></li>
\t\t\t\t\t\t<li><a href=\"#resume\">Resume</a></li>
\t\t\t\t\t\t<li><a href=\"#skills\">Skills</a></li>
\t\t\t\t\t\t<li><a href=\"#works\">Works</a></li>
\t\t\t\t\t\t<li><a href=\"#blog\">Blog</a></li>
            <li><a href=\"#contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div><!-- .container -->
\t\t</nav>
\t</header><!-- End Navigation -->


    <!-- About Section -->
    <section id=\"about\" class=\"about-section section-padding\">
      <div class=\"container\">
        <h2 class=\"section-title wow fadeInUp\">About Me</h2>

        <div class=\"row\">

          <div class=\"col-md-4 col-md-push-8\">
            <div class=\"biography\">
              <div class=\"myphoto\">
                <img src=\"assets/images/myphoto.jpg\" alt=\"\">
              </div>
              <ul>
                <li><strong>Name:</strong> John Doe</li>
                <li><strong>Date of birth:</strong> 05 Dec 1993</li>
                <li><strong>Address:</strong> 239/2 Awesome Street, USA</li>
                <li><strong>Nationality:</strong> American</li>
                <li><strong>Phone:</strong> (000) 1234 56789</li>
                <li><strong>Email:</strong> yourmail@iamx.com</li>
              </ul>
            </div>
          </div> <!-- col-md-4 -->

          <div class=\"col-md-8 col-md-pull-4\">
            <div class=\"short-info wow fadeInUp\">
              <h3>Objective</h3>
              <p>An opportunity to work and upgrade oneself, as well as being involved in an organization that believes in gaining a competitive edge and giving back to the community. I'm presently expanding my solid experience in UI / UX design. I focus on using my interpersonal skills to build good user experience and create a strong interest in my employers. I hope to develop skills in motion design and my knowledge of the Web, and become an honest asset to the business. As an individual, I'm self-confident you’ll find me creative, funny and naturally passionate. I’m a forward thinker, which others may find inspiring when working as a team.</p>
            </div>

            <div class=\"short-info wow fadeInUp\">
              <h3>What I Do ?</h3>
              <p>I have been working as a web interface designer since. I have a love of clean, elegant styling, and I have lots of experience in the production of CSS3 and HTML5 for modern websites. I loving creating awesome as per my clients’ need. I think user experience when I try to craft something for my clients. Making a design awesome.</p>

              <ul class=\"list-check\">
                <li>User Experience Design</li>
                <li>Interface Design</li>
                <li>Product Design</li>
                <li>Branding Design</li>
                <li>Digital Painting</li>
                <li>Video Editing</li>
              </ul>
            </div>

            <div class=\"my-signature\">
              <img src=\"assets/images/sign.png\" alt=\"\">
            </div>

            <div class=\"download-button\">
              <a class=\"btn btn-info btn-lg\" href=\"#contact\"><i class=\"fa fa-paper-plane\"></i>Send me message</a>
              <a class=\"btn btn-primary btn-lg\" href=\"#\"><i class=\"fa fa-download\"></i>download my cv</a>
            </div>
          </div>


        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </section><!-- End About Section -->


    <!-- Video Section -->
    <section id=\"video\" class=\"video-section\">
      <div class=\"tf-bg-overlay\">
        <div class=\"container\">
          <div class=\"control\">
            <div class=\"video-intro text-center\">
              <button type=\"button\" class=\"play-trigger\" data-toggle=\"modal\" data-target=\"#tour-video\"><i class=\"fa fa-play\"></i></button>
              <h2>Video Introducing</h2>
            </div>
              
            <!-- Video Modal -->
            <div class=\"modal modal-video\" id=\"tour-video\">
              <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Video Tour</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"video-container\">
                      <iframe src=\"http://player.vimeo.com/video/118119037\" name=\"vimeoplayer\" id=\"nofocusvideo\" width=\"500\" height=\"281\"></iframe>
                    </div><!--/.video-container-->
                  </div>
                  <!--/.modal-body-->
                </div>
                <!--/.modal-content-->
              </div>
              <!--/.modal-dialog-->
            </div>
            <!--/.modal-->                    
          </div>
          <!--/.control-->
        </div>
        <!--/.container-->
      </div>
      <!--/.overlay-->
    </section>
    <!-- /.Video Section -->


    <!-- Resume Section -->
    <section id=\"resume\" class=\"resume-section section-padding\">
        <div class=\"container\">
            <h2 class=\"section-title wow fadeInUp\">Resume</h2>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"resume-title\">
                        <h3>Education</h3>
                    </div>
                    <div class=\"resume\">
                        <ul class=\"timeline\">
                            <li>
                                <div class=\"posted-date\">
                                    <span class=\"month\">2007-2011</span>
                                </div><!-- /posted-date -->

                                <div class=\"timeline-panel wow fadeInUp\">
                                    <div class=\"timeline-content\">
                                        <div class=\"timeline-heading\">
                                            <h3>Bachelor degree certificate</h3>
                                            <span>BA(Hons) in UI Engineering, Arts University, Pabna, USA</span>
                                        </div><!-- /timeline-heading -->

                                        <div class=\"timeline-body\">
                                            <p>I have completed UI Engineering degree from ABC University, Boston, USA at feel the charm of existence in this spot, which was created for the.</p>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div><!-- /timeline-panel -->
                            </li>

                            <li class=\"timeline-inverted\">
                                <div class=\"posted-date\">
                                    <span class=\"month\">2004-2006</span>
                                </div><!-- /posted-date -->

                                <div class=\"timeline-panel wow fadeInUp\">
                                    <div class=\"timeline-content\">
                                        <div class=\"timeline-heading\">
                                            <h3>Higher Secondary certificate</h3>
                                            <span>Typography Arts, FA College, New York, USA</span>
                                        </div><!-- /timeline-heading -->

                                        <div class=\"timeline-body\">
                                            <p>From this college of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div> <!-- /timeline-panel -->
                            </li>

                            <li>
                                <div class=\"posted-date\">
                                  <span class=\"month\">2000-2003</span>
                                </div><!-- /posted-date -->

                                <div class=\"timeline-panel wow fadeInUp\">
                                    <div class=\"timeline-content\">
                                        <div class=\"timeline-heading\">
                                            <h3>Secondary school certificate</h3>
                                            <span>Creative Arts, Julius Jr. school, USA</span>
                                        </div><!-- /timeline-heading -->

                                        <div class=\"timeline-body\">
                                            <p>I was awesome at arts, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy.</p>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div><!-- /timeline-panel -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /row -->

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"resume-title\">
                        <h3>Experience</h3>
                    </div>
                    <div class=\"resume\">
                        <ul class=\"timeline\">
                            <li class=\"timeline-inverted\">
                                <div class=\"posted-date\">
                                  <span class=\"month\">2011-2013</span>
                                </div><!-- /posted-date -->

                                <div class=\"timeline-panel wow fadeInUp\">
                                    <div class=\"timeline-content\">
                                        <div class=\"timeline-heading\">
                                            <h3>Junior ui designer</h3>
                                            <span>XYZ Design Home, One Street, Boston</span>
                                        </div><!-- /timeline-heading -->

                                        <div class=\"timeline-body\">
                                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div> <!-- /timeline-panel -->
                            </li>

                            <li>
                                <div class=\"posted-date\">
                                  <span class=\"month\">2013-2015</span>
                                </div><!-- /posted-date -->

                                <div class=\"timeline-panel wow fadeInUp\">
                                    <div class=\"timeline-content\">
                                        <div class=\"timeline-heading\">
                                            <h3>Lead UX Consultant</h3>
                                            <span>Lucky8 Designing Firm, California</span>
                                        </div><!-- /timeline-heading -->

                                        <div class=\"timeline-body\">
                                            <p>Completely provide access to seamless manufactured products before functionalized synergy. Progressively redefine competitive value through.</p>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div><!-- /timeline-panel -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /row -->
        </div><!-- /.container -->
    </section><!-- End Resume Section -->


    <!-- Skills Section -->
    <section id=\"skills\" class=\"skills-section section-padding\">
      <div class=\"container\">
        <h2 class=\"section-title wow fadeInUp\">Skills</h2>

        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"skill-progress\">
              <div class=\"skill-title\"><h3>UX Design</h3></div> 
              <div class=\"progress\">
                <div class=\"progress-bar six-sec-ease-in-out\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" ><span>95%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->

            <div class=\"skill-progress\">
              <div class=\"skill-title\"><h3>Visual Design</h3></div> 
              <div class=\"progress\">
                <div class=\"progress-bar six-sec-ease-in-out\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" ><span>80%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
            <div class=\"skill-progress\">
              <div class=\"skill-title\"><h3>Business Design</h3></div>  
              <div class=\"progress\">
                <div class=\"progress-bar six-sec-ease-in-out\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" ><span>75%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
          </div><!-- /.col-md-6 -->

          <div class=\"col-md-6\">
            <div class=\"skill-progress\">
              <div class=\"skill-title\"><h3>Branding Design</h3></div> 
              <div class=\"progress\">
                <div class=\"progress-bar six-sec-ease-in-out\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" ><span>95%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
            <div class=\"skill-progress\">
              <div class=\"skill-title\"><h3>Motion Graphic</h3></div> 
              <div class=\"progress\">
                <div class=\"progress-bar six-sec-ease-in-out\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" ><span>80%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
            <div class=\"skill-progress\">
              <div class=\"skill-title\"><h3>Flyers Designing</h3></div>  
              <div class=\"progress\">
                <div class=\"progress-bar six-sec-ease-in-out\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" ><span>75%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->

        <div class=\"skill-chart text-center\">
          <h3>More skills</h3>
        </div>
          
        <div class=\"row more-skill text-center\">
          <div class=\"col-xs-12 col-sm-4 col-md-2\">
              <div class=\"chart\" data-percent=\"91\" data-color=\"e74c3c\">
                    <span class=\"percent\"></span>
                    <div class=\"chart-text\">
                      <span>leadership</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-2\">
              <div class=\"chart\" data-percent=\"23\" data-color=\"2ecc71\">
                    <span class=\"percent\"></span>
                    <div class=\"chart-text\">
                      <span>Creativity</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-2\">
              <div class=\"chart\" data-percent=\"68\" data-color=\"3498db\">
                    <span class=\"percent\"></span>
                    <div class=\"chart-text\">
                      <span>Management</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-2\">
              <div class=\"chart\" data-percent=\"68\" data-color=\"3498db\">
                    <span class=\"percent\"></span>
                    <div class=\"chart-text\">
                      <span>Branding</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-2\">
              <div class=\"chart\" data-percent=\"68\" data-color=\"3498db\">
                    <span class=\"percent\"></span>
                    <div class=\"chart-text\">
                      <span>Marketing</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-2\">
              <div class=\"chart\" data-percent=\"68\" data-color=\"3498db\">
                    <span class=\"percent\"></span>
                    <div class=\"chart-text\">
                      <span>Motivation</span>
                    </div>
                </div>
            </div>
        </div>

      </div><!-- /.container -->
    </section><!-- End Skills Section -->


    <!-- Works Section -->
    <section id=\"works\" class=\"works-section section-padding\">
      <div class=\"container\">
        <h2 class=\"section-title wow fadeInUp\">Works</h2>

        <ul class=\"list-inline\" id=\"filter\">
            <li><a class=\"active\" data-group=\"all\">All</a></li>
            <li><a data-group=\"design\">Design</a></li>
            <li><a data-group=\"web\">Web</a></li>
            <li><a data-group=\"interface\">Interface</a></li>
            <li><a data-group=\"identety\">Identity</a></li>
        </ul>

        <div class=\"row\">
          <div id=\"grid\">
            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"identety\", \"interface\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-1.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-1.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->


            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"identety\", \"web\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-2.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-2.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->
            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"interface\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-3.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-3.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->
            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"identety\", \"design\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-4.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-4.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->
            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"identety\", \"design\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-5.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-5.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->
            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"identety\", \"design\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-6.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-6.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->
            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"identety\", \"web\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-7.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-7.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->
            <div class=\"portfolio-item col-xs-12 col-sm-4 col-md-3\" data-groups='[\"all\", \"design\"]'>
              <div class=\"portfolio-bg\">
                <div class=\"portfolio\">
                  <div class=\"tt-overlay\"></div>
                  <div class=\"links\">
                    <a class=\"image-link\" href=\"assets/images/works/portfolio-8.jpg\"><i class=\"fa fa-search-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>                          
                  </div><!-- /.links -->
                  <img src=\"assets/images/works/portfolio-8.jpg\" alt=\"image\"> 
                  <div class=\"portfolio-info\">
                    <h3>Portfolio Title</h3>
                  </div><!-- /.portfolio-info -->
                </div><!-- /.portfolio -->
              </div><!-- /.portfolio-bg -->
            </div><!-- /.portfolio-item -->
          </div><!-- /#grid -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- End Works Section -->


    <!-- Facts Section -->
    <section id=\"facts\" class=\"facts-section text-center\" data-stellar-vertical-offset=\"50\" data-stellar-background-ratio=\"0.2\">
      <div class=\"tt-overlay-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"count-wrap\">
                <div class=\"col-sm-3 col-xs-6\">
                  <i class=\"fa fa-flask\"></i>
                  <h3 class=\"timer\">7</h3>
                  <p>Years of Experience</p>
                </div>
                <div class=\"col-sm-3 col-xs-6\"> 
                  <i class=\"fa fa-thumbs-up\"></i>
                  <h3 class=\"timer\">651</h3>                
                  <p>Projects Done</p>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                  <i class=\"fa fa-users\"></i>
                  <h3 class=\"timer\">251</h3> 
                  <p>Happy Clients</p>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                  <i class=\"fa fa-trophy\"></i>
                  <h3 class=\"timer\">5</h3> 
                  <p>Awards Won</p>
                </div>
              </div><!-- /count-wrap -->
            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>
    </section> <!-- End Facts Section -->


    <!-- Blog Section -->
    <section id=\"blog\" class=\"latest-blog-section section-padding\">
      <div class=\"container\">
        <h2 class=\"section-title wow fadeInUp\">Latest Post</h2>

        <div class=\"row\">
          <div class=\"col-sm-4\">
            <article class=\"blog-post-wrapper\">
              <div class=\"figure\">    
                <div class=\"post-thumbnail\">
                  <a href=\"#\"><img src=\"assets/images/blog/01.jpg\" class=\"img-responsive \" alt=\"\"></a>
                </div>
                  <i class=\"fa fa-file-photo-o\"></i>
              </div><!-- /.figure -->
              <header class=\"entry-header\">
                <div class=\"post-meta\">
                  <span class=\"the-category\"> 
                    <a href=\"#\">Print Design,</a> <a href=\"#\">Photoshop</a>
                  </span>
                </div>
                <h2 class=\"entry-title\"><a href=\"blog-single.html\" rel=\"\">Common fonts used for newspaper template design</a></h2>
                <hr>
                <div class=\"entry-meta\">
                  <ul class=\"list-inline\">
                    <li>
                      <span class=\"the-author\">
                        <a href=\"#\">Admin</a> 
                      </span>
                    </li>
                    <li>
                      <span class=\"the-time\">
                        <a href=\"#\">06 Jan 2015</a>
                      </span>
                    </li>
                    <li>
                      <span class=\"the-share\">
                        <a href=\"#\" title=\"share\">30</a>
                      </span>
                    </li>
                    <li>
                      <span class=\"the-comments\">
                        <a href=\"#\" title=\"\">05</a>
                      </span>
                    </li>
                  </ul>
                </div><!-- .entry-meta -->
              </header><!-- .entry-header -->
            </article>
          </div><!-- /.col-sm-4 -->
          <div class=\"col-sm-4\">
            <article class=\"blog-post-wrapper\">
              <div class=\"figure\">    
                <div class=\"post-thumbnail\">
                  <a href=\"#\"><img src=\"assets/images/blog/02.jpg\" class=\"img-responsive \" alt=\"\"></a>
                </div>
                  <i class=\"fa fa-file-video-o\"></i>
              </div><!-- /.figure -->
              <header class=\"entry-header\">
                <div class=\"post-meta\">
                  <span class=\"the-category\"> 
                    <a href=\"#\">Print Design,</a> <a href=\"#\">Photoshop</a>
                  </span>
                </div>
                <h2 class=\"entry-title\"><a href=\"blog-single.html\" rel=\"\">What is the style of font called that is typically</a></h2>
                <hr>
                <div class=\"entry-meta\">
                  <ul class=\"list-inline\">
                    <li>
                      <span class=\"the-author\">
                        <a href=\"#\">Admin</a> 
                      </span>
                    </li>
                    <li>
                      <span class=\"the-time\">
                        <a href=\"#\">06 Jan 2015</a>
                      </span>
                    </li>
                    <li>
                      <span class=\"the-share\">
                        <a href=\"#\" title=\"share\">30</a>
                      </span>
                    </li>
                    <li>
                      <span class=\"the-comments\">
                        <a href=\"#\" title=\"\">05</a>
                      </span>
                    </li>
                  </ul>
                </div><!-- .entry-meta -->
              </header><!-- .entry-header -->
            </article>
          </div><!-- /.col-sm-4 -->
          <div class=\"col-sm-4\">
            <article class=\"blog-post-wrapper\">
              <div class=\"figure\">    
                <div class=\"post-thumbnail\">
                  <a href=\"#\"><img src=\"assets/images/blog/03.jpg\" class=\"img-responsive \" alt=\"\"></a>
                </div>
                  <i class=\"fa fa-quote-left\"></i>
              </div><!-- /.figure -->
              <header class=\"entry-header\">
                <div class=\"post-meta\">
                  <span class=\"the-category\"> 
                    <a href=\"#\">Print Design,</a> <a href=\"#\">Photoshop</a>
                  </span>
                </div>
                <h2 class=\"entry-title\"><a href=\"blog-single.html\" rel=\"\">How to create a print ready brochure using photoshop</a></h2>
                <hr>
                <div class=\"entry-meta\">
                  <ul class=\"list-inline\">
                    <li>
                      <span class=\"the-author\">
                        <a href=\"#\">Admin</a> 
                      </span>
                    </li>
                    <li>
                      <span class=\"the-time\">
                        <a href=\"#\">06 Jan 2015</a>
                      </span>
                    </li>
                    <li>
                      <span class=\"the-share\">
                        <a href=\"#\" title=\"share\">30</a>
                      </span>
                    </li>
                    <li>
                      <span class=\"the-comments\">
                        <a href=\"#\" title=\"\">05</a>
                      </span>
                    </li>
                  </ul>
                </div><!-- .entry-meta -->
              </header><!-- .entry-header -->
            </article>
          </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <div class=\"blog-more text-center\">
          <a href=\"#\" class=\"btn btn-primary\">View More</a>
        </div>
        
      </div><!-- /.container -->
    </section><!-- End Blog Section -->


    <!-- Hire Section -->
    <section class=\"hire-section text-center\" data-stellar-vertical-offset=\"50\" data-stellar-background-ratio=\"0.2\">
      <div class=\"hire-section-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <h2>I'm available for freelance project</h2>
              <a href=\"#\" class=\"btn btn-default\">Get Hired</a>
            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.hire-section-bg -->
    </section><!-- End Hire Section -->



    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact-section section-padding\">
      <div class=\"container\">
        <h2 class=\"section-title wow fadeInUp\">Get in touch</h2>

        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"contact-form\">
              <strong>Send me a message</strong>
              <form name=\"contact-form\" method=\"post\" action=\"assets/php/sendemail.php\">
                <div class=\"form-group\">
                  <label for=\"InputName1\">Name</label>
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"InputName1\" required=\"\">
                </div>
                <div class=\"form-group\">
                  <label for=\"InputEmail1\">Email</label>
                  <input type=\"email\" name=\"email\" class=\"form-control\" id=\"InputEmail1\" required=\"\">
                </div>
                <div class=\"form-group\">
                  <label for=\"InputSubject\">Subject</label>
                  <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"InputSubject\">
                </div>
                <div class=\"form-group\">
                  <label for=\"InputTextarea\">Message</label>
                  <textarea name=\"message\" class=\"form-control\" id=\"InputTextarea\" rows=\"5\" required=\"\"></textarea>
                </div>

                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">Send Message</button>
              </form>
            </div>
          </div><!-- /.col-md-6 -->

          <div class=\"col-md-6\">
            <div class=\"row center-xs\">
              <div class=\"col-sm-6\">
                <i class=\"fa fa-map-marker\"></i>
                <address>
                  <strong>Address/Street</strong>
                  239/2 Awesome Street,<br>
                  Boston, USA<br>
                </address>
              </div>

              <div class=\"col-sm-6\">
                <i class=\"fa fa-mobile\"></i>
                <div class=\"contact-number\">
                  <strong>Phone Number</strong>
                  (001) 0123 111222<br>
                  (001) 0123 333444
                </div>
              </div>
            </div>

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"location-map\">
                <div id=\"mapCanvas\" class=\"map-canvas\"></div>
              </div>
            </div>
          </div>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- End Contact Section -->


\t<!-- Footer Section -->
    <footer class=\"footer-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"copyright text-center\">
              <p>&copy; TrendyTheme 2015. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End Footer Section -->


\t<!-- Scroll-up -->
\t<div class=\"scroll-up\">
\t\t<a href=\"#home\"><i class=\"fa fa-angle-up\"></i></a>
\t</div>



";
        
        $__internal_0eaf26698c47fe5604abe33d7792368cbd76a3705a6e1eaced431c7560569a9b->leave($__internal_0eaf26698c47fe5604abe33d7792368cbd76a3705a6e1eaced431c7560569a9b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	<!-- Preloader -->*/
/* 	<div id="tt-preloader">*/
/* 		<div id="pre-status">*/
/* 			<div class="preload-placeholder"></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- Home Section -->*/
/* 	<section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">*/
/* 		<div class="intro">*/
/* 			<div class="intro-sub">I am X</div>*/
/* 			<h1>Creative <span>Designer</span></h1>*/
/* 			<p>I am a fully professional freelance creative User Interface Designer &amp; Developer<br> Involving with latest web designing and technologies is a great <br> feel free to contact creative.</p>*/
/* */
/*       <div class="social-icons">*/
/*         <ul class="list-inline">*/
/*           <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*           <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*           <li><a href="#"><i class="fa fa-behance"></i></a></li>*/
/*           <li><a href="#"><i class="fa fa-dribbble"></i></a></li>*/
/*           <li><a href="#"><i class="fa fa-pinterest"></i></a></li>*/
/*         </ul>*/
/*       </div> <!-- /.social-icons -->*/
/* 		</div>*/
/* */
/* 		<div class="mouse-icon">*/
/* 			<div class="wheel"></div>*/
/* 		</div>*/
/* 	</section><!-- End Home Section -->*/
/* */
/* */
/* */
/* */
/* 	<!-- Navigation -->*/
/* 	<header class="header">*/
/* 		<nav class="navbar navbar-custom" role="navigation">*/
/* 			<div class="container">*/
/* 				<div class="navbar-header">*/
/* 					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">*/
/* 						<span class="sr-only">Toggle navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					</button>*/
/* 					<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>*/
/* 				</div>*/
/* */
/* 				<div class="collapse navbar-collapse" id="custom-collapse">*/
/* 					<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a href="#home">Home</a></li>*/
/* 						<li><a href="#about">About</a></li>*/
/* 						<li><a href="#resume">Resume</a></li>*/
/* 						<li><a href="#skills">Skills</a></li>*/
/* 						<li><a href="#works">Works</a></li>*/
/* 						<li><a href="#blog">Blog</a></li>*/
/*             <li><a href="#contact">Contact</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div><!-- .container -->*/
/* 		</nav>*/
/* 	</header><!-- End Navigation -->*/
/* */
/* */
/*     <!-- About Section -->*/
/*     <section id="about" class="about-section section-padding">*/
/*       <div class="container">*/
/*         <h2 class="section-title wow fadeInUp">About Me</h2>*/
/* */
/*         <div class="row">*/
/* */
/*           <div class="col-md-4 col-md-push-8">*/
/*             <div class="biography">*/
/*               <div class="myphoto">*/
/*                 <img src="assets/images/myphoto.jpg" alt="">*/
/*               </div>*/
/*               <ul>*/
/*                 <li><strong>Name:</strong> John Doe</li>*/
/*                 <li><strong>Date of birth:</strong> 05 Dec 1993</li>*/
/*                 <li><strong>Address:</strong> 239/2 Awesome Street, USA</li>*/
/*                 <li><strong>Nationality:</strong> American</li>*/
/*                 <li><strong>Phone:</strong> (000) 1234 56789</li>*/
/*                 <li><strong>Email:</strong> yourmail@iamx.com</li>*/
/*               </ul>*/
/*             </div>*/
/*           </div> <!-- col-md-4 -->*/
/* */
/*           <div class="col-md-8 col-md-pull-4">*/
/*             <div class="short-info wow fadeInUp">*/
/*               <h3>Objective</h3>*/
/*               <p>An opportunity to work and upgrade oneself, as well as being involved in an organization that believes in gaining a competitive edge and giving back to the community. I'm presently expanding my solid experience in UI / UX design. I focus on using my interpersonal skills to build good user experience and create a strong interest in my employers. I hope to develop skills in motion design and my knowledge of the Web, and become an honest asset to the business. As an individual, I'm self-confident you’ll find me creative, funny and naturally passionate. I’m a forward thinker, which others may find inspiring when working as a team.</p>*/
/*             </div>*/
/* */
/*             <div class="short-info wow fadeInUp">*/
/*               <h3>What I Do ?</h3>*/
/*               <p>I have been working as a web interface designer since. I have a love of clean, elegant styling, and I have lots of experience in the production of CSS3 and HTML5 for modern websites. I loving creating awesome as per my clients’ need. I think user experience when I try to craft something for my clients. Making a design awesome.</p>*/
/* */
/*               <ul class="list-check">*/
/*                 <li>User Experience Design</li>*/
/*                 <li>Interface Design</li>*/
/*                 <li>Product Design</li>*/
/*                 <li>Branding Design</li>*/
/*                 <li>Digital Painting</li>*/
/*                 <li>Video Editing</li>*/
/*               </ul>*/
/*             </div>*/
/* */
/*             <div class="my-signature">*/
/*               <img src="assets/images/sign.png" alt="">*/
/*             </div>*/
/* */
/*             <div class="download-button">*/
/*               <a class="btn btn-info btn-lg" href="#contact"><i class="fa fa-paper-plane"></i>Send me message</a>*/
/*               <a class="btn btn-primary btn-lg" href="#"><i class="fa fa-download"></i>download my cv</a>*/
/*             </div>*/
/*           </div>*/
/* */
/* */
/*         </div> <!-- /.row -->*/
/*       </div> <!-- /.container -->*/
/*     </section><!-- End About Section -->*/
/* */
/* */
/*     <!-- Video Section -->*/
/*     <section id="video" class="video-section">*/
/*       <div class="tf-bg-overlay">*/
/*         <div class="container">*/
/*           <div class="control">*/
/*             <div class="video-intro text-center">*/
/*               <button type="button" class="play-trigger" data-toggle="modal" data-target="#tour-video"><i class="fa fa-play"></i></button>*/
/*               <h2>Video Introducing</h2>*/
/*             </div>*/
/*               */
/*             <!-- Video Modal -->*/
/*             <div class="modal modal-video" id="tour-video">*/
/*               <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                   <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     <h4 class="modal-title">Video Tour</h4>*/
/*                   </div>*/
/*                   <div class="modal-body">*/
/*                     <div class="video-container">*/
/*                       <iframe src="http://player.vimeo.com/video/118119037" name="vimeoplayer" id="nofocusvideo" width="500" height="281"></iframe>*/
/*                     </div><!--/.video-container-->*/
/*                   </div>*/
/*                   <!--/.modal-body-->*/
/*                 </div>*/
/*                 <!--/.modal-content-->*/
/*               </div>*/
/*               <!--/.modal-dialog-->*/
/*             </div>*/
/*             <!--/.modal-->                    */
/*           </div>*/
/*           <!--/.control-->*/
/*         </div>*/
/*         <!--/.container-->*/
/*       </div>*/
/*       <!--/.overlay-->*/
/*     </section>*/
/*     <!-- /.Video Section -->*/
/* */
/* */
/*     <!-- Resume Section -->*/
/*     <section id="resume" class="resume-section section-padding">*/
/*         <div class="container">*/
/*             <h2 class="section-title wow fadeInUp">Resume</h2>*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="resume-title">*/
/*                         <h3>Education</h3>*/
/*                     </div>*/
/*                     <div class="resume">*/
/*                         <ul class="timeline">*/
/*                             <li>*/
/*                                 <div class="posted-date">*/
/*                                     <span class="month">2007-2011</span>*/
/*                                 </div><!-- /posted-date -->*/
/* */
/*                                 <div class="timeline-panel wow fadeInUp">*/
/*                                     <div class="timeline-content">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h3>Bachelor degree certificate</h3>*/
/*                                             <span>BA(Hons) in UI Engineering, Arts University, Pabna, USA</span>*/
/*                                         </div><!-- /timeline-heading -->*/
/* */
/*                                         <div class="timeline-body">*/
/*                                             <p>I have completed UI Engineering degree from ABC University, Boston, USA at feel the charm of existence in this spot, which was created for the.</p>*/
/*                                         </div><!-- /timeline-body -->*/
/*                                     </div> <!-- /timeline-content -->*/
/*                                 </div><!-- /timeline-panel -->*/
/*                             </li>*/
/* */
/*                             <li class="timeline-inverted">*/
/*                                 <div class="posted-date">*/
/*                                     <span class="month">2004-2006</span>*/
/*                                 </div><!-- /posted-date -->*/
/* */
/*                                 <div class="timeline-panel wow fadeInUp">*/
/*                                     <div class="timeline-content">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h3>Higher Secondary certificate</h3>*/
/*                                             <span>Typography Arts, FA College, New York, USA</span>*/
/*                                         </div><!-- /timeline-heading -->*/
/* */
/*                                         <div class="timeline-body">*/
/*                                             <p>From this college of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>*/
/*                                         </div><!-- /timeline-body -->*/
/*                                     </div> <!-- /timeline-content -->*/
/*                                 </div> <!-- /timeline-panel -->*/
/*                             </li>*/
/* */
/*                             <li>*/
/*                                 <div class="posted-date">*/
/*                                   <span class="month">2000-2003</span>*/
/*                                 </div><!-- /posted-date -->*/
/* */
/*                                 <div class="timeline-panel wow fadeInUp">*/
/*                                     <div class="timeline-content">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h3>Secondary school certificate</h3>*/
/*                                             <span>Creative Arts, Julius Jr. school, USA</span>*/
/*                                         </div><!-- /timeline-heading -->*/
/* */
/*                                         <div class="timeline-body">*/
/*                                             <p>I was awesome at arts, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy.</p>*/
/*                                         </div><!-- /timeline-body -->*/
/*                                     </div> <!-- /timeline-content -->*/
/*                                 </div><!-- /timeline-panel -->*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /row -->*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="resume-title">*/
/*                         <h3>Experience</h3>*/
/*                     </div>*/
/*                     <div class="resume">*/
/*                         <ul class="timeline">*/
/*                             <li class="timeline-inverted">*/
/*                                 <div class="posted-date">*/
/*                                   <span class="month">2011-2013</span>*/
/*                                 </div><!-- /posted-date -->*/
/* */
/*                                 <div class="timeline-panel wow fadeInUp">*/
/*                                     <div class="timeline-content">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h3>Junior ui designer</h3>*/
/*                                             <span>XYZ Design Home, One Street, Boston</span>*/
/*                                         </div><!-- /timeline-heading -->*/
/* */
/*                                         <div class="timeline-body">*/
/*                                             <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>*/
/*                                         </div><!-- /timeline-body -->*/
/*                                     </div> <!-- /timeline-content -->*/
/*                                 </div> <!-- /timeline-panel -->*/
/*                             </li>*/
/* */
/*                             <li>*/
/*                                 <div class="posted-date">*/
/*                                   <span class="month">2013-2015</span>*/
/*                                 </div><!-- /posted-date -->*/
/* */
/*                                 <div class="timeline-panel wow fadeInUp">*/
/*                                     <div class="timeline-content">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h3>Lead UX Consultant</h3>*/
/*                                             <span>Lucky8 Designing Firm, California</span>*/
/*                                         </div><!-- /timeline-heading -->*/
/* */
/*                                         <div class="timeline-body">*/
/*                                             <p>Completely provide access to seamless manufactured products before functionalized synergy. Progressively redefine competitive value through.</p>*/
/*                                         </div><!-- /timeline-body -->*/
/*                                     </div> <!-- /timeline-content -->*/
/*                                 </div><!-- /timeline-panel -->*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /row -->*/
/*         </div><!-- /.container -->*/
/*     </section><!-- End Resume Section -->*/
/* */
/* */
/*     <!-- Skills Section -->*/
/*     <section id="skills" class="skills-section section-padding">*/
/*       <div class="container">*/
/*         <h2 class="section-title wow fadeInUp">Skills</h2>*/
/* */
/*         <div class="row">*/
/*           <div class="col-md-6">*/
/*             <div class="skill-progress">*/
/*               <div class="skill-title"><h3>UX Design</h3></div> */
/*               <div class="progress">*/
/*                 <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" ><span>95%</span>*/
/*                 </div>*/
/*               </div><!-- /.progress -->*/
/*             </div><!-- /.skill-progress -->*/
/* */
/*             <div class="skill-progress">*/
/*               <div class="skill-title"><h3>Visual Design</h3></div> */
/*               <div class="progress">*/
/*                 <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" ><span>80%</span>*/
/*                 </div>*/
/*               </div><!-- /.progress -->*/
/*             </div><!-- /.skill-progress -->*/
/*             <div class="skill-progress">*/
/*               <div class="skill-title"><h3>Business Design</h3></div>  */
/*               <div class="progress">*/
/*                 <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><span>75%</span>*/
/*                 </div>*/
/*               </div><!-- /.progress -->*/
/*             </div><!-- /.skill-progress -->*/
/*           </div><!-- /.col-md-6 -->*/
/* */
/*           <div class="col-md-6">*/
/*             <div class="skill-progress">*/
/*               <div class="skill-title"><h3>Branding Design</h3></div> */
/*               <div class="progress">*/
/*                 <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" ><span>95%</span>*/
/*                 </div>*/
/*               </div><!-- /.progress -->*/
/*             </div><!-- /.skill-progress -->*/
/*             <div class="skill-progress">*/
/*               <div class="skill-title"><h3>Motion Graphic</h3></div> */
/*               <div class="progress">*/
/*                 <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" ><span>80%</span>*/
/*                 </div>*/
/*               </div><!-- /.progress -->*/
/*             </div><!-- /.skill-progress -->*/
/*             <div class="skill-progress">*/
/*               <div class="skill-title"><h3>Flyers Designing</h3></div>  */
/*               <div class="progress">*/
/*                 <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><span>75%</span>*/
/*                 </div>*/
/*               </div><!-- /.progress -->*/
/*             </div><!-- /.skill-progress -->*/
/*           </div><!-- /.col-md-6 -->*/
/*         </div><!-- /.row -->*/
/* */
/*         <div class="skill-chart text-center">*/
/*           <h3>More skills</h3>*/
/*         </div>*/
/*           */
/*         <div class="row more-skill text-center">*/
/*           <div class="col-xs-12 col-sm-4 col-md-2">*/
/*               <div class="chart" data-percent="91" data-color="e74c3c">*/
/*                     <span class="percent"></span>*/
/*                     <div class="chart-text">*/
/*                       <span>leadership</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-4 col-md-2">*/
/*               <div class="chart" data-percent="23" data-color="2ecc71">*/
/*                     <span class="percent"></span>*/
/*                     <div class="chart-text">*/
/*                       <span>Creativity</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-4 col-md-2">*/
/*               <div class="chart" data-percent="68" data-color="3498db">*/
/*                     <span class="percent"></span>*/
/*                     <div class="chart-text">*/
/*                       <span>Management</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-4 col-md-2">*/
/*               <div class="chart" data-percent="68" data-color="3498db">*/
/*                     <span class="percent"></span>*/
/*                     <div class="chart-text">*/
/*                       <span>Branding</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-4 col-md-2">*/
/*               <div class="chart" data-percent="68" data-color="3498db">*/
/*                     <span class="percent"></span>*/
/*                     <div class="chart-text">*/
/*                       <span>Marketing</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-4 col-md-2">*/
/*               <div class="chart" data-percent="68" data-color="3498db">*/
/*                     <span class="percent"></span>*/
/*                     <div class="chart-text">*/
/*                       <span>Motivation</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*       </div><!-- /.container -->*/
/*     </section><!-- End Skills Section -->*/
/* */
/* */
/*     <!-- Works Section -->*/
/*     <section id="works" class="works-section section-padding">*/
/*       <div class="container">*/
/*         <h2 class="section-title wow fadeInUp">Works</h2>*/
/* */
/*         <ul class="list-inline" id="filter">*/
/*             <li><a class="active" data-group="all">All</a></li>*/
/*             <li><a data-group="design">Design</a></li>*/
/*             <li><a data-group="web">Web</a></li>*/
/*             <li><a data-group="interface">Interface</a></li>*/
/*             <li><a data-group="identety">Identity</a></li>*/
/*         </ul>*/
/* */
/*         <div class="row">*/
/*           <div id="grid">*/
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "identety", "interface"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-1.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-1.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/* */
/* */
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "identety", "web"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-2.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-2.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "interface"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-3.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-3.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "identety", "design"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-4.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-4.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "identety", "design"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-5.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-5.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "identety", "design"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-6.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-6.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "identety", "web"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-7.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-7.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/*             <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "design"]'>*/
/*               <div class="portfolio-bg">*/
/*                 <div class="portfolio">*/
/*                   <div class="tt-overlay"></div>*/
/*                   <div class="links">*/
/*                     <a class="image-link" href="assets/images/works/portfolio-8.jpg"><i class="fa fa-search-plus"></i></a>*/
/*                     <a href="#"><i class="fa fa-link"></i></a>                          */
/*                   </div><!-- /.links -->*/
/*                   <img src="assets/images/works/portfolio-8.jpg" alt="image"> */
/*                   <div class="portfolio-info">*/
/*                     <h3>Portfolio Title</h3>*/
/*                   </div><!-- /.portfolio-info -->*/
/*                 </div><!-- /.portfolio -->*/
/*               </div><!-- /.portfolio-bg -->*/
/*             </div><!-- /.portfolio-item -->*/
/*           </div><!-- /#grid -->*/
/*         </div><!-- /.row -->*/
/*       </div><!-- /.container -->*/
/*     </section><!-- End Works Section -->*/
/* */
/* */
/*     <!-- Facts Section -->*/
/*     <section id="facts" class="facts-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">*/
/*       <div class="tt-overlay-bg">*/
/*         <div class="container">*/
/*           <div class="row">*/
/*             <div class="col-md-12">*/
/*               <div class="count-wrap">*/
/*                 <div class="col-sm-3 col-xs-6">*/
/*                   <i class="fa fa-flask"></i>*/
/*                   <h3 class="timer">7</h3>*/
/*                   <p>Years of Experience</p>*/
/*                 </div>*/
/*                 <div class="col-sm-3 col-xs-6"> */
/*                   <i class="fa fa-thumbs-up"></i>*/
/*                   <h3 class="timer">651</h3>                */
/*                   <p>Projects Done</p>*/
/*                 </div>*/
/*                 <div class="col-sm-3 col-xs-6">*/
/*                   <i class="fa fa-users"></i>*/
/*                   <h3 class="timer">251</h3> */
/*                   <p>Happy Clients</p>*/
/*                 </div>*/
/*                 <div class="col-sm-3 col-xs-6">*/
/*                   <i class="fa fa-trophy"></i>*/
/*                   <h3 class="timer">5</h3> */
/*                   <p>Awards Won</p>*/
/*                 </div>*/
/*               </div><!-- /count-wrap -->*/
/*             </div><!-- /.col-md-12 -->*/
/*           </div><!-- /.row -->*/
/*         </div><!-- /.container -->*/
/*       </div>*/
/*     </section> <!-- End Facts Section -->*/
/* */
/* */
/*     <!-- Blog Section -->*/
/*     <section id="blog" class="latest-blog-section section-padding">*/
/*       <div class="container">*/
/*         <h2 class="section-title wow fadeInUp">Latest Post</h2>*/
/* */
/*         <div class="row">*/
/*           <div class="col-sm-4">*/
/*             <article class="blog-post-wrapper">*/
/*               <div class="figure">    */
/*                 <div class="post-thumbnail">*/
/*                   <a href="#"><img src="assets/images/blog/01.jpg" class="img-responsive " alt=""></a>*/
/*                 </div>*/
/*                   <i class="fa fa-file-photo-o"></i>*/
/*               </div><!-- /.figure -->*/
/*               <header class="entry-header">*/
/*                 <div class="post-meta">*/
/*                   <span class="the-category"> */
/*                     <a href="#">Print Design,</a> <a href="#">Photoshop</a>*/
/*                   </span>*/
/*                 </div>*/
/*                 <h2 class="entry-title"><a href="blog-single.html" rel="">Common fonts used for newspaper template design</a></h2>*/
/*                 <hr>*/
/*                 <div class="entry-meta">*/
/*                   <ul class="list-inline">*/
/*                     <li>*/
/*                       <span class="the-author">*/
/*                         <a href="#">Admin</a> */
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-time">*/
/*                         <a href="#">06 Jan 2015</a>*/
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-share">*/
/*                         <a href="#" title="share">30</a>*/
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-comments">*/
/*                         <a href="#" title="">05</a>*/
/*                       </span>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div><!-- .entry-meta -->*/
/*               </header><!-- .entry-header -->*/
/*             </article>*/
/*           </div><!-- /.col-sm-4 -->*/
/*           <div class="col-sm-4">*/
/*             <article class="blog-post-wrapper">*/
/*               <div class="figure">    */
/*                 <div class="post-thumbnail">*/
/*                   <a href="#"><img src="assets/images/blog/02.jpg" class="img-responsive " alt=""></a>*/
/*                 </div>*/
/*                   <i class="fa fa-file-video-o"></i>*/
/*               </div><!-- /.figure -->*/
/*               <header class="entry-header">*/
/*                 <div class="post-meta">*/
/*                   <span class="the-category"> */
/*                     <a href="#">Print Design,</a> <a href="#">Photoshop</a>*/
/*                   </span>*/
/*                 </div>*/
/*                 <h2 class="entry-title"><a href="blog-single.html" rel="">What is the style of font called that is typically</a></h2>*/
/*                 <hr>*/
/*                 <div class="entry-meta">*/
/*                   <ul class="list-inline">*/
/*                     <li>*/
/*                       <span class="the-author">*/
/*                         <a href="#">Admin</a> */
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-time">*/
/*                         <a href="#">06 Jan 2015</a>*/
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-share">*/
/*                         <a href="#" title="share">30</a>*/
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-comments">*/
/*                         <a href="#" title="">05</a>*/
/*                       </span>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div><!-- .entry-meta -->*/
/*               </header><!-- .entry-header -->*/
/*             </article>*/
/*           </div><!-- /.col-sm-4 -->*/
/*           <div class="col-sm-4">*/
/*             <article class="blog-post-wrapper">*/
/*               <div class="figure">    */
/*                 <div class="post-thumbnail">*/
/*                   <a href="#"><img src="assets/images/blog/03.jpg" class="img-responsive " alt=""></a>*/
/*                 </div>*/
/*                   <i class="fa fa-quote-left"></i>*/
/*               </div><!-- /.figure -->*/
/*               <header class="entry-header">*/
/*                 <div class="post-meta">*/
/*                   <span class="the-category"> */
/*                     <a href="#">Print Design,</a> <a href="#">Photoshop</a>*/
/*                   </span>*/
/*                 </div>*/
/*                 <h2 class="entry-title"><a href="blog-single.html" rel="">How to create a print ready brochure using photoshop</a></h2>*/
/*                 <hr>*/
/*                 <div class="entry-meta">*/
/*                   <ul class="list-inline">*/
/*                     <li>*/
/*                       <span class="the-author">*/
/*                         <a href="#">Admin</a> */
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-time">*/
/*                         <a href="#">06 Jan 2015</a>*/
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-share">*/
/*                         <a href="#" title="share">30</a>*/
/*                       </span>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="the-comments">*/
/*                         <a href="#" title="">05</a>*/
/*                       </span>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div><!-- .entry-meta -->*/
/*               </header><!-- .entry-header -->*/
/*             </article>*/
/*           </div><!-- /.col-md-4 -->*/
/*         </div><!-- /.row -->*/
/*         <div class="blog-more text-center">*/
/*           <a href="#" class="btn btn-primary">View More</a>*/
/*         </div>*/
/*         */
/*       </div><!-- /.container -->*/
/*     </section><!-- End Blog Section -->*/
/* */
/* */
/*     <!-- Hire Section -->*/
/*     <section class="hire-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">*/
/*       <div class="hire-section-bg">*/
/*         <div class="container">*/
/*           <div class="row">*/
/*             <div class="col-md-12">*/
/*               <h2>I'm available for freelance project</h2>*/
/*               <a href="#" class="btn btn-default">Get Hired</a>*/
/*             </div><!-- /.col-md-12 -->*/
/*           </div><!-- /.row -->*/
/*         </div><!-- /.container -->*/
/*       </div><!-- /.hire-section-bg -->*/
/*     </section><!-- End Hire Section -->*/
/* */
/* */
/* */
/*     <!-- Contact Section -->*/
/*     <section id="contact" class="contact-section section-padding">*/
/*       <div class="container">*/
/*         <h2 class="section-title wow fadeInUp">Get in touch</h2>*/
/* */
/*         <div class="row">*/
/*           <div class="col-md-6">*/
/*             <div class="contact-form">*/
/*               <strong>Send me a message</strong>*/
/*               <form name="contact-form" method="post" action="assets/php/sendemail.php">*/
/*                 <div class="form-group">*/
/*                   <label for="InputName1">Name</label>*/
/*                   <input type="text" name="name" class="form-control" id="InputName1" required="">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label for="InputEmail1">Email</label>*/
/*                   <input type="email" name="email" class="form-control" id="InputEmail1" required="">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label for="InputSubject">Subject</label>*/
/*                   <input type="text" name="subject" class="form-control" id="InputSubject">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label for="InputTextarea">Message</label>*/
/*                   <textarea name="message" class="form-control" id="InputTextarea" rows="5" required=""></textarea>*/
/*                 </div>*/
/* */
/*                 <button type="submit" name="submit" class="btn btn-primary">Send Message</button>*/
/*               </form>*/
/*             </div>*/
/*           </div><!-- /.col-md-6 -->*/
/* */
/*           <div class="col-md-6">*/
/*             <div class="row center-xs">*/
/*               <div class="col-sm-6">*/
/*                 <i class="fa fa-map-marker"></i>*/
/*                 <address>*/
/*                   <strong>Address/Street</strong>*/
/*                   239/2 Awesome Street,<br>*/
/*                   Boston, USA<br>*/
/*                 </address>*/
/*               </div>*/
/* */
/*               <div class="col-sm-6">*/
/*                 <i class="fa fa-mobile"></i>*/
/*                 <div class="contact-number">*/
/*                   <strong>Phone Number</strong>*/
/*                   (001) 0123 111222<br>*/
/*                   (001) 0123 333444*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*           <div class="row">*/
/*             <div class="col-sm-12">*/
/*               <div class="location-map">*/
/*                 <div id="mapCanvas" class="map-canvas"></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           </div>*/
/*         </div><!-- /.row -->*/
/*       </div><!-- /.container -->*/
/*     </section><!-- End Contact Section -->*/
/* */
/* */
/* 	<!-- Footer Section -->*/
/*     <footer class="footer-wrapper">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-md-12">*/
/*             <div class="copyright text-center">*/
/*               <p>&copy; TrendyTheme 2015. All rights reserved.</p>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </footer><!-- End Footer Section -->*/
/* */
/* */
/* 	<!-- Scroll-up -->*/
/* 	<div class="scroll-up">*/
/* 		<a href="#home"><i class="fa fa-angle-up"></i></a>*/
/* 	</div>*/
/* */
/* */
/* */
/* {% endblock body %}*/