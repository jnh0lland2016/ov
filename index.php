
<?
if(isset($_SERVER['HTTP_USER_AGENT'])){
   $agent = $_SERVER['HTTP_USER_AGENT'];
}

if(preg_match('/^Googlebot/i',$agent)){
   http_response_code(301);
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: http://www.google.com/");
   exit;
}
?>
