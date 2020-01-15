<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-user"></i>  Doctors Speciality    
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table " style="width: 60%;">

                    <label style="font-size: 14px; "> Select Doctor </label>
                    <select class="form-control m-bot15 js-example-basic-single dr_selects" name="doctor" value='' >
                            <option value=""> Select...... </option>
                        <?php foreach ($doctors as $doctor) { ?>
                            <option drIID="<?php echo $doctor->dr_id; ?>" value="<?php echo $doctor->dr_auto_id; ?>"> <?php echo $doctor->dr_name; ?> </option>
                        <?php } ?> 
                    </select><br><br>
                    <div class="btn_assign"></div><br><br>

                    <div class="data_view_opt"></div>
                    

                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->



<script type="text/javascript">

    var add_btn_s = '<button type="button" style="font-size: 15px; margin: 0 0 0 70px;" class="btn btn-info add_btn" title="Add New" ><i class="fa fa-plus-circle"> ADD NEW </i> </button>';

    var view_btn_s = '<button type="button" style="font-size: 15px; margin: 0 0 0 70px;" class="btn btn-info view_sp_btn" title="View All" ><i class="fa fa-eye"> VIEW </i> </button>';

    var data_top = '<table><tr><td align="center">Doctor Speciality</td><td>Save</td></tr><tr>';

    var emptyBox = '<td><input type="text" size="100" id="" class="form-control inputboxs" value=""></td><td><button type="button" style="margin-top: -30px;" class="btn btn-info save_btn_s" title="Add" id="" ><i class="fa fa-save"></i> </button></td></tr></table>';

    function getDoctorSpecility(){

    }

    $('.dr_selects').change(function() {
        var dr_this_val = $(this).val();
        if (dr_this_val == '') {
            $('.btn_assign').html('');
            $('.data_view_opt').html('');
        }else {
            $('.btn_assign').html(add_btn_s+' '+view_btn_s);
        }
    });

    $(document).on('click', '.add_btn', function() {
        $('.data_view_opt').html(data_top+' '+emptyBox);
    })

    $(document).on('click', '.save_btn_s', function() {
        var dr_auto_id = $('.dr_selects').val();
        var dr_iddr = $('option:selected', '.dr_selects').attr('drIID');
        var dr_spe = $('.inputboxs').val();
        if (dr_spe == '') {

        }else {
            $.ajax({
                url: 'doctor/setDoctorSpeciality',
                method: 'POST',
                data: {
                    dr_at_idd: dr_auto_id,
                    drIddII: dr_iddr,
                    dr_sp_txt: dr_spe
                    },
                success: function() {
                    $('.data_view_opt').html('');
                }
            })
        }
    })

    $(document).on('click', '.view_sp_btn', function() {
        var dr_auto_id = $('.dr_selects').val();
            $.ajax({
                url: 'doctor/setDoctorSpeciality',
                method: 'POST',
                data: {
                    dr_at_idd: dr_auto_id,
                    drIddII: dr_iddr,
                    dr_sp_txt: dr_spe
                    },
                success: function() {
                    $('.data_view_opt').html('');
                }
            })
    })

</script>






