<?php

/*
by: πππ¦π¦ππ  π­ππ­ππ
CH : ππΌππΌπ
Ch2 : HZ_RS
*/

ob_start();
$API_KEY = '5166194673:AAGPncTfQZDGK_zU-xz2gpJhh8gwlYaP_3U'; //add your bot token
$sudo = 5047045277; // add your id
$bot_id = 5166194673; 
$e = "@RAWAN2004_bot";
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$text       = $message->text;
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game; 
$name       = $update->message->from->first_name;
$re         = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;

$number     = str_word_count($text);
$numper     = strlen($text);
$set        = file_get_contents("data/$chat_id.txt");
$ex         = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1       = $ex[3];
$fwd1       = $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1       = $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"ΩΩΩ Ψ§ΩΨ΅ΩΨ±","ΩΩΩ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ","ΩΩΩ Ψ§ΩΨ΅ΩΨͺ","ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ","ΩΩΩ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·","ΩΩΩ Ψ§ΩΨ¬ΩΨ§Ψͺ","ΩΩΩ Ψ§ΩΩΩΩΨ§Ψͺ","Ψ­ΨΈΨ±","Ψ·Ψ±Ψ―","Ψ±ΩΨΉ Ψ§Ψ―ΩΩ","ΨΆΨΉ Ψ§Ψ³Ω","ΨͺΨ«Ψ¨ΩΨͺ","/link","Ψ§ΩΨ±Ψ§Ψ¨Ψ·");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($from_id,$Dev)){
$info =  "Ψ§ΩΩΨ·ΩΨ± Ψ§ΩΨ§Ψ³Ψ§Ψ³Ω π¨π»βπ»";
}elseif($status == "creator"){
$info = "Ψ§ΩΩΩΨ΄Ψ¦ π¨ββοΈ";
}elseif($status == "administrator"){
$info = "Ψ§ΩΩΨ΄Ψ±Ω π¨ββοΈ";
}elseif(in_array($from_id,$admin_user) ){
$info = "Ψ§ΩΨ§Ψ―ΩΩ πββ";
}elseif(in_array($from_id,$manger) ){
$info = "Ψ§ΩΩΨ―ΩΨ± π?ββ";
}elseif(in_array($from_id,$mmyaz) ){
$info = "ΨΉΨΆΩ ΩΩΩΨ² πΌ";
}elseif(in_array($from_id,$developer) ){
$info = "Ψ§ΩΩΨ·ΩΨ± π¨π»βπ»";
}
 //***************************//
// info developers //
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."*βΊ*".$developers_infos."\nβββββββ\nπ¨Β¦ Ψ§ΩΩ±ΩΩΨ―ΩΩΩ±Ψͺ :\n" ."*βΊ*`".$developers_info . "`";
// info mangers //
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
// info admins //
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
// info mmaz //
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
// info dogs //
$joksss = file_get_contents("data/jok/$chat_id.txt");
$jokid  = explode("\n",$joksss);
$jokl = file_get_contents("data/jok/$chat_id/jok.txt");
$jokll = explode ("\n",$jokl);
$jokv = file_get_contents("data/jok/$chat_id/joks.txt");
$jokss = explode ("\n",$jokv);
// info joks //
$dogsss = file_get_contents("data/dog/$chat_id.txt");
$dogid  = explode("\n",$dogsss);
$dogl = file_get_contents("data/dog/$chat_id/dog.txt");
$dogll = explode ("\n",$dogl);
$dogv = file_get_contents("data/dog/$chat_id/dogs.txt");
$dogss = explode ("\n",$dogv);
// Banslist //
$Bans = file_get_contents("data/ban/$chat_id.txt");
$Banids  = explode("\n",$Bans);
$BansList = file_get_contents("data/ban/$chat_id/list.txt");
$Banlist = explode ("\n",$Banslist);
// silents //
$silentids = file_get_contents("data/silent/$chat_id.txt");
$silents = explode ("\n",$silentids);
$silent1 = file_get_contents("data/silent/$chat_id/list.txt");
$silentlist = explode("\n",$silent1);
// folders auto //
mkdir("data");
mkdir("data/developers");
mkdir("data/dog");
mkdir("data/dog/$chat_id");
mkdir("data/jok");
mkdir("data/ban");
mkdir("data/silent");
mkdir("data/silent/$chat_id");
mkdir("data/ban/$chat_id");
mkdir("data/jok/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
if(!$re_user){
$usew = "$first_name";
}elseif($re_user){
$usew = "@$re_user";
}
if(in_array($text, $commands) and $bot != "administrator"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"π«βΩΩΨ£Ψ³Ω Ψ§ΩΨ¨ΩΨͺ ΩΩΨ³ Ψ§Ψ―ΩΩ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
  'reply_to_message_id'=>$mid
    ]);
}
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
 if($text=="/start" and $type == "private"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π―Β¦ ΩΩΨ±Ψ­Ψ¨Ψ’ Ψ’ΩΨ’ Ψ¨ΩΨͺ Ψ’Ψ³ΩΩΩΩ α―πππππΌ "β.β π
π°Β¦ Ψ’Ψ?ΨͺΨ΅ΩΨ’Ψ΅ΩΩ Ψ­ΩΩΨ’ΩΩΫββ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΨ’Ψͺ
πΒ¦ ΩΩΩ Ψ’ΩΨ³ΩΨ¨Ψ’Ω ΩΨ’ΩΨͺΩΨ¬ΩΩΫββ ΩΨ’ΩΨͺΪ―Ψ±Ψ’Ψ± ΩΨ’ΩΨ?...
π¨π½βπ§",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"Ψ’ΩΩΩΨ·ΩΩΨ± πΏ",'url'=>"https://t.me/hossamzrzor"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"π―Β¦ ΩΩΨ±Ψ­Ψ¨Ψ’ Ψ’ΩΨ’ Ψ¨ΩΨͺ Ψ’Ψ³ΩΩΩΩ α―πππππΌ "β.β π
π°Β¦ Ψ’Ψ?ΨͺΨ΅ΩΨ’Ψ΅ΩΩ Ψ­ΩΩΨ’ΩΩΫββ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΨ’Ψͺ
πΒ¦ ΩΩΩ Ψ’ΩΨ³ΩΨ¨Ψ’Ω ΩΨ’ΩΨͺΩΨ¬ΩΩΫββ ΩΨ’ΩΨͺΪ―Ψ±Ψ’Ψ± ΩΨ’ΩΨ?...
βοΈΒ¦ ΩΩΨΉΨ±Ω Ψ’ΩΩΩΨ·ΩΩΨ±  : @hossamzrzor πΏ
π¨π½βπ§",
    ]);
}

if ($type == "supergroup" and in_array($chat_id, $groups)){
  
  if($you != "creator" && $you != "administrator" && $from_id != $sudo){
    if($photo && $photo1 == "l"){
        bot('deleteMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message->message_id
        ]);
    }

    if($voice and $voice1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    } 
    if($audio && $audio1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($video && $video1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
       bot('deleteMessage',[
         'chat_id'=>$chat_id,
         'message_id'=>$message->message_id
      ]);
    } 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message->message_id
       ]);
    }
    if($doc and $doc1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($sticker and $sticker1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from && $fwd1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and $mark1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($new and $bots1 == "l"){
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
        bot('kickChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$new->id
          ]);
      }
    }
  }

if($bot == "administrator"){
if($you == "creator" or $you == "administrator") {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del"){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }
   if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt","~Β» (" . "@". $re_user .")  " . "Β»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ·ΩΨ± ΩΩ Ψ§ΩΨ¨ΩΨͺ 
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ·ΩΨ± ΩΩ ΩΨ¨Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω" and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
file_put_contents("$re_id.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω ΩΨΉΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±"  || $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ" || $text == "Ψ±ΩΨΉ ΩΩΩΨ²" || $text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" and $re_id ==$bot_id and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π? β ΩΨ§ΨͺΨ­Ψ±Ψ¬ΩΨ§Ψ΄ ΩΨ§ΩΩΩ ΩΨ§Ψ±ΩΨ― πΉπΉ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
$cdevs = count($developers)-1;
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs != 0 and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ ΩΨ·ΩΨ± Ψ§ΩΨ§Ψ³Ψ§Ψ³Ω
π€βΨͺΩ Ψ­Ψ°Ω {$cdevs} ΩΨ·ΩΨ±
β
", reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs == 0 and in_array($from_id,$Dev)){
$cdevs = count($developers);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΨ·ΩΨ±ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}

if($re and $text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ Ψ§ΩΩΨ―ΩΨ±"  and !in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , "~Β» (" . "@". $re_user .") " . "Β»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[
 chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ―ΩΨ± Ψ¨Ψ§ΩΨ¨ΩΨͺ
β"
, parse_mode => markdown ,
 reply_to_message_id =>$message->message_id,
 disable_web_page_preview =>true,
]);
}
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ Ψ§ΩΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" || $text == "Ψ±ΩΨΉ Ψ§ΩΩΩΨ΄Ψ¦" and in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ―ΩΨ± ΩΩ ΩΨ¨Ω
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
$derb = file_get_contents("data/$chat_id/sen.txt");
$sww = file_get_contents("data/$chat_id/seen.txt");
$sew = file_get_contents("data/$chat_id/seeen.txt");
if($re and $text == "Ψ±ΩΨΉ Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ" || $text == "Ψ±ΩΨΉ Ψ¨Ψ΅ΩΨ§Ψ­ΩΨ©" || $text == "Ψ±ΩΨΉ Ψ΅ΩΨ§Ψ­ΩΩ" || $text == "Ψ±ΩΨΉ Ψ΅ΩΨ§Ψ­ΩΨ©"){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
file_put_contents("data/$chat_id/sen.txt","name");
file_put_contents("data/$chat_id/seen.txt",$from_id);
file_put_contents("data/$chat_id/seeen.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨ­Ψ³ΩΨ§ ΨΉΨ²ΩΨ²Ω $info
πβΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΨ³ΨͺΨ?Ψ―Ω ΩΨ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ ΩΨ§Ψ­Ψ―Ω ΩΩΨ· Ψ§ΩΨͺ ΨͺΨ?ΨͺΨ§Ψ±ΩΨ§ β
πβΨ§Ψ±Ψ³Ω Ψ§ΩΨ§Ω Ψ§ΩΨ΅ΩΨ§Ψ­ΩΩ Ψ§ΩΨͺΩ ΨͺΨ±ΩΨ―ΩΨ§ ΩΩΨΉΨΆΩ Β» $re_id Ψ ΩΩΩΩΩ Ψ§Ψ±Ψ³Ψ§Ω Ψ±ΩΩΨ² Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ ΩΩΨ±ΩΨΉ π
ΩΩΩ  ΩΩΩΩ  ΩΩΩ  ΩΩΩ  ΩΩΩ
πβΨ­Ψ°Ω Ψ±Ψ³Ψ§Ψ¦Ω Β» {1}
π«βΨ­ΨΈΨ± ΩΨ³ΨͺΨ?Ψ―ΩΩΩ Β» {2}
βοΈβΨͺΨ«Ψ¨ΩΨͺ Ψ±Ψ³Ψ§Ψ¦Ω Β» {3}
πΈβΨ―ΨΉΩΨ© ΩΨ³ΨͺΨ?Ψ―ΩΩΩ Β» {4}
ββΨ§ΨΆΨ§ΩΨ© ΩΨ΄Ψ±ΩΩΩ Β» {5}
β»οΈβΨͺΨΊΩΩΨ± ΩΨΉΩΩΩΨ§Ψͺ Ψ§ΩΨ¬Ψ±ΩΨ¨ Β» {6}
πΈβΨ±ΩΨΉ Ψ¨ΩΨ§ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ
ββΨ§ΩΨΊΨ§Ψ‘ Β» ΩΨ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ§ΩΨ±
ΩΩΩ  ΩΩΩΩ  ΩΩΩ  ΩΩΩ  ΩΩΩ
β οΈβΩΩΨ§Ψ­Ψ·Ψ© : ΩΩΨ±ΩΨΉ Ψ¨ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ ΨΉΨ―Ψ§ Ψ΅ΩΨ§Ψ­ΩΨ§Ψͺ ΩΨ­Ψ―Ψ―Ψ© Β» { ΨͺΩΨ²ΩΩ Ψ΅ΩΨ§Ψ­ΩΨ© } Ψ¨Ψ§ΩΨ±Ψ― β",
]);
}}
if($text == "5" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ±ΩΨΉ ΩΨ΄Ψ±ΩΩΩ ΩΩΨ·β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>True,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "1" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ­Ψ°Ω Ψ§ΩΨ±Ψ³Ψ§Ψ¦Ω ΩΩΨ· β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>True,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if( $text == "4" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ―ΨΉΩΨ© ΩΨ³ΨͺΨ?Ψ―ΩΩΩ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>True,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text  == "3" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ ΨͺΨ«Ψ¨ΩΨͺ Ψ±Ψ³Ψ§Ψ¦Ω β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>True,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "6" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ ΨͺΨΊΩΩΨ± Ψ§ΩΩΨΉΩΩΩΨ§Ψͺ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>True,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "2" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ­ΨΈΨ± ΩΨ³ΨͺΨ?Ψ―ΩΩΩ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>True,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "Ψ±ΩΨΉ Ψ¨ΩΨ§ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨ΩΨ§ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>true,
   can_delete_messages =>true,
   can_invite_users =>true,
   can_restrict_members =>true,
   can_pin_messages =>True,
   can_promote_members =>True,
]);
}
}
if($text == "Ψ§ΩΨΊΨ§Ψ‘" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
πβΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ§ΩΨ± β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $mangers_info != NULL and $mangers_info != " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
$cmang = count($mangers)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ $info
π€βΨͺΩ Ψ­Ψ°Ω {$cmang} ΩΩ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘
β",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
}}
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $mangers_info == NULL or $mangers_info == " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"*
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΩΨ―Ψ±Ψ§Ψ‘
β",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ―ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ―ΩΨ±"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~Β» (" . "@". $re_user .")  " . "Β»" . "  (". $re_id .") .","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
??βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ­Ψ°ΩΩ ΩΩ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ―ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ―ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ bbbbbb" || $text == "ΨͺΩΨ²ΩΩ nnnnnn" and !in_array($re_id,$manger)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ ΩΨ―ΩΨ±
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ·ΩΨ±"  and in_array($re_id,$developer)){
	$re_id_info = file_get_contents("data/developers/$chat_id.txt");
	$devr = file_get_contents("data/developers/$chat_id/developer.txt");
	$devr1 = explode("             \n",$devr);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~Β» (" . "@". $re_user .") " . "Β»" . "  (". $re_id .") .","",$devr1);
	file_put_contents("data/developers/developer.txt",$str);
			file_put_contents("data/developers/developers.txt",$str);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΩ Ψ§ΩΩΨ·ΩΨ±ΩΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if(in_array($from_id,$Dev)){
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ―ΩΨ³Ψ³Ψ³" and !in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ ΩΨ·ΩΨ± ΩΩΨͺΩ Ψ­Ψ°ΩΩ !
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω" || $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± Ψ§ΩΨ§Ψ³Ψ§Ψ³Ω"  and in_array($re_id,$Dev)){
			file_put_contents("$re_id.txt","");
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , "~Β» ([" . "@". $re_user ."]) " . "Β»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ Ψ§Ψ―ΩΩ ΩΩ Ψ§ΩΨ¨ΩΨͺ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if ($re and $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ" and in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ Ψ§Ψ―ΩΩ Ψ¨Ψ§ΩΨ¨ΩΨͺ ΩΨ¨ΩΨ§
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($text == "ΩΨ³Ψ­ Ψ§ΩΨ§Ψ―ΩΩΩΩ" or $text == "ΩΨ³Ψ­ Ψ§ΩΨ§Ψ―ΩΩΩΨ©" ){
$cadmins = count($admin_users)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ $info
π€βΨͺΩ Ψ­Ψ°Ω {$cadmins} Ψ§Ψ―ΩΩ
β",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/admin_user/$chat_id.txt","");
	file_put_contents("data/admin_user/$chat_id/mange.txt","");
	}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "Β»" . "  (`". $re_id ."`) .","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΩ Ψ§ΩΨ§Ψ―ΩΩΩΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ"  and !in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ Ψ§Ψ―ΩΩ ΩΩΨͺΩ ΨͺΩΨ²ΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "Ψ±ΩΨΉ ΩΩΩΨ²"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , "| {[" . "@". $re_user ."]}  " . "Β»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΨΉΨΆΩ ΩΩΩΨ²
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "Ψ±ΩΨΉ ΩΩΩΨ²"  and in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΩΩΨ² ΩΩ ΩΨ¨Ω
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΩΩΨ²ΩΩ" ){
$cmmyz = count($mmyazs)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ $info
π€βΨͺΩ Ψ­Ψ°Ω {$cmmyz} ΩΩΩΨ²
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
}}

if($re and $text == "ΨͺΩΨ²ΩΩ ΩΩΩΨ²"   and in_array($re_id,$mmyaz)){
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "Β»" . "  (`". $re_id ."`) .","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΩ Ψ§ΩΩΩΩΨ²ΩΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "ΨͺΩΨ²ΩΩ ΩΩΩΨ²" and !in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ ΩΩΩΨ² ΩΨͺΩΨ²ΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" and in_array($from_id,$Dev)){
if($text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΩ" or $text == "Ψ­Ψ°Ω Ψ§ΩΩΩ"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·ΩΨ© $info
ΩΩΩ ΩΩΩ ΩΩΩ ΩΩΩΩ ΩΩΩΩ 
πβΨͺΩ Ψ­Ψ°Ω {$CA} ΩΩ Ψ§ΩΨ§Ψ―ΩΩΩΩ
πβΨͺΩ Ψ­Ψ°Ω {$CM} ΩΩ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘
πβΨͺΩ Ψ­Ψ°Ω {$CMM} ΩΩ Ψ§ΩΩΩΩΨ²ΩΩ
ΩΩΩ ΩΩΩ ΩΩΩ ΩΩΩΩ ΩΩΩΩ 
πβΨͺΩ Ψ­Ψ°Ω {$CALL} ΩΩ Ψ§ΩΩΨ±ΩΩΨΉΩΩ
πΈβΨͺΩ Ψ­Ψ°Ω Ψ§ΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt","");
}
}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer)){
if($text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" or $text == "Ψ±ΩΨΉ Ψ§ΩΨ§Ψ―ΩΩΩΩ" or $text == "Ψ±ΩΨΉ Ψ§ΩΨ§Ψ―ΩΩΩΨ©" or $text == "ΨͺΩΨΉΩΩ"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΩΨ³ ΩΩ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if( !in_array($from_id,$Dev)){
if($text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ±" or $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" or $text == "Ψ§ΩΩΨ·ΩΨ±ΩΩ" or $text == "ΩΨ³Ψ­ ΩΨ·ΩΨ±"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΩΨ³ ΩΩ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ" || $text == "Ψ±ΩΨΉ ΩΩΩΨ²" or $text == "Ω1" or $text == "Ω2" or $text == "Ω3" or $text == "Ω4" or $text == "Ω5" or $text == "ΩΩΩ Ψ§ΩΨ΅ΩΨ±" or $text == "ΨͺΩΨ²ΩΩ ΩΩΩΨ²" or $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ" or $text == "ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΨ―ΩΩ" or $text == "ΨͺΩΨΉΩΩ Ψ§ΩΨ§ΩΨ―Ω" or $text == "ΨͺΨΉΨ·ΩΩ Ψ§ΩΨ§ΩΨ―Ω"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΩΨ³ ΩΩ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
 
if(in_array($from_id,$Dev)){
if($text == "Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs != 0){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
π¨π»βπ»βΨ§ΩΩΨ·ΩΨ±ΩΩ {$cdevs} : 
$developers_infos
",
]);
}
}
if($text == "Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs == 0 || $developers_info == ""){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
 π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΨ·ΩΨ±ΩΩ
β
",
]);
}
}
}
$CM = count($mangers)-1;
if($text == "Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $CM != 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
π¨π»βπ»βΨ§ΩΩΨ―Ψ±Ψ§Ψ‘ [{$CM}] : 
$mangers_infos
",
]);
}
}
}
if($text == "Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $CM == 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>
"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΨ―Ψ±Ψ§Ψ‘
β",
]);
}
}
}
$CA = count($admin_users)-1;
if($text == "Ψ§ΩΨ§Ψ―ΩΩΩΩ" || $text == "Ψ§ΩΨ§Ψ―ΩΩΩΨ©" and $admin_users_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΨ§Ψ―ΩΩΩΨ© [{$CA}] :
$admin_users_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "Ψ§ΩΨ§Ψ―ΩΩΩΩ" || $text == "Ψ§ΩΨ§Ψ―ΩΩΩΨ©" and $admin_users_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβNotDirector - *Admins* -
πβΩΨ§ΩΩΨ¬Ψ― ΩΨ¬ΩΨ― - *Ψ§ΩΨ§Ψ―ΩΩΩΩ* -
β",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
$CMM = count($mmyazs)-1;
if($text == "Ψ§ΩΩΩΩΨ²ΩΩ" and $mmyazs_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΩΨ²ΩΩ [{$CMM}] :
$mmyazs_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "Ψ§ΩΩΩΩΨ²ΩΩ" and $mmyazs_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβNotDirector - *VipMember* -
πβΩΨ§ΩΩΨ¬Ψ― ΩΨ¬ΩΨ― - *Ψ§ΩΩΩΩΨ²ΩΩ* -
β",
]);
}
}
}
 elseif($text  == "ΩΨͺΩ" && $rt or $text  == "silent" && $rt or $text  == "ΨͺΩΩΩΨ―" && $rt){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt !=  creator  && $statusrt !=  administrator  && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	
$add = $settings["information"]["added"];
if ($add == true){
   bot( restrictChatMember ,[
    user_id =>$re_id,   
    chat_id =>$chat_id,
    can_post_messages =>false,
         ]);
  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» [$re_user]
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» {[$re_id]}
π Β¦ ΨͺΩ ΩΨͺΩΩ/ΨͺΩΩΩΨ―Ω
βοΈ
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
 }
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>" ΩΨ§ΩΩΩΩΩΩ ΨͺΩΩΩΨ― Ψ§ΩΨ§Ψ―ΩΩΩΨ© Ψ§Ω Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘ Ψ§Ω  Ψ§Ω Ψ§ΩΩΩΩΨ²ΩΩ",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text  , "ΩΨͺΩ ΩΩΨ―Ψ© ") !== false && $rt or strpos($text  , "ΨͺΩΩΩΨ― ΩΩΨ―Ψ© ") !== false && $rt) {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt !=  creator  && $statusrt !=  administrator  && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace([ ΩΨͺΩ ΩΩΨ―Ψ©  ,  ΨͺΩΩΩΨ― ΩΩΨ―Ψ© ],  ,$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» [$re_user]
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» {[$re_id]}
π Β¦ ΨͺΩ ΩΨͺΩΩ ΩΩΨ―Ψ© $we Ψ―ΩΩΩΩ
βοΈ
", parse_mode =>"markdown", disable_web_page_preview =>true,
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
    bot( restrictChatMember ,[
    user_id =>$re_id,   
    chat_id =>$chat_id,
    can_post_messages =>false,
    until_date =>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"Ψ?Ψ·Ψ§β οΈ
ββββββ
ΩΨ¬Ψ¨ Ψ§Ψ?ΨͺΩΨ§Ψ± ΨΉΨ―Ψ― Ψ¨ΩΩ 1 Ψ§ΩΩ 1000",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
  chat_id  => $chat_id,
  text =>"ΩΨ§ΩΩΩΩΩΩ ΨͺΩΩΩΨ― Ψ§ΩΨ§Ψ―ΩΩΩΨ© Ψ§Ω Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘ Ψ§Ω Ψ§ΩΩΨ·ΩΨ±ΩΩ Ψ§Ω Ψ§ΩΩΩΩΨ²ΩΩ",
 reply_markup =>$inlinebutton,
   ]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$tq = str_replace("Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ― ", "$tq", $text);
if($text == "Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ― $tq" and preg_match( /([0-9])/i ,$tq)){
file_put_contents("data/$chat_id/bans.txt",$tq);
$idp == file_get_contents("data/$chat_id/bans.txt");
$statusidd = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$tq),true);
$statusid = $statusidd[ result ][ status ];
	 bot( restrictChatMember ,[
    user_id =>$tq,   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"ππΌβββΨ§ΩΨΉΨΆΩ Β» {$tq}
π€βΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ―Ω
β
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$message_id,
	  reply_markup =>$inlinebutton,
   ]);
$key = array_search($tq,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$re_user= str_replace("Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩ ", "$re_user", $text);
if($text == "Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩ $re_user" and preg_match( /([0-9])/i ,$re_user)){
file_put_contents("data/$chat_id/bans.txt",$re_user);
$idp == file_get_contents("data/$chat_id/bans.txt");
$statusidd = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_user),true);
$statusid = $statusidd[ result ][ status ];
	 bot( restrictChatMember ,[
    user_id =>$re_user,   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"ππΌβββΨ§ΩΨΉΨΆΩ Β» {$re_user}
π€βΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩΩ
β
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$message_id,
	  reply_markup =>$inlinebutton,
   ]);
$key = array_search($re_user,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
if($text  == "Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ―" && $rt or $text  == "Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩ" && $rt or $text  == "Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨͺΩΩΩΨ―" && $rt){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot( restrictChatMember ,[
    user_id =>$re_id,   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» [$re_user]
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» {[$re_id]}
π Β¦ ΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩΩ/ΨͺΩΩΩΨ―Ω
βοΈ
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}

if( $text  == "ΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΩΨ―ΩΩ" or $text == "Ψ§ΩΩΩΩΨ―ΩΩ") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΩΨ―ΩΩ :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "ΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΨͺΩΩΩΩ" or $text == "Ψ§ΩΩΩΨͺΩΩΩΩ") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΨͺΩΩΩΩ :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "ΩΨ³Ψ­ Ψ§ΩΩΩΨͺΩΩΩΩ" or $text == "ΩΨ³Ψ­ Ψ§ΩΩΩΨ§ΨͺΩΩ") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot( restrictChatMember ,[
    user_id =>$silent[$z],   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"  
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© $keees
π€βΨͺΩ ΨͺΩΨΈΩΩ Ψ³ΩΨ© Ψ§ΩΩΩΨͺΩΩΩΩ
β
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "Ψ­ΨΈΨ±" or $text == "/kick" or $text=="Ψ·Ψ±Ψ―"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ­ΨΈΨ±Ω 
βοΈ",
   reply_to_message_id =>$mid
      ]);
    bot( kickChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ±"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ Ψ­ΨΈΨ±Ω 
βοΈ",
   reply_to_message_id =>$mid
      ]);
    bot( unbanChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
    }
  if($text == "/promote" or $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ"){
      bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩΨͺ ΨͺΨ±ΩΩΨͺΩ ΩΩΨ΅Ψ¨Ψ­ Ψ§Ψ―ΩΩ 
βοΈ",
   reply_to_message_id =>$mid
      ]);
      bot( promoteChatMember ,[
           chat_id =>$chat_id,
           user_id =>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ΨΆΨΉ Ψ§Ψ³Ω ", "$aname", $text);
  if($text == "/setname $ename"){
    bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$ename 
      ]);
  }
   if($text == "ΨΆΨΉ Ψ§Ψ³Ω $aname"){
     bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "ΨͺΨ«Ψ¨ΩΨͺ"){
    bot( pinChatMessage ,[
         chat_id =>$chat_id,
         message_id =>$re_msgid
      ]);
   }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "Ψ­ΨΈΨ±" or $text == "/kick" or $text=="Ψ·Ψ±Ψ―"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ­ΨΈΨ±Ω 
βοΈ",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ±"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ Ψ­ΨΈΨ±Ω 
βοΈ",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }
  if($text == "/promote" or $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩΨͺ ΨͺΨ±ΩΩΨͺΩ ΩΩΨ΅Ψ¨Ψ­ Ψ§Ψ―ΩΩ 
βοΈ",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ΨΆΨΉ Ψ§Ψ³Ω ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ΨΆΨΉ Ψ§Ψ³Ω $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "ΨͺΨ«Ψ¨ΩΨͺ"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "ΩΩΩ Ψ§ΩΨ΅ΩΨ±"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ΅ΩΨ± 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨ±"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨ± 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "ΩΩΩ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/open sticker" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/lock contact" or $text == "ΩΩΩ Ψ§ΩΨ¬ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ¬ΩΨ§Ψͺ Ψ§ΩΨ§ΨͺΨ΅Ψ§Ω 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "ΩΨͺΨ­ Ψ§ΩΨ¬ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ¬ΩΨ§Ψͺ Ψ§ΩΨ§ΨͺΨ΅Ψ§Ω 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc" or $text == "ΩΩΩ Ψ§ΩΩΩΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΩΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΩΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd" or $text == "ΩΩΩ Ψ§ΩΨͺΩΨ¬ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨͺΩΨ¬ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd" or $text == "ΩΨͺΨ­ Ψ§ΩΨͺΩΨ¬ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨͺΩΨ¬ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice" or $text == "ΩΩΩ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice" or $text == "ΩΨͺΨ­ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/lock link" or $text == "ΩΩΩ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ· 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open link" or $text == "ΩΨͺΨ­ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ· 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio" or $text == "ΩΩΩ Ψ§ΩΨ΅ΩΨͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ΅ΩΨͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio" or $text == "ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video" or $text == "ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user" or $text == "ΩΩΩ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user" or $text == "ΩΨͺΨ­ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark" or $text == "ΩΩΩ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark" or $text == "ΩΨͺΨ­ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots" or $text == "ΩΩΩ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "ΩΨͺΨ­ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text=="/help"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"β

 ββββΒ¦ ΩΩΨ³ΩΨ’Ψ±Ψͺ Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ β

π¨ββοΈΒ¦ Ω1 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ’Ψ―Ψ’Ψ±ΩΫββ
πΒ¦ Ω2 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΨΉΨ―Ψ’Ψ―Ψ’Ψͺ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΩΫββ
π‘Β¦ Ω3 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ­ΩΩΨ’ΩΩΫββ
βΒ¦ Ω4 Β» Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ
πΉΒ¦ Ω Ψ§ΩΩΨ·ΩΨ± Β»  Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΩΩΨ·ΩΩΨ±


 ββββΒ¦ Ψ±Ψ’Ψ³ΩΩΩΩ ΩΩΨ’Ψ³ΩΨͺΩΨ³ΩΨ’Ψ± β { @hossamzrzor } β",
      ]);
   }
  if($text=="Ψ§ΩΨ§ΩΨ§ΩΨ±"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"β

 ββββΒ¦ ΩΩΨ³ΩΨ’Ψ±Ψͺ Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ β

π¨ββοΈΒ¦ Ω1 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ’Ψ―Ψ’Ψ±ΩΫββ
πΒ¦ Ω2 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΨΉΨ―Ψ’Ψ―Ψ’Ψͺ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΩΫββ
π‘Β¦ Ω3 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ­ΩΩΨ’ΩΩΫββ
βΒ¦ Ω4 Β» Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ
πΉΒ¦ Ω Ψ§ΩΩΨ·ΩΨ± Β»  Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΩΩΨ·ΩΩΨ±


 ββββΒ¦ Ψ±Ψ’Ψ³ΩΩΩΩ ΩΩΨ’Ψ³ΩΨͺΩΨ³ΩΨ’Ψ± β { @hossamzrzor } β",
      ]);
  }
 }
}
if($text=="/setting" or $text=="/setting$e" or $text=="Ψ§ΩΨ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"βββ
π?πΎΒ¦ Ψ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ Ψ§ΩΩΨ¬ΩΩΨΉΩ : 


βοΈΒ¦ ΩΩΩΩΩ Β» l
βοΈΒ¦ ΩΩΨͺΩΨ­ Β» o

βββ

πΈΒ¦ Ψ§ΩΨ΅ΩΨ± : $photo1
ποΈΒ¦ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ : $sticker1

πΉΒ¦ Ψ§ΩΩΩΨ―ΩΩ : $video1
π‘Β¦ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ· :  $link1

βοΈΒ¦ Ψ§ΩΨ¬ΩΨ§Ψͺ : $contact1
πΒ¦ Ψ§ΩΩΩΩΨ§Ψͺ :  $doc1

β©οΈΒ¦ Ψ§ΩΨͺΩΨ¬ΩΩ : $fwd1
πΒ¦ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ : $bsma1

πΒ¦ Ψ§ΩΨ΅ΩΨͺ : $audio1
βοΈΒ¦ Ψ§ΩΩΨΉΨ±Ω : $tag1

πΒ¦ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ : $mark1
πΒ¦ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ : $bots1

βββ
",
]);
}
}
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="ΨͺΩΨΉΩΩ"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π?Β¦ ΨͺΩΩ ΨͺΩΩΩΨΉΩΩΩΩ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΩΫββ 
βοΈ",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"πΒ¦ Ψ§ΩΩΨ¬ΩΩΨΉΩ Ψ¨Ψ§ΩΨͺΨ£ΩΩΨ― βοΈ ΨͺΩ ΨͺΩΨΉΩΩΩΨ§",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
}
}
}
 if($text == "Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π?Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ Ψ§ΩΩΩΨΉΩΨ© Β» $c  βΌ"
    ]);
 }
