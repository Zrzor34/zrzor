<?php

/*
by: 𝗛𝙊𝗦𝗦𝗔𝗠 𝗭𝙍𝗭𝙊𝙍
CH : 𝙍𝘼𝙒𝘼𝙉
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
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"قفل الصور","قفل البصمات","قفل الصوت","قفل الفيديو","قفل الروابط","قفل الجهات","قفل الملفات","حظر","طرد","رفع ادمن","ضع اسم","تثبيت","/link","الرابط");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($from_id,$Dev)){
$info =  "المطور الاساسي 👨🏻‍💻";
}elseif($status == "creator"){
$info = "المنشئ 👨‍✈️";
}elseif($status == "administrator"){
$info = "المشرف 👨‍✈️";
}elseif(in_array($from_id,$admin_user) ){
$info = "الادمن 💂‍♂";
}elseif(in_array($from_id,$manger) ){
$info = "المدير 👮‍♂";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "المطور 👨🏻‍💻";
}
 //***************************//
// info developers //
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."*➺*".$developers_infos."\n➖➖➖➖➖➖➖\n📨¦ الٱيـديـٱت :\n" ."*➺*`".$developers_info . "`";
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
      'text'=>"🚫┇للأسف البوت ليس ادمن في المجموعة",
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
    'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي ᯓ𝙒𝙉𝙀𝙏𝘼 "Ⓡ.Ⓢ 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
👨🏽‍🔧",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"آلمـطـور 🌿",'url'=>"https://t.me/hossamzrzor"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي ᯓ𝙒𝙉𝙀𝙏𝘼 "Ⓡ.Ⓢ 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
⚖️¦ مـعرف آلمـطـور  : @hossamzrzor 🌿
👨🏽‍🔧",
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
   if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt","~» (" . "@". $re_user .")  " . "»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مطور في البوت 
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مطور من قبل
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "رفع مطور اساسي" and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
file_put_contents("$re_id.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مطور اساسي معك
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "رفع مطور"  || $text == "رفع ادمن" || $text == "رفع مميز" || $text == "رفع مدير" || $text == "رفع منشئ" and $re_id ==$bot_id and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📮 ❉ لاتحرجناش والله ماريد 😹😹
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
$cdevs = count($developers)-1;
if($text == "مسح المطورين" and $cdevs != 0 and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ مطور الاساسي
👤┊تم حذف {$cdevs} مطور
➖
", reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($text == "مسح المطورين" and $cdevs == 0 and in_array($from_id,$Dev)){
$cdevs = count($developers);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! لم يتم رفع اي مطورين
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}

if($re and $text == "رفع مدير" || $text == "رفع المدير"  and !in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , "~» (" . "@". $re_user .") " . "»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[
 chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مدير بالبوت
➖"
, parse_mode => markdown ,
 reply_to_message_id =>$message->message_id,
 disable_web_page_preview =>true,
]);
}
}
if($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مدير من قبل
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
$derb = file_get_contents("data/$chat_id/sen.txt");
$sww = file_get_contents("data/$chat_id/seen.txt");
$sew = file_get_contents("data/$chat_id/seeen.txt");
if($re and $text == "رفع بصلاحيه" || $text == "رفع بصلاحية" || $text == "رفع صلاحيه" || $text == "رفع صلاحية"){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
file_put_contents("data/$chat_id/sen.txt","name");
file_put_contents("data/$chat_id/seen.txt",$from_id);
file_put_contents("data/$chat_id/seeen.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇حسنا عزيزي $info
📛┇هاذا الامر يستخدم لرفع العضو بصلاحيه واحده فقط انت تختارها ✓
📕┇ارسل الان الصلاحيه التي تريدها للعضو » $re_id ، يمكنك ارسال رموز الصلاحيات للرفع 📌
ـــ  ــــ  ـــ  ـــ  ـــ
🗑┇حذف رسائل » {1}
🚫┇حظر مستخدمين » {2}
⛔️┇تثبيت رسائل » {3}
🚸┇دعوة مستخدمين » {4}
⚜┇اضافة مشرفين » {5}
♻️┇تغيير معلومات الجروب » {6}
🚸┇رفع بكامل الصلاحيات
❌┇الغاء » لالغاء الامر
ـــ  ــــ  ـــ  ـــ  ـــ
⚠️┇ملاحطة : للرفع بكل الصلاحيات عدا صلاحيات محددة » { تنزيل صلاحية } بالرد ✓",
]);
}}
if($text == "5" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه رفع مشرفين فقط✓
📕┇بواسطة » $info
➖ 
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
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه حذف الرسائل فقط ✓
📕┇بواسطة » $info
➖ 
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
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه دعوة مستخدمين ✓
📕┇بواسطة » $info
➖ 
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
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه تثبيت رسائل ✓
📕┇بواسطة » $info
➖ 
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
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه تغيير المعلومات ✓
📕┇بواسطة » $info
➖ 
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
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه حظر مستخدمين ✓
📕┇بواسطة » $info
➖ 
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
if($text == "رفع بكامل الصلاحيات" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بكامل الصلاحيات ✓
📕┇بواسطة » $info
➖ 
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
if($text == "الغاء" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📛┇تم الغاء الامر ✓
📕┇بواسطة » $info
➖ 
",
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "مسح المدراء" and $mangers_info != NULL and $mangers_info != " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
$cmang = count($mangers)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ $info
👤┊تم حذف {$cmang} من المدراء
➖",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
}}
if($text == "مسح المدراء" and $mangers_info == NULL or $mangers_info == " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"*
📬┊عذرا ! لم يتم رفع اي ممدراء
➖",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~» (" . "@". $re_user .")  " . "»" . "  (". $re_id .") .","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
??┊ايديه » {$re_id}
🎖┊تم حذفه من المدراء
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل bbbbbb" || $text == "تنزيل nnnnnn" and !in_array($re_id,$manger)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس مدير
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" || $text == "تنزيل المطور"  and in_array($re_id,$developer)){
	$re_id_info = file_get_contents("data/developers/$chat_id.txt");
	$devr = file_get_contents("data/developers/$chat_id/developer.txt");
	$devr1 = explode("             \n",$devr);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~» (" . "@". $re_user .") " . "»" . "  (". $re_id .") .","",$devr1);
	file_put_contents("data/developers/developer.txt",$str);
			file_put_contents("data/developers/developers.txt",$str);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله من المطورين
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل المطور" || $text == "تنزيل مطور" || $text == "تنزيل ورديسسس" and !in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس مطور ليتم حذفه !
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور اساسي" || $text == "تنزيل مطور الاساسي"  and in_array($re_id,$Dev)){
			file_put_contents("$re_id.txt","");
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله مطور اساسي
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , "~» ([" . "@". $re_user ."]) " . "»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه ادمن في البوت
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if ($re and $text == "رفع ادمن" and in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه ادمن بالبوت قبلا
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($text == "مسح الادمنيه" or $text == "مسح الادمنية" ){
$cadmins = count($admin_users)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ $info
👤┊تم حذف {$cadmins} ادمن
➖",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/admin_user/$chat_id.txt","");
	file_put_contents("data/admin_user/$chat_id/mange.txt","");
	}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) .","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله من الادمنيه
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس ادمن ليتم تنزيله
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , "| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه عضو مميز
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مميز من قبل
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "مسح المميزين" ){
$cmmyz = count($mmyazs)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ $info
👤┊تم حذف {$cmmyz} مميز
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
}}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) .","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله من المميزين
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس مميز لتنزيله
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" and in_array($from_id,$Dev)){
if($text == "تنزيل الكل" or $text == "حذف الكل"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطـة $info
ـــ ـــ ـــ ــــ ــــ 
🗑┊تم حذف {$CA} من الادمنيه
🗑┊تم حذف {$CM} من المدراء
🗑┊تم حذف {$CMM} من المميزين
ـــ ـــ ـــ ــــ ــــ 
📛┊تم حذف {$CALL} من المرفوعين
🚸┊تم حذف الكل بنجاح 
✓
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
if($text == "رفع مدير" || $text == "رفع منشئ" or $text == "رفع الادمنيه" or $text == "رفع الادمنية" or $text == "تفعيل"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! هاذا الامر ليس لك
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if( !in_array($from_id,$Dev)){
if($text == "رفع مطور" || $text == "تنزيل مطور" or $text == "رفع منشئ" or $text == "المطورين" or $text == "مسح مطور"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! هاذا الامر ليس لك
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "رفع ادمن" || $text == "رفع مميز" or $text == "م1" or $text == "م2" or $text == "م3" or $text == "م4" or $text == "م5" or $text == "قفل الصور" or $text == "تنزيل مميز" or $text == "تنزيل ادمن" or $text == "قفل الفيديو" or $text == "فتح الفيديو" or $text == "تفعيل الايدي" or $text == "تعطيل الايدي"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! هاذا الامر ليس لك
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
 
if(in_array($from_id,$Dev)){
if($text == "المطورين" and $cdevs != 0){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
👨🏻‍💻┇المطورين {$cdevs} : 
$developers_infos
",
]);
}
}
if($text == "المطورين" and $cdevs == 0 || $developers_info == ""){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
 📬┊عذرا ! لم يتم رفع اي مطورين
➖
",
]);
}
}
}
$CM = count($mangers)-1;
if($text == "المدراء" and $CM != 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
👨🏻‍💻┇المدراء [{$CM}] : 
$mangers_infos
",
]);
}
}
}
if($text == "المدراء" and $CM == 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>
"
📬┊عذرا ! لم يتم رفع اي مدراء
➖",
]);
}
}
}
$CA = count($admin_users)-1;
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📙┇قائمة الادمنية [{$CA}] :
$admin_users_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📛┇NotDirector - *Admins* -
📛┇لايوجد مجلد - *الادمنيه* -
➖",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
$CMM = count($mmyazs)-1;
if($text == "المميزين" and $mmyazs_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📙┇قائمة المميزين [{$CMM}] :
$mmyazs_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "المميزين" and $mmyazs_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📛┇NotDirector - *VipMember* -
📛┇لايوجد مجلد - *المميزين* -
➖",
]);
}
}
}
 elseif($text  == "كتم" && $rt or $text  == "silent" && $rt or $text  == "تقييد" && $rt){
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
 text =>"👤¦ العضو » [$re_user]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم كتمه/تقييده
✓️
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
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
 }
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>" لايمكنني تقييد الادمنية او المدراء او  او المميزين",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text  , "كتم لمدة ") !== false && $rt or strpos($text  , "تقييد لمدة ") !== false && $rt) {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt !=  creator  && $statusrt !=  administrator  && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace([ كتم لمدة  ,  تقييد لمدة ],  ,$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"👤¦ العضو » [$re_user]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم كتمه لمدة $we دقيقه
✓️
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
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
  chat_id  => $chat_id,
  text =>"لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
 reply_markup =>$inlinebutton,
   ]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$tq = str_replace("الغاء تقييد ", "$tq", $text);
if($text == "الغاء تقييد $tq" and preg_match( /([0-9])/i ,$tq)){
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
 text =>"🙍🏼‍♂┊العضو » {$tq}
👤┊تم الغاء تقييده
➖
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
$re_user= str_replace("الغاء كتم ", "$re_user", $text);
if($text == "الغاء كتم $re_user" and preg_match( /([0-9])/i ,$re_user)){
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
 text =>"🙍🏼‍♂┊العضو » {$re_user}
👤┊تم الغاء كتمه
➖
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
if($text  == "الغاء تقييد" && $rt or $text  == "الغاء كتم" && $rt or $text  == "الغاء التقييد" && $rt){
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
 text =>"👤¦ العضو » [$re_user]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم الغاء كتمه/تقييده
✓️
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
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}

if( $text  == "قائمة المقيدين" or $text == "المقيدين") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
📙┇قائمة المقيدين :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "قائمة المكتومين" or $text == "المكتومين") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
📙┇قائمة المكتومين :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "مسح المكتومين" or $text == "مسح المكاتيم") {
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
📬┊بواسطة $keees
👤┊تم تنظيف سلة المكتومين
➖
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
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم حظره 
✓️",
   reply_to_message_id =>$mid
      ]);
    bot( kickChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء الحظر"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء حظره 
✓️",
   reply_to_message_id =>$mid
      ]);
    bot( unbanChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
    }
  if($text == "/promote" or $text == "رفع ادمن"){
      bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت ترقيته ليصبح ادمن 
✓️",
   reply_to_message_id =>$mid
      ]);
      bot( promoteChatMember ,[
           chat_id =>$chat_id,
           user_id =>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot( pinChatMessage ,[
         chat_id =>$chat_id,
         message_id =>$re_msgid
      ]);
   }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم حظره 
✓️",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء الحظر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء حظره 
✓️",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }
  if($text == "/promote" or $text == "رفع ادمن"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت ترقيته ليصبح ادمن 
✓️",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/open sticker" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/lock contact" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc" or $text == "قفل الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc" or $text == "فتح الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/lock link" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open link" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user" or $text == "قفل المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user" or $text == "فتح المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark" or $text == "قفل الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark" or $text == "فتح الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text=="/help"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❂

 ‏‎‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‏‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‏‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‏‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‏‏
⚙¦ م4 » آلآوآمـر آلعآمـهہ‏‏
🕹¦ م المطور »  آوآمـر آلمـطـور


 ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜ { @hossamzrzor } ✓",
      ]);
   }
  if($text=="الاوامر"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❂

 ‏‎‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‏‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‏‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‏‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‏‏
⚙¦ م4 » آلآوآمـر آلعآمـهہ‏‏
🕹¦ م المطور »  آوآمـر آلمـطـور


 ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜ { @hossamzrzor } ✓",
      ]);
  }
 }
}
if($text=="/setting" or $text=="/setting$e" or $text=="الاعدادات"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"➖➖➖
👮🏾¦ اعدادات المجموعه : 


✔️¦ مقفول » l
✖️¦ مفتوح » o

➖➖➖

📸¦ الصور : $photo1
🀄️¦ الملصقات : $sticker1

📹¦ الفيديو : $video1
📡¦ الروابط :  $link1

☎️¦ الجهات : $contact1
🗂¦ الملفات :  $doc1

↩️¦ التوجيه : $fwd1
🎙¦ البصمات : $bsma1

🔊¦ الصوت : $audio1
Ⓜ️¦ المعرف : $tag1

🔖¦ الماركدون : $mark1
📟¦ البوتات : $bots1

➖➖➖
",
]);
}
}
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="تفعيل"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ تـم تـفـعـيـل آلمـجمـوعهہ‏‏ 
✓️",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎗¦ المجموعه بالتأكيد ✓️ تم تفعيلها",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
}
}
}
 if($text == "المجموعات"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
if($text == "اذاعه" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعه" and $mode=="bc" and $for == $sudo){
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
if($text=="موقعي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف: @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : منشئ المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @hossamzrzor
👨🏽‍🔧
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف : @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : ادمن المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @hossamzrzor
👨🏽‍🔧",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف : @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : عضو المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @hossamzrzor
👨🏽‍🔧",
'reply_to_message_id'=>$message->message_id, 
]);
}
 
