@extends('layouts.app')

@section('content')
<section class="contact-section">
    <div class="contact-container">
        <h1 class="contact-title">Contact Us</h1>
        <p class="contact-subtitle">We'd love to hear from you! Whether you have a question, suggestion, or just want to say hello, feel free to reach out.</p>

        <div class="contact-content">
            <!-- Contact Form -->
            <div class="contact-form-container">
                <form action="#" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="contact-button">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>If you prefer to reach us directly, here's how:</p>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:info@louderinc.com">info@louderinc.com</a></li>
                    <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                    <li><strong>Address:</strong> 123 Music Lane, Melody City, Soundscape, 12345</li>
                </ul>
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" class="social-link">Facebook</a>
                    <a href="#" class="social-link">Twitter</a>
                    <a href="#" class="social-link">Instagram</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
