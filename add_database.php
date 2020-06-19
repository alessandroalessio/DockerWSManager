<?php
require 'app/init.php';
use DockerManager\Database AS Database;
$DB = New Database();
?>
<!doctype html>
<html lang="<?php echo getenv('HTML_LANGUAGE') ?>">
  <head>
    <?php require 'partials/head.php' ?>
    <title>Add Database | <?php echo getenv('SITENAME') ?></title>
  </head>

  <body>
    <?php require 'partials/header.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <?php require 'partials/sidebar.php'; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <h2>Add Database</h2>
            <form action="/actions/database.php" method="get">
                <input type="hidden" name="mode" value="add">
                <div class="form-group">
                    <label for="db_name">Database Name</label>
                    <input type="text" class="form-control" name="db_name" id="db_name" placeholder="Enter database name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
