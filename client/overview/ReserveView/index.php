<?php
include 'DBController.php';
$db_handle = new DBController();
$monthResult = $db_handle->runQuery("SELECT DISTINCT month FROM reservation ORDER BY created ASC");
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css.css">
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
                                echo '<option value="' . $monthResult[$key]['month'] . '">' . $monthResult[$key]['month'] . '</option>';
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
                        <th><strong>Name</strong></th>
                        <th><strong>head</strong></th>
                        <th><strong>email</strong></th>
                        <th>date of reservation</th>
                        <th>message/req</th>
                        <th>created</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from reservation ";
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
                    $query = $query . " WHERE month in (" . $selectedOption . ") ORDER BY Dtime ASC";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['fname']; ?> <?php echo $result[$key]['lname'] ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['person']; ?> </div></td>
                        <td style="text-transform: none;"><div class="col" id="user_data_3"><?php echo $result[$key]['email']; ?> </div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Dtime']; ?></div></td>
                        <td><div class="col" id="user_data_5"><?php echo $result[$key]['msg']; ?></div></td>
                        <td><div class="col" id="user_data_5"><?php echo $result[$key]['created']; ?></div></td>
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>