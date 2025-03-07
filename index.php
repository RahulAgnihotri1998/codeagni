<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<style>
    .rts-hero__content h1:before {
        content: "";
        position: absolute;
        bottom: 0;
        right: 35%;
        height: 16px;
        width: 200px;
        background: #ffcc0000;
        z-index: -1;
    }

    .cloud-feature {
        min-height: 314px;
    }
    .cloud-feature:before {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    content: "";
    background: var(--banner-most-used-bg);
    opacity: 0;
    transition: var(--transition);
    border-radius: inherit;
    z-index: -1;
}
.card-feature:hover .icon img {
    height: 60px;
    filter: brightness(6.5);
}
.cloud-feature:hover .title {

    color: #fff;
    
}
</style>
<section class="rts-hero rts-hero__one banner-style-home-one">
    <div class="container">
        <div class="rts-hero__blur-area"></div>
        <div class="row align-items-end position-relative">
            <div class="col-lg-6">
                <div class="rts-hero__content w-550">
                    <!-- <h6 data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M23.9799 11.9805C23.9799 10.3545 23.2659 8.8205 22.0549 7.8565C22.1949 6.2345 21.6149 4.6455 20.4649 3.4945C19.3149 2.3455 17.7299 1.7635 16.1879 1.9395C14.1739 -0.616499 9.82288 -0.664499 7.85588 1.9045C4.62288 1.5205 1.51388 4.5645 1.93988 7.7725C-0.616121 9.7865 -0.665121 14.1375 1.90488 16.1055C1.76488 17.7275 2.34488 19.3165 3.49488 20.4675C4.64488 21.6165 6.23188 22.1985 7.77188 22.0225C9.78588 24.5785 14.1369 24.6265 16.1039 22.0575C17.7239 22.1965 19.3139 21.6185 20.4649 20.4675C21.6139 19.3175 22.1939 17.7275 22.0299 16.1905C23.2659 15.1425 23.9799 13.6085 23.9799 11.9825V11.9805ZM7.97988 8.9805C7.98588 7.6725 9.97388 7.6725 9.97988 8.9805C9.97388 10.2885 7.98588 10.2885 7.97988 8.9805ZM10.8119 15.5355C10.5039 15.9985 9.87888 16.1165 9.42488 15.8125C8.96488 15.5065 8.84088 14.8855 9.14788 14.4255L13.1479 8.4255C13.4539 7.9665 14.0739 7.8405 14.5349 8.1485C14.9949 8.4545 15.1189 9.0755 14.8119 9.5355L10.8119 15.5355ZM14.9799 15.9805C13.6719 15.9745 13.6719 13.9865 14.9799 13.9805C16.2879 13.9865 16.2879 15.9745 14.9799 15.9805Z"
                                fill="#FFC107" />
                        </svg>
                      
                    </h6> -->
                    <h1 class="heading" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                        Build Your Dream Website for Just ₹299/month!
                    </h1>
                    <p class="description" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">
                        Get a professionally designed website with all the features you need, updated and live, without
                        the hefty upfront costs.
                    </p>
                    <div class="rts-hero__content--group" data-sal="slide-down" data-sal-delay="500"
                        data-sal-duration="800">
                        <a class="primary__btn white__bg" href="contact-us.php">Contact Us <i
                                class="fa-solid fa-long-arrow-right"></i></a>
                        <a class="btn__zero plan__btn" href="contact-us.php">Plans &amp; Pricing <i
                                class="fa-solid fa-long-arrow-right"></i></a>
                    </div>
                    <p data-sal="slide-down" data-sal-delay="600" data-sal-duration="800">
                        <img alt="" src="assets/images/icon/dollar.svg" />Starting from <span>₹299</span> per month
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rts-hero__images position-relative">
                    <div class="rts-hero-main">
                        <div class="image-main">
                            <picture>
                                <!-- Mobile Image -->
                                <source
                                    srcset="https://codeagni.com/optimized_images/Untitled_design__3_-removebg-preview.webp"
                                    media="(max-width: 768px)" width="287" height="362">

                                <!-- Desktop Image -->
                                <source
                                    srcset="https://codeagni.com/optimized_images/Untitled_design__3_-removebg-preview.webp"
                                    media="(min-width: 769px)" width="393" height="495">

                                <!-- Default Fallback -->
                                <img src="https://codeagni.com/optimized_images/Untitled_design__3_-removebg-preview.webp"
                                    width="393" height="495" alt="Hero Image">
                            </picture>

                        </div>
                        <img alt="" class="hero-shape one" src="assets/images/banner/hosting.svg" />
                    </div>
                    <div class="rts-hero__images--shape">
                        <div class="one top-bottom">
                            <img alt="" src="assets/images/banner/left.svg" />
                        </div>
                        <div class="two bottom-top">
                            <img alt="" src="assets/images/banner/left.svg" />
                        </div>
                        <div class="three top-bottom">
                            <img alt="" src="assets/images/banner/top.svg" />
                        </div>
                        <div class="four bottom-top">
                            <img alt="" src="assets/images/banner/right.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
