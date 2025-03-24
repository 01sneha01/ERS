<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Event - Events</title>
  <link rel="stylesheet" href="styles.css">
   <?php include 'header.php'; ?>
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

    .events-section {
      padding: 4rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    .events-section h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: #2c3e50;
    }

    .events-section p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      color: #555;
    }

    .events-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .event-card {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .event-card:hover {
      transform: translateY(-5px);
    }

    .event-image {
      width: 100%;
      height: 180px;
      background-color: #ddd;
      background-size: cover;
      background-position: center;
    }

    .event-content {
      padding: 1.5rem;
      text-align: left;
    }

    .event-content h3 {
      font-size: 1.4rem;
      color: #34495e;
      margin-bottom: 0.5rem;
    }

    .event-content p {
      font-size: 1rem;
      color: #666;
      margin-bottom: 1rem;
    }

    .event-content .date {
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 0.5rem;
    }

    .register-btn {
      display: inline-block;
      padding: 0.6rem 1.2rem;
      background-color: #2c3e50;
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      font-size: 0.95rem;
      transition: background-color 0.3s ease;
    }

    .register-btn:hover {
      background-color: #1a242f;
    }
  </style>
</head>
<body>
  <section class="events-section">
    <h1>Upcoming Events</h1>
    <p>Discover exciting events happening at Prime College and register easily with Prime Event.</p>

    <div class="events-grid">
      <div class="event-card">
        <div class="event-image" style="background-image: url('https://via.placeholder.com/400x180');"></div>
        <div class="event-content">
          <span class="date">Baisakh 20, 2082</span>
          <h3>Sukul Session Vol-III</h3>
          <p>Join us for a night filled with live music, food stalls, and fun activities.</p>
          <a href="register.php" class="register-btn">Register Now</a>
        </div>
      </div>

      <div class="event-card">
        <div class="event-image" style="background-image: url('https://via.placeholder.com/400x180');"></div>
        <div class="event-content">
          <span class="date">Jesth 15, 2082</span>
          <h3>ICT Meetup</h3>
          <p>Learn from successful entrepreneurs and network with like-minded individuals.</p>
          <a href="register.php" class="register-btn">Register Now</a>
        </div>
      </div>

      <div class="event-card">
        <div class="event-image" style="background-image: url('https://via.placeholder.com/400x180');"></div>
        <div class="event-content">
          <span class="date">Asar 5, 2082</span>
          <h3>Bizz Fest</h3>
          <p>Explore creative artworks, handmade crafts, and support local artists.</p>
          <a href="register.php" class="register-btn">Register Now</a>
        </div>
      </div>
    </div>
  </section>
   <?php include 'footer.php'; ?>
</body>
</html>
