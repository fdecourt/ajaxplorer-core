<!DOCTYPE html>
<html>
	<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style type="text/css">
            * {
                font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
                text-shadow: 0 1px 0 white;
                color: rgb(100, 119, 124);
            }
            body{
                background-image: url("grid_t.png");
            }
            h1 {
                margin-bottom: 0;
            }
            input{
                width: 301px;
                height: 46px;
                font-size: 28px;
                border-radius: 5px;
                position: absolute;
                top: 106px;
                left: 68px;
            }
            .button_link{
                position: absolute;
                top: 0;left: 0;
                border: 0px;
                width: 226px;
            }
            .button_link img{
                position: absolute;
                top: 0;
                left: -15px;
                border: 0px;
                width: 226px;
            }
            .link_w_pass{
                position: absolute;
                display: block;
                height: 200px;
                width: 128px;
                right: 34px;
            }
            .link_w_pass img{
                position: absolute;
                top: 43px;
                left: 0px;
                height: 84px;
                width: 84px;
                border: 0px;
            }
            #main_dl_container{
                width: 560px;
                height: 400px;
                margin: 8% auto;
                text-align: center;
                position: relative;
            }
            .legend{
                font-weight: normal;font-size: 1.4em;width: 400px;margin: 28px auto;
            }
            .legend_w_pass{
                font-weight: normal;position: absolute;top: 198px;left: 44px;font-size: 1.3em;
            }
            @media only screen
            and (max-width : 420px) {
                h1{
                    font-size: 20px;
                }
                .button_link{
                    height: 140px !important;
                }
                .button_link img {
                    position: absolute;
                    top: 0;
                    left: 17%;
                    border: 0px;
                    width: 80%;
                }
                #main_dl_container{
                    width: 100%;
                    height: 400px;
                    margin: 8% auto;
                    text-align: center;
                }
                .legend, .legend_w_pass{
                    font-size: 1.0em;
                    width: 90%;
                    left: 5%;
                    top:108px;
                }
                input {
                    width: 72%;
                    height: 30px;
                    font-size: 1em;
                    top: 69px;
                    left: 5%;
                }
                .link_w_pass{
                    top: 10px;
                    right: 0;
                    width: 50px;
                }
                .link_w_pass img{
                    width: 54px;
                    height: 54px;
                }
            }
        </style>
	</head>
	<body>
    <?php if($AJXP_LINK_HAS_PASSWORD){ ?>
		<form action='' method='post' name="submit_password">
            <div id="main_dl_container">
                <h1><?php echo sprintf($messages[1], ConfService::getCoreConf("APPLICATION_TITLE")) ?></h1>
                <?php if($AJXP_LINK_WRONG_PASSWORD): ?>
                    <div style="color: hsl(0, 82%, 51%);width: 261px;position: absolute;top: 80px;left: 11px;"><?php echo $messages[3] ?></div>
                <?php endif; ?>
                <input type="password" name="password" placeholder="<?php echo $messages[5] ?>">
                <a class="link_w_pass" href="#" onclick="document.forms['submit_password'].submit();">
                    <img src="dl.png">
                </a>
                <h2 class="legend_w_pass"><?php echo sprintf($messages[4], $AJXP_LINK_BASENAME) ?></h2>
            </div>
		</form>
    <?php } else { ?>
        <div id="main_dl_container">
            <h1><?php echo sprintf($messages[1], ConfService::getCoreConf("APPLICATION_TITLE")) ?></h1>
            <a class="button_link" href="?dl=true" style="position: relative;display: block;height: 200px;width: 203px;margin: 0 auto;">
                <img src="dl.png">
            </a>
            <h2 class="legend"><?php echo sprintf($messages[2], $AJXP_LINK_BASENAME) ?></h2>
        </div>
    <?php  } ?>
	</body>
</html>