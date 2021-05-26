<?php
date_default_timezone_set("Asia/Baghdad");
  if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
  }
  define('MADELINE_BRANCH', 'deprecated');
  include 'madeline.php';
  $settings['app_info']['api_id'] = 579315;
  $settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
  $MadelineProto = new \danog\MadelineProto\API('BROK.madeline', $settings);
  $MadelineProto->start();
$ch = readline("- Enter Group Link => ");
$Chat = $MadelineProto->get_pwr_chat($ch);
    $ggco = count($Chat['participants']);
    for($i=0;$i < $ggco; $i++){
        $par = $Chat['participants'][$i];
        $brok = $par['user']['id'];
        echo "$brok - $x .\n";
        file_put_contents('members', "$brok\n",FILE_APPEND);
        $x++;
        
        $ad1 = explode("\n",file_get_contents("members"));
while(1){
 for($i=0;$i<count($ad1); $i++){
     $users = $ad1[$i];
try{
$MadelineProto->messages->sendMessage(['peer' => $users, 'message' => $message]);
$data = str_replace("\n".$users,"", file_get_contents("members"));
file_put_contents("members", $data);
$x++;
sleep(5);
echo "$users : $x\n";
   }
  }
 }
}
