<html>
  <head>
    <title>MUSIC</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /* Overall body style */
      body {
        background: url('music.jpg') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Arial', sans-serif;
        color: #fff;
      }

      /* Header style */
      header {
        padding: 50px 0;
        background-color: rgba(0, 0, 0, 0.7);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.6);
      }

      header .container-fluid {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      header h6 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 0;
      }

      /* Navbar buttons */
      .navbar-btn a {
        text-decoration: none;
        color: white;
        font-weight: 500;
        padding: 10px 20px;
        transition: color 0.3s;
      }

      .navbar-btn a:hover {
        color: #ff4500; /* A nice hover color */
      }

      .navbar-btn button {
        background: none;
        border: none;
        padding: 0;
        margin: 0;
        cursor: pointer;
      }

      /* Search Form */
      .search-form {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .search-form input {
        padding: 8px 12px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #222;
        color: white;
      }

      .search-form button {
        padding: 8px 12px;
        background-color: #ff4500;
        color: white;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .search-form button:hover {
        background-color: #ff6347;
      }

      /* Flex container for music covers */
      .image-container {
        display: flex;
        justify-content: flex-start; /* Align items to the left */
        gap: 20px;
        flex-wrap: wrap;
      }

      /* Music cover section */
      #cover {
        border: 1px solid #fff;
        text-align: center;
        width: 320px;
        height: 480px;
        border-radius: 20px;
        background-color: rgba(0, 0, 0, 0.6);
        box-shadow: 0px 0px 16px 7px rgba(0, 0, 0, 0.5);
        opacity: 0.9;
        padding: 20px;
        margin: 20px;
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
      }

      #cover:hover {
        transform: scale(1.05);
      }

      #cover img {
        border-radius: 15px;
        transition: transform 0.3s ease;
        width: 100%;
        height: auto;
      }

      #cover:hover img {
        transform: scale(1.1);
      }

      /* Text inside cover */
      .text {
        position: absolute;
        bottom: 10%;
        left: 10px;
        right: 10px;
      }

      .text h1 {
        font-size: 26px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
      }

      .text h2 {
        font-size: 18px;
        color: #ff4500;
        font-weight: 400;
        opacity: 0.8;
      }

      /* Footer style */
      footer {
        background-color: #222;
        text-align: center;
        padding: 20px 0;
        margin-top: 50px;
        color: white;
      }

      footer p {
        margin-bottom: 0;
        font-size: 14px;
      }
    </style>
  </head>

  <body>
    <header>
      <div class="container-fluid">
        <h6>SOL MUSIC</h6>
        <div class="navbar-btn">
          <button type="button"><a href="#">Home</a></button>
          <button type="button"><a href="#">About</a></button>
          <button type="button"><a href="home.php">Profile</a></button>
          <button type="button"><a href="#">Albums</a></button>
          <button type="button"><a href="#">Single</a></button>
          <button type="button"><a href="register.php">Register</a></button>
          <button type="button"><a href="login.php">Login</a></button>
        </div>

        <div class="search-form">
          <form action="https://www.google.com/search" method="get">
            <label for="search" style="display:none;">Search:</label>
            <input type="text" id="search" name="q" placeholder="Search your music...">
            <button type="submit">Search</button>
          </form>
        </div>
      </div>
    </header>

    <main>
      <!-- Flex container for the images -->
      <div class="image-container">
        <div id="cover">
          <img src="chris.png" width="250" height="250" alt="Music cover image">
          <div class="text">
            <h1>Go Crazy</h1>
            <h2>Chris Brown</h2>
          </div>
        </div>


        <div id="cover">
          <img src="beyoncey.jpg" width="250" height="250" alt="Music cover image">
          <div class="text">
            <h1>Halo</h1>
            <h2>Beyoncé</h2>
          </div>
        </div>
		
		 <div id="cover">
          <img src="rihanna.jpg" width="250" height="250" alt="Music cover image">
          <div class="text">
            <h1>Bad Girl</h1>
            <h2>Rihanna</h2>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <p>&copy; 2025 Sol Music. All rights reserved.</p>
    </footer>
  </body>
</html>
