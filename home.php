  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='text/html;charset=utf-8' http-equiv='content-type'>
        
        <title>CIDCO</title>
        <?php include_once 'html_comp/navbar.php'; ?>
        <?php include_once 'html_comp/left_panel.php'; ?>
        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Book name</th>
                            <th>Date of Creation</th>
                            <th>Description</th>
                            <th>Depreciation</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Book name</th>
                            <th>Date of Creation</th>
                            <th>Description</th>
                            <th>Depreciation</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td><a href="assets.php" style="color: blue;">Latur Fringe</a></td>
                            <td>2009/08/19</td>
                            <td>Asset Records</td>
                            <td>WDV</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td><a href="assets.php" style="color: blue;">New Nagpur</a></td>
                            <td>2009/08/19</td>
                            <td>Insurance Details</td>
                            <td>SLM</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td><a href="assets.php" style="color: blue;">Khopta</a></td>
                            <td>2009/08/19</td>
                            <td><a href="edit-account-book.php"> Add </a></td>
                            <td>FGH</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td><a href="assets.php" style="color: blue;">New Nanded</a></td>
                            <td>2009/08/19</td>
                            <td>Renew Information</td>
                            <td>RGK</td>
                            <td><i class="icon-edit"></i></td>
                        </tr>
                        <tr>
                            <td><a href="assets.php" style="color: blue;">New Nasik</a></td>
                            <td>2011/01/25</td>
                            <td>Maintenence</td>
                            <td>NKL</td>
                            <td><i class="icon-edit"></i></td>
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
    