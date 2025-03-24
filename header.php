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

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.8rem 1.5rem;
      background: #fff;
      border-bottom: 1px solid #e0e0e0;
    }
    .logo { font-size: 1.5rem; font-weight: 600; color: #2d3436; }
    .logo span { color: #0984e3; }
    .nav-links { display: flex; gap: 1rem; list-style: none; }
    .nav-links a { text-decoration: none; color: #636e72; font-size: 0.9rem; }
    .nav-links a:hover { color: #0984e3; }
    .nav-icons { display: flex; align-items: center; gap: 0.8rem; }
    .cart { position: relative; font-size: 1.1rem; cursor: pointer; color: #2d3436; }
    .cart-count { position: absolute; top: -6px; right: -8px; background: #74b9ff; color: #fff; font-size: 0.65rem; padding: 1px 5px; border-radius: 50%; }
    .btn {
      padding: 0.35rem 0.8rem;
      border-radius: 15px;
      font-size: 0.8rem;
      border: none;
      cursor: pointer;
      transition: background 0.2s;
    }
    .list-event { background: transparent; color: #0984e3; border: 1px solid #0984e3; }
    .list-event:hover { background: #0984e3; color: #fff; }
    .login { background: #fdcb6e; color: #2d3436; }
    .login:hover { background: #e1b563; }

   </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">prime<span>events</span></div>
    <ul class="nav-links">
       <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="event.php">Events</a></li>
      <li><a href="FAQ.php">FAQs</a></li>
      <li><a href="contact.php">Contact</a></li>
      
    </ul>
    <div class="nav-icons">
      <button class="btn list-event">
       <a href="event.php">List Event</a></button>
      <button class="btn login"><i class="fas fa-user"></i>
     <a href="login.php">Log in</a> </button>

    </div>
  </nav>
  </body>
</html>
