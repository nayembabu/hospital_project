<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
              <i class="fa fa-money"></i> <?php echo lang('monthlystatement'); ?>
              <input style="width: 20%; float: right;" type="text" class="form-control" id="search_tickt" name="" value="" placeholder="Search Ticket by Ticket_ID">
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <br><br><br>






                        <div style="margin: -25px -15px -32px -1px; padding: 0" role="form" class="form-horizontal form-inline f_report" id="form_id"><b>Total Statement By Date</b>
                              <div class="form-group">
                                <div class="col-sm-10" style="width: 40%; float: left;">
                                    <input type="text" class="form-control dtpic" id="datefrom" name="date_t" value="" placeholder="Date to date">
                                </div>
                                <div class="col-sm-10" style="width: 40%; float: left;">
                                    <input type="text" class="form-control dtpic" id="dateto" name="date_t" value="" placeholder="Date to date">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" onclick="opentotalticket()" class="btn btn-info"><?php echo lang('print'); ?></button>
                                </div> 
                              </div>
                          </div><br><br><br><br><br><br>
     




















               </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->





<script type="text/javascript">

function opentotalticket() {
    var datefrom = document.getElementById("datefrom").value;
    var dateto = document.getElementById("dateto").value;
    var url = 'reception/totalticket?date='+datefrom+'&todate='+dateto; 
    if (datefrom == '' || dateto == '') {
      alert('Please Fillup the date.....');
    }else {
      window.open(url, '_blank', 'height=800,width=800');
    }
}

$('#search_tickt').keyup(function() {
  var search_tct_id = $('#search_tickt').val();
  $.ajax({
    url: 'reception/seachTicketID?id=' + search_tct_id,
    method: 'GET',
    data: '',
    dataType: 'json',
    success: function (data) {
    }
  })
})

</script>