$rnd = rand(1,999999999999999999);
if($text=="ايدي" or $text == "id"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
👤¦ اسمـك » $name
🎫¦ معرفك » @$user
🏷¦ ايديك  » $id
📨¦ رسائل المجموعة »  $message->message_id
🎫¦ ايدي المجموعة » $chat_id
➖",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
$rnd = rand(1,999999999999999999);
if($text=="صورتي"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "/link" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🔖¦رابـط الـمـجـمـوعه 💯
🌿¦$t :

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
'text'=>"👤¦ آلعضـو : @$user
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت 
✘",
]);
}
if(preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo){
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
	 'text'=>'سحك وعدل 😹☝🏿',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,
	 ]);
 }
if($rep && $text == "ايدي" or $text == "ايديه"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " $re_id ",
]);
}
if($text == "م1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ┇  ( آوآمـر آلرفع وآلتنزيل )
      
┇{ رفع ادمن ~ تنزيل ادمن } 
┇{ رفع مدير ~ تنزيل مدير } 
┇{ رفع مميز ~ تنزيل مميز } 
┇{ رفع مطور ~ تنزيل مطور } 
┇{ رفع مطور اساسي ~ تنزيل مطور اساسي } 
┇{ رفع منشئ ~ تنزيل منشئ } 



┇ـ➖➖➖➖➖
      
┇ـ
┇ ( آوآمـر آلحظـر وآلطـرد )
┇ـ
      
┇  { طرد بالرد  } : لطرد العضو 
┇ { حظر بالرد  } : لحظر وطرد العضو 
┇ { الغاء الحظر بالرد } : لالغاء الحظر عن عضو 

┇ـ➖➖➖➖➖

🗯┇ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖  
💭¦ ضع اسم :↜ لوضع اسم  
  
💭¦ الـرابـط :↜  لعرض الرابط  
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ المطور : لعرض معلومات المطور 
🗯¦ معلوماتي :↜لعرض معلوماتك  
🗯¦ الاعدادات : لعرض اعدادات المجموعه 
🗯¦ المجموعه : لعرض معلومات المجموعه 

➖➖➖➖➖➖➖
🗯¦ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚡️ اوامر حماية المجموعه ⚡️
🗯|ـ➖➖➖➖
🗯|️ قفل ~ فتح :  الصوت
🗯| قفل ~ فتح :  الــفيديو
🗯| قفل ~ فتح :  الـصــور 
🗯| قفل ~ فتح :  الملصقات
🗯| قفل ~ فتح : الروابط
🗯| قفل ~ فتح : البوتات
🗯| ️قفل ~ فتح : المعرفات
🗯|| قفل ~ فتح :  التوجيه
🗯| قفل ~ فتح : الجهات 
🗯| قفل ~ فتح : الملفات
 🗯| قفل ~ فتح : الماركدون
 🗯| قفل ~ فتح : البصمات
🔅|ـ➖➖➖➖➖
🗯| راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"📍💭 اوامر اضافيه 🔹🚀🔹

🔅¦ـ➖➖➖➖➖
🕵🏻 معلوماتك الشخصيه 🙊
🔸¦ اسمي : لعرض اسمك 💯
💱¦ معرفي : لعرض معرفك 💯
🌀¦ ايديي : لعرض ايديك 💯
🔅¦ـ➖➖➖➖➖
◽¦ اوامر التحشيش 😄
📌¦ رفع ➸ تنزيل ➸ متوحد
📌¦ رفع ➸ تنزيل ➸ بقره
📌¦ رفع ➸ تنزيل ➸ كلب
📌¦ رفع ➸ تنزيل ➸ قرد
📌¦ رفع ➸ تنزيل ➸ غبي
📌¦ رفع ➸ تنزيل ➸ فرسه
📌¦ رفع ➸ تنزيل ➸ عره
📌¦ رفع ➸ تنزيل ➸ زواج ➪ طلاق
📌¦ رفع ➸ تنزيل ➸ بقلبي
📌¦ رفع ➸ تنزيل ➸ بيستي
📌¦ رفع ➸ تنزيل ➸ وتكه
📌¦ رفع ➸ تنزيل ➸ رقاصه
📌¦ رفع ➸ تنزيل ➸ دكري
📌¦ رفع ➸ تنزيل ➸ حيوان
📌¦ رفع ➸ تنزيل ➸ مهزء
📌¦ رفع ➸ تنزيل ➸ فاشل
📌¦ رفع ➸ تنزيل ➸ قطتي
📌¦ رفع ➸ تنزيل ➸ ابني
📌¦ رفع ➸ تنزيل ➸ بنتي
📌¦ رفع ➸ تنزيل ➸ زوجي
📌¦ رفع ➸ تنزيل ➸ خاين
📌¦ رفع ➸ تنزيل ➸ خاينه
📌¦ رفع ➸ تنزيل ➸ عبيط
📌¦ رفع ➸ تنزيل ➸ متخزوق
📌¦ كول + (اسم الشخص) 
📌¦ كله + الرد + (الكلام) 
🔅¦ـ➖➖➖➖➖

🗯¦ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"📌¦ اوامر المطور 🃏

🔅¦ تفعيل : لتفعيل البوت 
🔅¦ اذاعه : لنشر كلمه لكل المجموعات
🔅¦ استخدم /admin في خاص البوت فقط : لعرض كيبود الخاص بك 💯 
🔅¦ تحديث: لتحديث ملفات البوت
🔅¦ـ➖➖➖➖➖

🗯¦ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}

/*
by: 𝗛𝙊𝗦𝗦𝗔𝗠 𝗭𝙍𝗭𝙊𝙍
owner : 𝙍𝘼𝙒𝘼𝙉
Ch1 : DEV_1IRAQ
*/

