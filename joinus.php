<link rel="stylesheet" href="css/jquery.loadmask.css">
<script type="text/javascript" src="js/jquery.loadmask.min.js"></script>
<form id="joinus" name="joinus" enctype="multipart/form-data">
<div class="col-sm-12" id="mask_j_us" style="height: 375px; width: 100%; background: #fff none repeat scroll 0% 0%; padding: 40px 0 0 50px; margin: 0px ! important;">
                        <div class="msg_ack" class="col-sm-12"></div>
                        <div class="col-sm-6">
                            <span class="input input--madoka" style="margin-left: 70px; max-width: 600px;">
          <input class="input__field input__field--madoka" type="text" id="atm_j_name" name="atm_j_name" />
          <label class="input__label input__label--madoka" for="atm_j_name">
            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
              <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
            </svg>
            <span class="input__label-content input__label-content--madoka">Name<span style="color:#c31118;">*</span></span>
          </label>
                            </span>
                            <span style="width: 50%;top: 29%;right: -26%; position: absolute;" id="msg_j_name" class="msg_validate"></span>
                            <span class="input input--madoka" style="margin-left: 70px; max-width: 600px;">
                                <input class="input__field input__field--madoka" type="text" id="atm_j_email" name="atm_j_email" />
                                <label class="input__label input__label--madoka" for="atm_j_email">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Email<span style="color:#c31118;">*</span></span>
                                </label>
                            </span>
                            <span style="width: 50%;top: 61%;right: -29%; position: absolute;" id="msg_j_email" class="msg_validate"></span>
                            <span class="input input--madoka" style="margin-left: 70px; max-width: 600px;">
                                <input class="input__field input__field--madoka" type="text" id="atm_j_mobilenum"  onkeyup="NumberOnly(this);" name="atm_j_mobilenum" />
                                <label class="input__label input__label--madoka" for="atm_j_mobilenum">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Phone Number<span style="color:#c31118;">*</span></span>
                                </label>
                            </span>
                            <span style="width: 50%;top: 94%;right: -17%; position: absolute;" id="msg_j_num" class="msg_validate"></span>
                        </div>
                        <div class="col-sm-6 join_leftpart">
                            
                            <div class="input-group style-4" style="margin-top: 55px;">
                               <span class="input-group-btn" style="margin-top: 50px;">
                                   
                                   <span class="btn btn-primary btn-file upload_btn">
                                       Upload resume <input type="file"  id="atm_j_file" name="atm_j_file">
                                   </span>
                                   <p class="join_note">* Only pdf, doc, docx</p>
                               </span>
                               <input type="text" class="form-control input_upload" id="atm_j_dumy" readonly style="width: 82%; font-family: century gothic;">
                               <span style="position: absolute; right: 56px; top: 71%;" id="msg_j_file" class="msg_validate"></span>
                           </div>
                            
                            <div class="captcha">
                                <div >
                                           <img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' >
                                           <span style="float:left;"><img style="width:25px;float:left;font-size:10px;" src="images/refresh.png" id="refreshcaptcha"   alt="refresh" /><span style="color:#c31118;position: relative; left: 10px;">*</span></span>
                                            
                                </div>
                                        <input type="text" id="atm_j_captura" name="atm_j_captura" ><br/>
                                        <div style=" color: #c31118;float: right;font-size: 11px;font-style: italic; margin-right: 38px;margin-top: 113px;" class="msg_validate" id="er_captcha_code"></div>
                               
                            </div>
                            
                            <div class="col-sm-offset-6 col-sm-6 ms join_btn">
                                
                            <input type='button' id='reset' value='reset'  class="submit hvr-round-corners" />
                            <input class="submit hvr-round-corners" value='Submit' type='button' id="joinus_submt" style="margin-right: 6px; margin-bottom: 6px;">
                            </div>
<input type="hidden" id="action" name="action" value="post" />
                        </div>
                    </div>
</form>