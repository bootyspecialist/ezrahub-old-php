<?php

class Fratstar {

    static function butt_chug($thread, $reply) {
        static $fratstar_replies = array(
            "i'm confused as why everyone is saying pike is middle or even lower-middle. it's filled with all the random ass nerdy losers basically whoever the alumni could find when they were allowed to be recognized on campus again. they don't even have a house (not till next fall) or a personality. lol @ these fkign GEEDs",
            "i plow alpha phi slot machines on the reg, don't even care. slot machines gonna slot machine all i care is that i'm getting my nut in nomsayin",
            "chi psi on the decline, psi u on the rise",
            "it's always funny hearing GEED upperclassmen who tried and failed trying to badmouth frats in the leadup to rush. GEEDs with the most vocal opposition of the greek system are always the least cool.",
            "powerhouses like my frat dont care about rankings on a website because word of mouth is worth so much more. if there's a single freshman who goes into rush without knowing that psi u is the best frat, i'd be shocked. half the battle of rush week is just getting freshmen to walk in your doors one time, so you can show how cool your house is/how frat-tastic the brothers are. due to the huge amount of houses on campus and the small amount of time for smokers, lower and middle tier frats need these rankings so kids will choose to visit their house. top houses dont need to compete at that level, because they will already be guaranteed to have about 150 kids walk through their doors on the first day. just awareing you geeds",
            "sup geed",
            "lol GEED, u mad?",
            "time to go back to west campus and play monopoly with denice cassaro GEED",
            "u mirin??",
            "u mad?",
            "i actually hate rush so much (srs). talking to new fuckin geed pledge tards but saying the same chitty chitty bang bang over and over again just so some new tards can join your house for another year of stupid chitty chitty bang bang. screw the system, lets just go jerk off on everything (no homo)",
            "Psi U: very attractive, a bit stand offish, very exclusive, mix with top sororities regularly\r\nChi Psi: gay\r\nSig Chi: gay\r\nSig Phi: gay\r\nAlpha Delt: gay",
            "if youre not in the top 2 or 3 houses, literally nobody cares who you are at Cornell. can't wait to chuck at keystone at your head the next party GEED, oh wait we don't have open parties",
            "^no one cares lol",
            "fkign lol @ sig ep SELF PROMOTING on here",
            "fkign lol @ delta chi SELF PROMOTING on here",
            "thanks sig pi",
            "the only thing i've heard consistently from a lot of people is that chi psi messed up badly (again) this year...I don't understand why people still think think they're in the same group as Sig Chi, Psi U, or Sig Phi...",
            "oh look sig pi self-promoting again.. poppycockin geeds",
            "it's your turn in monopoly geed, denice cassaro is waiting for you to make your move!",
            "sup g e e d",
            "do geeds have any influence on campus besides choosing which monopoly piece to use at denice cassaro's??"
        );

        //don't reply to people quoting another post with the targeted text in it
        $fratstar_reply_quote_body = preg_replace('/\[quote=\"([^\"]+)\"\](.*?)\[\/quote\]/is', '', $reply->body);
        $fratstar_reply_quote_body = preg_replace('/\[quote\](.*?)\[\/quote\]/is', '', $fratstar_reply_quote_body);

        //did someone say one of the sig __ frats?
        if (preg_match('/sig (ep|pi|chi|phi)/is', $fratstar_reply_quote_body) && mt_rand(1, 100) > 40) {
            $fratstar_reply_quote_body = preg_replace('/\[img\](.*?)\[\/img\]/is', "[url]$1[/url]", $fratstar_reply_quote_body);
            $fratstar_reply = Reply::create(array(
                'thread_id' => $thread->id,
                'body' => '[quote="' . $reply->user . '"]' . $fratstar_reply_quote_body . "[/quote]\r\n" . $fratstar_replies[mt_rand(0, count($fratstar_replies) - 1)],
                'user' => 'fratstar',
                'ip_addr' => '8.8.8.8',
                'location' => 'his frat castle'
            ));

            if (mt_rand(1, 100) > 97) {
                $fratstar_thread = Thread::create(array(
                    'title' => 'Open parties this coming weekend (' . date('m-d',strtotime('next Friday')) .  ')/pledge parties',
                    'body' => 'NONE FOR GEEDS! u mad? impoverished geeds all up in this thread. time to go back to west campus and play monopoly with Denice Cassaro',
                    'user' => 'fratstar',
                    'ip_addr' => '8.8.8.8',
                    'location' => 'his frat castle'
                ));
            }
            return;
        }
    }
}

?>
