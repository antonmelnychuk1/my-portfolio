<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page code 404</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet"> 

  <style>
    html { 
      height: 100%; 
    }
    body {
      background: url(your_image.jpg) no-repeat;
      background-size: cover; 
      font-family: 'Nunito', sans-serif;
    }
    .over {
      background: rgba(0, 0, 0, 0.7); 
      position: absolute; 
      left: 0; right: 0; top: 0; bottom: 0; 
    }
    .p404 {
      margin-top: 100px;
      text-align: center; 
      font-size: 10em;
      color: #fcf9f9;
      position: relative; 
      z-index: 2; 
    }
    .notfound {
      text-align: center;
      color: #fff;
      font-size: 2em;
      position: relative; 
      z-index: 2; 
    }
    .notfound a {
      color: #fff;
      font-size: 0.8em;
    }
    .notfound a:hover {
      color: yellow;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="over"></div>
  <div class="p404">404</div>
  <div class="notfound">Page not found<br>Error 404. This page does not exist or has been deleted.<br>
      <a href="https://antonmelnychuk.com/"> go to the main page.</a>
  </div>
</body>
</html>