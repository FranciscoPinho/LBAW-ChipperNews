<?php /* Smarty version Smarty-3.1.15, created on 2017-05-18 09:51:17
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\report-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24867591d6745955c00-75992515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8ec58e8bd649e317879b021bad1bc4ca540779' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\report-modal.tpl',
      1 => 1495100893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24867591d6745955c00-75992515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591d6745964092_17273012',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d6745964092_17273012')) {function content_591d6745964092_17273012($_smarty_tpl) {?><div id="reportModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Report User</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-report" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/report.php" method="post">
                     
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
    </div><?php }} ?>
