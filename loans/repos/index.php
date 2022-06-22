<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>The Local Federal Credit Union - Repos</title>
    <meta name="description" content="The Local Federal Credit Union - Like all credit unions, The Local Federal Credit Union is a not-for-profit financial cooperative. When you join the credit union, you become a shareholder - or an owner - of a very unique financial institution. Earnings above the required reserves are returned to you, in the form of lower interest rates on loans and competitive dividends on savings.">
    <meta name="keywords" content="The Local Federal Credit Union, The Local FCU, the local federal credit union, credit union, savings, loans, credit cards, ATM, debit cards, Visa, check cards, nonprofit, service">
    <link href="../../css/main.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../../favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Scada:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
    <script>
        $(document).ready(function() {

            //select all the a tag with name equal to modal
            $('a[name=modal]').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();

                //Get the A tag
                var id = $(this).attr('href');

                //Get the screen height and width
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                //Set heigth and width to mask to fill up the whole screen
                $('#mask').css({
                    'width': maskWidth,
                    'height': maskHeight
                });

                //transition effect		
                $('#mask').fadeIn(1000);
                $('#mask').fadeTo("slow", 0.8);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                //Set the popup window to center
                $(id).css('top', winH / 2 - $(id).height() / 2);
                $(id).css('left', winW / 2 - $(id).width() / 2);

                //transition effect
                $(id).fadeIn(2000);

            });

            //if close button is clicked
            $('.window .close').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();

                $('#mask').hide();
                $('.window').hide();
            });

            //if mask is clicked
            $('#mask').click(function() {
                $(this).hide();
                $('.window').hide();
            });

            $(window).resize(function() {

                var box = $('#boxes .window');

                //Get the screen height and width
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                //Set height and width to mask to fill up the whole screen
                $('#mask').css({
                    'width': maskWidth,
                    'height': maskHeight
                });

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                //Set the popup window to center
                box.css('top', winH / 2 - box.height() / 2);
                box.css('left', winW / 2 - box.width() / 2);

            });

        });
    </script>
    <style>
        #mask {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 9000;
            background-color: #000;
            display: none;
        }

        #boxes .window {
            position: fixed;
            left: 0;
            top: 0;
            width: 440px;
            height: 200px;
            display: none;
            z-index: 9999;
            padding: 20px;
        }

        #boxes #dialog {
            width: 605px;
            height: 475px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog1 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog2 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog3 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog2 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog4 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog5 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog6 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog7 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog8 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog9 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog10 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }

        #boxes #dialog11 {
            width: 605px;
            height: 350px;
            padding: 5px;
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="innerlogo">
            <div class="logo"><a href="/main.php"><img src="../../imgs/logo.png" border="0" /></a></div>
        </div>
        <div class="innerR">
            <div class="top" align="right"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                                            include($INC_DIR . "search.html"); ?></div>
            <div class="nav"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                                include($INC_DIR . "nav.html"); ?></div>
            <div class="spacer1"><img src="../../imgs/innerspacer1.png" border="0" /></div>
        </div>
        <div class="innercon1">
            <div class="innerT"><img src="../../imgs/innerT1.png" border="0" /></div>
            <div class="innerL1"></div>
            <div class="innerCL">
                <img src="../../imgs/innerHB.png" border="0" /><br />
                <form action="https://secure.cuaccount-access.com/theLOCALfcu/login.aspx" method="post">
                    <table align="center">
                        <tr>
                            <td height="33"><a href="https://www.w-w-i-s.com/hb/51/default.aspx?entity=QACI%5d" target="_blank"><img src="../../imgs/login.gif" alt="Login" width="107" height="50" /></a></td>
                        </tr>
                    </table>
                    <input type="hidden" name="forceauth" value="true" />
                </form>
                <br />
                <h3>Quick Links</h3>
                <p>&bull; <a href="../../rates/loans.php">Loan Rates</a><br />
                    &bull; <a href="https://www.thelocalfcu.com/forms_app/loan.php">Apply For A Loan</a><br />
                    &bull; <a href="../vehicle_loans.php">Vehicle Loans</a><br />
                    &bull; <a href="../recreational_vehicle_loans.php">Recreational Loans</a><br />
                    &bull; <a href="../personal_loans.php">Personal/Signature Loans</a><br />
                    &bull; <a href="../share_secured_loans.php">Share Secured Loans</a><br />
                    &bull; <a href="../mastercard_credit_cards.php">MasterCard Credit Cards</a><br />
                    &bull; <a href="../mortgage_loans.php">Mortgage Loans</a><br />
                    &bull; <a href="../loan_services.php">Loan Services</a><br />
                    &bull; <a href="../repos/index.php">Autos For Sale</a><br />
                    &bull; <a href="../../calculators/index.php">Loan Payment Calculators</a></p>
            </div>
            <div class="innerC1">
                <h2>Autos for Sale</h2>
                <p>This page contains vehicles for sale by The Local FCU. For information on any of the vehicles please contact one of our Loan Officers.</p>
                <table border="1" cellpadding="4" cellspacing="0" align="center" width="95%" bordercolor="#999999">
                    <tr class="contenttext">
                        <td width="15%" align="center" bgcolor="#FFFFFF">PICTURE</td>
                        <td width="9%" align="center" bgcolor="#FFFFFF">YEAR</td>
                        <td width="22%" align="center" bgcolor="#FFFFFF">MAKE AND MODEL</td>
                        <td width="13%" align="center" bgcolor="#FFFFFF">PRICE</td>
                        <td width="13%" align="center" bgcolor="#FFFFFF">MILEAGE</td>
                        <td width="28%" align="center" bgcolor="#FFFFFF">DESCRIPTION</td>
                    </tr>
                </table>
                <table border="0" cellpadding="4" cellspacing="0" align="center" width="95%">
                    <!-- <tr>
                        <p><strong>There Are Currently No Vehicles For Sale</strong></p>
                    </tr> -->
                    <tr class="contenttext">
                        <td width="15%" align="center" valign="top" bgcolor="#FFFFFF"><a href="#dialog9" name="modal" id="modal7"><br />
                                <img src="pics/2022/2021RV.jpg" alt="2021 Grand Design Transcend 32BHS" width="100" height="50" /><br />
                                Click to enlarge</a></td>
                        <td width="9%" align="center" valign="top" bgcolor="#FFFFFF">2021</td>
                        <td width="22%" align="left" valign="top" bgcolor="#FFFFFF">Grand Design Transcend 32BHS</td>
                        <td width="13%" align="center" valign="top" bgcolor="#FFFFFF">$41,000</td>
                        <td width="13%" align="center" valign="top" bgcolor="#FFFFFF">N/A</td>
                        <td width="28%" align="center" valign="top" bgcolor="#FFFFFF"><a href="pdf/2021 RVs.pdf" target="_blank">Click for Flyer</a></td>
                    </tr>
                    <tr class="contenttext">
                        <td colspan="6" align="center" valign="top" bgcolor="#FFFFFF">
                            <hr />
                        </td>
                    </tr>
                </table>
            </div>
            <div class="innerR"></div>
            <div class="innerB"><img src="../../imgs/innerB1.png" border="0" /></div>
        </div>
        <div class="footer"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                            include($INC_DIR . "footer.html"); ?></div>
    </div>
    <div id="boxes">
        <div id="dialog1" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2020/2012TahoeLTZ-lrg.png" border="0" /><br />
                <strong>2012 Chevrolet Tahoe LTZ</strong>
            </p>
        </div>


        <div id="dialog2" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2020/2014BuickEnclave-lrg.png" border="0" /><br />
                <strong>2014 Buick Enclave</strong>
            </p>
        </div>


        <div id="dialog3" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2020/2013LexusGS350lrg.png" border="0" /><br />
                <strong>2013 Lexus GS350</strong>
            </p>
        </div>



        <div id="dialog4" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/Mercedes-BenzS550-lrg.png" border="0" /><br />
                <strong>2016 Mercedes-Benz S550</strong>
            </p>
        </div>

        <div id="dialog5" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2020/2015Navigator-lrg.png" border="0" /><br />
                <strong>2015 Lincoln Navigator</strong>
            </p>
        </div>

        <div id="dialog6" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2020/2016Tahoe-lrg.png" border="0" /><br />
                <strong>2016 Chevrolet Tahoe</strong>
            </p>
        </div>

        <div id="dialog7" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2020/2015GL550-lrg.png" border="0" /><br />
                <strong>2015 Mercedes GL550</strong>
            </p>
        </div>

        <div id="dialog8" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2020/2017NissanSentraSV.png" border="0" /><br />
                <strong>2017 Nissan Sentra SV</strong>
            </p>
        </div>

        <div id="dialog9" class="window">
            <div align="right" class="contenttext"><a href="#" class="close" />Close Window</a></div><br />
            <p align="center" class="contenttext"><img src="pics/2022/2021RV.jpg" border="0" style="width: 100%" /><br />
                <strong>2021 Grand Design Transcend 32BHS</strong>
            </p>
        </div>

        <!-- Mask to cover the whole screen -->
        <div id="mask"></div>
    </div>
</body>

</html>