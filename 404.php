<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error 404: Page Not Found</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f5f5f5;
    }

    .container {
      text-align: center;
      padding: 50px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      color: #888;
    }

    a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div id="blurBackground" ></div>
<?php include('./home/ads-blocker.php'); ?> 
  <div class="container">
    <h1>404</h1>
    <p>Oops! The page you're looking for is not found.</p>
    <a href="/">Go Back Home</a>
  </div>
</body>
</html>
