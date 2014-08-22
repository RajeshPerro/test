

<!DOCTYPE html>
<html>
<head>

    <link  rel="stylesheet" type="text/css" href="../css/route2.css">
    <link  rel="stylesheet" type="text/css" href="../css/main.css">
    <link  rel="stylesheet" type="text/css" href="../date/datepickr.css">
    <title>
        Admin Panel
    </title>
    <?php include'header2.php'; ?>

    <script src="../js/jquery.js"></script>
    <script src="../js/moment.min.js"></script>
    <script src="../js/combodate.js"></script>

</head>
<body>
<div style="float: left; width: 100%; height:33px; background-color: #DDDDDD;">
    <?php include 'menu.php';

    session_start();
    $ID=$_SESSION['id'];
    ?>
</div>
<div class="c_body border1" style="margin-top:10px;" >
    <div style="width: 100%; height: 40px; background-color: #1C94C4; text-align: center; font-size: 30px; color: #ffffff">
        Add Your Schedule
    </div>
    <center>
        <form method="post" action="../controller.php">
            <table class="table1" style="padding: 5px;">

                <tbody>
                <tr>


                    <td style="font-size: large; color: orangered;">
                        Your ID:
                    </td>
                    <td>
                        <input class="input1" spellcheck="false" readonly placeholder="Id Given by Hospital" type="text" name="dr_id" value="<?php echo $ID; ?>">
                    </td>

                </tr>
                <tr>
                    <td>
                        Available Date:
                    </td>
                    <td>


                        <input type="text" class="input2" placeholder="Click to add date" id="datepick" name="avail_date">
                    </td>
                    </tr>
                <tr>
                    <td>
                        Morning Session:  <select class="input2" name="mr_hour">
                            <?php

                            for($j=0,$i=0;$i<=12;$i++)
                            {
                                if($i >= 10)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                                else
                                {
                                    echo "<option value='$j$i'>$j$i</option>";
                                }
                            }
                            ?>
                        </select>
                        <select class="input2" name="mr_min">
                            <?php
                            for($j=0,$i=0;$i<60;$i++)
                            {
                                if($i >= 10)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                                else
                                {
                                    echo "<option value='$j$i'>$j$i</option>";
                                }
                            }
                            ?>
                        </select>
                        <select class="input2" name="mr_ap">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </td>



                    <td>
                        Day Session: <select class="input2" name="dy_hour">
                            <?php

                            for($j=0,$i=0;$i<=12;$i++)
                            {
                                if($i >= 10)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                                else
                                {
                                    echo "<option value='$j$i'>$j$i</option>";
                                }
                            }
                            ?>
                        </select>
                        <select class="input2" name="dy_min">
                            <?php
                            for($j=0,$i=0;$i<60;$i++)
                            {
                                if($i >= 10)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                                else
                                {
                                    echo "<option value='$j$i'>$j$i</option>";
                                }
                            }
                            ?>
                        </select>
                        <select class="input2" name="dy_ap">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </td>

                    <td>
                        Evening Session: <select class="input2" name="ev_hour">
                            <?php

                            for($j=0,$i=0;$i<=12;$i++)
                            {
                                if($i >= 10)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                                else
                                {
                                    echo "<option value='$j$i'>$j$i</option>";
                                }
                            }
                            ?>
                        </select>
                        <select class="input2" name="ev_min">
                            <?php
                            for($j=0,$i=0;$i<60;$i++)
                            {
                                if($i >= 10)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                                else
                                {
                                    echo "<option value='$j$i'>$j$i</option>";
                                }
                            }
                            ?>
                        </select>
                        <select class="input2" name="ev_ap">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </td>
                </tr>

                <tr style="float: right; width: auto;">


                    <td>
                        <input class="button1"  style="width: auto;" type="submit" value="Add"/>
                    </td>
                    <td>

                    </td>
                </tr>
                </tbody>

            </table>
        </form>


    </center>
    <a href="admin.php"><button class="button1" style="width: auto; float: right;">Exit</button></a>
</div>
<div style="float: left; width: 100%; height:auto;">
    <?php include'footer.php'; ?>
</div>

</body>
<script type="text/javascript" src="../date/datepickr.min.js"></script>
<script type="text/javascript">
    new datepickr('datepick', {
        'dateFormat': 'Y-m-d'});

</script>
</html>