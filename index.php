<?php
require_once('database.php');

// Get menu items
$queryMenu = 'SELECT itemID, itemName, itemDescription, itemPrice FROM menu_items';
$statement = $db->prepare($queryMenu);
$statement->execute();
$menuItems = $statement->fetchAll();
$statement->closeCursor();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="index.html">Conor's Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-1.php">Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-2.php">Waiters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-3.php">Contact Us</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </nav>

<main class="container">
  <div class="starter-template text-center">
    
<!-- the body section -->
<body>
<header><h1>Restaurant Menu</h1></header>
<main>
    <h1>Menu List</h1>
    <section>
        <!-- display a table of menu items -->
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($menuItems as $menuItem) : ?>
        <tr>
            <td><?php echo $menuItem['itemName']; ?></td>
            <td><?php echo $menuItem['itemDescription']; ?></td>
            <td class="right">$<?php echo number_format($menuItem['itemPrice'], 2); ?></td>
            <td>
                <form action="delete_item.php" method="post">
                    <input type="hidden" name="item_id"
                           value="<?php echo $menuItem['itemID']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

</section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Restaurant, Inc.</p>
</footer>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>