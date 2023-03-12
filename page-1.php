<?php
require_once('database.php');


// Get menu items
$queryMenu = 'SELECT chef_ID, chef_name, chef_number, chef_address, chef_DOB FROM Chefs';
$statement = $db->prepare($queryMenu);
$statement->execute();
$Chefs = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    
<!-- the body section -->
<body>
<header><h1>Chefs</h1></header>
<p class="lead">Meet our chefs!</p>
<main>
    <section>
        <!-- display a table of Chefs -->
        <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Phone No</th>
                <th>From</th>
                <th>Birthday</th>
            </tr>

            <?php foreach ($Chefs as $Chefs) : ?>
        <tr>
            <td><?php echo $Chefs['chef_name']; ?></td>
            <td><?php echo $Chefs['chef_number']; ?></td>
            <td><?php echo $Chefs['chef_address']; ?></td>
            <td><?php echo $Chefs['chef_DOB']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
        </div>

</section>
</main><!-- /.container -->
<?php include 'includes/footer.php';?>