</style>
<div class="rts-about position-relative section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-11">
                <div class="feature__image py-5 d-flex align-items-center justify-content-center me-lg-5 me-md-0">
                    <figure class="feature__thumb">
                        <img alt="About Code Agni" src="optimized_images\section-4.webp" />
                    </figure>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="rts-about__content">
                    <h3 data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                        We're Redefining How Websites Are Built



                    </h3>
                    <p class="description" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">
                        No one-size-fits-all. Your website will be custom-built to meet your needs.
                    </p>
                    <div class="rts-about__content--single" data-sal="slide-down" data-sal-delay="600"
                        data-sal-duration="800">
                        <div class="image bg-2">
                            <img alt="Subscription Model" src="assets/images/about/02.svg" />
                        </div>
                        <div class="description">
                            <h6>Subscription-Based Services</h6>
                            <p>Allows small businesses, startups, and entrepreneurs to have access to professional web
                                design</p>
                        </div>
                    </div>
                    <div class="rts-about__content--single" data-sal="slide-down" data-sal-delay="500"
                        data-sal-duration="800">
                        <div class="image">
                            <img alt="Custom Software" src="assets/images/about/01.svg" />
                        </div>
                        <div class="description">
                            <h6>Secure Payment Gateway Integration</h6>
                            <p>Allows our customers to securely have payments with trust and loyalty we serve worldwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-about-shape"></div>
</div>
<!-- ABOUT US END -->
<!-- SEARCH DOMAIN -->
<style>
    .why-choose-us123 {
        background: #FFF4ED;
    }
</style>
<section class="rts-cloud-feature section__padding why-choose-us123">
    <div class="container">
        <div class="row justify-content-center">
            <div class="rts-section w-500">
                <h2 class="title" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                    Why Choose Us
                </h2>
            </div>
        </div>
        <!-- feature single -->
        <div class="row g-30">
            <div class="col-lg-4 col-md-6 col-sm-6" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                <div class="cloud-feature card-feature">
                    <div class="icon">
                        <img alt="" height="50" src="assets/images/feature/cloud/1.svg" width="60" />
                    </div>
                    <h4 class="title">Affordable and Scalable</h4>
                    <p class="description">
                        No surprise charges or hidden fees! Only ₹299/month for a fully functional 3-page website.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                <div class="cloud-feature card-feature">
                    <div class="icon">
                        <img alt="" height="50" src="assets/images/feature/cloud/2.svg" width="60" />
                    </div>
                    <h4 class="title">Free SSL Included</h4>
                    <p class="description">
                        We assure your website should never be attacked by any malware.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                <div class="cloud-feature card-feature">
                    <div class="icon">
                        <img alt="" height="50" src="assets/images/feature/cloud/ssl.svg" width="60" />
                    </div>
                    <h4 class="title">Fast Turnaround Time</h4>
                    <p class="description">
                        Get your website live quickly and focus on your business, not your web design.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                <div class="cloud-feature card-feature">
                    <div class="icon">
                        <img alt="" height="50" src="assets/images/feature/cloud/resell.svg" width="60" />
                    </div>
                    <h4 class="title">Mobile-Optimized Design</h4>
                    <p class="description">
                        All of our websites are built to look great on any device - smartphones, tablets, and desktops.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                <div class="cloud-feature card-feature">
                    <div class="icon">
                        <img alt="" height="50" src="assets/images/feature/cloud/cloud.svg" width="60" />
                    </div>
                    <h4 class="title">Innovative Payment Model</h4>
                    <p class="description">
                        Pay as you go, month-to-month, with the flexibility to scale your services as needed.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                <div class="cloud-feature card-feature">
                    <div class="icon">
                        <img alt="" height="50" src="assets/images/feature/cloud/collaboration.svg" width="60" />
                    </div>
                    <h4 class="title">Customer Support</h4>
                    <p class="description">
                        We’re here to help, every step of the way. Fast, friendly, and always available!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SEARCH DOMAIN END -->
