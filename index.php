<?php 

error_reporting(0);

set_time_limit(0);

flush();
$API_KEY = '1081685688:AAEcMsqRV2HiF4xEKfHYP2xixMFcPw2d8fY';
// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Ushbu PHP kod 1.07 versiyada ishga tushdi.
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
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    bot('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
    ]);
}
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$mybot = "xxxxxxx";
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$username = $update->message->from->username;
$bcpv = file_get_contents("bcpv.txt");
$bcgap = file_get_contents("bcgap.txt");
@mkdir("data/$chat_id");
$azidil = file_get_contents("data/$chat_id/safargul.txt");
@$list = file_get_contents("users.txt");
$channelid = file_get_contents("data/$chat_id/channelid.txt");
$name = $update->message->from->first_name;
$gpname = $update->message->chat->title;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$data = $update->callback_query->data;
$photo = $update->message->photo;
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
$forward = $update->message->forward_from;
$video = $update->message->video;
$location = $update->message->location;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$message_id2 = $update->callback_query->message->message_id;
$messageid = $update->callback_query->message->message_id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@$channelid&user_id=".$from_id)); 
$tch = $forchaneel->result->status;
$type = $update->message->chat->type;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$rank = $info['result']['status'];
$reply = $update->message->reply_to_message->message_id;
 $ADMIN = 255107380; //Yordamchi Admin
 $ADMINS = 255107380; //Asosiy Admin

//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if ($text == "/start") {
sendaction($chat_id, typing);
        $user = file_get_contents('users.txt');
        $members = explode("\n", $user);
        if (!in_array($from_id, $members)) {
            $add_user = file_get_contents('users.txt');
            $add_user .= $from_id . "\n";
            file_put_contents("data/$chat_id/safargul.txt");
            file_put_contents('users.txt', $add_user);
        }
            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"@Kino_Rasmiy",
 'parse_mode'=>'html',
            'reply_markup' =>  json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "➕Guruhga qo'shish",'url'=>"https://telegram.me/$mybot?startgroup=new"]
                    ],
                    [['text' => "🍁Yangiliklar",'url'=>"https://telegram.me/Kino_Rasmiy"]
                    ],
                    
                    [['text' => "🎓Admin",'url'=>"https://telegram.me/kino_rasmiy"]
                    ]
    ]
])
        ]);
        //// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
 bot('sendmessage', [
                'chat_id' =>$ADMIN,
                'text' =>"<b>🆕Yangi foydalanuvchi🆕</b>

🆔ID raqami:  $from_id
🔹Nick:   $name

 💧 /panel Admin boshqaruv paneli!✅",
 'parse_mode'=>'html' ] );
}
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if($rank != "creator" && $rank != "administrator"){ 
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
if($type == "supergroup" or $type == "group"){
bot('sendmessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id2,
            'text' => "<a href='tg://user?id=$from_id'>$name</a>⚜️ Afsuski, siz @$channelid kanaliga a'zo emassiz. Shu sababdan ushbu guruhda xabar yoza olmaysiz.",
				'parse_mode'=>'html',
            'reply_markup' =>  json_encode([
                'inline_keyboard' => [
                    [
                    ['text' => "🍁A'zo bo'lish",'url'=>"https://telegram.me/$channelid"]
                        ]
    ]
])
        ]);
    }}
    //// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($tch != 'member'){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
}
}
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if($text == "/yordam" && $from_id == $chat_id) {
sendaction($chat_id, typing);
            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"<b> 📃Botni ishlatish bo'yicha ko'rsatma! </b>
1 - Botni guruhingizga qo'shasiz va VIP admin qilasiz!

2 - Botni ulamoqchi bo'lgan kanalga ham VIP admin qilasiz! ⚠️Sababi: Bot kanal a'zolar ro'yhatini ko'rishi va foydalanuvchilarning kanalga a'zo bo'lgan yoki a'zo bo'lmaganini tekshirishi uchun.

3 - Guruhga /kanal so'zini yuborasiz! Bu buyruq faqat guruh adminlarida ishlaydi!

4 - Keyin ulamoqchi bo'lgan kanalingizni <b>Username</b> sini yuborasiz! <b>@ belgisini qo'ymasdan.

5 - Bari muvaffaqiyatli yakunlandi! ✔️

🍁Yangiliklar:</b> @MultiKoinot",
                 'parse_mode'=>'html']);
}
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if($text == "/loyihalar" && $from_id == $chat_id) {
sendaction($chat_id, typing);
            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"*Loyihalarimiz*
            
[@JackUmid_Bot] - Guruh nazoratchisi.

[@MarvelBots_Robot] - PHP Botlarni bepul va oson yaratishingiz mumkin. Sizga hech qanday kodlar va serverlar kerak bo'lmaydi.

[@MarvelFilms_Bot] - Marvel filmlari o'zbek va rus tillarida jamlangan telegramdagi yagona bot.

[@MarvelMoneyBot] - Pul to'plovchi.

[@MarvelViewsBot] - View bot. Bu botda ish kanalingiz "Просмотр"larini osgirishingiz mumkin.

[@MarvelMembersBot] - Kanalingiz foydalanuvchilarini osongina ko'paytiring.

[@Strongest0305_Bot] - Adminimizning spamlar uchun boti.

[@MarvelLogo_Bot] - Logo bot.

[@MarvelJack_Bot] - Guruh nazoratchisi.

[@MarvelLikeShareBot] - Kanalingizdagi postlarga avtomatik kanal linki va Like Dislike tugmalarini qo'yib beradi.

Bizning botlarimiz juda ko'p lekin bu yerga faqat 10ta botni joyladim. 
Sizga ham bot kerak bo'lsa @Strongest0305 ga murojaat qiling. Siz istagan botlarni tez, sifatli va eng asosiysi arzon narxlarda yaratib beramiz.

*🍁Yangiliklar:* @MultiKoinot",
                 'parse_mode'=>'makdown']);
}
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if($text == "/kanal"){
    if($rank == "creator" or $rank== "administrator"){
sendaction($chat_id, typing);
 file_put_contents("data/$chat_id/safargul.txt","sett");
$channelid = file_get_contents("data/$chat_id/channelid.txt");
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"🔹Kanal ulash bo'limi!
<b> Shu guruhga qaysi kanalni ulamoqchisiz?
Meni o'sha kanalga Admin qiling va kanalingiz @username sini yuboring @ qo'ymasdan
Namuna </b> @QasoskorlarMarvel_Uz kanalini QasoskorlarMarvel_Uz <b> deb yuborasiz!</b>

🍁Yangiliklar: @MultiKoinot",
 'parse_mode'=>'html']);
} }
if($azidil == "sett"){
    if($rank == "creator" or $rank== "administrator"){
 file_put_contents("data/$chat_id/safargul.txt","none");
 file_put_contents("data/$chat_id/channelid.txt",$text);
     bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"@$text <b> kanaliga a'zo bo'lmagan foydalanuvchilar ushbu guruhda yoza olishmaydi.</b>

🍁Yangiliklar: @MultiKoinot",
 'parse_mode'=>'html']);
    }}
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if($text == "/fire" && $from_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"➕Bo'lim yaratish + @Strongest0305 🔰
✔️Kanalga Qo'shiling  ✔️
🆔: @QasoskorlarMarvel_Uz",
 'parse_mode'=>'html',
            'reply_markup' =>  json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "📽️Eng yangi filmlar kanali",'url'=>"https://telegram.me/Marvel_DC_Uzb"]
                    ],
                    [['text' => "📡Kanal",'url'=>"https://telegram.me/QasoskorlarMarvel_Uz"]
                    ]
    ]
])
        ]);
}
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if ($text == "/panel" && $chat_id == $ADMINS) {
        file_put_contents("data/$chat_id/safargul.txt", "no");
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $ADMINS,
            'text' => "Boshqaruv paneliga xush kelibsiz!",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
[
                        ['text' => "📊Statistika", 'callback_data' => "stat"]
                    ],
                    [
                        ['text' => "📨Xabar yo'llash", 'callback_data' => "send"], ['text' => "📣Reklama", 'callback_data' => "fwd"]
                    ]
                ]
            ])
        ]);
    }     
    //// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