if($text == "Ψ§Ψ°Ψ§ΨΉΩ" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π­Β¦ Ψ­Ψ³ΩΩΨ§ Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω Ψ§ΩΩΩΩΨ΄Ω ΩΩΨ§Ψ°Ψ§ΨΉΩ ΩΩΩΨ¬ΩΩΨΉΨ§Ψͺ 
π"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "Ψ§Ψ°Ψ§ΨΉΩ" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
$id   = $message->from->id; 
$user = $message->from->username; 
$name = $message->from->first_name; 
if($text=="ΩΩΩΨΉΩ" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½βπ§Β¦ Ψ§ΩΩΩΨ§ Ψ¨ΩΩ ΨΉΨ²ΩΨ²Ω :

πΒ¦ Ψ§ΩΨ§Ψ³Ω : $name
πΒ¦ Ψ§ΩΩΨΉΨ±Ω: @$user
π·Β¦ Ψ§ΩΨ§ΩΨ―Ω : ( $id )
πΒ¦ Ψ±ΨͺΨ¨ΨͺΩ : ΩΩΨ΄Ψ¦ Ψ§ΩΩΨ¬ΩΩΨΉΨ© π 
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ : ( $chat_id )
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© : $message->message_id
ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @hossamzrzor
π¨π½βπ§
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="ΩΩΩΨΉΩ" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½βπ§Β¦ Ψ§ΩΩΩΨ§ Ψ¨ΩΩ ΨΉΨ²ΩΨ²Ω :

πΒ¦ Ψ§ΩΨ§Ψ³Ω : $name
πΒ¦ Ψ§ΩΩΨΉΨ±Ω : @$user
π·Β¦ Ψ§ΩΨ§ΩΨ―Ω : ( $id )
πΒ¦ Ψ±ΨͺΨ¨ΨͺΩ : Ψ§Ψ―ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ© π 
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ : ( $chat_id )
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© : $message->message_id
ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @hossamzrzor
π¨π½βπ§",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="ΩΩΩΨΉΩ" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½βπ§Β¦ Ψ§ΩΩΩΨ§ Ψ¨ΩΩ ΨΉΨ²ΩΨ²Ω :

πΒ¦ Ψ§ΩΨ§Ψ³Ω : $name
πΒ¦ Ψ§ΩΩΨΉΨ±Ω : @$user
π·Β¦ Ψ§ΩΨ§ΩΨ―Ω : ( $id )
πΒ¦ Ψ±ΨͺΨ¨ΨͺΩ : ΨΉΨΆΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ© π 
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ : ( $chat_id )
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© : $message->message_id
ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @hossamzrzor
π¨π½βπ§",
'reply_to_message_id'=>$message->message_id, 
]);
}
 
$rnd = rand(1,999999999999999999);
if($text=="Ψ§ΩΨ―Ω" or $text == "id"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // Ψ±Ψ§Ψ¨Ψ· Ψ§Ψ³ΨͺΨΆΨ§ΩΨͺΩ
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
π€Β¦ Ψ§Ψ³ΩΩΩ Β» $name
π«Β¦ ΩΨΉΨ±ΩΩ Β» @$user
π·Β¦ Ψ§ΩΨ―ΩΩ  Β» $id
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© Β»  $message->message_id
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© Β» $chat_id
β",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
$rnd = rand(1,999999999999999999);
if($text=="Ψ΅ΩΨ±ΨͺΩ"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // Ψ±Ψ§Ψ¨Ψ· Ψ§Ψ³ΨͺΨΆΨ§ΩΨͺΩ
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "/link" or $text == "Ψ§ΩΨ±Ψ§Ψ¨Ψ·"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"πΒ¦Ψ±Ψ§Ψ¨ΩΨ· Ψ§ΩΩΩΩΨ¬ΩΩΩΩΨΉΩ π―
πΏΒ¦$t :

$l",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  
   }
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 592557902;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot and  $you == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"π€Β¦ Ψ’ΩΨΉΨΆΩΩ : @$user
π€Β¦ Ψ§ΩΨ§ΩΨ―Ω : $id 
π«Β¦ ΩΩΩΩΩΩΨΉ Ψ’ΨΆΩΨ’ΩΩΫ Ψ’ΩΨ¨ΩΨͺΨ’Ψͺ 
πΒ¦ ΨͺΩ Ψ·ΩΨ±Ψ― Ψ’ΩΨ¨ΩΨͺ 
β",
]);
}
if(preg_match('/^(ΩΨ³Ψ­) (.*)/', $text, $delmsg) and $from_id == $sudo){
for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
bot('deletemessage',[
'chat_id' => $chat_id,
'message_id' =>$h,]);}}
$editMessage = $update->edited_message;
$chatedit = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
if($editMessage){
	 bot('sendMessage',[
	 'chat_id'=>$chatedit,
	 'text'=>'Ψ³Ψ­Ω ΩΨΉΨ―Ω πΉβπΏ',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,
	 ]);
 }
if($rep && $text == "Ψ§ΩΨ―Ω" or $text == "Ψ§ΩΨ―ΩΩ"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " $re_id ",
]);
}
if($text == "Ω1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" β  ( Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ±ΩΨΉ ΩΨ’ΩΨͺΩΨ²ΩΩ )
      
β{ Ψ±ΩΨΉ Ψ§Ψ―ΩΩ ~ ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ } 
β{ Ψ±ΩΨΉ ΩΨ―ΩΨ± ~ ΨͺΩΨ²ΩΩ ΩΨ―ΩΨ± } 
β{ Ψ±ΩΨΉ ΩΩΩΨ² ~ ΨͺΩΨ²ΩΩ ΩΩΩΨ² } 
β{ Ψ±ΩΨΉ ΩΨ·ΩΨ± ~ ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± } 
β{ Ψ±ΩΨΉ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω ~ ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω } 
β{ Ψ±ΩΨΉ ΩΩΨ΄Ψ¦ ~ ΨͺΩΨ²ΩΩ ΩΩΨ΄Ψ¦ } 



βΩβββββ
      
βΩ
β ( Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ­ΨΈΩΨ± ΩΨ’ΩΨ·ΩΨ±Ψ― )
βΩ
      
β  { Ψ·Ψ±Ψ― Ψ¨Ψ§ΩΨ±Ψ―  } : ΩΨ·Ψ±Ψ― Ψ§ΩΨΉΨΆΩ 
β { Ψ­ΨΈΨ± Ψ¨Ψ§ΩΨ±Ψ―  } : ΩΨ­ΨΈΨ± ΩΨ·Ψ±Ψ― Ψ§ΩΨΉΨΆΩ 
β { Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ± Ψ¨Ψ§ΩΨ±Ψ― } : ΩΨ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ± ΨΉΩ ΨΉΨΆΩ 

βΩβββββ

π―β Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½ββοΈΒ¦  Ψ§ΩΨ§ΩΨ± Ψ§ΩΩΨΆΨΉ ΩΩΩΨ¬ΩΩΨΉΩ ::

π?Β¦Ωβββββ  
π­Β¦ ΨΆΨΉ Ψ§Ψ³Ω :β ΩΩΨΆΨΉ Ψ§Ψ³Ω  
  
π­Β¦ Ψ§ΩΩΨ±Ψ§Ψ¨ΩΨ· :β  ΩΨΉΨ±ΨΆ Ψ§ΩΨ±Ψ§Ψ¨Ψ·  
π?Β¦Ωβββββ

π¨π½βπ»Β¦  Ψ§ΩΨ§ΩΨ± Ψ±Ψ€ΩΨ© Ψ§ΩΨ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ ::

π―Β¦ Ψ§ΩΩΨ·ΩΨ± : ΩΨΉΨ±ΨΆ ΩΨΉΩΩΩΨ§Ψͺ Ψ§ΩΩΨ·ΩΨ± 
π―Β¦ ΩΨΉΩΩΩΨ§ΨͺΩ :βΩΨΉΨ±ΨΆ ΩΨΉΩΩΩΨ§ΨͺΩ  
π―Β¦ Ψ§ΩΨ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ : ΩΨΉΨ±ΨΆ Ψ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ Ψ§ΩΩΨ¬ΩΩΨΉΩ 
π―Β¦ Ψ§ΩΩΨ¬ΩΩΨΉΩ : ΩΨΉΨ±ΨΆ ΩΨΉΩΩΩΨ§Ψͺ Ψ§ΩΩΨ¬ΩΩΨΉΩ 

βββββββ
π―Β¦ Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"β‘οΈ Ψ§ΩΨ§ΩΨ± Ψ­ΩΨ§ΩΨ© Ψ§ΩΩΨ¬ΩΩΨΉΩ β‘οΈ
π―|Ωββββ
π―|οΈ ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΨ΅ΩΨͺ
π―| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΩΩΩΩΨ―ΩΩ
π―| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΩΨ΅ΩΩΩΨ± 
π―| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ
π―| οΈΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ
π―|| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΨͺΩΨ¬ΩΩ
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ¬ΩΨ§Ψͺ 
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΩΩΩΨ§Ψͺ
 π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ
 π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ
π|Ωβββββ
π―| Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ππ­ Ψ§ΩΨ§ΩΨ± Ψ§ΨΆΨ§ΩΩΩ πΉππΉ

πΒ¦Ωβββββ
π΅π» ΩΨΉΩΩΩΨ§ΨͺΩ Ψ§ΩΨ΄Ψ?Ψ΅ΩΩ π
πΈΒ¦ Ψ§Ψ³ΩΩ : ΩΨΉΨ±ΨΆ Ψ§Ψ³ΩΩ π―
π±Β¦ ΩΨΉΨ±ΩΩ : ΩΨΉΨ±ΨΆ ΩΨΉΨ±ΩΩ π―
πΒ¦ Ψ§ΩΨ―ΩΩ : ΩΨΉΨ±ΨΆ Ψ§ΩΨ―ΩΩ π―
πΒ¦Ωβββββ
β½Β¦ Ψ§ΩΨ§ΩΨ± Ψ§ΩΨͺΨ­Ψ΄ΩΨ΄ π
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨͺΩΨ­Ψ―
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΨ±Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΩΨ¨
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ±Ψ―
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΨΊΨ¨Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ±Ψ³Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΨΉΨ±Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ²ΩΨ§Ψ¬ βͺ Ψ·ΩΨ§Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΩΨ¨Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΨ³ΨͺΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨͺΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ±ΩΨ§Ψ΅Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ―ΩΨ±Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ­ΩΩΨ§Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΩΨ²Ψ‘
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ§Ψ΄Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ·ΨͺΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ§Ψ¨ΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΨͺΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ²ΩΨ¬Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ?Ψ§ΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ?Ψ§ΩΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΨΉΨ¨ΩΨ·
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨͺΨ?Ψ²ΩΩ
πΒ¦ ΩΩΩ + (Ψ§Ψ³Ω Ψ§ΩΨ΄Ψ?Ψ΅) 
πΒ¦ ΩΩΩ + Ψ§ΩΨ±Ψ― + (Ψ§ΩΩΩΨ§Ω) 
πΒ¦Ωβββββ

π―Β¦ Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω Ψ§ΩΩΨ·ΩΨ±"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"πΒ¦ Ψ§ΩΨ§ΩΨ± Ψ§ΩΩΨ·ΩΨ± π

πΒ¦ ΨͺΩΨΉΩΩ : ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ 
πΒ¦ Ψ§Ψ°Ψ§ΨΉΩ : ΩΩΨ΄Ψ± ΩΩΩΩ ΩΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ
πΒ¦ Ψ§Ψ³ΨͺΨ?Ψ―Ω /admin ΩΩ Ψ?Ψ§Ψ΅ Ψ§ΩΨ¨ΩΨͺ ΩΩΨ· : ΩΨΉΨ±ΨΆ ΩΩΨ¨ΩΨ― Ψ§ΩΨ?Ψ§Ψ΅ Ψ¨Ω π― 
πΒ¦ ΨͺΨ­Ψ―ΩΨ«: ΩΨͺΨ­Ψ―ΩΨ« ΩΩΩΨ§Ψͺ Ψ§ΩΨ¨ΩΨͺ
πΒ¦Ωβββββ

π―Β¦ Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}

/*
by: πππ¦π¦ππ  π­ππ­ππ
owner : ππΌππΌπ
Ch1 : DEV_1IRAQ
*/

if($text == 'Ψ§ΩΩΨ·ΩΨ±' or $text == "ΩΨ·ΩΨ±"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647815864486",
'first_name'=>"ΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩ 34K β’`β»",
'last_name'=>"Ω΅Ϊ΅Ω΅ΪΌΩΩΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²?ΰ§‘ΩΩΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ₯ΫΩΪΩΩΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²?ΰ§‘Ωΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ₯ΫΩΩ±ΪΉ πΏ Ω΅ΩΪΨ¬ΩΩΩΩΩΰ₯ΫΩΩΩΩΩΩΩΩΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΫΩΩΩΩΩΩΩΩΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©Ω",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ±ΨͺΨ¨ΨͺΩ" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π«Β¦ Ψ±ΨͺΨ¨ΨͺΩ Β» Ψ§ΩΩΩΨ΄ΩΨ‘ ππ»
πΏ
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ±ΨͺΨ¨ΨͺΩ" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π«Β¦ Ψ±ΨͺΨ¨ΨͺΩ Β» Ψ§Ψ―ΩΩ ΩΩ Ψ§ΩΨ¨ΩΨͺ π
πΏ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ±ΨͺΨ¨ΨͺΩ" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π«Β¦ Ψ±ΨͺΨ¨ΨͺΩ Β» ΩΩΨ· ΨΉΨΆΩ ππΌββοΈ
πΏ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ§ΩΨ¬Ψ¨" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ­Ψ§ΨΈΨ± ΨͺΨ§Ψ¬ Ψ±Ψ§Ψ³Ω Ψ§ΩΨ¬Ψ¨ΩΨͺ π
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ§ΩΨ¬Ψ¨" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩ ΩΨ§ ΩΨ΅ΨΉΨ―Ω Ψ§Ψ―ΩΩ Ω ΨͺΩΩΩ Ψ§ΩΨ¬Ψ¨ π ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ§ΩΨ¬Ψ¨" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§ΩΨ¬Ψ¨ Ψ§ΩΨͺΩ ΩΨ§ ΨͺΩΨ―ΩΨ± π",
'reply_to_message_id'=>$message->message_id, 
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MEMO = explode('ΩΩΩ',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
'reply_to_message_id'=>$mem,
]);
}
$MEMO = explode('ΩΩΩ',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$m = count($u)-1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == '/admin' and $for == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'πΒ¦ Ψ’ΩΫββΩΨ’ ΨΉΨ²ΩΨ²Ω Ψ’ΩΩΩΨ·ΩΩΨ± π
π°Β¦ Ψ’ΩΨͺΩΫββ Ψ’ΩΩΩΨ·ΩΩΨ± Ψ’ΩΨ’Ψ³ΩΨ’Ψ³ΩΩ ΩΫββΩΨ’ π 
...

πΈΒ¦ ΨͺΨ³ΩΨͺΨ·ΩΩΨΉββ Ψ’ΩΨͺΨ­Ϊ―Ω Ψ¨Ϊ―Ω Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΩΩΩΩΩΨ¬ΩΨ―ΩΫββ Ψ¨Ψ’ΩΪ―ΩΨ¨ΩΨ±Ψ―
βοΈΒ¦ ΩΩΨ· Ψ’ΨΆΩΨΊΨ· ΨΉ Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ°Ω ΨͺΨ±ΩΨ― ΨͺΩΩΩΨ°ΩΫββ', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'πΒ¦ Ψ§ΩΨ―ΩΩ β’'] 
], 
[ 
['text'=>'π―Β¦ Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩ β’'],['text'=>'βοΈΒ¦ Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ β’'] 
], 
[ 
['text'=>'πΈΒ¦ Ψ§Ψ³ΩΩ β’'] 
], 
[ 
['text'=>'π’Β¦ ΩΨΉΨ±ΩΩ β’'] 
], 
[ 
['text'=>'πΒ¦ Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ β’'] 
], 
[ 
['text'=>'πΒ¦ Ψ§Ψ°Ψ§ΨΉΨ© β’'] 
], 
[ 
['text'=>'π Β¦ Ψ§ΩΩΨ·ΩΨ± β’'] 
], 
[ 
['text'=>'π‘Β¦ ΩΩΨ§Ψ© Ψ§ΩΩΨ·ΩΨ± β’'],['text'=>'π Β¦ Ψ§ΩΩΨ³Ψ§ΨΉΨ―Ψ© β’'] 
],  
] 
]) 
]); 
}
if($text == "πΒ¦ Ψ§Ψ°Ψ§ΨΉΨ© β’" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π­Β¦ Ψ­Ψ³ΩΩΨ§ Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω Ψ§ΩΩΩΩΨ΄Ω ΩΩΨ§Ψ°Ψ§ΨΉΩ ΩΩΩΨ¬ΩΩΨΉΨ§Ψͺ 
π"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "πΒ¦ Ψ§Ψ°Ψ§ΨΉΨ© β’" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
if($text == "βοΈΒ¦ Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ β’"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π?Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ Ψ§ΩΩΩΨΉΩΨ© Β» $c  βΌ"
    ]);
 }
