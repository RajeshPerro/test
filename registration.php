<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/route2.css">
    <link rel="stylesheet" type="text/css" href="date/datepickr.css">


    <link rel="stylesheet" href="../../_static/js/dojo/../dijit/themes/claro/claro.css">

    <script>dojoConfig = {async: true, parseOnLoad: true}</script>
    <script src='../../_static/js/dojo/dojo.js'></script>

    <script>
        require(["dojo/parser", "dijit/form/ValidationTextBox"]);
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/combodate.js"></script>


</head>
<?php include "header.php"
?>
<body>

<div class="c_body border1">
    <div style="width: 100%; text-align: center; color: white; font-size: 20px; background-color: #3390CA; height: 30px;" >
        Registration Form

    </div>
    <form method="post" action="controller.php">

    <table class="table1 font1" style="padding: 5px; margin-top: 25px;margin-left: 100px;">

        <tr>

            <td></td>
            <td></td>
            <td style="color: #29B780; font-size: 22px;"> This is a Demo Form</td>
            <td></td>
            <td></td>
        </tr>
        <tr>

            <td></td>
            <td></td>
            <td style="color: orangered; font-size: 18px;">All &nbsp;&nbsp;'*'&nbsp;&nbsp; fields are Mandatory</td>
            <td></td>
            <td></td>
        </tr>


        <tr>
            <?php
            include_once('rajesh_model.php');

             $dept=$_POST['div'];
             $dr_name=$_POST['dis'];
              $dr_date=$_POST['thana'];

            ?>
        <input type="hidden" name="dr_id" value="<?php echo $dr_name ?>"/>
        </tr>
        <tr>
            <td>
                Department:

            </td>
            <td>
                <input  class="input2" readonly name="dis_department" value="<?php echo $dept ?>" >
            </td>
            <td>
                Doctor's Name:

            </td>
            <td>
                <input  class="input2" readonly name="drName" value="<?php
                $user = 'root';
                $pass = "";
                $dbname='doctor';

                $Sql="SELECT dr_name FROM add_doctor WHERE dr_id=$dr_name";
                //echo $Sql;
                $data_view1=$raj_modelobject->DataView($Sql,$user,$pass,$dbname);

                foreach($data_view1 as $row1)
                {
                    echo $row1['dr_name'];
                }
                ?>" >
            </td>
        </tr>
        <tr>
            <td>
                Appointment Date:
            </td>
            <td>
                <input class="input2" name="ap_date" readonly value="<?php echo $dr_date?>">
            </td>

            <td>
              * Select Available Time:

            </td>
            <td>

               <select   class="input2" readonly name="ap_time" >
                <?php

                $user = 'root';
                $pass = "";
                $dbname='doctor';

                $Sql="SELECT * FROM time_table  Where dr_id='$dr_name' AND avail_date='$dr_date'";

                $data_view=$raj_modelobject->DataView($Sql,$user,$pass,$dbname);
                $flag=0;

                foreach($data_view as $row2)
                {


                    if($flag==0)
                    {
                        echo "<option>--Select--</option>";
                        $flag=1;
                    }
                    echo"<option value='" . $row2['mr_hour'].":". $row2['mr_min'] ." ". $row2['mr_ap'] . "'>" . $row2['mr_hour'].":". $row2['mr_min'] ." ". $row2['mr_ap'] . "</option>";
                    echo"<option value='" . $row2['dy_hour'].":". $row2['dy_min'] ." ". $row2['dy_ap'] . "'>" . $row2['dy_hour'].":". $row2['dy_min'] ." ". $row2['dy_ap'] . "</option>";
                    echo"<option value='" . $row2['ev_hour'].":". $row2['ev_min'] ." ". $row2['ev_ap'] . "'>" . $row2['ev_hour'].":". $row2['ev_min'] ." ". $row2['ev_ap'] . "</option>";
                }

                ?>" >
            </select>
            </td>

        </tr>
    </table>
        <table class="table1 font1" style="padding: 5px; margin-top: 25px;margin-left: 100px;">

            <tbody>


            <tr>

                <td>
                   * Name of the Patient :

                </td>
                <td>
                <select class="input1" name="mr">
                    <option value="">Select</option>
                    <option value="MR.">MR.</option>
                    <option value="MRS.">MRS.</option>
                    <option value="MS.">MS.</option>
                    <option value="MISS.">MISS.</option>
                    <option value="DR.">DR.</option>

                </select>
                </td>

                <td>
                <input class="input1" type="text" name="name"  required="true"
                       data-dojo-type="dijit/form/ValidationTextBox"
                       data-dojo-props="regExp:'\\d{}', invalidMessage:'Invalid.'">
                </td>

                <td>
                    Father/Husband Name :
                </td>
                <td>
                    <input class="input1" type="text" name="father">
                </td>
            </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                <input class="input1" type="radio" name="gender" value="Male">Male
                </td>
                <td>
                <input class="input1" type="radio" name="gender" value="Female">Female
                </td>

                <td>
                    Enter Date Of Birth:
                </td>
                <td>
