<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga With Us - Transform Your Life Through Yoga</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.html" class="logo">
                <div class="logo-icon">🧘</div>
                <span>Yoga With Us</span>
            </a>
            <div class="nav-menu" id="navMenu">
                <a href="index.html" class="nav-link active">Home</a>
                <a href="about.html" class="nav-link">About</a>
                <a href="blog.html" class="nav-link">Blog</a>
                <a href="contact.html" class="nav-link">Contact</a>
                <a href="terms.html" class="nav-link">Terms</a>
                <a href="privacy.html" class="nav-link">Privacy</a>
            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwY2xhc3MlMjBncm91cHxlbnwwfHx8fDE3Mzc1Njk2MzJ8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Yoga practice" class="hero-image">
        <div class="hero-content">
            <h1>Discover Your<br>Inner Strength</h1>
            <p>Join our vibrant community and transform your life through mindful yoga practice. Build strength, find peace, and thrive.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="https://www.youtube.com/watch?v=v7AYKMP6rOE" target="_blank" class="btn btn-primary">Start Free Trial</a>
                <a href="#classes" class="btn btn-outline" style="border-color: white; color: white;">Explore Classes</a>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">10,000+</span>
                    <span class="stat-label">Happy Students</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Yoga Classes</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Expert Instructors</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Why Choose Us</span>
                <h2>Everything You Need to Thrive</h2>
                <p>From beginner to advanced, we offer comprehensive yoga programs designed to meet you wherever you are on your journey.</p>
            </div>
            <div class="grid grid-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community Focused</h3>
                    <p>Join a supportive community of like-minded individuals on their wellness journey. Connect, share, and grow together.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon" style="background: var(--gradient-2);">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Expert Instructors</h3>
                    <p>Learn from certified yoga teachers with years of experience in various styles including Hatha, Vinyasa, and Yin yoga.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon" style="background: var(--gradient-3);">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Schedule</h3>
                    <p>Practice anytime, anywhere with our on-demand classes. Access hundreds of sessions at your convenience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Classes Section -->
    <section class="section section-gradient" id="classes">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Classes</span>
                <h2>Explore Our Yoga Programs</h2>
                <p>From energizing flows to restorative practices, find the perfect class for your needs.</p>
            </div>
            <div class="grid grid-4">
                <div class="image-card">
                    <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwYmVnaW5uZXJ8ZW58MHx8fHwxNzM3NTY5NjMyfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Beginner Yoga">
                    <div class="image-card-content">
                        <h3>Beginner Friendly</h3>
                        <p>Start your yoga journey with gentle, foundational classes designed for complete beginners.</p>
                    </div>
                </div>
                <div class="image-card">
                    <img src="https://images.unsplash.com/photo-1588286840104-8957b019727f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwZmxvd3xlbnwwfHx8fDE3Mzc1Njk2MzJ8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Vinyasa Flow">
                    <div class="image-card-content">
                        <h3>Vinyasa Flow</h3>
                        <p>Dynamic, breath-synchronized movement that builds strength and improves flexibility.</p>
                    </div>
                </div>
                <div class="image-card">
                    <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwbWVkaXRhdGlvbnxlbnwwfHx8fDE3Mzc1Njk2MzJ8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Meditation">
                    <div class="image-card-content">
                        <h3>Meditation & Mindfulness</h3>
                        <p>Cultivate inner peace and mental clarity through guided meditation practices.</p>
                    </div>
                </div>
                <div class="image-card">
                    <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwcmVsYXhhdGlvbnxlbnwwfHx8fDE3Mzc1Njk2MzJ8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Restorative">
                    <div class="image-card-content">
                        <h3>Restorative Yoga</h3>
                        <p>Slow-paced, gentle practice focused on relaxation and stress relief.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Benefits</span>
                <h2>Transform Mind, Body & Spirit</h2>
                <p>Experience holistic wellness through regular yoga practice.</p>
            </div>
            <div class="grid grid-3">
                <div class="card">
                    <div class="card-icon">
                        <i class="fas fa-heart-pulse"></i>
                    </div>
                    <h3>Physical Health</h3>
                    <p>Improve flexibility, build strength, enhance posture, and boost overall physical fitness through consistent practice.</p>
                </div>
                <div class="card">
                    <div class="card-icon secondary">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Mental Clarity</h3>
                    <p>Reduce stress, improve focus, enhance concentration, and develop a calm, clear mind through mindfulness.</p>
                </div>
                <div class="card">
                    <div class="card-icon tertiary">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Emotional Balance</h3>
                    <p>Cultivate emotional resilience, inner peace, and a deeper connection with yourself and others.</p>
                </div>
                <div class="card">
                    <div class="card-icon" style="background: var(--gradient-2);">
                        <i class="fas fa-moon"></i>
                    </div>
                    <h3>Better Sleep</h3>
                    <p>Improve sleep quality and establish healthier sleep patterns through relaxation techniques and evening practices.</p>
                </div>
                <div class="card">
                    <div class="card-icon" style="background: var(--gradient-3);">
                        <i class="fas fa-fire-flame-curved"></i>
                    </div>
                    <h3>Increased Energy</h3>
                    <p>Boost vitality, reduce fatigue, and experience sustained energy throughout your day.</p>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <i class="fas fa-shield-heart"></i>
                    </div>
                    <h3>Immune Support</h3>
                    <p>Strengthen your immune system and promote overall wellness through regular yoga practice.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Classes Section -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Free Classes</span>
                <h2>Start Practicing Today</h2>
                <p>Explore our curated collection of free yoga classes for all levels.</p>
            </div>
            <div class="grid grid-3">
                <div class="video-card">
                    <div class="video-container">
                        <iframe src="https://www.youtube-nocookie.com/embed/v7AYKMP6rOE" title="Beginner Yoga" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="video-card-content">
                        <span class="badge">Beginner</span>
                        <h3>Complete Beginner Flow</h3>
                        <p>Perfect introduction to yoga with step-by-step guidance through foundational poses.</p>
                        <a href="https://www.youtube.com/watch?v=v7AYKMP6rOE" target="_blank" class="btn-text">Watch Full Video <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="video-card">
                    <div class="video-container">
                        <iframe src="https://www.youtube-nocookie.com/embed/oBu-pQG6sTY" title="Morning Yoga" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="video-card-content">
                        <span class="badge">All Levels</span>
                        <h3>Energizing Morning Flow</h3>
                        <p>Wake up your body and mind with this revitalizing morning sequence.</p>
                        <a href="https://www.youtube.com/watch?v=oBu-pQG6sTY" target="_blank" class="btn-text">Watch Full Video <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="video-card">
                    <div class="video-container">
                        <iframe src="https://www.youtube-nocookie.com/embed/COp7BR_Dvps" title="Relaxation Yoga" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="video-card-content">
                        <span class="badge">Relaxation</span>
                        <h3>Evening Wind Down</h3>
                        <p>Release tension and prepare for restful sleep with gentle, calming poses.</p>
                        <a href="https://www.youtube.com/watch?v=COp7BR_Dvps" target="_blank" class="btn-text">Watch Full Video <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section section-gradient">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Testimonials</span>
                <h2>What Our Community Says</h2>
                <p>Real stories from real people who transformed their lives with yoga.</p>
            </div>
            <div class="grid grid-3">
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <p class="testimonial-text">Yoga With Us has completely transformed my life. I've never felt more balanced, strong, and at peace. The instructors are incredible!</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx3b21hbiUyMHBvcnRyYWl0fGVufDB8fHx8MTczNzU2OTYzMnww&ixlib=rb-4.0.3&q=80&w=1080" alt="Sarah" class="author-avatar">
                        <div class="author-info">
                            <h4>Sarah Mitchell</h4>
                            <p>Marketing Manager</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <p class="testimonial-text">As a complete beginner, I was nervous to start. But the community here is so welcoming and supportive. Best decision I ever made!</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtYW4lMjBwb3J0cmFpdHxlbnwwfHx8fDE3Mzc1Njk2MzJ8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="James" class="author-avatar">
                        <div class="author-info">
                            <h4>James Rodriguez</h4>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <p class="testimonial-text">The flexibility in scheduling and variety of classes means I can always find something that fits my mood and energy level. Love it!</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwyfHx3b21hbiUyMHBvcnRyYWl0fGVufDB8fHx8MTczNzU2OTYzMnww&ixlib=rb-4.0.3&q=80&w=1080" alt="Emily" class="author-avatar">
                        <div class="author-info">
                            <h4>Emily Chen</h4>
                            <p>Entrepreneur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <span class="stat-number-large">10K+</span>
                    <span class="stat-label-large">Active Members</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number-large">500+</span>
                    <span class="stat-label-large">Yoga Classes</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number-large">50+</span>
                    <span class="stat-label-large">Expert Teachers</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number-large">98%</span>
                    <span class="stat-label-large">Satisfaction Rate</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container-narrow text-center">
            <h2>Ready to Begin Your Journey?</h2>
            <p class="lead">Join thousands of students who have discovered the transformative power of yoga. Start your free trial today.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="https://www.youtube.com/watch?v=v7AYKMP6rOE" target="_blank" class="btn btn-primary">Get Started Free</a>
                <a href="blog.html" class="btn btn-outline" style="border-color: white; color: white;">Read Our Blog</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>Yoga With Us</h3>
                <p>Empowering individuals to discover their inner strength and achieve holistic wellness through the transformative practice of yoga.</p>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Legal</h3>
                <ul>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Us</h3>
                <ul class="contact-list">
                    <li><i class="fas fa-envelope"></i> help@yogawithus.in</li>
                    <li><i class="fas fa-phone"></i> +1-736-635-2762</li>
                    <li><i class="fas fa-map-marker-alt"></i> San Francisco, CA</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <span id="currentYear"></span> Yoga With Us. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
