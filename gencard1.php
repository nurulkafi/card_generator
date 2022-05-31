<?php
// include autoloader
require 'vendor/autoload.php';
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$no_telp = $_POST['no_tlp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
?>
<html>

<head>
    <title>Card</title>

    <style>
        * {
            border: none;
        }

        body,
        html {
            margin: 0px;
            padding: 0px;
            width: 100%;
            font-family: sans-serif;
        }

        .table {
            width: 85%;
            margin: auto;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .card {
            position: relative;
            width: 336px;
            height: 192px;
            background: rgb(71, 74, 84);
            border-collapse: collapse;
            vertical-align: top;
            overflow: hidden;
            margin: auto;
            margin-top: 4px;
        }

        .card th,
        .card td {
            border-collapse: collapse;
            vertical-align: top;
        }

        .section-1 {
            width: 5px;
            height: 192px;
            padding-left: 20px;
        }

        .section-2,
        .section-4 {
            width: 25px;
            height: 192px;
            background: rgb(238, 180, 36);
        }

        .section-4 {
            width: 10px;


        }

        .section-3 {
            text-align: right;
        }

        .name-table {
            text-align: right;
            width: 265px;
            position: absolute;
            right: 9px;
            top: 18px;
        }

        .name {
            text-transform: uppercase;
            color: rgb(238, 180, 36);
            font-size: 16px;
        }

        .box {
            height: 27px;
            width: 27px;
            background: rgb(238, 180, 36);
            border: none;


        }

        .icon {
            height: 27px;
            width: 27px;
            background: rgb(238, 180, 36);
            border: none;
            text-align: center;

        }

        .position {
            font-size: 8px;
            color: #fff;

        }

        .first-row {
            height: 92px;
        }

        .contact {

            vertical-align: center;
            border-collapse: collapse;
            position: absolute;
            top: 60px;
            left: 25px;
            color: #fff;
            font-size: 9px;
        }

        .contact th,
        .contact td {

            height: 15px;
            vertical-align: center;
            padding-top: 5px;
            border-collapse: collapse;
            letter-spacing: 0.5px;
        }

        .qr {
            position: absolute;
            height: 60px;
            width: 60px;
            right: 15px;
            bottom: 20px;
        }

        .icon1 {
            height: 12px;
            width: 12px;
            margin-top: -1px;
        }

        .icon2 {
            height: 15px;
            width: 15px;
            margin-top: 5px;
        }

        .card-back {
            position: relative;
            width: 336px;
            height: 192px;
            background: rgb(71, 74, 84);
            border-collapse: collapse;
            vertical-align: top;
            overflow: hidden;
            margin: auto;
            margin-top: 4px;
            text-align: center;
        }

        .card-back th,
        .card-back td {
            border-collapse: collapse;
            vertical-align: top;
        }



        .logo {
            margin-top: 75px;
        }
    </style>
</head>

<body>
    <div class="main">
        <table class="table">
            <tr>
                <td>
                    <table class="card">
                        <tr class="first-row">
                            <td class="section-1">

                            </td>
                            <td class="section-2">
                                <table class="second-table">
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="section-3">
                                <table class="name-table">
                                    <tr>
                                        <td>
                                            <span class="name"><?= $nama ?></span><br>
                                            <span class="position"> <?= $jabatan ?></span>
                                        </td>
                                        <td style="width:27px;">
                                            <div class="icon"><img src="images/avatar.png" class="icon2"></div>
                                        </td>
                                        <td style="width:27px;">
                                            <div class="box"></div>
                                        </td>
                                    </tr>
                                </table>
                                <table class="contact">
                                    <tr>
                                        <td style="text-align:center;width:26px;border-top:2px solid rgb(71,74,84);border-bottom:2px solid rgb(71,74,84);">
                                            <img src="images/phone.png" class="icon1">
                                        </td>
                                        <td style="width:200px;padding-left:5px;">
                                            <?= $no_telp ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;width:26px;border-top:2px solid rgb(71,74,84);border-bottom:2px solid rgb(71,74,84);">
                                            <img src="images/email.png" class="icon1">
                                        </td>
                                        <td style="width:200px;padding-left:5px;">
                                            <?= $email ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;width:26px;border-top:2px solid rgb(71,74,84);border-bottom:2px solid rgb(71,74,84);">
                                            <img src="images/address.png" class="icon1">
                                        </td>
                                        <td style="width:200px;padding-left:5px;">
                                            <?= $alamat ?>
                                        </td>
                                    </tr>
                                </table>
                                <img src="images/qr.png" class="qr">
                            </td>

                            <td class="section-4">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="card-back">
                        <tr>
                            <td>
                                <img src="images/logo.png" class="logo">
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
<?php
$name = "card.pdf";
$html = ob_get_clean();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation 


$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($name, array('Attachment' => 0));
?>