$id = $message->from->id;
if($text == "πΒ¦ Ψ§ΩΨ―ΩΩ β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "πΈΒ¦ Ψ§Ψ³ΩΩ β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π’Β¦ ΩΨΉΨ±ΩΩ β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π Β¦ Ψ§ΩΩΨ·ΩΨ± β’" and $for == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @$user π¨π½βπ§ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π―Β¦ Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩ β’" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "π―Β¦ ΨΉΨ―Ψ― ΩΨ΄ΨͺΨ±ΩΩΩ Ψ§ΩΨ¨ΩΨͺ :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "πΒ¦ Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ β’"){
$c = count($groups);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ : π 

π₯Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ Ψ§ΩΩΩΨΉΩΩ : $c 
π€Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩ ΩΩ Ψ§ΩΨ¨ΩΨͺ : $m
π‘ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π‘Β¦ ΩΩΨ§Ψ© Ψ§ΩΩΨ·ΩΨ± β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π Β¦   ΩΩΨ§Ψ© ΩΩΨ·ΩΩΨ± Ψ§ΩΩΩΩ : @DEV_1IRAQ βοΈ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π Β¦ Ψ§ΩΩΨ³Ψ§ΨΉΨ―Ψ© β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π―Β¦ ΩΩΩΨ³Ψ§ΨΉΨ―Ψ© Ψ§Ω Ψ§Ω Ψ£Ψ±Ψ§Ψ‘ Ψ§Ω Ψ§ΩΩΨ§Ψ± ΨͺΩΨ§Ψ΅Ω ΩΨΉ ΩΨ·ΩΨ± Ψ§ΩΩΩΩ @M_E_M1BOT β",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "ΨͺΩΨΉΩΩ" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
π?π½Β¦ ΩΨ§Ω Ψ§Ψ­Ψ― Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘ Ψ¨ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
π₯Β¦ $t
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ Β» $chat_id
βοΈΒ¦ ΨΉΨ―Ψ― Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘ Β» γ  $result2  γ ΨΉΨΆΩ π£
π¨π½βπ»Β¦ Ψ¨ΩΨ§Ψ³Ψ·Ψ© Β» $name
πΒ¦ ΩΨΉΨ±ΩΩ Β» @$user
π?
",
]);
}
}
if($text == "Ψ§ΩΨ―ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨΉΨ±ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ§Ψ³ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ¨ΩΨͺ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ£Ψ³ΩΩ Ψ±ΩΨ§Ω ππΈ","ΩΨͺΨ?ΩΩΩΩ Ψ§ΨΉΨ΅Ψ¨ ΩΨ±Ψ―Ψ§ ΨͺΨ±Ψ§ Ψ§Ψ³ΩΩ Ψ±ΩΨ§Ω","Ω±ΩΫ¨ΩΩΫΨͺ Ω±ΩΨ¨ΩΨͺ ΩΫ§ΩΩ± Ω±Ψ΄Ψ·Ψ­Ϋ‘ π ","ΪΩΩ±ΨΉΩο­₯ΪͺΩ Ψ΄Ψ¨ΩΩΨΉΩΩ ΩΩ ΩΨ±Ψ― ΩΩ±ΩΨͺ Ψ¨ΩΩΨΉΩΨ―Ϊͺ ο­₯Ψ΅ΩΨ­ Ψ¨ΩΩΩΨͺ ππ€£","ΩΩ Ω±ΩΫ¨ΩΩΫΩΫ§ Ω±Ψ­Ϋ‘Ψ¨Ω Ψ΅ΩΫ§Ψ­Ϋ‘ΩΩΫ§ Ψ¨Ω±Ψ³ΫΩΫΩΫ§ Ψ±ΩΨ§Ω","ΩΫ§ΩΫΨΉΩΨ― Ψ΄ΨͺΨ±ΩΫ§Ψ― ΩΫΩΨΉΨͺ Ω±Ψ°ΩΫ¨ΩΩΫΩΫ§ΨπΨΆ","Ψ§Ψ³ΩΩ Ψ±ΩΨ§Ω"
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΨ΄ Ψ§ΩΨ­ΩΩ ΨΆΨ§ΩΨ¬ β€οΈπ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π³"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨ§ Ψ¨Ψ³ ΩΨ§ Ψ΄ΩΨͺ Ψ?Ψ§ΩΨͺΩ Ψ§ΩΨ΄ΩΨ±Ω π³πΉπ·",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π­"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨͺΨ¨Ψ¬Ω Ψ­ΩΨ§ΨͺΩ π­π­",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π‘"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§Ψ¨Ψ±Ψ―  π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩΩΩΜΜ· Ψ₯Ψ’ΩΩΨ­ΩΩβ€ΩΩΨ¨ ΩΩΩΩΩΜΜ· β€οΈπ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π»π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ·Ψ¨Ψ¨ ΩΨ³Ψ§ΩΩ Ψ¬ΩΩ ΨΉΩΨ¨ π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "βΉοΈ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨΆΩΨ¬ Ψ­Ψ¨ΩΨ¨Ω π’β€οΈπ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩΩΨ§Ψͺ ππΉ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨ­"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨ­Ψ§Ψͺ Ψ­ΩΨ§ΨͺΩπβ€",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΨͺΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΨΉΩΨ¨ Ψ§Ψ¨ΩΩ/Ψ¨ΨͺΩ Ψ§ΨͺΩΩ/Ω Ψ§ΩΨ¨Ψ± ΩΩΩΨ§ Ψ΄ΩΩΨ© ππΉ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΨͺΨ?ΩΩΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§Ψ?ΩΩΩ Ψ¨Ψ²Ψ§ΩΩΩ 380 Ψ―Ψ±Ψ¬Ω ΩΨ§ΩΨͺΩ ΨͺΨΉΨ±Ω Ψ§ΩΨ¨Ψ§ΩΩ πΈ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ§ΩΨ±ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ―ΩΩΩ Ψ΄ΩΩΩ Ψ§Ψ·ΩΩ Ψ?ΩΩΨͺΩ Ψ§ΩΩπΎππΏπ·",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ¨Ψ§Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ¨Ψ§ΩΨ§Ψͺ Ψ­ΩΨ§ΨͺΩ π $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ²Ψ§Ψ­Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ²Ψ§Ψ­Ω ΨΉΩΩ Ψ?Ψ§ΩΨͺΩ Ψ§ΩΨ΄ΩΨ±Ω π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨ§Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩΩ ππΏ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ΄ΩΩ ΩΨ§ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΨΊΩΨ±Ω/Ψ¬ Ψ¨Ω ΩΩΨ¨ ΩΨ§ΩΩ ΩΨ¨ΨΉΨ― ΩΩΨ¨Ωπβ€οΈοΈ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ΄ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΨ΄Ω ΩΩΩΨ§Ψ΄ΩπΈΨͺΪ―ΩΩΩ ΨΉΨ¨Ψ§ΩΩ Ψ§Ψ­ΩΩΨ© Ψ¨Ψ§ΩΨ΄ΩΨ±Ψ¬ΩΨ©π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨΉΨ²ΩΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ·Ψ±Ψ·Ψ§Ψ§ Ψ·Ψ±Ψ·Ψ§Ψ§ Ψ·Ψ±Ψ·Ψ§Ψ§ ππ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ²Ψ§Ψ­ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩ Ψ²Ψ§Ψ­ΩΨͺΩΩ Ψ¬Ψ§Ω ΩΨ§ΩΩΨͺ Ψ²Ψ§Ψ­ΩΩ ππΈ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ­ΩΩΨ΄"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§ΩΩΨ΄ Ψ±Ψ§Ψ³Ω π€",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΨΆΩΨ¬Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ΄Ω Ψ§ΩΩΨ― Ψ§ΩΩΨ¨Ω ΩΨ§ΩΩ π ΩΩ Ψ¨ΨΉΨ―Ω/Ψ¬ ΩΨ§Ψ²Ψ§Ψ­Ω/Ψ© ππ",
'reply_to_message_id'=>$message->message_id, 
]);
}
$message_id = $update->message->message_id;
if($text == "Ψ§ΩΨ±Ψ§ΩΩ Ψ―ΨΉΨ§Ψ‘"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§ΩΩΨ―Ψ±Ψ³ΩΩ π’ ΩΩΩΩ Ψ§ΩΨ§Ψ­ΩΨ§Ψ‘ ΩΨ§ΩΨ§ΩΩΨ§Ψͺ π­π₯ Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ§ΩΩΩΩΨ²Ω π­π ΩΩΩΨ±Ψ¨ΩΨ§ Ψ¨ΩΨͺΩΨ§Ψ± Ψ§ΩΨ±Ψ¦ΩΨ³Ω π Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ±ΩΨ§ΨΆΩΨ§Ψͺ ΩΨ­ΩΩΩΨ§ Ψ§ΩΩ ΨΊΨ³Ψ§ΩΩ Ψ¨Ψ·Ψ§ΩΩΨ§Ψͺ π Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ§Ψ³ΩΨ§ΩΩΩ ΩΨ§Ψ¬ΨΉΩΩΨ§ Ψ¨Ψ§Ψ¦ΨΉΨ© Ψ§ΩΨ΄Ψ§ΩΩΩ π­π Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨΉΨ±Ψ¨Ω ΩΨ­ΩΩΩΨ§ Ψ§ΩΩ Ψ¨Ψ§Ψ¦ΨΉΩ Ψ§ΩΨ¨ΩΨ¨Ω Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ¬ΨΊΨ±Ψ§ΩΩΩ ΩΨ§Ψ¬ΨΉΩΩΨ§ ΩΩΨ―Ψ¬Ψ§Ψ¬Ω Ψ§ΩΨ­Ψ§ΩΩΨ© Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨͺΨ§Ψ±ΩΨ? ΩΨ²Ψ­ΩΩΩΨ§ Ψ¨ΩΨ΄Ψ±Ω ΩΩ Ψ§ΩΨ¨Ψ·ΩΨ? ΩΨ§Ψ±Ψ³ΩΩΨ§ Ψ§ΩΩ Ψ§ΩΩΨ±ΩΨ? Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ§Ψ­ΩΨ§Ψ‘ ΩΨ§Ψ¬ΨΉΩΩΨ§ ΩΩ ΩΩΩΩΨ§Ψ‘ Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§ΩΩΨΉΨ§ΩΩ Ψ§ΩΨͺΩΩ Ψ¨ΩΩΨ―Ψ±Ψ³Ω Ψ¨ΩΨ§ΩΩ πππ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'Ψ±ΩΨ§Ω'){
$rand = array('Ψ³ΩΩΨͺ ΩΩΨ§Ω Ψ΄ΨΊΩΨ§Ψͺ Ψ³Ψ?ΩΩΩ Ψ¨Ψ­ΩΨ§ΨͺΩ Ψ¨Ψ³ ΨΉΩΨ±Ω ΩΨ΅Ψ­Ψͺ ΨΉΩΩ ΩΨ§Ψ­Ψ― ΩΩΩΨͺΩΩ Ψ§ΩΨ¬Ψ¨ π','ΩΨΉΩ Ψ­Ψ¨Ω π','Ψ§Ψ΄ΨͺΨΉΩΩ Ψ§ΩΩ Ψ±ΩΨ§Ω Ψ΄ΨͺΨ±ΩΨ― π ','ΩΩ ΩΨ―Ψ§Ω Ψ±ΩΨ§Ω Ψ­Ψ¨ΩΨ¨Ω Ψ§ΩΨͺ Ψ§ΩΩΩΩΨ­ π','Ψ¨ΩΩΩΩΩΩΩΩΩ π» ΩΨ§ ΩΨ§ ΩΨ²ΩΨͺ Ψ΄ΩΨͺΩ Ψ΄ΩΨͺΩ ΩΨ§ ΨͺΨ­ΩΩ π','ΩΩΨ§ΨͺΩΩ Ψ§Ψ¬ΩΨͺ πβ€οΈ','Ψ±Ψ§Ψ¬ΨΉ Ψ§ΩΩΩΨͺΨ¨ Ψ­Ψ¨ΩΨ¨Ω ΨΉΨ¨Ψ§ΩΩ Ψ±ΩΨ§Ω Ψ³ΩΩ ΨͺΨ­Ψ¬Ω ΩΩΨ§ π','Ψ¨Ψ§ΩΩ ΩΩΨͺΩΨ―Ψ― π','ΩΩ Ψ―Ψ¨Ψ―Ω ΩΩΨ§Ψ¨Ψ³Ω Ψ§Ψ·ΩΨΉ Ψ¨Ψ±Ψ§Ψ§Ψ§Ψ§Ψ§ π΅π‘ ΩΨ§Ψ³ ΩΨͺΨ³ΨͺΨ­Ω','Ψ―Ψ§ Ψ§Ψ΄Ψ±Ψ¨ Ψ¬Ψ§Ω ΨͺΨΉΨ§Ω ΨΊΩΨ± ΩΩΨͺ π','ΩΩΩ ΨΊΩΨ± ΩΨ³ΩΨͺ ΨΉΨ§Ψ― ΩΨ§ Ψ΄ΨͺΨ±ΩΨ― π·','Ψ§ΩΨͺ ΩΩ Ψ§Ψ¬ΩΨͺ Ψ§ΩΨ¨Ψ§Ψ±Ψ­Ω ΨͺΨΊΩΨ· ΨΉΩΩΩ βπΏπ','ο?¬ΜΜ²Ω± Ψ­ΩΩ±ΨͺΜ²Ω Ω±ΩΩΨ±Ωο»§Μ²ΩΩ π₯°','ΨΉΩΫ§ΩΩΫ¨ΩΩΫ Ψ±ΩΨ§Ω ΨͺΩΨΆΩΨΨππ₯°','ο?¬ΜΜ²Ω± Ψ­ΩΩ±ΨͺΜ²Ω Ω±ΩΩΨ±Ωο»§Μ²ΩΩ π₯°','ΩΜΩΨ¬ΩΨ―Μ Ψ¨Ψ³ΜΜ ΩΨͺΨ΅ΜΜΩΨ­Μ πΩ ','Ψ±Ω±Ϊ Ϊ»ΩΩο­  ο­Ϊ³ΩΨ±ΩΪ»Ω± ΩΪ»ο­ ΩΩο?§ ο­Ψο?Ϊ³ ο­ ΪΩΩΩΪΨ ΩΩΨ±Ω');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($text == "ΩΩ"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"Ψ¨Ψ³ ΩΨ§ ΩΩΨ§Ψ­ ΩΨ§ ΨΉΨ±Ω ππ¦",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ­Ψ¨ΩΨ¨Ω"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"ΩΫΨ±ο―Μ²Ψ­ΫΩ Ψ’ΩΫΨͺ/ Ω π₯°",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ­Ψ¨ΩΨ¨ΨͺΩ"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"ΩΨ΄ΨΊΩΩΩ ΩΩΨ§ Ψ§ΩΩΨ¨Ψ― ππ·",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ§Ω"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"Ψ¬Ψ§Ω Ψ§ΩΩ ΩΨ΄ Ψ³Ψ§ΩΨΉ ππ€€",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "Ψ§ΩΩΩ"){
bot("sendMessage",[
 "chat_id"=>$chat_id, 
 "text"=>"ΩΩΨ·ΨΉΩΩππ",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "Ψ±ΩΨΉ ΩΨͺΩΨ­Ψ―"  || $text == "Ψ±ΩΨΉ ΩΨͺΩΨ­Ψ―Ω" and"$from_id"==$sudo|| in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
  'text'=>" β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩ ΩΨ§Ψ¦ΩΩ Ψ§ΩΩΨͺΩΨ­Ψ―ΩΩ ΩΨ§ΩΩΨ±ΨΆΩ Ψ§ΩΩΩΨ³ΩΩΩ
β Ψ±Ψ§Ψ­ ΩΨ¬Ψ¨ΩΩ Ψ―ΩΨͺΩΨ± ΩΩΨ³Ψ§ΩΩ
β
", parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot("sendMessage",["chat_id"=>$chat_id,
       'text'=>"β Ψ§ΩΨΉΨΆΩ [$re_name] ΩΨͺΩΨ­Ψ― Ψ¨Ψ§ΩΩΨΉΩ
β ΩΩΨͺΨΉΨ§ΩΨ¬ ΩΨΉ Ψ―ΩΨͺΩΨ± ΩΩΨ³Ω Ψ§ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΨ­Ψ―"  || $text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΨ­Ψ―Ω" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot("SendMessage",['chat_id'=>$chat_id,
  'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨͺΩΨ­Ψ―ΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§Ψ΅Ψ¨Ψ­ Ψ§ΩΨ§Ω Ψ­Ψ± Ψ·ΩΩΩ ΩΨΉ Ψ§ΩΨΉΩΩΨ§Ψ‘
β
",'parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ²ΩΨ¬ΨͺΩ"   $text == "Ψ²ΩΨ§Ψ¬" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"β ΨͺΩ Ψ²ΩΨ§Ψ¬Ω Ψ¨ $re_name Ψ¨Ψ§Ψ±Ω Ψ§ΩΩΩ ΩΩΩΨ§
β ΩΩΨ§ Ψ§ΨͺΩΨΆΩΩ Ψ§ΨΉΩΩΩ ΩΨ§Ψ­Ψ― Ψ¨Ψ³ ΩΨ΄ ΩΩ Ψ§ΩΨ±ΩΩ
β
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΨ²ΩΨ¬Ω ΩΩ ΩΨ¨Ω 
β Ψ§Ψ³Ω ΩΨ΅Ψ­Ψ¨Ω ΩΩ Ψ΄Ψ¦ ΩΨ³ΩΩ ΩΩΨ΅ΩΨ¨
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ²ΩΨ¬ΨͺΩ"   $text == "Ψ·ΩΨ§Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨͺΨ²ΩΨ¬Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ ΩΨ§Ψ΅Ψ¨Ψ­Ψͺ Ψ·ΩΩΩΩ
β Ψ·ΩΩΨͺΩΨ§ ΨΉΨ΄Ψ§Ω ΩΨ¨ΨͺΨΉΨ±ΩΨ΄ Ψ΅Ψ­
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨͺΨ²ΩΨ¬Ω Ψ§Ψ΅ΩΨ§
β Ψ§ΩΨ­Ω Ψ§Ψ?Ψ·Ψ¨ΩΨ§ Ψ¨ΩΨ§ ΩΨ¨Ω ΩΨ§ΨͺΨͺΨ΄ΩΨ·
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΨΊΨ¨Ω"   $text == "Ψ±ΩΨΉ ΨΊΨ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΨΊΨ¨Ω ΩΩ Ψ§ΨΊΨ¨ΩΨ§Ψ‘ Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β ΩΩΩΩΩΩ ΩΩΨ·ΩΨ§ Ψ¨Ψ³ΩΨ§ΨͺΩ
β", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΨΊΨ¨Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ­Ψ§Ψ¨Ψ³ΩΩΩ Ψ¬ΩΨ§ ΩΩΨ§ΨͺΩ ΩΨ§ΨΆΨ­Ω
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΨΊΨ¨Ω"   $text == "ΨͺΩΨ²ΩΩ ΨΊΨ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ§ΨΊΨ¨ΩΨ§Ψ‘ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΩΩΨ΄ Ψ§ΩΩΩΨ±ΩΨΆ ΩΩΨ²Ω Ψ―Ω ΩΨ³Ω ΨΊΨ¨Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΨΊΨ¨Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ­ΩΨ§Ψ±"   $text == "Ψ±ΩΨΉ Ψ­ΩΨ§Ψ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΨ§Ψ± Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β Ψ­Ψ― ΨΉΨ§ΩΨ² ΩΨ±ΩΨ¨Ω ΩΩΨ§Ψ?Ψ― ΩΩΩΨΨ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"[β Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΨ§Ψ± Ψ¨Ψ§ΩΩΨΉΩ 
β Ψ¨Ψ³ ΩΩ ΩΩ Ψ§ΩΨΊΩΨ· ΩΨ΄ ΩΨ§ΨΆΩ Ψ§ΩΩΩΨͺΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ­ΩΨ§Ψ±"   $text == "ΨͺΩΨ²ΩΩ Ψ­ΩΨ§Ψ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ­ΩΩΨ± Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω ΩΨ?ΩΩ Ψ§ΩΩΩ ΩΨ­ΨͺΨ±ΩΩ
β

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ­ΩΨ§Ψ± Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨ±ΩΨ―
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ¨ΩΨ±Ω"   $text == "Ψ±ΩΨΉ Ψ¨ΩΨ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΨ¨ΩΨ±Ω Ψ§ΩΨ­ΩΩΨ¨Ω 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ¨ΩΨ±Ω Ψ¨Ψ―ΩΨ§ ΩΨ¨Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨ±Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΨ­ΩΨ¨ ΩΩ Ψ§ΩΨ²Ψ±ΩΨ¨Ω ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ±Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ¨ΩΨ±Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ?Ψ― Ψ§ΩΩΨ¨Ω Ψ¨ΨͺΨ§ΨΉΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¨ΩΨ±Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ±Ψ―"   $text == "Ψ±ΩΨΉ ΩΨ±Ψ―Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΩΨ¨ Ψ¬ΩΨ±ΩΩ 
β ΩΨ§ΩΩΨ¨Ω ΩΨ¬ΩΨ§ΨΉΩ Ψ§ΩΩΩ ΨΉΩΨ―Ω ΨΉΨΆΩΩ ΩΨ―ΩΨ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ±Ψ― Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΨ±Ψ­Ψ§Ω Ψ¨Ψ§ΩΩΩΨ²Ω Ψ§ΩΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ―"   $text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ―Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ±ΩΨ― Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩ ΩΨ΄Ψ± Ψ§ΩΩΩΨ² Ψ¨ΨͺΨ§ΨΉΩ ΩΩΨ§
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ±Ψ― Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β
"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΩΨ¨"   $text == "Ψ±ΩΨΉ ΩΩΨ¨Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΩΨ¨ Ψ¬ΩΨ±ΩΩ 
β ΩΨ§ΩΩΨ¨Ω ΩΨ¬ΩΨ§ΨΉΩ Ψ§ΩΩΩ ΨΉΩΨ―Ω ΨΉΨΆΩΩ ΩΨ―ΩΨ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ¨ Ψ¨Ψ§ΩΩΨΉΩ 
β Ψ¨Ψ³ Ψ¨ΩΩΨ΅ΩΨ΅ ΩΩ Ψ§ΩΨΉΨΆΩΩ ΩΨ΄ ΩΨ§ΨΆΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΩΨ¨"   $text == "ΨͺΩΨ²ΩΩ ΩΩΨ¨Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΩΨ§Ψ¨ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§Ψͺ Ψ§ΩΨΉΨΆΩΩ ΨΉΨ΄Ψ§Ω ΩΨ―ΩΩΨ§ ΩΨ­Ψ― ΨΊΩΨ±Ω
β

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΩΨ¨ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΨΉΨ±Ω"   $text == "Ψ±ΩΨΉ ΨΉΨ§Ψ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ±Ω Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β ΩΨ΄ ΨΉΩΨ¨ Ψ§ΩΨ§ ΨͺΩΩΩ ΨΉΨ±Ω ΩΨ―Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ±Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΨ?ΨͺΩΩ ΨΉΩΩ ΩΩΨ§Ω ΩΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΨΉΨ±Ω"   $text == "ΨͺΩΨ²ΩΩ ΨΉΨ§Ψ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨΉΨ±Ψ± Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ΄ ΨΉΨ§Ψ±Ω Ψ§ΩΩΨ§Ψ³ ΩΨͺΨ±Ψ¬ΨΉ ΨͺΨ­ΨͺΨ±ΩΩ ΨͺΨ§ΩΩ ΩΩΨ§ ΩΨ§
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΨΉΨ±Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ±Ψ³Ω"   $text == "Ψ±ΩΨΉ Ψ΅Ψ§Ψ±ΩΨ?" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΩΨ±Ψ³Ω Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΩΩΩΩΩΩΩΩΩΩΩ Ψ΅Ψ§Ψ§Ψ§Ψ±ΩΨ? ΩΨ§ΩΨ§Ψ³
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ±Ψ³Ω Ψ¨Ψ§ΩΩΨΉΩ 
β Ψ§ΩΩ ΩΨ±Ω Ψ§Ψ΄ΩΩ ΩΨ±Ψ³Ω Ψ΄Ψ¨Ω Ψ§ΩΨ­ΩΨ§Ψ±
β
"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ³Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ΅Ψ§Ψ±ΩΨ?" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ±Ψ³Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§Ψ§Ω ΩΨ§ΩΨͺ ΩΨ±Ψ³Ω Ψ¬Ψ§ΩΨ―Ω Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ±Ψ³Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ¨ΩΩΨ¨Ω"   $text == "Ψ±ΩΨΉ Ψ¨ΩΩΨ¨Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΩΨ¨Ω ΩΨ―Ω ΩΩΨ―Ω 
β ΩΩΨ΄ Ψ¨ΨΉΨ― ΩΩΩΩΩ ΩΩΩΩΩΨ΄ ΩΨ΄Ψ­ΩΨ±ΩΩ Ψ¨ΨΉΨΆ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΩΨ¨ Ψ­Ψ― ΨΊΩΨ±Ω 
β Ψ§ΩΩΨ§ΨΆΨ­ Ψ§Ω Ψ§ΩΨ΄Ψ?Ψ΅ Ψ―Ω ΩΨ­Ψ¨ΩΨ¨ Ψ¬Ψ―Ψ§Ψ§
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ³ΨͺΩ"   $text == "Ψ¨ΩΨ³ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨ³ΨͺΩ 
β Ψ§ΨͺΩΩΩ ΩΩΩΩΩΩΩΨ§Ψ―Ψ§ ΩΨ§Ψ­ΩΩ Ψ¨ΩΨ³ΨͺΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨ³Ψͺ ΩΨ΄Ψ?Ψ΅ ΨͺΨ§ΩΩ 
β Ψ―Ψ§ΩΩΨ§ Ψ¨ΨͺΩΨ¬Ω ΩΨͺΨ£Ψ?Ψ± ΩΨ§ΩΩΨ§Ψ²
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ³ΨͺΩ"   $text == "ΩΩΨ³Ψͺ Ψ¨ΩΨ³ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ¨ΩΨ³ΨͺΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ§ΩΩ ΩΩΨ¨ΨͺΨ―Ω ΩΨ¬Ψ±Ψ­ ΩΩ Ψ¨ΨΉΨΆ Ψ¨ΩΨ§
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¨ΩΨ³ΨͺΩ Ψ§Ψ΅ΩΨ§
β ΩΨ΄ Ψ§Ω Ψ§ΨͺΩΩΩ ΩΨ¨ΩΩ Ψ¨ΩΨ³ΨͺΨ§Ψͺ Ψ¨Ψ§ΩΨ³Ψ§ΩΩ ΩΨ§Ψ΅Ψ­Ψ¨Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨͺΨ?Ψ²ΩΩ"   $text == "Ψ±ΩΨΉ ΩΨͺΨ?Ψ²ΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΨͺΨ?Ψ²ΩΩ Ψ§ΩΨ­Ψ²ΩΩ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨͺΨ?Ψ²ΩΩ ΩΨ³ΨͺΩΩΨ― ΩΩ Ψ?Ψ¨Ψ±ΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΨ?Ψ²ΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨ¨ΩΩ ΨΉ Ψ§Ψ­Ψ²Ψ§ΩΩ Ψ§ΩΩΩ Ψ¨Ψ§ΩΩΨ§ΩΩ ΩΨ§Ψ§Ω
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨͺΨ?Ψ²ΩΩ"   $text == "ΨͺΩΨ²ΩΩ ΩΨͺΨ?Ψ²ΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨͺΨ?Ψ²ΩΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω ΩΨ­ΨͺΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨͺΨ?Ψ²ΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ?Ψ§ΩΩΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΨΉΨ¨ΩΨ·"   $text == "Ψ±ΩΨΉ ΨΉΨ¨ΩΨ·Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ¨ΩΨ· ΩΨ§ΩΨ¨Ω 
β ΩΨ§Ψ±Ψ¨ Ψ§Ψ³ΨͺΨ±ΩΨ§ ΩΨΉΨ§Ω Ψ§Ψ΅Ω ΩΩ ΨΉΨ¨ΩΨ·
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ¨ΩΨ· Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΨΉΨ§ΩΨ¬ ΨΉ ΩΩΩΨ© Ψ§ΩΨ―ΩΩΩ
β"
    ]);
  }
}

$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΨΉΨ¨ΩΨ·"   $text == "ΨͺΩΨ²ΩΩ ΨΉΨ¨ΩΨ·Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨΉΨ¨Ψ· Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ§ΩΨͺ Ψ¨ΩΩΨͺ Ψ§ΨΉΩΩ ΩΨ§Ψ­Ψ―
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΨΉΨ¨ΩΨ· Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΩΨ²Ψ¦ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩΩ"   $text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩΨ§Ψͺ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΨ?Ψ§ΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ?Ψ§ΩΩΩ ΩΨΆΨ­ΨͺΩΩΨ§ ΩΩΩΩΨͺΩ ΨΉΩΩΩΨ§ Ψ§ΩΩΨ§Ψ³
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ?Ψ§ΩΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΩΨͺ ΨΉΩΩΩΨ§ Ψ§Ω ΩΨ³ΩΩ ΩΩΨ§ΩΨ³ΩΨ§Ψ΄
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩΨ§Ψͺ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ?Ψ§ΩΩΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉ Ψ?ΩΨ§Ψ΅ Ψ³Ψ§ΩΨ­ΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ?Ψ§ΩΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩΨ§ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΨ²ΩΨ¬Ψ§Ψͺ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩ"   $text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΨ?Ψ§ΩΩ ΩΩΩΩ Ψ§ΩΨ§Ψ΅Ω 
β ΨͺΨΉΨ§ΩΩ Ψ¨ΩΩΨ§Ψ―Ω ΨΉΩΩΩ ΩΨ§Ψ?Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ?Ψ§ΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΩΨ§Ω ΩΩ ΩΨ±Ψ§ΨͺΩ ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ?Ψ§ΩΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉ Ψ?ΩΨ§Ψ΅ Ψ³Ψ§ΩΨ­ΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ?Ψ§ΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΨ²ΩΨ¬ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ²ΩΨ¬Ω"   $text == "Ψ±ΩΨΉ Ψ²ΩΨ¬Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ²ΩΨ¬Ω Ψ­Ψ¨ΩΨ¨Ω 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ²ΩΨ¬Ω ΩΩΨΆΩ Ψ΄ΩΨ± Ψ§ΩΨΉΨ³Ω ΩΩ ΩΨ§Ψ±ΩΩΨ§ 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ²ΩΨ¬ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ?Ψ§Ψ±Ψ¨ΩΨ§ Ω ΩΨ§Ψ±ΩΩΨ§ ΩΨ§Ψ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ²ΩΨ¬Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ²ΩΨ¬Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΨ§Ψ¦ΩΨ© Ψ²ΩΨ¬Ψ§ΨͺΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§ Ψ·ΩΩΩΩ Ψ?Ψ― Ψ§ΩΨ―ΩΨ¨ Ψ¨ΨͺΨ§ΨΉΩ ππ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¬ΩΨ²Ω Ψ§Ψ΅ΩΨ§
β ΩΩΨ§ Ψ§ΩΨͺΩ ΩΨ³ΩΨͺΩΩΩ ΩΩ ΩΨͺΨ±ΩΩ ππ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ¨ΩΨͺΩ"   $text == "Ψ±ΩΨΉ Ψ¨ΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨͺΩ ΩΩΩ ΨΉΩΩΨ§ 
β ΨͺΨΉ ΩΨ¨ΩΨͺΩ Ψ΄ΩΩΩ Ψ¨Ψ§Ψ¨Ψ§ ΨΉΨ§ΩΨ² Ψ§Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨͺΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨͺΨΉΩΨ΄ ΩΩ ΨͺΨ¨Ψ§Ψͺ ΩΩΨ¨Ψ§Ψͺ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨͺΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ¨ΩΩΨͺΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ§ΩΨͺΩ Ω Ψ§ΩΩΩΨ§Ψ±Ψ―Ω ΩΨ§ Ψ¨ΩΨͺΩ ΩΩΨ§ Ψ§ΨΉΨ±ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¨ΩΨͺΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩΩΨ§ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΩΨ­Ψ―ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ§Ψ΄Ω"   $text == "Ψ±ΩΨΉ ΩΨ§Ψ΄Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΨ§Ψ΄Ω Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨ§Ψ΄Ω ΩΨ³ΩΨ¨ Ψ§ΩΩΨͺΨ§Ψ¨ ΩΨ―Ω ΩΨ―Ω ΩΨͺΨ³ΩΨ·
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ§Ψ΄Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΩΩΩ Ψ§Ψ΅ΩΨ§Ψ± ΩΩ ΩΩ Ψ§ΩΩΩΨ§Ψ―
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ§Ψ΄Ω"   $text == "ΨͺΩΨ²ΩΩ ΩΨ§Ψ΄Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ΄ΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ?Ψ― ΩΨͺΨ§Ψ¨Ω Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ§Ψ΄Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ§ΨΊΨ¨ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ―ΩΨ±Ω"   $text == "Ψ±ΩΨΉ Ψ―ΩΨ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ―ΩΨ±Ω ΩΨ§Ψ¨Ω ΨΉΩΨ§ΩΩ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ―ΩΨ±Ω Ψ§Ψ―Ω Ψ§Ψ¨ΩΩΨ§ Ψ¨ΩΩΨ§Ψ―Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ―ΩΨ±Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§Ψ―Ω ΩΨ·ΩΨΉ ΨΉΩΩΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ―ΩΨ±Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ―ΩΨ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ―ΩΩΨ± Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ?Ψ― Ψ§Ψ¨ΩΩ Ψ§Ψ―Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ―ΩΨ±Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ§ΨΊΨ¨ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ§Ψ¨ΩΩ"   $text == "Ψ±ΩΨΉ Ψ§Ψ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§Ψ¨Ω Ψ¨ΩΨͺ Ψ¨ΩΨͺΩ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ¨ΩΩ ΩΨ§ΨͺΩΩΨ§ Ψ΄Ψ§Ω Ψ§Ω Ψ­Ψ³Ω 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ§Ψ¨ΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§ΩΨ§Ω Ψ²ΩΩΨͺ ΩΩΩ ΩΩΩΨ―ΩΩ Ψ―Ψ§Ψ± Ψ§ΩΨͺΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ§Ψ¨ΩΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ§Ψ¨ΩΨ§Ψ‘ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩΩΩ ΩΩΨ¨Ω Ψ¨ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ§Ψ¨ΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨ§Ψ¬Ψ¦ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ·ΨͺΩ"   $text == "Ψ±ΩΨΉ ΩΨ·ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΩΨ·ΨͺΩ ΩΩΩ ΨΉΩΩΨ§ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨ·ΨͺΩ ΩΨ΄ΨͺΨ±Ω ΨͺΩΩΩ ΩΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ·ΨͺΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΨͺΨ§ΩΩ Ψ§Ψ­ΩΩ Ψ³ΩΩ ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ·ΨͺΩ"   $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ·Ψ· Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§ΨͺΩ ΨΉΩΨ¨Ψ· Ψ§ΩΨͺΩΩΩ Ψ¨ΨͺΨ§ΨΉΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ·ΨͺΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩΨ§ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ§ΩΨ§Ψͺ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨͺΩΩ"   $text == "Ψ±ΩΨΉ ΩΨͺΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΩΨͺΩ Ψ¨ΩΨ¬Ψ§Ψ­β€οΈ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨͺΩΩ ΩΨ³Ψ§ΩΨ± Ψ¨Ψ±Ω ΩΨ΅Ψ±
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§ΩΩΩ Ψ¨ΩΩΨ±Ψ§Ψ΄ ΨΉΩΩΩΨ§ Ψ?Ψ― Ψ¨Ψ§ΩΩ ππ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΩ"   $text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΨͺΩΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩΩΩ ΩΩΨ¨Ω Ψ§Ψ¬Ψ±Ω ππ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ§ΩΨͺΨ΄ ΩΨͺΩΨͺΩ Ψ§Ψ΅ΩΨ§
β Ψ¨Ψ·ΩΩ ΩΨ―Ψ¨ Ψ¨ΩΩ ππ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ±ΩΨ§Ψ΅Ω"   $text == "Ψ±ΩΨΉ Ψ±ΩΨ§Ψ΅Ψ©" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ±ΩΨ§Ψ΅Ω Ψ¨ΩΨ¬Ψ§Ψ­β€οΈ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ±ΩΨ§Ψ΅Ω ΩΩΩΨ·Ω Ψ¨Ψ§ΩΨ―ΩΩΨ§Ψ±Ψ§Ψͺ 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ±ΩΨ§Ψ΅Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§ΩΩΩ ΨΉΩΩΩ ΨΉΩΩΩΨ§ Ψ?Ψ― Ψ¨Ψ§ΩΩ ππ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ±ΩΨ§Ψ΅Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ±ΩΨ§Ψ΅Ψ©" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΨ§Ψ¦ΩΨ© Ψ§ΩΨ±ΩΨ§Ψ΅Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩΩΩ ΩΩΨ¨Ω Ψ§Ψ¬Ψ±Ω ππ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ§ΩΨͺΨ΄ Ψ±ΩΨ§Ψ΅Ω Ψ§Ψ΅ΩΨ§
β Ψ¨Ψ·ΩΩ ΩΨ―Ψ¨ Ψ¨ΩΩ ππ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΩΨ²Ψ‘"   $text == "Ψ±ΩΨΉ ΩΩΨ²Ψ‘Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΩΨ²Ψ‘ Ψ§ΩΩ Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΩΨ²Ψ‘ ΩΨ§ΩΩΩ Ψ¬Ψ§ΩΨ¨ΩΩΨ§ Ψ§ΩΩΩΨ§Ω 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ²Ψ‘ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΩΨ§Ω ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΩΨ²Ψ‘"   $text == "ΨͺΩΨ²ΩΩ ΩΩΨ²Ψ‘Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΩΨ²Ψ¦ΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ§ΩΨͺ Ψ¨ΩΩΨͺ ΨΉΨ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΩΨ²Ψ‘ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ§ΨΊΨ¨ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ­ΩΩΨ§Ω"   $text == "Ψ±ΩΨΉ Ψ­ΩΩΨ§ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΩΨ§Ω ΩΨ±Ψ² Ψ§ΩΩ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ Ψ¬ΩΩΩΨ© Ψ§ΩΨ­ΩΩΨ§ΩΨ§Ψͺ ΩΨ³ΨͺΩΩΨ§Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΩΨ§Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΨͺΨ­Ψ―Ψ« ΩΩ Ψ―Ψ§Ψ?Ω Ψ§ΩΨ­Ψ―ΩΩΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ­ΩΩΨ§Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ­ΩΩΨ§ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ­ΩΩΨ§ΩΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ?Ψ― ΨΉΩΩΩ Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ­ΩΩΨ§Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΩΨ§Ψͺ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;

$hi = array('ΩΩΨ§ ΨͺΨ§Ψ¬ Ψ±Ψ§Ψ³Ω π€·πΌββοΈ ', 
'ΩΩΨ§ Ψ­Ψ¨ΩΨ¨Ω Ψ¦ΩΨͺΩ ΩΩΨ― ΩΩ Ψ¨ΩΩΩ ',
 'Ψ§Ψ¬Ω ΩΩΩ Ψ¨Ψ§ΩΨΆΩΨΉ π', 
'ΩΩΩ ΩΩΨ¨Ω π',
 'ΩΩΩΨ§Ψͺπ€', 
'ΩΨ§ΩΩ ΩΨ¨Ω Ψ΄ΩΩΩ Ψ³ΩΩΨͺπ', 
'ΩΩΩ Ψ¨Ψ±ΩΨ­Ω ΩΩΩπ€', 
'ΩΩΩΨ§Ψͺ Ψ§Ψ°Ψ§ ΨΉΩΨ―Ω ΩΨ±ΩΨ¨Ψ§Ψͺ ΨΆΩΩΩΩπ€·πΌββοΈβ€οΈ',
'ΩΨͺΨ΄ΩΨ± Ψ§ΩΩΩΩ ΩΨͺΨ·ΩΨ± π',
'ΩΩΩ ΩΨ§Ψ?ΩΨ±Ψ§ ΩΩΩΨͺΩ βΉοΈ',
'ΩΩΨ§ ΩΩΨ¨Ω Ψ΄ΩΩΩΩ π',
'ΩΩΩΨ§Ψͺ Ψ?ΩΩ Ψ΄ΩΩΩΩ π€·πΌββοΈ',
'ΩΩΨ§ Ψ¨ΩΩ π€',
'Ψ΄ΩΩΩΩ Ψ§Ψ?Ψ¨Ψ§Ψ±Ω π',
'Μ²Ω°ΪΎΩΫΩΝΨ’ΩΩΩΩΨ’ΩΩΨͺΩ°Μ²ΫΩ°Ω°βββ βΎβ£βΏπΌπββ₯',);
$reply_hi = array_rand($hi, 1);

$ho = array('ΨΉ Ψ­Ψ·Ψͺ Ψ§ΩΨ―Ω ΩΨ§ΩΩ ΨͺΨΊΩΩΨ± Ψ΄Ψ³ΩΩ Ψ―ΩΩΩ π€·πΌββοΈ', 'ΩΨͺΨͺ ΩΩ Ψ§ΩΨ²ΩΨ§Ψ­Ω ΩΩΨͺΩΩΩ ΩΨ§ΩΩΩπ­' , 'ΩΩΩΩ ΩΨ«Ω ΩΩΩΩ ΩΨ§ΩΩ ΨͺΨ³Ψ¦Ωπ', 'ΩΩΨ§ Ψ¨ΩΩ ΨͺΩΨ§Ω ΩΩΨͺΩπ€',  'ΩΩΨ΄ ΨͺΨ³Ψ¦Ωπ‘ ', 'Ψ§ΩΩ Ψ―ΩΨ?ΩΩΩ ΩΩ Ψ§ΩΨ­Ψ¬Ω π’', 'Ψ²ΩΩΩβΊοΈ', 'Ψ¨Ψ?ΩΨ±π ', 'ΩΩΨͺΩ Ψ΄ΩΩ Ψ―ΩΩΩ Ψ΄ΩΩΩΨ¬π', 'ΩΩΨΆΩΨͺΩΨ§ ΩΩ Ψ¨Ψ±ΩΩπ', 'πΨ­ΩΩΩ ΩΨ΄Ω ΩΩ ΩΨ±Ω Ψ§ΩΨ―Ψ±Ψ§Ψ³Ω',  
'ΨͺΩΨ§Ω Ψ¦ΩΨͺΩ Ψ΄ΩΩΩΩ π€·πΌββοΈ',
'ΩΨͺΨ­ΩΨΆ Ψ§Ψ­ΩΩ Ψ¨Ψ?ΩΨ± π',);
$reply_ho = array_rand($ho, 1);

$link = array('Ψ―ΩΨ§ΩΩ Ψ­ΩΨΆΨͺ Ψ§Ψ―Ψ² Ψ±ΩΨ§Ψ¨Ψ·π', 'Ψ§ΩΩΩ ΩΨ§Ψ?Ψ°Ω ΩΩΨ§Ψ?Ψ° ΩΩΨ§ΨͺΩ π', 'ΨΉΩΩ ΩΩΩ Ψ§ΩΩΨ―ΩΨ± ΨΆΩΩ ΩΨ°Ψ§ Ψ§ΩΨ¨ΩΨͺ Ψ­ΩΨ§ΩΩ  π€·πΌββοΈ @philips_lbot', 'ΩΨͺΨ±ΨͺΨ§Ψ­ Ψ§ΩΩ ΩΨ·Ψ±Ψ―ΩΩ π', 'Ψ­ΩΨΆ ΩΨ±Ψ¨Ω ΩΩ ΩΨ§ΩΩ Ψ±ΩΨ§Ψ¨Ψ· π', 'ΩΨ­Ψ― ΩΩΩΨͺ Ψ§ΩΩΩΨ§Ω ΩΨ§Ω ΨΉΩΨ¨ ππ', 'Ψ¬ΩΨ¨ΩΩΩ Ψ§ΩΩΨΉΨ§Ω ΩΨ²Ω Ψ¨Ψ³ ΩΨ―Ψ² Ψ±ΩΨ§Ψ¨Ψ· βΉοΈ', 'ΩΨ§ΩΩΩ ΩΨ±ΩΨͺΩΩΩ Ψ¨Ψ§ΩΨͺΩΩ ΩΩ ΩΨ±Ω ΩΨ§ΩΩΩΩΨ§ΩΨͺ πͺ',);
$reply_link = array_rand($link, 1);

$local = array('ΨΉΨ±ΩΨͺ Ψ¨ΩΨͺΩΩ ΩΩΩπ','ΨͺΨΉΨ§Ω Ψ¨ΩΨͺΩΩ ΩΨ±ΩΨ¨ ΨΉ Ψ¨ΩΨͺΩΩ π','Ψ¨Ψ?Ψͺ Ψ¨Ψ§ΨΉ ΩΩΩ Ψ³Ψ§ΩΩ π€¦πΌββοΈ','ΩΩΩΩ ΩΨ±ΩΩ Ψ§ΩΩ ΨͺΨ±ΩΨ― Ψ΄ΩΩΩ π€·πΌββοΈ','ΩΩΨ§ Ψ³Ψ§ΩΩ Ψ§Ψ¨Ω Ψ¬ΨΉΩΨ± Ψ§ΩΨ¨ΩΨ§Ω π§','Ψ¨ΩΨͺΩΩ ΩΨ¨ΩΨͺΩΩ Ψ­Ψ§ΩΨ· ΨΉ Ψ­Ψ§ΩΨ· ππ','ΩΨ§Ω ΩΩΩ Ψ¨Ψ§ΩΨ³ΩΨ―Ψ§Ω ΩΨ§ΨΉΨ― π§',);
$reply_loc = array_rand($local, 1);

$image = array('ΩΩ ΨΉΩΨ¨ Ψ§Ψ―Ψ² Ψ΅ΩΨ± π',
'ΩΨ?Ω ΩΨ―Ψ² Ψ΅ΩΨ± π€·πΌββοΈ',
'ΩΨ§Ω Ψ΅ΩΨ±Ω ΩΩΩ π',
'Ψ΄ΩΩΩ Ψ΅ΩΨ±Ω Ψ¨Ψ΄Ψ―Ω ΨͺΩ Ψ§ΩΨ?ΩΨ· πβ€οΈ',
'ΩΨ§ΩΩΨ±Ψͺ ΩΨ¨Ω ΩΨ§ Ψ―Ψ² ΩΨ§Ω Ψ§ΩΨ΅ΩΨ±Ω π',
'Ψ²ΩΩ Ψ§Ψ¨ΩΩ ΩΨ―Ψ±Ω Ψ§ΩΩ Ψ―Ψ²ΩΨͺ ΩΨ§Ω Ψ§ΩΨ΅ΩΨ±Ω π§',
'ΩΨ΄ΩΩΩ ΨͺΨ±ΩΨ΅ Ψ§Ψ­ΩΨ§Ω Ψ... Ψ¬Ψ°Ω ππΌ Ψ¬Ψ°Ω ππΌ',
'Ψ¨ΨΉΨ― ΩΨ―Ψ² Ψ΅ΩΨ± ΩΨͺΨ­ΩΨΆ π',
'Ψ§Ω ΨΉΩΩΩ Ψ­ΩΨΆΨͺ Ψ΄Ψ¨ΩΩ ΩΨ΄Ψ§ΩΩ Ψ΅ΩΨ± π€·πΌββοΈπ',);
$reply_img = array_rand($image, 1);

$why = array('ΩΨ΄ΩΨ§Ψ΄Ω ΨͺΩΨ΄ΩΨ΄Ω π ΩΨ―ΩΩΩ ΩΩΨ΄ βΉοΈ',
'ΩΨΉΩΩ ΩΩΨ΄ ΩΩΩ Ψ§ΩΩΩΨ³Ω ΩΩΨ΄ Ψ¬Ψ§Ω ΨͺΨ³Ψ¦ΩΩΩ π',
'ΩΨ§ ΩΨ§ΩΩ ΩΨ―ΩΩΩ ΩΩΨ΄ π€·πΌββοΈ',
'Ψ§ΩΩ ΩΨ―ΩΩΩ ΩΩΨ΄ Ψ§ΩΨͺΩ Ψ―ΩΩΩ ΩΩΨ΄ π',
'Ψ§Ψ¨ΩΩΨ§ ΩΩΩΩΩ ΩΩΨ΄ Ψ§ΩΨͺΩ Ψ¬Ψ§Ω ΨͺΩΩΩ ΩΩΨ΄ π§',
'Ψ§Ψ³Ψ¦Ω ΨΆΩΩ ΩΩΨ΄ ΩΩΨ¬ ΩΩΨ§Ψ¨ΩΩ ΩΨ¨Ψ¬Ω π€π',
'ΩΩΩ ΩΩΨ­Ψ§ΩΨ· ΩΩΨ΄ Ψ§ΩΩ Ψ΄ΩΨ―Ψ±ΩΩΩ π’',
'Ψ§ΨͺΨ΅Ω Ψ¨Ψ΅Ψ―ΩΩ ΩΩΩΩ ΩΩΨ΄ ΩΨ΄ΩΩ Ψ±Ψ―Ω Ψ§ΩΩ π',
'ΩΨ΄ΩΩΩ ΨͺΨ±ΩΨ΅ Ψ§Ψ­ΩΨ§Ω Ψ... Ψ¬Ψ°Ω ππΌ Ψ¬Ψ°Ω ππΌ',
'ΨͺΨΉΨ§Ω Ψ΄ΩΩ ΩΩΨ΄ ΩΨͺΨ³ΨͺΨ¬Ω ΨΉ ΩΩΨ³Ω π³',
'ΩΨ§ΩΩΩ ΩΨ§ ΨͺΨ³ΨͺΨ­Ω π',);
$reply_why = array_rand($why, 1);

$thj = array('ΩΩΨ¬ ΩΩ Ψ―Ψ¬Ψ§Ψ¬Ω π€£π', 
'ΩΨ§ ΩΨ§Ψ¨Ω ΩΩ ΩΩΨ¬ ΩΩΩ ΩΩΩ Ψ§ΩΩ Ψ§ΨΉΨ±Ω π', 
'ΩΨ§ ΩΩ ΩΩΨ¬ π€', 
'Ψ§ΩΩ Ψ¬ΩΨͺ ΩΩΨ¬ΩΨ―Ω ΩΨ΅Ψ§Ψ± ΩΩΨ¬ π', 
'Ψ§ΩΩ ΩΨ±Ψ§ΨΉΨͺ Ψ?ΨΆΨ±Ω Ψ―ΩΩΩ ΩΩΨ¬ ΩΨͺΨ³ΨͺΨ­Ω π', 
'ΩΨ―ΩΩΩ ΩΩΨ¬ Ψ§ΨΆΩΨ¬ ΩΩ ΩΨ§Ω Ψ§ΩΩΩΩΩ π', 
'Ψ±ΩΨ­ ΩΩΩ Ψ§ΩΨΊΩΨ±Ω ΩΩΨ¬ ΩΩ Ψ§ΩΩ π', 
'ΩΩΩ ΩΨ±ΩΨ΅ Ψ§ΩΩΨ¬ΨΉ ΩΩΩΨ¬ΨΉ ππ',
'Ψ¨Ψ±Ψ§Ψ­ΨͺΩ Ψ§ΩΩ ΩΩ Ψ¨ΩΨ²Ψ§Ψ¬Ω Ψ―ΩΩΩ ΩΩΨ¬ π', 
'Ψ¨Ψ§Ψ¨Ψ§ Ψ±Ω Ψ­ Ψ?Ψ§ΩΩ Ψ±ΩΨ­ Ψ΄Ψ³ΩΩ Ψ§ΩΨͺΩ ΩΩΨͺΩΩ ΩΩΨ¬ π',
'ΩΨ΄ΩΩΩ ΨͺΨ±ΩΨ΅ Ψ§Ψ­ΩΨ§Ω Ψ... Ψ¬Ψ°Ω ππΌ Ψ¬Ψ°Ω ππΌ', 
'ΩΩΩ ΩΩΩ ΩΩΨ¬ Ψ§Ψ΅ΩΨ§ π', 
'Ψ§ΨΉΨ±Ω Ψ·ΩΨ?ΨͺΩΨ§ Ψ±Ψ§Ψ­ Ψ§Ψ³ΩΨͺ π€·πΌββοΈ', 
'ΩΩΩ ΩΨΊΩΩ ΩΩΩΩπ­πΊΩΩΨ―Ω ΩΩΨ¬Ω ΩΩΨ¬Ω ΩΩΨ¬Ω ΩΩΨ¬Ω π€·πΌββοΈ', );
$reply_th = array_rand($thj, 1);

$stic = array('ΨΆΩ Ψ―Ψ² ΩΩΨ¬ ΩΩΨ΅ΩΨ§Ψͺ Ψ΄Ψ¨ΩΩ ΩΨ΄Ψ§ΩΩ π', 
'ΩΨ­ΩΨΆ ΨΉΩΩ Ψ³ΩΨͺΩ Ψ§ΩΩΨ°Ψ§ Ψ·Ψ±Ψ―Ω Ψ΄ΩΩΩΩΩ Ψ΅Ψ±ΩΩ βΉοΈ', 
'ΨΆΩΨ¬ΨͺΩΩ ΩΨ±Ψ¨Ω π’', 
'ΩΨ¬Ψ§Ω ΩΨ­ΩΨΆ ΨΉ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ π', 
'Ψ―Ω ΩΩΨ΅ΩΨ§Ψͺ Ψ§ΩΨ¨Ψ§Ψ¬Ψ± π', 
'ΩΩΩ Ψ§ΩΩΨ―ΩΨ± ΨΉΩΩΩ π',
'ΩΨ΄ΩΩΩ ΨͺΨ±ΩΨ΅ Ψ§Ψ­ΩΨ§Ω Ψ... Ψ¬Ψ°Ω ππΌ Ψ¬Ψ°Ω ππΌ',);
$reply_stic = array_rand($stic, 1);

$sh = array('ΩΨ§ΩΩ Ψ―Ψ?Ω Ψ΄Ψ¨ΩΩ π€',
'ΩΨ§Ψ?Ω Ψ΄ΨΉΩΩΩ Ψ§ΩΨͺΩ Ψ΄Ψ¨ΩΩ π',
'ΨΆΨ§ΩΨ¬Ω Ψ¨Ψ±ΩΩ ΨΉΨ§ΩΩΩ π©',
'ΩΨΉΩΩΩ Ψ§ΩΨͺΩ Ψ΄Ψ¨ΩΩ π',
'ΩΨ§ΩΩ Ψ―Ψ?Ω π',
' ΨͺΨ±ΩΨ― Ψ§ΩΨ΅Ψ―Ω ΩΩ Ψ¦Ψ¨Ω ΨΉΩΨͺΩ πΆ',
'ΩΩ ΩΨ³ΨͺΩΨ§Ω Ψ§Ψ³ΩΩ π',
'ΩΨΉΩΩΩ π',
'ΩΨ§ΩΩΩΩ ΨΉΩΩΩπ€',);
$reply_sh = array_rand($sh, 1);

$lov = array('Ψ§Ψ­Ψ¨Ω πβ€οΈ',
'ΩΨͺΨ³ΨͺΨ­Ω π',
'ΩΨ±Ψ¨Ω ΩΨ΅ΩΨ­ΩΩ Ψ¨Ψ±ΩΩ Ψ¨Ψ±ΩΩΩΩ ΨͺΨΉΨ§Ω π‘ @lock_at_me_now',
'Ψ¦ΩΩ ΩΨ―ΩΨͺΩ Ψ±Ψ¨Ω ππ',
'ΩΨ§Ψ­ΨͺΨ±ΩΩ Ψ΄ΩΩΩ Ψ§Ψ­Ψ¨Ω ππ',
'Ψ­Ψ¨ΩΨ¨Ω Ψ¨Ψ±ΩΩ Ψ¨Ψ³ ππ€',
'ΩΨ§Ψ­Ψ¨Ω π€€',
'ΩΩΨ¨Ω Ψ§ΩΨͺΩ πΆβ€οΈ',
'Ψ§ΩΩΨͺΩ Ψ¨ΩΩ β€οΈπ',
'Ψ§ΩΩΨΉΩ Ψ§Ψ°ΩΨ¨Ω ππ',
'Ψ¦ΩΨͺΩ Ψ¦ΩΩΩΨ³ ΩΨ§Ω Ψ§ΩΩ β€οΈπ',
'Ψ΄Ψ¨ΩΩ ΩΨ΄Ψ§ΩΩ Ψ¨ΩΨ§Ψͺ ΩΩΨ¬ Ψ¬ΩΨ§Ω π',
'Ψ¦ΩΨͺΩ Ψ¦ΩΨΉΨ΄Ω ππ',
'Ψ·ΩΩΩ Ψ¨ΩΨ³Ω ΩΨ­Ψ¨Ω π€',
'ΩΨ²ΩΨͺ π',
'Ψ§ΩΨͺ ΩΩΨ΄ ΩΨ§ Ψ§Ψ¨ΩΩΨ© Ψ§Ψ΄ΩΩΩΨ§ Ψ§Ψ―ΩΩΩ Ψ§ΩΩΨ§ Ψ§Ψ­Ψ¨Ψ¬ Ψ΅Ψ―Ω ΩΨͺΨ³ΨͺΨ­Ω ΨΉΩΩ ΩΩΨ³Ω ππ',
 'ΩΨ―ΩΨ© Ψ§ΩΨ­ΩΩ ππ',
 'Ψ¨Ψ§ΨΉ Ψ­ΨΆΩ ΩΩΨ§ΩΨ΅ΩΩ Ψ²ΩΨ§Ψ­Ω ΩΩΩ Ψ±Ψ§Ψ­ Ψ§Ψ­ΨΆΨ±Ωπͺπ',
'Ψ§ΩΩ ΩΨ§ΩΨͺ ΩΩΨ¨ ΩΨ§Ψ­Ψ― Ψ¨Ψ§ΩΩΩΨ³ Ψ΅Ψ§ΨΉΨ― ΩΩΨ§Ψ²Ω ππ»',
'ΨͺΩΩΩΩ ΨΉΩΩΩ ΩΨ§Ψ±ΩΨ― Ψ­Ψ¨Ω ππ',
'Ψ§ΩΩΨͺ ΨΉΩΩΩ ΩΨ±ΩΨ­Ω π»π',
'    πΉπΉ       πΉπΉ
πΉπΉπΉπΉπΉπΉπΉ
πΉπΉπΉπΉπΉπΉπΉ
πΉπΉπΉπΉπΉπΉπΉ
πΉπΉπΉπΉπΉπΉπΉ
     πΉπΉπΉπΉπΉ
             πΉπΉπΉ
                    πΉ',
);
$reply_lov = array_rand($lov, 1);

$boting = array('ΩΨ§ Ψ?ΩΨ± πβ€οΈ',
'Ψ΄Ψ¨ΩΩ ΩΩΨ¨Ω ΩΨ­ΨͺΨ§Ψ¬ Ψ΄Ω Ψ π',
'ΩΨ§ Ψ­Ψ¨ΩΨ¨Ω π',
'ΨͺΩΨΆΩ ΩΩΩ π',
'ΨΊΩΨ± ΩΩ ΩΨ­Ψ¬Ω Ψ΅Ψ±ΨΉΩΩ π',
'Ψ³ΩΩΩΩΩ Ψ΄Ψ΅Ψ§Ψ± ΩΩΨ§Ω π³',
'ΨΆΩ Ψ§Ψ­Ψ¬Ω ΩΩΩ ΩΩΨ³Ω ΩΨ«Ω Ψ§ΩΨ?Ψ¨Ω π€€',
'ΩΨ§ Ψ§Ψ­Ψ¬Ω ΩΨ³ΨͺΨΉΨ¬ΩΩ π€',
'Ψ¦Ψ¦ΩΨ±Ω Ψ¦Ψ¨Ω Ψ¦Ψ³ΩΨ― π',
'π€ ΨΊΩΨ± ΩΩ ΩΨ­Ψ¬Ω Ψ΄ΩΨ±ΩΨ― ΩΨͺΨ­ΩΨΆ ',
'π Ψ·ΩΨ¨Ω Ψ³Ψ?ΩΩ ΩΨ§Ψ±ΩΨ― Ψ§Ψ­Ψ¬Ω ΩΨ·ΩΩ ΩΨ³Ψ§ΩΩ ',
'Ψ΄ΨͺΨ±ΩΨ― Ψ§Ψ­Ψ¬Ω π',
'Ψ­ΩΨΆΨΆΨΆΨΆΨΆΨΆΨΆ π',
'ΩΨ±Ψ¨Ω Ψ§ΨΉΨ±Ω Ψ§ΩΩ Ψ¨ΩΨͺ π­',
'Ψ±Ψ§Ψ­ Ψ§ΩΨ³Ψ­ Ψ­Ψ³Ψ§Ψ¨Ω ΩΨ§ΩΩ π',
'ΩΩΩ ΩΨ§Ψ?Ω ΨΉΩΩ ΩΨ§Ψ?Ω Ψ§ΩΩ ΩΨ§Ψ­Ψ― Ψ―ΩΩΩΩΩ Ψ§ΩΨͺΩ Ψ¨ΩΨͺ Ψ§Ω Ψ§ΩΩ Ψ¨ΩΨͺ π',
'Ω Ψ§ΩΩ Ψ¨ΩΨͺ ΩΩΩ ΨͺΩΨΆΩ π',);
$reply_bot = array_rand($boting, 1);

$tal = array('ΩΩΩ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω πβ€οΈ', 
'Ψ΄ΨͺΨ±ΩΨ― ΨͺΩΨΆΩ π', 
'Ψ§Ψ·ΩΨ¨ Ψ·ΩΨ¨ Ψ¨Ω Ψ­ΨΆ π', 
'Ψ§Ψ­Ψ¬Ω ΩΨ§ΨΉΩΨ―Ω ΩΩΨͺ Ψ§Ψ±ΩΨ― Ψ§Ψ·ΩΨΉ π', 
'ΨͺΩΨΆΩ ΩΩΩ ππ', 
'ΩΨ?ΩΩΨ§ Ψ§Ψ?ΨͺΩ ΩΨ΅ΨΊΩΨ± Ψ§ΩΨ¬Ψ¨ΩΨ±Ω Ψ―ΩΩΩΨ―ΩΩ ΩΩΩ ΩΩΩΩ ΩΨ§ΩΨ±Ψ―Ω ΩΨ§Ψ±Ψ―Ψ¬ Ψ§ΩΩ ΩΨ³Ψ§ΩΨ¬ ΩΨ³Ψ§ΩΩ πππ€', 
'ΩΩΩ ΩΨΉΨ³Ψ§ΩΩ ΩΩ Ψ§ΩΨ¨Ψ§Ψ±Ψ­Ω ΩΩΨ§ΩΩΩ π€€', 
'ΩΩΩ π', 
'Ψ§Ψ°Ψ§ ΨΉΨͺΨ±ΩΨͺ Ψ¨Ψ΄Ω ΩΩΨ§Ψ¨Ω Ψ­ΨΆ Ψ§ΩΩΨ¨ Ψ§ΩΨͺΩΩ ΨΉΩΩΩ π', 
'Ψ§Ψ­Ψ¬Ω πΆ', 
'Ψ΅Ψ§ΩΨ± Ψ΄Ω ΩΨ§ ΨͺΨ¬ΩΨ·ΩΩ π³', 
'ΩΨ§ π', 
'ΩΨͺΨ΄ΩΨΉ ΩΩΨ¨Ω π', 
'ΩΨ§ Ψ­Ψ¨ΩΨ¨Ω ΩΩΩ ΩΨ§ΩΩΩ ΩΨ§Ψ­Ψ― π', 
'ΩΨ§ ΨΉΩΩΩ ππ',
 'Ψ΄ΩΩ Ψ΄Ψ±Ψ§ΩΨ― π',
'ΩΩΩΩ Ψ¨ΩΨͺΩ βΊοΈπΌ',
'ΩΩΩ Ψ§Ψ¨ΩΩ βΊοΈπΌ ',
'ΩΩΩ ΩΩΨ§ΩΩΩ Ψ§ΩΨ?Ψ§ΩΨͺΩππΉ',);
$reply_tal = array_rand($tal, 1);

$edit = array(
'Ψ¨Ψ―Ω Ψ§ΩΨͺΨΉΨ―ΩΩ ππ',
'ΩΨͺΨΉΨ―Ω Ψ?Ω Ψ§ΩΨΉΨ§ΩΩ ΨͺΨ΄ΩΩ Ψ§ΩΩΨΆΨ§ΩΨ­ ππ',
'ΨΉΨ―Ω ΩΨ¨ΨΉΨ― ΨΉΩΨͺΩ ΨΉΨ³ΩΩΩ π',
'Ψ³Ψ­Ω ΩΨΉΨ―Ω ππ',
'ΩΨ―Ψ§Ψ±Ψ³ ΩΨΊΩ ΨΉΨ±Ψ¨ΩΩ ΩΩΩΨ¬ ΨͺΨ³Ψ­Ω π',
'Ψ§ΨΉΩΩΩ Ψ΄ΩΩΩ ΨͺΩΨͺΨ¨ π',
'Ψ΄Ψ¨ΩΩ Ψ§Ψ­ΩΩ ΩΨͺΨΉΨ±Ω ΨͺΩΨͺΨ¨ ΩΨͺΨ³Ψ­Ω π',
'Ψ¨Ψ§Ψ¬Ψ± Ψ§ΩΩ Ψ§ΨΉΩΩΩ Ψ΄ΩΩΩ ΨͺΩΨͺΨ¨ ΨΉΨ―Ω π',
'ΩΨ§ Ψ΅Ω ΩΨ¨Ψ·ΩΨͺ ΩΩΩΨ¬ ΨͺΨ³Ψ­Ω π',
'Ψ¨Ψ§ΨΉ Ψ§ΩΨ³Ψ­Ω ΨΆΩ Ψ¬ΩΨ΅ ΩΩΨΉΨ―Ω ππ',
'ΩΨͺΨΉΨ―Ω ΨͺΨ±Ψ§ ΩΨ΅ΩΨ± Ψ­ΩΩΩ π',
'ΩΩΨͺ Ψ§ΩΩ ΩΨͺΨΉΨ―Ω π',
'ΨΆΩ Ψ§Ψ³Ψ­Ω ΩΩΨͺΨͺ Ψ§ΩΩΨ΅Ψ±ΩΩΩ Ψ΄ΩΨΉ ππ', );
$reply_edit = array_rand($edit, 1);

$wh = array('Ψ΄Ψ¨Ψͺ Ψ¨ΩΩ π',
'ΩΨΉΩΩ Ψ΄Ψ¨Ω Ψ¦ΩΨͺΩ ΩΩΩ Ψ΄Ψ¨Ω ππ',
'Ψ?Ψ·ΩΩ ΩΨ―ΨΉΩ Ω ΩΨ―Ω ΩΩΩΨ³ΨͺΨ΄ΩΩ ΩΩΨ³Ω Ψ¨Ψ§ΩΨΉΩΨ§ΩΩ Ψ§ΩΨΉΩΩ π­',
'Ψ¦ΩΨͺΩ ΨͺΨΉΨ±Ω Ψ΄Ψ¨Ω π',
'Ψ¨Ω Ψ―Ω ΩΩΨ­Ω ΩΨ²ΩΨ―Ω ΩΩ Ψ§ΩΨ΄ΨΉΨ± Ψ¨ΩΨͺ ΩΩΨ΄Ω ΩΩΨ­Ψ¬Ω ππ',
'Ψ§ΩΨ―ΩΩΩ Ψ―Ψ§Ψ±Ψͺ ΨΉΩΩΩ Ψ?Ψ·ΩΩ πͺ',
'ΩΨ³ΩΩ ΨΉΩΩΩ π',
'ΩΨ±ΩΨ―Ω Ψ¨Ψ΄ΨΊΩΩ π',
'Ψ±ΩΨ­ΩΩ Ψ¨Ψ³Ψ§ΨΉ ΩΨ±Ψ―Ω Ψ¨Ψ΄ΨΊΩΩπ',
'ΨΊΩΨ± ΨͺΨΉΨ§Ψ±Ω ΩΩΨ§ΩΩ ΩΨ΅ΩΨ­ ΨΉΩΩΩ ΨͺΨ±Ψ§ΨΆΩΨ§ π­',
'Ψ§Ψ­Ψ¬Ω Ψ΄Ψ¨Ω π',
'ΩΨ§Ψ¨Ψ© Ψ±ΩΨ­ ΩΩ Ψ§Ψ?ΩΩ Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘ ΩΨͺΩΩΩΩ Ψ¨ΩΨ¬ΩΩ πͺπ',);
$reply_wh = array_rand($wh, 1);

$ru = array('Ψ΄ΩΨ―Ψ±ΩΩΩ ΨͺΨΉΨ§Ω Ψ―ΩΨ±Ω ΩΩΩΩ ΨͺΩΩΨ§Ω Ψ¨Ψ¬ΩΨ¨Ω ππ',
'ΩΩΨ΄ Ψ§Ψ―ΩΨ± ΨΉΩΩΩ π',
'ΩΩΩ ΨͺΨΉΨ§Ω ΩΨ³Ω Ψ§ΩΩΩ ΩΩΩΩ π',
'ΩΨ§Ψ―Ψ±Ω ΩΨ§ΩΩΩ ΩΨ³ΨͺΩΩ Ψ¬Ψ§Ω ΩΩΨ§ π',
'ΩΩΨ?Ψ΅Ω π€€',
'ΩΩΩ Ψ¨Ψ§ΩΨ?Ψ§Ψ΅ Ψ³Ψ― Ψ§Ψ?Ψ± ΨΆΩΩΨ± Ψ§ΩΩ ΩΩΨͺ Ψ§ΩΩ π',
'ΩΩΨ?Ψ΅Ω Ψ­Ψ¨ΩΨ¨Ω ΩΩΩΩ Ψ¦ΩΨͺΩ Ψ΄ΩΩ π',
'Ψ¨Ψ§ΩΩΨ·Ψ¨Ψ? Ψ―ΩΨ­ΨΆΨ±ΩΩ ΩΩΩ ππ',
'ΩΨ³Ω Ψ·ΩΨΉ ΩΩ Ψ§ΩΨ¨ΩΨͺ Ψ±Ψ§Ψ­ ΩΨ¬ΩΨ¨ ΨΉΨ³Ω π',
'ΩΨ§ΩΩ Ψ―Ψ?Ω Ψ¨Ω π',
'Ψ±ΩΨ­ Ψ―ΩΨ± ΨΉΩΩΩ π',
'ΩΨ³ΨͺΩΩ Ψ¬Ψ§Ω ΩΨ­Ψ¬Ω ΩΩΨ§ π¨πΌβπ€',
'Ψ΄ΩΨ―Ψ±ΩΩΩ Ψ±ΩΨ­ Ψ§Ψ³Ψ¦Ω ΨΊΩΨ±Ω π©πΌβπ»',
'ΨΉΩΨ―Ω Ψ±ΩΩΩ Ψ π€·πΌββοΈ',
'Ψ§ΨͺΨ΅Ω ΨΉΩΩΩ ΩΨ°Ψ§ ΩΨ§ΨΉΩΨ―Ω Ψ±Ψ΅ΩΨ― ΩΨ°Ψ§ ΩΨ§Ψ±Ψͺ Ψ§Ψ΄Ψ?Ψ· Ψ§ΩΨ΄Ψ§Ψ΄Ω ΩΨ­Ψ·Ω βββββββββββ <<Ψ§Ψ΄Ψ?Ψ· ΩΩΨ§ π€·πΌββοΈ',
'ΩΨ§Ψ¨Ψ© Ψ±ΩΨ­ ΩΩ Ψ§Ψ?ΩΩ Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘ ΩΨͺΩΩΩΩ Ψ¨ΩΨ¬ΩΩ πͺπ',);
$reply_ru = array_rand($ru, 1);

$left = array('Ψ§ΩΩΩ ΩΩΨ§Ω ΩΨ§ΩΨͺΩΨ³Ω ΨΉ Ψ­Ψ³Ψ§Ψ¨Ω π',
'Ψ¨Ψ§ΨΉ ΨΊΨ§Ψ―Ψ± ΩΩ ΨͺΨΉΨ§Ω Ψ§Ψ±ΩΨ―Ω Ψ¨Ψ΄ΨΊΩΩ βΉοΈ',
'Ψ³Ψ― Ψ§ΩΨ¨Ψ§Ψ¨ ΩΨ±Ψ§Ω π',
'ΨͺΨΉΨ§Ω ΩΨ³ΩΨͺ Ψ­Ψ°Ψ§Ψ¦Ω π€',
'Ψ§Ψ­ΩΩ ΩΨΆΩΩ Ψ¨ΩΩΩ ΩΩΨͺΩ Ψ·ΩΨΉΩ π',
'ΩΨ°Ψ§ Ψ΄Ψ¨Ω ΩΨ§ΩΨ¨ Ψ?ΩΩΨͺΩ ΨΉΩΩΩΩ π',
'Ψ·ΩΨΉ Ψ²ΨΉΩΨ§Ω ΩΩΨ΄ ΩΩΨ¬ Ψ±Ψ¬ΨΉΩ π',
'Ψ±Ψ§Ψ­Ψͺ Ψ§ΩΨ―ΩΨ?Ω π',
'Ψ¦ΩΩ ΩΨ§Ψ?ΩΨ±Ψ§ Ψ?ΩΨ΅ΩΩ ΩΩΩ π',
'ΩΨ±Ψ¨Ω Ψ¬Ψ§Ω ΨΊΨ«ΩΨ« ΩΨ±Ψ§Ψ³Ω ΩΨ§Ψ¨Ψ³ Ψ―Ψ±ΩΨ­ Ψ§ΩΩ Ψ­Ψ¬Ψ§Ψ±Ω ΩΩΨΉΨ§Ω ΩΨ±Ψ§Ω π',
'ΩΨ¬Ψ§Ω ΩΨ?ΩΨ΅ ΩΨ±Ψ§Ψ­ ΩΨ§Ψ?Ψ° Ψ±Ψ§Ψ­ΨͺΩ ΨͺΨΉΨ§ΩΩ ΩΨͺΩΩΨͺΩ Ψ΅ΩΩΩΨͺΩ Ψ?Ω ΩΨ­Ψ¬Ω π',);
$reply_left = array_rand($left, 1);

$new = array('ΩΩΩ Ψ§Ψ¬Ω Ψ§ΩΩΨ±ΩΨ¨ ΩΩΩ ΩΨ±Ψ­Ψ¨ Ψ¨Ω π',
'ΩΨΆΩ Ψ΅ΩΩ Ψ±Ψ­ΩΩ ΩΩΩΨΉΨ¨Ω Ψ§Ψ­Ψ¬Ω Ψ³ΩΩΩ Ψ§ΩΩ Ψ§Ψ³ΩΩΩ ΩΩΨ§Ω π€β€οΈ',
'ΩΩΨ±Ψͺ Ψ§ΩΩΨ±ΩΨ¨ π',
"ΩΩΩ Ψ¨Ψ±ΩΨ­Ω ΩΩΩ Ψ¨ΩΨ±ΩΨ¨ΩΩ $title",
'ΨΆΩΩΨͺ Ψ§ΩΩΨ±ΩΨ¨ Ψ΄ΩΨΉΩ β€οΈ',
'Ψ§ΩΨ¬Ω Ψ§ΩΨ²ΩΩ ΩΩΩ π',
'ΩΩΨ§ Ψ¨ΩΩ Ψ­Ψ¨ΩΨ¨Ω ΩΩΨ±Ψͺ π',
'ΩΩΨ±Ψͺ ΩΩΨ¨Ω π',
'Ψ΅ΩΨ± Ψ­Ψ¨Ψ§Ψ¨ ΩΩΨΆΩ Ψ«ΩΩΩ π€·πΌββοΈ',
'β€οΈ ΩΩΨ±ΨͺΩΩ ΩΨ±ΩΨ­ ΨΉΩΨͺΩ βΊοΈ',
'Ψ΅ΩΨ± Ψ?ΩΨ΄ ΨΉΨΆΩ Ψ¨Ψ§ΩΩΨ±ΩΨ¨ ΨͺΨ±Ψ§ Ψ§Ψ·Ψ±Ψ―Ω π',
'ΩΩΩΩο?©ΩΩβΰ½΄ΩΩΩβο΄Ώπ‘ο΄ΎΩΫΨΩΩΨ±ΨͺΩβ₯',
'ΩΩ°Μ²ΫΩ°Ω°ΩΫΩ°Ω°ΩΩΩ°ΪΩ° Ψ­ΫΩ°Ω°Ψ¨ΰΎΜ²ΫΨΫ€ΩΩΩΫΩ°Ω°ΩΩ°Μ²ΫΩ°Ω°ΪΩ°ΩΩ°ΩΫΩ°Ω°ββ»ποΈββπ',);
$reply_new = array_rand($new, 1);

$for = array('Ψ³ΩΩ Ψ§ΨΉΨ§Ψ―Ω ΨͺΩΨ¬ΩΩ Ψ§ΩΨ΄ΩΨ§Ψ‘ ΨͺΨ§ΩΩΨ© ΩΨ§ ΨͺΨ§ΩΩ π',
'Ψ΄Ψ¨ΩΩ ΩΨ΄Ψ§ΩΩ ΩΨ±ΩΨ¨ ΨͺΨ³ΩΩ Ψ§ΨΉΨ§Ψ―Ω ΨͺΩΨ¬ΩΩ βΉοΈ',
'ΩΨ³Ψ­Ω ΩΨ§ΩΨͺΩΨ¬ΩΩ π',
'ΩΨ³Ψ­Ω ΩΨ§Ω Ψ§ΩΨ±Ψ³Ψ§ΩΩ Ψ¨Ψ³Ψ§ΨΉ π‘',
'Ψ¬ΩΨ¨ΩΩΩ Ψ§ΩΩΨΉΨ§Ω ΩΨͺΩΨ¨ ΩΨ§ΩΩ Ψ§ΨΉΨ§Ψ―Ω ΨͺΩΨ¬ΩΩ π',
'ΩΨ¬Ψ§Ω ΩΨ²Ω Ψ¬ΩΨ¨Ω Ψ¨Ψ?Ψ§Ψ? BefBaf ππ',
'ΩΨ§ΩΩ Ψ­Ψ΄Ψ±Ω Ψ±Ψ§Ψ­ Ψ§Ψ¨Ψ? ΨΉΩΩΩ Ψ¨ΩΩ Ψ¨Ψ§Ω ππ',
'Ψ³ΩΩΩΩ Ψ·ΩΩ ΨΆΩ Ψ³ΩΩ Ψ§ΨΉΨ§Ψ―Ω ΨͺΩΨ¬ΩΩ βΉοΈ',
'Ψ―ΩΨ§ΩΩ ΩΨ²ΩΨͺπ',
'ΩΨ§ΩΩ ΩΨͺΩΨ²Ω π­',);
$reply_for = array_rand($for, 1);

$dom = array('Ψ§Ψ―ΩΩ Ψ§ΩΨ§ΩΩ ΩΨ§ΩΨΊΨ§ΩΩ  β€οΈ',
'ΨͺΨ³ΩΩ Ψ―ΩΩ Ψ§ΩΨ­Ψ¨ΩΨ¨Ω π',
'Ψ―ΩΩ ΩΩΨΉΨ― ΨΉ ΨΉΩΨ§Ψ― Ψ§ΩΩΨ§ΩΩΩΩ π€·πΌββοΈ',
'Ψ―ΩΩ ΩΨ¬ΩΨ±Ω ππ€·πΌββοΈ',
'ΩΨ―ΩΩΩ Ψ§ΩΩΨ§Ψ³Ω β€οΈπ',
);
$reply_dom = array_rand($dom, 1);

$boy = array('ΩΨ΄ΩΨ·ΩΨΉΨ¨Ψ±Ψ§ π',
'Ψ΄ΨΉΩΨ―Ω Ψ―Ψ§Ψ?Ω Ψ?Ψ§Ψ΅ π',
'Ψ«ΩΩΩΩ ΩΩΨ§Ψ­Ψ¬Ω ΩΩΩ ΩΩΨ― π',
'ΨΉΩΨΉ ΩΩΨ― ΩΨ΄Ψ·ΩΨΉΨ¨Ψ±Ψ§ Ψ¨ΩΩΩ π',
'Ψ¨Ψ±Ψ§ ΩΨͺΨ³ΨͺΨ­Ω Ψ―Ψ§Ψ?Ω Ψ?Ψ§Ψ΅ π',
'ΩΩΨ§ Ψ¨ΩΩ ΨͺΨ΄Ψ±ΩΨͺ Ψ¨ΩΩ ΩΩΨͺΩ Ψ§Ψ?ΩΩΩ π',
'Ψ΄ΩΩΩΩ π€',
'Ψ¦Ψ΄ΨΉΨ―Ω Ψ―Ψ§Ψ?Ω Ψ?Ψ§Ψ΅ Ψ π',);
$reply_boy = array_rand($boy, 1);

$girl = array('Ψ¦ΩΩ ΩΨ―ΩΨͺΨ¬ ΩΨ­ Ψ¦Ω Ψ?Ψ―ΩΨ― ππ',
'ΩΩΨ²ΩΩ ΩΩ ΩΩΨ― ΩΨͺΩΩΩΩ Ψ§ΩΨ²ΩΨ§Ψ­Ω ΩΨ§ΩΩΩ βΉοΈ',
'Ψ΄ΩΩΩΨ¬ ΩΨ§Ψ±ΩΨ­Ω π£π',
'ΩΩΨ§ Ψ¨ΩΨ¬ ΩΨ§Ψ±ΩΨ­Ω Ψ§ΩΨͺΩ βΊοΈ',
'ΨΆΩΩΩΩΩ ΩΨ±ΩΨ¨Ψ§Ψͺ β€οΈ',
'Ψ¦ΩΩ ΩΨ·ΩΩΩ Ψ¨ΩΨ³Ω ΩΨ§Ψ±ΩΨ­Ω β€οΈπ',
'ΩΨ­ Ψ¨ΩΩΨͺΨ§Ψͺ ΩΩΨ§ Ψ§ΩΩΩΨ― ΩΨͺΩΩΩΩ Ψ¨Ψ³ ΩΨ²Ψ­ΩΩΩ π‘',
'ΩΩΨ§ Ψ¨Ψ§ΩΨ¨ΩΩΨͺΨ§Ψͺ π»π»',
'Ψ΄ΩΩΩΨ¬ Ψ§Ψ?Ψ¨Ψ§Ψ±Ψ¬ π',
'ΩΩ ΩΨ²Ψ­ΩΩΩΨ¬ π€',);
$reply_girl = array_rand($girl, 1);

$pv = array('ΨΉΩΨ¨ π',
'Ψ?Ψ§ΩΨͺΩ Ψ§ΩΨ΄ΩΨ±Ω  Ψ§Ψ­Ψ³Ω ΨͺΨ±ΨΆΩΨ§ Ψ§Ψ?ΩΩΨ§ ΩΨ²Ψ­Ω ΨΉ Ψ§Ψ?ΨͺΩ ππ€·πΌββοΈ',
'ΨΉΨ¨ ΩΨ¬Ψ¨ Ω ΩΩΩ ΩΩΨ§ ππ€·πΌββοΈ',
'ΩΨ­ΨΆΩΨ±Ω Ψ―Ψ² Ψ±Ψ³Ψ§ΩΩ ΩΨͺΨΉ Ψ?Ψ§Ψ΅ π€·πΌββοΈ',
'Ψ΄Ψ¨ΩΩ ΩΨ΄Ψ§ΩΩ Ψ¨ΩΨ§Ψͺ Ψ π€€',
'ΩΩΩ π',
'ΩΨ§ π',
'ΩΩΩ ΩΩ π',
'ΩΨΉΩΨ― Ψ΅Ψ§Ω Ψ¦ΩΨͺΩ Ψ',
'Ψ¦Ψ°Ψ§ Ψ§ΩΩΩΨΆΩΨΉ Ψ­Ψ³Ψ§Ψ³ Ψ§Ψ¬ΩΩ π',
'ΨͺΨΉΨ§Ω Ψ­ΨͺΨ·ΩΩ Ψ§ΩΩΩΨ±Ψ¨Ψ§Ψ‘ πΆ',);
$reply_pv = array_rand($pv, 1);

$ahm = array('Ψ¬ΩΨ¨ΩΩΩ ΩΩ π',
'Ψ±Ψ² Ψ¨Ψ§ΩΨ­Ω ππ€·πΌββοΈ',
'Ψ΄Ψ¨ΩΩ ΨͺΨͺΨ­ΩΨ­Ω ΩΨ·Ω ΩΩ Ψ?Ψ·ΩΩ ΨΊΨ΅ Ψ¨ΩΩΩΨͺΩ π',
'Ψ?ΩΨ± π',
'ΨͺΩΨΆΩ βΉοΈ',
'ΩΨ§ΩΩΩ Ψ§Ψ΄ΩΨ§Ω π€·πΌββοΈ',
'Ψ§Ψ­ΩΨ§Ψͺ π',
'Ψ·Ψ¨ΩΩΩ ΨΉ ΨΆΩΨ±Ω π',
'ΩΨ§ Ψ?ΩΨ± Ψ΄Ψ¨ΩΩ π',);
$reply_ahm = array_rand($ahm, 1);

$voice = array('Ψ΄ΩΩΨ΅ΩΨͺ ΨΉΩΨΉ πβΉοΈ',
'ΩΩΩ ΨͺΨΉΩΩΨͺΨͺ Ψ§ΩΨΊΩΩ Ψ¨Ψ§ΩΨ­ΩΨ§Ω ππ€·πΌββοΈ',
'ΩΨ§Ω ΩΨ?Ψ¨Ω Ψ§ΩΨ΅ΩΨͺ π€·πΌββοΈ',
'Ψ΄Ψ¬Ψ§Ω ΨͺΨ­Ψ¬Ω ΩΨͺΨ³ΨͺΨ­Ω π',
'ΩΨ―Ψ² Ψ¨Ψ΅ΩΨ§Ψͺ ΩΨ§ΩΩ ΨΉΨ²ΩΩΩ ππ€·πΌββοΈ',
'ΩΨ΄ΩΨ·ΩΨΉΨ¨Ψ±Ψ§ ΩΩ ΩΨ§Ω ΨͺΩΩΩΩΩ ΩΨ±ΩΨ¨Ψ§Ψͺ π€·πΌββοΈ',
'ΩΨ§ΩΩΩ Ψ²Ψ±Ω Ψ§Ψ°Ψ§ΩΩ Ψ΅ΩΨͺΩ Ψ§ΩΨ¨Ψ΄ΨΉ βΉοΈ',
'ΩΨͺΨΊΩΩ Ψ¨ Ψ¨Ψ΅ΩΩ Ψ±ΩΨ­ ΩΩΨ±ΩΩΨ§Ψ³ Ψ?Ω ΩΨ΄ΨΊΩΩΩ ΩΩΨ§Ψ³ Ψ¨ΩΩΩ ΨͺΨͺΨΉΩΩ ΨΊΩΩ ππ',
'Ψ΄ΩΨ§ΩΨ΅ΩΨͺ Ψ§ΩΨΉΨ°Ψ¨ Ψ¦ΩΩΩΩΩΩΩΩΩΩΩ π€€π»',
'ΩΨ―ΩΨͺ ΩΨ§ΩΨ΅ΩΨͺ πΆ',
'ΩΩ Ψ§Ψ­ΩΩ ΩΩ Ψ΅ΩΨͺ Ψ­Ψ¨ΩΨ¨Ω Ψ¨Ψ±ΩΩΩΩ π',
'Ψ§ΨΉΨ±Ω Ψ§Ψ­Ψ¬Ω π',);
$reply_voice = array_rand($voice, 1);

$bey = array('ΨͺΨΉΨ§Ω Ψ?Ω ΩΩΩΩ Ψ³Ψ§ΩΩΨͺΩΩ ΩΩΩ Ψ±Ψ§ΩΨ­ π§',
'Ψ¬Ψ§Ω Ψ§Ψ΄Ψ§ΩΩ ΨͺΨΉΨ§Ω ΩΨΆΩΨ¬ π',
'Ψ―ΩΨΉΩ ΩΨ±Ψ―Ω ΩΨΉΨ΅Ω ΩΨ±Ψ―Ω π',
'ΩΩΩ Ψ²ΨΉΩΩ Ψ­ΨͺΩ ΨͺΨ±ΩΨ­ π₯',
'Ψ΄Ψ¨ΩΩ ΨΆΨ§ΩΨ¬ ΨͺΨΉΨ§Ω π¨',
'Ψ§ΩΩΩ ΩΩΨ§Ω Ψ―Ψ±ΩΨ­ ΩΨ?ΨͺΩΩΩ ΩΩΨͺΩ ΩΩΨ¬ΩΨ― βΉοΈ',
'ΩΨ§Ω Ψ§ΩΩ Ψ΄ΨͺΨ±Ω Ψ¨ΩΩΨ§ ΩΩΨͺΩΩ ΩΩΨ§ΩΩ ππ',
'Ψ³ΩΩΩΩ ΨΉ Ψ¦ΩΩ π€·πΌββοΈ',
'Ψ¨ΨΉΨ― ΩΩΨͺ ΩΩΩ π',
'ΨͺΨΉΨ§Ω ΩΩΩ Ψ±Ψ§ΩΨ­ ΨΉΩΨ―Ω Ψ΄ΨΊΩΩ ΩΩΨ§Ω π£',
'ΨͺΨΉΨ§Ω ΩΨΆΩ ΩΩΨ¬ ΨͺΨ±Ψ§ ΩΩΩΩΩ Ψ΄Ω Ψ¨Ψ³Ψ±ΨΉΩ Ψ―ΩΩΩ Ψ¨Ψ§Ω π',
'Ψ§ΩΩΩ ΩΩΨ§Ω ΩΨ§ΩΨͺΩΨ³Ω ΨΉ Ψ­Ψ³Ψ§Ψ¨ Ψ§ΩΩΨ―ΩΨ± ππ ΩΨ§ΨΉΩΩΩ Ψ§ΩΩ π',);
$reply_bey = array_rand($bey, 1);

if($text == "/start"){
$start = array('ΩΨ§Ψ?Ω ΩΩΨ΄ Ψ§ΩΨ²Ψ­Ω π',
'ΩΩΨ΄ Ψ―Ψ§Ψ?Ω Ψ?Ψ§Ψ΅ Ψ π [Ψ―ΩΨ³ ΩΩΨ§ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω](https://t.me/Babeleon_bot)',
'ΨͺΩΨΆΩ Ψ΄ΨͺΨ±ΩΨ― π£ [Ψ―ΩΨ³ ΩΩΨ§ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω](https://t.me/Babeleon_bot)',
'ΩΨ§ΩΨ΅Ω Ψ²ΩΨ§Ψ­Ω ΨΉΩΩΩ π€·πΌββοΈ [Ψ―ΩΨ³ ΩΩΨ§ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω](https://t.me/Babeleon_bot)',
'ΩΩΩ Ψ±Ψ§Ψ­ Ψ§Ψ­ΨΆΨ±Ω π [Ψ―ΩΨ³ ΩΩΨ§ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω](https://t.me/Babeleon_bot)',
'Ψ¦Ψ?Ω ΩΩΩΩΨΉ ΨͺΨ―Ψ?Ω Ψ?Ψ§Ψ΅ βΊοΈ [Ψ―ΩΨ³ ΩΩΨ§ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω](https://t.me/Babeleon_bot)',
'ΩΩΨ§ Ψ¨ΩΩ ΨͺΩΨΆΩ Ψ΄ΨͺΨ±ΩΨ― Ψ π£ [Ψ―ΩΨ³ ΩΩΨ§ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω](https://t.me/Babeleon_bot)',
'ΨͺΩΨΆΩ ΩΨ¨ΨΉΨ― Ψ±ΩΨ­ ΨΉΩΨͺΩ π [Ψ―ΩΨ³ ΩΩΨ§ Ψ¨ΨΉΨ― Ψ±ΩΨ­Ω](https://t.me/Babeleon_bot)',);
$rstart = array_rand($start, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"text"=>$start[$rstart],
'reply_to_message_id'=>$message->message_id
]);
}

$emoji = array('π€·πΌββοΈπ',
'ππ',
'π€π',
'Take photo with me ππΌ',
'ΨͺΨΉΨ§Ω Ψ·Ω ΩΩΨ§ΩΩ Ψ³ΩΩΩ ππΌ',
'π¦ππͺ',
'ΨΆΩΨ¬ΩΩ Ψ΄ΩΩ Ψ΄Ψ¨Ω π @lock_at_me_now',
'ΨͺΨΉ Ψ§ΩΩΩΨ§ΨͺΩ @Babeleon_bot πβ€οΈ',
'π Ψ?ΩΨ± ',
'Ψ§ΩΩ Ψ§ΩΩΨ±Ψ―Ω ΩΩΨͺΩ Ψ§ΩΨͺΨ§Ψ±Ψ§Ψ¨ ππ€·πΌββοΈ',
'ππππ',
'π€€π€',
'πππ',
'ππ―',
'π₯ΩΨ΄Ψ±Ψ¨  ΩΩΩΩ ΨͺΨ΅ΩΩ ',
'πΎ ΩΨͺΨ­ΩΩ Ψ¨Ψ¨Ψ³Ω ',
'π ΨͺΨ§ΩΩ Ψ±ΩΩ π',
);
$reply_emoji = array_rand($emoji, 1);

if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$emoji[$reply_emoji],
'message_id'=>$message->message_id
]);
}

