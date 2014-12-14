
<!doctype html>
<html>
<meta-charset = "utf-8">

<div id = "header", style = "background-color:#BDA0CB; text-align:center; background-image: url('http://www.boston.com/community/blogs/rock_the_schoolhouse/bostonlatinschool.jpg');width:1350px;height:200px;color: transparent">
    <h1> 
      <img src="http://upload.wikimedia.org/wikipedia/en/5/5f/Boston_Latin_School_logo.png" alt="Go WolfPack!!!">
      "__________________________________________________"
      <img src="http://upload.wikimedia.org/wikipedia/en/5/5f/Boston_Latin_School_logo.png" alt = "Go WolfPack!!!">
      <br>
      <br>
      <br>
    </h1>
  </div>

 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine|Courgette|Ubuntu">

   <style>
    body {
      background-image:  url("http://www.zingerbug.com/Backgrounds/background_images/purple_and_white_floral.jpg");
      background-position: center top;
      background-color: #BF5FFF;
    }
    </style>


<style>
ul {
    float: left;
    width: 900px;
    padding: 0 auto;
    margin: 0 auto;
    list-style-type: none;
}

a {
    display: block;
    text-align: center;
    float: center;
    width: 150px;
    color: white;   
    text-decoration: none;
    background-color: #BF3EFF;
    padding: 0.2em 0.6em;
    border-right: 0px solid white;
    opacity: 0.7;
}

a:hover {
    background-color: fuchsia;
}

li {
    float:left;
    display: inline;
}
</style>

  

  <div id = "SchoolHeader", style = "color:#9A32CD;font-family: 'Tangerine', serif;font-size: 30px;text-shadow: 4px 4px 4px #aaa;height:100px;width:900px;margin: 0 auto;">
    <h1>
     <br>
      Welcome to the Boston Latin School Student Council
    <br>
   </h1>
  </div>

<div id="menu"; style = " 
    font-family:'Courgette',serif;font size:18px;float:left; margin-left: 200px; margin-top:  0px">
  <ul>
      <br>
      <br>
      <li><a href="/main">Main Page</a></li>
      <li><a href="/aboutUs">About Us</a></li>
      <li><a href="/news">News</a></li>
      <li><a href="/schedule">Schedule</a></li>
      <li><a href="/events">Events</a></li>
      <br>
  </ul>
  </div>
  
  <div id = "container", style = "font-family:'Ubuntu', serif;color:pink; opacity:0.9; background-color:#BF5FFF; height:800px; width: 900px; margin: 0 auto; margin-top: 75px;">
  <br>
  
  @yield('content')
  </div>