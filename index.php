<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>CIDCO</title>
        <?php include_once 'html_comp/navbar.php'; ?>
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><font size="5" >Login</font></h3>
                    </div>
                    <div class="panel-body">
                        <form action="" >
                        <div class="input-group">
                            <span class="input-group-addon">Username</span>
                            <input type="text" class="form-control" id="username" placeholder="Email or Username">
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon">Password&nbsp;</span>
                            <input type="password" class="form-control" id="passwordlogin" placeholder="Password">
                        </div>
                        <br/>
                        <a type="submit" href="home.php" class="btn btn-success" id="request" value='login' onclick="validateLoginFormOnSubmit()"><font size="3">
                            Log in</font></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function(){
            var text_input = document.getElementById ('username');
            text_input.focus ();
            text_input.select ();
            }
        </script>
    </body>
</html> 