if($text == 'brhm' or $text == 'Ψ¨Ψ±ΩΩ'  or $text == 'Ψ§Ψ¨Ψ±Ψ§ΩΩΩ'  or $text == 'Ψ£Ψ¨Ψ±Ψ§ΩΩΩ'  or $text == 'Ψ₯Ψ¨Ψ±Ψ§ΩΩΩ'  or $text == 'Ψ¨Ψ±Ψ§ΩΩΩ' or $text == 'Ψ¨Ψ±ΩΩΩ' or $text == 'Ψ¨Ψ±ΩΩΩΩ'  or $text == '@Lock_at_me_now'  or $text == 'ΩΩΩ Ψ¨Ψ±ΩΩ'){
$brhm = array('ΩΨ°Ψ§ Ψ­Ψ¨ΩΨ¨ ΩΩΨ¨Ω ΩΨΉΩΨ±Ω ΩΨ­ΩΨ§ΨͺΩ ΩΩΨ¨Ψ±ΩΨ¬Ω π» [BRHMπ€·πΌββοΈ](https://t.me/Lock_at_me_now)',
'ΨͺΨ³ΩΨ· Ψ§ΩΨ­ΩΩΩΩ ΩΩΨΉΩΨ΄ Ψ¨Ψ±ΩΩ π€€π [BRHMπ€·πΌββοΈ](https://t.me/Lock_at_me_now)',
'MY love and my Developer [BRHMπ€·πΌββοΈ](https://t.me/Lock_at_me_now)',
'kiss him faster [BRHMπ€·πΌββοΈ](https://t.me/Lock_at_me_now)',
'ΩΨ¨Ω ΩΨ΅ΩΨ¨Ω ΩΩΨͺΩ Ψ¨Ω [BRHMπ€·πΌββοΈ](https://t.me/Lock_at_me_now)',
'ΨΉΩΩ ΩΨ°Ψ§ Ψ§ΩΨ°ΩΨ¨ [BRHMπ€·πΌββοΈ](https://t.me/Lock_at_me_now)',
'[MY CUONT π€·πΌββοΈ](https://t.me/Lock_at_me_now)',
'OK OK JOIN MY CHANNEL PLZ [RECODED](https://t.me/babeleon_bot)',
'Ψ±ΩΨ­ΩΩ ΩΩΨ·Ω Ψ¨ΩΨ³Ω [BRHMπ€·πΌββοΈ](https://t.me/Lock_at_me_now)',);
$reply_br = array_rand($brhm, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$brhm[$reply_br],
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true
]);
}

