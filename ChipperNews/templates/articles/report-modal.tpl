<div id="reportModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Report User</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-report" action="{$BASE_URL}actions/users/report.php" method="post">
                     
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
                          <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit" >Report</button>
                    </form>
                    <br>
                         
                </div>
              
            </div>

        </div>
    </div>