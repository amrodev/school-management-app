<?php




if (isset($_POST['manual_sms'])) {
    $username = 'amro_dev';
    $password = 'Amroezz1';
    $mobile = $_POST['mobile'];
    $MessageTXT = $_POST['message'];
    $message = rawurlencode($MessageTXT);
    $url = 'http://smsmisr.com/api/send.aspx?username=' . $username . '&password=' . $password . '&language=1&sender=MIPS&mobile=' . $mobile . '&message=' . $message;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    echo $result = curl_exec($curl);
    curl_close($curl);
    session_start();
    $_SESSION['smsresult'] = $result;

    /*if ($_SESSION['smsresult'] == '1901')
    {
        $_SESSION['smsstatus']   = 'success';
        $_SESSION['smssmessage'] = 'successfully';
        $_SESSION['smssHeadr']   = 'Success, Message Submitted Successfully';
    }
    if ($_SESSION['smsresult'] == '1902')
    {
        $_SESSION['smsstatus']   = 'error';
        $_SESSION['smssmessage'] = 'ERROR';
        $_SESSION['smssHeadr']   = 'sorry,Invalid URL Error, This means that one of the parameters was not provided';
    }
    if ($_SESSION['smsresult'] == '1903')
    {
        $_SESSION['smsstatus']   = 'error';
        $_SESSION['smssmessage'] = 'ERROR';
        $_SESSION['smssHeadr']   = 'sorry,Invalid value in username or password field';
    }
    if ($_SESSION['smsresult'] == '1904')
    {
        $_SESSION['smsstatus']   = 'error';
        $_SESSION['smssmessage'] = 'ERROR';
        $_SESSION['smssHeadr']   = 'sorry,Invalid value in Sender field';
    }
    if ($_SESSION['smsresult'] == '1905')
    {
        $_SESSION['smsstatus']   = 'error';
        $_SESSION['smssmessage'] = 'ERROR';
        $_SESSION['smssHeadr']   = 'sorry,Invalid value in Mobile field';
    }
    if ($_SESSION['smsresult'] == '1906')
    {
        $_SESSION['smsstatus']   = 'error';
        $_SESSION['smssmessage'] = 'ERROR';
        $_SESSION['smssHeadr']   = 'ops Insufficient Credit';
    }
    if ($_SESSION['smsresult'] == '1907')
    {
        $_SESSION['smsstatus']   = 'error';
        $_SESSION['smssmessage'] = 'ERROR';
        $_SESSION['smssHeadr']   = 'ops Server under updating, try again';
    }*/
    header("Location: ../sms.php");
}


if (isset($_POST['add_sms_event'])) {
    require_once '../lib/sms.php';
    $_sms = new SMS();

    $EventTitle = $_POST['title'];
    $EventMessage = $_POST['message'];
    $EventDay = $_POST['day'];
    $EventMonth = $_POST['month'];
    $EventYear = $_POST['year'];
    $id = null;

    $_sms->save($id, $EventTitle, $EventMessage, $EventDay, $EventMonth, $EventYear);
    header("Location: ../sms_events.php");
}
?>

?>