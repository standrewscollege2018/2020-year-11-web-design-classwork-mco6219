<link rel="stylesheet" href="results.css">
    <?php
    // this page will run a query and display the result/s

    // we include the dbconnect.php page, this connects this page with the db
    include("dbconnect.php");

    // check to see if the user searched on something to come to this page
    if (!isset($_POST['search'])) {
    header("Location: search.php");
    }

    // grab the search content from the POST array, and put into a variable
    $search = $_POST['search'];

    // there are 3 steps to running a select query
    // 1. set up the query in a variable, this is what we want from the db
    $result_sql = "SELECT * from student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

    // 2. We go to the database and run the query, in this we are physically running the query
    // we use mysqli_query() this takes two parameters: dbconnect and query
    $result_qry = mysqli_query($dbconnect, $result_sql);

    // check if there are any results to display
    // use mysqli_num_rows(), which counts the number of results
    if (mysqli_num_rows($result_qry)==0) {
    // if there are no results found, print a message
    echo "No results found";
    } else {
      // 3. We organise our results into an associative array
      // which means we can use the column headings from the database table in our code
      // to organise the data from the db we use the mysqli_fetch_assoc() function
      // aa = associative array
      $result_aa = mysqli_fetch_assoc($result_qry);

    ?>
    <div class="container">

     <?php
    // loop through $result_aa to display all results
    // do () means all this stuff while a condition is true
    do {

      // define variables that you are pulling from the db and display info
      $firstname = $result_aa['firstname'];
      $lastname = $result_aa['lastname'];
    ?>
      <!-- display data from the db -->
      <!-- putting in div classes allows us to edit and use css to form your search results -->

      <div class="col">
       <p> <?php echo "$firstname $lastname";
         ?></p>

      </div>

    <?php
    // the while () condition is just the third step of our process
    // of running the query, it effectively means we repeat the code in the do () part
    // as many times as there are results coming back from the db. eg. 12 results so the loop would repeat 12 times
  } while ($result_aa = mysqli_fetch_assoc($result_qry));

}
     ?>
    </div>
