<?php 
include ('config_db.php');
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <style>
      html,
      body
      {
        background-image: url('images/grocery_img.jpeg');background-repeat: no-repeat; background-size: cover; 
        background-attachment: fixed;">
        height: 100%;
        margin: 0;
        padding: 0;
      }

      body 
      {
        display: flex;
        flex-direction: column;
      }

      #content 
      {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      #footer 
      {
        padding: 0 0 30px 0px;
        color: white;
        font-size: 14px;
        background-color: rgb(67 0 86);
      }

      #footer .container 
      {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      #footer .copyright 
      {
        float: left;
      }

      #footer .credits 
      {
        float: right;
        font-size: 13px;
      }

      .card 
      {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
      }

      .avatar.sm 
      {
        width: 2.25rem;
        height: 2.25rem;
        font-size: 0.818125rem;
      }

      .table-nowrap .table td,
      .table-nowrap .table th 
      {
        white-space: nowrap;
      }

      .table > :not(caption) > * > * 
      {
        padding: 0.75rem 1.25rem;
        border-bottom-width: 1px;
      }

      table th 
      {
        font-weight: 600;
        background-color: #eeecfd !important;
      }
    </style>

  </head>
  <body>
 

 <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark" id="">
      <div class="container">
        <a class="navbar-brand text-light" href="" id="logo"
          ><span style="color: #ffc800; font-size: 30px">Grocery</span>Calculation</a
        >
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 20px">
            <li class="nav-item" style="margin-left: 10px">
              <a
                class="nav-link"
                style="color: white; font-size: 20px"
                aria-current="page"
                href="index.html">Home
              </a>
            </li>
          </ul>
          <form class="d-flex" id="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"/>
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar -->
    <br>
     <div class="container">
     <div id="content">
        <div class="row">
            <div class="col-6 mb-3 mb-lg-6">
                
            </div>
        </div>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>To_Date</th>
                <th>Name_of_member</th>
                <th>Grocery_items</th>
                <th>Grocery_quantity</th>
                <th>Grocery_unit</th>
                <th>No_of_member</th>
                <th>Expenses</th>
                <th>Total</th>
                <th>Grand_Total_Today</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

      <?php
    $fetchData = mysqli_query($var,"SELECT * FROM grocery_recor");

    while($row =mysqli_fetch_assoc($fetchData))

    {
        ?>

            <tr style="background-color: white;">
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['To_Date']; ?></td>
                <td><?php echo $row['Name_of_member']; ?></td>
                <td><?php echo $row['Grocery_items']; ?></td>
                <td><?php echo $row['Grocery_quantity']; ?></td>
                <td><?php echo $row['Grocery_unit']; ?></td>
                <td><?php echo $row['No_of_member']; ?></td>
                <td><?php echo $row['Expenses']; ?></td>
                <td><?php echo $row['Total']; ?></td>
                <td><?php echo $row['Grand_Total_Today']; ?></td>
                <td><a href="update.php?id=<?php echo $row['Id']; ?>"class="btn  btn-primary">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['Id']; ?>"class="btn  btn-danger" onclick="return confirm(' Are you sure you want to delete');">Delete</a></td>

                
            </tr>
     <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>To_Date</th>
                <th>Name_of_member</th>
                <th>Grocery_items</th>
                <th>Grocery_quantity</th>
                <th>Grocery_unit</th>
                <th>No_of_member</th>
                <th>Expenses</th>
                <th>Total</th>
                <th>Grand_Total_Today</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
</div>
    </div>
  	

 <script>
   new DataTable('#example');
   </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

   
  </body>
</html>