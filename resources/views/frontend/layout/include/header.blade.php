<header class="site-header header-style-2 mobile-sider-drawer-menu header-full-width">
          <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">  

            <div class="container clearfix"> 
                <!--Logo section start-->
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                      <a href="index.html">
                      <img src="{{asset('frontend/images/logo_services.jpg')}}" alt="">
                      </a>
                    </div>
                </div>  
                <!--Logo section End-->

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button> 
<div class=""style="margin-left: 60px;">
                    
                </div>
                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-start">

                    <ul class=" nav navbar-nav">
                      <li class="has-child current-menu-item"><a href="{{url('/')}}">Home</a>
                         
                      </li>

                      <li class="has-child">
                          <a href="javascript:;">About Us</a>
                                                        
                      </li>

                      

                      <li class="has-child"><a href="{{url('/all-category')}}">Our Services</a>
                                                        
                      </li>
                      <li><a href="contact-us.html">Packages</a></li>  

                      <li><a href="contact-us.html">Contact</a></li>  
                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <!-- <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">HTML</a></li>
                                      <li><a href="#">CSS</a></li>
                                      <li><a href="#">JavaScript</a></li>
                                    </ul>
                                  </div> -->
                                <!--Login-->
                                <button type="button" class="site-button aon-btn-login" id="Customer" data-toggle="modal" data-target="#login-signup-model">
                                    <i class="fa fa-user"></i> Customer
                                </button>
                                <button type="button" id="Associate"class="site-button aon-btn-login" data-toggle="modal" data-target="#login-signup-model">
                                    <i class="fa fa-user"></i>Associate
                                </button>
                                <!--Sign up-->
                                <!-- <a href="mc-profile.html" class="site-button aon-btn-signup m-l20">
                                    <i class="fa fa-plus"></i> Add Listing
                                </a> -->
                            </div>
                                
                            </div>                             
            </div>    

            </div>
          </div>
        </header>