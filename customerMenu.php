<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <div class="main">
        <ul>
          <li class = "home"><a href = "customerHome">Home</a></li>
          <li class = "profile"><a href = "clientProfile">Profile</a></li>
          <li class = "contact"><a href = "customerContact">Contact Us</a></li>
          <li class = "profile"><a href = "support">Messages</a></li>
          <li> <input type="text" name="search" placeholder="Enter product name.."> </li>
          <li> <a href="productSearch">Search</a> </li>
          <li> <a href="logout">Log Out</a> </li> </li>
        </ul>
      </div>
    </header>
  </body>
</html>

<style media="screen">
ul{
  float: right;
  list-style-type: none;
  margin-top: 25px;
  margin-right: 50px;
}

ul li{
  display: inline-block;
}

ul li a{
  border-radius: 8px;
  text-decoration: none;
  color:#fff;
  padding: 5px 20px;
  border: 1px solid #fff transparent;
  transition: 0.6s ease;
}

ul li a:hover{
  background-color: #fff;
  color: #000;
}

ul li input{
  text-decoration: none;
  color:teal;
  padding: 5px 20px;
}

</style>
