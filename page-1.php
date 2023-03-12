<?php
require_once('database.php');

// Get chefs
$queryChefs = 'SELECT chef_ID, chef_name, chef_number, chef_address, chef_DOB FROM Chef';
$statement = $db->prepare($queryChefs);
$statement->execute();
$chefs = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    
    <!-- the body section -->
    <header><h1>Chefs</h1></header>
    <p class="lead">Meet our chefs!</p>
    <section>
        <!-- display a table of chefs -->
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Birthday</th>
                </tr>

                <?php foreach ($chefs as $chef) : ?>
                    <tr>
                        <td><?php echo $chef['chef_name']; ?></td>
                        <td><?php echo $chef['chef_number']; ?></td>
                        <td><?php echo $chef['chef_address']; ?></td>
                        <td><?php echo $chef['chef_DOB']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
  </div><!-- /.starter-template -->
</main><!-- /.container -->

<?php include 'includes/footer.php';?>
