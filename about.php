<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Event - About Us</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }

    .about-section {
      padding: 4rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    .about-section h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: #2c3e50;
    }

    .about-section p {
      font-size: 1.1rem;
      margin-bottom: 1.5rem;
      color: #555;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin-top: 3rem;
    }

    .feature-card {
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-5px);
    }

    .feature-card h3 {
      font-size: 1.4rem;
      color: #34495e;
      margin-bottom: 0.8rem;
    }

    .feature-card p {
      font-size: 1rem;
      color: #666;
    }
  </style>
</head>
<body>
  <section class="about-section">
    <h1>About Prime Event</h1>
    <p>Prime Event is your ultimate platform for discovering, registering, and managing events. Our goal is to bridge the gap between organizers and attendees by providing a comprehensive event management solution.</p>

    <div class="features-grid">
      <div class="feature-card">
        <h3>Event Discovery</h3>
        <p>Explore a wide range of events happening around you, from concerts and workshops to corporate events.</p>
      </div>
      <div class="feature-card">
        <h3>Easy Registration</h3>
        <p>Register for events in just a few clicks with our user-friendly interface.</p>
      </div>
      <div class="feature-card">
        <h3>Organizer Dashboard</h3>
        <p>Manage your events, track registrations, and access real-time analytics through an intuitive dashboard.</p>
      </div>
      <div class="feature-card">
        <h3>QR Code Ticketing</h3>
        <p>Experience hassle-free entry with QR code-based ticketing and quick check-ins.</p>
      </div>
      <div class="feature-card">
        <h3>Admin Panel</h3>
        <p>Stay in control with tools for user management, event moderation, and performance reports.</p>
      </div>
      <div class="feature-card">
        <h3>Upcoming Events</h3>
        <p>Stay updated with the latest events and never miss out on exciting opportunities.</p>
      </div>
    </div>
  </section>
<?php include 'footer.php'; ?>
</body>
</html>
