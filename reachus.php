<?php include("config.php");?>
<link rel="stylesheet" href="css/jquery.loadmask.css">
<script type="text/javascript" src="js/jquery.loadmask.min.js"></script>

<form id="reachus" name="reachus" enctype="multipart/form-data">
    <div class="col-md-12 map" style="background-color: transparent; height: 100%;">
        <span class="col-md-12 personal" id="tab1">
            <h3>Personal Details</h3>
            <p class="msg_ack" style="text-align: center;
                margin: -10px auto;
                width: 100%;"></p>
            <span class="col-md-6 col-xs-12">
                <span class="input input--madoka">
                    <input class="input__field input__field--madoka" type="text" id="atm_name"  name="atm_name"  />
                    <label class="input__label input__label--madoka" for="atm_name">
                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                        </svg>
                        <span class="input__label-content input__label-content--madoka">NAME<span style="color:#c31118;">*</span></span>
                    </label>
                </span>
                <span style="float: right; margin-right: 16px;" id="msg_name" class="msg_validate"></span>
            </span>
            <span class="col-md-6 col-xs-12">
                <span class="input input--madoka">
                    <input class="input__field input__field--madoka" type="text" id="atm_email" name="atm_email" />
                    <label class="input__label input__label--madoka" for="atm_email">
                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                        </svg>
                        <span class="input__label-content input__label-content--madoka">EMAIL<span style="color:#c31118;">*</span></span>
                    </label>
                </span>
                <span style="float: right; margin-right: 16px;" id="msg_email" class="msg_validate"></span>
            </span>
            <span class="col-md-12 col-xs-12 reach_per_address" style="height:97px;">
                <span class="input input--madoka">
                    <input class="input__field input__field--madoka" type="text" id="atm_addr" name="atm_addr" />
                    <label class="input__label input__label--madoka" for="atm_addr">
                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none" style="stroke-width: 2px;">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                        </svg>
                        <span class="input__label-content input__label-content--madoka">ADDRESS<span style="color:#c31118;">*</span></span>
                    </label>
                </span>
                <span style="float: right; margin-right: 33px;" id="msg_addr" class="msg_validate"></span>
            </span>
            <span class="col-md-8  col-xs-12" style="height: 70px; margin: 23px 0px 0px;">
                <textarea class="reach_per_detail" cols="148" rows="3" placeholder="Enter your Business Expectations with us (Maximum 1500 Words)" id="atm_busexpect" name="atm_busexpect"></textarea>
                <input type="hidden" id="counter" name="counter" />
                <span class="input-group style-4" id="upload_show" style="margin-left: 19px; position: absolute; top: 0; display: none;">
                    <span class="input-group-btn">
                    <span class="btn btn-primary btn-file browse_btn">
                    Browse <input type="file" name="atm_file" id="atm_file" >
                    </span>
                    </span>
                    <input type="text" class="form-control reach_browse input_upload" readonly id="atm_dumy">
                    <p style=" position: absolute; top: 47px; left: 7%;color: #c31118;font-size: 12px;font-style: italic;">Note: Only pdf,doc,docx </p>
                </span>
                <span style="position: absolute;top: 86%;right: -39%;" id="msg_exp" class="msg_validate"></span>
            </span>
           <span class="col-md-1 col-xs-12 hidden-xs other" style="margin: 40px -34px 0 !important;">
                <p>or</p>
            </span>

            <span class="col-md-1 col-xs-12 hidden-lg other" style="margin: 0px 0px 0 !important;">
                <p>or</p>
            </span>
            <span class="col-md-3 reach_per_Uplod">
                <div id="upload_spe">
                    <input type="radio" name="atm_uploadspecific" id="atm_uploadspecific" value="Upload_Specification">Upload Specification
                </div>
                <br>
                <div style="margin-top: 11px; display: none; position: absolute; top: 0; " id="Enter_spe">
                    <input type="radio" name="atm_enterspecific" id="atm_enterspecific" value="Enter_Specification">Enter Specification
                </div>
            </span>
            <ul class="personal_details_01c">
                <li>
                    <div class="create-tooltip" id="atm_personal_submit" title="Skip other entries and post">
                        <img src="images/post.png" class="img-responsive"/>
                        <!--<button type="submit" form="form1" value="Submit" style="width: 38px; background: transparent none repeat scroll 0% 0%; border: 0px none;"><img src="images/post.svg" class="img-responsive"/></button>-->
                    </div>
                </li>
                <li>
                    <div class="create-tooltip" id="atm_personal_reset" title="Clear">
                        <img src="images/clear.png" class="img-responsive"/>
                    </div>
                </li>
                <li>
                    <div id='Proceed' value='Proceed'>
                        <div class="create-tooltip"  title="Proceed to Entries in Detail">
                            <img src="images/proced.png" class="img-responsive"/>
                        </div>
                    </div>
                </li>
            </ul>
        </span>
        </span>
        <span class="col-md-12 personal" style="display: none; position: absolute; top: 0;" id="tab2">
            <h3>Business Details</h3>
            <span class="col-md-12 col-xs-12" style="height: 23%">
                <span class="input input--madoka" >
                    <input class="input__field input__field--madoka" type="text" id="atm_compname" name="atm_compname" />
                    <label class="input__label input__label--madoka business_detail" for="atm_compname">
                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none" style="stroke-width: 2px;">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                        </svg>
                        <span class="input__label-content input__label-content--madoka">COMPANY NAME (as registered)</span>
                    </label>
                </span>
                <span style="position: absolute; top: 82%; right: 3%;" class="msg_validate" id="msg_compname"></span>
            </span>
            <span class="col-md-6 col-xs-12">
                <select class="bussi_drop" id="atm_sector" name="atm_sector">
                    <option value="">--Select Sector--</option>
                    <?php
                        $select = mysql_query("SELECT sect_pk,sect_name FROM sectormst_atm WHERE sect_status='A' order by sect_name asc");
                              if(mysql_num_rows($select)>0)
                                  while($fetch = mysql_fetch_array($select))
                                       echo "<option value='".$fetch['sect_pk']."'>".$fetch['sect_name']."</option>"; ?>
                </select>
                <span style="position: absolute; top: 107%; right: 6%;" class="msg_validate" id="msg_industry"></span>
                <select class="bussi_drop" id="atm_industry" name="atm_industry"></select>
                <span style="position: absolute; top: 55%; right: 6%;" class="msg_validate" id="msg_sector"></span>
                <!-- <select class="bussi_drop" id="atm_subindustry" name="atm_subindustry"></select> -->
            </span>
            <span class="col-md-6 col-xs-12">
                <span class="input input--madoka" style="margin-top: 30px;">
                    <input class="input__field input__field--madoka" type="text" id="atm_website"  name="atm_website" />
                    <label class="input__label input__label--madoka" for="atm_website">
                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                        </svg>
                        <span class="input__label-content input__label-content--madoka">WEBSITE URL</span>
                    </label>
                </span>
                <select class="bussi_drop" style="margin-top:10px;width:95.5%" id="atm_empstr" name="atm_empstr">
                    <option value="">--Select Empolyee Strength--</option>
                    <option value="0 to 50">0 to 50</option>
                    <option value="50 to 100">50 to 100</option>
                    <option value="100 to 500">100 to 500</option>
                    <option value="500 to 1000">500 to 1000</option>
                    <option value="1000 Above">1000 Above</option>
                </select>
                <span style="position: absolute; top: 69%; right: 6%;" class="msg_validate" id="msg_empstr"></span>
                <br>
                <ul class="personal_details_01a">
                    <li>
                        <div class="create-tooltip" title="Back" id="Back" >
                            <img src="images/back.png" class="img-responsive"/>
                        </div>
                    </li>
                    <!--<li>
                        <div class="create-tooltip" title="Skip" >
                            <img src="images/skip.png" class="img-responsive"/>
                        </div>
                        </li>-->
                    <li>
                        <div class="create-tooltip" title="Clear" id="atm_busdetails" >
                            <img src="images/clear.png" class="img-responsive"/>
                        </div>
                    </li>
                    <li>
                        <div class="create-tooltip busproceed" title="Proceed" >
                            <img src="images/proced.png" class="img-responsive"/>
                        </div>
                    </li>
                </ul>
            </span>
        </span>
        <span class="col-md-12 personal" style="display: none" id="tab3">
            <h3>Consultation Expected For</h3>
            <p class="msg_c_ack" style="text-align: center;margin: -10px auto;width: 100%;margin-bottom: 10px;color:red;"></p>
            <span class="col-md-6">
                <input type="checkbox" name="atm_hardchk" id="atm_hardchk" value="hardware"  style="margin-bottom: 25px;    margin-left: 8%;">HARDWARE
                <br>
                <select  name="atm_hardware[]" id="atm_hardware"  multiple class="consult_01">
                    <option value="ARCHITECTURE CONSULTATION">ARCHITECTURE CONSULTATION</option>
                    <option value="SERVER CONFIG & SETUP">SERVER CONFIG & SETUP</option>
                    <option value="CLIENT SERVER CONFIG & SETUP">CLIENT SERVER CONFIG & SETUP</option>
                    <option value="DESKTOP CONFIG & SETUP">DESKTOP CONFIG & SETUP</option>
                    <option value="FIREWALL CONFIG & SETUP">FIREWALL CONFIG & SETUP</option>
                </select>
                <span style="width: 50%; top: 49%; right: -17%; position: absolute;" id="msg_hard" class="msg_validate"></span>
                <input type="checkbox" id="atm_softchk" name="atm_softchk" value="software" style="margin-bottom: 25px;    margin-left: 8%;">SOFTWARE
                <br>
                <select name="atm_software[]" id="atm_software"  multiple class="consult_02">
                    <option value="WEBSITE">WEBSITE</option>
                    <option value="WEBPORTAL">WEBPORTAL</option>
                    <option value="MOBILE APPS">MOBILE APPS</option>
                    <option value="CLOUD BASED PORTAL">CLOUD BASED PORTAL</option>
                    <option value="SUPPLY CHAIN SOFTWARE (ERP)">SUPPLY CHAIN SOFTWARE (ERP)</option>
                    <option value="DESKTOP APPLICATIONS(For retail outlets)">DESKTOP APPLICATIONS(For retail outlets)</option>
                </select>
                <span style="width: 50%; top: 100%; right: -17%; position: absolute;" id="msg_soft" class="msg_validate"></span>
            </span>
            <span class="col-md-6 col-xs-12">
                <input type="checkbox" id="atm_networkchk" name="atm_networkchk" value="networking" style="margin-bottom: 25px;    margin-left: 8%;">NETWORKING
                <br>
                <select name="atm_networking[]" id="atm_networking" multiple class="consult_02">
                    <option value="VIRTUALIZATION">VIRTUALIZATION</option>
                    <option value="STORAGE">STORAGE</option>
                    <option value="SECURITY">SECURITY</option>
                    <option value="MIDDLEWARE">MIDDLEWARE</option>
                    <option value="NETWORK ARCHITECTURE CONSULTATION">NETWORK ARCHITECTURE CONSULTATION</option>
                    <option value="SYSTEM SOFTWARE INSTALLATION & CONFIG">SYSTEM SOFTWARE INSTALLATION & CONFIG</option>
                </select>
                <span style="width: 50%; top: 49%; right: -17%; position: absolute;" id="msg_net" class="msg_validate"></span>
                <ul class="personal_details_01b">
                    <li>
                        <div class="create-tooltip" title="Back" id='cons_Back'>
                            <img src="images/back.png" class="img-responsive"/>
                        </div>
                    </li>
                    <li>
                        <div class="create-tooltip reachus_subtm" title="Post" id="Busi_post">
                            <img src="images/post.png" class="img-responsive"/>
                        </div>
                    </li>
                    <li>
                        <div class="create-tooltip" id="atm_consulate" title="Clear" >
                            <img src="images/clear.png" class="img-responsive"/>
                        </div>
                    </li>
                    <li>
                        &nbsp;
                    </li>
                </ul>
            </span>
        </span>
    </div>
</form>
<?php
    ?>
