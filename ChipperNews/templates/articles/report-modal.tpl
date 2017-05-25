<div id="reportModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Report User</h4>
                </div>
                <div class="modal-body " id="report_body">
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
                        <div class="col-sm-12"
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
    </div>