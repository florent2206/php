<?phpsession_start();
session_destroy();
$_SESSION=[];
include 'session-test.php';