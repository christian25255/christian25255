<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - HealthCare Hub</title>
  <!-- External CSS Links -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="favicon.ico">
  <style>
    /* General Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif; /* Custom font for modern look */
    }

    body {
      line-height: 1.6;
      background: linear-gradient(135deg, #ff7e5f, #feb47b);
      color: #333;
      font-size: 16px;
    }

    /* Login Section */
    #login {
      max-width: 450px;
      margin: 80px auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    #login h2 {
      font-size: 32px;
      margin-bottom: 20px;
      color: #333;
      font-weight: 600;
    }

    #login label {
      font-weight: 600;
      color: #333;
    }

    #login input {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 10px;
      border: 2px solid #ddd;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }

    #login input:focus {
      border-color: #ff6347;
    }

    #login button {
      background-color: #2575fc;
      padding: 15px 30px;
      font-size: 18px;
      color: white;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      width: 100%;
      transition: all 0.3s ease;
    }

    #login button:hover {
      background-color: #6a11cb;
      transform: scale(1.05); /* Button scale effect */
    }

    #login p {
      margin-top: 15px;
      color: #666;
    }

    #login a {
      color: #2575fc;
      text-decoration: none;
    }

    #login a:hover {
      text-decoration: underline;
    }

    /* Header */
    header {
      background-color: rgba(0, 0, 0, 0.8);
      padding: 15px 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    header .logo h1 {
      font-size: 28px;
      color: white;
      letter-spacing: 2px;
    }

    header nav ul {
      list-style-type: none;
      display: flex;
      justify-content: flex-end;
    }

    header nav ul li {
      margin-left: 30px;
    }

    header nav ul li a {
      color: white;
      font-size: 18px;
      font-weight: 500;
      text-transform: uppercase;
      transition: all 0.3s ease;
    }

    header nav ul li a:hover {
      color: #ff6347;
      border-bottom: 3px solid #ff6347;
    }

    /* Footer Section */
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 30px 20px;
    }

    footer p {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="logo">
      <h1>HealthCare Hub</h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- Login Section -->
  <section id="login">
    <h2>Login to HealthCare Hub</h2>
    <form action="login_process.php" method="POST" class="login-form">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Enter your username">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password">
      </div>

      <button type="submit">Login</button>

      <p>Don't have an account? <a href="register.html">Register here</a></p>
    </form>
  </section>

  <!-- Footer Section -->
  <footer id="contact">
    <p>Contact Us: info@healthcarehub.com | +123 456 7890</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
