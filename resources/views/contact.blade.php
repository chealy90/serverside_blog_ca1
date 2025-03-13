@extends('layouts.app')


@section('content')
<section class="contact-section">
    <div class="container">
      <h1 class="text-center">Contact Us</h1>
      <p class="text-center">We'd love to hear from you! Whether you have a question, suggestion, or just want to say hello, feel free to reach out.</p>
  
      <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6">
          <form action="#" method="POST" class="contact-form">
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Your Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
  
        <!-- Contact Information -->
        <div class="col-md-6">
          <div class="contact-info">
            <h3>Get in Touch</h3>
            <p>If you prefer to reach us directly, here's how you can contact us:</p>
            <ul class="list-unstyled">
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
    </div>
  </section>
@endsection