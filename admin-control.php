  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='text/html;charset=utf-8' http-equiv='content-type'>
        
        <title>admin-control</title>
        <?php include_once 'html_comp/navbar.php'; ?>
        <?php include_once 'html_comp/left_panel.php'; ?>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-5">
            
            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal" style="float: right; cursor:pointer;"><font size="3" >
                Add Employee
                </font></a>
        <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Employee No</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Employee No</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Electronics</td>
                            <td>Ec-301-29</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Furniture</td>
                            <td>Fn-302-67</td>
                        </tr>
                        <tr>
                            <td>Bob Naisin</td>
                            <td>Gadgets</td>
                            <td>Gd-303-45</td>
                        </tr>
                        <tr>
                            <td>Bob Naisin</td>
                            <td>Gadgets</td>
                            <td>Gd-303-45</td>
                        </tr>
                        <tr>
                            <td>Bob Naisin</td>
                            <td>Gadgets</td>
                            <td>Gd-303-45</td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <div class="col-md-2">
        <?php include_once 'html_comp/right_panel.php'; ?>
            </div>
        </div>
    
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="width:370px; height:auto">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><font size="5" >Add Employee</font></h4>
                        </div>
                        <div class="modal-body">
                            <div class="inline-form">
                                <div class="row">
                                    <div class="col-md-6">					
                                        <input type="text" class="form-control" style="width: 100%" id="firstname" placeholder="First name" onkeyup="nospaces(this)"/>	
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" style="width: 100%" id="lastname" placeholder="Last name" onkeyup="nospaces(this)"/>					
                                    </div>
                                </div>
                            </div><br/>	
                                 <input type="text" class="form-control" style="width: 100%" id="email" placeholder="Email" onkeyup="nospaces(this)"/>
                                  <span id="status_email"></span>
                                    <br/>					
                            <input type="submit" class="btn btn-primary btn-lg" id = "request" value = "Sign up" onclick="validateSignupFormOnSubmit()">
                        </div>
                    </div>
                </div>
            </div>
        
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </body>
  </html>