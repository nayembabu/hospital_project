<style type="text/css">
    .button {
      padding: 10px 25px;
      font-size: 24px;
      text-align: center;
      outline: none;
      color: #fff;
      border: none;
      border-radius: 85px;
      box-shadow: 5px 9px #999;
      font-weight: bold; 
      font-size: 25px; 
      margin-top: 10px;
    }

    .button:hover {
        background-color: #FFFFFF;
        color: #000000;
        border: 2px solid black;
    }

    .button:active {
      box-shadow: 0 2px #666;
      transform: translateY(10px);
        color: #000000;
    }

    .ptnInfos {
        margin-top: 20px;
    }

    .drInfos {
        margin: 15px 0 0 0;
    }
</style>


<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="">

            <header class="panel-heading">
                <i class="fa fa-vial"></i>  
                Test Report Entry 
            </header><br>



            <form action="pathology/tst_result_entry" method="post"  enctype="multipart/form-data" class="" style="width: 85%; margin: ">
                    <center>
                    <div class="input-group" style="width: 50%;">
                        <span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">
                            Patient ID
                        </span>
                        <input type="text" class="form-control typPTNID" placeholder="Type Patient ID" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                        <button type="button" class="btn button green search_btn_byid">SEARCH</button>
                    </center>

                    <div class="input-group ptnInfos"></div>

                    <div class="input-group drInfos"></div>

                    <div class="input-group btnAddInfo">
                        <br><br><button type="button" class="btn btn-info thoughtbot" style="font-size: 20px; font-weight: bold;">Submit</button>
                    </div>

                    <div class="reportPrintOpt"></div>

                    <div class="ptn_tst_infos" style="width: 80%; margin-top: 50px;"></div>
                    <div class="submit_btn_assgn"></div>

                    
            </form>    
        </section>
    </section>
</section>




<script type="text/javascript">
    var tstGrpOpt = '<select class="form-control select" id="" name="dep_idi" value=""><option value="">Select....</option>';
    var checkrepoEntry;
    $('.search_btn_byid').click(function() {
        ptnInfoViewF();
    })


    function checkTstGrup() {
        var PtnTypID = $('.typPTNID').val();
        $.ajax({
            url: 'pathology/gettstGrupforCheck?ptn_ids='+PtnTypID,
            method: 'GET',
            data: '',
            dataType: 'json',
            success: function(data_f) {
                var i;
                var html = '';
                for (i=0; i<data_f.length; i++) {
                    html += '<option value="'+data_f[i].tst_grp_iddi+'">'+data_f[i].tst_grp_name+'</option>';

                }
  
                $('.reportPrintOpt').html(tstGrpOpt+''+html+'</select>');
                // Sibling the remove duplicate 
$(".select option").val(function(idx, val) {
  $(this).siblings('[value="'+ val +'"]').remove();
});
            }
        })

    }

    function ptnInfoViewF() {
        var PtnTypID = $('.typPTNID').val();
        if (PtnTypID == '') {
            $('.ptnInfos').html('<h1>ID is Empty? Type Patient ID....</h1>');
        }else {
            $.ajax({
                url: 'pathology/getPtnByIIDD?ptn_ids='+PtnTypID,
                method: 'GET',
                data: '',
                dataType: 'json',
                success: function(ptn_infos) { 
                  if (!$.trim(ptn_infos)) {
                    $('.ptnInfos').html('<h1>Type Correct ID.....</h1>');
                    $('.drInfos').html('');
                  }else {
                    var ptnInf = '<input type="hidden" name="lab_ptn_iidds" value="'+ptn_infos.labpn_id+'" ><input type="hidden" name="lab_ptn_Rgstrid" value="'+ptn_infos.lab_rgstr_iidd+'" ><span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">Patient Name</span><div class="form-control"><b>'+ptn_infos.labpnname+'</b></div><span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">Patient Age</span><div class="form-control">'+ptn_infos.labpn_age+'</div><span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">Patient Gender</span><div class="form-control">'+ptn_infos.gndr+'</div>';

                    drInf = '<span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">Doctor Name</span><div class="form-control"><b>'+ptn_infos.dr_name+'</b></div><span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">Doctor Degree</span><div class="form-control">'+ptn_infos.profile+'</div>';
                    checkrepoEntry = ptn_infos.patho_entry_userIIDD;  
                    $('.ptnInfos').html(ptnInf);
                    $('.drInfos').html(drInf);


                if (checkrepoEntry == 0) {
                    tstInfoView();
                    $('.submit_btn_assgn').html('<br><br><center><button type="submit" class="btn btn-info sbmtbtn punch" style="font-size: 42px; font-weight: bold;">Submit</button></center>');
                }else {
                    checkTstGrup();
                  }
                }
                }
            })

     
        }
    }


    function tstInfoView() {

        var PtnTypID = $('.typPTNID').val();
            $.ajax({
                url: 'pathology/getPtnTstByIIDDD?ptn_ids='+PtnTypID,
                method: 'get',
                data: '',
                dataType: 'json',
                success: function(ptn_tst_inf) {
                    var full_data = '';
                    var n;
                    for (n=0; n<ptn_tst_inf.length; n++) {
                        full_data += '<div class="input-group " style="margin: 5px 0 0 0;"><span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">'+ptn_tst_inf[n].test_name+'</span><input type="hidden" class="form-control" name="test_idii_auto[]" value="'+ptn_tst_inf[n].tst_auto_iid+'" ><input type="text" class="form-control" name="lab_tst_result[]" required="required" placeholder="Type Result" ><span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">'+ptn_tst_inf[n].tst_normal_rang+'</span></div>';
                    }
                    $('.ptn_tst_infos').html(full_data);
                }
            })
    }

    $('form').submit(function() {
        $('.sbmtbtn').css('display', 'none');
    })
</script>















