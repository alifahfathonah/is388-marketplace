<?php
session_start();
include "adminVerification.php";
include "navbar.php";?>
<html>
  <head>
    <meta charset="utf-8">
    <title>View Clients</title>
    <script src="js/clients.js"></script>
  </head>
<body onload=showClients()>
  <div class="form">
    <h1><u>Clients</u></h1>
    <label for=""></label> <input type="text" name="searchBar" id="searchBar" class="form" oninput="showClients()" placeholder="Search for Client.." style="width:200px;margin-left:5px;">
    <select name="searchBy" id="searchBy" class="form" onchange="showClients()">
      <option value="ID">ID</option>
      <option value="username">Username</option>
      <option value="name">name</option>
      <option value="email">E-mail</option>
      <option value="mobile">Mobile Number</option>
    </select><br>
    <table width="100%" border="1" style="border-collapse:collapse;">
      <thead>
        <tr>
          <th><strong>ID</strong></th>
          <th><strong>Username</strong></th>
          <th><strong>Name</strong></th>
          <th><strong>E-mail</strong></th>
          <th><strong>Mobile Number</strong></th>
        </tr>
      </thead>
      <tbody id= "rTable">
      </tbody>
    </table>
  </div>
  </body>
</html>

<style media="screen">
*{
  margin:0;
  padding:0;
  font-family: Century Gothic;
}

body{
  background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.3)), url(pics/viewclient.jpg);
  background-size: cover;
  background-position:center;
  background-repeat: no-repeat;
}
 h1{
   margin-left: 45%;
   color: white;
 }
table{
  background-color: lightgrey;
}
td{
  text-align: center;
}
</style>
