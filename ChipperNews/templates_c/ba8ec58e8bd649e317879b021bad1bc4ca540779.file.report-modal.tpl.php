<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 13:39:02
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\report-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241005929817694f172-09279822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8ec58e8bd649e317879b021bad1bc4ca540779' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\report-modal.tpl',
      1 => 1495889691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241005929817694f172-09279822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929817695d153_07659459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929817695d153_07659459')) {function content_5929817695d153_07659459($_smarty_tpl) {?><div id="reportModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Report User</h4>
                </div>
                <div class="modal-body" id="report_body">
                    <form class="form-report">
                         <div class="col-sm-12">
                         <label>Reporting:</label>
                        <input type="text" id="reported" class="form-control"  name="reported" value="Text" disabled>
                        <input type="hidden" id="reported_id" name="reported_id">
                        </div>
                        <div class="col-sm-12">
                        <label>Description:</label>
                        <textarea class="form-control" rows="8" cols="20" id="description" name="description" required></textarea>
                        </div>
                        <div class="col-sm-12">
                        <br><br>
                         </div>
                          <button class="btn btn-lg btn-primary btn-block" type="button" onclick="submitReport()" value="submit" >Report</button>
                    </form>
                    <br>
                    <script>
                    function submitReport(){
                     var reported_id = $("#reported_id").val();
                      var base_url = $("#base_url").text();
                     var description = $("#description").val();
                     console.log(reported_id+","+description)
                     return $.ajax({
                        type: "POST",
                        url: base_url + "actions/users/report.php",
                        data: "reported=" + encodeURI(reported_id) +"&description=" + encodeURI(description) ,
                        success: updateReportModal
                     });
                    }

                     function updateReportModal(data) {
                        var result=data;
                        console.log(result);
                        if (result == "-1") {
                            console.log('Unset variables sent through request');
                            $('#report_body').empty();
                            $('#report_body').html(`<p>Report could not be sent. Servers may be down, check your own connectivity!</p>`);  
                            return;
                        } 
                        if (result == "0") {
                            $('#report_body').empty();
                            $('#report_body').html(`<p>Report Sent Successfully</p>`);   
                            return;
                        }    
                     }
                    </script> 
                </div>
              
            </div>

        </div>
    </div><?php }} ?>
