@extends("layouts.app")

@section('breadcrum')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('welcome')}}">Home</a> &nbsp; / &nbsp; Courses</p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="w3l-offered-courses">
        <div class="blog py-5" id="blog">
            <div class="container pb-lg-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g1.jpg")}}" loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student2.jpg")}}" loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g2.jpg")}}"  loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student3.jpg")}}" loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g3.jpg")}}" loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student4.jpg")}}"  loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g5.jpg")}}" loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student1.jpg")}}" loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g6.jpg")}}" loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student2.jpg")}}" loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g7.jpg")}}" loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student3.jpg")}}" loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g8.jpg")}}" loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student4.jpg")}}" loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g9.jpg")}}"  loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student1.jpg")}}"  loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#url" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{asset("assets/images/g4.jpg")}}" loading="lazy" alt="Card image cap">
                                </a>
                                <div class="author">
                                    <div class="author-image">
                                        <img src="{{asset("assets/images/student4.jpg")}}" loading="lazy" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                    </div>
                                    <div class="course-title">
                                        <a href="#url">Course Title</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$149</p>
                                    <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                                </div>
                                <a href="#url" class="course-desc">At vero eos et accusam et
                                    justo uo dolores</a>
                            </div>
                            <div class="card-footer course-price-view">
                                <ul class="blog-list">
                                    <li>
                                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                    </li>
                                    <li>
                                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <ul class="pagination mt-5 justify-content-center">
                    <li class="page-item">
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#url"> <span class="fa fa-angle-double-left"></span></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link active" href="#url">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#url">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#url">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#url"> <span class="fa fa-angle-double-right"></span></a>
                    </li>
                    <div class="clear"></div>
                </ul>

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