if($text){
bot('forwardMessage',[
'chat_id'=>'@boting1',
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}

$asol = array('ΨΉΩΩΩΩ ΩΩΩ π',
'ΩΨ§ π€π',
'Ψ΄Ψ¨ΩΩ Ψ?ΩΨ± π€·πΌββοΈ',
'ΩΨ§ Ψ§Ψ­Ψ¬Ω βΉοΈ',
'Ψ­ΩΨΆΨͺ Ψ¨Ψ³ΩΩ π',
'Ψ΄Ψ¨ΩΩ Ψ?ΩΨ± Ψ΄ΨͺΨ±ΩΨ― π',
'ΩΩΩ π',
'Ψ?ΩΨ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ±Ψ± π',
'ΩΩΨΉΩΨ― ΩΨ§Ψ§Ψ§Ψ§ ππ',
'ΨͺΩΨΆΩ ΩΩΩ ΩΨ§ ΨͺΨ³ΨͺΨ­Ω π',
'Ψ§Ψ·ΩΨΉ Ψ¨Ψ§ΩΩΨΆΩΩ π',
'Ψ?ΩΨ± Ψ΄ΨͺΨ±ΩΨ― π ',
'Ψ³ΩΩΩ ΩΩΩ Ψ¨ΩΨ―ΩΨ‘ ΩΨ­Ψ― ΩΨ³ΩΨΉΩ π',
'Ψ§Ψ³ΩΩ Ψ§Ψ³Ω ΩΩ ΨΉΨ³ΩΩΩ π Ψ¨Ψ³ ΩΨ―ΩΨΉΩΩΩ ΨΉΨ³ΩΩΩ ',
'Ψ§ΩΩΩΩΩΩΩΩ ΩΩ Ψ§ΩΨͺΩ π',);
$reply_as = array_rand($asol, 1);

if($text == 'ΨΉΨ³ΩΩΩ' or $text == 'Ψ§Ψ³Ω' or $text == 'Ψ³ΩΨ³Ω' or $text == 'ΨΉΨ³ΩΩΨ©'  or $text == 'ΨΉΨ³ΩΩ' or $text == '@ASoLbot'  or $text == 'ΨΉΨ³ΩΩΨ§Ψͺ' or $text == 'Ψ§Ψ³ΩΩ'  or $text == 'ΩΨ°Ψ§ Ψ¨ΩΨͺ'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$asol[$reply_as],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->reply_to_message->from->id and $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΩ Ψ¨Ω' or $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΩ Ψ¨ΩΨ°Ψ§' or $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΩ Ψ¨ΩΨ§Ψ°Ψ§' or $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΩ Ψ¨ΩΨ§Ψ°' and $id != 449272874){
$xyz = array('ΩΩΩΩ ΩΨ²Ψ§Ψ­Ω ΩΩ Ψ³Ψ§ΨΉ Ψ²Ψ­ΩΩΩ ΩΨ­ΨΆΨ±ΨͺΩ π',
'Ψ?ΩΨ΄ ΩΩΨ― Ω ΩΨ±Ψ―Ω ΩΨ§Ω Ψ§ΩΩΩ ππ',
'ΩΩΨΉΨ¨ ΨΉ Ψ§ΩΨ¨ΩΨ§Ψͺ ππ',
'ΩΩΨ― Ψ²Ψ§ΩΨΉΨͺΩ Ψ§ΩΩΨ§ΨΉ πΆπ',
'Ψ΅Ψ§Ω ΩΨ?Ψ¨Ω ΩΩΨΉΨΆΩ π»',
'ΩΨ­ΩΩ ΩΨ΄ΩΨ§Ψ±Ψ¨Ω Ψ¬ΩΩΨ§ ΩΩΩΨ§Ψ³Ω ππ€·πΌββοΈ',
'Ψ§ΩΩΨͺ ΨΉΩΩΩ π',
'ΩΩΩ ΨΊΩΨ± Ψ§ΩΨ­Ψ¨ ΩΨ§Ω Ψ§ΩΩ π€β€οΈ',
'ΩΩ Ψ?ΩΨ΄ ΩΩΨ― Ψ΅Ψ±Ψ§Ψ­Ω βΉοΈ',
'Ψ§Ψ―Ψ¨Ψ³Ψ² ΩΩΩΨ­ΨͺΨ±Ω Ψ§ΩΨ¨ΩΨ§Ψͺ π£ ',
'ΩΨ― ΩΨ§Ψ­Ψ― ΩΨ°Ψ± ππ',
'ΩΨ§Ψ·ΩΩΩ ΩΩ ΩΨ§ Ψ§ΩΩΨ΄Ω Ψ±ΩΨ­ΨͺΩ Ψ¬ΩΩΨ§ Ψ¨Ψ?Ψ§Ψ? Ψ¨Ω Ψ¨Ψ§Ω ΩΨ§Ω Ψ­Ψ΄Ψ±Ψ§Ψͺ ππ€·πΌββοΈ',
'ΩΩ Ψ?ΩΨ΄ ΩΩΨ― π€',);
$reply_xyz = array_rand($xyz, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$xyz[$reply_xyz],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->reply_to_message->from->id and $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΨ¬ Ψ¨ΩΩΨ§' or $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΨ¬ Ψ¨ΩΨ§Ω' or $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΨ¬ Ψ¨ΩΨ§ΩΩ' or $text == 'Ψ΄ΩΩ Ψ±Ψ¦ΩΨ¬ Ψ¨ΩΨ§ΩΨ©' or $text == 'Ψ΄Ω Ψ±Ψ¦ΩΩ Ψ¨ΩΩ'){
$zyx = array('Ψ§ΩΩΨ¨Ψ― ΩΨ§Ω Ψ§ΩΩ ΩΩΩ ππ',
'Ψ?ΨͺΩΩΩ ΩΨ§Ψ­Ψ¨ΩΨ§ π',
'Ψ?Ψ§ΩΨͺΩΩ ΩΩΩ Ψ¨Ψ±ΩΩ π',
'Ψ¨Ψ³ ΩΩ Ψ§ΩΩΩΩΨ§ Ψ§ΩΩ Ψ§ΨΉΨΆΩΨ§ ππ',
'Ψ?ΩΨ΄ Ψ¨ΩΩΩ Ψ¨Ψ³ ΨΉΨ―Ω ΩΩΨ³Ψ±Ψ§Ψͺ Ψ²Ψ§ΩΨ―Ω ΩΩΨ§ΩΨ΅Ω ΩΩΨ§ ΩΩΩΨ§ ΩΩΩΩ ΨͺΨ―Ψ±Ω Ψ¨ΩΩΨ³ΩΨ§ π',
'Ψ¬Ψ°Ψ§Ψ¨Ω ΩΩΩΨ§ΩΩΩ Ψ³ΩΨͺΩΩ ΩΨ΄ΩΩΩ ΩΩΩ Ψ¨Ψ±ΩΩ π',
'Ψ¦ΩΩΩΩΩΩΩΩΩ Ψ§ΩΩΨͺ ΨΉ Ψ±Ψ¨ΩΨ§ ππ',
'Ψ―ΩΨ±Ω Ψ¨Ψ§ΩΩΩ ΩΩΩΨ§ ΨͺΩΨΉΨ¨ ΨΉ Ψ§ΩΩΩΨ― πΆ ΨΆΨ­ΩΨͺ ΨΉ ΩΨ§Ψ­Ψ― ΩΨ·ΨͺΩ Ψ§ΩΩΩΩ 7 π£',
'Ψ΅Ψ―ΩΩΨͺΩ ΩΨ?ΨͺΩ ΩΨ±ΩΨ­Ω ΩΨ­ΩΨ§ΨͺΩ ππ',
'ΩΨ― ΩΨ­Ψ―Ω ΩΩΨ­Ψ±ΩΩ π₯',
'Ψ³Ψ§ΩΩΩ Ψ¨Ψ§ΩΨΉΩΨ§ΩΩ ΩΩΨͺΩ Ψ­Ψ―Ψ― Ψ¨ΨΉΨ― ΩΨ³Ψ§ΩΩΨ§ ΩΨ³Ψ§Ω Ψ―ΩΨ§ΩΩ ππ€',
'Ψ§Ω Ψ³Ψ­ΩΨ±Ω Ψ³Ψ­Ψ±Ψͺ Ψ§Ψ?ΩΩΨ§ ΩΨΉΩΩΨͺΩ 6 Ψ³ΩΩΨ§Ψͺ π€§π€',
'ΩΨ§Ψ­Ψ¨ΩΨ§ π',
'Ψ¨ΩΩ ΩΨ§Ω Ψ¬ΩΨ±Ω ΨͺΨ³Ψ¦Ω ΨΉΩΩΩΨ§ Ψ ππ',
'Ψ¨Ψ±Ψ¨Ω Ψ¦ΩΨͺΩ ΩΨ§ΩΩΩ ΩΨ§Ψ±ΨΊ ΩΨ¨Ψ·Ψ±Ψ§Ω ΩΩΨ§ΨΉΨ―Ω Ψ΄Ω ΨͺΨ³ΩΩ Ψ¬Ψ§Ω ΨͺΨ³Ψ¦Ω ΨΉ Ψ¨ΩΨ§Ψͺ Ψ§ΩΨΉΨ§ΩΩ ΩΩΩ ΩΩΩ ππΌ',
'ΩΨ§Ψ?Ω Ψ¨ΩΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ¨Ψ³ ΩΨ¨ΨΉΨ±Ω ΩΨΉΩΩ ΨΉΩΩΩΨ§ ΨͺΨ΄Ψ±Ψ¨ ΩΩΨ§Ω πΉπΉ',);
$reply_zyx = array_rand($zyx, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$zyx[$reply_zyx],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ΩΩΩ' or $text == 'ΩΩΨ§Ω' or $text == 'ΩΩΩΩ' or $text == 'ΩΨ±Ψ­Ψ¨Ψ§' or $text == 'ΩΩΩΩ(βοΈ)ΩΩΩΩΨ§Ψ€ β β©π Ψ΄ΩΎΩπ¬ΩΨ£Ψ£Ψ¨' or $text == 'ΩΨ±Ψ­Ψ¨Ω' or $text == 'ΩΨ±Ψ­Ψ¨Ψ©' or $text == 'Ψ³ΩΨ§Ω' or $text == 'ΩΩΩ Ψ΄ΩΩΩΩΩ' or $text == 'ΩΩΩ Ψ΄ΩΩΩΩ' or $text == 'ΩΩΩ Ψ΄ΩΩΩΨ¬' or $text == 'ΩΩΩ Ψ§Ψ΄ΩΩΩΨ¬' or $text == 'ΩΩΩ Ψ§Ψ΄ΩΩΩΩΩ' or $text == 'Ψ¦ΩΩ' or $text == 'Ψ§ΩΩ'  or $text == 'ΩΩΨ§Ω Ψ΄ΩΩΩΩΩ' or $text == 'ΩΨ±Ψ­Ψ¨Ψ§ Ψ΄ΩΩΩΩΩ' or $text == 'Ψ³ΩΨ§Ω ΨΉΩΩΩΩ'  or $text == 'Ψ³ΩΨ§Ω ΨΉΩΩΩΩ ΩΨ±Ψ­ΩΩ Ψ§ΩΩΩ ΩΨ¨Ψ±ΩΨ§ΨͺΩ' or $text == 'ΩΨ§Ω' or $text == 'ΩΩΩΩΩβΝΩΩΩΫΩ·Ψ§ΨͺΫΩβ₯' or $text == 'ΩΩΩΩΩΩΩΩ' or $text == 'ΩΩΨ§ Ψ­Ψ¨Ω'  or $text == 'ΩΨ§Ω Ψ΄Ψ¨Ψ§Ψ¨Ω Ψ΄Ψ?Ψ¨Ψ§Ψ±ΩΩ' or $text == 'ΩΨ³Ψ§Ψ‘ Ψ§ΩΨ?ΩΨ±' or $text == 'Ψ΅Ψ¨Ψ§Ψ­ Ψ§ΩΨ?ΩΨ±'  or $text == 'Ψ§ΩΨ³ΩΨ§Ω ΨΉΩΩΩΩ' and $id != $reply_emoji){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$hi[$reply_hi], 
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'Ψ΄ΩΩΩΩΩ' or $text == 'Ψ΄ΩΩΩΨ¬' or $text == 'Ψ§Ψ΄ΩΩΩΨ¬' or $text == 'Ψ§Ψ΄ΩΩΩΩΩ'  or $text == 'Ψ΄ΩΩΩΩ' or $text == 'Ψ΄ΩΩΩ'  or $text == 'Ψ§Ψ΄ΩΩΩΩ' or $text == 'Ψ΄ΩΩΨ¬'  or $text == 'Ψ΄Ψ?Ψ¨Ψ§Ψ±Ψ¬'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ho[$reply_ho],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ―ΩΩ' or $text == 'Ψ―ΩΩΨ¬' or $text == 'Ψ§Ψ―ΩΩΩΩ' or $text == 'Ψ§Ψ―ΩΩ'  or $text == 'Ψ―ΩΩΨ¬β€οΈ'   or $text == 'Ψ―ΩΩβ€οΈ'  or $text == 'Ψ―ΩΩΨ¬ β€οΈ'  or $text == 'Ψ―ΩΩ β€οΈ' or $text == 'Ψ―Ψ§ΩΩΩ'  or $text == 'Ψ―Ψ§ΩΩΨ©'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$dom[$reply_dom],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ΄Ψ¨ΩΩ' or $text == 'Ψ΄Ψ¨ΩΨ¬' or $text == 'Ψ§Ψ΄Ψ¨ΩΩ' or $text == 'Ψ§Ψ΄Ψ¨ΩΨ¬' or $text == 'Ψ§Ψ΄Ψ¨ΩΩΩ' or $text == 'Ψ΄Ψ¨ΩΩΩ' or $text == 'Ψ§Ψ΄Ψ¨ΩΨ¬π' or $text == 'Ψ΄Ψ¨ΩΨ¬π' or $text == 'Ψ§Ψ΄Ψ¨ΩΨ¬ π' or $text == 'Ψ΄Ψ¨ΩΨ¬ π' or $text == ' ΩΩο΄ΏΨ΄ΩβοΈΩΨ¨Ωο?©ΩΩο?©ΩΩο΄Ώπͺο΄Ύο?©ΩΩΩΩΩΩΨ¬ο΄ΎΩ '){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$sh[$reply_sh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ΩΩΨ΄' or $text == 'ΩΩΩΨ΄' or $text == 'Ψ²ΩΩ ΩΩΨ΄' or $text == 'Ψ²ΩΩ ΩΩΩΨ΄' or $text == 'ΩΩΨ΄Ψ΄'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$why[$reply_why],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ΩΩΨ¬' or $text == 'ΩΩΨ¬Ω' or $text == 'ΩΩ ΩΩΨ¬' or $text == 'Ψ²ΩΩ ΩΩΨ¬' or $text == 'ΩΩΨ΄ ΩΩΨ¬'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$thj[$reply_th],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ¨Ψ§Ω' or $text == 'Ψ¨Ψ§Ω Ψ¨Ψ§Ω' or $text == 'ΩΨΉ Ψ§ΩΨ³ΩΨ§ΩΩ' or $text == 'ΩΨΉ Ψ³ΩΨ§ΩΩ'  or $text == 'ΩΨΉ Ψ§ΩΨ³ΩΨ§ΩΨ©' or $text == 'ΩΨΉ Ψ³ΩΨ§ΩΨ©' or $text == 'Ψ¨Ψ§Ψ§Ω'  or $text == 'Ψ¨Ψ§Ψ§Ψ§Ω' or $text == 'Ψ¨Ψ§ΩΩ'  or $text == 'Ψ¬Ψ§Ω'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$bey[$reply_bey],
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'Ψ§Ψ­Ω' or $text == 'Ψ¦Ψ­Ω' or $text == 'Ψ­Ω' or $text == 'Ψ£Ψ­Ω' or $text == 'Ψ£Ψ­Ω' or $text == 'Ψ§Ψ­Ω Ψ§Ψ­Ω'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ahm[$reply_ahm],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ΨͺΨΉΨ§ΩΩ Ψ?Ψ§Ψ΅' or $text == 'ΨͺΨΉΨ§Ω Ψ?Ψ§Ψ΅' or $text == 'ΨͺΨΉΩ Ψ?Ψ§Ψ΅' or $text == 'ΩΨΉ Ψ?Ψ§Ψ΅' or $text == 'Ψ?Ψ§Ψ΅'  or $text == 'Ψ?Ψ§Ψ΅Ψ¬'  or $text == 'Ψ?Ψ§Ψ΅Ω'  or $text == 'Ψ΄ΩΩ Ψ§ΩΨ?Ψ§Ψ΅'  or $text == 'Ψ΄ΩΩ Ψ?Ψ§Ψ΅Ω'  or $text == 'Ψ΄ΩΩΩ Ψ?Ψ§Ψ΅Ψ¬' or $text == 'ΨͺΨΉΨ§Ω Ψ?Ψ§Ψ΅π'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$pv[$reply_pv],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ§Ψ­Ψ¨Ω' or $text == 'Ψ§Ψ­Ψ¨Ψ¬' or $text == 'i love you' or $text == 'Ψ­Ψ¨Ψ¬' or $text == 'Ψ­Ψ¨Ω' or $text == 'β€οΈβ€οΈ' or $text == 'love' or $text == ' ilove u' or $text == 'Ψ§Ψ­Ψ¨Ψ¬β€οΈ' or $text == 'Ψ­Ψ¨Ωβ€οΈ' or $text == 'Ψ§Ψ­Ψ¨Ωβ€οΈ' or $text == 'Ψ­Ψ¨Ψ¬β€οΈ' or $text == 'Ψ§Ψ­Ψ¨Ψ¬ β€οΈ'  or $text == 'Ψ­Ψ¨Ψ¬ β€οΈ'  or $text == 'Ψ­Ψ¨Ω β€οΈ' or $text == 'Ψ§Ψ­Ψ¨Ω β€οΈ' or $text == 'Ψ§Ψ­Ω ΩΩΩΩΩβ£ΩΩΩΨ¨ΩΩΩ' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$lov[$reply_lov],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'bot' or $text == 'BOT' or $text == 'Ψ¨ΩΨͺ' or $text == 'Ψ§ΩΨ¨ΩΨͺ'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boting[$reply_bot],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ§ΩΩΨ¬' or $text == 'Ψ§ΩΩΩ' or $text == 'ΩΩΩ' or $text == 'ΩΩΨ¬'  or $text == 'ΩΩΩΩ Ψ·ΩΨ¨'  or $text == 'Ψ¨Ψ¨ΩΩ Ψ·ΩΨ¨'  or $text == 'Ψ§ΩΩΩ'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$tal[$reply_tal],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ΄Ψ¨Ω' or $text == 'Ψ΄Ψ¨ΩΩ' or $text == 'Ψ΄Ψ¨ΩΩΨ§' or $text == 'Ψ΄Ψ¨ΩΩΨ©'  or $text == 'ΩΩΩ Ψ΄Ψ¨Ω'  or $text == 'ΩΩΩ Ψ΄Ψ¨ΩΩ'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$wh[$reply_wh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ΩΩΨ―' or $text == 'Ψ§Ω ΩΩΨ―' or $text == 'Ω ΩΩΨ―' or $text == 'ΩΩ ΩΩΨ―'  or $text == 'Ψ±Ψ¬Ψ§Ω'  or $text == 'ΩΨ¬ Ψ§ΩΩ ΩΩΨ―'  or $text == 'ΩΩ Ψ¨ΩΩΩ'  or $text == 'ΩΩ Ψ¨ΩΩΨ©'  or $text == 'ΩΩ Ψ¨ΩΨͺ'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boy[$reply_boy],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ¨ΩΨͺ' or $text == 'Ψ§Ω Ψ¨ΩΨͺ' or $text == 'Ω Ψ¨ΩΨͺ' or $text == 'ΩΩ Ψ¨ΩΨͺ'  or $text == 'Ψ¨ΩΩΩ'  or $text == 'Ψ¨ΩΩΨ©'  or $text == 'Ω Ψ§Ψ¨ΩΩΩ'  or $text == 'Ψ§Ω Ψ§Ψ¨ΩΩΨ©' or $text == 'Ψ§Ω Ψ§Ψ¨ΩΩΩ'  or $text == 'ΩΩ ΩΩΨ―'  or $text == 'ΩΩ Ψ΅Ψ¨Ω'  or $text == 'ΩΨ΄ ΩΩΨ―'  or $text == 'ΩΨ΄ Ψ΅Ψ¨Ω'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$girl[$reply_girl],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'Ψ§Ω ΩΩΩΩΨ©' or $text == 'Ψ§Ω ΩΩΩΩ' or $text == 'ΩΩΩΨ©' or $text == 'ΩΩΩΩΨ©'  or $text == 'ΩΩΩΩΨ§'  or $text == 'ΩΩΩΩ' or $text == 'Ψ§Ω ΩΩΩΩΨ©' or $text == 'Ψ§Ω ΩΩΩΩΨ§' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ru[$reply_ru],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->forward_from->id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$for[$reply_for],
'reply_to_message_id'=>$message->message_id
]);
}

if($edited){
bot('sendMessage',[
'chat_id'=>$chat_ed,
'text'=>$edit[$reply_edit],
'message_id'=>$message->edited_message->message_id,
'reply_to_message_id'=>$update->edited_message->message_id,
]);
}


if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) and $message->chat->type == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$link[$reply_link],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->location){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$local[$reply_loc],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->photo){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$image[$reply_img],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->sticker){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$stic[$reply_stic],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->sticker){
bot('sendMessage',[
'chat_id'=>$chat_id,
"emoji"=>'hiiii',
'reply_to_message_id'=>$message->message_id
]);
}

if($message->new_chat_member){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$new[$reply_new],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->left_chat_member){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$left[$reply_left],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->voice){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$voice[$reply_voice],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->contact){
$phone = '+201144678372';
$namea = '>_Recoded';
$last_ = 'Programmer();';
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$phone,
'first_name'=>$namea,
'last_name'=>$last_,
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>'Ψ§Ψ­ΩΨΆ Ψ¬ΩΨͺΩ ΩΨ―Ψ² ΩΩΨ·Ω Ψ?Ψ§Ψ΅ [π¨πΌβπ€ Ψ―ΩΨ³ ΩΩΨ§](https://t.me/Babeleon_bot)',
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "ΩΩ Ψ?ΩΨ±ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§ΩΩΩΩΨ§ Ψ¨Ω ΨΉΨ²ΩΨ²Ωπ  [$name](tg://user?id=$id)
ΩΩΩΩ Ψ¨ΩΨͺ ΩΨΉΨ¨ΩΩΨ© ΩΩ Ψ?ΩΩΩΨ±ΩΩπ
Ψ§ΩΨ¨ΩΩΩΨͺ Ψ§ΩΨ§ΩΩ ΩΩΩΩ Ψ§ΩΨͺΩΨ¬ΩΩΨ±Ψ§Ωβ‘
ΩΩΩΩΩΩΩ ΩΩ Ψ?ΩΨ§Ω ΩΩΩΨ°Ω Ψ§ΩΩΨΉΨ¨ΩΩΩπ
ΩΨ§ΨͺΩΩΩΨ§Ω Ψ§ΩΩΨ±Ψ§Ψ­ΩΩΩ Ψ§Ω(3) ΩΨ±Ψ¨ΩΩΨ­ Ψ?Ψ§Ψ―Ω vps ΩΩΩΩΨ―Ω ΩΩ ΩΨ·ΩΩΩΨ± Ψ§ΩΨ¨ΩΩΩΨͺβ­ ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"Ψ§Ψ¨ΩΩΨ―Ψ£ Ψ§ΩΩΨΉΨ¨β",'callback_data'=>'hmd1']],
[['text'=>"π -  ΨͺΨ§Ψ¨ΩΩΨΉΩΨ§ - π",'url'=>'t.me/HZ_RS']],
[['text'=>"βοΈ - </>Ψ§ΩΩΨ·ΩΩΩΨ±<\> - βοΈ",'url'=>'t.me/hossamzrzor']],
]
])
]);


