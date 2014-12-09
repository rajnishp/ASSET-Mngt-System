  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='text/html;charset=utf-8' http-equiv='content-type'>
        
        <title>Depreciation</title>
        <?php include_once 'html_comp/navbar.php'; ?>
        <?php include_once 'html_comp/left_panel.php'; ?>
        
        <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            
            
        <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Rate</th>
                            <th>Rule</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Employee No</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Electronics</td>
                            <td>Ec-301-29</td>
                            <td><i class="icon-edit"></i></td>
                            <td>Delete</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Furniture</td>
                            <td>Fn-302-67</td>
                            <td><i class="icon-edit"></i></td>
                            <td>Delete</td>
                        </tr>
                        <tr>
                            <td>Bob Naisin</td>
                            <td>Gadgets</td>
                            <td>Gd-303-45</td>
                            <td><i class="icon-edit"></i></td>
                            <td>Delete</td>
                        </tr>
                        <tr>
                            <td>Bob Naisin</td>
                            <td>Gadgets</td>
                            <td>Gd-303-45</td>
                            <td><i class="icon-edit"></i></td>
                            <td>Delete</td>
                        </tr>
                        <tr>
                            <td>Bob Naisin</td>
                            <td>Gadgets</td>
                            <td>Gd-303-45</td>
                            <td><i class="icon-edit"></i></td>
                            <td>Delete</td>
                        </tr>
                    </tbody>
                </table>
        </div>
            <div class="col-md-2">
        <?php include_once 'html_comp/right_panel.php'; ?>
            </div>
        </div>
    
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </body>
  </html>