<div class="rts-pricing-plan bg-white section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="rts-section text-center">
                <h2 class="rts-section__title sal-animate" data-sal="slide-down" data-sal-delay="100"
                    data-sal-duration="800">Choose Hosting Plan</h2>
                <p class="rts-section__description w-420 sal-animate" data-sal="slide-down" data-sal-delay="300"
                    data-sal-duration="800">Globally incubate next-generation e-services via state of the art
                    technology.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="row justify-content-center sal-animate" data-sal="slide-down" data-sal-delay="500"
                data-sal-duration="800">
                <div class="col-lg-4 col-md-5">
                    <div class="rts-pricing-plan__tab color-primary">
                        <div class="tab__button">
                            <div class="tab__button__item">
                                <button class="tab__btn active" data-tab="monthly">monthly</button>
                                <button class="tab__btn" data-tab="yearly">yearly</button>
                            </div>
                        </div>
                        <div class="discount">
                            <span class="line"><img alt="" height="20" src="assets/images/pricing/offer__vactor.svg"
                                    width="85" /></span>
                            <p>20% save</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRICING PLAN -->
            <div class="tab__content open" id="monthly">
                <div class="row g-30 monthly">
                    <!-- Starter Plan -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card-plan style-with-bg">
                            <div class="card-plan__content">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img alt="Starter Plan" height="30" src="assets/images/pricing/basic.svg"
                                            width="30" />
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>
                                <p class="card-plan__desc">Affordable, professional, and fast – Get your business online
                                    with Code Agni’s subscription-based website-building services.</p>
                                <h5 class="card-plan__price">
                                    <sup>₹</sup> 299 <sub>/ month*</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="basic.php">View Plan</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    ₹ 3,588 /year
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> 3 Pages</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Create up to 3 pages for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Mobile-Friendly
                                                Design</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Your website will be optimized for mobile devices."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Free Hosting &amp;
                                                Domain</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Enjoy free hosting and a custom domain for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Basic SEO
                                                Optimization</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Basic search engine optimization to improve your website's visibility."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> SSL
                                                Certificate</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Secure your website with an SSL certificate."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> Blog
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Blog functionality is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> E-Commerce
                                                Features</span>
                                            <span class="tolltip"
                                                data-bs-original-title="E-commerce functionality is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> Payment Gateway
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Payment gateway integration is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Starter Plan End -->
                    <!-- Business Plan -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card-plan style-with-bg active">
                            <div class="card-plan__content">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img alt="Business Plan" height="30" src="assets/images/pricing/business.svg"
                                            width="30" />
                                    </div>
                                    <h4 class="package__name">Standard Plan</h4>
                                </div>
                                <p class="card-plan__desc">Affordable, professional, and fast – Get your business online
                                    with Code Agni’s subscription-based website-building services.</p>
                                <h5 class="card-plan__price">
                                    <sup>₹</sup> 499 <sub>/ month*</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="standard.php">View Plan
                                    </a>
                                </div>
                                <p class="card-plan__renew-price">
                                    ₹ 5,988 /year
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> 5 Pages</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Create up to 5 pages for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Mobile-Friendly
                                                Design</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Your website will be optimized for mobile devices."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Free Hosting &amp;
                                                Domain</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Enjoy free hosting and a custom domain for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Basic SEO
                                                Optimization</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Basic search engine optimization to improve your website's visibility."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> SSL
                                                Certificate</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Secure your website with an SSL certificate."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Blog
                                                Integration</span>
                                            <span class="tolltip" data-bs-original-title="Add a blog to your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> E-Commerce
                                                Features</span>
                                            <span class="tolltip"
                                                data-bs-original-title="E-commerce functionality is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> Payment Gateway
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Payment gateway integration is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Plan End -->
                    <!-- E-Commerce Plan -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card-plan style-with-bg">
                            <div class="card-plan__content">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img alt="E-Commerce Plan" height="30" src="assets/images/pricing/business.svg"
                                            width="30" />
                                    </div>
                                    <h4 class="package__name">Premium Plan</h4>
                                </div>
                                <p class="card-plan__desc">Affordable, professional, and fast – Get your business online
                                    with Code Agni’s subscription-based website-building services.</p>
                                <h5 class="card-plan__price">
                                    <sup>₹</sup> 799 <sub>/ month*</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="premium.php">View Plan</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    ₹ 9,588 /year
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Dynamic Pages</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Create dynamic pages for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Mobile-Friendly
                                                Design</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Your website will be optimized for mobile devices."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Free Hosting &amp;
                                                Domain</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Enjoy free hosting and a custom domain for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Basic SEO
                                                Optimization</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Basic search engine optimization to improve your website's visibility."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> SSL
                                                Certificate</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Secure your website with an SSL certificate."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Blog
                                                Integration</span>
                                            <span class="tolltip" data-bs-original-title="Add a blog to your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> E-Commerce
                                                Features</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Add e-commerce functionality to your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Payment Gateway
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Integrate payment gateways for seamless transactions."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- E-Commerce Plan End -->
                </div>
            </div>
            <!-- PRICING PLAN -->
            <div class="tab__content" id="yearly">
                <div class="row g-30 yearly">
                    <!-- Starter Plan (Yearly) -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card-plan style-with-bg">
                            <div class="card-plan__content">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img alt="Starter Plan" height="30" src="assets/images/pricing/basic.svg"
                                            width="30" />
                                    </div>
                                    <h4 class="package__name">Starter Plan</h4>
                                </div>
                                <p class="card-plan__desc">Affordable, professional, and fast – Get your business online
                                    with Code Agni’s subscription-based website-building services.</p>
                                <h5 class="card-plan__price">
                                    <sup>₹</sup> 3,588 <sub>/ year</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    ₹ 299 /month when billed yearly
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> 3 Pages</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Create up to 3 pages for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Mobile-Friendly
                                                Design</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Your website will be optimized for mobile devices."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Free Hosting &amp;
                                                Domain</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Enjoy free hosting and a custom domain for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Basic SEO
                                                Optimization</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Basic search engine optimization to improve your website's visibility."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> SSL
                                                Certificate</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Secure your website with an SSL certificate."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> Blog
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Blog functionality is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> E-Commerce
                                                Features</span>
                                            <span class="tolltip"
                                                data-bs-original-title="E-commerce functionality is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> Payment Gateway
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Payment gateway integration is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Starter Plan End -->
                    <!-- Business Plan (Yearly) -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card-plan style-with-bg active">
                            <div class="card-plan__content">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img alt="Business Plan" height="30" src="assets/images/pricing/business.svg"
                                            width="30" />
                                    </div>
                                    <h4 class="package__name">Business Plan</h4>
                                </div>
                                <p class="card-plan__desc">Affordable, professional, and fast – Get your business online
                                    with Code Agni’s subscription-based website-building services.</p>
                                <h5 class="card-plan__price">
                                    <sup>₹</sup> 5,988 <sub>/ year</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    ₹ 499 /month when billed yearly
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> 5 Pages</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Create up to 5 pages for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Mobile-Friendly
                                                Design</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Your website will be optimized for mobile devices."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Free Hosting &amp;
                                                Domain</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Enjoy free hosting and a custom domain for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Basic SEO
                                                Optimization</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Basic search engine optimization to improve your website's visibility."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> SSL
                                                Certificate</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Secure your website with an SSL certificate."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Blog
                                                Integration</span>
                                            <span class="tolltip" data-bs-original-title="Add a blog to your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> E-Commerce
                                                Features</span>
                                            <span class="tolltip"
                                                data-bs-original-title="E-commerce functionality is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-xmark"></i> Payment Gateway
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Payment gateway integration is not included in this plan."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Plan End -->
                    <!-- E-Commerce Plan (Yearly) -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card-plan style-with-bg">
                            <div class="card-plan__content">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img alt="E-Commerce Plan" height="30" src="assets/images/pricing/business.svg"
                                            width="30" />
                                    </div>
                                    <h4 class="package__name">E-Commerce Plan</h4>
                                </div>
                                <p class="card-plan__desc">Affordable, professional, and fast – Get your business online
                                    with Code Agni’s subscription-based website-building services.</p>
                                <h5 class="card-plan__price">
                                    <sup>₹</sup> 9,588 <sub>/ year</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    ₹ 799 /month when billed yearly
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Dynamic Pages</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Create dynamic pages for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Mobile-Friendly
                                                Design</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Your website will be optimized for mobile devices."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Free Hosting &amp;
                                                Domain</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Enjoy free hosting and a custom domain for your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Basic SEO
                                                Optimization</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Basic search engine optimization to improve your website's visibility."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> SSL
                                                Certificate</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Secure your website with an SSL certificate."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Blog
                                                Integration</span>
                                            <span class="tolltip" data-bs-original-title="Add a blog to your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> E-Commerce
                                                Features</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Add e-commerce functionality to your website."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-solid fa-check"></i> Payment Gateway
                                                Integration</span>
                                            <span class="tolltip"
                                                data-bs-original-title="Integrate payment gateways for seamless transactions."
                                                data-bs-placement="bottom" data-bs-toggle="tooltip"><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- E-Commerce Plan End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HOSTING PLAN -->
