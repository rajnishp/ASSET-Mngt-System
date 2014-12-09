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
            <div class="col-md-7">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Book name</th>
                            <th>Date of Creation</th>
                            <th>Description</th>
                            <th>Depreciation</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Book name</th>
                            <th>Date of Creation</th>
                            <th>Description</th>
                            <th>Depreciation</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>2009/08/19</td>
                            <td>desc1</td>
                            <td>$75</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>2009/08/19</td>
                            <td>
                                desc1
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>$1395</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>2009/08/19</td>
                            <td><a href="edit-account-book.php"> Add </a></td>
                            <td>$19,575</td>
                        </tr>
                        <tr>
                            <td>Yamamoto Sakura</td>
                            <td>2009/08/19</td>
                            <td>desc1</td>
                            <td>$9,575</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>2011/01/25</td>
                            <td>desc1</td>
                            <td>$112,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>
    