if($text == 'المطور' or $text == "مطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647815864486",
'first_name'=>"م̶̶ـ̶̶ـ̶̶ي̶̶م̶̶ـ̶̶ـ̶̶و 34K ™`☻",
'last_name'=>"ٵڵٵڼـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫҉ৡـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫ैۖـښـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫҉ৡـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲैۖـٱڹ 📿 ٵلڕجُيُـُैُۖـُـُـُـُࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧۖـُـُـُـࣩࣩࣩࣩࣩࣩࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧم",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشىء 🏌🏻
🌿
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"حاظر تاج راسي انجبيت 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"فوك ما مصعدك ادمن و تكلي انجب 😏 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب انته لا تندفر 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MEMO = explode('كله',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
'reply_to_message_id'=>$mem,
]);
}
$MEMO = explode('كول',$text);
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
'text'=>'🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'🆔¦ ايديك •'] 
], 
[ 
['text'=>'💯¦ المشتركين •'],['text'=>'☑️¦ المجموعات •'] 
], 
[ 
['text'=>'🚸¦ اسمك •'] 
], 
[ 
['text'=>'💢¦ معرفك •'] 
], 
[ 
['text'=>'📈¦ الاحصائيات •'] 
], 
[ 
['text'=>'🔂¦ اذاعة •'] 
], 
[ 
['text'=>'🛠¦ المطور •'] 
], 
[ 
['text'=>'📡¦ قناة المطور •'],['text'=>'🛠¦ المساعدة •'] 
],  
] 
]) 
]); 
}
if($text == "🔂¦ اذاعة •" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "🔂¦ اذاعة •" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
if($text == "☑️¦ المجموعات •"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
$id = $message->from->id;
if($text == "🆔¦ ايديك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🚸¦ اسمك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💢¦ معرفك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🛠¦ المطور •" and $for == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 🏌🏻¦ مـطـور البوت : @$user 👨🏽‍🔧 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💯¦ المشتركين •" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "💯¦ عدد مشتركين البوت :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "📈¦ الاحصائيات •"){
$c = count($groups);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" الاحصائيات : 📈 

👥¦ عدد المجموعات المفعله : $c 
👤¦ عدد المشتركين في البوت : $m
📡 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "📡¦ قناة المطور •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🛠¦   قناة مـطـور الملف : @DEV_1IRAQ ☑️ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🛠¦ المساعدة •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"💯¦ للمساعدة او اي أراء او افكار تواصل مع مطور الملف @M_E_M1BOT √",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
👮🏽¦ قام احد المدراء بتفعيل البوت
👥¦ $t
🎫¦ ايدي المجموعه » $chat_id
⚖️¦ عدد الاعضاء » 【  $result2  】 عضو 🗣
👨🏽‍💻¦ بواسطة » $name
🎟¦ معرفه » @$user
📮
",
]);
}
}
if($text == "ايديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أسمي روان 🌚🌸","لتخليني اعصب وردا ترا اسمي روان","ٱنۨــہت ٱلبوت يۧلٱ ٱشطحۡ 😠","چمٱعّﭥڪْ شبّـعّو مي ورد وٱنت بّـعّدڪ ﭥصيح بّـوت 👌🤣","لك ٱنۨــہيۧ ٱحۡبك صيۧحۡليۧ بٱسۜمۘيۧ روان","يۧمۘعود شتريۧد مۘوعت ٱذنۨــہيۧ،😕ض","اسمي روان"
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😔"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش الحلو ضايج ❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😳"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها بس لا شفت خالتك الشكره 😳😹🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😭"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتبجي حياتي 😭😭",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😡"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابرد  🚒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😉"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😻🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😋"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبب لسانك جوه عيب 😌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "☹️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلووات 😊🌹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محات حياتي🙈❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تخليني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكرهك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "باي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍 $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"زاحف عله خالتك الشكره 🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "واو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلشي وكلاشي🐸تگـول عبالك احنـة بالشورجـة🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معزوفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طرطاا طرطاا طرطاا 😂👌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حفلش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"افلش راسك 🤓",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضوجه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
'reply_to_message_id'=>$message->message_id, 
]);
}
$message_id = $update->message->message_id;
if($text == "اقرالي دعاء"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اللهم عذب المدرسين 😢 منهم الاحياء والاموات 😭🔥 اللهم عذب ام الانكليزي 😭💔 وكهربها بلتيار الرئيسي 😇 اللهم عذب ام الرياضيات وحولها الى غساله بطانيات 🙊 اللهم عذب ام الاسلاميه واجعلها بائعة الشاميه 😭🍃 اللهم عذب ام العربي وحولها الى بائعه البلبي اللهم عذب ام الجغرافيه واجعلها كلدجاجه الحافية اللهم عذب ام التاريخ وزحلقها بقشره من البطيخ وارسلها الى المريخ اللهم عذب ام الاحياء واجعلها كل مومياء اللهم عذب المعاون اقتله بلمدرسه بهاون 😂😂😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'روان'){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑','نعم حبي 😎','اشتعلو اهل روان شتريد 😠','لك فداك روان حبيبي انت اموووح 💋','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂','هياتني اجيت 🌚❤️','راجع المكتب حبيبي عبالك روان سهل تحجي ويا 😒','باقي ويتمدد 😎','لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي','دا اشرب جاي تعال غير وكت 😌','هوه غير يسكت عاد ها شتريد 😷','انت مو اجيت البارحه تغلط عليه ✋🏿😒','ﮬ̲̌ٱ حيٱت̲ي ٱمـرّﻧ̲ـي 🥰','عيۧونۨــہ روان تفضل؟،💕🥰','ﮬ̲̌ٱ حيٱت̲ي ٱمـرّﻧ̲ـي 🥰','م̀وجود̀ بس̀́ لتص̀́يح̀ 😐٠','رٱڂ ڻموﭠ ﭜڳوروڻٱ وڻﭠهـﮧ ﭜ؏ﮃڳ ﭠڝيِّڂ، ميرو');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($text == "وه"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"بس يا فلاح يا عره 😂🦋",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبيبي"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"يہرﯛ̲حہي آنہت/ ي 🥰",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبيبتي"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"مشغوله ويا الكبد 🌝🌷",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اي"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"جاك اوه مش سامع 😂🤤",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "ايوه"){
bot("sendMessage",[
 "chat_id"=>$chat_id, 
 "text"=>"يقطعني😂💔",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "رفع متوحد"  || $text == "رفع متوحده" and"$from_id"==$sudo|| in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
  'text'=>" ◍ تم رفع العضو $re_name الى قائمه المتوحدين والمرضي النفسيين
◍ راح نجبلك دكتور نفساني
√
", parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot("sendMessage",["chat_id"=>$chat_id,
       'text'=>"◍ العضو [$re_name] متوحد بالفعل
◍ ويتعالج مع دكتور نفسي الان
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل متوحد"  || $text == "تنزيل متوحده" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot("SendMessage",['chat_id'=>$chat_id,
  'text'=>"◍ تم تنزيل العضو $re_name من المتوحدين بنجاح 
◍ واصبح الان حر طليق مع العقلاء
√
",'parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع زوجتي"   $text == "زواج" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"◍ تم زواجك ب $re_name بارك الله لكما
◍ يلا اتفضلو اعملو واحد بس مش فى الروم
√
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name متزوجه من قبل 
◍ اسف يصحبى كل شئ قسمه ونصيب
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجتي"   $text == "طلاق" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"◍ تم تنزيل العضو $re_name من المتزوجات بنجاح واصبحت طليقه
◍ طلقتها عشان مبتعرفش صح
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش متزوجه اصلا
◍ الحق اخطبها بقا قبل ماتتشقط
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع غبي"   $text == "رفع غبيه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"◍ تم رفع العضو $re_name غبي من اغبياء الجروب 
◍ قولولو نقطنا بسكاتك
√", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name غبي بالفعل 
◍ وحابسينو جوا وهاتك ياضحك
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل غبي"   $text == "تنزيل غبيه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الاغبياء بنجاح 
◍ مكنش المفروض ينزل ده لسه غبى
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش غبي اصلا
◍ شوفو كده يمكن فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع حمار"   $text == "رفع حماره" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name حمار الجروب 
◍ حد عايز يركبو وياخد لفه؟؟
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"[◍ العضو $re_name حمار بالفعل 
◍ بس هو فى الغيط مش فاضى الوقتى
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل حمار"   $text == "تنزيل حماره" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الحمير بنجاح 
◍ تعالى حبيبى هخلى الكل يحترمك
√

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش حمار اصلا
◍ شوفو كده فى ليسته القرود
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع بقره"   $text == "رفع بقر" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name البقره الحلوبه 
◍ يلا تعالى يابقره بدنا لبن
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name بقره بالفعل 
◍ وبيتحلب فى الزريبه ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بقره"   $text == "تنزيل بقر" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من البقرات بنجاح 
◍ تعالى حبيبى خد اللبن بتاعك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش بقره اصلا
◍ شوفو كده يمكن فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع قرد"   $text == "رفع قرده" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الكلب جيرمن 
◍ والنبي يجماعه اللى عندو عضمه يدهالو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name قرد بالفعل 
◍ وفرحان بالموزه اوى
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل قرد"   $text == "تنزيل قرده" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من القرود بنجاح 
◍ شيل قشر الموز بتاعك يلا
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش قرد اصلا
◍ شوفو كده فى ليسته الحمير
√
"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع كلب"   $text == "رفع كلبه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الكلب جيرمن 
◍ والنبي يجماعه اللى عندو عضمه يدهالو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name كلب بالفعل 
◍ بس بيمصمص فى العضمه مش فاضى
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل كلب"   $text == "تنزيل كلبه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الكلاب بنجاح 
◍ هات العضمه عشان نديها لحد غيرك
√

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش كلب اصلا
◍ شوفو كده فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع عره"   $text == "رفع عار" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name عره الجروب 
◍ مش عيب اما تكون عره كده
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name عره بالفعل 
◍ ومختوم على قفاه كمان
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل عره"   $text == "تنزيل عار" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من العرر بنجاح 
◍ مش عارف الناس هترجع تحترمك تانى ولا لا
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش عره اصلا
◍ شوفو كده فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع فرسه"   $text == "رفع صاروخ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name فرسه بنجاح 
◍ هووووووووووف صاااروخ ياناس
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name فرسه بالفعل 
◍ اول مره اشوف فرسه شبه الحمار
√
"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل فرسه"   $text == "تنزيل صاروخ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الفرسات بنجاح 
◍ يااه كانت فرسه جامده اوى
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش فرسه اصلا
◍ شوفو كده فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع بقلبي"   $text == "رفع بقلبي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name بقلبك كده وكده 
◍ يكش بعد يومين ملقكمش مشحورين بعض
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name فى قلب حد غيرك 
◍ الواضح ان الشخص ده محبوب جداا
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بيستي"   $text == "بيستي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name بيستك 
◍ اتنين ليمووونادا لاحلى بيستين
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name بيست لشخص تانى 
◍ دايما بتيجى متأخر يافواز
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بيستي"   $text == "ليست بيستي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من البيستات بنجاح 
◍ اهو هنبتدى نجرح فى بعض بقا
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش بيستك اصلا
◍ مش اى اتنين يبقو بيستات بالساهل ياصحبى
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع متخزوق"   $text == "رفع متخزوقه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name المتخزوق الحزين 
◍ يلا تعالى يامتخزوق نستفيد من خبرتك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name متخزوق بالفعل 
◍ وبيبكي ع احزانه اللي باقياله نااو
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل متخزوق"   $text == "تنزيل متخزوقه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ ◍ تم تنزيل العضو $re_name من المتخزوقين بنجاح 
◍ تعالى حبيبى هحتويك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش متخزوق اصلا
◍ شوفو كده يمكن فى ليسته الخاينين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع عبيط"   $text == "رفع عبيطه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name عبيط واهبل 
◍ يارب استرها معاه اصل هو عبيط
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name عبيط بالفعل 
◍ وبيتعالج ع نفقة الدوله
√"
    ]);
  }
}