<!-- HOSTING PLAN END -->
<!-- DATA CENTER AREA -->
<!-- DATA CENTER AREA END -->
<!-- FLASH SELL AREA -->
<!-- FLASH SELL AREA END -->
<!-- WHY CHOOSE US -->
<!-- WHY CHOOSE US END -->
<!-- TESTIMONIAL -->
<section class="rts-testimonial section__padding rts-faq">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="rts-section text-center">
                    <h3 class="rts-section__title" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                        Our Customers Love Us</h3>
                    <p class="rts-section__description" data-sal="slide-down" data-sal-delay="400"
                        data-sal-duration="800">From 24/7 support that acts as your extended team to incredibly fast
                        website performance. We empower businesses with modern, responsive, and efficient web
                        development solutions.</p>
                </div>
            </div>
        </div>
        <!-- testimonial -->
        <div class="row">
            <div class="col-lg-12">
                <div class="rts-testimonial__slider testimonial__slider--first">
                    <div class="swiper-wrapper">
                        <!-- single testimonial -->
                        <div class="swiper-slide">
                            <div class="rts-testimonial__single">
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="content">
                                    <p>Excellent web development service! They helped transform our online presence,
                                        ensuring a fast and responsive website for our clients.</p>
                                </div>
                                <div class="author__meta">
                                    <div class="author__meta--image">
                                        <img alt="" src="optimized_images\author.webp" />
                                    </div>
                                    <div class="author__meta--details">
                                        <a href="#">Ankit Kuswaha</a>
                                        <span>Legal House </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial end -->
                        <!-- single testimonial -->
                        <div class="swiper-slide">
                            <div class="rts-testimonial__single">
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="content">
                                    <p>Incredible support and seamless integration! Their team helped us develop a
                                        website that is not only functional but also visually stunning.</p>
                                </div>
                                <div class="author__meta">
                                    <div class="author__meta--image">
                                        <img alt="" src="optimized_images\author-2.webp" />
                                    </div>
                                    <div class="author__meta--details">
                                        <a href="#">Jahed Khan</a>
                                        <span>Business Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial end -->
                        <!-- single testimonial -->
                        <div class="swiper-slide">
                            <div class="rts-testimonial__single">
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="content">
                                    <p>Our website now works perfectly across all devices, thanks to their expertise.
                                        Highly recommend their web development services!</p>
                                </div>
                                <div class="author__meta">
                                    <div class="author__meta--image">
                                        <img alt="" src="optimized_images\author-3.webp" />
                                    </div>
                                    <div class="author__meta--details">
                                        <a href="#">Samira Khan</a>
                                        <span>Digital Marketer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial end -->
                        <!-- single testimonial -->
                        <div class="swiper-slide">
                            <div class="rts-testimonial__single">
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="content">
                                    <p>Working with this team was an absolute pleasure! They created a user-friendly
                                        website for our business, and the results have been fantastic.</p>
                                </div>
                                <div class="author__meta">
                                    <div class="author__meta--image">
                                        <img alt="" src="optimized_images\author.webp" />
                                    </div>
                                    <div class="author__meta--details">
                                        <a href="#">Jamie Knop</a>
                                        <span>Business Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial end -->
                    </div>
                    <!-- pagination dot -->
                    <div class="rts-dot__button slider-center"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIAL END -->
