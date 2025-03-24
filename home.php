<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Events - Home</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<?php include 'header.php'; ?>
  <style>

     /* Hero Section */
    .hero {
      background: url('images/header.png') center/cover no-repeat;
      text-align: center;
      padding: 4rem 1rem;
      color: #fff;
      position: relative;
    }
    .hero::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero-content {
      position: relative;
      max-width: 700px;
      margin: auto;
    }
    .hero h1 { font-size: 2.5rem; margin-bottom: 1rem; }
    .hero p { font-size: 1rem; margin-bottom: 1.5rem; }
    .hero .btn-primary {
      background: #0984e3;
      color: #fff;
      padding: 0.6rem 1.2rem;
      border-radius: 20px;
      text-decoration: none;
      font-size: 0.9rem;
    }

    /* Featured Events */
    .featured-events {
      padding: 2rem 1rem;
      text-align: center;
    }
    .featured-events h2 { margin-bottom: 1rem; font-size: 1.8rem; }
    .events-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      max-width: 1400px;
      margin: auto;
    }
    .event-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: left;
      padding: 1.5rem;
    }
    .event-card img { width: 100%; height: 150px; object-fit: cover; }
    .event-card-content {
      padding: 1.2rem;
    }
    .event-card-content h3 { font-size: 1.5rem; margin-bottom: 0.7rem; }
    .event-card-content p { font-size: 1rem; color: #636e72; }

    /* Stats Section */
    .stats {
      background: #f1f2f6;
      padding: 2rem 1rem;
      text-align: center;
    }
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1rem;
      max-width: 1000px;
      margin: auto;
    }
    .stat {
      background: #fff;
      padding: 1rem;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    .stat h3 { font-size: 1.5rem; color: #0984e3; }
    .stat p { font-size: 0.9rem; }

    /* Partners */
    .partners {
      padding: 2rem 1rem;
      background: #fff;
      text-align: center;
    }
    .partners h2 { margin-bottom: 1rem; font-size: 1.6rem; }
    .partner-logos {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .register-button {
  font-size: 1rem;
  padding: 10px 18px;
  background-color: black;
  color: white;
  border-radius: 6px;
  display: inline-block;
  margin-top: 15px; /* Adjust this value to move it down */
}
.event-card-content {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.register-button {
  margin-top: auto; /* Pushes the button to the bottom */
}

    .partner-logos img { width: 120px; opacity: 0.7; transition: opacity 0.2s; }
    .partner-logos img:hover { opacity: 1; }

    .faq-section {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }

    .faq-section h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: #2c3e50;
    }
     .faq-section p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      color: #555;
    }

    .faq-container {
      text-align: left;
    }

    .faq-item {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 1rem;
      overflow: hidden;
    }

    .faq-question {
      padding: 1rem 1.5rem;
      background-color: #2c3e50;
      color: #fff;
      cursor: pointer;
      font-size: 1.1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
     .faq-answer {
      padding: 1rem 1.5rem;
      display: none;
      background-color: #f1f1f1;
      color: #333;
      font-size: 1rem;
    }

    .faq-item.active .faq-answer {
      display: block;
    }

      </style>
  </head>
  <body>


  <section class="hero">
    <div class="hero-content">
      <h1>Discover Exciting Events At Prime</h1>
      <p>Step into the excitement – save your spot!</p>
      <a href="event.php" class="btn-primary">Explore Events</a>
    </div>
  </section>




<div class="container-fluid" style="width: 100%;display: flex;padding: 20px;">
 <div class="col-md-12" style="width: 100%;display: flex;">

<div class="col-md-6" style="width:50%;padding: 10px;">
	<center>
	 <h2 style="color: #000;font-size: 26px;">Welcome to Event Registration System !</h2>
	 <p>
	 	Prime Events is your one-stop platform for discovering and registering for the most exciting events at Prime College. Designed for both Prime students and event enthusiasts, this user-friendly system brings you closer to a world of unforgettable experiences. From workshops and cultural fests to sports tournaments and tech expos, Prime Events showcases everything happening on campus in one convenient place.
	 </p>
	 <p style="text-align: justify;">
	 	With just a few clicks, you can explore event details, check schedules, and secure your spot effortlessly. Whether you're looking to learn, connect, or simply have fun, Prime Events ensures you never miss out on the action. Join the vibrant Prime College community and make every moment count – register today and be part of something extraordinary!</p>
<br>
	 <a href="about.php" class="btn-primary" style="background:#000;color: #fff;padding: 10px;text-decoration: none;border-radius: 5px;">Read More</a> &nbsp &nbsp  <a href="contact.php" class="btn-primary" style="background:#000;color: #fff;padding: 10px;text-decoration: none;border-radius: 5px;">Contact Us</a>

	</center>
</div>
<div class="col-md-6" style="width:50%;padding: 10px;">
	 <center>
	 <img src="images/abt.png" alt="Partner 1" style="border-radius: 5px;width: 500px;height: 300px;">
	</center>
</div>
</div>
</div>

<br>

	</center>
</div>
</div>
</div>

  <section class="featured-events" id="events">
    <h2>Featured Events</h2>
    <div class="events-grid">
      <div class="event-card">
        <div class="event-image" style="background-image: url('https://via.placeholder.com/400x180');"></div>
        <div class="event-content">
          <span class="date">Baisakh 20, 2082</span>
          <h3>Sukul Session Vol-III</h3>
          <p>Join us for a night filled with live music, food stalls, and fun activities.</p><br>
          <a href="register.php" class="register-btn" style="background:#000;color: #fff;padding: 5px;text-decoration: none;border-radius: 5px;">Register Now</a>


        </div>
      </div>

      <div class="event-card">
        <div class="event-image" style="background-image: url('https://via.placeholder.com/400x180');"></div>
        <div class="event-content">
          <span class="date">Jesth 15, 2082</span>
          <h3>ICT Meetup</h3>
          <p>Learn from successful entrepreneurs and network with like-minded individuals.</p><br>
         <a href="register.php" class="register-btn" style="background:#000;color: #fff;padding: 5px;text-decoration: none;border-radius: 5px;">Register Now</a>
        </div>
      </div>

      <div class="event-card">
        <div class="event-image" style="background-image: url('https://via.placeholder.com/400x180');"></div>
        <div class="event-content">
          <span class="date">Asar 5, 2082</span>
          <h3>Bizz Fest</h3>
          <p>Explore creative artworks, handmade crafts, and support local artists.</p><br>
       <a href="register.php" class="register-btn" style="background:#000;color: #fff;padding: 5px;text-decoration: none;border-radius: 5px;">Register Now</a>
        </div>
  </section>


 <!--  <section class="stats">
    <div class="stats-grid">
      <div class="stat">
        <h3>500+</h3>
        <p>Events Hosted</p>
      </div>
      <div class="stat">
        <h3>10K+</h3>
        <p>Tickets Sold</p>
      </div>
      <div class="stat">
        <h3>300+</h3>
        <p>Event Organizers</p>
      </div>
      <div class="stat">
        <h3>20+</h3>
        <p>Cities Covered</p>
      </div>
    </div>
  </section> -->


  <div class="col-md-12" style="width: 100%;display: flex;padding: 20px;">

<div class="col-md-3" style="width:25%;">
	<center>
	 <h2>Our Partners</h2>
	 <img src="images/khalti.png" alt="Partner 1">
	</center>
</div>
<div class="col-md-3" style="width:25%;">
	 <center>
	 <h2>Our Partners</h2>
	 <img src="images/HCI.png" alt="Partner 1">
	</center>
</div>
<div class="col-md-3" style="width:25%;">
	 <center>
	 <h2>Our Partners</h2>
	 <img src="images/WOW.png" alt="Partner 1">
	</center>
</div>
<div class="col-md-3" style="width:25%;">
	 <center>
	 <h2>Our Partners</h2>
	 <img src="images/niu.png" alt="Partner 1">
	</center>
</div>

</div>
<section class="faq-section">
    <h1>Frequently Asked Questions</h1>
    <p>Your queries answered to make your event experience seamless.</p>

    <div class="faq-container">
      <div class="faq-item">
        <div class="faq-question">How do I register for an event?<span>+</span></div>
        <div class="faq-answer">You can register by clicking the "Register Now" button under the event listing and following the prompts.</div>
      </div>

      <div class="faq-item">
        <div class="faq-question">Can I cancel my registration?<span>+</span></div>
        <div class="faq-answer">Yes, you can cancel your registration through your profile dashboard before the event date.</div>
      </div>

      <div class="faq-item">
        <div class="faq-question">Are the events free or paid?<span>+</span></div>
        <div class="faq-answer">Some events are free while others require a fee. Please check the event details for more information.</div>
      </div>

      <div class="faq-item">
        <div class="faq-question">How do I receive my event ticket?<span>+</span></div>
        <div class="faq-answer">After successful registration, you will receive an e-ticket via email along with a QR code for entry.</div>
      </div>
    </div>
  </section>

  <script>
    document.querySelectorAll('.faq-item').forEach(item => {
      item.querySelector('.faq-question').addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>
<?php include 'footer.php'; ?>
</body>
</html>
