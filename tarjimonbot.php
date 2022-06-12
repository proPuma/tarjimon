<?php
ob_start();
define('API_KEY','5183365905:AAEG_jcSfgXjWITcBb3G-HrYQH49AmaVEZE');
function bot($method,$datas=[]){
$url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}
#variables
$update=json_decode(file_get_contents('php://input'));
$chatid=$update->message->chat->id;
$fromid=$update->message->from->id;
$text=$update->message->text;
$mids=$update->message->message_id;
$Channel="t.me/dil_sozlarm";#ads

#data lang file
mkdir("lang");
mkdir("text");

#show language
$show=file_get_contents("lang/$fromid/lang.txt");

#Start Bot welcome
if($text=="/start"){
bot('SendPhoto', [
'chat_id'=>$chatid,
'photo'=>"https://b.top4top.net/p_106070vei1.png",
'caption'=>"*Salom Men Har qanday so'zni tarjima qiluvchi botman. Faqat meni kanaimga azo bo'lsangiz  <b>@HackerlikniOrganamiz<b>*",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Salom menga xush kelibsiz men sizga menga yuborgan so`zlaringizni tarjima qilib beraman
Menda deyarli 15 till mavjud
Bu botni yaratuvchisi @goPHPBot*

Menda barcha tillar mavjud istalgan sozingizni yuboring marhamat

📌*Click * /lang",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
}


#keyboard Bot language
if($text=="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"
*Tilini tanlang*

Tarjima qilinish kerak bolgan tilni tanlang",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
//'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"To'plangan - Translate"]],
[['text'=>"Arabic🇸🇦"],['text'=>"English🇺🇸"],['text'=>"Persian🇮🇷"]],
[['text'=>"Turkish🇹🇷"],['text'=>"French🇫🇷"],['text'=>"German🇩🇪"]],
[['text'=>"Spanish🇪🇸"],['text'=>"Korean🇰🇷"],['text'=>"Russian🇷🇺"]],
[['text'=>"Italian🇮🇪"],['text'=>"Hindi🇮🇳"],['text'=>"Ukrainian🇨🇴"]],
[['text'=>"Uzbek🇬🇺"],['text'=>"Greek🇬🇷"],['text'=>"Swedish🇸🇪"]],
],
])
]);
}

#language text Error
if($text and !$show and $text !="Arabic🇸🇦" and $text != "/start" and $text !="/lang" and $text !="English🇺🇸" and $text !="Persian🇮🇷" and $text !="Turkish🇹🇷" and $text !="French🇫🇷" and $text !="German🇩🇪" and $text !="Spanish🇪🇸" and $text !="Korean🇰🇷" and $text !="Russian🇷🇺" and $text !="Italian🇮🇪" and $text !="Hindi🇮🇳" and $text !="Ukrainian🇨🇴" and $text !="Uzbek🇬🇺" and $text !="Greek🇬🇷" and $text !="Swedish🇸🇪"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"Yangi tilni tanlang",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
//'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Tarjimon - Translate"]],
[['text'=>"Arabic🇸🇦"],['text'=>"English🇺🇸"],['text'=>"Persian🇮🇷"]],
[['text'=>"Turkish🇹🇷"],['text'=>"French🇫🇷"],['text'=>"German🇩🇪"]],
[['text'=>"Spanish🇪🇸"],['text'=>"Korean🇰🇷"],['text'=>"Russian🇷🇺"]],
[['text'=>"Italian🇮🇪"],['text'=>"Hindi🇮🇳"],['text'=>"Ukrainian🇨🇴"]],
[['text'=>"Uzbek🇬🇺"],['text'=>"Greek🇬🇷"],['text'=>"Swedish🇸🇪"]],
],
])
]);
}

#language-arabic
if($text=="Arabic🇸🇦"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Мне безопасность текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Arabic🇸🇦");
}

#language-English
if($text=="English🇺🇸"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Рассел мне текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","English🇺🇸");
}

#language-Persian
if($text=="Persian🇮🇷"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Рассел мне текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Persian🇮🇷");
}

#language-Turkish
if($text=="Turkish🇹🇷"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Мне безопасность текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Turkish🇹🇷");
}

#language-French
if($text=="French🇫🇷"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Мне безопасность текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","French🇫🇷");
}

#language-French
if($text=="German🇩🇪"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Рассел мне текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","German🇩🇪");
}

#language-Spanish
if($text=="Spanish🇪🇸"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Мне безопасность текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Spanish🇪🇸");
}

#language-Korean
if($text=="Korean🇰🇷"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Рассел мне текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Korean🇰🇷");
}

#language-Russian
if($text=="Russian🇷🇺"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Ваш Язык изменнено на Рускиий",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Russian🇷🇺");
}

#language-Italian
if($text=="Italian🇮🇪"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Sizning tilingiz Italianchaga otkazildi",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Italian🇮🇪");
}

#language-Hindi
if($text=="Hindi🇮🇳"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Рассел мне текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Hindi🇮🇳");
}

#language-Ukrainian
if($text=="Ukrainian🇨🇴"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

вы неверно выли текста",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Ukrainian🇨🇴");
}

#language-Uzbek
if($text=="Uzbek🇬🇺"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Yaxshi endi menga tekst yuboring*

matningiz kiritish soni cheklanmagan",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Uzbek🇬🇺");
}

#language-Greek
if($text==Greek🇬🇷){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"Now send me the text

matn kiritishga limit yo`q",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Greek🇬🇷");
}

#language-Swedish
if($text=="Swedish🇸🇪"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"*Now send me the text*

Мне безопасность текст для перевода.",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
mkdir("lang/$fromid");
mkdir("text/$fromid");
file_put_contents("lang/$fromid/lang.txt","Swedish🇸🇪");
}


//# Bu yerni o`zgartirmang aks holda botiz ishlamasligi mumkin !
//include 'Languages.php';#Contact lang Bot
/* @php_own */

#language-arabic show
if($text and $show == "Arabic🇸🇦" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
/* @php_own */
file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language Arabic
$Arabic=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ar&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Arabic",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}


#language-English show
if($text and $show == "English🇺🇸" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language English
$English=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=".urlencode($uos)))->text[0];
/* @php_own */
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$English",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Persian show
if($text and $show == "Persian🇮🇷" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");
/* @php_own */
#language Persian
$Persian=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Persian",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Turkish show
if($text and $show == "Turkish🇹🇷" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");
/* @php_own */
#language Turkish
$Turkish=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=tr&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Turkish",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-French show
if($text and $show == "French🇫🇷" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language French
$French=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fr&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$French",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}
/* @php_own */
#language-German show
if($text and $show == "German🇩🇪" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language German
$German=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=de&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$German",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}
/* @php_own */


#language-Spanish show
if($text and $show == "Spanish🇪🇸" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");
/* @php_own */
#language Spanish
$Spanish=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=es&text=".urlencode($uos)))->text[0];
/* @php_own */
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Spanish",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Korean show
if($text and $show == "Korean🇰🇷" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language Korean
$Korean=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ko&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Korean",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}
/* @php_own */
#language-Russian show
if($text and $show == "Russian🇷🇺" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language Russian
$Russian=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ru&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Russian",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Italian show
if($text and $show == "Italian🇮🇪" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
/* @php_own */
file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language Italian
$Italian=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=th&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Italian",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Hindi show
if($text and $show == "Hindi🇮🇳" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
/* @php_own */
file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language Hindi
$Hindi=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=hi&text=".urlencode($uos)))->text[0];
/* @php_own */
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Hindi",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Ukrainian show
if($text and $show == "Ukrainian🇨🇴" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language Ukrainian
$Ukrainian=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=uk&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Ukrainian",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Uzbek show
if($text and $show == "Uzbek🇬🇺" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");
/* @php_own */
#language Uzbek
$Uzbek=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=uz&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Uzbek",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Greek show
if($text and $show == "Greek🇬🇷" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");
/* @php_own */
#language Greek
$Greek=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=el&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Greek",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);
/* @php_own */
unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#language-Swedish show
if($text and $show == "Swedish🇸🇪" and $text !="/start" and $text !="/lang"){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$fromid/text.txt","$text");
$uos=file_get_contents("text/$fromid/text.txt");

#language Swedish
$Swedish=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=sv&text=".urlencode($uos)))->text[0];

bot('SendMessage', [
'chat_id'=>$chatid,
'text'=>"$Swedish",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$mids,
'parse_mode'=>"Markdown",
]);

unlink("lang/$fromid/lang.txt");
rmdir("lang/$fromid");
#
unlink("text/$fromid/text.txt");
rmdir("text/$fromid");
}

#leave
if($chatid != $fromid){
bot('SendMessage', [
'chat_id'=>$chatid,
'text'=> "Siz notogri matn kiritmoqdasiz!",
'parse_mode'=>"Markdown",
]);
bot('LeaveChat',[
'chat_id'=>$chatid
]);
}



/* @Abroriy Tomonidan Tarqatildi, yaxshilikka Xizmat Qilsin */