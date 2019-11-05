<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
              <i class="fa fa-tint"></i>   <?php echo lang('blood_bank'); ?>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                    </div>
                    <button class="export" onclick="javascript:window.print();"><?php echo lang('print'); ?></button>  
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Blood Group</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        <style>
                            .img_url{
                                height:20px;
                                width:20px;
                                background-size: contain; 
                                max-height:20px;
                                border-radius: 100px;
                            }

                        </style>
                        <?php foreach ($groups as $group) { ?>
                            <tr class="">
                                <td><?php echo $group->group; ?></td>
                                <td> <?php echo $group->status; ?></td>
                                <td>
                                   <button type="button" class="btn btn-info btn-xs btn_width editbutton" title="<?php echo lang('edit'); ?>" data-toggle="modal" data-id="<?php echo $group->id; ?>"><i class="fa fa-edit"></i> </button>   
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->








<!-- Edit Event Modal-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> <?php echo lang('update_blood_bank'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editBloodBank" action="donor/updateBloodBank" method="post" enctype="multipart/form-data">
                    <div class="form-group"> 
                        <label for="exampleInputEmail1"><?php echo lang('group'); ?></label>
                        <input type="text" class="form-control" name="group" id="exampleInputEmail1" value='' placeholder="" disabled>    
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('status'); ?></label>
                        <input type="text" class="form-control" name="status" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <input type="hidden" name="id" value=''>
                    <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Edit Event Modal-->

<script src="common/js/codelnp.min.js"></script>
<script type="text/javascript">
                        $(document).ready(function () {
                            $(".editbutton").click(function (e) {
                                e.preventDefault(e);
                                // Get the record's ID via attribute  
                                var iid = $(this).attr('data-id');
                                $('#editBloodBank').trigger("reset");
                                $('#myModal2').modal('show');
                                $.ajax({
                                    url: 'donor/updateBloodBankByJason?id=' + iid,
                                    method: 'GET',
                                    data: '',
                                    dataType: 'json',
                                }).success(function (response) {
                                    // Populate the form fields with the data returned from server
                                    $('#editBloodBank').find('[name="id"]').val(response.bloodbank.id).end()
                                    $('#editBloodBank').find('[name="group"]').val(response.bloodbank.group).end()
                                    $('#editBloodBank').find('[name="status"]').val(response.bloodbank.status).end()
   
                                });
                            });
                        });
</script>
<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>

