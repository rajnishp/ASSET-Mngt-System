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
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Employee No</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Electronics</td>
                            <td>Ec-301-29</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Furniture</td>
                            <td>Fn-302-67</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Uber Yamato</td>
                            <td>Electronics</td>
                            <td>Ec-301-34</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Rameshwer Mishra</td>
                            <td>Testing</td>
                            <td>TS-317-23</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Sharlesh Tyagi</td>
                            <td>Development</td>
                            <td>DP-317-23</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Mark Tony</td>
                            <td>Power</td>
                            <td>PW-367-23</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Nasim Bob</td>
                            <td>Delivery</td>
                            <td>Dl-383-45</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Sakura Garima</td>
                            <td>Electronics</td>
                            <td>Ec-301-67</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td>Ravindera Ravu</td>
                            <td>Gadgets</td>
                            <td>Gd-303-32</td>
                            <td><i class="icon-edit"></i></td>
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
                                 <input type="text" class="form-control" style="width: 100%" id="email" placeholder="Department" onkeyup="nospaces(this)"/>
                                  <span id="status_email"></span>
                                    <br/>	
                                    <input type="text" class="form-control" style="width: 100%" id="email" placeholder="Employee No" onkeyup="nospaces(this)"/>
                                    <br>
                            <input type="submit" class="btn btn-primary btn-lg" id = "request" value = "Add" onclick="validateSignupFormOnSubmit()">
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