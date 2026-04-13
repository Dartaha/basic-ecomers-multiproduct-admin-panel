<?php
$name ="";
$data = file("data.txt");
foreach($data as $line){
  $ind = explode(",",$line);
  for($i=0;$i<count($data);$i++){
  $name = $ind[0];
  
  };
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ancient Motor | Used Cars</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Site header: brand + navigation + call-to-action -->
  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="home.php">
        <span class="brand-mark" aria-hidden="true">AM</span>
        <span class="brand-name">Ancient Motor</span>
      </a>

      <nav class="nav" aria-label="Primary">
        <a href="home.php#featured">Featured</a>
        <a href="home.php#about">About</a>
        <a href="home.php#contact">Contact</a>
      </nav>

      <div class="header-cta">
        <?php
        if ($name == ""){
        ?>
        <a class="secondary-button header-cta-secondary" href="login.php">Log in</a>
        <a class="cta-button" href="singup.php">Sign up</a>
        <?php 
        }
        else{
        ?>
        <a class="secondary-button header-cta-secondary" href="login.php"><?php echo $name ?></a>
        <?php }; 
        ?>
      </div>
    </div>
  </header>

  <main>
    <!-- Hero / primary call-to-action -->
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy">
          <p class="eyebrow">Quality used cars, inspected and ready</p>
          <h1>Drive Your Next Adventure</h1>
          <p class="lead">
            Browse dependable vehicles with transparent pricing. Talk to our team and get a quick quote today.
          </p>

          <div class="hero-actions">
            <a class="primary-button" href="#featured">Browse Cars</a>
            <a class="secondary-button" href="#about">Learn More</a>
          </div>

          <ul class="hero-stats">
            <li><strong>120+</strong> Cars Listed</li>
            <li><strong>4.8</strong> Avg. Customer Rating</li>
            <li><strong>Same-Day</strong> Quotes</li>
          </ul>
        </div>

        <aside class="hero-visual" aria-label="Featured highlights">
          <div class="hero-vehicle">
            <div class="hero-vehicle-top">
              <span class="hero-year">2023</span>
              <span class="hero-model">BMW 3 Series</span>
            </div>
            <div class="hero-vehicle-body" aria-hidden="true">
              <div class="car-silhouette car-silhouette--img">
                <img
                  class="car-silhouette-img"
                  src="https://tse4.mm.bing.net/th/id/OIP.IEMo1uVeDjVZmkenY1zqfAHaFj?rs=1&pid=ImgDetMain&o=7&rm=3"
                  alt="Vehicle preview" />
              </div>
            </div>
            <div class="hero-vehicle-bottom">
              <span class="hero-price">$19,900</span>
              <span class="hero-tag">Limited Stock</span>
            </div>
          </div>
          <div class="hero-badge" role="note">Trusted Dealer</div>
        </aside>
      </div>
    </section>

    <!-- Featured vehicles: car cards grid -->
    <section id="featured" class="section">
      <div class="container">
        <div class="section-heading">
          <h2>Featured Vehicles</h2>
          <p>Handpicked listings with strong value and clean inspection reports.</p>
        </div>


        <div class="vehicle-grid">
          <?php

          $car = file('car_detail.txt');
          foreach ($car as $c) {
            $c_detail = explode(",", $c);


          ?>
            <article class="vehicle-card">
              <div
                class="vehicle-image <?php echo !empty($c_detail[4] ?? '') ? 'vehicle-image--hasimg' : ''; ?>"
                aria-hidden="true">
                <?php if (!empty($c_detail[4] ?? '')): ?>
                  <img
                    class="vehicle-img"
                    src="<?php echo htmlspecialchars($c_detail[4], ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Vehicle image" />
                <?php endif; ?>
              </div>
              <div class="vehicle-content">
                <div class="vehicle-top">
                  <h3><?php echo $c_detail[0]; ?></h3>
                  <span class="price"><?php echo "$" . $c_detail[1]; ?></span>
                </div>
                <p class="vehicle-meta"><?php echo $c_detail[2] . " • " . $c_detail[3]; ?></p>
                <ul class="vehicle-features">
                  <li>Bluetooth</li>
                  <li>Back Camera</li>
                  <li>Heated Seats</li>
                </ul>
                <a class="vehicle-link" href="#contact">Request Info</a>
              </div>
            </article>
          <?php
          }
          ?>


    </section>

    <!-- About: why choose Ancient Motor -->
    <section id="about" class="section section-alt">
      <div class="container about-grid">
        <div class="about-copy">
          <div class="section-heading section-heading-left">
            <h2>Why Ancient Motor?</h2>
            <p>We keep it simple: inspect, verify, and sell cars you can trust.</p>
          </div>

          <div class="checklist">
            <div class="check-item">
              <span class="check-icon" aria-hidden="true">✓</span>
              <div>
                <h3>Transparent pricing</h3>
                <p>Upfront costs with no surprise fees.</p>
              </div>
            </div>
            <div class="check-item">
              <span class="check-icon" aria-hidden="true">✓</span>
              <div>
                <h3>Vehicle inspections</h3>
                <p>We review key systems and provide details.</p>
              </div>
            </div>
            <div class="check-item">
              <span class="check-icon" aria-hidden="true">✓</span>
              <div>
                <h3>Friendly support</h3>
                <p>Get help choosing the right fit for your needs.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="about-panel" aria-label="Quality Promise panel">
          <h3>Quality Promise</h3>
          <p>
            Every listing includes essential information so you can decide with confidence. We’re here to answer
            questions and help with your next steps.
          </p>

          <div class="promise-stats">
            <div class="promise">
              <div class="promise-num">24/7</div>
              <div class="promise-label">Customer Queries</div>
            </div>
            <div class="promise">
              <div class="promise-num">30+</div>
              <div class="promise-label">Daily Checks</div>
            </div>
            <div class="promise">
              <div class="promise-num">4.8★</div>
              <div class="promise-label">Buyer Satisfaction</div>
            </div>
          </div>

          <a class="primary-button full" href="#contact">Talk to Our Team</a>
        </div>
      </div>
    </section>

    <!-- Testimonials: what buyers say -->
    <section id="testimonials" class="section">
      <div class="container">
        <div class="section-heading">
          <h2>What Buyers Say</h2>
          <p>Real feedback from people who found their next car with us.</p>
        </div>

        <div class="testimonial-grid">
          <figure class="testimonial">
            <blockquote>
              “The inspection details were clear, and the quote came quickly. I’m happy with the vehicle condition.”
            </blockquote>
            <figcaption>— Aisha M.</figcaption>
          </figure>
          <figure class="testimonial">
            <blockquote>
              “Friendly team and transparent pricing. They explained everything without pressure.”
            </blockquote>
            <figcaption>— Daniel R.</figcaption>
          </figure>
          <figure class="testimonial">
            <blockquote>
              “Great selection and helpful support. The car felt exactly as described.”
            </blockquote>
            <figcaption>— Sarah K.</figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- Contact: quote request + dealership details -->
    <section id="contact" class="section section-alt contact">
      <div class="container contact-grid">
        <div class="contact-copy">
          <div class="section-heading section-heading-left">
            <h2>Get a Quote</h2>
            <p>Send your details and we’ll get back to you as soon as possible.</p>
          </div>

          <div class="contact-cards">
            <div class="contact-card">
              <h3>Visit Us</h3>
              <p>24 Heritage Road, Your City</p>
              <p class="small">Open Mon-Sat • 9AM - 6PM</p>
            </div>
            <div class="contact-card">
              <h3>Call / WhatsApp</h3>
              <p><a class="muted-link" href="tel:+1000000000">+1 (000) 000-0000</a></p>
              <p class="small">Quick responses during business hours</p>
            </div>
          </div>
        </div>

        <form class="contact-form" action="#" method="post">
          <!-- Quote form fields -->
          <label>
            <span>Your Name</span>
            <input type="text" name="name" placeholder="e.g., John Doe" required />
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email" placeholder="e.g., john@example.com" required />
          </label>
          <label>
            <span>Phone</span>
            <input type="tel" name="phone" placeholder="e.g., +1 555 123 4567" />
          </label>
          <label>
            <span>Message</span>
            <textarea name="message" rows="5" placeholder="Tell us which car you're interested in..."></textarea>
          </label>
          <button class="primary-button full" type="submit">Request Quote</button>
          <p class="form-note">
            By submitting, you agree to be contacted by Ancient Motor regarding your request.
          </p>
        </form>
      </div>
    </section>
  </main>

  <!-- Page footer: brand + quick links + copyright -->
  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <span class="brand-mark" aria-hidden="true">AM</span>
        <div>
          <div class="footer-title">Ancient Motor</div>
          <div class="footer-subtitle">Quality used cars • Transparent deals</div>
        </div>
      </div>

      <div class="footer-links" aria-label="Footer links">
        <a href="home.php#featured">Featured</a>
        <a href="home.php#about">About</a>
        <a href="home.php#contact">Contact</a>
        <a href="login.php">Log in</a>
        <a href="singup.php">Sign up</a>
      </div>

      <div class="footer-copy">
        <p>© <?php echo date('Y'); ?> Ancient Motor. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>

</html>
