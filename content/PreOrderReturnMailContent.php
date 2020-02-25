<?php
session_start();

include 'PagesFunction/connection.php';
$orderNum = $_SESSION["orderNum"]; 

$sql ="SELECT * FROM pending_order_list WHERE OrderNumber = $orderNum";
$res_data = $con->query($sql);
while($row = mysqli_fetch_array($res_data)){

    $fname = $row['Firstname'];
    $lname = $row['Lastname'];
    $contact = $row['Contact'];
    $email = $row['Email'];
    $address = $row['Address'];

    ?>

    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>PRE ORDER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="margin: 0; padding: 0;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
            <tr>
                <td style="padding: 10px 0 30px 0;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                        <tr>
                            <td align="center" bgcolor="#6fbf6d" style="padding: 30px 0 20px 0; color: white; font-size: 28px; font-weight: bold; font-family: Montserrat;">
                                <img src="http://zerterra.com/images/plainlogoWhite.png"  style="display: block; width:100%; max-width:150px;" />
                                <p>PRE-ORDER</p>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="color: #333; font-family: Arial, sans-serif; font-size: 24px;">
                                            <b>Hi <?php echo $fname;?>!<br></b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td width="260" valign="top">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                                <td>

                                                                    <p style=" line-height: 2; font-family: Montserrat;font-weight: bold; font-size:  11pt; text-align:justify;">
                                                                        we already received your order request from our website (zerterra.com)
                                                                        Please wait while we are processing your
                                                                        request. Make sure that all of your informations are correct.
                                                                    </p>
                                                                    <p style="  font-family: Montserrat;font-weight: bold; font-size:  11pt; text-align:justify;"> Thank you</p>
                                                                    <p style="  font-family: Montserrat;font-weight: bold; font-size:  11pt; text-align:justify;">God bless!</p>
                                                                </td>
                                                            </tr>

                                                            <hr>
                                                            <tr>
                                                                <td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">

                                                                    <table style="width:100%; height:200px;">
                                                                      <tr style="color: #000; font-family:Montserrat; font-size: 16px; line-height: 20px; font-weight:bold; margin-bottom:50px;">
                                                                        <td>Firstname:</td>
                                                                        <td style="padding-left:10px; margin-bottom:50px;"><?php echo $fname;?></td>    
                                                                    </tr>
                                                                    <tr style="color: #000; font-family:Montserrat; font-size: 16px; line-height: 20px; font-weight:bold;">
                                                                        <td>Lastname:</td>
                                                                        <td style="padding-left:10px"><?php echo $lname;?></td>
                                                                    </tr>
                                                                    <tr style="color: #000; font-family:Montserrat; font-size: 16px; line-height: 20px; font-weight:bold;">
                                                                        <td>Email:</td>
                                                                        <td style="padding-left:10px"><?php echo $email;?></td>
                                                                    </tr>
                                                                    <tr style="color: #000; font-family:Montserrat; font-size: 16px; line-height: 20px; font-weight:bold;">
                                                                        <td>Contact:</td>
                                                                        <td style="padding-left:10px"><?php echo $contact;?></td>
                                                                    </tr>
                                                                    <tr style="color: #000; font-family:Montserrat; font-size: 16px; line-height: 20px; font-weight:bold;">
                                                                        <td>Address:</td>
                                                                        <td style="padding-left:10px"><?php echo $address;?></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">
                                                    &nbsp;
                                                </td>
                                                <td width="260" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <img src="http://zerterra.com/images/important-mail.png" alt="" style="display: block; width:100%; max-width:180px; margin-left:30px;" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 150px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                               <div style="color:#4a8169; background-color:#d1d1d1; text-align:center; height:50px; padding-top:30px; font-size:15pt; font-weight:bold;">
                                                                   <?php echo $orderNum;}?>
                                                               </div>
                                                               <p style="text-align:center; font-family:Montserrat; font-size:10pt;  font-weight:bold;">ORDER NUMBER</p>
                                                           </td>
                                                       </tr>
                                                   </table>
                                               </td>
                                           </tr>
                                       </table>
                                   </td>
                               </tr>
                           </table>
                       </td>
                   </tr>
                   <tr>
                    <td bgcolor="#4a8169" style="padding: 30px 30px 30px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="color: #ffffff; font-family: Montserrat; font-size: 14px;" width="75%">
                                   FROM: zerterra.com<br/>
                                   <br>
                                   <a href="#" style="color: #ffffff;"><font color="#ffffff">(no-reply@zerterra.com)</font></a> 
                               </td>
                               <td align="right" width="25%">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                            <a href="http://www.zerterra.com/zerterraph/" style="color: #ffffff;">
                                                <img src="http://zerterra.com/images/globeIcon.png" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                            </a>
                                        </td>
                                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                        <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                            <a href="https://www.facebook.com/zerterra/" style="color: #ffffff;">
                                                <img src="http://zerterra.com/images/fbicon-rounded.png" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>
</body>
</html>