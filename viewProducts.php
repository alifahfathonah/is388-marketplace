<html>
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <script src="js/products.js"></script>
  </head>
<body onload="showProducts()">
    <h2>Products</h2>

    <button type="button" id="addBtn" onclick="view_add()">Add Product</button>
    <div id="addProduct" style="display: none">
      <form class="addP" action="" method="post">
        <label for="name">Name</label> <input type="text" name="name" id="name" value="" required> <br>
        <label for="price">Price</label> <input type="number" name="price" id="price" value="1" step = "0.01" min = "1" reviewquired> <br>
        <label for="stock">Stock</label> <input type="number" name="stock" id="stock" value="1" min = "1" required> <br>
        <button type="button" name="submitABtn" id="submitABtn" onclick="addProduct()">Submit</button>
        <button type="button" name="submitEBtn" id="submitEBtn" style="display: none;" onclick="submitEdit()">Submit</button>
      </form>
    </div>

<div id="viewProduct">
    <label for=""></label> <input type="text" name="searchBar" id="searchBar" oninput="showProducts()">
    <select name="searchBy" id="searchBy" onchange="showProducts()">
      <option value="ID">ID</option>
      <option value="name">name</option>
      <option value="price">price</option>
      <option value="stock">stock</option>
      <option value="rating">rating</option>
    </select>

    <table width="100%" border="1" style="border-collapse:collapse;">
      <thead>
        <tr>
          <th><strong>ID</strong></th>
          <th><strong>Name</strong></th>
          <th><strong>price</strong></th>
          <th><strong>stock</strong></th>
          <th><strong>rating</strong></th>
        </tr>
      </thead>
      <tbody id="rTable">
      </tbody>
    </table>
</div>
  </body>
</html>
