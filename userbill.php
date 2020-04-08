<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    <script src="js/jquery.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.dataTables.min.js"></script><script src="js/dataTables.bootstrap.min.js"></script><link rel="stylesheet"href="css/dataTables.bootstrap.min.css">
    </style>
</head>

<body>
    <link rel="stylesheet" href="css/datepicker.css">
    <script src="js/bootstrap-datepicker1.js"></script>
    <div class="row">
        <div class="col-sm-3">

            <h2 align="center">ABC Supermart</h2>
            <div>
                <img src="image2.jpg" class="card-img-top" alt="... ">
                <center>
                    <button type="submit" class="btn btn-dark width=" 70%"><a href="userlogin.php"
                            style="color:white;">Logout</a></button>
                </center>
            </div>
        </div>
        <div class="col-sm-9">
            <form action="bill.php" method="post" id="invoice_form">

                <div class="card">
                    <h2 class="card-title" align="center">Create A Bill</h2>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="invoiceItem">
                                <tr>
                                    <th width="2%"></th>
                                    <th width="15%">Item Code</th>
                                    <th width="38%">Item Name</th>
                                    <th width="15%">Quantity</th>
                                    <th width="15%">Unit Price</th>
                                    <th width="15%">Total</th>
                                </tr>

                                <tr>
                                    <td><input class="itemRow" type="checkbox"></td>
                                    <td><input type="number" name="item_code" class="form-control"
                                            value="<?php echo $itemcode; ?>">
                                    </td>
                                    <td><input type="text" name="item_name" class="form-control" autocomplete="on"></td>
                                    <td><input type="number" name="quantity" class="form-control">
                                    </td>
                                    <td><input type="number" name="unit_price" class="form-control"
                                            value="<?php echo $unitprice; ?>">
                                    </td>
                                    <td><input type="number" class="form-control" autocomplete="off"></td>

                                </tr>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <button class="btn btn-danger delete" id="remove" type="button">Delete</button>
                                <button class="btn btn-success" id="add" name="Add" type="button">Add</button>
                            </div>
                        </div>

                    </div>

                    <table cellpadding="5">
                        <tr>
                            <td><label>Subtotal: </label></td>
                            <td><input width="30" type="number" class="form-control" name="subTotal" id="subTotal"
                                    placeholder="Subtotal">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Discount: </label></td>
                            <td><input type="number" class="form-control" name="taxAmount" id="taxAmount"
                                    placeholder="Tax Amount"></td>
                        </tr>
                        <tr>
                            <td><label>Total: </label></td>
                            <td><input type="number" class="form-control" name="totalAftertax" id="totalAftertax"
                                    placeholder="Total">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Amount Paid: </label></td>
                            <td><input type="number" class="form-control" name="amountPaid" id="amountPaid"
                                    placeholder="Amount Paid">
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="4">
                        <tr>

                            <td colspan="3" align="center">
                                <input type="hidden" name="total_item" id="total_item" value="1" />
                                <input type="submit" name="create_ebill" id="create_ebill"
                                    class="btn btn-secondary btn-sm" value="E-Bill" />
                                <input type="button" name="print" id="print" class="btn btn-info btn-sm"
                                    value="Print" />
                                <input type="button" name="text_msg" id="text_msg" class="btn btn-success btn-sm"
                                    value="Text" />
                                <input type="reset" name="cancel" id="cancel" class="btn btn-danger btn-sm"
                                    value="Cancel" />
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <script>
        var d = new Date();
        document.getElementById("order_date").innerHTML = d;
        </script>
    </div>

</body>

</html>