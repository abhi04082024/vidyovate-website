@extends('layout.home') 
@section('title', 'Home Page')
 @section('content')
  @if(session('success'))
<div
    class="popup-alert alert alert-success alert-dismissible fade show"
    role="alert"
>
    {{ session("success") }}
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
    ></button>
</div>
@endif

<div class="portfolio-page">
    <!-- Hero Section -->
    <section
        class="hero-section position-relative m-0 p-0"
        style="min-height: 100vh; overflow: hidden"
    >
        <!-- Background Image -->
        <img
            src="{{ asset('images/bg1.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover; z-index: -1"
            alt="Background"
        />

        <!-- Foreground Content -->
        <div
            class="position-absolute top-50 start-50 translate-middle w-100 px-3 text-white"
        >
            <div
                class="bg-dark bg-opacity-50 rounded-4 w-75 w-md-75 mx-auto p-4"
            >
                <div class="row g-4 align-items-center">
                    <!-- Left Text -->
                    <div
                        class="col-12 col-md-6 text-start d-flex flex-column justify-content-center"
                    >
                        <h1 class="fs-3 mb-3 mt-4 fade-up">
                            Welcome to Vidyovate
                        </h1>

                        <p
                            class="fs-6 lh-lg fade-up"
                            style="animation: floatUp 1s ease-out forwards"
                        >
                            We specialize in Web App, Accounting Software, E-Commerce,
                            SaaS and Mobile Development. Explore how we
                            bring innovation to your fingertips with expert
                            solutions. Vidyovate pioneers the creation of intelligent platforms. 
                            Our innovative designs cultivate authentic connections, 
                            fostering meaningful experiences that bridge the gap between you and your customers.
                        </p>
                    </div>

                    <!-- Right: Plus Icons -->
                    <div
                        class="col-12 col-md-6 d-flex justify-content-center align-items-center"
                    >
                        <div
                            class="plus-icon-container position-relative d-flex justify-content-center align-items-center"
                        >
                            <!-- Center Icon -->
                            <img
                                src="{{ asset('svgs/ai_icon.svg') }}"
                                alt="Center"
                                class="icon center-icon"
                            />
                            <!-- Top Icon -->
                            <img
                                src="{{ asset('svgs/claud_icone.svg') }}"
                                alt="Top"
                                class="icon top-icon"
                            />
                            <!-- Bottom Icon -->
                            <img
                                src="{{ asset('svgs/enginner_icon.svg') }}"
                                alt="Bottom"
                                class="icon bottom-icon"
                            />
                            <!-- Left Icon -->
                            <img
                                src="{{ asset('svgs/mobile_icon.svg') }}"
                                alt="Left"
                                class="icon left-icon"
                            />
                            <!-- Right Icon -->
                            <img
                                src="{{ asset('svgs/ai_icon.svg') }}"
                                alt="Right"
                                class="icon right-icon"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #5a6782, #a28aa1);
            height: 100vh;
        "
    >
        <div class="container">
            <div class="mx-auto p-4" style="max-width: 960px">
                <div
                    class="row align-items-center bg-dark bg-opacity-50 text-white rounded-4 p-3 custom-scrollbar about-scroll"
                >
                    <!-- Text Column -->
                    <div class="col-12 col-lg-7 text-start">
                        <h1 class="fade-up fs-4 mb-3">About Us</h1>
                        <p
                            class="fade-up fs-6 lh-lg mb-0 scrollable-area"
                            style="max-height: 400px; min-height: 200px"
                        >
                            <strong>VIDYOVATE</strong><br />
                            At Vidyovate, we are passionate about shaping the
                            future through technology. Our expertise spans
                            across <strong>Web Applications</strong>,
                            <strong>SaaS</strong>,
                            <strong>E-Commerce</strong>, and
                            <strong>Mobile Development</strong>.<br /><br />
                            We deliver cutting-edge solutions designed to
                            transform businesses, empower innovation, and drive
                            digital growth. Whether you're looking to harness
                            the power of AI, build scalable cloud systems,
                            engineer complex systems, or create powerful mobile
                            experiences — we’ve got you covered. 

                            Subtlelabs stands as a distinguished product engineering 
                            firm, renowned for its exemplary track record. Our clients 
                            reap the rewards of our robust product development methodologies 
                            and comprehensive support, facilitated by a team of deeply knowledgeable
                            business and technical experts. We diligently focus on critical business 
                            aspects, including market share enhancement, achievement of quarterly 
                            and annual goals, and cost reduction strategies.

                            Our offerings are tailored to empower clients in the fiercely 
                            competitive IT landscape. Subtlelabs is revered as a reliable 
                            partner, esteemed for its transparent culture and unwavering 
                            commitment to ethical practices.
                        </p>
                    </div>

                    <!-- Image Column -->
                    <div
                        class="fade-up col-12 col-lg-5 d-flex justify-content-center"
                    >
                        <img
                            src="{{ asset('images/tech_team.jpg') }}"
                            class="rounded-3 img-fluid"
                            style="max-height: 260px"
                            alt="Tech Team"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #a28aa1, #5a6782);
            height: 100vh;
        "
    >
        <div class="container">
            <div
                class="mx-auto p-4 scrollable-area custom-scrollbar"
                style="max-width: 960px"
            >
                <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-3">
                    <!-- Services List Column (Left) -->
                    <div
                        class="col-12 col-lg-4 mb-4 mb-lg-0 d-flex justify-content-center"
                    >
                        <div
                            class="custom-scrollbar overflow-auto p-2 border border-light-subtle rounded-3 bg-dark bg-opacity-50 w-100"
                            style="max-height: 300px"
                        >
                            <ul class="fade-up list-unstyled text-white mb-0">
                                @foreach ($services as $name)
                                <li
                                    class="py-2 border-bottom border-light-subtle"
                                >
                                    {{ $name }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Text Content Column (Right) -->
                    <div class="col-12 col-lg-8 custom-scrollbar">
                        <h1 class="fade-up fs-3 mb-3">Services</h1>
                        <p class="fade-up fs-6 lh-lg">
                            <strong>OUR SERVICES</strong><br />
                            At Vidyovate, we offer a range of cutting-edge
                            technology solutions tailored to meet modern
                            business needs. Our core services include:
                            <br /><br />
                            Embark on your brand's digital journey with Vidyovate as your trusted partner.

                            At Vidyovate, we offer a comprehensive range of services tailored to meet your needs. 
                            From custom software development and digital transformation initiatives to UX/UI design 
                            and product optimization, our team is equipped to handle every aspect of your project 
                            with precision and expertise. We prioritize collaboration and communication throughout 
                            the process, ensuring that your vision is realized efficiently and effectively. With 
                            Vidyovate as your partner, you can trust that your project will exceed expectations and 
                            achieve success in record time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #5a6782, #a28aa1);
            height: 100vh;
        "
    >
        <div class="container">
            <div
                class="mx-auto p-4 scrollable-area custom-scrollbar"
                style="max-width: 960px; height: 100%; overflow-y: auto"
            >
                <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-4">
                    <div class="col-12 text-center mb-4">
                        <h2 class="fw-bold">Our Portfolio</h2>
                        <p class="text-light">
                            Here are some of the projects we've worked on
                            recently.
                        </p>
                    </div>

                    <!-- Portfolio Grid Items -->
                    @foreach ($projects as $project)
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div
                            class="card h-100 border-0 text-white bg-dark bg-opacity-75 shadow-sm rounded-4 overflow-hidden project-card"
                            style="
                                transition: transform 0.3s ease,
                                    box-shadow 0.3s ease;
                            "
                        >
                            @if (!empty($project['image']))
                            <div class="overflow-hidden">
                                <img
                                    src="{{ asset($project['image']) }}"
                                    class="card-img-top"
                                    alt="{{ $project['title'] }}"
                                    style="
                                        object-fit: cover;
                                        height: 100px;
                                        transition: transform 0.3s ease;
                                    "
                                />
                            </div>
                            @endif

                            <div class="card-body">
                                <h5 class="card-title fw-semibold">
                                    {{ $project["title"] }}
                                </h5>
                                <p class="card-text small text-white-50">
                                    {{ $project["description"] }}
                                </p>
                            </div>

                            <div class="card-footer bg-transparent border-0">
                                <a
                                    href="{{ $project['link'] }}"
                                    class="btn btn-outline-light btn-sm rounded-pill"
                                    target="_blank"
                                    >🔗 View Project</a
                                >
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <a
                        href="{{ route('portfolio') }}"
                        class="btn btn-outline-light btn-sm mt-3 px-4 rounded-pill shadow-sm"
                    >
                        View More Projects
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #a28aa1, #5a6782);
            height: auto;
            min-height: 100vh;
        "
    >
        <div class="container">
            <div
                class="mx-auto p-4"
                style="max-width: 1100px;"
            >
                <div class="bg-dark bg-opacity-50 text-white rounded-4 p-5">
                    <div class="fade-up mb-5 text-center">
                        <h2 class="text-white fw-bold text-uppercase tracking-wider">Work Process</h2>
                    </div>

                    <div class="row g-5 justify-content-center position-relative">
                        
                        <div class="col-12 col-md-4 text-center fade-up">
                            <div class="process-icon-wrapper mb-3">
                                <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center shadow-lg" style="width: 80px; height: 80px;">
                                    <i class="bi bi-lightbulb fs-2"></i>
                                </div>
                                <div class="fw-bold mt-2 text-primary">01</div>
                            </div>
                            <h5 class="fw-bold">Discussion & Brainstorming</h5>
                            <p class="small text-white-50">Meet, Information sharing, Proposal</p>
                        </div>

                        <div class="col-12 col-md-4 text-center fade-up" style="transition-delay: 0.1s">
                            <div class="process-icon-wrapper mb-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg" style="width: 80px; height: 80px; background-color: #f39c12;">
                                    <i class="bi bi-bullseye fs-2"></i>
                                </div>
                                <div class="fw-bold mt-2" style="color: #f39c12;">02</div>
                            </div>
                            <h5 class="fw-bold">Strategy & Prototyping</h5>
                            <p class="small text-white-50">Research, Schedule, Resource allocation</p>
                        </div>

                        <div class="col-12 col-md-4 text-center fade-up" style="transition-delay: 0.2s">
                            <div class="process-icon-wrapper mb-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg" style="width: 80px; height: 80px; background-color: #1abc9c;">
                                    <i class="bi bi-bezier2 fs-2"></i>
                                </div>
                                <div class="fw-bold mt-2" style="color: #1abc9c;">03</div>
                            </div>
                            <h5 class="fw-bold">UI UX Designing</h5>
                            <p class="small text-white-50">Graphic mockups, Colors, Typography</p>
                        </div>

                        <div class="col-12 col-md-4 text-center fade-up" style="transition-delay: 0.3s">
                            <div class="process-icon-wrapper mb-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg" style="width: 80px; height: 80px; background-color: #f1c40f;">
                                    <i class="bi bi-code-slash fs-2"></i>
                                </div>
                                <div class="fw-bold mt-2" style="color: #f1c40f;">04</div>
                            </div>
                            <h5 class="fw-bold">Implementation</h5>
                            <p class="small text-white-50">Present, Revise, Process, Finalize</p>
                        </div>

                        <div class="col-12 col-md-4 text-center fade-up" style="transition-delay: 0.4s">
                            <div class="process-icon-wrapper mb-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg" style="width: 80px; height: 80px; background-color: #9b59b6;">
                                    <i class="bi bi-gear-wide-connected fs-2"></i>
                                </div>
                                <div class="fw-bold mt-2" style="color: #9b59b6;">05</div>
                            </div>
                            <h5 class="fw-bold">Testing</h5>
                            <p class="small text-white-50">Finalization of all assets, test, pre-flight ready</p>
                        </div>

                        <div class="col-12 col-md-4 text-center fade-up" style="transition-delay: 0.5s">
                            <div class="process-icon-wrapper mb-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg" style="width: 80px; height: 80px; background-color: #2ecc71;">
                                    <i class="bi bi-rocket-takeoff fs-2"></i>
                                </div>
                                <div class="fw-bold mt-2" style="color: #2ecc71;">06</div>
                            </div>
                            <h5 class="fw-bold">Launch & Support</h5>
                            <p class="small text-white-50">Submit final assets to client</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #5a6782, #a28aa1);
            height: 100vh;
        "
        >
        <div class="container">
            <div
                class="mx-auto p-4 scrollable-area custom-scrollbar"
                style="max-width: 960px; height: 100%; overflow-y: auto"
            >
                <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-4">
                    <!-- Section Title -->
                    <div class="col-12 text-center mb-4">
                        <h2 class="fw-bold fade-up">Contact Us</h2>
                        <p class="fade-up text-light">
                            We’d love to hear from you. Send us a message and
                            we’ll get back to you shortly.
                        </p>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-md-7">
                        <form
                            action="{{ route('contact.submit') }}"
                            method="POST"
                            class="fade-up"
                        >
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Your Name</label
                                >
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control rounded-3"
                                    required
                                />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Your Email</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control rounded-3"
                                    required
                                />
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label"
                                    >Your Message</label
                                >
                                <textarea
                                    name="message"
                                    id="message"
                                    rows="5"
                                    class="form-control rounded-3"
                                    required
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-outline-light rounded-pill"
                            >
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-md-5 fade-up mt-4 mt-md-0">
                        <div
                            class="p-3 bg-secondary bg-opacity-25 rounded-3 h-100 d-flex flex-column justify-content-center"
                        >
                            <h5 class="mb-3">Get in Touch</h5>
                            <p class="mb-2">
                                <strong>📍 Address:</strong> Plot No, 293, Block-D, Pole No. 1138, Shyam Vihar

Najafgarh, New Delhi- 110043
                            </p>
                            <p class="mb-2">
                                <strong>📧 Email:</strong> support@vidyovate.com
                            </p>
                            <p class="mb-0">
                                <strong>📞 Phone:</strong> +91 7979885210
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--
    <div class="position-relative text-center py-5" style="min-height: 100vh">
        <!-- Background gradient layer -->
        <div
            class="position-absolute top-0 start-0 w-100 h-100"
            style="
                background: linear-gradient(
                    135deg,
                    rgb(196, 105, 191),
                    #1e3c72
                );
                z-index: 0;
            "
        ></div>

        <!-- Content box -->
        <div
            class="position-relative d-flex flex-column flex-lg-row justify-content-between align-items-center mx-auto bg-dark bg-opacity-50 p-4 rounded-4 text-white gap-4 z-1 content-box"
            style="max-width: 960px; width: 100%"
        >
            <!-- Services list -->
            <div
                class="d-flex justify-content-center align-items-center w-100 w-lg-auto"
            >
                <div
                    class="custom-scrollbar overflow-auto p-2 border border-light-subtle rounded-3 bg-dark bg-opacity-50"
                    style="max-height: 300px; width: 100%; max-width: 300px"
                >
                    <ul class="list-unstyled text-white mb-0">
                        @foreach ($services as $name)
                        <li class="py-2 border-bottom border-light-subtle">
                            {{ $name }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Text content -->
            <div class="flex-fill text-start w-100">
                <h1 class="fade-up fs-3 mb-3">Services</h1>
                <p class="fade-up fs-6 lh-lg">
                    <strong>OUR SERVICES</strong><br />
                    At Vidyovate, we offer a range of cutting-edge technology
                    solutions tailored to meet modern business needs. Our core
                    services include:
                    <br /><br />
                    Partner with Vidyovate to bring innovation, efficiency, and
                    scalability to your digital journey.
                </p>
            </div>
        </div>
    </div>
    --}} {{--
    <div class="position-relative text-center">
        <img
            src="{{ asset('images/workflow_management.jpg') }}"
            class="w-100"
            style="height: 595px; object-fit: cover"
            alt="Workflow"
        />
        <div
            class="position-absolute top-0 start-0 m-3 d-flex flex-column gap-4 text-white z-1"
            style="width: 10%; padding: 30px"
        >
            <h1 class="fade-up fs-3">Planning</h1>
            <p class="fade-up fs-6 text-black mt-5 ms-5">Client Consultation</p>
            <p class="fade-up fs-6 text-black ms-3">Solution Architecture</p>
        </div>
    </div>
    --}}
</div>
@endsection @section('script')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const fadeElements = document.querySelectorAll(".fade-up");
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    } else {
                        entry.target.classList.remove("visible");
                    }
                });
            },
            {
                threshold: 0.2,
            }
        );
        fadeElements.forEach((el) => observer.observe(el));
    });
</script>
@endsection