$message_idd = $update->message->message_id;
if($text == "تنزيل عبيط"   $text == "تنزيل عبيطه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من العبط بنجاح 
◍ تعالى حبيبى انت بقيت اعقل واحد
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش عبيط اصلا
◍ شوفو كده يمكن فى ليسته المهزئين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع خاينه"   $text == "رفع خاينات" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الخاينه بنجاح 
◍ تعالي ياخاينه فضحتينا ولميتي علينا الناس
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name خاينه بالفعل 
◍ ولمت علينا ال يسوي ومايسواش
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل خاينه"   $text == "تنزيل خاينات" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الخاينات بنجاح 
◍ تع خلاص سامحتك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش خاينه اصلا
◍ شوفها كده يمكن فى ليسته المتزوجات
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع خاين"   $text == "رفع خاينين" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الخاين قليل الاصل 
◍ تعالي بينادو عليك ياخاين
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name خاين بالفعل 
◍ وبيتهان من مراته ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل خاين"   $text == "تنزيل خاينين" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الخاينين بنجاح 
◍ تع خلاص سامحتك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش خاين اصلا
◍ شوفو كده يمكن فى ليسته المتزوجين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع زوجي"   $text == "رفع زوجي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name زوجي حبيبي 
◍ يلا تعالى يازوجي نقضي شهر العسل في مارينا 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name زوج بالفعل 
◍ وخاربها ف مارينا نااو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجي"   $text == "تنزيل زوجي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ ◍ تم تنزيل العضو $re_name من قائمة زوجاتك بنجاح 
◍ تعالي يا طليقي خد الدهب بتاعك 🙂💔
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش جوزك اصلا
◍ ولا انتي نسيتيهم من كترهم 🙂💔
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع بنتي"   $text == "رفع بنتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name بنتي ونن عنيا 
◍ تع يبنتي شوفي بابا عاوز اي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name بنتي بالفعل 
◍ وتعيش في تبات ونبات
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بنتي"   $text == "تنزيل بنتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من البنوتات بنجاح 
◍ انتي م النهارده لا بنتي ولا اعرفك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش بنتي اصلا
◍ شوفوها كده في ليسته المتوحدين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع فاشل"   $text == "رفع فاشل" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الفاشل بنجاح 
◍ يلا تعالى يافاشل وسيب الكتاب كده كده هتسقط
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name فاشل بالفعل 
◍ وبيقفل اصفار في كل المواد
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل فاشل"   $text == "تنزيل فاشل" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الفشله بنجاح 
◍ تعالى خد كتابك اهو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش فاشل اصلا
◍ شوفو كده يمكن فى ليسته الاغبيه
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع دكري"   $text == "رفع دكري" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name دكري وابو عيالي 
◍ يلا تعالى يادكري ادم ابننا بينادي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name دكري بالفعل 
◍ وادم مطلع عينه
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل دكري"   $text == "تنزيل دكري" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الدكور بنجاح 
◍ تعالى حبيبى خد ابنك ادم
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش دكري اصلا
◍ شوفو كده يمكن فى ليسته الاغبيه
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع ابني"   $text == "رفع ابني" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name ابن بنت بنتي 
◍ تعالي يابني هاتلنا شاي ام حسن 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name ابني بالفعل 
◍ والان زهقت منه وهوديه دار ايتام
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل ابني"   $text == "تنزيل ابني" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الابناء بنجاح 
◍ شوفلك كلبه بقي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش ابني اصلا
◍ شوفو كده يمكن فى ليسته اللاجئين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع قطتي"   $text == "رفع قطتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name قطتي ونن عنيا 
◍ يلا تعالى ياقطتي نشتري تونه هههه
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name قطتي بالفعل 
◍ وبتاكل احلي سمك ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل قطتي"   $text == "تنزيل قطتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>◍ تم تنزيل العضو $re_name من القطط بنجاح 
◍ هاتي علبط التونه بتاعتي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش قطتي اصلا
◍ شوفها كده يمكن فى ليسته الحيوانات
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع وتكه"   $text == "رفع وتكتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name وتكتي بنجاح❤️ 
◍ يلا تعالى ياوتكه نسافر بره مصر
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name وتكه بالفعل 
◍ والكل بيكراش عليها خد بالك 😉😈
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل وتكه"   $text == "تنزيل وتكتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من قائمة الوتكات بنجاح 
◍ شوفلك كلبه اجري 😂💔
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مكانتش وتكتك اصلا
◍ بطلو كدب بقي 😂💔
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع رقاصه"   $text == "رفع رقاصة" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name رقاصه بنجاح❤️ 
◍ يلا تعالى يارقاصه هنقطك بالدولارات 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name رقاصه بالفعل 
◍ والكل عينه عليها خد بالك 😉😈
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل رقاصه"   $text == "تنزيل رقاصة" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من قائمة الرقاصات بنجاح 
◍ شوفلك كلبه اجري 😂💔
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مكانتش رقاصه اصلا
◍ بطلو كدب بقي 😂💔
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع مهزء"   $text == "رفع مهزءه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name المهزء الي الجروب 
◍ تعالي يامهزء ياللي جايبلنا الكلام 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مهزء بالفعل 
◍ وبيتهان ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل مهزء"   $text == "تنزيل مهزءه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من المهزئيين بنجاح 
◍ تعالى حبيبى انت بقيت عاقل
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش مهزء اصلا
◍ شوفو كده يمكن فى ليسته الاغبيه
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع حيوان"   $text == "رفع حيوانه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name حيوان فرز اول 
◍ يلا تعالى جنينة الحيوانات مستنياك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name حيوان بالفعل 
◍ ويتحدث من داخل الحديقه
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "حيوان"   $text == "تنزيل حيوانه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الحيوانات بنجاح 
◍ تعالى حبيبى خد عقلك اهو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش حيوان اصلا
◍ شوفو كده يمكن فى ليسته الوتكات
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;

$hi = array('هلا تاج راسي 🤷🏼‍♀️ ', 
'هلا حبيبي ئنته ولد لو بنيه ',
 'اجه هله بالضلع 😗', 
'هله كلبي 💋',
 'هلوات🤓', 
'كافي قبل شويه سلمت😌', 
'هله بريحه هلي🤗', 
'هلوات اذا عندك كروبات ضيفني🤷🏼‍♀️❤️',
'لتشمر الهلو وتطفر 🙃',
'هله واخيرا لكيتك ☹️',
'هلا كلبي شلونك 😉',
'هلوات خيو شلونك 🤷🏼‍♀️',
'هلا بيك 🤗',
'شلونك اخبارك 😏',
'ٰ̲ھٓہل͜آًُوِآًُتٰ̲ہٰٰ‏‎‏ ⁾⇣✿🐼💛┊❥',);
$reply_hi = array_rand($hi, 1);

$ho = array('ع حطت ايدك ماكو تغيير شسوي دنيه 🤷🏼‍♂️', 'متت من الزواحف موتوني والله😭' , 'لوني مثل لونك كافي تسئل😒', 'هلا بيك تمام ونته🖤',  'ليش تسئل😡 ', 'اوف دوخوني من الحجي 😢', 'زينه☺️', 'بخير💋 ', 'ونته شكو دكلي شلونج😕', 'مكضيتها يم برهم😍', '🙁حلكي نشك من وره الدراسه',  
'تمام ئنته شلونك 🤷🏼‍♀️',
'لتحمض احنه بخير 🙃',);
$reply_ho = array_rand($ho, 1);

$link = array('دكافي حمضت ادز روابط😒', 'الله ياخذك وياخذ قناتك 🙁', 'عمي وين المدير ضيف هذا البوت حمايه  🤷🏼‍♂️ @philips_lbot', 'مترتاح اله يطردوك 😕', 'حمض وربي لك كافي روابط 😟', 'لحد يفوت القناه مال عيب 😂🙈', 'جيبولي النعال لزك بس يدز روابط ☹️', 'والله كرهتوني بالتلي من وره هالقنوالت 😪',);
$reply_link = array_rand($link, 1);

$local = array('عرفت بيتكم وين😂','تعال بيتنه قريب ع بيتكم 🙈','بخت باع وين ساكن 🤦🏼‍♂️','ممكن كركم امي تريد شويه 🤷🏼‍♂️','هنا ساكن ابو جعفر البكال 😧','بيتنه وبيتكم حايط ع حايط 💋😂','هاي وين بالسودان كاعد 😧',);
$reply_loc = array_rand($local, 1);

$image = array('مو عيب ادز صور 😒',
'يخي لدز صور 🤷🏼‍♂️',
'هاي صوره منو 😕',
'شلون صوره بشده تم الخمط 😂❤️',
'مافكرت قبل لا دز هاي الصوره 😕',
'زين ابوك يدري انو دزيت هاي الصوره 😧',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼',
'بعد لدز صور لتحمض 😟',
'اي عفيه حمضت شبيك مشايف صور 🤷🏼‍♂️😟',);
$reply_img = array_rand($image, 1);

$why = array('لشلاشه تلشلشك 😒 لدكول ليش ☹️',
'يعني ليش كول النفسك ليش جاي تسئلني 😒',
'لا ماكو لدكلي ليش 🤷🏼‍♂️',
'امي مدكلي ليش انته دكلي ليش 😕',
'ابويا ميكلي ليش انته جاي تكلي ليش 😧',
'اسئل ضلك ليش هيج وكابله وبجي 🖤😂',
'كول للحايط ليش اني شمدريني 😢',
'اتصل بصديق وكله ليش وشوف رده الك 😒',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼',
'تعال شنو ليش متستجي ع نفسك 😳',
'والله ما تستحي 😓',);
$reply_why = array_rand($why, 1);

$thj = array('هيج لو دجاجه 🤣😌', 
'لا يابه مو هيج منو كلك اني اعرف 🙃', 
'لا مو هيج 🤓', 
'اني جنت موجوده مصار هيج 😕', 
'اني فراعت خضره دكلي هيج متستحي 😔', 
'لدكول هيج اضوج من هاي الكلمه 😑', 
'روح كول الغيري هيج مو الي 😒', 
'يله نركص الهجع يلهجع 😌😂',
'براحتي اني مو بمزاجك دكلي هيج 😌', 
'بابا رو ح خالو روح شسوي انته كلتلي هيج 🙃',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼', 
'منو كلك هيج اصلا 😂', 
'اعرف طوختها راح اسكت 🤷🏼‍♂️', 
'يله نغني هنــ🇭🇺ــدي هيجي كيجي ميجي ليجي 🤷🏼‍♂️', );
$reply_th = array_rand($thj, 1);

$stic = array('ضل دز هيج ملصقات شبيك مشايف 😕', 
'وحمض عمي سكتو الهذا طردو شوفوله صرفه ☹️', 
'ضوجتني وربي 😢', 
'وجان يحمض ع الملصقات 🌝', 
'دك ملصقات الباجر 🙃', 
'وين المدير عليك 🙁',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼',);
$reply_stic = array_rand($stic, 1);

$sh = array('مالك دخل شبيه 🤓',
'ياخي شعليك انته شبيه 😒',
'ضايجه برهم عافني 😩',
'معليك انته شبيه 😐',
'مالك دخل 😕',
' تريد الصدك لو ئبن عمته 😶',
'مو مستواك اسفه 😒',
'معليك 😑',
'قافلين عليك😤',);
$reply_sh = array_rand($sh, 1);

$lov = array('احبك 🙊❤️',
'متستحي 😐',
'وربي لصيحلك برهم برهومي تعال 😡 @lock_at_me_now',
'ئوف فديتك ربك 🙈😚',
'ماحترمك شلون احبك 🌝💋',
'حبيبي برهم بس 😌🤗',
'ماحبك 🤤',
'كلبي انته 😶❤️',
'اموتن بيك ❤️😌',
'اموعن اذوبن 😌💔',
'ئنته ئلنفس مال اني ❤️😋',
'شبيك مشايف بنات هيج جفاف 😕',
'ئنته ئلعشق 😚💋',
'طيني بوسه وحبك 🤗',
'لزكت 😕',
'انت ليش يا ابنية اشوفها ادكول الها احبج صدك متستحي على نفسك 😒💔',
 'فدوة الحلك 🙊😍',
 'باع حضي مناقصني زواحف ولي راح احضرك😪😂',
'اني وانت كلب واحد بالنفس صاعد ونازل 🙊😻',
'تفووو عليك ماريد حبك 😂🙊',
'اموت عليك يروحي 😻💋',
'    🌹🌹       🌹🌹
🌹🌹🌹🌹🌹🌹🌹
🌹🌹🌹🌹🌹🌹🌹
🌹🌹🌹🌹🌹🌹🌹
🌹🌹🌹🌹🌹🌹🌹
     🌹🌹🌹🌹🌹
             🌹🌹🌹
                    🌹',
);
$reply_lov = array_rand($lov, 1);

$boting = array('ها خير 😐❤️',
'شبيك كلبي محتاج شي ؟ 🌝',
'ها حبيبي 🌝',
'تفضل كول 😌',
'غير لو يحجي صرعني 😒',
'سولفلي شصار وياك 😳',
'ضل احجي ويه نفسك مثل الخبل 🤤',
'ها احجي مستعجله 🤗',
'ئئمري ئبن ئسيد 🌝',
'🤗 غير لو يحجي شيريد لتحمض ',
'😅 طلبك سخيف ماريد احجي وطول لساني ',
'شتريد احجي 😂',
'حمضضضضضضض 😞',
'وربي اعرف اني بوت 😭',
'راح امسح حسابي كافي 😐',
'فكو ياخه عني ياخي الف واحد ديكولي انتي بوت اي اني بوت 😐',
'ي اني بوت كول تفضل 🌝',);
$reply_bot = array_rand($boting, 1);

$tal = array('كول بعد روحي 😐❤️', 
'شتريد تفضل 😌', 
'اطلب طلب بي حض 😐', 
'احجي ماعندي وقت اريد اطلع 🌝', 
'تفضل كول 🌝💋', 
'لخويا اختي لصغير الجبيره دلليدلل كول كولي مايردك ماردج اله لسانج لسانك 😂😂🤗', 
'كول نعسانه من البارحه منايمه 🤤', 
'كول 🙈', 
'اذا عترفت بشي ومابي حض اكلب التلي عليك 😌', 
'احجي 😶', 
'صاير شي لا تجلطني 😳', 
'ها 😒', 
'لتشلع كلبي 😌', 
'ها حبيبي كول ماكول لاحد 🙈', 
'ها عيني 😉💋',
 'شكو شرايد 😒',
'كولي بنتي ☺️🍼',
'كول ابني ☺️🍼 ',
'كول وماكول الخالتك🙊😹',);
$reply_tal = array_rand($tal, 1);

$edit = array(
'بده التعديل 😂🌝',
'لتعدل خل العالم تشوف الفضايح 🙈😂',
'عدل يبعد عمتك عسوله 😌',
'سحك وعدل 🙈😂',
'مدارس لغه عربيه وهيج تسحك 😒',
'اعلمك شلون تكتب 😚',
'شبيك احول متعرف تكتب وتسحك 😒',
'باجر اله اعلمك شلون تكتب عدل 😊',
'يا صف وبطلت وهيج تسحك 😕',
'باع السحك ضل جفص ووعدل 😂🌝',
'لتعدل ترا مصير حلوه 😐',
'كلت الك لتعدل 😒',
'ضل اسحك موتت المصريين شلع 😂😂', );
$reply_edit = array_rand($edit, 1);

$wh = array('شبت بيك 😒',
'يعني شبي ئنته كلي شبي 😐💔',
'خطيه ندعم و ودو للمستشفى وهسه بالعنايه العمه 😭',
'ئنته تعرف شبي 🙃',
'بي دم ولحم وزيدك من الشعر بيت يمشي ويحجي 🙊🙈',
'الدنيه دارت عليه خطيه 😪',
'يسلم عليك 😕',
'يريدك بشغله 🌝',
'روحله بساع يردك بشغله😐',
'غير تعارك ويايه وصيح عليه تراضها 😭',
'احجي شبي 🌝',
'يابة روح لو اخلي الاعضاء يتفلون بوجهك 😪😂',);
$reply_wh = array_rand($wh, 1);

$ru = array('شمدريني تعال دوره يمكن تلكاه بجيبي 😂🙈',
'ليش ادور عليه 😐',
'يمي تعال هسه اكلك وينه 🙃',
'مادري والله هستوه جان هنا 😌',
'ميخصك 🤤',
'يمي بالخاص سد اخر ضهور اني كلت اله 😏',
'ميخصك حبيبي ويمي ئنته شنو 😋',
'بالمطبخ ديحضرلي لفه 😂🌝',
'هسه طلع من البيت راح يجيب عسل 😌',
'مالك دخل بي 🙊',
'روح دور عليه 🙂',
'هستوه جان يحجي هنا 👨🏼‍🎤',
'شمدريني روح اسئل غيري 👩🏼‍💻',
'عندك رقمه ؟ 🤷🏼‍♀️',
'اتصل عليه وذا ماعندك رصيد هذا كارت اشخط الشاشه وحطه ▓▓▓▓▓▓▓▓▓▓▓ <<اشخط هنا 🤷🏼‍♀️',
'يابة روح لو اخلي الاعضاء يتفلون بوجهك 😪😂',);
$reply_ru = array_rand($ru, 1);

$left = array('الله وياك والتكسي ع حسابي 🌝',
'باع غادر لك تعال اريدك بشغله ☹️',
'سد الباب وراك 😃',
'تعال نسيت حذائك 🤓',
'احنه نضيف بيكم ونتو طلعو 😒',
'هذا شبي كالب خلقته علينه 😗',
'طلع زعلان ليش هيج رجعو 🙁',
'راحت الدوخه 😂',
'ئوف واخيرا خلصنه منه 🙈',
'وربي جان غثيث وراسه يابس دروح الف حجاره ونعال وراك 😐',
'وجان نخلص وراح ناخذ راحته تعالي كتكوته صقيقتي خل نحجي 🙊',);
$reply_left = array_rand($left, 1);

$new = array('هله اجه الكروب كله يرحب بي 💋',
'لضل صنم رحمه للكعبه احجي سولف اني اسولف وياك 🤗❤️',
'نورت الكروب 💋',
"هله بريحه هلي بكروبنه $title",
'ضويت الكروب شمعه ❤️',
'الجه الزين كله 💋',
'هلا بيك حبيبي نورت 🌝',
'نورت كلبي 💋',
'صير حباب ولضل ثكيل 🤷🏼‍♀️',
'❤️ نورتنه يروح عمتك ☺️',
'صير خوش عضو بالكروب ترا اطردك 🙃',
'نـَْﮩْْ❀ُུـَ❀﴿💡﴾ـۖؐـورتـ❥',
'مٰ̲ہٰٰنہٰٰوِٰڕٰ حہٰٰبྀ̲ہ؏ۤـٖٓہٰٰمٰ̲ہٰٰڕٰيِٰہٰٰ┊※🌝️‘’💛',);
$reply_new = array_rand($new, 1);

$for = array('سوي اعاده توجيه الشياء تافهة يا تافه 🙈',
'شبيك مشايف كروب تسوي اعاده توجيه ☹️',
'مسحو هالتوجيه 😌',
'مسحو هاي الرساله بساع 😡',
'جيبولي النعال متوب كافي اعاده توجيه 😐',
'وجان لزك جيبو بخاخ BefBaf 🌝💋',
'كافي حشره راح ابخ عليك بيف باف 😂😐',
'سليمه طمك ضل سوي اعاده توجيه ☹️',
'دكافي لزكت😒',
'كافي لتلزك 😭',);
$reply_for = array_rand($for, 1);

$dom = array('ادوم ايامك يالغالي  ❤️',
'تسلم دوم الحبيبك 😌',
'دوم وكعد ع عناد الواكفين 🤷🏼‍♀️',
'دوم وجيري 🌝🤷🏼‍♀️',
'يدومك الناسك ❤️😌',
);
$reply_dom = array_rand($dom, 1);

$boy = array('مشيطلعبرا 😌',
'شعندك داخل خاص 😒',
'ثكيله وماحجي ويه ولد 😊',
'عوع ولد مشطلعبرا بلوك 🙃',
'برا متستحي داخل خاص 😒',
'هلا بيك تشرفت بيك ونته اخويه 😊',
'شلونك 🤓',
'ئشعدك داخل خاص ؟ 😒',);
$reply_boy = array_rand($boy, 1);

$girl = array('ئوف فديتج مح ئم خدود 🙈💋',
'همزين مو ولد كتلوني الزواحف والله ☹️',
'شلونج ياروحي 🐣💋',
'هلا بيج ياروحي انتي ☺️',
'ضيفيني كروبات ❤️',
'ئوف نطيني بوسه ياروحي ❤️💋',
'مح بنوتات ولا الولد كتلوني بس يزحفون 😡',
'هلا بالبنوتات 😻😻',
'شلونج اخبارج 🙀',
'هم يزحفولج 🤐',);
$reply_girl = array_rand($girl, 1);

$pv = array('عيب 🙃',
'خالتك الشكره  احسن ترضها اخويا يزحف ع اختك 😐🤷🏼‍♀️',
'عب نجب و ولي منا 🙊🤷🏼‍♀️',
'محضوره دز رساله وتع خاص 🤷🏼‍♀️',
'شبيك مشايف بنات ؟ 🤤',
'ولي 🙄',
'ما 😌',
'ولي لك 😒',
'وعود صاك ئنته ؟',
'ئذا الموضوع حساس اجيك 🌝',
'تعال حتطفي الكهرباء 😶',);
$reply_pv = array_rand($pv, 1);

$ahm = array('جيبوله مي 😅',
'رز بالحم 🙄🤷🏼‍♀️',
'شبيك تتحمحم نطو مي خطيه غص بلكمته 🙄',
'خير 🙊',
'تفضل ☹️',
'والله اشكال 🤷🏼‍♀️',
'احمات 😏',
'طبوله ع ضهره 🙃',
'ها خير شبيك 😉',);
$reply_ahm = array_rand($ahm, 1);

$voice = array('شهلصوت عوع 😒☹️',
'وين تعلمتت الغنه بالحمام 😂🤷🏼‍♀️',
'واو يخبل الصوت 🤷🏼‍♂️',
'شجاي تحجي متستحي 🙊',
'لدز بصمات كافي عزلنه 🌝🤷🏼‍♀️',
'مشيطلعبرا مو مال تلفيهم كروبات 🤷🏼‍♀️',
'والله زرف اذاني صوتك البشع ☹️',
'لتغني ب بصمه روح للريماس خل يشغلوك كناس بلكي تتعلم غنه 🌝😌',
'شهالصوت العذب ئووووووووووف 🤤😻',
'فديت هالصوت 😶',
'مو احله من صوت حبيبي برهومي 😌',
'اعرف احجي 😒',);
$reply_voice = array_rand($voice, 1);

$bey = array('تعال خل نكمل سالفتنه وين رايح 😧',
'جاي اشاقه تعال لضوج 🙁',
'دفعه مردي وعصى كردي 😌',
'منو زعلك حته تروح 😥',
'شبيك ضايج تعال 😨',
'الله وياك دروح مختنكه ونته موجود ☹️',
'هاك الف شتري بيها لفتين فلافل 🌝💋',
'سلملي ع ئمك 🤷🏼‍♀️',
'بعد وكت وين 🙄',
'تعال وين رايح عندي شغله وياك 🐣',
'تعال لضل هيج ترا مكلنه شي بسرعه دكول باي 😐',
'الله وياك والتكسي ع حساب المدير 😂😂 ماعليه اني 🙈',);
$reply_bey = array_rand($bey, 1);

if($text == "/start"){
$start = array('ياخي ليش الزحف 🐛',
'ليش داخل خاص ؟ 😐 [دوس هنا بعد روحي](https://t.me/Babeleon_bot)',
'تفضل شتريد 🐣 [دوس هنا بعد روحي](https://t.me/Babeleon_bot)',
'ناقصه زواحف عليه 🤷🏼‍♀️ [دوس هنا بعد روحي](https://t.me/Babeleon_bot)',
'ولي راح احضرك 🙊 [دوس هنا بعد روحي](https://t.me/Babeleon_bot)',
'ئخي ممنوع تدخل خاص ☺️ [دوس هنا بعد روحي](https://t.me/Babeleon_bot)',
'هلا بيك تفضل شتريد ؟ 🐣 [دوس هنا بعد روحي](https://t.me/Babeleon_bot)',
'تفضل يبعد روح عمتك 😉 [دوس هنا بعد روحي](https://t.me/Babeleon_bot)',);
$rstart = array_rand($start, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"text"=>$start[$rstart],
'reply_to_message_id'=>$message->message_id
]);
}

$emoji = array('🤷🏼‍♂️😌',
'🙂🙃',
'😤🙁',
'Take photo with me 🙋🏼',
'تعال طك ويايه سلفي 🙋🏼',
'🦋🌈🌪',
'ضوجني شوف شبي 😔 @lock_at_me_now',
'تع القناتي @Babeleon_bot 😌❤️',
'😒 خير ',
'اني الورده ونته التاراب 😂🤷🏼‍♀️',
'🙄🙄🙄🙄',
'🤤🤗',
'🙂🙃😏',
'😟😯',
'🥃نشرب  وهيه تصفه ',
'🍾 فتحلك ببسي ',
'🍉 تاكل ركي 🙃',
);
$reply_emoji = array_rand($emoji, 1);

if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$emoji[$reply_emoji],
'message_id'=>$message->message_id
]);
}

