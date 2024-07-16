<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  ;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
 
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #070f4e;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  border-radius: 10px;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #ff0000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color:  #fb7777;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Welcome to MovieTicket, your ultimate destination for hassle-free movie ticketing! We are dedicated to providing you with a seamless and convenient experience in the world of cinema. 

At MovieTick, we understand the excitement and joy that comes with watching a great film on the big screen. We are passionate about connecting movie lovers like you with the latest blockbusters, timeless classics, and hidden gems. Our goal is to make the process of purchasing movie tickets effortless, so you can focus on enjoying the magic of the movies.

With our user-friendly website, you can explore an extensive catalog of films, including previews, showtimes, and theater locations near you. We have partnered with leading cinemas nationwide to ensure that you have access to a wide range of movie choices and convenient screening times. Whether you prefer action-packed adventures, heartwarming dramas, laugh-out-loud comedies, or captivating documentaries, MovieTick has something for every taste and mood.

Gone are the days of waiting in long queues or scrambling for last-minute tickets. With our secure and reliable online ticketing system, you can reserve your seats in advance from the comfort of your own home or while on the go. We offer various payment options and guarantee the best prices, ensuring that you get the best value for your entertainment budget.

MovieTick is committed to providing exceptional customer service. Our dedicated support team is always ready to assist you with any inquiries or concerns you may have. You can reach out to us via our “contact us” page. We strive to create a user-centric platform that enhances your movie-going experience and keeps you coming back for more.

Join us at MovieTick and unlock a world of cinematic adventure. Discover new movies, plan unforgettable outings with friends and family, and immerse yourself in the magic of storytelling. We are here to make your movie-watching experience not just convenient but truly extraordinary. Get ready to sit back, relax, and let the movies take you on a thrilling journey.</p>

<p>-Cheers MovieTick Management</p>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/akshaya.jpeg" alt="Jane" style="width:100%;height:500px">
      <div class="container">
        <h2>Santhoshkumar L</h2>
        <p class="title">MIT Student</p>
        <p>Third Year</p>
        <p>santhoshmit25@gamil.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  

</body>
</html>
