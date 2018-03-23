<?php
 include('header.php')
?>

<?php
 include('footer.php')
?>

<html>
<style>

html, body {
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  height: 100%;
  width: 100%;
  background-image: url("Index Background.JPG");
  background-size: cover;
  color: white;
  padding: 0;
  margin: 0;
}


.topnav {
  position: absolute center;
  padding: 1rem;
  background-color: teal;
  text-align: center;
  color: white;
}

a {
  color: white !important;
  font-family: 'Roboto', 'Garamond', sans-serif;
  font-size: 20px;
  padding-right: 20px;
}

footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  text-align: center;
}

.social-icons {
  text-align: center;
}

.social-icons li {
  display: inline-block;
  list-style-type: none;
  -webkit-user-select: none;
  -moz-user-select: none;
}

.social-icons li a {
  border-bottom: none;
}

.social-icons li img {
  width: 70px;
  height: 70px;
  margin-right: 20px;
}

h1 {
  color: white !important;
  font-size: 30px;
}

h2 {
  color: white !important;
  font-size: 20px;
}

.icon-maker {
  font-size: 10px;
  color: black;
}

p {
  color: white;
  font-size: 20px;
  top: 20px;
  left: 20px;
  padding: 200px;
}

button {
  position: absolute bottom right;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: 8px;
  border: 2px solid black;
  color: black !important;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

button:hover {
  background-color: white;
}

button:active {
  background-color: grey;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
<body>
  <h1>Welcome!</h1>
    <p>Hello, my name is Laron R. Lemon. Welcome to my digital playground. I am using  this website to learn HTML, CSS, Python, and Haskell. All of my projects will be listed under the portfolio page. Thank you for visiting!</p>
</body>
<button type="button"><a href="portfolio.html">View my Work</a></button>
</html>