if($data == 'hmd1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§ΩΩΩΩΨ§ Ψ¨Ω ΨΉΨ²ΩΩΩΨ²Ω $name β¨

Ψ§Ψ?ΩΩΨͺΨ± Ψ¬ΩΨ³ΩΩΩ/Ψ¬ξ¦ ΩΨ¨Ψ―Ψ£ Ψ§ΩΩΨΉΩΩΨ¨ξ¦',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ¨ΩΩΩΨͺπ','callback_data'=>'l1']],
        [['text'=>'ΩΩΩΩΨ―ξ¦','callback_data'=>'l2']],
      ]
    ])
  ]);
}
if($data == 'l2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΨΉΨ²ΩΩΩΨ²Ωπβ‘

ΩΩ Ψ?ΩΩΩΨ±ΩΩγΨͺΨΉΩΩΨΆ Ψ±ΩΨ­Ω/ΨͺΨΆΨ±Ψ¨ Ψ―ΨΊΩΩΩΩ Ψ¨Ψ§ΩΩΨ§ΨΉπγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΨͺΨΉΩΩΨΆ Ψ±ΩΨ­Ωπ','callback_data'=>'s1']],
        [['text'=>'ΨͺΨΆΩΩΨ±Ψ¨ Ψ―ΨΊΩΩππ','callback_data'=>'s2']],
      ]
    ])
  ]);
}
if($data == 's1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'#ΩΩΩΩΩπ Ψ±ΩΨ­ ΨΉΩΩΨΆ Ψ±ΩΨ­ΩΩΩ ΩΨ¨Ψ§π',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'g1']],
      ]
    ])
  ]);
}
if($data == 's2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§Ψ±Ψ¨ ΩΩΩΩΩ ΨͺΨ·ΩΨ­ ΩΨͺΨͺΩΨ³Ψ±ππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'g1']],
      ]
    ])
  ]);
}
if($data == 'g1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩ Ψ?ΩΩΩΨ±ΩΩπΏ

γΨͺΨ·ΩΩΩΨΉ Ψ¨Ψ§ΩΨ΄Ψ§Ψ±ΨΉ ΩΩΩΨ΅ΩΨ?/ΨͺΨ§ΩΩ Ψ¨Ψ΅Ω Ψ¨Ψ§ΩΨ±ΩΩΩΩΩπγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΨͺΨ·ΩΩΩΨΉ ΩΨ΅ΩΨ?ππ','callback_data'=>'r1']],
        [['text'=>'ΨͺΨ§ΩΩΩΩ Ψ¨Ψ΅Ωππ','callback_data'=>'r2']],
      ]
    ])
  ]);
}
if($data == 'r1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΨ¬ ΩΩΩΩ Ψ¨ΩΨ§Ψͺ Ψ¨Ψ§ΩΨ΄ΩΩΨ§Ψ±ΨΉππ

ΩΨͺΨ΅ΩΩΩΨ± ΩΨΆΨ­ΩΩΩΩ ΩΨ§ΩΨ?Ψ§ΩΨ³ ΩΨ§ΩΩΨΉΩΩΩΩβΊπ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ‘','callback_data'=>'g22']],
      ]
    ])
  ]);
}
if($data == 'r2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΨΉ Ψ§Ψ³ΩΩΨ§Ψ³ Ψ§ΩΨͺΩ Ψ±ΩΨ­ΨͺΩ Ψ­ΩΩΩπ
ΩΨͺΨ§ΩΩΩΩ Ψ¨Ψ΅Ω ΩΩ Ψ§ΩΨ΅Ψ¨Ψ­πΨ±ΩΨ­ Ψ­ΩΨ¨Ω Ψ±ΩΨ­πΏ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ€','callback_data'=>'g22']],
      ]
    ])
  ]);
}
if($data == 'g22'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩ Ψ?ΩΩΩΨ±ΩΩπ­

γΨͺΨ§ΩΩΩΩ ΩΨ±ΩΩΩΨ© ΩΨ±ΩΨ³π΄/ΨͺΨ§ΩΩΩΩ Ψ΄ΩΨ±Ψ¨Ψ© ΨΉΩΨ§Ψ±ΩΩπΈγ

Ωββββββββββββββββ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΩΨ±ΩΩΩΨ© ΩΨ±ΩΨ³ππΉ','callback_data'=>'sel']],
        [['text'=>'Ψ΄ΩΨ±Ψ¨ΩΩΨ© ΨΉΩΨ§Ψ±ΩΩπΉ','callback_data'=>'sel1']],
      ]
    ])
  ]);
}
if($data == 'sel'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΨͺΨ±ΩΩΩ ΩΨ§ΩΩΩΩ ΩΨ±ΩΨ© ΩΨ±ΩΩΩΩΨ³π΄πΉ

ΨΉΩΩΩΩ Ψ§ΩΩΨ²ΩΨ¨ΩΩΨ±ππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ ','callback_data'=>'sec']],
        
      ]
    ])
  ]);
}
if($data == 'sel1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩ Ψ Ψ§Ψ³ΩΩΨ§Ψ³ Ψ§ΩΨͺΩ Ψ¨Ψ§ΩΩΨ§Ψ¨ΩΩΨ§ΩπΉπ

Ψ§ΩΨΉΩΩΨ― ΨΉΩΩ ΩΨͺΨ²ΩΨΉ ΨΉΩΩΩΩΩΩππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ?','callback_data'=>'sec']],   
      ]
    ])
  ]);
}
if($data == 'sec'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§Ψ­Ψ¨ΩΩΩΨ΅Ωπ₯

ΩΩ Ψ?ΩΩΩΨ±ΩΩγΨͺΩΨ³ΩΩΨ± Ψ΄ΩΨΉΩ Ψ¨Ψ±Ψ§Ψ³Ωπ?πΉ/ΨͺΨ§ΩΩ Ψ°ΩΩΩΩ Ψ¬Ψ±ΩΨ―Ωππ’γ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨ³ΩΩΨ± Ψ΄ΩΨΉΩπΏ','callback_data'=>'shma']],
        [['text'=>'Ψ§ΩΩΩΩ Ψ°ΩΩ Ψ¬Ψ±ΩΨ―ΩππΉ','callback_data'=>'grede']],
      ]
    ])
  ]);
}
if($data == 'shma'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§Ω ΩΨ§Ψ¨ΩΩΩΩ ΩΨ¨ΨͺΩΩ Ψ¨Ψ?ΩΨ§Ψ·Ψ§ΨͺΩΩΩπ΄πΉ

Ψ§ΩΨΉΩΩΨ― ΨΉΩΩ Ψ§ΩΩΩΨΉΨ― ΩΩΩ Ψ¬Ψ§Ψ¨ΩΩΨ±Ωπ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπΆ','callback_data'=>'t']],   
      ]
    ])
  ]);
}
if($data == 'grede'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ±Ψ¨ΩΩΩπ
Ψ―ΨΉΩΩΩΨ© ΩΨ·ΩΩΩΩΩ Ψ­Ψ§ΩΩΩΩπ΄πΉ

ΩΩΩΩΩ ΩΨ·ΩΩ Ψ·Ψ§ΨΉΩΩ ΩΨ³Ψ§Ψ­ΩΩ ΩΨ―ΩΩΩΩ ΩΨ§ΨΉΩΩΩΩππΉ
ΩΩΩ (Ψ§Ω) ΩΩΩΩΨͺ Ψ§Ω Ψ±Ψ¨ΩΩΩ ΩΩΩ ΩΨ·ΩΩΩΩ Ψ²ΩΨ§ΩΩΨ± ΩΨ¨Ψ·ΩΩ Ψ³ΩΩΩΨ§Ω ΩΩΩΨ³ΩΩΩ ΩΩΨ§Ω Ψ§ΩΨ­ΩΨ§Ωππ
ΩΨ§ΩΩΩΩ Ψ¬Ψ±ΩΨ―ΩππΉΨΊΩΨ± ΨΉΩΩ ΩΨ§Ψ¨Ψ§ΩΩ ΩΨ§ΩΩ ΩΨ§ Ψ§Ψ―Ψ±Ω ππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ ','callback_data'=>'t']],
      ]
    ])
  ]);
}
if($data == 't'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩ Ψ?ΩΩΩΨ±ΩΩπ³πΉ

γΨͺΨ·ΩΨΉ Ψ¨Ψ§ΩΨ΄Ψ§Ψ±ΨΉ ΨͺΨ΅ΩΨ­ Ψ§ΩΩΩΩ Ψ­Ψ§ΩΩπ/ΩΩ ΨͺΩΩΨΉ Ψ΄ΨΉΨ±Ω ΩΨ§Ω ΩΨ·Ψ­ΩΩπ?πγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§Ψ·ΩΩΩΨΉ Ψ¨Ψ§ΩΨ΄Ψ§Ψ±ΨΉ ΩΨ§Ψ΅ΩΩΩΨ­π','callback_data'=>'shard']],
        [['text'=>'Ψ§ΩΩΨΉ Ψ΄ΩΩΨΉΨ±Ω ΩΩ ΩΨ·Ψ­ΩΩΩΩπ¨','callback_data'=>'then']],
      ]
    ])
  ]);
}
if($data == 'shard'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ¨ΩΩΨ±ΩΩπΉ
ΩΨͺΨ±Ψ¨ΩΩΩ Ψ¨ΨΉΨ²ΩππΉΨ΄ΩΩΩΨ― ΨΉΩΩΩ Ψ¨ΩΨ§ Ψ΄ΩΩΩΨ±π¨π',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπΆ','callback_data'=>'sec45']],
      ]
    ])
  ]);
}
if($data == 'then'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§Ω ΩΨ­ΩΩΨ· Ψ΄ΩΩ ΩΩΨ­πβ‘

ΩΨ§ΩΨ·ΩΩΩ ΩΨ§ΩΩ ΨͺΨ?Ψ¨ΩΩΨ²ΩππΉ

ΩΩΩ Ψ΅Ψ?ΩΩΩΩΩ ΩΨ§Ω Ψ­Ψ΅ΩΩΩΩΩππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'sec45']],     
      ]
    ])
  ]);
}
if($data == 'sec45'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩ Ψ?ΩΩΩΨ±ΩΩππ

γΨͺΨ²ΩΨ¬ ΨΉΨ¨ΩΩΨ―ΩπΉΩΩΨ§Ψ―Ψ±Ω/ΩΩ Ψ­Ψ§ΨͺΩΩΩ ΩΨΉΨ§ΩΩΩΨ²ΩπΉπγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΨΉΨ¨ΩΩΨ―Ω ΩΩΨ§Ψ―Ψ±Ωπ','callback_data'=>'abda']],
        [['text'=>'Ψ­ΩΩΩΩΩ ΩΨΉΩΩΩΨ²Ωπ','callback_data'=>'hloa']],
      ]
    ])
  ]);
}
if($data == 'abda'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ω Ψ§ΩΩΩ ΨΉΨ±ΩΩΩΨͺΩπΈπ

Ψ­ΨͺΨ?ΩΩΨͺΨ§Ψ± Ψ§ΩΨΉΨ¨ΩΩΨ―Ω Ψ§ΩΨ΅ΩΩΩΩ ΩΨ§ΩΨͺΩ+ΩΨ·ΩΨ© ΩΨ±Ψ§Ψ¨ππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩβΆ','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'hloa'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΨ΄ ΨΉΩΩΩΩΩ ΩΨ΄Ψ¨ΩΩΩ Ψ§ΩΨΉΨ¨Ψ―Ω ΩΨ§Ψ?ΨͺΨ§Ψ±ΩΨͺΩΩπ

ΨΉ Ψ§Ψ³ΩΩΨ§Ψ³ Ψ§Ψ¨ΩΩ Ψ±ΩΨ³Ω ΩΨ§ΩΩ Ψ¨Ψ§ΩΨ³ΩΩΨͺΨ§ΩΩΩπ
ΩΩ ΩΩΩΩΩ ΩΨ΅Ψ?Ω ΩΨ«ΩΩΩΩππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩβ','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'srag'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩ Ψ?ΩΩΩΨ±ΩΩπ

γΨͺΨ΄ΩΩΩΩ Ψ¬Ψ³ΩΩ Ψ΄ΩΨ±Ωππ₯/ΨͺΨ²ΩΩΩΩ Ψ§ΩΩΩΨ±ΨΉπ?γ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§Ψ΄ΩΩ Ψ¬Ψ³ΩΩΩΩ Ψ΄ΩΨ±Ωπ','callback_data'=>'gsme']],
        [['text'=>'Ψ§Ψ²ΩΩΩΩ ΩΩΩΨ±ΨΉΩπΈ','callback_data'=>'kraa']],
      ]
    ])
  ]);
}
if($data == 'gsme'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ‘ΩΩΩΩππΉ

ΩΨͺΨΉΩΩΨ§ΩΩ ΩΨ±Ω 12 ΩΨ³ΩΩΩΩΩππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπΉ','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'kraa'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'#ΩΩΩΩΩΩΩΩΩΩΩΩΩ

ΩΨͺΨ·ΩΩΩΨΉ Ψ¬ΩΩΩΩ Ψ?Ψ΅... Ψ΄Ψ§Ψ±Ψ―ΩππΉ
π₯πππππ₯',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΩΩΩΩΩ ΩΨ¨Ωπ','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'gg12'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ­ΩΨ¨ΩΩΨ¨ΩΩΩππ₯

ΩΩ Ψ?ΩΩΩΨ±ΩΩγΨͺΨ±ΩΨ­ ΩΨ¨ΩΨͺ Ψ¬ΩΨ±Ψ§ΩΩΩ ΨͺΩΩΩΩ Ψ§Ψ­Ψ¨ Ψ¨ΨͺΩΩππΉ/
ΩΩΩΩ ΨͺΨ±ΩΨ­ ΩΩΨ΅ΩΩΩΨ―ΩΩΩ ΨͺΩΩΩ ΩΩΩ Ψ§Ψ?ΩΩ Ψ§ΩΨͺΨ­ΩΩΩΩΩΩππΉγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§Ψ±ΩΨ­ ΩΨ¬ΩΩΩΨ±Ψ§ΩΩπ','callback_data'=>'gerana']],
        [['text'=>'Ψ§Ψ±ΩΨ­ ΩΨ£Ψ¨ΩΩΩ Ψ§ΩΨ΅ΩΨ―ΩΩΩΩΩπΉ','callback_data'=>'sedlea']],
      ]
    ])
  ]);
}
if($data == 'gerana'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ­ΨΆΩΩΨ±Ω 50 ΩΩΩΩΩΩΩ ΩΨ΅ΩπΉ

ΩΨ§ΨͺΨ­ΩΩΩΩ ΩΨ― 100 ΨΉ Ψ¨Ψ§Ψ¨ΩΩΩΩ ππΉ
ΩΨ§Ψ³ΨͺΨΉΩΩΨ― ΩΩΨ²ΩΨ§Ψ¬ ΩΩΩΩΩΩππΉΩΩΨ¬ ΩΨͺΨ·ΩΩΩΨΉ Ψ¬ΩΩΩπΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}
if($data == 'sedlea'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΩΩπΉπ

ΩΨ?ΩΩΩΩ ΩΩΩΩΩ ΩΨͺΨ­ΩΩ Ψ§ΩΨ¬ΩΨ§ΩΩΩΩΨΊπΉππ

ππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ«','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}
if($data == 'ggg1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩ ΩΩ Ψ?ΩΩΩΨ±ΩΩπΎ

γΨͺΨ§ΩΩΩΩ Ψ­ΩΨ·ΩπΎ/ΨͺΨ·Ω Ψ¬ΩΨ¨ Ψ¨Ψ§ΩΨ΄Ψ§Ψ±ΨΉ Ψ¬ΩΨ§ΨΊππΉγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΨͺΨ§ΩΩΩΩ Ψ­ΩΨ·ΩΩΩπΎ','callback_data'=>'hnta']],
        [['text'=>'ΨͺΨΆΨ±Ψ¨ Ψ§ΩΨ¬ΩΩΩΨ¨πΆ','callback_data'=>'glp']],
      ]
    ])
  ]);
}
if($data == 'hnta'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§ΩΨ¨Ψ§Ψ§Ψ§Ψ?π

Ψ±ΩΨ­ Ψ§ΩΨ²Ψ§Ψ¬ΩΩΩ π¦Ψ§ΩΨ¨Ψ―Ψ§Ψ?ΩΩΩΩ ΩΨ³ΩΨ·Ψ±Ω ΨΉΩΩΩπΈ
Ψ¨ΩΩΩΩ Ψ?ΩΨ± Ψ§ΨΆΨ±Ψ¨ Ψ§ΩΨ¬ΩΩΩΨ¨ππ₯πΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'glp'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§Ω ΩΨͺΨΆΩΩΩ Ψ«Ψ§Ψ¨Ψͺ ΩΩ Ψ§Ψ±ΩΨΆ Ψ§Ψ?ΩΩ ΨΉΨ§ΩΩΩΨ±πΉπ

ΩΨͺΨ­ΩΩΩΩ Ψ¨ΩΩΨ³πΉΩΨ§ Ψ§Ψ±ΩΨΆ Ψ§Ψ±ΩΨΆ Ψ―ΩΨ³πππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'g88'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§ΩΨ­ΩΩΩΩΨΆ Ψ§ΩΨ³ΩΩΩΨ§ΩΩπΩΨ§ΩΨ¨ΩΩΩΩ

ΩΩ Ψ?ΩΩΩΨ±ΩΩπγΨͺΨΆΩΩΨ±Ψ· Ψ¨Ψ¨Ψ·Ω ΩΨͺΨ΄Ω Ψ±ΩΨ­ΨͺΩ/ΨͺΨ¨ΩΩΩΨ³ Ψ΅Ψ?ΩΩ Ψ¨Ψ­ΩΩΩΩΩΨ§π΄πγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΨΆΨ±Ψ· ΩΨ§Ψ΄ΩΩΩΩΩπ','callback_data'=>'lo0']],
        [['text'=>'Ψ§Ψ¨ΩΨ³ Ψ΅Ψ?ΩΩΩΩπ’','callback_data'=>'loo0']],
      ]
    ])
  ]);
}
if($data == 'lo0'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§ΩΨ?ΩΩΨ§ΩΨ³ ΩΨ§ΩΩΨΉΩΩΩΩπΈπΉ

Ψ΄ΩΩΩΩ ΩΨ§ΩΨΉΩΩΩΩΩΩ Ψ§ΩΨ°Ψ¨Ψ§ΩΩΩΩΩ Ψ§ΩΨΉΩΨ―Ωπ?πΉ

ΨͺΨ?ΩΩΩΩΩ ΨͺΨ΄Ω Ψ±ΩΨ­ΩΩΨ© ΨΆΨ±Ψ§Ψ·Ω Ψ§ΩΨ­ΩΨ¨ΩΨ§Ψ²ΩΩΩΩπ½πΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ₯','callback_data'=>'gefara']],
        
      ]
    ])
  ]);
}
if($data == 'loo0'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§ΩΨ΅ΩΩΩΩ Ψ§Ψ?ΩΩΨ°ΩΩ Ψ­ΩΩ ΩΨ±ΨͺΩΩΨ¨πΉ

#ΩΩΩΩΩΩΩΩΩΩΩΩΩΩ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'gefara']],
        
      ]
    ])
  ]);
}

