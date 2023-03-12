<?php
require_once('database.php');


// Get menu items
$queryMenu = 'SELECT itemID, itemName, itemDescription, itemPrice FROM menu_items';
$statement = $db->prepare($queryMenu);
$statement->execute();
$menuItems = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    
<!-- the body section -->
<body>
<header><h1>Restaurant Menu</h1></header>
<main>
    <section>
        <!-- display a table of menu items -->
        <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>

            <?php foreach ($menuItems as $menuItem) : ?>
        <tr>
            <td><?php echo $menuItem['itemName']; ?></td>
            <td><?php echo $menuItem['itemDescription']; ?></td>
            <td class="right">$<?php echo number_format($menuItem['itemPrice'], 2); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
        </div>

</section>
</main><!-- /.container -->
<?php include 'includes/footer.php';?>
