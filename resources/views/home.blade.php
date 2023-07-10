@extends('layouts.app')

@section('content')
 <!-- Header Section-->
<header class="">
        <div class="mask  d-flex justify-content-center align-items-start bg-dark" style="background-color: rgba(0, 0, 0, 0.8); height:60vh;" >
            <div class=" container rounded-2 p-4 " style="background-color: rgba(0, 0, 0, 0.2);" >
                <div class="row gx-5 align-items-center">
                    <div class="col-md-12">
                        <!-- Header text content-->
                        <div class="text-white" style="font-family: 'Crimson Text', serif;" data-aos="fade-right"  >
                            <div class="fs-3 fw-light " ><h3>We invest in people with big dreams & the drive to make them come true. </h3></div>
                                        <h1 class="fw-bolder mb-5"><span class="text-gradient d-inline">We contribute capital, global networks and deep expertise.</span></h1>
                                        <h3 class="fs-4 fw-light ">We help make it happen.</h3>
                                        <div class="fs-4 fw-light ">Let's talk.</div>
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start my-3">
                                            <a class="btn btn-block px-5 py-3 me-sm-3 fs-6 fw-bolder " onMouseOver="this.style.background='#9AB973', this.style.color='#ffff'"
                                            onMouseOut="this.style.background='#0000', this.style.color='#9AB973'" style="width: 200px !important; border-radius:40px; border-color:#9AB973; color:#ffff;" href="#contact_us">Contact Us</a>
                                        </div>
                        </div>
                    </div>
                    <!-- Header Image content-->
                    {{-- <div class="col-md-7">
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <img class="img-fluid rounded-2 my-5" src="img/bg-callout.jpg" alt="..." />
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
     
</header>
 <!-- About Section-->
 <section class="bg-light py-5" id="about_us" style="font-family:'Lato', serif;">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <!-- About us and Profile Text -->
            <div class="col-lg-6" data-aos="fade-down">
                <div class="text-sm-start my-5" >
                    <h2 class="display-5 fw-bolder color-secondary" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline"  >About Us</span></h2>
                    <p class="lead fw-light " >We back outstanding entrepreneurs that want to find, acquire and operate small and medium-sized businesses. </p>
                    <p class=" " style="">In addition to capital, we offer access to a global network and the strategic insights that come from a wealth of transactional 
                                                                    and operating experience. </p>
                    <p class="" >Finally, we are very deliberate about social responsibility. Businesses are more resilient when they are actively creating positive 
                                                                    impact in their communities, contributing to their local 
                                                                    economies with quality employment and managing their environmental footprint responsibly.</p>

                </div>
            </div>
            <!--About section images -->
            <div class="col-lg-6 " style="background-image:url('img/scribble.svg');">

            </div>

        </div>
    </div>
</section>

 <!-- Team Section-->
<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <!--Our Teams -->
            <div class="col-lg-12 mt-4 row align-items-start justify-content-start">
                <div class="col-lg-6  border-bottom border-secondary border-5" data-aos="fade-down">
                    <h3 class="fw-bolder" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline">Our Teams</span></h3>
                </div>
                <div class="col-lg-6">
                    <div class=" my-5 border-5   " data-aos="fade-down">
                        {{-- <h3 class=" fw-bolder"><span class="text-gradient d-inline">Our Teams</span></h3> --}}
                        <!-- Images Profiles Cards-->
                        <div class="row d-flex flex-wrap justify-content-around g-10  " style="gap:10px;" >
                            <div class="bg-light pt-2  shadow-sm border  col-5 col-sm-4 col-md-4 col-lg-4 text-center" >
                                <img class="card-img-top" src="img/bg-callout.jpg" alt="Card image cap">
                                <div class="align-left text-captialize py-4  ">
                                    <h5 class="fw-bolder">Employee Name</h5>
                                    <p>Some decription about the employee</p>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                          </svg>
                                        </a>
                                </div>
                            </div>
                            <div class="bg-light pt-2  shadow-sm border  col-5 col-sm-4 col-md-4 col-lg-4 text-center" >
                                <img class="card-img-top" src="img/bg-callout.jpg" alt="Card image cap">
                                <div class="align-left text-captialize py-4  ">
                                    <h5 class="fw-bolder">Employee Name</h5>
                                    <p>Some decription about the employee</p>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                          </svg>
                                        </a>
                                </div>
                            </div>
                            <div class="bg-light pt-2  shadow-sm border  col-5 col-sm-4 col-md-4 col-lg-4 text-center" >
                                <img class="card-img-top" src="img/bg-callout.jpg" alt="Card image cap">
                                <div class="align-left text-captialize py-4  ">
                                    <h5 class="fw-bolder">Employee Name</h5>
                                    <p>Some decription about the employee</p>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                          </svg>
                                        </a>
                                </div>
                            </div>
                            <div class="bg-light pt-2  shadow-sm border  col-5 col-sm-4 col-md-4 col-lg-4 text-center" >
                                <img class="card-img-top" src="img/bg-callout.jpg" alt="Card image cap">
                                <div class="align-left text-captialize py-4  ">
                                    <h5 class="fw-bolder">Employee Name</h5>
                                    <p>Some decription about the employee</p>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                          </svg>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Strategy and Portfolion Section-->
 <section class="" id="strategy_portfolio" style="background-color: #ededed; font-family:'Lato', serif;">
    <div class="container px-5 py-5">
        <div class="row gx-5 justify-content-between">
            <div class="col-xxl-12 row border-end border-5 border-secondary" style="">
                <div class="" data-aos="fade-down ">
                    <h2 class="display-5 fw-bolder  text-sm-start" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline" >Strategy & Portfolio</span></h2>
                    <p class=" fw-light mb-4">With those entrepreneurs, we invest in businesses which meet the guidelines of the Search Fund model including 
                                                    having an established operating track record, high-quality revenue, 
                                                    adequate financial performance and the ability to create value through revenue growth, operational efficiencies and management changes.</p>
                    <p class="fw-light">We also want the business to have motivated employees who are highly valued by their customers, respect the environment, are respected by their 
                                            regulators and are welcomed by the communities in which they operate. </p>
                    <p class="fw-light">We do not invest on a stand-alone basis in distressed situations or management turn-arounds. However, some of our portfolio companies 
                                        could consider those investments as potential bolt-ons.</p>
                </div>
            </div>
            <div class="d-flex justify-content-between col-xxl-12 my-4 row border-end border-5 border-secondary" style="">
                <div class="col-lg-3  py-4 ">
                    <h3 class=" fw-bolder border-5 text-sm-start text-capitalize" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline" >Our investments</span></h3>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-sm-2  row gx-2">
                    <div class="col-4 shadow border  ">
                        <a href="https://memphiscapital.partners/" target="#" > 
                        <img class="card-img-top " src="img/MemphisCapitalLogoBW.png" alt="">
                        </a>
                    </div> 
                    <div class="col-4 shadow border"><a href="https://www.vonzeocapital.com/" target="#"> <img class="card-img-top" src="img/VONZEO_FINAL_LOGO.png" alt=""></a></div>
                    <div class="col-4 shadow border"><a href="" target="#"> <img class="card-img-top" src="img/bg-callout.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- News and Insights Section-->
 <section class="" id="news_insight"  style="background-color: #ffffff; font-family:'Lato', serif;">
    <div class="container px-5 pt-5">
        <div class="row justify-content-between ">
            <div class="col-xxl-8 row border-start border-5 border-secondary" style="">
                <div class="col-md-12 col-lg-12" data-aos="fade-down ">
                    <h2 class="display-5 fw-bolder  text-sm-start" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline" >News & Insights</span></h2>
                    <p class=" fw-light mb-4">If you are interested in learning more, you are welcome to visit our blog where we share some of our news and insights. You can find it at XXXXXXX.</p>
                    <p class="fw-light">We have also collected a number of links below which we thoughts are quite interesting. Let us know if there are any other resources that you know about 
                                    which we should include (or that you wish existed and we would be happy to see whether we can make ourselves). </p>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Search Funds Asset Class Return Section-->
 <section class=""  style="background-color: #ffffff; font-family:'Lato', serif;">
    <div class="d-flex flex-wrap col-sm-12 col-md-12 col-xxl-12 justify-content-between container px-5 py-5 ">
        <div class="col-12  col-md-5 col-xxl-5 pt-4 ">
            <div class=" col-lg-12">
                <h4 class="fw-bolder text-sm-start text-capitalize" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline" >Search fund asset class returns</span></h4>
                <div>
                    <a class="d-flex justify-content-between py-4 border-bottom border-2 border-secondary" style="color:black; text-decoration:none;" onMouseOver="this.style.background='#ffffff', this.style.color='#9AB973'"
                        onMouseOut="this.style.background='#ffffff', this.style.color='#000000'" style="background-color: #ffffff; text-decoration:none;" href="https://www.gsb.stanford.edu/gsb-box/route-download/618926">
                        <h4>2022 Stanford Study</h4>
                        <h4 class="fw-bolder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9AB973" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg></h4>
                    </a>
                </div>
                <div>
                    <a class="d-flex justify-content-between py-4 border-bottom border-2 border-secondary" style="color:black; text-decoration:none;" onMouseOver="this.style.background='#ffffff', this.style.color='#9AB973'"
                        onMouseOut="this.style.background='#ffffff', this.style.color='#000000'" style="background-color: #ffffff; text-decoration:none;" href="http://apply.iese.edu/695756457788850999283911/?_gl=1*1qp215f*_ga*NTQ1NzI1Nzg2LjE2NjU0MjM0MzE.*_ga_NGY5Z5ZR90*MTY2NjA3MzU5MC41LjEuMTY2NjA3MzYxMS4wLjAuMA..*_ga_JXBD129HST*MTY2NjA3MzU5MC4zLjAuMTY2NjA3MzU5MC4wLjAuMA..">
                        <h4>2022 IESE Study</h4>
                        <h4 class="fw-bolder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9AB973" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg></h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-xxl-5 pt-4 ">
            <div class="col-lg-12">
                <h4 class="fw-bolder text-sm-start text-capitalize" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline" >Search fund primer</span></h4>
                <div>
                    <a class="d-flex justify-content-between py-4 border-bottom border-2 border-secondary" style="color:black; text-decoration:none;" onMouseOver="this.style.background='#ffffff', this.style.color='#9AB973'"
                        onMouseOut="this.style.background='#ffffff', this.style.color='#000000'" style="background-color: #ffffff; text-decoration:none;" href="https://www.gsb.stanford.edu/experience/about/centers-institutes/ces/research/search-funds/primer ">
                        <h4>Stanford Search Fund Primer</h4>
                        <h4 class="fw-bolder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9AB973" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg></h4>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</section>
 <!-- Podcast  Section-->
 <section class="bg-light py-5" id="podcast" style="font-family:'Lato', serif;">
    <div class="container px-5">
        <div class="row  gx-5 ">
            <!-- Podcast us and Profile Text -->
            <div class="text-sm-start " >
                <h2 class="display-5 fw-bolder color-secondary" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline"  >Podcast</span></h2>
            </div>
            <div class="col-lg-12 flex-wrap d-flex gap-1 justify-content-between" data-aos="fade-down">
                <div class="" style="">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                          <h5 class="card-title fw-bolder">Think Like an Owner <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                            <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                          </svg></h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="https://podcasts.apple.com/us/podcast/think-like-an-owner/id1445929750" class="btn btn-secondary" style="border-radius:40px; border-color:#9AB973; color:#ffff;">Play</a>
                        </div>
                        
                      </div>
                </div>
                <div class="" style="">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                          <h5 class="card-title fw-bolder">Entrepreneurship Through Acquisition <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                            <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                          </svg></h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="https://podcasts.apple.com/us/podcast/entrepreneurship-through-acquisition/id1149510247" class="btn btn-secondary" style="border-radius:40px; border-color:#9AB973; color:#ffff;">Play</a>
                        </div>
                      </div>
                </div>
                <div class="" style="">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                          <h5 class="card-title fw-bolder">Entrepreneurship Through Acquisition <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                            <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                          </svg></h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="https://podcasts.apple.com/us/podcast/entrepreneurship-through-acquisition/id1149510247" class="btn btn-secondary" style="border-radius:40px; border-color:#9AB973; color:#ffff;">Play</a>
                        </div>
                      </div>
                </div>
                
            </div>
            <!--Podcast section images -->
           

        </div>
    </div>
</section>
 <!-- Contact Us Section-->
 <section class="bg-dark py-5" id="contact_us">
    <div class="container px-5  text-white">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder" style="font-family:'Crimson Text', serif;"><span class="text-gradient d-inline" >Contact Us</span></h2>
                    <p class="lead fw-light mb-4">For more information or to speak with one of our team members, please contact us at:</p>
                    <div class="d-flex justify-content-center fs-5 gap-4 text-white" style="font-family:'Lato', serif;">
                        <a  style="color:#ffff; text-decoration:none;" href = "mailto: info@munxot.com">Email: info@munxot.com</i></a><br>
                        <a style="color:#ffff; text-decoration:none;" href="tel:123-456-7890">123-456-7890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