if($text == 'brhm' or $text == 'برهم'  or $text == 'ابراهيم'  or $text == 'أبراهيم'  or $text == 'إبراهيم'  or $text == 'براهيم' or $text == 'برهوم' or $text == 'برهومي'  or $text == '@Lock_at_me_now'  or $text == 'منو برهم'){
$brhm = array('هذا حبيب كلبي وعمري وحياتي ومبرمجي 😻 [BRHM🤷🏼‍♂️](https://t.me/Lock_at_me_now)',
'تسقط الحكومه ويعيش برهم 🤤🙄 [BRHM🤷🏼‍♂️](https://t.me/Lock_at_me_now)',
'MY love and my Developer [BRHM🤷🏼‍♂️](https://t.me/Lock_at_me_now)',
'kiss him faster [BRHM🤷🏼‍♂️](https://t.me/Lock_at_me_now)',
'يبو مصيبه موتن بي [BRHM🤷🏼‍♂️](https://t.me/Lock_at_me_now)',
'عمي هذا الذيب [BRHM🤷🏼‍♂️](https://t.me/Lock_at_me_now)',
'[MY CUONT 🤷🏼‍♂️](https://t.me/Lock_at_me_now)',
'OK OK JOIN MY CHANNEL PLZ [RECODED](https://t.me/babeleon_bot)',
'روحله ونطي بوسه [BRHM🤷🏼‍♂️](https://t.me/Lock_at_me_now)',);
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

$asol = array('عيوني كول 😗',
'ها 🤗🙄',
'شبيك خير 🤷🏼‍♀️',
'ها احجي ☹️',
'حمضت بسمي 😒',
'شبيك خير شتريد 🙄',
'كول 🌝',
'خيرررررررررررررر 😕',
'يمعود هاااا 😞🙊',
'تفضل كول لا تستحي 😒',
'اطلع بالنضيف 😐',
'خير شتريد 😌 ',
'سولف لكن بهدوء لحد يسمعك 😗',
'اسمي اسو مو عسوله 😊 بس يدلعوني عسوله ',
'اهووووووو هم انته 😑',);
$reply_as = array_rand($asol, 1);

if($text == 'عسوله' or $text == 'اسو' or $text == 'سوسو' or $text == 'عسولة'  or $text == 'عسول' or $text == '@ASoLbot'  or $text == 'عسولات' or $text == 'اسول'  or $text == 'هذا بوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$asol[$reply_as],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->reply_to_message->from->id and $text == 'شنو رئيك بي' or $text == 'شنو رئيك بهذا' or $text == 'شنو رئيك بهاذا' or $text == 'شنو رئيك بهاذ' and $id != 449272874){
$xyz = array('لوكي وزاحف من ساع زحفلي وحضرته 😒',
'خوش ولد و ورده مال الله 💋🙄',
'يلعب ع البنات 🙄😐',
'ولد زايعته الكاع 😶🙊',
'صاك يخبل ومعضل 😻',
'محلو وشواربه جنها مكناسه 😂🤷🏼‍♀️',
'اموت عليه 🌝',
'هوه غير الحب مال اني 🤓❤️',
'مو خوش ولد صراحه ☹️',
'ادبسز وميحترم البنات 🐣 ',
'فد واحد قذر 🙄😒',
'ماطيقه كل ما اكمشه ريحته جنها بخاخ بف باف مال حشرات 😂🤷🏼‍♀️',
'مو خوش ولد 🤓',);
$reply_xyz = array_rand($xyz, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$xyz[$reply_xyz],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->reply_to_message->from->id and $text == 'شنو رئيج بيها' or $text == 'شنو رئيج بهاي' or $text == 'شنو رئيج بهايه' or $text == 'شنو رئيج بهاية' or $text == 'شو رئيك بهي'){
$zyx = array('الكبد مال اني هيه 🙊🙄',
'ختولي ماحبها 😌',
'خانتني ويه برهم 😔',
'بس لو الكفها اله اعضها 😐💔',
'خوش بنيه بس عده مكسرات زايده وناقصه منا ومنا وهيه تدري بنفسها 😒',
'جذابه ومنافقه سوتلي مشكله ويه برهم 😔',
'ئووووووووف اموت ع ربها 😍😍',
'ديرو بالكم منها تلعب ع الولد 😶 ضحكت ع واحد قطته ايفون 7 😣',
'صديقتي وختي وروحي وحياتي 😍😌',
'فد وحده منحرفه 😥',
'ساكنه بالعلاوي ونته حدد بعد لسانها لسان دلاله 🙄🤐',
'ام سحوره سحرت اخويا وعلكته 6 سنوات 🤧🤕',
'ماحبها 🙁',
'بله هاي جهره تسئل عليها ؟ 😕😒',
'بربك ئنته والله فارغ وبطران وماعدك شي تسوي جاي تسئل ع بنات العالم ولي يله 🙌🏼',
'ياخي بنيه حبوبه بس لبعرك معمي عليها تشرب هواي 😹😹',);
$reply_zyx = array_rand($zyx, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$zyx[$reply_zyx],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'هلو' or $text == 'هلاو' or $text == 'هليو' or $text == 'مرحبا' or $text == 'هَــ(✋️)ــِلاؤ ↝ ✩🎀 شپـ👬ـأأب' or $text == 'مرحبه' or $text == 'مرحبة' or $text == 'سلام' or $text == 'هلو شلونكم' or $text == 'هلو شلونك' or $text == 'هلو شلونج' or $text == 'هلو اشلونج' or $text == 'هلو اشلونكم' or $text == 'ئلو' or $text == 'الو'  or $text == 'هلاو شلونكم' or $text == 'مرحبا شلونكم' or $text == 'سلام عليكم'  or $text == 'سلام عليكم ورحمه الله وبركاته' or $text == 'هاي' or $text == 'هلـِْ❀͜ـِْہٷاتہٞ❥' or $text == 'هِلَوِوِ' or $text == 'هلا حبي'  or $text == 'هاي شبابً شخباركم' or $text == 'مساء الخير' or $text == 'صباح الخير'  or $text == 'السلام عليكم' and $id != $reply_emoji){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$hi[$reply_hi], 
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'شلونكم' or $text == 'شلونج' or $text == 'اشلونج' or $text == 'اشلونكم'  or $text == 'شلونك' or $text == 'شونك'  or $text == 'اشلونك' or $text == 'شونج'  or $text == 'شخبارج'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ho[$reply_ho],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'دوم' or $text == 'دومج' or $text == 'ادومين' or $text == 'ادوم'  or $text == 'دومج❤️'   or $text == 'دوم❤️'  or $text == 'دومج ❤️'  or $text == 'دوم ❤️' or $text == 'دايمه'  or $text == 'دايمة'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$dom[$reply_dom],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'شبيك' or $text == 'شبيج' or $text == 'اشبيك' or $text == 'اشبيج' or $text == 'اشبيكم' or $text == 'شبيكم' or $text == 'اشبيج😒' or $text == 'شبيج😒' or $text == 'اشبيج 😒' or $text == 'شبيج 😒' or $text == ' ٍّ﴿شـ✍️ـبـﮩٍّﮩٍّ﴿😪﴾ﮩٍّـيــج﴾ُ '){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$sh[$reply_sh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ليش' or $text == 'لويش' or $text == 'زين ليش' or $text == 'زين لويش' or $text == 'ليشش'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$why[$reply_why],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'هيج' or $text == 'هيجي' or $text == 'مو هيج' or $text == 'زين هيج' or $text == 'ليش هيج'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$thj[$reply_th],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'باي' or $text == 'باي باي' or $text == 'مع السلامه' or $text == 'مع سلامه'  or $text == 'مع السلامة' or $text == 'مع سلامة' or $text == 'بااي'  or $text == 'باااي' or $text == 'بايي'  or $text == 'جاو'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$bey[$reply_bey],
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'احم' or $text == 'ئحم' or $text == 'حم' or $text == 'أحم' or $text == 'أحم' or $text == 'احم احم'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ahm[$reply_ahm],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'تعالي خاص' or $text == 'تعال خاص' or $text == 'تعي خاص' or $text == 'نع خاص' or $text == 'خاص'  or $text == 'خاصج'  or $text == 'خاصك'  or $text == 'شوف الخاص'  or $text == 'شوف خاصك'  or $text == 'شوفي خاصج' or $text == 'تعاي خاص😂'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$pv[$reply_pv],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'احبك' or $text == 'احبج' or $text == 'i love you' or $text == 'حبج' or $text == 'حبك' or $text == '❤️❤️' or $text == 'love' or $text == ' ilove u' or $text == 'احبج❤️' or $text == 'حبك❤️' or $text == 'احبك❤️' or $text == 'حبج❤️' or $text == 'احبج ❤️'  or $text == 'حبج ❤️'  or $text == 'حبك ❤️' or $text == 'احبك ❤️' or $text == 'احّ ـّـٌٍ❣ـٍّبّكَ' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$lov[$reply_lov],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'bot' or $text == 'BOT' or $text == 'بوت' or $text == 'البوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boting[$reply_bot],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'اكلج' or $text == 'اكلك' or $text == 'كلك' or $text == 'كلج'  or $text == 'ممكن طلب'  or $text == 'ببكن طلب'  or $text == 'اكول'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$tal[$reply_tal],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'شبي' or $text == 'شبيه' or $text == 'شبيها' or $text == 'شبيهة'  or $text == 'كلي شبي'  or $text == 'كلي شبيه'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$wh[$reply_wh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ولد' or $text == 'اي ولد' or $text == 'ي ولد' or $text == 'يي ولد'  or $text == 'رجال'  or $text == 'لج اني ولد'  or $text == 'مو بنيه'  or $text == 'مو بنية'  or $text == 'مو بنت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boy[$reply_boy],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'بنت' or $text == 'اي بنت' or $text == 'ي بنت' or $text == 'يي بنت'  or $text == 'بنيه'  or $text == 'بنية'  or $text == 'ي ابنيه'  or $text == 'اي ابنية' or $text == 'اي ابنيه'  or $text == 'مو ولد'  or $text == 'مو صبي'  or $text == 'مش ولد'  or $text == 'مش صبي'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$girl[$reply_girl],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'اي وينهة' or $text == 'اي وينه' or $text == 'وينة' or $text == 'وينهة'  or $text == 'وينها'  or $text == 'وينه' or $text == 'اي وينهة' or $text == 'اي وينها' ){
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
'text'=>'احفض جهتي ودز نقطه خاص [👨🏼‍🎤 دوس هنا](https://t.me/Babeleon_bot)',
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "لو خيروك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اهــلا بك عزيزي💛  [$name](tg://user?id=$id)
فــي بوت لعبــة لو خيــروك🔖
البــوت الاول فــي التلجــرام⚡
يمكنــك من خلال هــذه اللعبــه🌀
واتمــام المراحــل ال(3) وربــح خادم vps مقــدم من مطــور البــوت⭐ ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"ابــدأ اللعب✔",'callback_data'=>'hmd1']],
[['text'=>"🔊 -  تابــعنا - 🔊",'url'=>'t.me/HZ_RS']],
[['text'=>"⁉️ - </>المطــور<\> - ⁉️",'url'=>'t.me/hossamzrzor']],
]
])
]);


