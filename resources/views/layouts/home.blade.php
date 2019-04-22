
        @extends('layouts.template')

        @section('content')

 <!--
        ===================
           Home
        ===================
        -->
        <section class="mh-home image-bg home-2-img" id="mh-home">
            <div class="img-foverlay img-color-overlay">
                <div class="container">
                    <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <span>Selamat Datang</span>
                                </div>
                                
                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Application & Security Laboratory</h2>
                                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">#BeSmartBeSecure</h4>
                                
                                <ul>
                                   
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>37, Gedung O ruang O301, Fakultas Teknik Elektro, Telkom University</address></li>
                                </ul>
                                
                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><i class="fab fa-line"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    <img src="/source/assets/images/ANS_2.png" alt=""  class="img-flgisd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  

        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="/source/assets/images/ab-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner">
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">Tentang Lab</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Laboratorium Application and Security merupakan laboratorium di bawah program diploma Teknik Telekomunikasi, Fakultas Teknik Elektro, yang termasuk kelompok keahlian bidang Jaringan dan Multimedia. Laboratorium Application and Security memiliki enam divisi, yaitu Intrussion Detection System division, Voice Over Internet Protocol Division, WEB Division, GIS Division, Game Technology Divi, dan Interactive Video Division.</p>
                            <p>Berikut adalah informasi lengkap mengenai Laboratorium Application and Security:</p>