<!-- FAQ -->
<section class="section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="rts-faq__first">
                    <h3 class="title" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Got
                        questions? Well,
                        we've got answers.</h3>
                    <p data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">From 24/7 support that
                        acts as your extended team to incredibly fast website performance</p>
                    <img alt="faq" data-sal="slide-down" data-sal-delay="500" data-sal-duration="800"
                        src="assets/images/faq/faq.svg" />
                    <div class="rts-faq__first--shape">
                        <div class="img"><img alt="" src="assets/images/faq/faq__animated.svg" /></div>
                        <div class="shape-one">Website</div>
                        <div class="shape-two">hosting</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="rts-faq__accordion">
                    <div class="accordion accordion-flush" id="rts-accordion">
                        <div class="accordion-item" data-sal="slide-left" data-sal-delay="300" data-sal-duration="800">
                            <div class="accordion-header" id="first">
                                <h4 aria-controls="item__one" aria-expanded="false" class="accordion-button collapsed"
                                    data-bs-target="#item__one" data-bs-toggle="collapse">
                                    What’s included in my subscription?
                                </h4>
                            </div>
                            <div aria-labelledby="first" class="accordion-collapse collapse"
                                data-bs-parent="#rts-accordion" id="item__one">
                                <div class="accordion-body">
                                    Your subscription covers website design, development, and maintenance for the
                                    duration of the subscription period. We take care of everything for you!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-sal="slide-left" data-sal-delay="400" data-sal-duration="800">
                            <div class="accordion-header" id="two">
                                <h4 aria-controls="item__two" aria-expanded="false" class="accordion-button collapsed"
                                    data-bs-target="#item__two" data-bs-toggle="collapse">
                                    Do I need to pay upfront?
                                </h4>
                            </div>
                            <div aria-labelledby="two" class="accordion-collapse collapse"
                                data-bs-parent="#rts-accordion" id="item__two">
                                <div class="accordion-body">
                                    No, we operate on a monthly subscription basis. You pay only for the service
                                    you receive each month.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-sal="slide-left" data-sal-delay="500" data-sal-duration="800">
                            <div class="accordion-header" id="three">
                                <h4 aria-controls="item__three" aria-expanded="false" class="accordion-button collapsed"
                                    data-bs-target="#item__three" data-bs-toggle="collapse">
                                    Can I cancel anytime?
                                </h4>
                            </div>
                            <div aria-labelledby="three" class="accordion-collapse collapse"
                                data-bs-parent="#rts-accordion" id="item__three">
                                <div class="accordion-body">
                                    Yes, you can cancel your subscription at any time. You will only be charged for
                                    the month you’ve used.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-sal="slide-left" data-sal-delay="600" data-sal-duration="800">
                            <div class="accordion-header" id="four">
                                <h4 aria-controls="item__four" aria-expanded="false" class="accordion-button collapsed"
                                    data-bs-target="#item__four" data-bs-toggle="collapse">
                                    How long will it take to get my website live?
                                </h4>
                            </div>
                            <div aria-labelledby="four" class="accordion-collapse collapse"
                                data-bs-parent="#rts-accordion" id="item__four">
                                <div class="accordion-body">
                                    Typically, it takes around 5-7 business days to complete a basic website. The
                                    more complex the project, the longer it may take.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-sal="slide-left" data-sal-delay="700" data-sal-duration="800">
                            <div class="accordion-header" id="five">
                                <h4 aria-controls="item__five" aria-expanded="false" class="accordion-button collapsed"
                                    data-bs-target="#item__five" data-bs-toggle="collapse">
                                    Can I upgrade or downgrade my package?
                                </h4>
                            </div>
                            <div aria-labelledby="five" class="accordion-collapse collapse"
                                data-bs-parent="#rts-accordion" id="item__five">
                                <div class="accordion-body">
                                    Absolutely! You can upgrade or downgrade your plan at any time. Simply contact
                                    us to make the change.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-sal="slide-left" data-sal-delay="800" data-sal-duration="800">
                            <div class="accordion-header" id="six">
                                <h4 aria-controls="item__six" aria-expanded="false" class="accordion-button collapsed"
                                    data-bs-target="#item__six" data-bs-toggle="collapse">
                                    What if I want to add more pages after my plan starts?
                                </h4>
                            </div>
                            <div aria-labelledby="six" class="accordion-collapse collapse"
                                data-bs-parent="#rts-accordion" id="item__six">
                                <div class="accordion-body">
                                    No problem! We offer flexible pricing for additional pages. You can add more
                                    pages based on your needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-sal="slide-left" data-sal-delay="900" data-sal-duration="800">
                            <div class="accordion-header" id="seven">
                                <h4 aria-controls="item__seven" aria-expanded="false" class="accordion-button collapsed"
                                    data-bs-target="#item__seven" data-bs-toggle="collapse">
                                    Do you provide domain and hosting?
                                </h4>
                            </div>
                            <div aria-labelledby="seven" class="accordion-collapse collapse"
                                data-bs-parent="#rts-accordion" id="item__seven">
                                <div class="accordion-body">
                                    We provide recommendations for domain registration and hosting services, but we
                                    do provide you free domain and hosting marked with codeagni.com.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END -->
<!-- CTA AREA -->
<div class="rts-cta">
    <div class="container">
        <div class="row">
            <div class="rts-cta__wrapper">
                <div class="">
                    <h3 class="cta__title" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                        Ready to Launch Your Website? Choose the perfect plan for your needs and get started today!</h3>
                    <p data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">Our subscription-based service
                        makes it easy to create and maintain a website that grows with your business. From design to
                        maintenance, we’ve got you covered!</p>
                    <a class="primary__btn secondary__bg" data-sal="slide-down" data-sal-delay="500"
                        data-sal-duration="800" href="#">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="rts-cta__right">
                    <div class="cta-image">
                        <div class="cta-image__one">
                            <img alt="Hosting" src="assets/images/cta/cta__hosting.svg" />
                        </div>
                        <div class="cta-image__two">
                            <img alt="Person" src="assets/images/cta/cta__person.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>