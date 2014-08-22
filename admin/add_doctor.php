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
    <?php include 'menu.php'; ?>
</div>
<div class="c_body border1" style="margin-top:10px;" >
<div style="width: 100%; height: 40px; background-color: #1C94C4; text-align: center; font-size: 30px; color: #ffffff">
    Add Information of about a Doctor
</div>
    <center>
        <form method="post" action="../controller.php">
        <table class="table1" style="padding: 5px;">

            <tbody>
            <tr>


                <td style="font-size: large; color: orangered;">
                Doctor's ID:
                </td>
                <td>
                    <input class="input1" spellcheck="false" placeholder="Id Given by Hospital" type="text" name="dr_id">
                </td>

            </tr>
                <tr>
                    <td>
                        Doctor's Name:
                    </td>
                    <td>
                        <input class="input2" spellcheck="false" type="text" name="dr_name">
                    </td>
                    <td>
                        Department :

<!--                        <input class="input2" type="text" name="department">-->

                        <select class="input2" name="department">
                            <option value="">Select</option>
                            <option value="ADVANCE ORTHOPAEDICS">ADVANCE ORTHOPAEDICS</option>
                            <option value="CARDIO THORACIC and VASCULAR SURGERY">CARDIO THORACIC &amp;VASCULAR SURGERY</option>
                            <option value="CARDIOLOGY">CARDIOLOGY</option>
                            <option value="DEMATOLOGY">DEMATOLOGY (SKIN &amp; Vd)</option>
                            <option value="DENTAL">DENTAL</option>
                            <option value="Dietetics-Nutrition">Dietetics-Nutrition</option>
                            <option value="ENDOCRINOLOGY">ENDOCRINOLOGY</option>
                            <option value="EYE">EYE</option>
                            <option value="MEDICINE">MEDICINE</option>
                        </select>
                    </td>

                </tr>


                  <tr>
                      <td>
                          Specialised Area:
                        </td>
                      <td>
                          <input class="input2" type="text" name="s_area">
                      </td>
                    <td>
                        Current Status:

                        <select class="input2" name="status">
                            <option value="">Select</option>
                            <option value="1">Active</option>
                            <option value="0">In-active</option>
                        </select>
                      </td>
                   </tr>
                <tr style="float: right; width: auto;">


                    <td>
                        <input class="button1"  style="width: auto;" type="submit" value="Set Schedule"/>
                    </td>
                </tr>
            </tbody>

        </table>
        </form>
    </center>

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