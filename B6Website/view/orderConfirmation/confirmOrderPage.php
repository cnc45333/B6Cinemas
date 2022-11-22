<?php

    session_start();

    // connect to database
    require_once('../../controller/database.php');

    if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) 
    {
        header("Location: ../loginAndReg/login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/WhiteB6.png" type="image/icon type">
    <title>Confirm Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="confirmOrderPage.css">
</head>

<body>
    <div >
        <nav class="navbar navbar-expand-lg sticky-top navbar-light ">
            <a class="navbar-brand" href="../../index.php">
                <img src="../images/B6 Cinema (2).png" width="70" height="70" class="d-inline-block align-center" alt="B6 Cinemas logo">
               </a>
            
            <div class="nav-text navbar-nav navbar-center">
                Confirm Order
            </div>
        </nav>   
    </div>

    <div>
        <div>
            <h4 class="reminder-text">
                Please take a moment to review your order.
            </h4>
            <table class="order-table">
                <tbody class="order-table-body">
                    <tr>
                        <th>
                            Tickets
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th>
                            Amount
                        </th>
                        <th> </th>
                    </tr>
                    <tr>
                        <td>
                            Blade Runner 2049 (Adult)
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            $19.98
                        </td>
                        <td>
                            <img class="x-btn" src="../images/x.png"></img>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Blade Runner 2049 (Child)
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            $5.99
                        </td>
                        <td>
                            <img class="x-btn" src="../images/x.png"></img>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Justice League (Adult)
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            $9.99
                        </td>
                        <td>
                            <img class="x-btn" src="../images/x.png"></img>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="order-table-foot">
                    <tr>
                        <td>
                            Promotions Applied
                        </td>
                        <td>
                        </td>
                        <td>
                            -10%
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Order Total
                        </td>
                        <td>
                        </td>
                        <td>
                            $32.36
                        </td>
                        <td>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <button class="nav-confirm-btn" onclick="location.href='./confirmPayment.html'">Confirm and Continue</button>
        <button class="nav-confirm-btn" onclick="location.href='../index.php'">Cancel</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>