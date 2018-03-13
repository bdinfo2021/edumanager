<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>EduManager</title>
</head>
<body style="background: #F6F6F6; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; margin: 0; padding: 0;">
<!-- body -->
<table class="body-wrap" bgcolor="#f6f6f6" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; width: 100%; margin: 0; padding: 20px; padding-bottom: 0;">
    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
        <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0; padding-bottom: 0;"></td>
        <td class="container" bgcolor="#FFFFFF" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0; padding-bottom: 0;">
            <!-- content -->
            <div class="content" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; max-width: 600px; display: block; margin: 0 auto; padding: 0;">
                <table style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; width: 100%; margin: 0; padding: 0;">
                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                        <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                            <img src="http://edumanager.net/front/images/logo.png" alt="LOGO" width="150" height="75" alt="EduManager" />
                            <div style="font-family:Verdana,sans-serif!important;font-size:12px!important">
                                <h1 style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 18px; line-height: 1.2; color: #333333; font-weight: 200; margin: 40px 0 10px; padding: 0;">Dear {{ $first_name.' '.$last_name }},</h1>
                                <div style="color:#333333">
                                    <p><br/></p>
                                    <p style="font-weight: bold; ">Your 07 days demo is activated successfully.</p>
                                    <p style="margin-bottom:30px;">(Please note : For a complete EduManager experience and access to all modules, it is recommended to access your demo from a PC/Laptop.)</p>
                                    <p>You can access your EduManager application at <a href="{{$demo_url}}" target="_blank" style="color:#e84c3d">{{$demo_url}}</a></p>
                                    <p>You can login as administrator with the following login credentials:</p>
                                    <p style="color: #07ad61;  ">username: {{$admin_id}}<br>
                                        password: {{$admin_pass}}</p>
                                    <a target="_blank" href="{{$demo_url}}" style="display: block; text-align: center;  width: 80px; padding: 10px 20px; background: #e84c3d;   color: #ffffff; text-decoration: none; font-weight: bold;   ">Login Now</a>

                                    <hr style="border:none; border-bottom: dotted #DEDEDE 1px; margin: 20px 0; " />
                                    <p>If you have chosen the option to load the sample data while registering, You can login as an employee with the following login credentials:</p>
                                    <p style="color: #07ad61;  ">username: {{$employee_id}}<br>
                                        password: {{$employee_pass}}</p>
                                    <p>For logging in as a student, use the following login credentials:</p>
                                    <p style="color: #07ad61;  ">username: {{$student_id}}<br>
                                        password: {{$student_pass}}</p>
                                    <p>For logging in as a parent, use the following login credentials:</p>
                                    <p style="color: #07ad61;  ">username: {{$parent_id}}<br>
                                        password: {{$parent_pass}}</p>


                                    <hr style="border:none; border-bottom: dotted #DEDEDE 1px; margin: 20px 0; " />

                                    <p style="font-weight: bold; ">For Live Production level usage for your school, please click on below button choose your desired package and confirm your payment.</p>
                                    <a target="_blank" href="{{$pricing_url}}" style="display: block; text-align: center;  width: 120px; padding: 10px 20px; background: #e84c3d;   color: #ffffff; text-decoration: none; font-weight: bold;   ">GET STARTED NOW</a>
                                    <p>
                                        If you need further support about Aamra EduManager for your institution, contact us today.
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
</table>
<table  style=" background: #ffffff; font-family:  'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 13px ; line-height: 1.6; width: 100%; margin: 0; padding: 0; color:#333333 ;   line-height: 1.6;   max-width: 642px !important;   margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0;">
    <tbody style="min-width: 100% !important;">
    <tr>
        <td width="50%" style="vertical-align: top;  padding-right: 20px;" >
            <p>Get in touch with us instantly.</p>
            <a target="_blank" href="{{$contact_us_url}}" style="display: block; float: left; padding: 10px 20px; background:  #e84c3d; color: #fff; text-decoration: none; font-weight: bold;">Contact Us</a>
        </td>
        <td width="50%"  style="vertical-align: top; " >
            <p>Know more about EduManager.</p>
            <a target="_blank" href="{{$about_us_url}}" style="display: block; float: left; padding: 10px 20px; background: #ffffff; border:1px solid #e84c3d; color: #e84c3d; text-decoration: none; font-weight: bold;   ">Aamra Edumanager</a>
        </td>
    </tr>
    </tbody>
</table>
<table  style=" background: #ffffff; font-family:  'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 13px ; line-height: 1.6; width: 100%; margin: 0; padding: 0; color:#333333 ;   line-height: 1.6;   max-width: 642px !important;   margin: 0 auto; padding: 10px 20px; border: 1px solid #f0f0f0;">
    <tbody style="min-width: 100% !important;" >
    <tr>
        <td width="33%" style="vertical-align: top;  padding-right: 20px;" >
            <a target="_blank" href="mailto:info@edumanager.net" style="text-decoration: none; color: #888;  ">info@edumanager.net</a>
        </td>
        <td width="33%"  style="vertical-align: top;text-decoration: none; color: #888; " >
            <a  style="text-decoration: none; color: #888;  " href="tel:+88 01913 397419" >Call Us: +88 01913 397419</a>
        </td>
        <td width="34%"  style="vertical-align: top; text-align: right; " >
            <a target="_blank" href="{{$features_url}}" style="text-decoration: none; color: #888;  ">Features</a>
        </td>
    </tr>
    </tbody>
</table>
<!--
        <table  style=" background: #ffffff; font-family:  'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 11px ; line-height: 1.6; width: 100%; margin: 0; padding: 0; color:#333333 ;   line-height: 1.6;   max-width: 642px !important;   margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0;">
            <tbody style="min-width: 100% !important;">
                <tr>
                    <td width="15%" style="vertical-align: top;  padding-right: 20px;" >
                        <img src="http://accounts.sandbox.edumanager.com/images/adbplus.png" alt="ADBP" height="60" width="60" />
                    </td>
                    <td width="85%"  style="vertical-align: top; " >
                        <p>If you are currently running a version of Ad Blocker Plus on your browser, we kindly request you to disable it whilst logging into your sandbox application as we have noticed that there might be some discrepancies with EduManager.</p>
                        <p>We are currently working on fixing the issue but until then we kindly ask you to whitelist EduManager Sandbox in Ad Blocker Plus. Here is how you can do it,</p>

                        <p><b>Step 1 : Left click on the ABP icon on the login page of your sandbox account.
                                <br/>Step 2 : Uncheck “Enabled for this site”.</b></p>
                    </td>
                </tr>
            </tbody>
        </table>

-->
</body>
</html>