if($data == 'gefara'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§ΩΩΩΩΨ§ Ψ¨Ωππ«

ΩΨ΄ΩΩΩΨ±Ψ§ ΨΉΩΩ Ψ§Ψ³ΨͺΨ?Ψ―Ψ§ΩΩ Ψ¨ΩΩΩΨͺΩΨ§π»
Ψ§ΩΨͺΨΆΩΩΨ± ΨͺΨ­Ψ―ΩΩΩΨ« Ψ§ΩΨ¨ΩΨͺ Ψ§ΩΩΨ§Ψ―Ω ΩΨ§ΩΩΩΩΨ§Ω Ψ§ΩΩΨ±Ψ§Ψ­ΩΩΩπ₯

Ψ³ΩΩΩΨͺΩ Ψ§ΩΨͺΨ­ΩΩΨ―ΩΨ« Ψ¨ΨΉΨ― ΩΩΩΩΩΩΩπ» ΨͺΨ­Ψ―ΩΨ§Ψͺ Ψ¬Ψ―ΩΨ―Ωπ»
ΨͺΨ§Ψ¨ΩΩΨΉΩΨ§ ΩΩ ΩΨΆΩΩΩΩ @css_1
Ψ¨Ψ£Ψ΄ΨͺΨ±Ψ§ΩΩΩ Ψ¨ΩΩΩΩΨ§ΨͺΩΨ§ ΨͺΨ­ΩΩΨ² ΩΩΨ§ Ψ¨Ψ§ΩΨ§Ψ³ΨͺΩΨ±Ψ§Ψ±
ΩΩΩΩΩ ΩΨ±Ψ§Ψ³ΩΨͺΩΩΨ§ ΩΨ£ΨΆΨ§ΩΨ© ΨͺΨ­Ψ―ΩΨ§Ψͺ Ψ§ΩΩ Ψ§ΩΨ¨ΩΨͺ 
Ψ±Ψ§Ψ³ΩΩΨ§ ΩΨ£ΨΆΨ§ΩΨ© ΨͺΨ­Ψ―ΩΨ§ΨͺΩ ΩΩ ΩΩΨ§ @haked12',
    ]);
}
if($data == 'l1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'π₯π₯π₯π₯π₯π₯

ΩΨ§ Ψ§ΩΩΩο?§ Ψ§ΩΩΩΩΩο?§ΩπΉ/ΩΩ Ψ?ΩΩΩΨ±ΩΨ¬ππ

γΨͺΨΊΨ³ΩΩΩ Ψ΄ΨΉΩΩΨ±Ψ¬ Ψ¨ΩΩΨ·ππ/ΨͺΩΩΨ΄ΩΩΩΩ Ψ΅Ψ±Ψ΅Ψ± Ψ¨Ψ£ΩΨ―Ψ¬πΉγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΨΊΨ³ΩΩΩ Ψ΄ΨΉΨ±Ω Ψ¨ΩΩΨ·π’','callback_data'=>'nft']],
        [['text'=>'Ψ§ΩΩΩΩΨ΄ Ψ΅Ψ±Ψ΅Ψ±ππΉ','callback_data'=>'srsr']],
      ]
    ])
  ]);
}
    if($data == 'nft'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΨ§ ΨΉΩΩΩΩΩππ

ΨΊΩΩΩΩ ΩΩΨ§Ωππ
Ψ§Ω Ψ§ΩΩΩΩ ΩΨ§ΩΨ΅ΩΩΩΨ¨Ψ§ΩπΉππΩΨ§ ΩΨ§ Ψ§Ω Ψ§ΩΩΩΩΩΩ ΩΨ§ΩΨ΅ΩΩΩΨ¨Ψ§ΩπΉππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'srsr'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§Ψ­ΩΩΩππΉ

ΩΨ§ΩΩΩΩΩΩ Ψ§ΩΨͺΩΩΩΩΨ΄ Ψ΅Ψ±Ψ΅Ψ±ππΉ
ΩΨͺΨ£ΩΨ―ΩππΉ ΩΨ§Ψ° ΩΩΩΨ¬πΉπ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'tlale'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§Ψ¨ΨΉΩΩΨ― Ψ±ΩΨ­ Ψ§ΩΨ¨ΩΩΩΨͺ ΩΨ§ΩΩΨ·ΩΨ±πΉ

ΩΩΩΩ Ψ?ΩΨ±ΩΩπ

γΨͺΨ·ΩΨΉΩΩ Ψ¨ΩΩΨ―ΩΩ ΩΩΩΨ§Ψ¬ ΩΩΩΩΨ§ Ψ§ΩΨΉΨ±Ψ§ΩπΉ/

ΨͺΨ±Ψ­ΩΩΩΩ ΩΨ£ΩΨ¬ ΨͺΩΩΩΩΩΩΩΩ Ψ§ΩΩ ΩΨ²ΩΨ¬Ω Ψ¨Ψ§ΩΨ³Ψ±ππΉγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΨͺΨ·ΩΨΉΩΩΩΩ Ψ¨Ψ―ΩΩ ΩΩΩΨ§Ψ¬ππ','callback_data'=>'mkeag']],
        [['text'=>'ΨͺΩΩΩΩΩΩ ΩΨ§ΩΨ¬π','callback_data'=>'amg1']],
      ]
    ])
  ]);
}
if($data == 'mkeag'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§ΩΩΩ Ψ¬ΩΩΨ°Ψ§Ψ¨ΩπΉ

ΩΨΉΩΩΩΩ Ψ¬Ψ°Ψ§Ψ¨ΩπΉ ΩΨ§ΩΨ­Ψ³ΩΩ Ψ¬Ψ°Ψ§Ψ¨ΩπΉ
Ψ§ΩΩΨ΅ΩΩΩΩΨ±Ω πΉΨ§ΩΩΨ²ΩΨΉΩΩΨ±Ωπ΄πΉ
Ψ§ΩΩΩΨͺΩ ΩΩΩΨ¬ ΩΩΩΩΩ ΩΨ·ΩΩΩΨ± Ψ§ΩΨ¨ΩΨͺππΉ
ΩΨ·ΩΨΉΩΩ Ψ¨Ψ―ΩΩ ΩΩΩΨ§Ψ¬πΉππ
ΩΩΨ·ΩΩΨΉ ΩΨ§ΩΨ³ Ψ§ΩΨ΄Ψ¨Ψ§Ψ¨ Ψ¨Ψ§ΩΩΩΨ²ΩΨ§Ψ¬πΉπππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ«π','callback_data'=>'telale1']],
      ]
    ])
  ]);
}
if($data == 'amg1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΩππͺ

ΩΨ?ΩΩΩΨ¬ ΩΩΩΩΩΩ Ψ­Ψ¨Ψ­ΩΨ§ΨͺΩπΌ
ΩΩΨͺΨ¨Ψ¬ΩΩΩΩ ΩΩ Ψ§ΩΩ Ψ±Ψ§Ψ¬ΩΩΨ―ΩπΉπΉπΉπΉ
ππππππ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ₯','callback_data'=>'telale1']],
      ]
    ])
  ]);
}
if($data == 'telale1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩ Ψ?ΩΩΩΨ±ΩΩππΉ

γΨͺΨ·ΩΩΩΨΉΩΩΩΩ Ψ¨ΩΩΨ―ΩΩ π/ππΉ/ΨͺΩΨ·ΩΩΩΩ Ψ­ΩΩ ΩΨΉΨ¨ΩΩΨ―ππΉγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§Ψ·ΩΨΉ Ψ¨ΩΩΨ―ΩΩ π','callback_data'=>'stean']],
        [['text'=>'Ψ§ΩΨ·ΩΩΩ Ψ­ΩΩ ΩΨΉΨ¨ΩΩΨ―π','callback_data'=>'abdd']],
      ]
    ])
  ]);
}
if($data == 'stean'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩππΉ

ΩΨͺΨΉΩΩΨ§Ω ΩΩ Ψ§ΩΩΨ·ΩΩΩΨ±πΉπ
ΩΨ±ΩΩΩΨ― ΩΨ³ΩΩΩ ΩΩΨ§Ψ¬ππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'telale2']],
      ]
    ])
  ]);
}
if($data == 'abdd'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ¬Ψ°Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ§Ψ¨ΩππΉ

ΩΨ§ΩΩΩΩ $name πΉπΉ

Ψ¬Ψ°Ψ§Ψ¨Ω ΩΩ Ψ§ΩΨͺΩ ΨͺΨ―ΩΨ±Ω Ψ­Ψ§ΨͺΩΩΩΩππΉΨ§ΩΩΩΨ¨ ΨͺΩΨ·ΩΩ Ψ­ΩΩΩΩ ΩΨΉΨ¨Ψ―π',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπΈ','callback_data'=>'telale2']],
      ]
    ])
  ]);
}
if($data == 'telale2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΨ΄ΩΩΨͺΨ¬ Ψ³ΩΩΩΩΨ±ΩπΉ

ΨͺΨΉΩΩΨ§Ω ΨͺΨΉΨ§Ω πΉ ΩΩ Ψ?ΩΩΩΨ±ΩΨ¬ππ

γΨͺΨ΅ΩΩΩΩΩΩ Ψ³ΩΩπ’/ΨͺΨ§ΩΩΩΩΩΩ Ψ΄ΩΨ±Ψ¨ΩΩΨ© ΨΉΩΨ§Ψ±ΩΩππΉγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§Ψ΅ΩΩΩΩ Ψ³ΩΩπ’','callback_data'=>'asom']],
        [['text'=>'Ψ§ΩΩΩΩ Ψ΄ΩΨ±Ψ¨Ψ© ΨΉΩΨ§Ψ±ΩΩΩΩπ’πΉ','callback_data'=>'akarek']],
      ]
    ])
  ]);
}
if($data == 'asom'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ¬ΩΩΩΩ Ψ³ΩΨΉΨͺ ΩΨ­Ψ―Ω ΨͺΩΩΩΩΩ Ψ§Ψ΅ΩΩππ¨

Ψ³ΩΩΩΩΨ±Ω ΩΨ¬Ψ°Ψ¨ΩΩΩΩππΉ
ΩΩΨ§ΨΉΩΩΩΩ Ψ§ΩΨ¨Ψ§ΩΩΩΩΩ ΩΩΩ ΩΨ§ΩΩΩΩΩπΏπΉΩΩΩΩΩ
Ψ§ΩΩΩΩ ΩΩ ΩΨ§ΩΨͺ Ψ§ΩΩ Ψ¨Ψ±ΩΨ³ΩΨ³ ΩΨ§ Ψ§ΩΩΩΩππΉ
ΩΩ Ψ¨Ψ¬Ψͺ ππΉΩΩΨ§ ΩΩΨ§ Ψ΅ΩΩΩ Ψ¨Ψ³ ΩΨͺΨ¨Ψ¬ΩΩπΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'akarek'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§ΩΩΩΩΩΨ§ΨͺΩππΉ

ΩΨ§ΩΩΨ§ΩΩΩΨ§ ΩΨ§ Ψ§ΩΩΩ ΩΨ§Ω Ψ§ΩΨ‘ΩΩΩπΉ

ΩΨ¬ ΩΨ§Ψ° ΩΨ§ΨΉΩΩ Ψ΄ΩΨ±Ψ¨ΩΩΨ© ΨΉΩΨ§Ψ±ΩΩΩΩ|πΈ|',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπΈ','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'telale3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ³ΩΩΩΩΨ±ΩπΉ

ΩΩ Ψ?ΩΩΩΨ±ΩΨ¬ππΉ

γΨΉΨ±ΩΩΩΨ³ππ/Ψ¨Ψ§Ψ±ΩΩΩΨ³πΌγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΨΉΨ±ΩΩΩΨ³ππ₯','callback_data'=>'ares3']],
        [['text'=>'Ψ¨Ψ§Ψ±ΩΩΩΨ³πΌ','callback_data'=>'pares']],
      ]
    ])
  ]);
}
if($data == 'ares3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΨΉΩΩΩΩΩ Ψ§ΩΨ­Ψ¨ΩΩΨ§Ψ¨ΩπππΉ

Ψ¨ΩΩΨ³ Ψ§ΩΨΉΨ±ΩΨ³ ΨΉΩΩΩΩΩΨ― Ψ§ΩΨ³ΨͺΩΩΨ±ππ
ΩΩΩΩ Ψ¨Ψ³ ΨͺΩΩΨ±Ψ―Ω ΨͺΨΉΨ±Ψ³Ω Ψ¬ΩΨ¨Ω ΩΨ§ΩΨ§πΉππΆ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'pares'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ΄ΩΨ·ΩΨΉΩΨ¨Ψ±Ψ§ππΉ

Ψ¨ΩΩΩΨͺ Ψ§ΩΨ―Ψ¨ΩΩΩ ΩΩΩππΉ

Ψ§ΩΩΩΩ Ψ§Ψ­ΩΩ ΩΩ Ψ§ΩΨ³ΨͺΩΩΨ±ππ₯ΩΩ Ψ§ΩΨͺΩ ΨͺΨ­Ψ¨ΩΩΩ Ψ§ΩΨ―ΩΨ§Ψ­ΩΩΩππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'telale7'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩ Ψ?ΩΩΩΨ±ΩΨ¬ππ₯

γΨͺΨ²ΩΨ¬ΩΩΩΩ ΩΨ·ΩΩΩΨ± Ψ§ΩΨ¨ΩΩΩΨͺπ»π

ΩΩΩΩ Ψ§Ω Ψ΄Ψ?ΩΩΨ΅ ΩΩ Ψ§ΩΨͺΩΩΩΩππγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΩΨ·ΩΩΩΨ± Ψ§ΩΨ¨ΩΩΩΨͺππ','callback_data'=>'almtor']],
        [['text'=>'Ψ§Ω Ψ΄Ψ?ΩΩΨ΅πβ¨','callback_data'=>'aeshs']],
      ]
    ])
  ]);
}
if($data == 'almtor'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΩΨ― ΨͺΨ­Ψ¨ΩΩ ΩΨ·ΩΨ±ΩπππΉ

ΩΩΩΩ ΩΩΨ§ΩΩ ΨΉΩΩΩΩΩΨ― ΩΨ³ΩΩΩΩΩΨ¬ Ψ¨ΩΨͺΨ§ΨͺππΉπ₯',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'aeshs'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§Ω ΩΩΩΩΨ§ ΩΩΩΩΩππ₯πΉ

Ψ±ΩΨ­ΩΩΩ Ψ―ΩΨ±ΩΩΩΩΨ¬ Ψ²Ψ§Ψ­Ω Ψ§Ψ?ΩΩΨ°ΩππΉ

Ψ΄Ψ¨Ω Ψ§ΩΩΨ·ΩΩΩΨ± ΩΨ¬ΩΨ¬ΩππΉΨ?ΩΩΩΨ΄ ΩΩΨ― ΩΩΩΨ³ΩΩΨ§ΩΩπ»',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'telale8'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩ Ψ?ΩΩΩΨ±ΩΨ¬π½

γΩΨͺ ΩΨ§ΩΩΩΩ Ω£ Ψ§ΩΨ§ΩπΈβ¨γ

γΨ§ΩΩΩΩ ΩΨ§ΩΩ Ω£ Ψ§ΩΩΩΨ§ΩπΈπγ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ΩΩΩΨͺ ΩΨ§ΩΩΩΩπ‘','callback_data'=>'nt1']],
        [['text'=>'Ψ§ΩΩΩΩ ΩΨ§ΩΩΩΩπ','callback_data'=>'akl1']],
      ]
    ])
  ]);
}
if($data == 'nt1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΨ§ΩΩΩ Ψ΄ΩΩΩΩΨ¬πππΉ

Ψ§Ψ­ΩΩΨ§ΩΩ Ψ§Ψ΅ΩΩΨ―ΩΨ¬πππΉ
ΩΨ―Ψ§ Ψ§ΩΩΩΨ―Ψ± Ψ§ΨͺΩΩΨΉΨ¬ Ω£ Ψ§ΩΨ§Ω Ψ¨ΩΩΨ―ΩΩ Ψ­Ψ¨ΩΨ¨Ψ¬ ππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ₯','callback_data'=>'telale9']],
      ]
    ])
  ]);
}
if($data == 'akl1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΨΉΩΩΩΩΩ Ψ§ΩΨ³Ψ¨ΩΩΨ§ΨΉΩΩπ»ππ₯

ΩΩΩΩΨ¬ Ψ§Ψ±ΩΩΩΨ―Ψ¬π»ππ₯

ΩΨΉΩΩΩΨ¨Ω Ψ§ΩΩΩΩΨͺππΉΨ¨Ψ³ ΩΩ ΨͺΨ¨Ψ¬ΩΩ ΨΉ Ψ­Ψ¨ΩΩΩΨ¨Ψ¬πΉ
Ψ§Ψ¨Ψ¬Ω Ψ¨ΨΊΨ±ΩΨͺΩΩΨ¬ ΩΨ§Ψ΄Ψ¨ΨΉΩΩΩΩ ΩΨͺΩππΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ','callback_data'=>'telale9']],
      ]
    ])
  ]);
}
if($data == 'telale9'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΩΩΩΩ Ψ?ΩΩΩΨ±ΩΩΩΨ¬π

γΨͺΩΨ¨Ψ³ΩΩΩΩ Ψ­ΩΨ§ΩΩΩΨ© ΩΩΨ― ΩΨͺΨ±Ψ­ΩΩ ΩΩΩΩΨͺΩΩΨ²Ωπ₯πΉγ

γΨͺΩΨ΄ΩΩΩΩ Ψ­Ψ§ΩΩΩΩΩ ΩΩΩΩΨ―Ψ© Ψ³ΩΩπΉπ₯γ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨ¨Ψ³ Ψ­ΩΩΩΨ§ΩΨ© ΩΩΨ―πΈππ₯','callback_data'=>'hfaya']],
        [['text'=>'Ψ§ΩΨ΄ΩΩΩ Ψ­Ψ§ΩΩΩΩΩπΈπ','callback_data'=>'hafya']],
      ]
    ])
  ]);
}
if($data == 'hfaya'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ΩΩΩΩΩΩπΉππππ

πΩΨͺΨ΅ΩΩΩΨ±ΩΩ ΩΨΆΨ­ΩΩ Ψ¨Ψ§ΩΩΩΨͺΩΩΨ²ΩππΉ

πΉπ₯ΩΨ§ΩΨ?Ψ§ΩΩΩΨ³Ω ΩΨ§ΩΩΨΉΩΩΩΩΩπ₯πΉ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ ','callback_data'=>'snde']],
      ]
    ])
  ]);
}
if($data == 'hafya'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ±Ψ¨ΩΩΩππ

ΩΩΩΩΩ Ψ§ΩΩΩΩΨ§ΨΉ ΩΩΩΩ ΩΨ²Ψ§Ψ²πΌ

ΩΩΨ§ΨͺΨ΄ΩΩΨ±ΩΩ Ψ¨Ψ³ ΨͺΩΩΨ―ΩΨ³ΩΩ ΨΉΩΩππΉ

Ψ±Ψ¨ΩΩΩ ΩΩΩ ΩΨ·ΩΩΨ¨ Ψ¨Ψ±Ψ¬ΩΩΩΩ Ψ¨Ψ³ΩΨ§Ψ± 
Ψ·ΩΩΩ ΨΉΨ΄Ψ±Ψ·ΨΉΨ΄ ΩΨͺΩΩΨ±π₯πΉπ

[  Ψ§ΨΆΨΊΨ· ΩΩΨͺΨ§Ψ¨ΨΉΨͺΩΩΩΨ§ ΩΩ ΩΩΨ§ @css_1',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Ψ§ΩΨͺΩΩΨ§ΩΩπ₯π','callback_data'=>'snde']],
      ]
    ])
  ]);
} 
if($data == 'snde'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'Ψ§ΩΩΩΩΨ§ Ψ¨ΩΩΩΩππ«
bot('answerInlineQuery', [
    'inline_query_id' => $update->inline_query->id,
    'cache_time' => '300',
    'results' => json_encode([[
    'type' => 'article',
    'id' => base64_encode(rand(5, 555)),
    'title' => "ΩΨΉΨ¨ Ψ±ΩΩΩΨͺ... β³βοΈ",
    'description' => "Ψ§ΨΈΨΊΨ· ΩΩΨ§ ΩΩΨ¨Ψ―Ψ‘ ...",
    'input_message_content' => [
        'parse_mode' => 'HTML',
        'message_text' => "ΩΨΉΨ¨ Ψ±ΩΩΩΨͺ β³

Ψ§ΨΈΨΊΨ· ΨΉΩΩ Ψ§ΩΨΆΩΨ§Ω ΩΩΨΉΨ¨ π?"
    ],
    'reply_markup' => [
        'inline_keyboard' => [
            [
                ['text' => "Ψ§ΩΨΆΩΨ§Ω π?", 'callback_data' => "play"],
            ],
            [['text' => 'ΨͺΨ§Ψ¨ΨΉΩΨ§ π’', 'url' => 't.me/php1lua']]
        ]]
]])
]);
$get = file_get_contents("p/$in_id.txt");
$ex = explode("\n", $get);
if ($data == "play") {
    if (!in_array("@$user", $ex)) {
        file_put_contents("p/$in_id.txt", "@$user\n", FILE_APPEND);
        bot('editMessageText', [
            'inline_message_id' => $in_id,
            'text' => "ΩΨΉΨ¨ Ψ±ΩΩΩΨͺ β³

    Ψ§ΨΈΨΊΨ· ΨΉΩΩ Ψ§ΩΨΆΩΨ§Ω ΩΩΨΉΨ¨ π? \n\n $ex[1] \n$ex[2] \n$ex[3] \n$ex[4] \n$ex[5] \n$ex[6] \n$ex[7] \n$ex[8] \n$ex[9] \n$ex[10] \n",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Ψ§ΩΨΆΩΨ§Ω π?", 'callback_data' => "play"],
                    ],
                    [['text' => 'ΨͺΨ§Ψ¨ΨΉΩΨ§ π’', 'url' => 'https://t.me/php1lua']]
                ]
            ])
        ]);
        bot('answerCallbackQuery', [
            'callback_query_id' => $db_id->id,
            'text' => "ΨͺΩ Ψ§ΨΆΨ§ΩΨͺΩ Ψ§ΩΩ Ψ§ΩΩΨΉΨ¨Ω... π?"
        ]);
    } else {
        bot('answerCallbackQuery', [
            'callback_query_id' => $db_id->id,
            'text' => "ΨͺΩ Ψ§ΨΆΨ§ΩΨͺΩ Ψ§ΩΩ Ψ§ΩΩΨΉΨ¨Ω ΩΨ³Ψ¨ΩΨ§... π?",
            'show_alert' => true
        ]);
    }
    $r = $ex[array_rand($ex, 1)];
    if (count($ex) == 10) {
        bot('editMessageText', [
            'inline_message_id' => $in_id,
            'text' => "ΨͺΩ Ψ§ΩΩΨ§Ω Ψ§ΩΨΉΨ―Ψ― Ψ§ΩΩΨ§Ψ¦Ψ² ΩΩ ... π?
$r "
        ]);
    }
}

