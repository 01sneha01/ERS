<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Event - Contact Us</title>
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
      padding: 2rem;
    }

    .contact-section {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }

    .contact-section h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: #2c3e50;
    }

    .contact-section p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      color: #555;
    }

    .contact-form {
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
      text-align: left;
    }

    .contact-form label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
      color: #2c3e50;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 0.8rem;
      margin-bottom: 1.2rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    .contact-form button {
      background-color: #2c3e50;
      color: #fff;
      padding: 0.9rem 1.5rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #34495e;
    }

    .contact-info {
      margin-top: 2rem;
      font-size: 1rem;
      color: #555;
      text-align: left;
    }

    .contact-info p {
      margin-bottom: 0.8rem;
    }
  </style>
</head>
<body>
  <section class="contact-section">
    <h1>Contact Us</h1>
    <p>Have questions or need assistance? Reach out to us!</p>

    <div class="contact-form">
    <form action="contacttest.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-info">
      <p><strong>Email:</strong> support@primeevent.com</p>
      <p><strong>Phone:</strong> +977-9800000000</p>
      <p><strong>Address:</strong> Prime College, Kathmandu, Nepal</p>
    </div>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>