if($data == 'hmd1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اهــلا بك عزيــزي $name ✨

اخــتر جنســك/ج لبدأ اللعــب',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'بــنت🙆','callback_data'=>'l1']],
        [['text'=>'ولــد','callback_data'=>'l2']],
      ]
    ])
  ]);
}
if($data == 'l2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'عزيــزي🌝⚡

لو خيــروك【تعــض روحك/تضرب دغلــه بالكاع😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تعــض روحك😂','callback_data'=>'s1']],
        [['text'=>'تضــرب دغله😝😂','callback_data'=>'s2']],
      ]
    ])
  ]);
}
if($data == 's1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'#ههههه😂 روح عــض روحــك يبا😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي📌','callback_data'=>'g1']],
      ]
    ])
  ]);
}
if($data == 's2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يارب كــون تطيح وتتكسر😂😕',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🎐','callback_data'=>'g1']],
      ]
    ])
  ]);
}
if($data == 'g1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروك👿

【تطلــع بالشارع مــصلخ/تاكل بصل بالريــوك😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تطــلع مصلخ😂😒','callback_data'=>'r1']],
        [['text'=>'تاكــل بصل😝😂','callback_data'=>'r2']],
      ]
    ])
  ]);
}
if($data == 'r1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هيــج وكون بنات بالشــارع😂🌚

وتصيــر مضحكــه يالخايس يالمعفــن☺😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💡','callback_data'=>'g22']],
      ]
    ])
  ]);
}
if($data == 'r2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ع اســاس انته ريحتك حلوه😂
وتاكــل بصل من الصبح😂روح حمبي روح👿',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي📤','callback_data'=>'g22']],
      ]
    ])
  ]);
}
if($data == 'g22'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لو خيــروك💭

【تاكــل مركــة كرفس🌴/تاكــل شوربة عكاريك🐸】

ه────────────────',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'مركــة كرفس😋😹','callback_data'=>'sel']],
        [['text'=>'شوربــة عكاريك😹','callback_data'=>'sel1']],
      ]
    ])
  ]);
}
if($data == 'sel'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ترهــ ماكــو مركة كرنفــس😴😹

عقــل المزنبــر🌝😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'sec']],
        
      ]
    ])
  ]);
}
if($data == 'sel1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'مو ؏ اســاس انته باليابــان😹🌚

اكعــد عمي لتزوع عليــنه🌝📛',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي📮','callback_data'=>'sec']],   
      ]
    ])
  ]);
}
if($data == 'sec'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ياحبيــصي💥

لو خيــروك【تكســر شمعه براسك😮😹/تاكل ذيــل جريدي🌝😢】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اكســر شمعه👿','callback_data'=>'shma']],
        [['text'=>'اكــل ذيل جريدي😝😹','callback_data'=>'grede']],
      ]
    ])
  ]);
}
if($data == 'shma'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي وابــوك يبتلي بخياطاتــك😴😹

اكعــد عمي اكــعد منو جابــرك🌝',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🚶','callback_data'=>'t']],   
      ]
    ])
  ]);
}
if($data == 'grede'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ربــي😊
دعــوة مطلــكه حامــل😴😹

كــون يطكك طاعون وساحون ودولمه ماعــون🌚😹
كول (اي) كلــت اي ربــي كون يطكــه زهايمر وبطنه سهــال وينســه مكان الحمام😒😂
ياكــل جريدي🌚😹غير عمك ياباني واني ما ادري 😕😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'t']],
      ]
    ])
  ]);
}
if($data == 't'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لو خيــروك😳😹

【تطلع بالشارع تصيح انــي حامل🎅/لو تنكع شعرك ماي وطحين😮😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اطــلع بالشارع واصــيح😏','callback_data'=>'shard']],
        [['text'=>'انكع شــعري مي وطحيــن😨','callback_data'=>'then']],
      ]
    ])
  ]);
}
if($data == 'shard'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'مبــروك😹
يتربــى بعزك🌚😹شكــد عليك بيا شهــر😨😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🚶','callback_data'=>'sec45']],
      ]
    ])
  ]);
}
if($data == 'then'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي وحــط شوي ملح🌚⚡

وانطــي لامك تخبــزه🌝😹

كون صخونــه مال حصــونه🌚😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🌟','callback_data'=>'sec45']],     
      ]
    ])
  ]);
}
if($data == 'sec45'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروك🙊🙀

【تزوج عبــده😹ونادره/لو حاتــه وعايــزه😹🌚】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'عبــده ونادره🌝','callback_data'=>'abda']],
        [['text'=>'حلــوه وعيــزه🌚','callback_data'=>'hloa']],
      ]
    ])
  ]);
}
if($data == 'abda'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'و الله عرفــتك😸👐

حتخــتار العبــده الصنــف مالتك+مطية كراب🙀😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي▶','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'hloa'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ليــش عينــي وشبيهه العبده ماختاريتهه😏

ع اســاس ابوك روسي وامك باكســتانيه🌚
لو ليــن وصخه مثلــك😔😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي✅','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'srag'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروك🌚

【تشيــل جسمك شيره🌚💥/تزيــن اكــرع😮】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اشيل جســمي شيره🙊','callback_data'=>'gsme']],
        [['text'=>'ازيــن كــرعه😸','callback_data'=>'kraa']],
      ]
    ])
  ]);
}
if($data == 'gsme'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ءوووف😍😹

وتعــالي وره 12 نســولف🙀😗',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي😹','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'kraa'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'#ههههههههههههه

وتطــلع جنــك خص... شارده🌚😹
💥💃💃💃💃💥',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'كمــل يبه😂','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'gg12'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'حمبقلبــي😎💥

لو خيــروك【تروح لبيت جيرانكم تكلهم احب بتكم💃😹/
لــو تروح للصيــدليه تكله وين اخلي التحميــله🙊😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اروح لجيــرانه🙀','callback_data'=>'gerana']],
        [['text'=>'اروح لأبــو الصيدليــه😹','callback_data'=>'sedlea']],
      ]
    ])
  ]);
}
if($data == 'gerana'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'وحضــرك 50 مليــون فصل😹

واتحمــل فد 100 ع بابــكم 🌚😹
واستعــد للزواج منــهه💃😹هيج وتطلــع جكمه😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🙈','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}
if($data == 'sedlea'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'نهنهنه😹🌚

وخــلك كفــو وتحمل الجلاليــغ😹🌝💃

💃💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💫','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}
if($data == 'ggg1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ممم لو خيــروك😾

【تاكــل حنطه🌾/تطك جلب بالشارع جلاغ💃😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تاكــل حنطــه🌾','callback_data'=>'hnta']],
        [['text'=>'تضرب الجلــب🐶','callback_data'=>'glp']],
      ]
    ])
  ]);
}
if($data == 'hnta'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ايباااخ😏

روح الزاجــل 🐦البداخلــك مسيطره عليك😸
بيــك خير اضرب الجلــب💃💥😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🔓','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'glp'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي وتضــل ثابت لو اركض اخوي عامــر😹💃

لتحمــه بــس😹ها اركض اركض دوس🏃🏃🏃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💛','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'g88'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يامحفــوض الســلامه😂والبكــه

لو خيــروك📌【تضــرط ببطل وتشم ريحته/تبــوس صخله بحلــكها😴😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اضرط واشمــهه😂','callback_data'=>'lo0']],
        [['text'=>'ابوس صخــله😢','callback_data'=>'loo0']],
      ]
    ])
  ]);
}
if($data == 'lo0'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يالخــايس يالمعفــن😸😹

شنــي هالعقليــه الذبانيــه العندك😮😹

تخلــيك تشم ريحــة ضراطك الحمبقازيــه👽😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'gefara']],
        
      ]
    ])
  ]);
}
if($data == 'loo0'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ماوصيــك اخــذلك حلك مرتــب😹

#هههههههههههههه',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💎','callback_data'=>'gefara']],
        
      ]
    ])
  ]);
}

