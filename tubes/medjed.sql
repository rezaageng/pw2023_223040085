-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 12:58 PM
-- Server version: 8.0.33-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faisalde_rezaageng`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `news_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `created_at`, `news_id`) VALUES
(1, 'dfdf', '2023-06-03 05:45:31', 30),
(2, 'lmao', '2023-06-03 05:50:04', 30),
(3, 'lmao', '2023-06-03 05:58:35', 30),
(4, 'lmao', '2023-06-03 05:58:41', 30),
(5, 'heheh', '2023-06-03 06:01:48', 30),
(6, 'heheh', '2023-06-03 06:01:53', 30),
(7, 'yup', '2023-06-03 06:08:58', 30),
(8, 'ruby &lt;3', '2023-06-03 06:09:50', 25),
(9, 'aqua', '2023-06-03 06:10:09', 25),
(10, 'hlao', '2023-06-03 16:10:01', 30),
(11, 'hwhwhw', '2023-06-03 16:10:17', 2),
(12, 'hoi', '2023-06-04 08:10:03', 29),
(13, 'maharaja mahamatra king paduka lort baginda titisan maung hyperbloom aggravate kono mide banshou wa sukuzesuru yang dipertuan seno marseno', '2023-06-11 05:24:34', 1),
(14, 'hutao &lt;3', '2023-06-11 05:24:50', 1),
(15, 'yori yori kawaii', '2023-06-11 05:40:14', 29),
(16, 'yuki', '2023-06-11 05:57:50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(250) NOT NULL,
  `category` enum('GAMES','ANIME','OTHER') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `category`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Genshin Impact Version 3.7 Arrives on May 24 With Major Genius Invokation TCG Update', 'Global interactive entertainment brand HoYoverse has announced Genshin Impact&#039;s Version 3.7 &quot;Duel! The Summoners&#039; Summit&quot; arriving on May 24th. The latest update will bring the &quot;King of Invokations Grand Prix&quot; main event, more than 60 brand-new TCG cards, as well as the new playable four-star character Kirara into the game.\r\n\r\nCheck out Genshin Impact Version 3.7 trailer here: https://youtu.be/0fEtfzr0fpY \r\n\r\nAs an international TCG tournament across Teyvat, the &quot;King of Invokation Grand Prix&quot; attracts numerous visitors, including card players, tourists, and even a reporter from Fontaine at its venues and celebrations in multiple areas. Working for the famous newspaper The Steambird, Charlotte will not only cover the tournament but also investigate into a strange case on-site, and players can join her and meet characters from various nations in the event storyline. Meanwhile, the Adventurers&#039; Guild has prepared events that will delight everyone, regardless of whether you&#039;re a TCG player. Card players of all levels can attend the unofficial tourney &quot;Zero Hour Invokation&quot; and duel with selected cards. Visitors who are interested in Genius Invokation can also try out &quot;Evermotion Mechanical Painting&quot; or &quot;Heart of the Dice,&quot; two mini-games that incorporate elements of Genius Invokation TCG. The former requires participants to restore card illustrations from complex and disordered mechanics and gears, and the latter is a combat challenge where random Elemental Dice can be obtained to unleash special skills. For people who just want to enjoy leisurely gameplay, &quot;A Tour of Wonders&quot; is a great choice to join a sightseeing Parkour or enemies-clearing tour and collect commemorative stamps at the checkpoints to exchange for rewards. By finishing the events above, players can win Invokation Coupons to redeem rewards, including the free 4-star bow &quot;Ibis Piercer.&quot;\r\n\r\nIn addition, a series of trials will be added, and these will put the combat techniques and the imagination of the players to the test. Travelers will have to face three formidable enemies in &quot;Feast of the Departed Warriors,&quot; fight in battles where time stands still in &quot;Fayz Trails: Hypothesis&quot; and share their innovative custom Domains in &quot;Divine Ingenuity: Collector&#039;s Chapter.&quot;\r\n\r\nVersion 3.7 also features a major update to Genius Invokation TCG with more than 60 new cards, a new PvP mode, and a PvE mode. The ever-expanding TCG collection will officially welcome Character Cards of all four Archons as well as a larger selection of characters, monsters, weapons, and artifacts. With more flexibility in deck building, two special TCG modes serve as great testing grounds. In the new PvP mode &quot;Arena of Champions,&quot; winners will need to secure a total of 5 wins, while 3 losses will result in you having to start over from the beginning. The other new addition is the PvE mode &quot;The Forge Realm&#039;s Temper,&quot; where players can select the difficulty level and additional conditions to score extra points.\r\n\r\nKirara will also debut as a four-star Dendro sword user. Kirara works as a responsible courier who offers first-class delivery services. As a nekomata from Inazuma, she is also a master of transformation, and prefers to strike with her claws and youkai powers. With her Elemental Skill, Kirara can use her nekomata talents in two ways: she creates a Dendro shield with a flying kick, or she further transforms into an &quot;Urgent Neko Parcel&quot; to move more quickly and deal Dendro damage when she encounters opponents. When she unleashes her Elemental Burst, Kirara will bash her enemies with a special package that splits into many small Dendro bombs that deal additional Dendro damage. This nekomata can also approach some smaller animals without startling them. For V3.7 Event Wishes, the first half will welcome the debut of Kirara and reruns of Yoimiya and Yae Miko, and the latter will feature reruns of Kaedehara Kazuha and Alhaitham. Players can also join Yoimiya on a long journey towards the Nation of Wisdom in the second act of her Story Quest &quot;Carassius Auratus Chapter,&quot; or visit the talented architect Kaveh to uncover the complexities of his inner world in his Hangout Event.\r\n\r\nGenshin Impact Version 3.7 will be arriving on May 24. Also, the Version 3.7 Special Program has unveiled footage featuring the upcoming nation of Fontaine. With the cross-save and cross-play functions, players can enjoy their adventure across PlayStation®, PC, Android, and iOS. The game has been rated T for Teen by ESRB on PS5, PS4, PC, and Google Play, and 12+ on iOS. For more information and updates, please visit Genshin Impact&#039;s official website (genshin.hoyoverse.com) or follow @GenshinImpact on Twitter, Instagram, and Facebook.', '6485595d06cff.jpeg', 'GAMES', '2023-06-02 10:14:09', '2023-06-11 05:19:25', 1),
(2, 'Persona 3 Reload Announced for Early 2024 Release', 'After several rumors hinting of its existence, the remake of Persona 3 known as Persona 3 Reload has been leaked via an early upload on the Atlus West official Instagram account. This trailer was meant to be revealed during the Xbox Games Showcase on June 11, 2023.\r\n\r\nP3RE will be using the Unreal Engine, a first for the series. The Persona Team had been hiring an assistant technical artist for Unreal Engine 4 development back in September 2020.\r\n\r\nTest footage from Persona 3 Reload had previously been leaked from an internal Sega Japan meeting video. In the Atlus 2022 consumer survey, the Atlus titles fans wanted a remake of the most had Persona 3 and Persona 2 occupy the top spot with 78.9% of the votes.', '648561daa3881.jpeg', 'GAMES', '2023-06-02 10:26:34', '2023-06-11 05:55:38', 3),
(25, 'How Accurate Is 【Oshi No Ko】 About the Japanese Entertainment Industry? An Interview With Aka Akasaka', 'It&#039;s not hard to understand why the 【Oshi No Ko】 anime and manga series has been a huge hit. The story is full of fascinating insights about the Japanese entertainment industry, all wrapped up in a thrilling suspense plot. The manga is the work of two highly acclaimed manga creators: Aka Akasaka (Kaguya-sama: Love is War) and Mengo Yokoyari (Scum&#039;s Wish). In our exclusive interview with Akasaka, he reveals how industry realities inspired 【Oshi No Ko】 and other fascinating insights into the manga&#039;s creation.\r\n\r\nWhat inspired the original idea of “reincarnated as your favorite idol&#039;s child”?\r\n\r\nAka Akasaka: During my debate with my assistant about ways to create manga, we were discussing ways to create a story based on “strong desire.” At that time, one of the assistants and I talked about wanting to be reincarnated as an idol&#039;s child. That is a famous joke in Japan, often tweeted as a set piece when news of an idol&#039;s marriage breaks. I wrote the idea down in my book of story ideas. A while later, I started to hear more and more grumbles and complaints about the entertainment industry through the live-action version of Kaguya-sama and new streamer friends of mine. I thought this was the right time to create a story about the entertainment industry, and I realized that I could utilize the idea I had back then.\r\n\r\nHow much of the story&#039;s overall plot did you have in mind when you started drawing the first chapter?\r\n\r\nAka Akasaka: For me, the plots of the first act and the final act were a set. Then I pondered what kind of events I wanted to add in between. I had the impression that Japanese entertainment manga in Japan often used dramas, movies, plays, variety shows, etc. as themes. Today, however, the entertainment industry has changed dramatically. Talents [entertainers who frequently appear on TV in Japan] can no longer ignore the internet, YouTube has become super popular, movies are watched with subtitles, plays are increasingly based on anime and manga, and there has been an instance of a suicide stemming from a reality show. Considering all those facts, I then decided to take a contemporary subject, something that is happening in the real world of Japanese entertainment today. That was the first concept.\r\n\r\nGiven that the manga&#039;s early chapters move through time very quickly, what kind of things did you keep in mind when drawing Ai and the children?\r\n\r\nAka Akasaka: The main part of this series starts from Volume 2 in the original work and Episode 2 in the anime. Since the magazine in which the manga is serialized is targeted toward adult readers, I indicate that it is an adult story at key places in the story.\r\n\r\nHow did you both come to know each other and what led to working together on this manga?\r\n\r\nAka Akasaka: I originally appreciated Mengo-sensei&#039;s talent. A mutual friend gave us the opportunity to meet up when I told them about it. So I knew Mengo-sensei&#039;s skills and talent. When I came up with the concept for 【Oshi No Ko】, there was a story about the entertainment industry in one of Mengo-sensei&#039;s works. So I read it and immediately decided to contact Mengo-sensei.\r\n\r\nTo what extent do you (Aka Akasaka and Mengo Yokoyari) exchange ideas when developing the manga&#039;s plot?\r\n\r\nAka Akasaka: Mengo-sensei has made a hit with Scum&#039;s Wish, which isn&#039;t based on an existing story or a separate writer&#039;s script. She is capable of writing interesting manga without me. When I am stuck on a story, I often consult with Mengo-sensei. I go out to dinner with the editor and Mengo-sensei. We call these “prep meetings,” but we mainly just shoot the breeze. Basically, think of it as me having the flow of the story in my mind, and whenever I get stuck, I consult with someone.\r\n\r\nHow does working on 【Oshi No Ko】 compare to your previous manga?\r\n\r\nAka Akasaka: Fundamentally, I believe myself to be a writer in the vein of 【Oshi No Ko】. The comedy style in Kaguya-sama is just a particular formula that originated from the editorial department&#039;s request. So, for me, that series is something made from that particular formula. However, I have also included Kaguya-sama-style comedy in the 【Oshi No Ko】 series to make it easier to read.\r\n\r\nWhat is your process for designing new characters? Were there ever any disagreements on how a character should look?\r\n\r\nAka Akasaka: For the main characters, I draw a rough sketch and send it to a lady in charge of storyboards. However, at times Mengo-sensei draws an entire character even without me providing the finer details in writing. Sometimes, the process is more interactive, like I became fond of the character and increase the frequency with which they appear. I like that style of character creation. If there is a problem with the character design, we discuss it and change it. However, it was only once that we actually made a change. That was when I modeled a character off a real person, and the design looked too much like the person in question. 【Oshi No Ko】 uses pieces of real-life stories in its plots, but it is not a documentary, and it definitely does not intend to attack real people. I adapt events that could happen with the trends and rules of the current entertainment industry in the storylines. This work is fiction.\r\n\r\nWhat kind of research did you do on the entertainment industries depicted in this manga?\r\n\r\nAka Akasaka: The lines of coverage of research for 【Oshi No Ko】 are very extensive. We go around hearing real stories and personal estimations from top talents, underground idols, people who work at TV stations, real producers, managers, editors of gossip magazines, YouTubers, scriptwriters, and many others. What is revealed in this process is a great deal about power balance and logic, and there are quite a few instances of dissatisfaction, like “A is taking B lightly, B is taking C lightly, and C is taking A lightly,” that are chalked up to specific circumstances and rules. Sometimes, I think that if they work with this understanding, the talents and the people around them can work without stress. I have heard that the entertainment industry in the U.S. and Japan are completely different. In the Japanese entertainment industry today, there is no union for talent and writers, there are no guarantees, auditions are disregarded in casting, opportunities are given based on the balance of power between companies, and basically, you can&#039;t go against the office manager…those sorts of things. And they continue to happen. If you, American readers, can enjoy reading 【Oshi No Ko】 with the knowledge of this unique Japanese situation, you may deepen your understanding of this story.\r\n\r\nWhat inspired you to portray the idol world in such a dark and dramatic way for a fictional work?\r\n\r\nAka Akasaka: There was an instance of a cast member being attacked by a fan who saw a picture of the first news of a movie release. When that happened, the person came across as very tough, but after we became friends, they confessed that they were badly hurt emotionally. When I found that out, I realized that talents hide their true colors for the sake of their works and for their fans who are supporting them. With the spread of the internet, we live in a society where fans&#039; voices are heard directly. I want people to know how young talents are being hurt, exploited, and suffering. I think that this work also asks the question of how people should deal with and treat those talents. I guess it is correct to say that when I wrote about reality, it naturally became darker.\r\n\r\nEven though the wordplay is slightly different in the manga&#039;s English version, overseas fans are also in the habit of calling Kana “Baking Soda”-chan. What do you think of this joke transcending national borders?\r\n\r\nAka Akasaka: I never imagined that the term &quot;baking soda-chan&quot; would become so widespread, even at the time of the release of the Japanese version. I am very curious about how people in the U.S. understood the joke using Japanese words, jūbyо̄ (ten seconds) and jūsо̄ (baking soda).', '648556802d566.jpeg', 'ANIME', '2023-06-02 10:14:19', '2023-06-11 05:07:12', 1),
(29, 'JKT48 10th Anniversary Concert &quot;HEAVEN&quot;', 'nteraja Presents: JKT48 10th Anniversary Concert &quot;HEAVEN&quot; &amp; Gaby Graduation Ceremony adalah konser ulang tahun kesepuluh JKT48, sekaligus menjadi upacara kelulusan untuk Gaby, anggota JKT48 generasi pertama yang terakhir, yang diadakan di Istora Senayan pada 6 Agustus 2022.[1] Acara konser spesial ini telah digelar dengan konsep yang lebih megah.[2]\r\n\r\nKonser ini juga dihadiri beberapa mantan anggota JKT48 lintas generasi (dari generasi pertama hingga ke-9).[3][4]\r\n\r\nLatar Belakang\r\nPerencanaan\r\nKonser ini diumumkan pada JKT48 10th Anniversary Kick-Off Conference yang diadakan pada 18 Desember 2021 di Balai Sarbini. Walaupun ulang tahun JKT48 yang ke-10 jatuh pada 17 Desember 2021, konser ini dirayakan pada pertengahan tahun 2022 dengan konsep yang lebih megah.[2] Member generasi pertama, Gaby, mengumumkan kelulusannya dari JKT48 pada acara tersebut.[5][6]\r\n\r\nPada 2 Juni 2022, dalam konferensi pers &quot;JKT48 The TEN: Update&quot;, diumumkan bahwa konser ini akan digelar di Istora Senayan pada 6 Agustus 2022.[1][4][7][8][9]\r\n\r\nJelang Konser\r\nDua belas hari menjelang penggelaran acara konser spesial ini, Gubernur Jawa Tengah Ganjar Pranowo memberikan ucapan selamatnya kepada JKT48.[10]\r\n\r\nJKT48 mengusung &quot;Heaven&quot; sebagai tema konser ini. JKT48 juga akan bertemu orang-orang dengan kapasitas cukup banyak. acara konser speial ini ini mendapat respons positif dari penggemar yang khususnya Fans JKT48. Tiket pra-penjualan habis terjual dalam waktu kurang dari 10 menit, sementara tiket reguler terjual habis dalam waktu kurang dari 20 menit. Ribuan tiket untuk menonton secara daring juga disebut telah terjual hingga ribuan pemesan.\r\n\r\nTentang Acara Ini\r\nJKT48 telah berdiri selama 10 tahun. Dengan visi untuk memberikan energi positif kepada seluruh Indonesia, JKT48 bisa terus bertahan berkat dukungan para penggemar. Semua anggota dan penggemar yang pernah bersentuhan dengan grup ini pasti memiliki ceritanya masing-masing. Untuk merayakan seluruh cinta, semangat, dan kenangan itu dalam konser megah untuk ulang tahun JKT48 yang ke-10.\r\n\r\nPara anggota JKT48 sering disebut sebagai bidadari - dan dalam konser ini, mereka akan membawa terbang ke langit ketujuh. Datanglah, bebaskan jiwa dan teriakan. Rasakanlah sihir sebenarnya dari sebuah konser JKT48.\r\n\r\nDi konser ini juga akan diadakan Upacara Kelulusan dari Gaby, anggota terakhir generasi 1 yang merupakan pionir dalam membangun dan memperkenalkan JKT48 kepada masyarakat Indonesia. Seperti apakah perasaan dan perkembangan seorang gadis yang telah hidup sebagai idola selama 10 tahun? Upacara Kelulusan ini akan menjadi pembuktian terakhir darinya.[11]\r\n\r\nArea Festival\r\nDi luar lokasi untuk mengadakan acara konser spesial ini yang bertempat di area parkir Istora Senayan, terlebih dahulu, akan ada Area Festival yang di mana para pengunjung dapat datang dan melakukan berbagai aktivitas. Area Festival terdiri atas: stan makanan dan minuman, stan permainan, stan cenderamata, area sponsor, serta panggung kecil-kecilan. Area Festival ini terbuka untuk umum, tidak terbatas hanya pada pengunjung yang memiliki tiket konser. Para pengunjung dapat membeli makanan dan minuman di stan tersebut, serta menikmati rangkaian aktivitas hiburan di stan permainan maupun panggung kecil-kecilan.\r\n\r\nMengenai aktivitas panggung kecil-kecilan, pihak manajemen JKT48 ingin mengundang untuk pengunjung yang ingin berpartisipasi meramaikan festival ini dengan kategori yang diperbolehkan adalah; cover tarian, cover musik akustik, lawakan tunggal, drama kecil-kecilan, dan pertunjukan lainnya yang berupa pertunjukan panggung dan berkaitan dengan JKT48. Peserta yang terpilih diwajibkan untuk membawa segala properti maupun peralatan yang akan dipergunakan untuk pertunjukan.[12]\r\n\r\nSehari menjelang persiapan acara konser spesial ini, pada 5 Agustus 2022, pihak manajemen JKT48 mengumumkan ada 11 peserta dan 1 MC (sama-sama khusus Fans JKT48) yang telah mendaftarkan diri dan berkesempatan untuk tampil di atas panggung kecil-kecilan, dalam Area Festival ini yang diadakan pada Hari-H mulai pukul 12:00 WIB.[13]', '64855d5b1c671.jpeg', 'OTHER', '2023-06-03 02:59:31', '2023-06-11 05:36:27', 1),
(30, 'Honkai: Star Rail Version 1.1 Coming on June 7', 'Honkai: Star Rail is a space fantasy RPG title with a journey through immense worlds of the unknown. The game features fantasy elements with myths and legends integrated into the space sci-fi story. Implanted with a [Stellaron], the Trailblazer bravely set sail for the galaxy to drill down to the truth revolving around the so-called Cancer of All Worlds. Trailblazers can experience a vast universe abundant in distinctive cultures, landscapes, and scenery. From the Herta Space Station where the knowledge reserve of the universe and the forthcoming journey has been granted, to Jarilo-VI where numerous dangers and conflicts are frozen beneath the snow, to Xianzhou Luofu, the silkpunk flagship infused with eastern fantasy where development and dispute focusing on the topic of immortality.\r\n\r\nThe latest update brings three new playable characters - Silver Wolf, Luocha, and Yukong, who appeared in the intergalactic story before and can now be officially recruited to assist in the grand space fantasy odyssey.\r\n\r\nSilver Wolf, a super genius hacker within the Stellaron Hunters, breaks through all defense systems as easily as pie. She is a Quantum-Type character following the Path of Nihility and can apply different debuffs to enemies to improve her allies&#039; combat superiority. Outside of combat, her Technique comes in handy as she is able to deal damage and reduce the enemy’s Toughness regardless of their Weakness. When she unleashes her Ultimate, Silver Wolf will bash enemies, gaining the upper hand for the team by dealing damage to the enemies as well as reducing their defense.\r\n\r\nThe other character, Luocha, a wandering merchant with an elegant look and a gentlemanly demeanor, seems suspicious by carrying a mysterious coffin all the time. As an Imaginary-Type character following the Path of Abundance and a man with medical knowledge, Luocha is a master of recuperation. His unique Skill guarantees “emergency healing” when any alley is in danger, without consuming any Skill points. His Ultimate “Death Wish” dispels 1 buff of all enemies and deals Imaginary damage.\r\n\r\nLastly, Yukong is the Sky-Faring Helm Master, the leader who oversees all matters relating to flight, including commerce, cargo, and passengers of Xianzhou Luofu. As an Imaginary-Type character following the Path of Harmony, Yukong’s skill set centers around assisting companions. Her days on the front lines may be over, but her battle mindset and instinct don’t fade away!\r\n\r\nBesides bonding with these new characters, Trailblazers can roam the worlds and uncover mysteries, experiencing refreshing gameplay provided by the Version 1.1 update. In the “Starhunt Game” event, the Trailblazers receive an invite from Herta Space Station&#039;s network security engineer, Leonard, assisting him to locate the electronic graffiti hidden across the station and uncover the secrets within. As part of the compensation, the graffiti designs can be collected and applied to the in-game surfaces. In addition, in the city of Belobog, where citizens have finally been saved from the threat of Stellaron, the History Museum is getting ready to be reopened. In the &quot;Everwinter City Museum Ledger of Curiosities&quot; event, the Trailblazer will spare no effort to track down clues, recover the lost exhibits, and run the business as the museum manager.\r\n\r\nA series of trials will be added through “Stellar Flare,” “Garden of Plenty,” and “Lab Assistants in Position”, some of which will put the combat techniques and the strategic thinking of the Trailblazer to the test, while providing bountiful rewards. Meanwhile, three new Companion Missions provide opportunities to gain in-depth stories of these intriguing characters. Some useful functional features will be implemented as well, such as the friend chat and automatic enemy pinpointing, ensuring a smoother gaming experience.\r\n\r\nHonkai: Star Rail Version 1.1 will be arriving on June 7, 2023, on PC, Epic Games Store, iOS, and Android. Its PlayStation version is under development and more information will be revealed soon. With the cross-save and cross-play functions, players can enjoy their adventures across different platforms. The game has been rated T for Teen by ESRB and 12 by PEGI.\r\n\r\n', '648557babe4ea.jpeg', 'GAMES', '2023-06-03 03:00:37', '2023-06-11 05:12:26', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `image`) VALUES
(1, 'rezaa', '$2y$10$5NHMazVriXE2NA7D02wHau4mJ7Ml3ezKDHvYn9NJXLC9HUnW9GNF2', NULL),
(2, 'kaizinn', '$2y$10$bUj4bliu9Sz1oCEZfLxjtOMWKDhu4QqDX4ZmrXogGyEXV1qH1BxCm', NULL),
(3, 'krini', '$2y$10$YclzUamko2seeM9/G35pa.BaRmTnyAyLmPEbAWtCKfBTKoiiG0dfG', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_NEWS` (`news_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_NEWS` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
