<?php include 'includes/header.php';?>

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
    <p>&copy; <?php echo date("Y"); ?> Restaurant Inc.</p>
</footer>

</main><!-- /.container -->
<?php include 'includes/footer.php';?>