if($data == 'gefara'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اهــلا بك🙊💫

وشكــرا على استخدامك بــوتنا😻
انتضــر تحديــث البوت القادم لاكمــال المراحــل💥

سيــتم التحــديث بعد يوميــن😻 تحديات جديده😻
تابــعنا من فضــلك @css_1
بأشتراككم بقنــاتنا تحفيز لنا بالاستمرار
يمكنك مراسلتنـا لأضافة تحديات الى البوت 
راسلنا لأضافة تحدياتك من هنا @haked12',
    ]);
}
if($data == 'l1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'💥💥💥💥💥💥

يا امــﮧ الكمــﮧل😹/لو خيــروج🌚💃

【تغسلين شعــرج بنفط🙊🙀/تكمشــين صرصر بأيدج😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اغســل شعري بنفط😢','callback_data'=>'nft']],
        [['text'=>'اكمــش صرصر😏😹','callback_data'=>'srsr']],
      ]
    ])
  ]);
}
    if($data == 'nft'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يــلا عيــني💃💃

غنــي وياي🔇🔇
ام الكمل والصيــبان😹💃💃ها ها ام الكمــل والصيــبان😹💃💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💛','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'srsr'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'احــم🌚😹

هايــمنو التكمــش صرصر🌚😹
متأكده🌚😹 هاذ ويهج😹💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💖','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'tlale'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يابعــد روح البــوت والمطور😹

لــو خيروك🙀

【تطلعين بــدون مكياج وكلنا العراق😹/

ترحــين لأمج تكليلــهه اني مزوجه بالسر🙊😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تطلعــين بدون مكياج😝💛','callback_data'=>'mkeag']],
        [['text'=>'تكــلين لامج🙀','callback_data'=>'amg1']],
      ]
    ])
  ]);
}
if($data == 'mkeag'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'والله جــذابه😹

وعــلي جذابه😹 والحسين جذابه😹
المصنهــره 😹المزنعــره😴😹
انــتي ويهج ليكول مطــور البوت😏😹
وطلعين بدون مكياج😹💃💃
نكطــع واهس الشباب بالــزواج😹💃💃🌚',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💫🙊','callback_data'=>'telale1']],
      ]
    ])
  ]);
}
if($data == 'amg1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'كــفو🌚💪

وخــلج قويــه حبحياتي😼
ولتبجــين من اول راجــدي😹😹😹😹
💃💃💃💃💃💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'telale1']],
      ]
    ])
  ]);
}
if($data == 'telale1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروك🌚😹

【تطــلعيــن بــدون 👙/🌚😹/تنطــين حلك لعبــد🌚😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اطلع بــدون 👙','callback_data'=>'stean']],
        [['text'=>'انطــي حلك لعبــد🌚','callback_data'=>'abdd']],
      ]
    ])
  ]);
}
if($data == 'stean'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'وف🙊😹

وتعــاي يم المطــور😹💃
يريــد يسولف وياج🌚😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي😒','callback_data'=>'telale2']],
      ]
    ])
  ]);
}
if($data == 'abdd'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'جذاااااااااااااااااااابه🌚😹

هايــه $name 😹😹

جذابه هو انتن تدورن حاتيــن🌚😹النوب تنطين حلــك لعبد🌚',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي😸','callback_data'=>'telale2']],
      ]
    ])
  ]);
}
if($data == 'telale2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'كمشــتج سميــره😹

تعــاي تعاي 😹 لو خيــروج🌚👇

【تصــومين سنه😢/تاكــلين شوربــة عكاريك😍😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اصــوم سنه😢','callback_data'=>'asom']],
        [['text'=>'اكــل شوربة عكاريــك😢😹','callback_data'=>'akarek']],
      ]
    ])
  ]);
}
if($data == 'asom'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'جنــي سمعت وحده تكــول اصوم🌚😨

سميــره لجذبيــن😒😹
وماعــون الباميــه منو ياكــله👿😹يوميه
اهووو هم كالت اني برنسيس ما اكــل🌚😹
هم بجت 😒😹يلا يلا صومي بس لتبجين😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🙊','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'akarek'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'والكيــاته🌚😹

والمامــا ما اكول هاي الءكله😹

هج هاذ ماعون شوربــة عكاريــك|🐸|',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🐸','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'telale3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'سميــره😹

لو خيــروج🌚😹

【عريــس🙊💑/باريــس🗼】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'عريــس🙊💥','callback_data'=>'ares3']],
        [['text'=>'باريــس🗼','callback_data'=>'pares']],
      ]
    ])
  ]);
}
if($data == 'ares3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'عفــيه الحبــابه🌚💃😹

بــس العريس علمــود الستــر😏💛
لــو بس تــردن تعرسن جمبك لالا😹💃🚶',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🙊','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'pares'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'مشيطلعيبرا🌚😹

بنــت الدبــل كفه😒😹

اكــو احلى من الستــر😒💥لو انتن تحبــن الدياحــه💃😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🎄','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'telale7'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروج🌚💥

【تزوجــين مطــور البــوت😻💛

لــو اي شخــص من التــلي🙊💛】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'مطــور البــوت💜💍','callback_data'=>'almtor']],
        [['text'=>'اي شخــص🙉✨','callback_data'=>'aeshs']],
      ]
    ])
  ]);
}
if($data == 'almtor'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هلكــد تحبين مطوري🙊💛😹

لــو لواكه علمــود يســويلج بوتات🌚😹💥',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🔏','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'aeshs'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي يلــا ولــي😒💥😹

روحــي دوريــلج زاحف اخــذي😏😹

شبي المطــور يجكجك🌚😹خــوش ولد وميســاني😻',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💎','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'telale8'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروج👽

【نت ماكــو ٣ ايام🐸✨】

【اكــل ماكو ٣ ايــام🐸💛】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'نــت ماكــو📡','callback_data'=>'nt1']],
        [['text'=>'اكــل ماكــو🍕','callback_data'=>'akl1']],
      ]
    ])
  ]);
}
if($data == 'nt1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'والله شكــلج🌚💛😹

احــاول اصــدكج🌚🎐😹
مدا اكــدر اتوقعج ٣ ايام بــدون حبيبج 😝😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'telale9']],
      ]
    ])
  ]);
}
if($data == 'akl1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'عفــيه السبــاعيه😻💛💥

هيــج اريــدج😻🙊💥

نعلــبو النــت😝😹بس من تبجين ع حبيــبج😹
ابجي بغرفتــج لاشبعيــن كتل🌚😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💄','callback_data'=>'telale9']],
      ]
    ])
  ]);
}
if($data == 'telale9'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــووووو خيــروووج🙉

【تلبســين حفايــة ولد وترحين للمنتــزه💥😹】

【تمشــين حافيــه لمــدة سنه😹💥】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'البس حفــاية ولد😸💛💥','callback_data'=>'hfaya']],
        [['text'=>'امشــي حافيــه🐸💎','callback_data'=>'hafya']],
      ]
    ])
  ]);
}
if($data == 'hfaya'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'نهنهنه😹💃💃💃💃

💎وتصــيرين مضحكه بالمنتــزه💎😹

😹💥يالخايــسه يالمعفــنه💥😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'snde']],
      ]
    ])
  ]);
}
if($data == 'hafya'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ربــي🌚👐

كــون الكــاع كلهه كزاز😼

وماتشــرفي بس تــدوسين علي😍😹

ربــي كون يطــب برجلــك بسمار 
طوله عشرطعش متــر💥😹💛

[  اضغط لمتابعتنــا من هنا @css_1',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥💛','callback_data'=>'snde']],
      ]
    ])
  ]);
} 
if($data == 'snde'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اهــلا بكــي🙊💫
bot('answerInlineQuery', [
    'inline_query_id' => $update->inline_query->id,
    'cache_time' => '300',
    'results' => json_encode([[
    'type' => 'article',
    'id' => base64_encode(rand(5, 555)),
    'title' => "لعب روليت... ⏳⌛️",
    'description' => "اظغط هنا للبدء ...",
    'input_message_content' => [
        'parse_mode' => 'HTML',
        'message_text' => "لعب روليت ⏳

اظغط على انضمام للعب 🎮"
    ],
    'reply_markup' => [
        'inline_keyboard' => [
            [
                ['text' => "انضمام 🎮", 'callback_data' => "play"],
            ],
            [['text' => 'تابعنا 📢', 'url' => 't.me/php1lua']]
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
            'text' => "لعب روليت ⏳

    اظغط على انضمام للعب 🎮 \n\n $ex[1] \n$ex[2] \n$ex[3] \n$ex[4] \n$ex[5] \n$ex[6] \n$ex[7] \n$ex[8] \n$ex[9] \n$ex[10] \n",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "انضمام 🎮", 'callback_data' => "play"],
                    ],
                    [['text' => 'تابعنا 📢', 'url' => 'https://t.me/php1lua']]
                ]
            ])
        ]);
        bot('answerCallbackQuery', [
            'callback_query_id' => $db_id->id,
            'text' => "تم اضافتك الى اللعبه... 🎮"
        ]);
    } else {
        bot('answerCallbackQuery', [
            'callback_query_id' => $db_id->id,
            'text' => "تم اضافتك الى اللعبه مسبقا... 🎮",
            'show_alert' => true
        ]);
    }
    $r = $ex[array_rand($ex, 1)];
    if (count($ex) == 10) {
        bot('editMessageText', [
            'inline_message_id' => $in_id,
            'text' => "تم اكمال العدد الفائز هو ... 🎮
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
        'text' => "اهلاََ بكْ 💗 [$name1](t.me/$username) 
        
        في لعبة الروليت الشهيرة 🎳
        
        يمكنك اللعب مع اصدقائك في المجموعات 📬 والقنوات .. بمجرد ضغط على زر البدء 📥
        
        [لمزيد من البوتات اضغط 📌](https://telegram.me/php1lua)",
        'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                
                [['text' => 'تابعنا 📢', 'url' => 'https://t.me/php1lua'],['text'=>"مطور البوت ⚙️",'callback_data'=>"dev"]],
                [['text' => " بدء تحدي 🔂", 'switch_inline_query' => ""]],
    ]])
    ]);
}
if($data == "dev"){
bot('answerCallbackQuery',[
    'callback_query_id'=>$update->callback_query->id,
   'text'=>"Roulette🎳 , create By : @bootse and @killyes :) 
   My channels : @php1lua, 
   - My Team is ViP ;)
   فريق العمل : ViP TeaM ", 
 'show_alert'=>true,
]);
}
if($carlos18 && (strpos($carlos9,'"status":"left"') or strpos($carlos9,'"Bad Request: USER_ID_INVALID"') or strpos($carlos9,'"status":"kicked"') or strpos($carlos10,'"status":"left"') or strpos($carlos10,'"Bad Request: USER_ID_INVALID"') or strpos($carlos10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$carlos13,
'text'=>"
• اهلا بك عزيزي 🔱 •
• لايمكنك استخدام البوت ✅ •
• عليك الاشتراك في القناة 🔽 •
• قناة الاول : @HZ_RS ⚜️•
"reply_markup"=>json_encode([ 
"inline_keyboard"=>["text"=>"⁉️ - </>⑾𝙒𝙀𝗡𝙏𝗔 Ⓡ.ⓢ<\> - ⁉️",'url'=>"t.me/hossamzrzor"],
     ])
]);
}
]);return false;}
if($carlos17 == "مطور" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك اوامر خاصه بيك 
🧬┇يمكنك تحكم في جميع الاوامر",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ‏-عدد المشتركين↵{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- الاشتراك" ,"callback_data"=>"tiger"],["text"=>"-  الإذاعة" ,"callback_data"=>"tiger1"],["text"=>"- الاحصائيات" ,"callback_data"=>"tiger2"]],
[["text"=>"- اوامر تنبيه الدخول" ,"callback_data"=>"tiger3"]],
[["text"=>"- اوامر توجيه رسائل الاعضاء" ,"callback_data"=>"tiger4"]],
   ] 
   ])
]);
}
if($carlos19 == "blodi" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك اوامر خاصه بيك 
🧬┇يمكنك تحكم في جميع الاوامر",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ‏-عدد المشتركين↵{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- الاشتراك" ,"callback_data"=>"tiger"],["text"=>"-  الإذاعة" ,"callback_data"=>"tiger1"],["text"=>"- الاحصائيات" ,"callback_data"=>"tiger2"]],
[["text"=>"- اوامر تنبيه الدخول" ,"callback_data"=>"tiger3"]],
[["text"=>"- اوامر توجيه رسائل الاعضاء" ,"callback_data"=>"tiger4"]],
   ] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر الاشتراك الاجباري",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- وضع قناة¹" ,"callback_data"=>"carlos0"],["text"=>"- وضع قناة٢" ,"callback_data"=>"carlos2"]],
