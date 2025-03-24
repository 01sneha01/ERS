  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Events - Home</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
    body { background: #f9f9f9; color: #2d3436; }
   .footer {
      background-color: #2c3e50;
      color: #fff;
      padding: 2.5rem 1rem;
      margin-top: 3rem;
    }
     .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
    }
     .footer-logo h2 {
      font-size: 1.8rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }
     .footer-logo p {
      font-size: 0.95rem;
      line-height: 1.5;
    }
     .footer-column h3 {
      font-size: 1.2rem;
      margin-bottom: 1rem;
      position: relative;
    }
    .footer-column h3::after {
      content: '';
      width: 40px;
      height: 3px;
      background-color: #e74c3c;
      position: absolute;
      bottom: -6px;
      left: 0;
    }
    .footer-column ul {
      list-style: none;
      padding-left: 0;
      margin-top: 1rem;
    }

    .footer-column ul li {
      margin-bottom: 0.7rem;
    }

    .footer-column ul li a {
      color: #dcdcdc;
      text-decoration: none;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }

    .footer-column ul li a:hover {
      color: #e74c3c;

    }

    .footer-bottom{

      text-align: center;
    }
  </style>
  <footer class="footer" id="contact">
  
    <div class="footer-container">
      <div class="footer-logo">
        <h2>Prime Event</h2>
        <p>Register for exciting events that awaits.</p>
      </div>

      <div class="footer-column">
        <h3>Useful Links</h3>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="event.php">Events</a></li>
          <li><a href="contact.php">Conatact</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Other Links</h3>
        <ul>
          <li><a href="FAQ.php">FAQs</a></li>
        </ul>
      </div>

      <div class="footer-column contact-info">
        <h3>Contact Us</h3>
        <p><i>📍</i> Prime College, Kathmandu, Nepal</p>
        <p><i>📞</i> +977-9800000000</p>
        <p><i>✉️</i> info@primeevent.com</p>
      </div>
    </div>

    <div class="footer-bottom">
      © 2025 Prime Event. All rights reserved.
    </div>

  </footer>
</body>
</html>
