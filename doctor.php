
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/route2.css">

</head>


<?php include "header.php"
?>
<body>
<table style="margin-top: 20px; margin-left: 40px;">


    <tbody>
    <tr>

       <p style="color: orangered; margin-left: 100px; font-size: 25px;">
           All data and fields are only for Demonstration, No operation will be possible.</p>

    </tr>
    <tr>
        <td>Department Name</td><td>:</td><td>
            <select  name="ctl00$ContentPlaceHolder1$ucFindDoct1$ddlDeptName" id="ctl00_ContentPlaceHolder1_ucFindDoct1_ddlDeptName" class="input1" style="width:150px;">
                <option selected="selected" value="Select">Select</option>
                <option value="10">ADVANCE ORTHOPAEDICS</option>
                <option value="1">CARDIO THORACIC &amp;VASCULAR SURGERY</option>
                <option value="2">CARDIOLOGY</option>
                <option value="24">DEMATOLOGY (SKIN &amp; Vd)</option>
                <option value="25">DENTAL</option>
                <option value="28">Dietetics-Nutrition</option>
                <option value="14">ENDOCRINOLOGY</option>
                <option value="21">EYE</option>
                <option value="8">GASTROENTEROLOGY MEDICAL &amp; SURGICAL</option>
                <option value="19">GENERAL SURGERY</option>
                <option value="15">HEAMATOLOGY</option>
                <option value="17">INTERNAL MEDICINE</option>
                <option value="6">KIDNEY TRANSPLANT</option>
                <option value="4">NEPHROLOGY</option>
                <option value="3">NEUROLOGY</option>
                <option value="7">NEUROSURGERY</option>
                <option value="27">NUTRITION &amp; DIETETICS</option>
                <option value="20">OBSTETRICS &amp; GYNAECOLOGY</option>
                <option value="12">ONCOLOGY MEDICINE</option>
                <option value="22">OTORHINOLARYNGOLOGY (ENT)</option>
                <option value="18">PAEDIATRICS</option>
                <option value="26">Physiotherapy</option>
                <option value="16">PSYCHIATRIC</option>
                <option value="11">PULMONOLOGY</option>
                <option value="23">RADIOLOGY</option>
                <option value="9">RECONSTRUCTIVE SURGERY</option>
                <option value="13">SURGICAL ONCOLOGY</option>
                <option value="5">UROLOGY</option>

            </select>
        </td>

        <td>&nbsp;</td>

        <td>Doctor Name</td><td>:</td><td>
            <input name="ctl00$ContentPlaceHolder1$ucFindDoct1$txtDoct" type="text" id="ctl00_ContentPlaceHolder1_ucFindDoct1_txtDoct" class="input1" style="width:150px;">
        </td>

        <td>
            <input type="submit" name="ctl00$ContentPlaceHolder1$ucFindDoct1$btnSerch" value="Search" id="ctl00_ContentPlaceHolder1_ucFindDoct1_btnSerch" class="button1"></td>
    </tr>

    </tbody>
</table>
<div class="home">
    <table class="table3" border="1" style="width: inherit; margin-left: -13px;">
            <tbody>
            <tr align="center" valign="middle">
                <td colspan="2">
                    <table class="" border="0">
                        <tbody><tr>
                            <td><span>1</span></td><td><a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$ucFindDoct1$GroupedGridView1','Page$2')">2</a></td>
                        </tr>
                        </tbody></table></td>
            </tr><tr class="HeaderStyle">
                <th scope="col">Department</th><th scope="col">Doctor Name</th>
            </tr><tr class="RowStyle">
                <td rowspan="3">CARDIO THORACIC &amp;VASCULAR SURGERY</td><td rowspan="1">Dr. Chandrabhanu Parija</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Susanta Patra</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Sarada Charan Pattnaik</td>
            </tr><tr class="RowStyle">
                <td rowspan="4">CARDIOLOGY</td><td rowspan="1">Dr. Panhanana Sahoo</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. B.B.Binakar</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Sudipta Acharya</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Mrutyunjaya Behera</td>
            </tr><tr class="RowStyle">
                <td rowspan="3">NEUROLOGY</td><td rowspan="1">Dr. A.K.MOHAPATRA</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. L.D.PADHI</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. PAYOD KUMAR JENA</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">NEPHROLOGY</td><td rowspan="1">Dr. A.C. Mahakur</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">UROLOGY</td><td rowspan="1">Dr. (Brig) B. Routray</td>
            </tr><tr class="RowStyle">
                <td rowspan="3">NEUROSURGERY</td><td rowspan="1">Dr. B.S.Das</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. D. K. Satpathy</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. C. Mitra</td>
            </tr><tr class="RowStyle">
                <td rowspan="4">GASTROENTEROLOGY MEDICAL &amp; SURGICAL</td><td rowspan="1">Dr. S.S. Mishra</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. P.C. Dalai</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Brundaban Nahak</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. MD Ibrarullah</td>
            </tr><tr class="RowStyle">
                <td rowspan="3">RECONSTRUCTIVE SURGERY</td><td rowspan="1">Dr. S. balliarsingh</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. S.K. Rout</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Falguni Ray</td>
            </tr><tr class="RowStyle">
                <td rowspan="4">ADVANCE ORTHOPAEDICS</td><td rowspan="1">Dr. P. C. Dey</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Sanatan Behera</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Sunil Ku. Dash</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. R.K. Mohapatra</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">PULMONOLOGY</td><td rowspan="1">Dr. Jagdish Rath</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">ONCOLOGY MEDICINE</td><td rowspan="1">Dr. Ghansyam Biswas</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">SURGICAL ONCOLOGY</td><td rowspan="1">Dr. Dilip Ku. Kar</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">ENDOCRINOLOGY</td><td rowspan="1">Dr. Abhay Sahoo</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">HEAMATOLOGY</td><td rowspan="1">Dr. Upendra Nayak</td>
            </tr><tr class="RowStyle">
                <td rowspan="4">PSYCHIATRIC</td><td rowspan="1">Dr. Surajeet Sahoo</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. P.K. Das</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. S.N. Mishra</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. R.K. Das</td>
            </tr><tr class="RowStyle">
                <td rowspan="6">INTERNAL MEDICINE</td><td rowspan="1">Dr. Sudhir Pattnaik</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Paresh Jena</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Bijaya Ku. Mishra</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Sarmistha Sarangi</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. S.K. Meher</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. S.B. Pattnaik</td>
            </tr><tr class="RowStyle">
                <td rowspan="5">PAEDIATRICS</td><td rowspan="1">Dr. G.B. Nanda</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. M.R. Behera</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. S.N. Mallick</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. Sibabrata Pattnaik</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. M.K. Nayak</td>
            </tr><tr class="RowStyle">
                <td rowspan="4">GENERAL SURGERY</td><td rowspan="1">Dr. A. Sutar</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. P.K. Mishra</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. A.K. Sahoo</td>
            </tr><tr class="RowStyle">
                <td rowspan="1">Dr. A. P. Dash</td>
            </tr><tr align="center" valign="middle">
                <td colspan="2"><table border="0">
                        <tbody><tr>
                            <td><span>1</span></td><td><a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$ucFindDoct1$GroupedGridView1','Page$2')">2</a></td>
                        </tr>
                        </tbody></table></td>
            </tr>
            </tbody>
    </table>






</div>




</div>
</body>

<?php include "footer.php"
?>

</html>