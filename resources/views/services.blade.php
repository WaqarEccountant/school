@extends("layouts.app")

@section('breadcrum')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('welcome')}}">Home</a> &nbsp; / &nbsp; Services</p>
            </div>
        </div>
    </section>
@endsection

@section('content')

    <div class="w3l-services1 pt-5" id="services">
        <div class="container pt-lg-3">
            <div class="aboutgrids row">
                <div class="col-lg-6 aboutgrid2">
                    <img src="{{asset("assets/images/g1.jpg")}}" loading="lazy" alt="about image" class="img-fluid"/>
                </div>
                <div class="col-lg-6 aboutgrid1 my-lg-0 my-5">
                    <h4>Having fun while learning is possible</h4>
                    <p>Lorem ipsum dolor sit amet adipisicing elit. Quae blanditiis porro facere qui
                        impedit dolor doloribus.</p>
                    <ul class="services-list mt-4">
                        <li>Learn Courses Online</li>
                        <li>Highly Qualified Teachers</li>
                        <li>Book Library & Stores</li>
                        <li>Apply for Scholarship</li>
                    </ul>

                    <a href="contact.html" class="btn btn-outline-secondary theme-button">Know More</a>
                </div>
            </div>
        </div>

        <div class="aboutbottom py-5">
            <div class="container py-lg-3">
                <div class="bottomgrids row no-gutters">
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0">
                        <span class="fa fa-phone"></span>
                        <h4><a class="service-title" href="#url">Free Call Support</a></h4>
                        <p class="service-text">Donec et venenatis libero. Fusceing dapibus pulvinar tincidunt. Proin
                            maximus ipsum ut scelerisque.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-md-0 mt-5">
                        <span class="fa fa-users"></span>
                        <h4><a class="service-title" href="#url">Highly Qualified Teachers</a></h4>
                        <p class="service-text">Donec et venenatis libero. Fusceing dapibus pulvinar tincidunt. Proin
                            maximus ipsum ut scelerisque.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-5">
                        <span class="fa fa-book"></span>
                        <h4><a class="service-title" href="#url">Book Library & Stores</a></h4>
                        <p class="service-text">Donec et venenatis libero. Fusceing dapibus pulvinar tincidunt. Proin
                            maximus ipsum ut scelerisque.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-smile-o"></span>
                        <h4><a class="service-title" href="#url">The best discount</a></h4>
                        <p class="service-text">Donec et venenatis libero. Fusceing dapibus pulvinar tincidunt. Proin
                            maximus ipsum ut scelerisque.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-laptop"></span>
                        <h4><a class="service-title" href="#url">Learn Courses Online</a></h4>
                        <p class="service-text">Donec et venenatis libero. Fusceing dapibus pulvinar tincidunt. Proin
                            maximus ipsum ut scelerisque.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-phone"></span>
                        <h4><a class="service-title" href="#url">Free Call Support</a></h4>
                        <p class="service-text">Donec et venenatis libero. Fusceing dapibus pulvinar tincidunt. Proin
                            maximus ipsum ut scelerisque.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  //servcies section -->
    <section class="w3l-services2">
        <div class="feature-16-main py-5">
            <div class="container py-lg-3">
                <div class="header-section text-center">
                    <h3>Featured Services</h3>
                    <p class="mt-3 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="features-grids">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-laptop" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Learn Courses Online</a></h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit placeat eum tempore eligendi, fugiat, animi neque odit quasi eos molestiae tenetur. Sequi rerum mollitia quaerat!</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-smile-o" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Learn Courses Online</a></h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit placeat eum tempore eligendi, fugiat, animi neque odit quasi eos molestiae tenetur. Sequi rerum mollitia quaerat!</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-book" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Learn Courses Online</a></h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit placeat eum tempore eligendi, fugiat, animi neque odit quasi eos molestiae tenetur. Sequi rerum mollitia quaerat!</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Learn Courses Online</a></h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit placeat eum tempore eligendi, fugiat, animi neque odit quasi eos molestiae tenetur. Sequi rerum mollitia quaerat!</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-laptop" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Learn Courses Online</a></h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit placeat eum tempore eligendi, fugiat, animi neque odit quasi eos molestiae tenetur. Sequi rerum mollitia quaerat!</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-smile-o" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Learn Courses Online</a></h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit placeat eum tempore eligendi, fugiat, animi neque odit quasi eos molestiae tenetur. Sequi rerum mollitia quaerat!</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
    <script>

        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
        document.addEventListener('DOMContentLoaded', function () {
            const sm = new SmartPhoto(".js-img-viwer", {
                showAnimation: false
            });
            // sm.destroy();
        });
        $(document).ready(function () {
            $('.counter').countUp();
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })

    </script>
@endpush
