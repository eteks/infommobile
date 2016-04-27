$(document).ready(function($){
    $('#atm_j_captura').keyup(function(e){                
                var atm_j_captura=$("#atm_j_captura").val();
                $.ajax({
                url    : 'captcha/captcha.php',
                data   : 'atm_j_captura=' + atm_j_captura + '&action='+'captacha',
                type   : 'post',
                success: function(res){

                  if($.trim(res)=='ok')
                  {
                      // alert($.trim(res));
                      $("#er_captcha_code").css({"color":"green"});
                      $("#er_captcha_code").html('Valid Security Code');
                      $("#er_captcha_code").html("");
                      var returnVal = true;
                      return returnVal;
                      alert(returnVal);
                  }
                  if($.trim(res)!='ok')
                  {
                      // alert("Invalid Captcha");
                      $("#er_captcha_code").css({"color":"red"});
                      $("#er_captcha_code").html('Invalid Security Code');
                      $("#atm_j_captura").focus();
                      var returnVal = false;
                      return returnVal;
                      alert(returnVal);
                  }
                }
                });
    });

    $('#atm_personal_submit').on('click',function(){
        var atm_name         = $("#atm_name").val();
        var atm_email        = $("#atm_email").val();
        var atm_addr         = $("#atm_addr").val();
        var atm_busexpect    = $("#atm_busexpect").val();
        var atm_file = $('#atm_file').val();
        var str = atm_file.substring(atm_file.lastIndexOf('.') + 1);
        var ext = str.toLowerCase();
        if(atm_name=='')
        {
            $('#msg_name').html("Please Enter the Name");
            $('#atm_name').focus();
            return false;
        }
        $('#msg_name').html("");
        if(atm_email=='')
        {

            $('#msg_email').html("Please Enter the Email Id");
            $('#atm_email').focus();
            return false;
        }
        $('#msg_email').html("");
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(atm_email)))
        {
            $('#msg_email').html("Please Enter the Valid Email Id");
            $('#atm_email').focus();
            return false;
        }
        $('#msg_email').html("");
        if (atm_addr=='')
        {
            $('#msg_addr').html("Please Enter the Address");
            $('#atm_addr').focus();
            return false;
        }
        $('#msg_addr').html("");

        if ($('#atm_j_captura').val()=='')
        {
          $('#er_captcha_code').html("Please Enter the Security Code");
          $('#atm_j_captura').focus();
          return false;
        }
        //$('#er_captcha_code').html("");


        if($("#er_captcha_code").html()==="Invalid Security Code")
        {
          alert("Please Enter Valid Security Code");
          $("#atm_j_captura").val("");
          $("#er_captcha_code").html("");
          $("#atm_j_captura").focus();          
          return false;
        }

        // alert('reached');
        // if(atm_file=='' && atm_busexpect=='')
        // {
           // $("#msg_exp").html("Please Enter or Upload the Specification");
           // $('#atm_busexpect').focus();
           // return false;
        // }
        // $('#msg_exp').html("");
        
        if(atm_file)
        {
           if(ext=='pdf'||ext=='doc'||ext=='docx')
           var test;
           else
           {
            $("#msg_exp").html("Please Upload pdf,doc,docx File Only");
            $('#msg_exp').focus();
            return false;
           }
        }
        $('#msg_exp').html("");
        $(".msg_ack").show();       


           var m_data = new FormData();
            m_data.append( 'atm_name', atm_name);
            m_data.append( 'atm_email', atm_email);
            m_data.append( 'atm_addr', atm_addr);
            m_data.append( 'atm_busexpect', atm_busexpect);
            m_data.append( 'action', 'post');
            m_data.append( 'option', 'personal');
            m_data.append( 'atm_file', $('input[name=atm_file]')[0].files[0]);

            //instead of $.post() we are using $.ajax()
            //that's because $.ajax() has more options and flexibly.
            $("#tab1").mask("Waiting...");

  	      $.ajax({
              url: 'reachus.process.php',
              data: m_data,             
              processData: false,
              contentType: false,
              type: 'POST',
              dataType:'json',
              success: function(response){
                   $('#atm_personal_reset').click();
                   $("#tab1").unmask();
                   $(".msg_ack").show();
                   $(".msg_ack").html(response.text);
                   $('.msg_ack').delay(4000).fadeOut();

              }
            });



        });

       $('.reachus_subtm').on('click',function(){
        var atm_name         = $("#atm_name").val();
        var atm_email        = $("#atm_email").val();
        var atm_addr         = $("#atm_addr").val();
        var atm_busexpect    = $("#atm_busexpect").val();
        var atm_compname     = $("#atm_compname").val();
        var atm_website      = $("#atm_website").val();
        var atm_hardware_col = [];
        var atm_software_col = [];
        var atm_networking_col = [];
        var atm_file = $('#atm_file').val();
        var str = atm_file.substring(atm_file.lastIndexOf('.') + 1);
        var ext = str.toLowerCase();

        if($('#atm_hardchk').prop("checked")==false && $('#atm_softchk').prop("checked")==false && $('#atm_networkchk').prop("checked")==false)
            {
              $('.msg_c_ack').html("Please Select atleast one among the Hardware / Software / Networking");
              $('#atm_hardchk').focus();
              return false;
            }
        $('.msg_c_ack').delay(4000).fadeOut();
        $('.msg_c_ack').html("");
        if ($('#atm_hardchk').prop("checked")==true && $("#atm_hardware option:selected").length == 0)
        {
            $('#msg_hard').html("Please Select Hardware");
            $('#atm_hardware').focus();
            return false;
        }
        $('#msg_hard').html("");
        if ($('#atm_softchk').prop("checked")==true && $("#atm_software option:selected").length == 0)
        {
            $('#msg_soft').html("Please Select Software");
            $('#atm_software').focus();
            return false;
        }
        $('#msg_soft').html("");
        if ($('#atm_networkchk').prop("checked")==true && $("#atm_networking option:selected").length == 0)
        {
            $('#msg_net').html("Please Select Networking");
            $('#atm_networking').focus();
            return false;
        }
        $('#msg_net').html("");

        $.each($("#atm_hardware option:selected"), function(){
               atm_hardware_col.push($(this).val());
        });
         $.each($("#atm_software option:selected"), function(){
               atm_software_col.push($(this).val());
        });
         $.each($("#atm_networking option:selected"), function(){
               atm_networking_col.push($(this).val());
        });
        var atm_hardware  = atm_hardware_col.join(", ");
        var atm_software  = atm_software_col.join(", ");
        var atm_networking  = atm_networking_col.join(", ");


        var m_data = new FormData();
            m_data.append( 'atm_name', atm_name);
            m_data.append( 'atm_email', atm_email);
            m_data.append( 'atm_addr', atm_addr);
            m_data.append( 'atm_busexpect', atm_busexpect);
            m_data.append( 'atm_compname', atm_compname);
            m_data.append( 'atm_sector', $('select[name=atm_sector]').val());
            m_data.append( 'atm_industry', $('select[name=atm_industry]').val());
            m_data.append( 'atm_website', atm_website);
            m_data.append( 'atm_empstr', $('select[name=atm_empstr]').val());
            m_data.append( 'atm_hardware', atm_hardware);
            m_data.append( 'atm_software', atm_software);
            m_data.append( 'atm_networking', atm_networking);
            m_data.append( 'action', 'post');
            m_data.append( 'option', 'all');
            m_data.append( 'atm_file', $('input[name=atm_file]')[0].files[0]);
            //instead of $.post() we are using $.ajax()
            //that's because $.ajax() has more options and flexibly.
            $("#tab3").mask("Waiting...");
  	      $.ajax({
              url: 'reachus.process.php',
              data: m_data,
              processData: false,
              contentType: false,
              type: 'POST',
              dataType:'json',
              success: function(response){

                   $('#atm_personal_reset').click();
                   $('#atm_busdetails').click();
                   $('#atm_consulate').click();
                   $("#tab3").unmask();
                   $("#tab3").fadeOut('fast');
                   $("#tab1").fadeIn("fast");
                   $(".msg_ack").show();
                   $(".msg_ack").html(response.text);
                   $('.msg_ack').delay(4000).fadeOut();

              }
            });

        });

     $('.busproceed').on('click',function(){

        var atm_busexpect    = $("#atm_busexpect").val();
        var atm_compname     = $("#atm_compname").val();
        var atm_sector       = $("#atm_sector").val();
        var atm_industry     = $("#atm_industry").val();
        var atm_empstr       = $("#atm_empstr").val();
        var atm_website      = $("#atm_website").val();
        var atm_file         = $('#atm_file').val();
           if(atm_file=='' && atm_busexpect==''  && atm_compname=='')
           {
            $("#msg_compname").html("Please Enter the Company Name");
            $('#atm_compname').focus();
            return false;
           }
           $('#msg_compname').html("");
           if(atm_file=='' && atm_busexpect==''  &&  atm_sector=='')
           {
            $("#msg_sector").html("Please Select the Sector");
            $('#atm_sector').focus();
            return false;
           }
           $('#msg_sector').html("");
           if(atm_file=='' && atm_busexpect==''  && atm_industry=='')
           {
            $("#msg_industry").html("Please Select the Industry");
            $('#atm_industry').focus();
            return false;
           }
           $('#msg_industry').html("");
           if(atm_file=='' && atm_busexpect==''  && atm_empstr=='')
           {
            $("#msg_empstr").html("Please Select the Employee Strength");
            $('#atm_empstr').focus();
            return false;
           }
            $('#msg_empstr').html("");
            $('.msg_validate').html("");
            $("#tab1").fadeOut('slow');
            $("#tab2").fadeOut('slow');
            $("#tab3").fadeIn('slow');

      });

    $('#Proceed').on('click',function()
    {
        var atm_name         = $("#atm_name").val();
        var atm_email        = $("#atm_email").val();
        var atm_addr         = $("#atm_addr").val();
        var atm_file = $('#atm_file').val();
        var str = atm_file.substring(atm_file.lastIndexOf('.') + 1);
        var ext = str.toLowerCase();
         if(atm_name=='')
        {
            $('#msg_name').html("Please Enter the Name");
            $('#atm_name').focus();
            return false;
        }
        $('#msg_name').html("");
        if(atm_email=='')
        {

            $('#msg_email').html("Please Enter the Email Id");
            $('#atm_email').focus();
            return false;
        }
        $('#msg_email').html("");
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(atm_email)))
        {
            $('#msg_email').html("Please Enter the Valid Email Id");
            $('#atm_email').focus();
            return false;
        }
        $('#msg_email').html("");
        if (atm_addr=='')
        {
            $('#msg_addr').html("Please Enter the Address");
            $('#atm_addr').focus();
            return false;
        }
        $('#msg_addr').html("");
        if(atm_file)
        {
           if(ext=='pdf'||ext=='doc'||ext=='docx')
            var test;
           else
           {
            $("#msg_exp").html("Please Upload pdf,doc,docx File Only");
            $('#atm_file').focus();
            return false;
            }
        }
        if ($('#atm_j_captura').val()=='')
        {
          $('#er_captcha_code').html("Please Enter the Security Code");
          $('#atm_j_captura').focus();
          return false;
        }
        //$('#er_captcha_code').html("");


        if($("#er_captcha_code").html()==="Invalid Security Code")
        {
          alert("Please Enter Valid Security Code");
          $("#atm_j_captura").val("");
          $("#er_captcha_code").html("");
          $("#atm_j_captura").focus();          
          return false;
        }
        $('#msg_exp').html("");
        $('.msg_validate').html("");
        $("#tab1").fadeOut('slow');
        $("#tab3").fadeOut('slow');
        $("#tab2").fadeIn('slow');


    });

    $('#atm_personal_reset').on('click',function(){
           $("#atm_name").val("");
           $("#atm_email").val("");
           $("#atm_addr").val("");
           $("#atm_busexpect").val("");
           $("#atm_dumy").val("");
           $("#atm_enterspecific").val("");
           $('#Enter_spe').click();
           $('.msg_validate').html("");
           $(".input--madoka").removeClass("input--filled");
    });


    $('#atm_busdetails').on('click',function(){
           $("#atm_compname").val("");
           $("#atm_sector").val("");
           $("#atm_industry").html("");
          // $("#atm_subindustry").html("");
           $("#atm_website").val("");
           $("#atm_empstr").val("");
           $('.msg_validate').html("");
           $(".input--madoka").removeClass("input--filled");
    });

    $('#atm_consulate').on('click',function(){
           $("#atm_hardchk").prop("checked",false);
           $("#atm_softchk").prop("checked",false);
           $("#atm_networkchk").prop("checked",false);
           $("#atm_hardware").val("");
           $("#atm_software").val("");
           $("#atm_networking").val("");
           $("#atm_hardware").prop("disabled",true);
           $("#atm_software").prop("disabled",true);
           $("#atm_networking").prop("disabled",true);
           $('.msg_validate').html("");
    });

    $("#atm_hardchk").on('click',function(){
        if($("#atm_hardchk").prop("checked")==true)
           $("#atm_hardware").prop("disabled",false);
        else
           $("#atm_hardware").prop("disabled",true);
        $("#atm_hardware option:selected").removeAttr("selected");
    });
    $("#atm_softchk").on('click',function(){
        if($("#atm_softchk").prop("checked")==true)
           $("#atm_software").prop("disabled",false);
        else
           $("#atm_software").prop("disabled",true);
        $("#atm_software option:selected").removeAttr("selected");
    });
    $("#atm_networkchk").on('click',function(){
        if($("#atm_networkchk").prop("checked")==true)
           $("#atm_networking").prop("disabled",false);
        else
           $("#atm_networking").prop("disabled",true);
        $("#atm_networking option:selected").removeAttr("selected");
    });

    $('#atm_sector').on('change',function(){
            var atm_sector = $("#atm_sector").val();
            $.ajax({
                    type:'POST',
                    url: 'reachus.process.php',
                    data: 'action=industry&atm_sector='+atm_sector,
                    success:function(data){
                            // if(data!='')
                            // alert(data);
                                $("#atm_industry").html(data);
                    }
            });
            return false;
        });

        $("#atm_hardware").prop("disabled",true);
        $("#atm_software").prop("disabled",true);
        $("#atm_networking").prop("disabled",true);
        $('#atm_busexpect').attr('placeholder', 'Enter your Business Expectations with us (Maximum 1500 Words)');

        $('#reset').on('click',function(){
        $('#atm_j_name').val("");
        $('#atm_j_email').val("");
        $('#atm_j_mobilenum').val("");
        $('#atm_j_captura').val("");
        $('#atm_j_dumy').val("");
        $('.msg_validate').html("");
        $(".input--madoka").removeClass("input--filled");
        });

    $('#refreshcaptcha').on('click',function(){
         var img = document.images['captchaimg'];
         img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    });

   $('#atm_j_captura').keyup(function(e){
    var atm_j_captura=$("#atm_j_captura").val();
    $.ajax({
    url    : 'captcha/captcha.php',
    data   : 'atm_j_captura=' + atm_j_captura + '&action='+'captacha',
    type   : 'post',
    success: function(res){

            if($.trim(res)=='ok')
            {
                //alert($.trim(res));
                $("#er_captcha_code").css({"color":"green"});
                $("#er_captcha_code").html('Valid Security Code');
                $("#er_captcha_code").html("");
                var returnVal = true;
                return returnVal;
                //alert(returnVal);
            }
            if($.trim(res)!='ok')
            {
                //alert("Invalid Captcha");
                $("#er_captcha_code").css({"color":"red"});
                $("#er_captcha_code").html('Invalid Security Code');
                $("#atm_j_captura").focus();
                var returnVal = false;
                return returnVal;
                //alert(returnVal);
            }
        }
      });
   });
   var count = "1500";

   $('#atm_busexpect').keyup(function(e){
   var tex = $('#atm_busexpect').val();
   var len = tex.length;
   if(len > count){
   tex = tex.substring(0,count);
   $('#atm_busexpect').val(tex);
   return false;
   }

   $("#counter").html(count-len);
   if(count-len==0)
       alert('Message exceeds 1500 Character');
   return true;

   });

    $('#atm_j_name').on('blur',function(){      
        if($('#atm_j_name').val() !=''){
            $('#msg_j_name').html("");
        }     
    });
    $('#atm_j_email').on('blur',function(){      
        if((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#atm_j_email').val()))){
            $('#msg_j_email').html("");
        }
    });
    
    $('#atm_j_mobilenum').on('blur',function(){
        var mobile = $('#atm_j_mobilenum').val();
        var pattern = /^\d{10}$/;       
        if (pattern.test(mobile)) {      
            $('#msg_j_num').html("");
        }     
    });
    
    $('#atm_j_file').on('blur',function(){
        var atm_j_file = $('#atm_j_file').val();     
        var str = atm_j_file.substring(atm_j_file.lastIndexOf('.') + 1);
        var ext = str.toLowerCase();    
        if($.inArray(ext, ['pdf','doc','docx']) > 0 || $('#atm_j_file').val()!= '' ){          
            $('#msg_j_file').html("");
        }
    });


   $('#joinus_submt').on('click',function(){

       var atm_j_file = $('#atm_j_file').val();     
       var str = atm_j_file.substring(atm_j_file.lastIndexOf('.') + 1);
       var ext = str.toLowerCase();

        if($('#atm_j_name').val()=='')
        {
            $('#msg_j_name').html("Please Enter the Name");
            $('#atm_j_name').focus();
            return false;
        }   
        
        if($('#atm_j_email').val()=='')
        {
            $('#msg_j_email').html("Please Enter the Email Id");
            $('#atm_j_email').focus();
            return false;
        }
        $('#msg_j_email').html("");
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#atm_j_email').val())))
        {
            $('#msg_j_email').html("Please Enter the Valid Email Id");
            $('#atm_j_email').focus();
            return false;
        }
        $('#msg_j_email').html("");
     
        var mobile = $('#atm_j_mobilenum').val();
         // alert(mobile);
         // alert('mob'+$('#atm_j_mobilenum').val());
        var pattern = /^\d{10}$/;       
        if (!pattern.test(mobile) || $('#atm_j_mobilenum').val()=='') {
            $('#msg_j_num').html("Please Enter Mobile number with 10 digits");
            $('#atm_j_mobilenum').focus();
            return false;
        }        
        $('#msg_j_num').html("");

        if($("#atm_j_file").val() == '')
            {   
                $("#msg_j_file").html("Please Upload File");
                $('#atm_j_file').focus();
                return false;
            }
           $('#msg_j_file').html("");

          if(atm_j_file)
        {
          if($.inArray(ext, ['pdf','doc','docx']) == -1)
           {    
                $("#msg_j_file").html("Please Upload pdf,doc,docx File Only");
                $('#atm_j_file').focus();
                return false;

                if ($('#atm_j_captura').val()=='')
                {
                    $('#er_captcha_code').html("Please Enter the Security Code");
                    $('#atm_j_captura').focus();
                    return false;
                }
                $('#er_captcha_code').html("");

                if($("#er_captcha_code").html()=='Invalid Security Code')
                    {
                        alert("Please Enter Valid Security Code");
                        $("#atm_j_captura").val("");
                        $("#er_captcha_code").html("");
                        $("#atm_j_captura").focus();
                        return false;
                    }              
           }
        
        }
        $('#msg_j_file').html("");
        if ($('#atm_j_captura').val()=='')
        {
            $('#er_captcha_code').html("Please Enter the Security Code");
            $('#atm_j_captura').focus();
            return false;
        }
        //$('#er_captcha_code').html("");

        if($("#er_captcha_code").html()=='Invalid Security Code')
            {
                alert("Please Enter Valid Security Code");
                $("#atm_j_captura").val("");
                $("#er_captcha_code").html("");
                $("#atm_j_captura").focus();
                return false;
            }


            $("#mask_j_us ").mask("Waiting...");
            var m_data = new FormData();
            m_data.append( 'atm_j_name', $('input[name=atm_j_name]').val());
            m_data.append( 'atm_j_email', $('input[name=atm_j_email]').val());
            m_data.append( 'atm_j_mobilenum', $('input[name=atm_j_mobilenum]').val());
            m_data.append( 'action', $('input[name=action]').val());
            m_data.append( 'atm_j_file', $('input[name=atm_j_file]')[0].files[0]);

            //instead of $.post() we are using $.ajax()
            //that's because $.ajax() has more options and flexibly.
  	      $.ajax({
              url: 'joinus.process.php',
              data: m_data,
              processData: false,
              contentType: false,
              type: 'POST',
              dataType:'json',
              success: function(response){
                   $('#reset').click();
                   $("#mask_j_us ").unmask();
                   $(".msg_ack").show();
                   $(".msg_ack").html(response.text);
                   $('.msg_ack').delay(4000).fadeOut();
              }
            });

    });

  $('#atm_uploadspecific').mouseover(function() {

  $("#atm_uploadspecific").prop("checked",true);
  });
  $('#atm_enterspecific').mouseover(function() {
  $("#atm_enterspecific").prop("checked",true);
  });
  $('#atm_uploadspecific').mouseout(function() {
  $("#atm_uploadspecific").prop("checked",false);
  });
  $('#atm_enterspecific').mouseout(function() {
  $("#atm_enterspecific").prop("checked",false);
  });

});
function NumberOnly(o,w)
{
///^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{4}$/
o.value = o.value.replace(/[^0-9]+/g,'');	// replace empty value to the characters execpt (0-9)
}
