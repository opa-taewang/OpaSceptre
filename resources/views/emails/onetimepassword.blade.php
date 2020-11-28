<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="box-sizing: border-box;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>OTP</title>

        <!-- Start Common CSS -->


        <!-- End Common CSS -->
    </head>
    <body style="box-sizing: border-box; background-color: #fafafa; display: flex; justify-content: center; align-items: center;">
        <div class="c-email" style="box-sizing: border-box; width: 40vw; border-radius: 40px; overflow: hidden; box-shadow: 0px 7px 22px 0px rgba(0, 0, 0, .1);">
            <div class="c-email__header" style="box-sizing: border-box; background-color: #0fd59f; width: 100%; height: 60px;">
                <h1 class="c-email__header__title" style="box-sizing: border-box; font-size: 23px; font-family: 'Open Sans'; height: 60px; line-height: 60px; margin: 0; text-align: center; color: white;">Your Verification Code</h1>
            </div>
            <div class="c-email__content" style="box-sizing: border-box; width: 100%; height: 300px; display: flex; flex-direction: column; justify-content: space-around; align-items: center; flex-wrap: wrap; background-color: #fff; padding: 15px;">
                <p class="c-email__content__text text-title" style="box-sizing: border-box; font-size: 20px; text-align: center; color: #343434; margin-top: 0; font-family: 'Open Sans';">
                    Enter this verification code in field:
                </p>
                <div class="c-email__code" style="box-sizing: border-box; display: block; width: 60%; margin: 30px auto; background-color: #ddd; border-radius: 40px; padding: 20px; text-align: center; font-size: 36px; font-family: 'Open Sans'; letter-spacing: 10px; box-shadow: 0px 7px 22px 0px rgba(0, 0, 0, .1);">
                <span class="c-email__code__text" style="box-sizing: border-box;">{{$otp}}</span>
                </div>
                <p class="c-email__content__text text-italic opacity-30 text-title mb-0" style="box-sizing: border-box; font-size: 20px; text-align: center; color: #343434; margin-top: 0; font-family: 'Open Sans'; font-style: italic; opacity: 0.3; margin-bottom: 0;">Verification code is valid only for 10 minutes</p>
            </div>
            <div class="c-email__footer" style="box-sizing: border-box; width: 100%; height: 60px; background-color: #fff;"></div>
        </div>
    </body>
</html>
