    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn btn-default btn-sm" style="float: right;" data-dismiss="modal"><i class="fa fa-times fa-lg" aria-hidden="false"></i></button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-signin" action="{$BASE_URL}actions/users/login.php" method="post">
                        <label for="inputUser " class="sr-only ">Username</label>
                        <input type="text" id="inputUser" class="form-control" placeholder="Username" name="username" required=" " autofocus=" ">
                        <br>
                        <label for="inputPassword" class="sr-only ">Password</label>
                        <input type="password" id="inputPassword" class="form-control " placeholder="Password" name="password" required=" ">
                        <br>
                        <button class="btn btn-lg btn-success btn-block" type="submit" value="submit">Sign in</button>
                    </form>
                    <br>
                       <a class="btn btn-block btn-social btn-facebook ">
                            <span class="fa fa-facebook "></span> Sign in with Facebook
                        </a> 
                </div>    
            </div>
        </div>
    </div>