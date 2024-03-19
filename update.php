<?php 
include ('config_db.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


    <body style="background-image: url('image/grocery_img.jpeg');background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">

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


    <?php  
    $id = $_GET['id'];
$fetchDetails = mysqli_query($var, "SELECT * FROM grocery_recor WHERE id = '$id'");

if ($row = mysqli_fetch_assoc($fetchDetails)) 
{
    $urid = $row['Id'];
    $ur_dat = $row['To_Date'];
    $membname = $row['Name_of_member'];
    $gro_item = $row['Grocery_items'];
    $gro_quan = $row['Grocery_quantity'];
    $gro_uni= $row['Grocery_unit'];
    $consu_by = $row['No_of_member'];
    $expen = $row['Expenses'];
    $total_expen = $row['Total'];
    $grand_total = $row['Grand_Total_Today'];
}
?>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <b><label class="form-label" style="color: white;">To_Date</label></b>
                <input type="date" class="form-control" name="date" id="date" value="<?php echo $ur_dat; ?>">
            </div>

            <div class="mb-3">
                <b><label class="form-label" style="color: white;">Name_of_member</label><b>
                <input type="text" class="form-control" name="name_of_member" value="<?php echo $membname; ?>">
            </div>

            <div class="mb-3">
                <b><label class="form-label" style="color: white;">Grocery_items</label><b>
                <input type="text" class="form-control" name="grocery_items" value="<?php echo $gro_item; ?>">
            </div>

              <div class="mb-3">
                  <div class="row justify-content-start">
                    <div class="col-6">
                      <b><label class="form-label" style="color: white; font-size: ;">Grocery_quantity</label></b>
                    <input type="number" class="form-control" name="grocery_quantity" id="grocery_quantity" min="0" value="<?php $gro_quan; ?>">

                    </div>
                    <div class="col-6">
                    <b><label class="form-label" style="color: white;">Unit</label></b>
                    <select id="grocery_unt" name="grocery_unt" class="form-control" value="<?php $gro_uni; ?>">
                    <option value="">---Select Options Here---</option>
                    <option value="Kg">Kg</option>
                    <option value="Piece">Piece</option>
                    <option value="Gram">Gram</option>
                    <option value="Litre">Litre</option>
                  </select>

                    </div>
                  </div>
                </div>
           
           <div class="mb-3">
                <b><label class="form-label" style="color: white;">No_of_member</label></b>
                <input type="number" class="form-control" name="no_of_memeber" value="<?php echo $consu_by; ?>">
            </div>

            <div class="mb-3">
                <b><label class="form-label" style="color: white;">Expenses</label></b>
                <input type="number" class="form-control" name="expenses" value="<?php echo $expen; ?>">
            </div>

            <div class="mb-3">
                <b><label class="form-label" style="color: white;">Total</label></b>
                <input type="number" class="form-control" name="total" value="<?php echo $total_expen; ?>">
            </div>

            <div class="mb-3">
                <b><label class="form-label" style="color: white;">Grand_Total_Today</label></b>
                <input type="number" class="form-control" name="grand_total_today" value="<?php echo $grand_total; ?>">
            </div>

            <button type="update" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
    </div>
    </div>
     

<?php
if (isset($_POST['update'])) 
{
    $u_dat = $_POST['date'];
    $ur_mem_name = $_POST['name_of_member'];
    $ur_gro_item = $_POST['grocery_items'];
    $ur_gro_quan = $_POST['grocery_quantity'];
    $ur_gro_unit= $_POST['grocery_unt'];
    $ur_cons_by = $_POST['no_of_memeber'];
    $ur_mem_expens = $_POST['expenses'];
    $ur_total = $_POST['total'];
    $ur_grand_total = $_POST['grand_total_today'];

    $sql = mysqli_query($var, "UPDATE grocery_recor SET To_Date='$u_dat', Name_of_member='$ur_mem_name', Grocery_items='$ur_gro_item', Grocery_quantity='$ur_gro_quan',Grocery_unit='$ur_gro_unit', No_of_member='$ur_cons_by', Expenses='$ur_mem_expens', Total='$ur_total',Grand_Total_Today='$ur_grand_total' WHERE id='$id'");

    if ($sql) 
    {
        echo "<script>alert('Record updated successfully'); window.location.href='view.php';</script>";
    } 

    else 
    {
        echo "<script>alert('Error updating record');</script>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