$fid = $message->from->id;
$usr = file_get_contents("users.txt");
$mem = explode("\n", $usr);
$cmem = count($mem);
if ($text == "/users") {
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "$cmem"
    ]);
}
if ($text == '/start') {
    mkdir("p");
    if (!in_array($chat_id, $mem)) {
        file_put_contents("users.txt", "\n$chat_id", FILE_APPEND);
    }
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "Ψ§ΩΩΨ§ΩΩ Ψ¨ΩΩ π [$name1](t.me/$username) 
        
        ΩΩ ΩΨΉΨ¨Ψ© Ψ§ΩΨ±ΩΩΩΨͺ Ψ§ΩΨ΄ΩΩΨ±Ψ© π³
        
        ΩΩΩΩΩ Ψ§ΩΩΨΉΨ¨ ΩΨΉ Ψ§Ψ΅Ψ―ΩΨ§Ψ¦Ω ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ π¬ ΩΨ§ΩΩΩΩΨ§Ψͺ .. Ψ¨ΩΨ¬Ψ±Ψ― ΨΆΨΊΨ· ΨΉΩΩ Ψ²Ψ± Ψ§ΩΨ¨Ψ―Ψ‘ π₯
        
        [ΩΩΨ²ΩΨ― ΩΩ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ Ψ§ΨΆΨΊΨ· π](https://telegram.me/php1lua)",
        'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                
                [['text' => 'ΨͺΨ§Ψ¨ΨΉΩΨ§ π’', 'url' => 'https://t.me/php1lua'],['text'=>"ΩΨ·ΩΨ± Ψ§ΩΨ¨ΩΨͺ βοΈ",'callback_data'=>"dev"]],
                [['text' => " Ψ¨Ψ―Ψ‘ ΨͺΨ­Ψ―Ω π", 'switch_inline_query' => ""]],
    ]])
    ]);
}
if($data == "dev"){
bot('answerCallbackQuery',[
    'callback_query_id'=>$update->callback_query->id,
   'text'=>"Rouletteπ³ , create By : @bootse and @killyes :) 
   My channels : @php1lua, 
   - My Team is ViP ;)
   ΩΨ±ΩΩ Ψ§ΩΨΉΩΩ : ViP TeaM ", 
 'show_alert'=>true,
]);
}
if($carlos18 && (strpos($carlos9,'"status":"left"') or strpos($carlos9,'"Bad Request: USER_ID_INVALID"') or strpos($carlos9,'"status":"kicked"') or strpos($carlos10,'"status":"left"') or strpos($carlos10,'"Bad Request: USER_ID_INVALID"') or strpos($carlos10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$carlos13,
'text'=>"
β’ Ψ§ΩΩΨ§ Ψ¨Ω ΨΉΨ²ΩΨ²Ω π± β’
β’ ΩΨ§ΩΩΩΩΩ Ψ§Ψ³ΨͺΨ?Ψ―Ψ§Ω Ψ§ΩΨ¨ΩΨͺ β β’
β’ ΨΉΩΩΩ Ψ§ΩΨ§Ψ΄ΨͺΨ±Ψ§Ω ΩΩ Ψ§ΩΩΩΨ§Ψ© π½ β’
β’ ΩΩΨ§Ψ© Ψ§ΩΨ§ΩΩ : @HZ_RS βοΈβ’
"reply_markup"=>json_encode([ 
"inline_keyboard"=>["text"=>"βοΈ - </>βΎπππ‘ππ β.β’<\> - βοΈ",'url'=>"t.me/hossamzrzor"],
     ])
]);
}
]);return false;}
if($carlos17 == "ΩΨ·ΩΨ±" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"π¦βΨ§ΩΩΨ£ ΩΩΩ ΨΉΨ²ΩΨ²Ω Ψ§ΩΩΨ·ΩΨ± 
πβΨ§ΩΩΩ Ψ§ΩΨ§ΩΨ± Ψ?Ψ§Ψ΅Ω Ψ¨ΩΩ 
π§¬βΩΩΩΩΩ ΨͺΨ­ΩΩ ΩΩ Ψ¬ΩΩΨΉ Ψ§ΩΨ§ΩΨ§ΩΨ±",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- β-ΨΉΨ―Ψ― Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩβ΅{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- Ψ§ΩΨ§Ψ΄ΨͺΨ±Ψ§Ω" ,"callback_data"=>"tiger"],["text"=>"-  Ψ§ΩΨ₯Ψ°Ψ§ΨΉΨ©" ,"callback_data"=>"tiger1"],["text"=>"- Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ" ,"callback_data"=>"tiger2"]],
[["text"=>"- Ψ§ΩΨ§ΩΨ± ΨͺΩΨ¨ΩΩ Ψ§ΩΨ―Ψ?ΩΩ" ,"callback_data"=>"tiger3"]],
[["text"=>"- Ψ§ΩΨ§ΩΨ± ΨͺΩΨ¬ΩΩ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘" ,"callback_data"=>"tiger4"]],
   ] 
   ])
]);
}
if($carlos19 == "blodi" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"π¦βΨ§ΩΩΨ£ ΩΩΩ ΨΉΨ²ΩΨ²Ω Ψ§ΩΩΨ·ΩΨ± 
πβΨ§ΩΩΩ Ψ§ΩΨ§ΩΨ± Ψ?Ψ§Ψ΅Ω Ψ¨ΩΩ 
π§¬βΩΩΩΩΩ ΨͺΨ­ΩΩ ΩΩ Ψ¬ΩΩΨΉ Ψ§ΩΨ§ΩΨ§ΩΨ±",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- β-ΨΉΨ―Ψ― Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩβ΅{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- Ψ§ΩΨ§Ψ΄ΨͺΨ±Ψ§Ω" ,"callback_data"=>"tiger"],["text"=>"-  Ψ§ΩΨ₯Ψ°Ψ§ΨΉΨ©" ,"callback_data"=>"tiger1"],["text"=>"- Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ" ,"callback_data"=>"tiger2"]],
[["text"=>"- Ψ§ΩΨ§ΩΨ± ΨͺΩΨ¨ΩΩ Ψ§ΩΨ―Ψ?ΩΩ" ,"callback_data"=>"tiger3"]],
[["text"=>"- Ψ§ΩΨ§ΩΨ± ΨͺΩΨ¬ΩΩ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘" ,"callback_data"=>"tiger4"]],
   ] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"π¦βΨ§ΩΩΨ£ ΩΩΩ ΨΉΨ²ΩΨ²Ω Ψ§ΩΩΨ·ΩΨ± 
πβΨ§ΩΩΩ ΩΨ³Ω Ψ§ΩΨ§ΩΨ± Ψ§ΩΨ§Ψ΄ΨͺΨ±Ψ§Ω Ψ§ΩΨ§Ψ¬Ψ¨Ψ§Ψ±Ω",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ΩΨΆΨΉ ΩΩΨ§Ψ©ΒΉ" ,"callback_data"=>"carlos0"],["text"=>"- ΩΨΆΨΉ ΩΩΨ§Ψ©Ω’" ,"callback_data"=>"carlos2"]],
[["text"=>"- Ψ­Ψ°Ω Ψ§ΩΩΩΨ§Ψ©ΒΉ" ,"callback_data"=>"carlos1"],["text"=>"- Ψ­Ψ°Ω Ψ§ΩΩΩΨ§Ψ©Β²" ,"callback_data"=>"carlos3"]],
[["text"=>"- ΨΉΨ±ΨΆ ΩΩΩΨ§Ψͺ Ψ§ΩΨ₯Ψ΄ΨͺΨ±Ψ§Ω Ψ§ΩΨ₯Ψ¬Ψ¨Ψ§Ψ±Ω" ,"callback_data"=>"carlos4"]],
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger1" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"π¦βΨ§ΩΩΨ£ ΩΩΩ ΨΉΨ²ΩΨ²Ω Ψ§ΩΩΨ·ΩΨ± 
πβΨ§ΩΩΩ ΩΨ³Ω Ψ§ΩΨ§ΩΨ± Ψ§ΩΨ§Ψ°Ψ§ΨΉΨ©",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ΩΨ΄Ψ± Ψ±Ψ³Ψ§ΩΩ" ,"callback_data"=>"carlos6"],["text"=>"- ΨͺΩΨ¬ΩΩ Ψ±Ψ³Ψ§ΩΩ" ,"callback_data"=>"carlos5"]],
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger2" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"π¦βΨ§ΩΩΨ£ ΨΉΨ²ΩΨ²Ω Ψ§ΩΩΨ·ΩΨ±
πβΨ§ΩΩΩ Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ Ψ¨ΩΨͺ
π§¬βΨΉΨ―Ψ― Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩβ΅{ $carlos3 }.",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>" β-ΨΉΨ―Ψ― Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩβ΅{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- Ψ§ΩΨ§ΩΨ± Ψ§ΩΨ§Ψ°Ψ§ΨΉΨ©" ,"callback_data"=>"tiger1"]],
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger3" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"π¦βΨ§ΩΩΨ£ ΩΩΩ ΨΉΨ²ΩΨ²Ω Ψ§ΩΩΨ·ΩΨ± 
πβΨ§ΩΩΩ ΩΨ³Ω Ψ§ΩΨ§ΩΨ± ΨͺΩΨ¨ΩΩ Ψ―Ψ?ΩΩ Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ΨͺΩΨΉΩΩ Ψ§ΩΨͺΩΨ¨ΩΩ" ,"callback_data"=>"carlos9"],["text"=>"- ΨͺΨΉΨ·ΩΩ Ψ§ΩΨͺΩΨ¨ΩΩ" ,"callback_data"=>"carlos10"]],
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger4" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"π¦βΨ§ΩΩΨ£ ΩΩΩ ΨΉΨ²ΩΨ²Ω Ψ§ΩΩΨ·ΩΨ± 
πβΨ§ΩΩΩ ΩΨ³Ω Ψ§ΩΨ§ΩΨ± ΨͺΩΨ¬ΩΩ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ΨͺΩΨΉΩΩ Ψ§ΩΨͺΩΨ¬ΩΩ" ,"callback_data"=>"carlos11"],["text"=>"- ΨͺΨΉΨ·ΩΩ Ψ§ΩΨͺΩΨ¬ΩΩ" ,"callback_data"=>"carlos12"]],
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos0"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨ§Ψ±Ψ³Ω ΩΨΉΨ±Ω ΩΩΨ§ΨͺΩ ΩΨΉΩ @",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
οΈ[['text'=>'- Ψ±Ψ¬ΩΨΉ' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos0");
}
if($carlos17 and $carlos == "carlos0" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"π¦βΨͺΩ Ψ­ΩΨΈ ΩΨΉΨ±Ω Ψ§ΩΩΩΨ§Ψ©
πβΩΩ Ψ¨Ψ±ΩΨΉ Ψ§ΩΨ¨ΩΨͺ ΩΩΨΉΩΩ Ψ΅Ψ­ΩΨ­",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
οΈ[['text'=>'- Ψ±Ψ¬ΩΨΉ' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos0.txt","$carlos17");
unlink("carlos.txt");
}
if($carlos19 == "carlos1"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨͺΩ Ψ­Ψ°Ω ΩΩΨ§Ψ© Ψ¨ΩΨ¬Ψ§Ψ­",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
οΈ[['text'=>'- Ψ±Ψ¬ΩΨΉ' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos0.txt");
}
if($carlos19 == "carlos2"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨ§Ψ±Ψ³Ω ΩΨΉΨ±Ω ΩΩΨ§ΨͺΩ ΩΨΉΩ @",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
οΈ[['text'=>'- Ψ±Ψ¬ΩΨΉ' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos1");
}
if($carlos17 and $carlos == "carlos1" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"π¦βΨͺΩ Ψ­ΩΨΈ ΩΨΉΨ±Ω Ψ§ΩΩΩΨ§Ψ©
πβΩΩ Ψ¨Ψ±ΩΨΉ Ψ§ΩΨ¨ΩΨͺ ΩΩΨΉΩΩ Ψ΅Ψ­ΩΨ­
",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
οΈ[['text'=>'- Ψ±Ψ¬ΩΨΉ' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos1.txt","$carlos17");
unlink("carlos.txt");
}
if($carlos19 == "carlos3"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨͺΩ Ψ­Ψ°Ω ΩΩΨ§Ψ© Ψ¨ΩΨ¬Ψ§Ψ­",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
οΈ[['text'=>'- Ψ±Ψ¬ΩΨΉ' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos1.txt");
}
if($carlos19 == "carlos4"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨ§ΩΩΩ ΩΩΩΨ§Ψͺ Ψ§ΩΨ§Ψ΄ΨͺΨ±Ψ§Ω Ψ§ΩΨ§Ψ¬Ψ¨Ψ§Ψ±Ω
πβΨ§ΩΩΩΩΨ§Ψͺ  $carlos - $carlos1
",

 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
οΈ[['text'=>'- Ψ±Ψ¬ΩΨΉ' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos5"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨ§Ψ±Ψ³Ω Ψ±Ψ³Ψ§ΩΨͺΩ ΩΩΨͺΩ 
πβΩΨ΄Ψ±ΩΨ§ ΨͺΩΨ¬ΩΩ ΩΨ¬ΩΩΨΉ Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos2");
}
if($carlos18 and $carlos == "carlos2" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"π¦βΨͺΩ ΨͺΩΨ¬ΩΩ Ψ±Ψ³Ψ§ΩΨͺΩ Ψ¨ΩΨ¬Ψ§Ψ­",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
for($i=0;$i<count($carlos2); $i++){
bot("forwardMessage", [
"chat_id"=>$carlos2[$i],
"from_chat_id"=>$carlos11,
"message_id"=>$carlos18->message_id
]);
unlink("carlos.txt");
}
}
if($carlos19 == "carlos6"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨ§Ψ±Ψ³Ω Ψ±Ψ³Ψ§ΩΨͺΩ ΩΩΨͺΩ 
πβΩΨ΄Ψ±ΩΨ§ ΩΨ¬ΩΩΨΉ Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos3");
}
if($carlos17 and $carlos == "carlos3" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"π¦βΨͺΩ ΩΨ΄Ψ± Ψ¨ΩΨ¬Ψ§Ψ­",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
for($i=0;$i<count($carlos2); $i++){
bot("sendMessage", [
"chat_id"=>$carlos2[$i],
"text"=>$carlos17
]);
unlink("carlos.txt");
}
}
if($carlos19 == "carlos7"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨΉΨ―Ψ― ΩΨ΄ΨͺΨ±ΩΩΩ Ψ§ΩΨ¨ΩΨͺ - $carlos3",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos9"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨͺΩ ΨͺΩΨΉΩΩ ΨͺΩΨ¨ΩΩ Ψ§ΩΨ―Ψ?ΩΩ",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos2.txt","carlos");
}
if($carlos17 == "/start" and $carlos5 == "carlos" and $carlos11 != $carlossi){
bot("sendmessage",[
"chat_id"=>$carlossi,
"text"=>"π¦βΨͺΩ Ψ―Ψ?ΩΩ ΩΨ΄ΨͺΨ±Ω
πβ$carlos15
π¦ β$carlos16
π§¬β$carlos11
"
]);
}
if($carlos19 == "carlos10"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$Armof14,
"text"=>"π¦βΨͺΩ ΨͺΨΉΨ·ΩΩ ΨͺΩΨ¨ΩΩ Ψ§ΩΨ―Ψ?ΩΩ",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos2.txt");
}
if($carlos19 == "carlos11"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨͺΩ ΨͺΩΨΉΩΩ ΨͺΩΨ¬ΩΩ Ψ§ΩΨ±Ψ³Ψ§Ψ¦Ω",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos3.txt","carlos");
}
if($carlos18 and $carlos6 == "carlos" and $carlos11 != $carlossi){
bot("forwardMessage", [
"chat_id"=>$carlossi,
"from_chat_id"=>$carlos11,
"message_id"=>$carlos18->message_id
]);
}
if($carlos18 and $carlos6 == "carlos" and $carlos11 == $carlossi){
bot("sendMessage",[
"chat_id"=>$carlos18->reply_to_message->forward_from->id,
    "text"=>$carlos17,
    ]);
}
if($carlos19 == "carlos12"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"π¦βΨͺΩ ΨͺΨΉΨ·ΩΩ ΨͺΩΨ¬ΩΩ Ψ§ΩΨ±Ψ³Ψ§Ψ¦Ω",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- Ψ±Ψ¬ΩΨΉ" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos3.txt");
}