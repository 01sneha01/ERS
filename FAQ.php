<!DOCTYPE html>
<html lang="en">
 <?php include 'header.php'; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Event - FAQ</title>
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
      padding: 2rem;
    }

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