if ($text == "/panel" && $chat_id == $ADMINS) {
        file_put_contents("data/$chat_id/safargul.txt", "no");
        sendAction($chat_id, 'typing');
        bot('editmessagetext', [
            'chat_id' => $ADMINS,
            'message_id' => $message_id2,
            'text' => "🏠Bosh sahifaga xush kelibsiz",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "📊Statistika", 'callback_data' => "stat"]
                    ],
                    [
                        ['text' => "📨Xabar yo'llash", 'callback_data' => "send"], ['text' => "📣Reklama", 'callback_data' => "fwd"]
                    ]
                ]
            ])
        ]);
    } 
    //// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
 elseif ($data == "stat") {
        $user = file_get_contents("users.txt");
        $member_id = explode("\n", $user);
        $odam_soni = count($member_id) - 1;
        bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => "👥A'zolar soni: $odam_soni",

            'show_alert' => true
        ]);
    }
//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
	elseif ($data == "send") {
        file_put_contents("data/$chatid/safargul.txt", "send");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $message_id2,
            'text' => "📨Endi xabaringizni yozing🖊️",
        ]);
    } elseif ($azidil == "send") {
        file_put_contents("data/$chat_id/safargul.txt", "no");
        $fp = fopen("users.txt", 'r');
        while (!feof($fp)) {
            $ckar = fgets($fp);
              bot('sendMessage', [
            'chat_id' => $ckar, 
			 'text' => $text,
				'parse_mode'=>'MarkDown'   ]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "*✔️Bot a'zolariga yuborildi.*",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🏠Bosh Menyu", 'callback_data' => "azisaf"]
                    ],
                ]
            ])
        ]);
        //// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.
    } elseif ($data == "fwd") {
        file_put_contents("data/$chatid/safargul.txt", "fwd");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $message_id2,
            'text' => "Menga forward xabaringizni yuboring.",
        ]);
    } elseif ($azidil == 'fwd') {
        file_put_contents("data/$chat_id/safargul.txt", "no");
        $forp = fopen("users.txt", 'r');
        while (!feof($forp)) {
            $fakar = fgets($forp);
			bot('ForwardMessage', [
			  'chat_id' =>$fakar, 
				'from_chat_id' => $chat_id,
				'message_id' => $message_id2 ]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "✔️Xabaringiz barchaga yuborildi.",
            'reply_markup' => json_encode([
                'inline_keyboard' => [

                    [
                        ['text' => "🏠Bosh menyu", 'callback_data' => "azisaf"]
                    ],
                ]
            ])
        ]);
    }

//// Ushbu PHP kod @Hacker_Qasoskorlar kanali uchun @Strongest0305 tomonidan qayta tuzildi va barcha xatoliklar tuzatildi. Yangi funksiyalar ham joylandi.

?>
