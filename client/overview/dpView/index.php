<?php
include 'DBController.php';
$db_handle = new DBController();
$monthResult = $db_handle->runQuery("SELECT DISTINCT email FROM buy ");
?>
<html>
<head>
<title></title>
</head>
<body>
    <h2>Reservation View</h2>
    <form method="POST" name="search" action="index.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="month[]" multiple="">
                    <option value="0" selected="selected" disabled="">Select month</option>
                        <?php
                        if (! empty($monthResult)) {
                            foreach ($monthResult as $key => $value) {
                                echo '<option value="' . $monthResult[$key]['email'] . '">' . $monthResult[$key]['email'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter" class="btn">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['month'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1" border="1">

                <thead>
                    <tr>
                        <th>product</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from buy";
                    $i = 0;
                    $selectedOptionCount = count($_POST['month']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['month'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE email in (" . $selectedOption . ") ";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['product']; ?> </div></td>
                    </tr>
                <?php
                    }
                    ?>
                  
                    
          
                </tbody>
            </table>
       

                <label>Name: </label><?php echo $result[$key]['fname']; ?> <?php echo $result[$key]['lname']; ?>
                <br>

               <label>Address: </label><?php echo $result[$key]['province']; ?> <?php echo $result[$key]['city']; ?> <?php echo $result[$key]['brgy']; ?>
               <br>
               <label>Contact Number: </label><?php echo $result[$key]['cont']; ?>
               <br>
               <label>Delivery or Pickup </label><?php echo $result[$key]['DP']; ?>
               <br>
               <?php echo $result[$key]['Dtime']; ?>
               <br>
               <?php echo $result[$key]['created']; ?>
                    <?php
                }
                ?>  

        </div>
    </form>
</body>
</html>