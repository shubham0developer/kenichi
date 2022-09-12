@extends('layout.main')
@section('main')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> <img src="assets/images/slider/foods.jpg" class="w-100" alt=""> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"> <img src="https://img.freepik.com/free-vector/code-testing-cartoon-banner-functional-test-methodology-programming-search-errors-bugs-website-platform-development-dashboard-usability-optimization-computer-pc-vector-illustration_107791-3766.jpg?w=996&t=st=1662703642~exp=1662704242~hmac=bd58fc6d4479845556caec31a921b26c7b9d81cf6258109a8f5bb0bbc256ba5d" class="w-100" alt=""> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"> <img src="assets/images/slider/legal.jpg" class="w-100" alt=""> </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner_image">
                    <img class="d-block w-100" src="assets/images/slider/legal.jpg" alt="First slide">
                </div>
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1 class="text-white">Tag Line for Legal Consultancy</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner_image">
                    <img class="d-block w-100" src="assets/images/slider/foods.jpg" alt="Second slide">
                </div>
                <div class="banner_text">
                    <div class="banner_text_iner">
                        {{-- <h1 class="text-white">Tag Line for Legal Consultancy</h1> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner_image">
                    <img class="d-block w-100"
                        src="https://img.freepik.com/free-vector/code-testing-cartoon-banner-functional-test-methodology-programming-search-errors-bugs-website-platform-development-dashboard-usability-optimization-computer-pc-vector-illustration_107791-3766.jpg?w=996&t=st=1662703642~exp=1662704242~hmac=bd58fc6d4479845556caec31a921b26c7b9d81cf6258109a8f5bb0bbc256ba5d"
                        alt="Third slide">
                </div>
                <div class="banner_text">
                    <div class="banner_text_iner">
                        {{-- <h1 class="text-white">Tag Line for Legal Consultancy</h1> --}}
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- banner part start-->
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="banner_part"
                    style=" background-size:100% !important; background: url('assets/images/slider/legal.jpg');background-repeat: no-repeat;">
                    <div class="container">
                        
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="banner_part"
                    style=" background-size:100% !important;background: url('assets/images/slider/foods.jpg');background-repeat: no-repeat;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-xl-6">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Committed to <span>Superior</span> Quality and Results</h1>
                                        <p>Moving male there under air air beast lesser creeping saying wherein two void
                                            can' ness saw set meat our. Whose give day. Morning own fifth from Were moved
                                            darkness. Female bring abundantly and research </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="banner_part"
                    style=" background-size:cover !important;background: url('https://www.manjulaconstruction.com/assets/images/yeel.jpg');background-repeat: no-repeat; background-size:cover; ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-xl-6">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Committed to <span style="color: white;">Superior</span> Quality and Results
                                        </h1>
                                        <p style="color:white;">Moving male there under air air beast lesser creeping saying
                                            wherein two void can' ness saw set meat our. Whose give day. Morning own fifth
                                            from Were moved darkness. Female bring abundantly and research </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="banner_part"
                    style=" background-size:cover !important;background: url('https://img.freepik.com/free-photo/high-angle-passport-tickets-arrangement_23-2148786166.jpg?t=st=1653633199~exp=1653633799~hmac=4efa7bed083d06dde318f67afbf99aa4e1e0e55ab40501d215f62c6fcdef8471&w=900');background-repeat: no-repeat; background-size: cover; ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-xl-6">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Travel around
                                            <span> the world </span>One by One
                                        </h1>
                                        <p style="color: white;">Plan and book your perfect trip with expert advice,
                                            travel tips, destination information and
                                            inspiration from us. </p>
                                        <a href="#" class="btn_1">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color: #ef2e5d;" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" style="background-color: #ef2e5d;" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}

    <!-- banner part start-->

    <!-- about part start-->
    <section class="about_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 text-right p-0">
                                <img src="https://c1.wallpaperflare.com/preview/308/43/594/steel-construction-steel-bar-rebar-steel.jpg"
                                    class="w-100 p-2" alt="">
                                <img src="https://images.unsplash.com/photo-1581600140682-d4e68c8cde32?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3BpY2V8ZW58MHx8MHx8&w=1000&q=80"
                                    class="w-75 p-2" alt="">
                            </div>
                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12  p-0">
                                <img src="https://cdn.shopify.com/s/files/1/1027/2035/products/ANA0012S-1_600x.jpg?v=1659683568"
                                    class="w-75 p-2" alt="">
                                <img src="https://www.pixelstalk.net/wp-content/uploads/2016/08/Desktop-Food-HD-Wallpapers-Free-Download.jpg"
                                    class="w-100 p-2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_part_text">
                        <h6><b class="text-danger">About Us</b></h6>
                        <h3 style="font-size: 35px;" class="mb-3"><b>Our reputation is the proof of our good work.</b></h3>
                        <p>Which cattle fruitful he fly visi won't let above lesser stars. Fly form wonder every let third
                            form two air seas after us said day won light also together midst two female she great to open.
                        </p>

                        <div class="row mt-5">
                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 text-right p-0">
                                <img src="https://media.istockphoto.com/photos/man-using-digital-tablet-online-connect-to-internet-banking-currency-picture-id1334591614?b=1&k=20&m=1334591614&s=170667a&w=0&h=ZngH_Lm0WEYyhroGUvksCLxgKNYJCwSQIkPF6Sd_eLw="
                                    class="w-100 p-2" alt="">
                            </div>
                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12  p-0">
                                <img src="https://img.freepik.com/premium-photo/professional-male-lawyer-judge-working-with-contract-papers-documents-gavel-scales-justice-table-courtroom-law-legal-services-concept_28283-1373.jpg"
                                    class="w-100 p-2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- our_service start-->
    <!-- <section class="our_service padding_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="section_tittle">
                                <h2>our services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <div class="single_feature">
                                <div class="single_service">
                                    <span class="flaticon-ui"></span>
                                    <h4>Better Future</h4>
                                    <p>Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male</p>
                                    <a href="#" class="btn_3">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="single_feature">
                                <div class="single_service">
                                    <span class="flaticon-ui"></span>
                                    <h4>Qualified Trainers</h4>
                                    <p>Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male</p>
                                    <a href="#" class="btn_3">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="single_feature">
                                <div class="single_service single_service_2">
                                    <span class="flaticon-ui"></span>
                                    <h4>Job Oppurtunity</h4>
                                    <p>Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male</p>
                                    <a href="#" class="btn_3">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    <!-- our_service part end-->

    <!-- about part start-->
    <section class="about_part experiance_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_text">
                        <h2>Experience makes you Grow</h2>
                        <p>Their whose made waters there our, air above first give dry fruit that second whose herb creeping
                            it us light spirit appear mans. So green abundantly She'd. Greater divide dry bearing years
                            ourends herb upon which open lights had
                            blessed replenish Cattle give his. Abundantly over saying which beast dominion multiply behold
                            to wateo.</p>
                        <div class="about_text_iner">
                            <div class="about_text_counter">
                                <h2>30</h2>
                            </div>
                            <div class="about_iner_content">
                                <h3>year <span>of Experience</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img text-center">
                        <img class="w-75 m-auto"
                            src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- our_project part start-->
    <section class="our_project section_padding" id="portfolio">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-10">
                    <div class="section_tittle">
                        <h2>Our Wings</h2>
                    </div>
                </div>
            </div>
            <div class="filters-content">
                <div class="row justify-content-between portfolio-grid">
                    <div class="col-lg-4 col-sm-6 all buildings my-1">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="https://images.unsplash.com/photo-1572019637935-a6bc9723b3b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
                                    alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Iron & Steels </p>
                                    <a href="#">
                                        <h2>Kenichi Steels</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all my-1 rebuild">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="https://images.unsplash.com/photo-1622378134706-4a2194cc9648?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZW1icm9pZGVyeSUyMGRlc2lnbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                    alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Handloom</p>
                                    <a href="#">
                                        <h2>The Zardozi</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all my-1 architecture">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Legal Firm</p>
                                    <a href="#">
                                        <h2>Kenichi Legal Consultancy</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 all my-1 buildings">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="https://images.unsplash.com/photo-1553024838-a90a23993a12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80"
                                    alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Food Industry</p>
                                    <a href="#">
                                        <h2>Kenichi Foods</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all my-1 rebuild">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="offer_img_1">
                                <div class="hover_text">
                                    <p>IT Consultancy</p>
                                    <a href="#">
                                        <h2>Kenichi IT Services</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all my-1 architecture">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="https://images.unsplash.com/photo-1526423007471-5d86aebf3d5c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Woods Industry</p>
                                    <a href="#">
                                        <h2>Kenichi Woods</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_project part end-->

    <!-- member_counter counter start -->
    <section class="member_counter padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/3126/3126589.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter">60</span>
                        <h4> <span>Satisfied</span> Client</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/4525/4525014.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter">10</span>
                        <h4> <span>Total</span> Staffs</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/4661/4661361.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter">80</span>
                        <h4> <span>Total</span> Projects</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/5932/5932018.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter">24</span>
                        <h4> <span>Work</span> Finished</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->


    <!-- our_project part start-->
    <section class="" id="portfolio">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-10">
                    <div class="section_tittle">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="p-2 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1547332226-395d746d139a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1658681906631-f0a96e2d199b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1553915632-175f60dd8e36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="" class="w-100" />
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="p-2 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1623605004748-3af12342204f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1622042914493-4ce8d921a91a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1455165814004-1126a7199f9b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="" class="w-100" />
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="p-2 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1481487196290-c152efe083f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=962&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1629442214769-c4f01458bf04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1616225273962-05c320ca73d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1606323544089-4ee380240779?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="" class="w-100" />
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="p-2 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1585201731775-0597e1be4bfb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=415&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1553025934-296397db4010?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80"
                            alt="" class="w-100" />
                    </div>
                    <div class="p-2 shadow-sm my-3">
                        <img src="https://images.unsplash.com/photo-1610397620360-910c26415b94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="" class="w-100" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- review part start-->
    <section class="review_part  section_padding ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5 col-xl-4">
                    <div class="tour_pack_text">
                        <h2>Some Feedback From Client</h2>
                        <p>Which cattle fruitful he fly visi won not let above lesser stars fly form wonder every let third
                            form two air seas after us said day won lso together midst two female she</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="review_part_cotent owl-carousel">
                        <div class="single_review_part">
                            <img src="https://www.manjulaconstruction.com/assets/img/cunstruction/client/client_2.png"
                                alt="">
                            <div class="tour_pack_content">
                                <p>Life open fifth midst lesser place light after unto move that make had void and whales.
                                    So after void called whose were cattle fourth seed Image yielding is given every own
                                    tree Image</p>
                                <h4>Sawpalo, Brasil</h4>
                            </div>
                        </div>
                        <div class="single_review_part">
                            <img src="https://www.manjulaconstruction.com/assets/img/cunstruction/client/client_1.png"
                                alt="">
                            <div class="tour_pack_content">
                                <p> Life open fifth midst lesser place light after unto move that make had void and whales.
                                    So after void called whose were cattle fourth seed Image yielding is given every own
                                    tree Image</p>
                                <h4>Sawpalo, Brasil</h4>
                            </div>
                        </div>
                        <div class="single_review_part">
                            <img src="https://www.manjulaconstruction.com/assets/img/cunstruction/client/client_2.png"
                                alt="">
                            <div class="tour_pack_content">
                                <p>Life open fifth midst lesser place light after unto move that make had void and whales.
                                    So after void called whose were cattle fourth seed Image yielding is given every own
                                    tree Image</p>
                                <h4>Sawpalo, Brasil</h4>
                            </div>
                        </div>
                        <div class="single_review_part">
                            <img src="https://www.manjulaconstruction.com/assets/img/cunstruction/client/client_1.png"
                                alt="">
                            <div class="tour_pack_content">
                                <p>Life open fifth midst lesser place light after unto move that make had void and whales.
                                    So after void called whose were cattle fourth seed Image yielding is given every own
                                    tree Image</p>
                                <h4>Sawpalo, Brasil</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review part end-->

    <!--::blog_part start::-->
    <section class="blog_part">
        <div class="container">
            <div class="row ">
                <div class="col-xl-5">
                    <div class="section_tittle ">
                        <h2>Recent News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top" alt="blog">
                            <div class="bl_date">
                                <h5>25 Jan</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                                <a href="blog.html">
                                    <h5 class="card-title">Our two firmament called us kind in face midst</h5>
                                </a>
                                <a href="#" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1486548730767-5c679e8eda6b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top" alt="blog">
                            <div class="bl_date">
                                <h5>25 Jan</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                                <a href="blog.html">
                                    <h5 class="card-title">Our two firmament called us kind in face midst</h5>
                                </a>
                                <a href="#" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top" alt="blog">
                            <div class="bl_date">
                                <h5>25 Jan</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                                <a href="blog.html">
                                    <h5 class="card-title">Our two firmament called us kind in face midst</h5>
                                </a>
                                <a href="#" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .form-control:focus {
            color: #212529;
            background-color: #fff;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
        }

        .form-control:focus {
            color: #212529;
            background-color: #fff;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
        }

        .form-control {
            border: 0px solid #ced4da;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
        }

        .blog_part label {
            color: #052866;
        }
    </style>
    <section class="blog_part section_padding " style="color: white;">
        <div class="container">
            <div class="row ">
                <div class="col-xl-5">
                    <div class="section_tittle ">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                
                <script>
                    @if(Session::has('msg'))
                    $('#ignismyModal').modal('show')
                  
                @endif
                    </script>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 bg-info text-white p-5" style="background: url(https://images.unsplash.com/photo-1559030623-0226b1241edd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80); background-size: cover; background-position: bottom;">
                  <h6></h6>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 py-5 box-shadow ">
                    <div class="p-3">
                        <form class="mt-5" method="POST" action="/contact">
                            @csrf
                            <div class="row text-manjula1">
                                <div class="col-6 mb-4">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" id="" name="name">
                                </div>
                                <div class="col-6 mb-4">
                                    <label for="">Contact Number</label>
                                    <input type="number" class="form-control" id="" name="contact">
                                </div>
                                <div class="col-6 mb-4">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control" id="" name="email">
                                </div>
                                <div class="col-6 mb-4">
                                    <label for="">Service</label>
                                    <input type="text" class="form-control" id="" name="service">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="">Message</label>
                                    <textarea class="form-control" rows="4" id="" name="massage"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-warning  btn-sm w-25 float-end"
                                        style="float: right;" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection