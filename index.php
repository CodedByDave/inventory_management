<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Academy - Excellence in Education</title>
    <?php
        include 'includes/header.php'
    ?>
    <style>
        :root {
            --primary: #2c5e92;
            --secondary: #f8a51b;
            --light: #f5f5f5;
            --dark: #333;
            --white: #fff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark);
        }
        
        .bg-primary {
            background-color: var(--primary) !important;
        }
        
        .text-primary {
            color: var(--primary) !important;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-primary:hover {
            background-color: #1d456f;
            border-color: #1d456f;
        }
        
        .btn-secondary {
            background-color: var(--secondary);
            border-color: var(--secondary);
            color: var(--dark);
        }
        
        .btn-secondary:hover {
            background-color: #e69517;
            border-color: #e69517;
            color: var(--dark);
        }
        
        .hero {
            background: linear-gradient(rgba(44, 94, 146, 0.8), rgba(44, 94, 146, 0.8)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 180px 0 100px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 40px;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--secondary);
        }
        
        .program-card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .program-img {
            height: 200px;
            overflow: hidden;
        }
        
        .program-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .program-card:hover .program-img img {
            transform: scale(1.1);
        }
        
        .testimonial-card {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--secondary);
        }
        
        footer {
            background-color: var(--dark);
            color: var(--white);
        }
        
        .footer-links a {
            color: var(--light);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--secondary);
        }
        
        .social-icon {
            color: var(--white);
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        
        .social-icon:hover {
            color: var(--secondary);
        }
        
        .navbar {
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: var(--white) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand img {
            height: 40px;
        }
        
        @media (max-width: 768px) {
            .hero {
                padding: 150px 0 80px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.png" alt="Lorem Academy" class="img-fluid" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programs">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admissions">Admissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="login.php">
                            <i class="fas fa-user me-1"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Shaping Future Leaders Through Excellence</h1>
                    <p class="lead mb-5">Lorem Academy provides a nurturing environment where students discover their passions, develop critical thinking skills, and prepare for success in an ever-changing world.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#admissions" class="btn btn-primary btn-lg px-4">Apply Now</a>
                        <a href="#about" class="btn btn-secondary btn-lg px-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light" id="about">
        <div class="container py-5">
            <h2 class="text-center section-title">About Our School</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="School Building" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Welcome to Lorem Academy</h2>
                    <p class="lead">Founded in 1995, Lorem Academy has been providing quality education for over 25 years.</p>
                    <p>Our mission is to inspire students to achieve their personal best in learning, leadership, and life. We foster intellectual curiosity, critical thinking, and a love of learning in a supportive and inclusive environment.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">500+ Graduates</h5>
                                    <small>Successful alumni</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">50+ Teachers</h5>
                                    <small>Certified professionals</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-3">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-5" id="programs">
        <div class="container py-5">
            <h2 class="text-center section-title">Our College Programs</h2>
            <p class="text-center lead mb-5">We offer diverse degree programs designed to prepare students for professional success.</p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card">
                        <div class="program-img">
                            <img src="./assets/images/BSIT.jpg" class="card-img-top" alt="BSIT Program">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BS in Information Technology</h5>
                            <p class="card-text">Develop skills in software development, networking, and system administration.</p>
                            <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card">
                        <div class="program-img">
                            <img src="./assets/images/BSA.jpg" class="card-img-top" alt="BSBA Program">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BS in Business Administration</h5>
                            <p class="card-text">Gain knowledge in finance, marketing, and entrepreneurship to become future business leaders.</p>
                            <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card">
                        <div class="program-img">
                            <img src="./assets/images/BSED.jpg" class="card-img-top" alt="BSED Program">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BS in Secondary Education</h5>
                            <p class="card-text">Train to become a high school educator with a strong foundation in teaching and pedagogy.</p>
                            <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card">
                        <div class="program-img">
                            <img src="./assets/images/BSCrim.jpg" class="card-img-top" alt="BEED Program">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BS in Elementary Education</h5>
                            <p class="card-text">Prepare for a teaching career focused on young learners from kindergarten through grade 6.</p>
                            <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Admissions Section -->
    <section class="py-5 bg-light" id="admissions">
        <div class="container py-5">
            <h2 class="text-center section-title">Admissions</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <h3 class="mb-4">Ready to Join Our Community?</h3>
                            <p>We're excited you're considering Lorem Academy for your child's education. Our admissions process is designed to help us get to know your family and ensure we're the right fit for your educational goals.</p>
                            <div class="accordion mt-4" id="admissionsAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#process">
                                            Admissions Process
                                        </button>
                                    </h2>
                                    <div id="process" class="accordion-collapse collapse show" data-bs-parent="#admissionsAccordion">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Submit online application</li>
                                                <li>School tour and interview</li>
                                                <li>Assessment testing</li>
                                                <li>Admissions decision</li>
                                                <li>Enrollment completion</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#requirements">
                                            Requirements
                                        </button>
                                    </h2>
                                    <div id="requirements" class="accordion-collapse collapse" data-bs-parent="#admissionsAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Completed application form</li>
                                                <li>Previous school records</li>
                                                <li>Birth certificate</li>
                                                <li>Immunization records</li>
                                                <li>Teacher recommendations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <h3 class="mb-4">Schedule a Tour</h3>
                            <form id="tourForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Student Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentGrade" class="form-label">Student Year Level</label>
                                    <select class="form-select" id="studentGrade" required>
                                        <option value="" selected disabled>Select Year Level</option>
                                        <option value="1">1st Year College</option>
                                        <option value="2">2nd Year College</option>
                                        <option value="3">3rd Year College</option>
                                        <option value="4">4th Year College</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tourDate" class="form-label">Preferred Tour Date</label>
                                    <input type="date" class="form-control" id="tourDate" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5" id="testimonials">
        <div class="container py-5">
            <h2 class="text-center section-title">What Parents Say</h2>
            <p class="text-center lead mb-5">Hear from our school community</p>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card testimonial-card">
                                    <div class="card-body text-center p-4">
                                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Parent" class="testimonial-img mb-3">
                                        <p class="fst-italic mb-4">"Lorem Academy has provided my child with an exceptional education and a nurturing environment. The teachers are dedicated and truly care about each student's success."</p>
                                        <h5 class="mb-1">Sarah Johnson</h5>
                                        <p class="text-muted">Parent of 4th Grader</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card testimonial-card">
                                    <div class="card-body text-center p-4">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Parent" class="testimonial-img mb-3">
                                        <p class="fst-italic mb-4">"The STEM program at Lorem prepared my daughter exceptionally well for college. She's now thriving in her engineering program thanks to the strong foundation she received."</p>
                                        <h5 class="mb-1">Michael Thompson</h5>
                                        <p class="text-muted">Parent of Alumni</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card testimonial-card">
                                    <div class="card-body text-center p-4">
                                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Parent" class="testimonial-img mb-3">
                                        <p class="fst-italic mb-4">"We transferred our son to Lorem in middle school and it was the best decision we could have made. His confidence and academic performance have improved dramatically."</p>
                                        <h5 class="mb-1">Lisa Rodriguez</h5>
                                        <p class="text-muted">Parent of 7th Grader</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white" id="cta">
        <div class="container py-5 text-center">
            <h2 class="mb-4">Ready to Start Your Journey With Us?</h2>
            <p class="lead mb-5">Join the Lorem Academy family and give your child the gift of an exceptional education.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#admissions" class="btn btn-light btn-lg px-4">Apply Now</a>
                <a href="#contact" class="btn btn-outline-light btn-lg px-4">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5" id="contact">
        <div class="container py-5">
            <h2 class="text-center section-title">Contact Us</h2>
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h3 class="mb-4">Get In Touch</h3>
                    <p>We'd love to hear from you! Reach out with any questions about our programs, admissions process, or to schedule a tour.</p>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary rounded-circle p-2 me-3 text-white">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <p class="mb-0">123 Education Way, Greenwood, CA 90210</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary rounded-circle p-2 me-3 text-white">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p class="mb-0">(555) 123-4567</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary rounded-circle p-2 me-3 text-white">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="mb-0">info@loremwoodacademy.edu</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start">
                        <div class="bg-primary rounded-circle p-2 me-3 text-white">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Office Hours</h5>
                            <p class="mb-0">Monday-Friday: 8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <h3 class="mb-4">Send Us a Message</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="contactName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="contactName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="contactEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="contactEmail" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="contactSubject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="contactSubject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contactMessage" class="form-label">Message</label>
                                    <textarea class="form-control" id="contactMessage" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-lg-4">
                    <p>Lorem Academy is committed to providing an exceptional education that prepares students for success in college, career, and life.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#home">Home</a></li>
                        <li class="mb-2"><a href="#about">About Us</a></li>
                        <li class="mb-2"><a href="#programs">Programs</a></li>
                        <li class="mb-2"><a href="#admissions">Admissions</a></li>
                        <li class="mb-2"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="text-white mb-4">Academics</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">Elementary</a></li>
                        <li class="mb-2"><a href="#">Middle School</a></li>
                        <li class="mb-2"><a href="#">High School</a></li>
                        <li class="mb-2"><a href="#">Curriculum</a></li>
                        <li class="mb-2"><a href="#">Faculty</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Subscribe to our newsletter for the latest news and updates.</p>
                    <form class="mt-4">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Lorem Academy. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="footer-links">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#" class="footer-links">Terms of Use</a></li>
                        <li class="list-inline-item"><a href="#" class="footer-links">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php
        include 'includes/footer.php'
    ?>
</body>
</html>