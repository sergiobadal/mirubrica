<!DOCTYPE HTML>
<html>
    <head>
        <title>MiRubrica.com | VISOR DE RÚBRICAS</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <style type="text/css">

            body{color:black; }
            h3 { margin-top: 0.32cm; margin-bottom: 0.21cm; font-variant: normal; color:#000 !important;background-color:white;border-radius:10px 40px 40px 10px; font-weight:700!important}
            h3.western {  font-size: 11pt; font-weight: 200;  }
            h3.cjk {  }
            h3.ctl {  }                  
            .copy-left {
                display: inline-block;
                text-align: right;
                margin: 0px;
                -moz-transform: scaleX(-1);
                -o-transform: scaleX(-1);
                -webkit-transform: scaleX(-1);
                transform: scaleX(-1);
                filter: FlipH;
                -ms-filter: "FlipH";
            }
            .headerTitle{font-size:16pt;font-weight:200;text-align: center;}
            td{padding:7px !important}
            /* tr{font-weight:700 !important}*/
            th{font-weight:700 !important;font-size:13pt !important;}
            .itemHorizontal {                
                width:92px;
                background-color:#dde8cb;border-top: 1.50pt solid #c0c0c0; border-bottom: 1.50pt solid #c0c0c0; border-left: 1.50pt solid                       #c0c0c0; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm;
            }

            .dataCol1,.headerCol1  {width:20%;}
            .dataCol1B,.headerCol1B  {width:25%;}
            .dataCol2,.headerCol2 {width:10%;text-align: center;}
            .dataCol3,.headerCol3 {width:10%;text-align: center;}
            .dataCol4,.headerCol4 {width:10%;text-align: center;}                        
            .headerColFirst{background: #fcd3c1 !important;font-size:16pt;font-weight:700;text-align: center}
            .headerColLast{background: #dee6ef !important;font-size:16pt;font-weight:700;text-align: center}
            .headerCol {background: #ffff00;border:none;padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm;}

            .dataColItemNumber{text-align:center;font-weight: 800;font-size:13pt;width:14;height:86px;background: #dde8cb!important;border:none!important;padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm;}            
            .dataColItemDesc{width:112px;background: #dde8cb!important;border:none!important;padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm;}
            .dataColCalification{background: #dee6ef !important;font-size:16pt !important;font-weight:700;text-align: center}
            .dataCol{background: #ffffff;border-top: 1.50pt solid #c0c0c0; border:none;padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm;     }

            .finalRowDesc{width:599px; background: #87d1d1; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0.19cm;text-align: right;}
            .finalRowDesc span{font-size:18pt;}
            .finalRowNumber span {text-align: center !important;    text-align: center !important;    margin: 0 auto;    padding-left: 20px;            font-size:20pt;}
            .finalRowNumber{font-size:30px;font-weight:700; width:75px; background: #fff200;  padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.44cm; padding-right: 0cm;}
.partialSummary{background: #dee6ef !important;font-size:16pt !important;font-weight:700;text-align: center}

            .infoCol{font-weight:200 !important;font-size:13pt !important;background:lightblue!important;}
            /*.dataCol{background:white;}*/
            .operationCol{background:#fefae3!important;font-weight:200 !important;}
            

.lefted{text-align:left;padding-left:30px !important;font-weight:700 !important;}
.righted{text-align:right;padding-right:30px !important;font-weight:700 !important;}

.finalRowNumberOnlySided{width:75px;}
            table {
                border-spacing: 0;
            }
            td {
                /* border: 1px solid #000;*/

            }
            th{
                padding: 0.5em 1em !important;
            }
            thead tr:first-child th:first-child {
                border-radius: 0.6em 0 0 0;
            }
            thead tr:first-child th:last-child {
                border-radius: 0 0.6em 0 0;
            }
            tbody tr:last-child td:first-child {
                border-radius: 0 0 0 0.6em;
            }
            tbody tr:last-child td:last-child {
                border-radius: 0 0 0.6em 0;
            }

        </style>
        <link rel="stylesheet" href="/basetemplate/assets/css/main.css" />
    </head>
    <body>

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <!--span class="avatar"><img src="images/avatar.jpg" alt="" /></span-->
                <!--h1>This is <strong>Visualize</strong>, a responsive site template designed by <a href="http://templated.co">TEMPLATED</a><br />
                and released for free under the Creative Commons License.</h1-->
                <!--ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                        <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                </ul-->
            </header>

            <!-- Main -->
            <section id="main">

                <!-- Thumbnails -->
                <section class="thumbnails">
                    <? if ($msg_error == "") { ?>
                        <?= $htmlcontents ?>
                    <? }//if (!$showonly_msg){?>

                </section>

            </section>

            <!-- Footer -->
            <footer id="footer">
                <? if ($msg_error == "") { ?>
                    <h1>Rúbrica generada de forma automática.<br>Este documento carece de validez académica.</h1>
                <? } else {//if (!$showonly_msg){?>
                    <h1><?= $msg_error ?></h1>
                <? }//if (!$showonly_msg){?>
                <p><span class="copy-left">&copy;</span> 2021 <b>mirubrica.com v.<?= $version ?></b> | Una idea original de <a href="http://www.sergiobadal.com">Sergio Badal</a>. <span class="contactCopyLeft">Contáctame si quieres usarla.</span></p>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>