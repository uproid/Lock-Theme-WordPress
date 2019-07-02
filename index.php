<?php
$is_lost_password_page = basename($_SERVER['REQUEST_URI']) === "lost-password";
if (!is_admin() && $GLOBALS['pagenow'] !== 'wp-login.php' && !$is_lost_password_page && !isset($_REQUEST['joapp'])) {
    exit(show_site_null());
} 

function show_site_null() {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>&nbsp;</title>
            <meta name="HandheldFriendly" content="true">
            <meta charset="utf8"/>
            <meta name="viewport" content="width=device-width, initial-scale=0.666667, maximum-scale=0.666667, user-scalable=0">
            <meta name="viewport" content="width=device-width">
            <style>
                html {
                    background: #f1f1f1;
                }
                body {
                    background: #fff;
                    color: #444;
                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                    margin: 2em auto;
                    padding: 1em 2em;
                    max-width: 700px;
                    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
                    box-shadow: 0 1px 3px rgba(0,0,0,0.13);
                }
                h1 {
                    border-bottom: 1px solid #dadada;
                    clear: both;
                    color: #666;
                    font-size: 24px;
                    margin: 30px 0 0 0;
                    padding: 0;
                    padding-bottom: 7px;
                }
                #error-page {
                    margin-top: 50px;
                }
                #error-page p {
                    font-size: 14px;
                    line-height: 1.5;
                    margin: 25px 0 20px;
                }
                #error-page code {
                    font-family: Consolas, Monaco, monospace;
                }
                ul li {
                    margin-bottom: 10px;
                    font-size: 14px ;
                }
                a {
                    color: #0073aa;
                }
                a:hover,
                a:active {
                    color: #00a0d2;
                }
                a:focus {
                    color: #124964;
                    -webkit-box-shadow:
                        0 0 0 1px #5b9dd9,
                        0 0 2px 1px rgba(30, 140, 190, .8);
                    box-shadow:
                        0 0 0 1px #5b9dd9,
                        0 0 2px 1px rgba(30, 140, 190, .8);
                    outline: none;
                }
                .button {
                    background: #ff0033;
                    border: 1px solid #ccc;
                    color: #FFF;
                    display: inline-block;
                    text-decoration: none;
                    font-size: 13px;
                    line-height: 26px;
                    height: 28px;
                    margin: 0;
                    padding: 0 10px 1px;
                    cursor: pointer;
                    -webkit-border-radius: 3px;
                    -webkit-appearance: none;
                    border-radius: 3px;
                    white-space: nowrap;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing:    border-box;
                    box-sizing:         border-box;

                    -webkit-box-shadow: 0 1px 0 #ccc;
                    box-shadow: 0 1px 0 #AAA;
                    vertical-align: top;
                }

                .button.button-large {
                    height: 30px;
                    line-height: 28px;
                    padding: 0 12px 2px;
                }

                .button:hover,
                .button:focus {
                    background: #fafafa;
                    border-color: #999;
                    color: #23282d;
                }

                .button:focus  {
                    border-color: #5b9dd9;
                    -webkit-box-shadow: 0 0 3px rgba( 0, 115, 170, .8 );
                    box-shadow: 0 0 3px rgba( 0, 115, 170, .8 );
                    outline: none;
                }

                .button:active {
                    background: #eee;
                    border-color: #999;
                    -webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
                    box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
                    -webkit-transform: translateY(1px);
                    -ms-transform: translateY(1px);
                    transform: translateY(1px);
                }

                body { font-family: Tahoma, Arial;direction: rtl }

                .col{
                    float:left;width: 50%;height: 250px
                }

                @media only screen and (max-width: 600px) {
                    .col {
                        display: block;
                        float: none;
                        width: 100%;
                    }
                }
            </style>
        </head>
        <body>
        <center>
            <img style="width: 50%;height: auto" src="<?php echo get_template_directory_uri() ?>/assets/lock.png" alt=""/>
        </center>
    </body>
    </html>
    <?php
}
?>