[["text"=>"- حذف القناة¹" ,"callback_data"=>"carlos1"],["text"=>"- حذف القناة²" ,"callback_data"=>"carlos3"]],
[["text"=>"- عرض قنوات الإشتراك الإجباري" ,"callback_data"=>"carlos4"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger1" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر الاذاعة",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- نشر رساله" ,"callback_data"=>"carlos6"],["text"=>"- توجيه رساله" ,"callback_data"=>"carlos5"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger2" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ عزيزي المطور
🎗┇اليك الاحصائيات بوت
🧬┇عدد المشتركين↵{ $carlos3 }.",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>" ‏-عدد المشتركين↵{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- اوامر الاذاعة" ,"callback_data"=>"tiger1"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger3" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر تنبيه دخول الاعضاء",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- تفعيل التنبيه" ,"callback_data"=>"carlos9"],["text"=>"- تعطيل التنبيه" ,"callback_data"=>"carlos10"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger4" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر توجيه رسائل الاعضاء",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- تفعيل التوجيه" ,"callback_data"=>"carlos11"],["text"=>"- تعطيل التوجيه" ,"callback_data"=>"carlos12"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos0"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇ارسل معرف قناتك معه @",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos0");
}
if($carlos17 and $carlos == "carlos0" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم حفظ معرف القناة
🎗┇قم برفع البوت ليعمل صحيح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos0.txt","$carlos17");
unlink("carlos.txt");
}
if($carlos19 == "carlos1"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم حذف قناة بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos0.txt");
}
if($carlos19 == "carlos2"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇ارسل معرف قناتك معه @",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos1");
}
if($carlos17 and $carlos == "carlos1" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم حفظ معرف القناة
🎗┇قم برفع البوت ليعمل صحيح
",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos1.txt","$carlos17");
unlink("carlos.txt");
}
if($carlos19 == "carlos3"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم حذف قناة بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos1.txt");
}
if($carlos19 == "carlos4"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇اليك قنوات الاشتراك الاجباري
🎗┇القنوات  $carlos - $carlos1
",

 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos5"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇ارسل رسالتك ليتم 
🎗┇نشرها توجيه لجميع الاعضاء",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos2");
}
if($carlos18 and $carlos == "carlos2" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم توجيه رسالتك بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
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
"text"=>"🦁┇ارسل رسالتك ليتم 
🎗┇نشرها لجميع الاعضاء",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos3");
}
if($carlos17 and $carlos == "carlos3" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم نشر بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
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
"text"=>"🦁┇عدد مشتركين البوت - $carlos3",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos9"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم تفعيل تنبيه الدخول",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos2.txt","carlos");
}
if($carlos17 == "/start" and $carlos5 == "carlos" and $carlos11 != $carlossi){
bot("sendmessage",[
"chat_id"=>$carlossi,
"text"=>"🦁┇تم دخول مشترك
🎗┇$carlos15
🦠┇$carlos16
🧬┇$carlos11
"
]);
}
if($carlos19 == "carlos10"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$Armof14,
"text"=>"🦁┇تم تعطيل تنبيه الدخول",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos2.txt");
}
if($carlos19 == "carlos11"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم تفعيل توجيه الرسائل",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
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
"text"=>"🦁┇تم تعطيل توجيه الرسائل",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos3.txt");
}