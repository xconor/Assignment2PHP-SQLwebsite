<?php
require_once('database.php');

// Get waiters
$queryWaiters = 'SELECT waiter_ID, waiter_name, waiter_number FROM Waiter';
$statement = $db->prepare($queryWaiters);
$statement->execute();
$waiters = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">

<!-- the body section -->
<header><h1>Waiters</h1></header>
    <p class="lead">We are proud to have extremely professional waiters that can help you with anything.</p>
    <img src="images/waiters.jpg" class="img-fluid" alt="picture of waiters">
    <br></br>

    <section>
        <!-- display a table of waiters -->
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Phone No</th>
                </tr>

                <?php foreach ($waiters as $waiters) : ?>
                    <tr>
                        <td><?php echo $waiters['waiter_name']; ?></td>
                        <td><?php echo $waiters['waiter_number']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
  </div><!-- /.starter-template -->
</main><!-- /.container -->
<?php include 'includes/footer.php';?>

