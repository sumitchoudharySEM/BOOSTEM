@push('stack_title_style')
    <title>Event preview | Boostem</title>

    <link href="{{ asset('public/cork/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('public/cork/collapsible-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/cork/admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/cork/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/cork/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/plugins/src/stepper/bsStepper.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/light/scrollspyNav.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/admin/src/plugins/css/light/stepper/custom-bsStepper.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/dark/scrollspyNav.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/admin/src/plugins/css/dark/stepper/custom-bsStepper.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/admin/src/plugins/css/light/editors/quill/quill.snow.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/admin/src/plugins/css/dark/editors/quill/quill.snow.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/plugins/src/tagify/tagify.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/admin/src/plugins/css/light/tagify/custom-tagify.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/admin/src/plugins/css/dark/tagify/custom-tagify.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/light/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/dark/forms/switches.css') }}">
@endpush

@push('child-style')
    <style>
        .flex {
            display: flex;
            align-items: center;
            justify-content: center;
        }


        p {
            margin-bottom: 0;
            color: gray;
        }

        h3 {
            padding-left: 0;
            margin-bottom: 0;
        }

        h5 {
            margin-bottom: 0;
        }

        .banner-wrapper {
            width: 100%;
            background-color: rgb(128, 128, 128);
            border-radius: 10px;
            overflow: hidden;
        }

        .banner-wrapper img {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .logo-time-container {
            justify-content: space-between;
            /* background-color: rgb(246, 186, 186); */
            padding: 1.5rem 0;
        }

        .logo-container {
            height: 4.4rem;
            width: 4.4rem;
            background-color: transparent;
            border-radius: 6px;
            overflow: hidden;
        }

        .logo-container img {
            height: 100%;
            width: 100%;
            object-fit: contain;
            border-radius: 6px;
            overflow: hidden;
        }

        .time-box {
            background-color: rgb(225, 225, 231);
            box-shadow: 1px 1px 5px rgb(160, 162, 169);
            min-width: 10rem;
            padding: 0.5rem 1.2rem;
            margin-left: 1.2rem;
        }

        .time-box i {
            width: 1.2rem;
            height: 1.2rem;
            font-size: 1.2rem;
            padding: 0;
            margin-right: 1rem;
        }

        .time-box p {
            color: gray;
            font-size: 0.9rem;
            font-weight: 300;
        }

        .time-box h5 {
            color: rgb(72, 72, 72);
            font-size: 1rem;
            font-weight: 500;
        }

        .event-title {
            padding-left: 1rem;
        }

        .event-title h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: rgb(53, 53, 53);
        }

        .pearks-container {
            padding: 2rem 0;
            padding-top: 4rem;
            background-color: transparent;
            width: 100%;
            min-height: 18rem;
            /* justify-content: space-evenly; */
            flex-wrap: wrap;
        }

        .peark-box {
            height: 14rem;
            padding: 0 2.5rem;
            margin: 1rem 1rem;
            width: 30%;
            min-width: 18rem;
            flex-direction: column;
            border-radius: 12px;
            border-bottom: 4px solid rgb(255, 9, 239);
            background-color: white;
            box-shadow: 1px 1px 8px rgb(185, 186, 191);
            position: relative;
            text-align: center;
        }

        .peark-box::before {
            content: '';
            background: url('https://media.istockphoto.com/vectors/vector-flat-golden-trophy-vector-id1176397624?k=20&m=1176397624&s=612x612&w=0&h=yICH7de39SwB1sDP4-kBHFS8bJz4srdu_HOrBC9KvzY=');
            width: 100%;
            height: 13rem;
            display: block;
            position: absolute;
            background-size: contain;
            filter: blur(1px);
            filter: opacity(30%);
            top: 0;
            left: 0;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .card{
            box-shadow: none;
        }
        .page-content{
            padding: 2rem;
            padding-top: 6rem;
        }
        .peark-content {
            z-index: 2;
            flex-direction: column;
        } 
        #cd-timeline::before {
            border-left: 3px solid #bababa;
        }
        .cd-timeline-content::before {
            border-left: 12px solid white;
        }
        .cd-timeline-content{
            background-color: white;
        }
        .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
            border-right-color: white;
        }
        .registration-form{
            width: 100%;
            min-height: 20rem;
            padding: 3rem 1rem;
            /* background-color: rgb(240, 185, 185); */
        }
        .black-out {
            background-color: #040023;
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        body:before {
            height: 0 !important;
        }

        .col-12 {
            margin: 20px 0;
        }

        .tagify__input {
            width: 100%;
        }
        .dstepper-block{
            margin-top: 0 !important;
        }
        .widget-content-area{
            border: none;
        }
        .btn-secondary {
            color: #fff !important;
            background-color: #805dca;
            border-color: #805dca;
            box-shadow: 0 10px 20px -10px rgb(92 26 195 / 59%);
        }
        .btn-secondary:hover {
            color: #fff !important;
            background-color: #6643b2;
            border-color: #6643b2;
            box-shadow: 0 10px 20px -10px rgb(92 26 195 / 59%);
        }
    </style>
@endpush

@extends('community/layout/community-layout')
@section('content')
    <div class="main-content">
        <div class="page-content">

            {{-- banner startes heare --}}
            <div class="banner-wrapper">
                <img src="{{ asset('public/img/banner-samp1.png') }}" alt="your banner">
            </div>
            {{-- /banner ends heare --}}
            {{-- logo and time section startes heare --}}
            <div class="flex logo-time-container">
                <div class="flex left-logo">
                    <div class="logo-container">
                        <img src="{{ asset('public/img/leptop.png') }}" alt="">
                    </div>
                    <div class="event-title">
                        <h3>this is the event name</h3>
                        <p>by: E-CELL RGPV Bhopal</p>
                    </div>
                </div>
                <div class="flex right-time">
                    <div class="flex time-box">
                        <i class="dripicons-calendar"></i>
                        <div>
                            <p>Registration starts</p>
                            <h5>22 janury, 2022</h5>
                        </div>
                    </div>
                    <div class="flex time-box">
                        <i class="dripicons-calendar"></i>
                        <div>
                            <p>Registration ends</p>
                            <h5>22 janury, 2022</h5>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /logo and time section ends heare --}}

            {{-- About event section startes heare --}}
            {{-- <div class="about-event">
               <h1>Abous EDP</h1>
               <h5>entepenore devlopement program</h5> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia ex soluta ducimus voluptatibus consectetur beatae rem blanditiis deserunt dolorem tempora quas corporis ipsam reprehenderit nisi maiores at ab, facilis iure dolor numquam labore perspiciatis totam dolore! Facere odit cumque placeat accusantium quasi voluptates, blanditiis voluptate corrupti aliquid debitis illum. </p>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum totam fugit aut magni rerum quam libero voluptatum a, natus dicta.</p>
            </div> --}}
            {{-- /About event section ends heare --}}

            {{-- pearks section startes heare --}}
            <div class="flex pearks-container">
                
                <div class="flex peark-box">
                    <div class="flex peark-content">
                        <h4>Certificate</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="flex peark-box">
                    <div class="flex peark-content">
                        <h4>Certificate</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="flex peark-box">
                    <div class="flex peark-content">
                        <h4>Certificate</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="flex peark-box">
                    <div class="flex peark-content">
                        <h4>Certificate</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="flex peark-box">
                    <div class="flex peark-content">
                        <h4>Certificate</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
            {{-- /pearks section ends heare --}}

            {{-- timeline startes heare --}}
            <div class="timeline" >
                <div class="row" >
                    <div class="col-12" >
                        {{-- <div class="card" style="background-color: red;"> --}}
                        <div class="card" style="background-color: transparent;">
                            <div class="card-body">

                                <section id="cd-timeline" class="cd-container">
                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-success">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>
                                        <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event One</h3>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi
                                                placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus
                                                minus veritatis qui ut.</p>
                                            <span class="cd-date me-xl-0 me-2">May 23</span>
                                        </div>
                                        <!-- cd-timeline-content -->
                                    </div>
                                    <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block" >
                                        <div class="cd-timeline-img bg-danger">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>
                                        <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content" style="background-color: white;">
                                            <h3>Timeline Event Two</h3>
                                            <p class="mb-3 text-muted">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi
                                                placeat iure tempora laudantium ipsa ad debitis unde?
                                            </p>
                                            <span class="cd-date me-xl-0 me-2">May 30</span>
                                        </div>
                                        <!-- cd-timeline-content -->
                                    </div>
                                    <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-info">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>
                                        <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event Three</h3>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque
                                                asperiores voluptatibus cupiditate error assumenda delectus odit
                                                similique earum voluptatem doloremque dolorem ipsam quae rerum quis.
                                                Odit, itaque, deserunt corporis vero ipsum nisi
                                            </p>
                                            <span class="cd-date me-xl-0 me-2">Jun 05</span>
                                        </div>
                                        <!-- cd-timeline-content -->
                                    </div>
                                    <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-pink">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>
                                        <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event Four</h3>
                                            <p class="mb-3 text-muted">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi
                                                placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus
                                                minus veritatis qui ut.</p>
                                            <span class="cd-date me-xl-0 me-2">Jun 14</span>
                                        </div>
                                        <!-- cd-timeline-content -->
                                    </div>
                                    <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-warning">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>
                                        <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event Five</h3>
                                            <p class="mb-3 text-muted">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Iusto, optio, dolorum provident rerum.
                                            </p>
                                            <span class="cd-date me-xl-0 me-2">Jun 18</span>
                                        </div>
                                        <!-- cd-timeline-content -->
                                    </div>
                                    <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-primary">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>
                                        <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event End</h3>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque
                                                asperiores voluptatibus cupiditate error assumenda delectus odit
                                                similique earum voluptatem doloremque dolorem ipsam quae rerum quis.
                                                Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam
                                                provident pariatur temporibus quia eos repellat consequuntur perferendis
                                                enim amet</p>
                                            <span class="cd-date me-xl-0 me-2">Jun 30</span>
                                        </div>
                                        <!-- cd-timeline-content -->
                                    </div>
                                    <!-- cd-timeline-block -->
                                </section>
                                <!-- cd-timeline -->

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
            </div>
            {{-- /timeline ends heare --}}

            {{-- registration startes heare --}}
            <div class="flex registration-form">
                <div class="container" style="max-width: 40rem">
                    <div class="container">
        
                        <!-- BREADCRUMB -->
                        <div class="page-meta">
                            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">E-CELL/</li>
                                    <li class="breadcrumb-item"><a href="#">UIT RGPV Bhopal</a></li>
                                </ol>
                            </nav>
                        </div>
                        <!-- /BREADCRUMB -->
        
                        <div class="row layout-top-spacing" id="cancel-row">
        
                            <div id="wizard_Default" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    {{-- <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Default</h4>
                                                </div>
                                            </div>
                                        </div> --}}
                                    <form method="POST" action="{{ url('/event/edp') }}">
                                        @csrf
                                        <div class="widget-content widget-content-area">
                                            <div class="bs-stepper stepper-form-one">
                                                <div class="bs-stepper-header" role="tablist">
                                                    <div class="step" data-target="#defaultStep-one">
                                                        <button type="button" class="step-trigger" role="tab">
                                                            <span class="bs-stepper-circle">1</span>
                                                            <span class="bs-stepper-label">Step One</span>
                                                        </button>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#defaultStep-two">
                                                        <button type="button" class="step-trigger" role="tab">
                                                            <span class="bs-stepper-circle">2</span>
                                                            <span class="bs-stepper-label">Step Two</span>
                                                        </button>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#defaultStep-three">
                                                        <button type="button" class="step-trigger" role="tab">
                                                            <span class="bs-stepper-circle">3</span>
                                                            <span class="bs-stepper-label">
                                                                <span class="bs-stepper-title">Step Three</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="bs-stepper-content">
                                                    <div id="defaultStep-one" class="content" role="tabpanel">
                                                        {{-- <form> --}}
                                                        <div class="form-group mb-4">
                                                            <label for="defaultForm-name">Name</label>
                                                            <input type="text" required name="name"
                                                                class="form-control" id="defaultForm-name">
                                                            @error('name')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="defaultEmailAddress">Email Address</label>
                                                            <input type="email" required class="form-control"
                                                                id="defaultEmailAddress" name="email">
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="defaultContactAddress">Contact No.</label>
                                                            <input type="text" required class="form-control"
                                                                id="defaultContactAddress" name="contact">
                                                        </div>
                                                        {{-- </form> --}}
        
                                                        <div class="button-action mt-5">
                                                            <button type="button" class="btn btn-secondary btn-prev me-3"
                                                                disabled>Prev</button>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-nxt">Next</button>
                                                        </div>
                                                    </div>
                                                    <div id="defaultStep-two" class="content" role="tabpanel">
                                                        {{-- <form> --}}
                                                        <div class="col-12">
                                                            <label for="defaultInputAddress"
                                                                class="form-label">College</label>
                                                            <input type="text" required class="form-control"
                                                                id="defaultInputAddress" name="college">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="defaultInputAddress2" class="form-label">
                                                                Enrollment No.</label>
                                                            <input type="text" class="form-control"
                                                                id="defaultInputAddress2" placeholder="ex: 0101CS211120"
                                                                name="enrollment_no">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="defaultInputState" class="form-label">Year</label>
                                                                <select id="defaultInputState" required name="year"
                                                                    class="form-select">
                                                                    <option value="1" selected="">1st</option>
                                                                    <option value="2">2nd</option>
                                                                    <option value="3">3rd</option>
                                                                    <option value="4">4th</option>
                                                                    <option value="10">Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="defaultInputBranch"
                                                                    class="form-label">Branch</label>
                                                                <select id="defaultInputBranch" class="form-select"
                                                                    name="branch">
                                                                    <option value="CSE" selected="">CSE</option>
                                                                    <option value="ECE">ECE</option>
                                                                    <option value="EX">EX</option>
                                                                    <option value="IT">IT</option>
                                                                    <option value="ME">ME</option>
                                                                    <option value="PCT">PCT</option>
                                                                    <option value="ECE">ECE</option>
                                                                    <option value="CE">CE</option>
                                                                    <option value="AU">AU</option>
                                                                    <option value="CSBS">CSBS</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
        
                                                        {{-- </form> --}}
        
                                                        <div class="button-action mt-5">
                                                            <button type="button"
                                                                class="btn btn-secondary btn-prev me-3">Prev</button>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-nxt">Next</button>
                                                        </div>
                                                    </div>
                                                    <div id="defaultStep-three" class="content" role="tabpanel">
                                                        {{-- <form class="row g-3"> --}}
                                                        <div class="form-group mb-4">
                                                            <label for="exampleFormControlTextarea1">Do you have any startup
                                                                idea</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="startup_idea" rows="3"
                                                                spellcheck="false"></textarea>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="exampleFormControlTextarea2">Do you have any skill
                                                                set</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea2" name="skills_set" rows="3"
                                                                spellcheck="false"></textarea>
                                                        </div>
                                                        <div class="widget-content widget-content-area"
                                                            style="padding: 20px 0px">
                                                            {{-- <label for="interest"> Interest</label> --}}
                                                            <input id="interest" placeholder="Interest" name='interest'>
                                                        </div>
                                                        <div class="col-lg-12 col-12 layout-spacing">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input" name="need_mentor"
                                                                    type="checkbox" role="switch"
                                                                    id="flexSwitchCheckChecked" checked value="1">
                                                                <label class="form-check-label"
                                                                    for="flexSwitchCheckChecked">Do you want to learn through
                                                                    e-cell</label>
                                                            </div>
                                                        </div>
                                                        {{-- </form> --}}
        
                                                        <div class="button-action mt-3">
                                                            <button type="button"
                                                                class="btn btn-secondary btn-prev me-3">Prev</button>
                                                            {{-- <button class="btn mb-2 btn-danger snackbar-bg-danger mb-2 me-4">Danger</button> --}}
                                                            <button class="btn btn-success me-3">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
        
                        </div>
        
                    </div>
                </div>
            </div>
            {{-- /registration ends heare --}}

        </div>
    </div>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('public/cork/admin/src/plugins/src/stepper/bsStepper.min.js') }}"></script>
    <script src="{{ asset('public/cork/admin/src/plugins/src/stepper/custom-bsStepper.min.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="{{ asset('public/cork/admin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/cork/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/cork/admin/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="../../../resources/views/admin/html/layouts/vertical-dark-menu/app.js"></script>
    <script src="{{ asset('public/cork/admin/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('public/cork/admin/src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('public/cork/admin/src/plugins/src/editors/quill/quill.js') }}"></script>
    {{-- <script src="{{ asset('cork/admin/src/plugins/src/editors/quill/custom-quill.js') }}"></script> --}}
    <!-- END PAGE LEVEL SCRIPTS -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('public/cork/admin/src/plugins/src/tagify/tagify.min.js') }}"></script>
    <script src="{{ asset('public/cork/admin/src/plugins/src/tagify/custom-tagify.js') }}"></script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <!-- toastr -->
    <script src="{{ asset('public/cork/admin/src/plugins/src/notification/snackbar/snackbar.min.js') }}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('public/cork/admin/src/assets/js/components/notification/custom-snackbar.js') }}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
    <script>
        // // The DOM element you wish to replace with Tagify
        // var input = document.querySelector('input[name=interest]');

        // // initialize Tagify on the above input node reference
        // new Tagify(input)
        var inputElm = document.querySelector('input[name=interest]'),
            whitelist = [
                "Web Development",
                "App Development",
                "Machine Learning",
                "Artificial Intelligence",
                "Cyber Security",
                "Cloud Computing",
                "Data Science",
                "Internet of Things",
                "Robotics",
                "Blockchain",
                "Augmented Reality",
                "Virtual Reality",
                "3D Printing",
                "Game Development",
                "Graphic Design",
                "UI/UX Design",
                "Video Editing",
                "Photography",
                "Content Writing",
                "Public Speaking",
                "Digital Marketing",
                "Business Development",
                "Entrepreneurship",
                "Finance",
                "Law",
                "Management",
                "Human Resources",
                "Operations",
                "Sales",
            ];

        var tagify = new Tagify(inputElm, {
            whitelist: whitelist,
            // maxTags: 10,
            dropdown: {
                maxItems: 20, // <- mixumum allowed rendered suggestions
                classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
                enabled: 0, // <- show suggestions on focus
                closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
            }
        })
    </script>
@endsection