<!--                    <input class="input1 hasDatepicker" name="dob" placeholder="YYYY-MM-DD" id="datepick">-->
<!---->

                    <input type="text" class="input1"
                     id="date" data-format="YYYY-MM-DD" data-template="YYYY MMM D"
                     name="dob" value="1990-02-10">
                    <script>
                        $('#date').combodate({
                            minYear: 1900,
                            maxYear: 2100,
                            minuteStep: 10
                        });
                    </script>


                </td>

            </tr>


            </tbody>
            </table>
        <table class="table1 font1"  style="padding: 5px; margin-left: 100px;">
         <tbody>
            <tr>

            <tr>
                <td>
                    Age :
                </td>


                <td>
                    <input class="input1" type="text" name="age">
                </td>
            </tr>
            <tr>
                <td>
                    Nationality :
                </td>

                <td>
                    <select class="input1" name="nationality">
                        <option value="">Select</option>
                        <option value="AFGHANISTAN">AFGHANISTAN</option>
                        <option value="AMERICAN">AMERICAN</option>
                        <option value="AUSTRALIA">AUSTRALIA</option>
                        <option value="INDIA">INDIA</option>
                        <option value="BANGLADESH">BANGLADESH</option>
                    </select>

                </td>

                <td>
                    Religion :
                </td>
                <td>
                    <select class="input1" name="religion">
                        <option value="">Select</option>
                        <option value="BUDDHIST">BUDDHIST</option>
                        <option value="CHRISTIAN">CHRISTIAN</option>
                        <option value="HINDU">HINDU</option>
                        <option value="JAIN">JAIN</option>
                        <option value="MUSLIM">MUSLIM</option>
                        <option value="OTHERS">OTHERS</option>
                        <option value="SIKH">SIKH</option>

                    </select>

                </td>
            </tr>

            <tr>
                <td>
                    Occupation:
                </td>
                <td>
                   <input class="input1" name="occupation">
                </td>
                <td>
                    *Permanent Address:
                </td>
                <td>
                    <input class="input1" name="parmanent_address"  required="true"
                           data-dojo-type="dijit/form/ValidationTextBox"
                           data-dojo-props="regExp:'\\d{}', invalidMessage:'Invalid.'">
                </td>
            </tr>
         <tr>
             <td>
                 Street:
             </td>
             <td>
                 <input class="input1" name="street">
             </td>
             <td>
                 *PinCode:
             </td>
             <td>
                 <input class="input1" name="pincode"  required="true"
                        data-dojo-type="dijit/form/ValidationTextBox"
                        data-dojo-props="regExp:'\\d{}', invalidMessage:'Invalid.'">
             </td>
         </tr>

         <tr>
              <td>
                  District:
              </td>
              <td>
                  <select class="input1" name="district">
                      <option value="0">Select District</option>
                      <option value="Bagalkot">Bagalkot</option>
                      <option value="Bangalore Rural">Bangalore Rural</option>
                      <option value="Bangalore Urban">Bangalore Urban</option>
                      <option value="Davangare">Davangare</option>
                      <option value="Dharwad">Dharwad</option>
                      <option value="Gadag">Gadag</option>
                      <option value="Gulbarga">Gulbarga</option>
                      <option value="Hassan">Hassan</option>
                      <option value="Haveri">Haveri</option>
                      <option value="Kodagu">Kodagu</option>
                  </select>

              </td>
                <td>
                    Taluk Name:
                </td>
                <td>
                    <select class="input1" name="taluk_name">
                        <option value="">Select Taluk</option>
                        <option value="Ambikapur">Ambikapur</option>
                        <option value="Bangalore North">Bangalore North</option>
                        <option value="Cooch Behar">Cooch Behar</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Golconda">Golconda</option>
                        <option value="Silchar">Silchar,</option>
                        <option value="Lakhiipur">Lakhiipur</option>
                    </select>
                </td>
         </tr>
            <tr>
                <td>
                    State:
                </td>
                <td>
                    <select class="input1" name="state">
                        <option value="">Select</option>
                        <option value="ANDAMAN and NICOBAR ISLANDS">ANDAMAN &amp; NICOBAR ISLANDS</option>
                        <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                        <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                        <option value="ASSAM">ASSAM</option>
                        <option value="BIHAR">BIHAR</option>
                        <option value="CHANDIGARH">CHANDIGARH</option>
                        <option value="CHATTISGARH">CHATTISGARH</option>
                        <option value="DELHI">DELHI</option>
                        <option value="GOA">GOA</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                    </select>

                </td>
                <td>
                    Country:
                </td>
                <td>
                    <select class="input1" name="country">
                        <option value="">Select</option>
                        <option value="AFGHANISTHAN">AFGHANISTHAN</option>
                        <option value="AFRICA">AFRICA</option>
                        <option value="ARGENTINA">ARGENTINA</option>
                        <option value="AUSTRALIA">AUSTRALIA</option>
                        <option value="BAHARAIN">BAHARAIN</option>
                        <option value="BANGLADESH">BANGLADESH</option>
                        <option value="BELGIUM">BELGIUM</option>
                        <option value="BHUTAN">BHUTAN</option>
                        <option value="BRAZIL">BRAZIL</option>

                        <option value="CANADA">CANADA</option>
                        <option value="CHINA">CHINA</option>
                        <option value="DENMARK">DENMARK</option>
                        <option value="ENGLAND">ENGLAND</option>
                        <option value="INDIA">INDIA</option>


                    </select>
                </td>
            </tr>
         <tr>
             <td>
                 *Mobile Number:
             </td>
             <td>
                 <input class="input1" name="mobile"  required="true"
                        data-dojo-type="dijit/form/ValidationTextBox"
                        data-dojo-props="regExp:'\\d{}', invalidMessage:'Invalid.'">
             </td>
             <td>
                 Land-Line Number:
             </td>
             <td>
                 <input class="input1" name="landline">
             </td>
         </tr>
         <tr>
             <td>
                 Valid Email ID:
             </td>
             <td>
                 <input class="input1" name="email">
             </td>
             <td>
                 Department/Clinics:
             </td>
             <td>
                 <input class="input1" name="department">
             </td>
         </tr>
         <tr>
             <td>
                 Person Name Filling this Form:
             </td>
             <td>
                 <input class="input1" name="person_name">
             </td>
             <td>
                 Relationship to the Patient:
             </td>
             <td>
                 <input class="input1" name="relationship">
             </td>
         </tr>

          </tbody>
        </table>




    <input class="button1" VALUE="SAVE" type="submit" style="float: right; margin: 10px;">

    </form>
<div style="width: auto; margin-left: 40px;">
<p style="color: orangered; font-size: 15px;">Payment System Demo</p>
<img src="image/visa.jpg" width="150px;" height="50px;" >
    <img src="image/mastercard.jpg" width="150px;" height="50px;" >
    <img src="image/paypal.jpg" width="150px;" height="50px;" >
</div>
</div>
<div style="margin-left: 1px;">
    <?php include "footer.php"?>
</div>
</body>

<script type="text/javascript" src="date/datepickr.min.js"></script>
<script type="text/javascript">
    new datepickr('datepick', {
        'dateFormat': 'Y-m-d'});

</script>
</html>