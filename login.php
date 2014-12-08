<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>CIDCO</title>
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootswatch.css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <style>
            .Headername
            {
            font-family:Arial;
            font-size:14px;
            color:Black;	
            font-weight:bold;
            }
            .HeaderMarathi
            {
            font-family:Mangal;
            font-size:22px;
            color:Black;	
            font-weight:normal;
            }
            .SubHeaderName
            {
                    font-family:Arial;
                    font-size:11px;
                    color:Black;	
                    font-weight:bold;
                    line-height:18px;
            }
            .SubHeaderNameMarathi
            {
                    font-family:Mangal;
                    font-size:11px;
                    color:Black;	
                    font-weight:bold;
                    line-height:20px;
            }
            .lang {
                    FONT-FAMILY: Arial; COLOR: black; FONT-SIZE: 12px
            }
            .lang A {
                    FONT-FAMILY: Arial; COLOR: black; FONT-SIZE: 12px; TEXT-DECORATION: none
            }
            .lang A:hover {
                    FONT-FAMILY: Arial; COLOR: #3e53a2; FONT-SIZE: 12px; TEXT-DECORATION: none
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="jumbotron">
                <table align="center" width="900px" cellpadding="0" cellspacing="0">
                    <tr>
                    <td style="width: 5px">
                    </td>
                        <td style="width: 175px">
                            <a href="#">
                                <img src="logoenglish.png" alt="" style="border:0" />
                            </a>
                        </td>
                        
                        <td style="width: 603px" class="Headername" align="center">
                            <div style="padding-top:28px;">
                                CITY AND INDUSTRIAL DEVELOPMENT CORPORATION OF MAHARASHTRA LIMITED
                            </div>
                            <div style="text-align: center" class="SubHeaderName">
                                (Government of Maharashtra Undertaking)</div>
                        </td>
                    </tr>
                </table>
            </div>
        
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
                <button type="submit" class="btn btn-success" id="request" value='login' onclick="validateLoginFormOnSubmit()"><font size="3" >Log in</font></button>
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