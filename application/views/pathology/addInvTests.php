


<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="">

            <header class="panel-heading">
                <i class="fa fa-vial"></i>        
                Pathology Investigation Test                      
            </header><br>

                <div style="width: 90%; ">

                    <div class="input-group">
                        <span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">
                            Test Group
                        </span>
                        <select class="form-control custom-select custom-select-lg m-bot15 js-example-basic-single tstgrp" required="required" name="lab_ptn_id" value=''>
                            <option value="">Select...........</option>
                    <?php foreach ($test_grup as $grup) { ?>
                            <option value="<?php echo $grup->tst_grp_iddi ; ?>"><?php echo $grup->tst_grp_name ; ?></option>
                    <?php } ?>
                        </select>


                        <span style="font-weight: bold; color: black;" class="input-group-addon lanr sp_dr_name" id="basic-addon3">
                            INV Name
                        </span>
                        <select class="form-control custom-select custom-select-lg m-bot15 js-example-basic-single invInfo" required="required" name="lab_ptn_id" value=''>
                            <option value="">Select...........</option>
                        </select>
                    </div><br>
                    <div class="work_btn"></div>

                    <div class="patho_inv_test_vw">

<br><br><br>
                    <div class="inv_test_ad"></div>












                    </div>

                </div>
                    

        </section>
    </section>
</section>













<script type="text/javascript">
    var headofEntry = '<table border="1px"><tr><th>Test Name</th><th>Range Type</th><th>Action</th></tr>';

    var AddNewForm = '<tr class="tstRangInfoCls"><td><input type="text" id="" class="form-control tstName" ></td><td><input type="text" id="" class="form-control rangType" ></td><td><button type="button" class="btn btn-info addBtnSave" title="Add" id="" ><i class="fa fa-save"></i> </button></td></tr></table>';









  







    $('.tstgrp').change(function() {
        var tstgrp = $(this).val();
        $.ajax({
            url: 'pathology/get_invBygID?grpID='+tstgrp,
            method: 'GET',
            data: '',
            dataType: 'json',
            success: function (inv_info) {
                var html = '';
                var n;
                for (n=0; n<inv_info.length; n++) {
                    html += '<option value="'+inv_info[n].tst_inv_id+'">'+inv_info[n].inv_name+'</option>';
                }
                $('.invInfo').html('<option value="">Select................</option>'+html);
            }
        })
    })

    $('.invInfo').change(function() {
        var inv_idii = $(this).val();
        if (inv_idii != '') {
            $('.work_btn').html('<button type="button" style="font-size: 25px; margin: 0 0 0 70px;" class="btn btn-info addTestRange" title="Add New" ><i class="fa fa-plus-circle"> ADD NEW </i> </button><button type="button" style="font-size: 25px; margin: 0 0 0 70px;" class="btn btn-info TestRangeView" title="Add New" ><i class="fa fa-eye"> VIEW </i> </button>');
            $('.rng_Info_ad').html('');
        }else {
            $('.work_btn').html('<h2> Please Select a Investigation.... </h2>');
        }
    })

    $(document).on('click ','.addTestRange', function () {
        $('.inv_test_ad').html(headofEntry+' '+AddNewForm);
    })

    $(document).on('click ','.addBtnSave', function () {
        var tst_inv_iids = $('.invInfo').val();
        var tstNamess = $(this).parents('.tstRangInfoCls').find('.tstName').val();
        var rng_typ = $(this).parents('.tstRangInfoCls').find('.rangType').val();
        var gender = $(this).parents('.tstRangInfoCls').find('.gender').val();
        var agess = $(this).parents('.tstRangInfoCls').find('.agess').val();
        var times = $(this).parents('.tstRangInfoCls').find('.var_Time').val();
        var Weight = $(this).parents('.tstRangInfoCls').find('.var_weight').val();
        var Temp_man = $(this).parents('.tstRangInfoCls').find('.man_temp').val();
        var normalVal = $(this).parents('.tstRangInfoCls').find('.orgnal_rng').val();
        var gen_per = $(this).parents('.tstRangInfoCls').find('.gen_per').val();


        $.ajax({
            url: 'pathology/addNewRangess',
            type: 'POST',
            data: { 
                inv_id: tst_inv_iids, 
                name: tstNamess, 
                type: rng_typ, 
                gend: gender, 
                age: agess, 
                time: times, 
                weigth: Weight, 
                temp: Temp_man, 
                nVal: normalVal, 
                gen_per: gen_per
            },
            cache: false,
            success: function () {
                $('.inv_test_ad').html('');
            }
        })
    })

    function tstRangView () {
        var invs_iid = $('.invInfo').val();

        $.ajax({
            url: 'pathology/tstRngbyINV?inv_ids='+invs_iid,
            method: 'GET',
            data: '',
            dataType: 'json',
            success: function(tstRng) {
                var datass = '';
                var i;
                for (i=0; i<tstRng.length; i++) {

                    datass += '<tr class="tstRangInfoCls"><td><input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control tstName inputboxs" value="'+tstRng[i].tst_rang_nam+'"> </td><td><input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control rangType inputboxs" value="'+tstRng[i].rang_type+'"> </td><td><input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control gender inputboxs" value="'+tstRng[i].gender+'"> </td> <td> <input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control gender inputboxs" value="'+tstRng[i].gender_period+'"> </td> <td> <input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control agess inputboxs" value="'+tstRng[i].age+'"> </td> <td> <input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control var_Time inputboxs" value="'+tstRng[i].days_time+'"> </td> <td> <input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control var_weight inputboxs" value="'+tstRng[i].weight+'"> </td> <td> <input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control man_temp inputboxs" value="'+tstRng[i].temp+'"> </td> <td> <input type="text" readonly="readonly" id="inlineFormCustomSelect" class="form-control orgnal_rng inputboxs" value="'+tstRng[i].tst_normal_rang+'"> </td> <td> <button type="button" class="btn btn-info btn-xs EditBtns" title="Edit" id="inlineFormCustomSelect" ><i class="fa fa-edit"></i> </button> <button type="button" class="btn btn-info btn-xs DelBtns delete_button" title="Delete" id="inlineFormCustomSelect" ><i class="fa fa-trash"></i> </button> </td> </tr>';
                }
        $('.inv_test_ad').html(headofEntry+' '+datass+'</table>');
            }
        })
    }

    $(document).on('click ','.TestRangeView', function () {
        tstRangView();
    })



</script>