<!--                             <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    <li><span>php</span></li>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>php</span></li>
                                    <li><span>wordpress</span></li>
                                    <li><span>React</span></li>
                                    <li><span>Javascript</span></li>
                                </ul>
                            </div> -->
                            <a href="https://hmtt-telco.com/wp-content/uploads/2018/05/AS.pdf" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod Pdf <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           SERVICE
        ===================
        -->
        <section class="mh-service">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h2>Kegiatan Kami</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <i class="fa fa-bullseye purple-color"></i>
                            <h3>Study Group</h3>
                            <p>
                                Study Group dilaksanakan selama 10 minggu dengan pertemuan seminggu
                                dua kali pertemuan. Setiap pertemuannya membahas materi yang berbeda beda
                                pada semua divisi.

                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <i class="fa fa-code iron-color"></i>
                            <h3>Riset Group</h3>
                            <p>
                                Membuat dan Mengembangkan Suatu Project
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <i class="fa fa-object-ungroup sky-color"></i>
                            <h3>Asisten Praktikum</h3>
                            <p>
                                Sebagai Asisten Praktikum pada Matakuliah Keamanan Jaringan

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

           <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>Divisi</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                
                                <li data-filter=".ids" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Divisi IDS</span></li>
                                <li data-filter=".voip" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Divisi VOIP</span></li>
                                <li data-filter=".web" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Divisi WEB</span></li>
                                <li data-filter=".gis" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Divisi GIS</span></li>
                                <li data-filter=".gtech" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Divisi Game Technology</span>
                                <li data-filter=".iv" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Divisi Interactive Video</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">

                                <!-- seksi ids -->


                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ids">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                    </figure>
                                </div>
                               
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ids">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/ids.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Intrusion Data System</h5>
                                            <span class="sub-title">IDS</span>
                                            <a href="/source/assets/images/portfolio/g3.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ids">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">   
                                    </figure>
                                </div>

                                <!-- seksi ids -->

                                 <!-- seksi VOIP -->


                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 voip">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                    </figure>
                                </div>
                               
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 voip">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/voip_2.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Voice Over Ip</h5>
                                            <span class="sub-title">VOIP</span>
                                            <a href="/source/assets/images/portfolio/g3.png" data-fancybox data-src="#voip"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 voip">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">   
                                    </figure>
                                </div>

                                <!-- seksi VOIP -->

                                 <!-- seksi WEB -->


                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 web">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                    
                                    </figure>
                                </div>
                               
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 web">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/web_1.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">WEB</h5>
                                            <span class="sub-title">WEB</span>
                                            <a href="/source/assets/images/portfolio/g3.png" data-fancybox data-src="#web"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 web">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                        
                                    </figure>
                                </div>

                                <!-- seksi WEB -->

                                 <!-- seksi GIS -->


                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 gis">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                        
                                    </figure>
                                </div>
                               
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 gis">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/gis_2.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Geographic Information System</h5>
                                            <span class="sub-title">GIS</span>
                                            <a href="/source/assets/images/portfolio/g3.png" data-fancybox data-src="#gis"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 gis">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                        
                                    </figure>
                                </div>

                                <!-- seksi GIS -->
                                 <!-- seksi GAMETECH -->


                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 gtech">
                                   
                                </div>
                               
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 gtech">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/gamtech_2.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Game Tech</h5>
                                            <span class="sub-title">GameTech</span>
                                            <a href="/source/assets/images/portfolio/g3.png" data-fancybox data-src="#gt"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 gtech">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                       
                                    </figure>
                                </div>

                                <!-- seksi GAMETECH -->

                                 <!-- seksi Interactive Video -->


                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 iv">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                        
                                    </figure>
                                </div>
                               
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 iv">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/iv_2.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Interactive Video</h5>
                                            <span class="sub-title">IV</span>
                                            <a href="/source/assets/images/portfolio/g3.png" data-fancybox data-src="#iv"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 iv">
                                    <figure>
                                        <img src="/source/assets/images/portfolio/black.png" alt="img04">
                                    
                                    </figure>
                                </div>

                                <!-- seksi Interactive Video -->



                            
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>

            <div class="mh-portfolio-modal" id="mh">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Divisi IDS (Intrussion detection system)</h2>
                            <p> Intrusion Detection System(IDS) merupakan sebuah sistem yang dapat mendeteksi aktivitas yang mencurigakan pada sebuah sistem atau jaringan. Jika ditemukan aktivitas yang mencurigakan pada traffic jaringan maka IDS akan memberikan sebuah peringatan terhadap sistem atau administrator jaringan dan melakukan analisis dan mencari bukti dari percobaan penyusupan. </p>       
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="/source/assets/images/g3_ids.jpg" alt="" class="img-flgisd">
                                <p>-</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mh-portfolio-modal" id="voip">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Divisi VOIP (Voice Over Internet Protocol)</h2>
                            <p> Bergerak dalam pengembangan next generation network dan protocol
                                telekomunikasi </p>       
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="/source/assets/images/portfolio/voip_2.png" alt="" class="img-flgisd">
                                <p>-</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            

            <div class="mh-portfolio-modal" id="web">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Divisi WEB</h2>
                            <p> Dokumen yang ditulis dalam format HTML (Hyper Text Markup Language),
                            diakses melalui protocol untuk menyampaikan informasi dari server website kepada
                            client melalui browser. </p>       
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="/source/assets/images/portfolio/web_1.png" alt="" class="img-flgisd">
                                <p>-</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mh-portfolio-modal" id="gis">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Divisi Geographic Information System</h2>
                            <p> Membantu dalam perencanaan, pengawasan dan pengambilan keputusan dalam
                                pembuatan jaringan di dalam suatu area tertentu. </p>       
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="/source/assets/images/portfolio/gis_2.png" alt="" class="img-flgisd">
                                <p>-</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mh-portfolio-modal" id="gt">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Divisi Game Technology</h2>
                            <p> Berfokus mengembangkan teknologi dalam games dan game development </p>       
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="/source/assets/images/portfolio/gamtech_2.png" alt="" class="img-flgisd">
                                <p>-</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mh-portfolio-modal" id="iv">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Divisi Interactive Video</h2>
                            <p> Sebuah presentasi multimedia berbasis digitl yang dapat mengambil inputan user
                                        untuk melakukan beberapa aksi.
                                         </p>       
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="/source/assets/images/portfolio/iv_2.png" alt="" class="img-flgisd">
                                <p>-</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
  
        <!--
        ===================
           EXPERIENCES
        ===================
        -->
        <section class="mh-experince image-bg featured-img-one" id="mh-experience">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-education">
                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                                <div class="mh-education-deatils">
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a 
                                        page when looking at its layout. The point of using  Lorem Ipsum </p>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a 
                                        page when looking at its layout. The point of using  Lorem Ipsum </p>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a 
                                        page when looking at its layout. The point of using L orem Ipsum </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                 <h3>Work Experience</h3>
                                <div class="mh-experience-deatils">
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <h4>gis/UX Designer <a href="#">IronSketch</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
        <!--
        ===================
           FOOTER 1
        ===================
        -->
        <footer class="mh-footer" id="mh-contact">
            <div class="map-image image-bg">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Contact Me</h3>
                        </div>
                        <div class="col-sm-12 mh-footer-address">
                        
                        </div>
                        <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input name="name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <input name="name" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                    </div>
                                    <!-- Subject Button -->
                                    <div class="btn-form col-sm-12">
                                        <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="mh-map">
                                <div id="mh-map" class="shadow-1"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-left text-xs-center">
                                        <p>All right reserved Siful Islam @ 2018</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>     
     
        
    
       
        @endsection