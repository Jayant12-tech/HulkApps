-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 10:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hulkapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category` text DEFAULT NULL,
  `created_at` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `user_id`, `category`, `created_at`) VALUES
(8, 'Live Your Life To The Fullest', '<p>I don&#39;t know what am I going to write. Neither I know the theme nor the purpose, just felt like pouring my heart out. We all(including me)are afraid to enjoy life, we restrict ourselves from doing things which we enjoy the most. I think the reason behind is we feel that either it&#39;s the wastage of time or we are worried about the results. But believe me, inner peace (satisfaction) is the biggest achievement .Many of us don&#39;t even remember the last day they enjoyed for their own inner peace. Just for once , don&#39;t think about this stupid fake world, just for a while don&#39;t think about the consequences of our deeds. Just do it, you&#39;ll feel, you&#39;ll experience the real happiness. For the entire span,we don&#39;t live our life to the fullest, the reason being we are saving for the future. We live harder now in hope for an&nbsp; easy future but what I have observed is this is all an illusion. With every passing day, we are losing a diamond from a necklace and what would you do with a thread and diamonds in your palm,when you have lost the neck to embrace it. This may seem a distracting one. But believe me, forget about your future, just live your present to the fullest by taking lessons from the past .Find happiness in little moments around you. Don&#39;t be busy posing fake when you are broken inside. Rather,capture the moments in your hearts, these pictures are just a mere thing.<br />\r\n<br />\r\nHow ironical it is know, we have hundreds of friends on Instagram and Facebook, but when we are on the death bed, the only people praying for our health are the immediate family members. For our entire life, we live for likes and comments, we don&#39;t talk much to our immediate ones because we are busy in building a network and maintaining a healthy status for our near future. When some mishappening occurs, we all wish if we could reverse the hands of clocks, we all regret our deeds. The only reason for this uninvited regret is that we don&#39;t live in the present moment. Half of the time we are busy regretting the past and the rest we are busy planning the future but the golden time, i.e , the PRESENT is lost somewhere between the two ends. In the time allotted , we are so much occupied in making new friends, that we lose the gems. Everyone is busy competing with one another, somewhere we ignore the fact that everyone has their own pace. It&#39;s okay to get success at 50, there&#39;s nothing wrong if girls get married at 40. Everyone says there should be some exciting change in the present scenario, there should be some good factor in our regular lives but no one wants to be the change that we are expecting in our lives. There are so many walls around us ,some created by our very own conscience the other by our fruitful society, that we can&#39;t see the clear sky. We find dumb routes to escape rather than being the buldozer who&#39;ll break these wall. When did ending one&#39;s life became an easier option , rather than living it. Why it has become a burden these days to live life to the fullest. Many people say that the reason is money, is it so? No, it can never be money. Had it been true, the king of the palace would have been the richest being of the kingdom. On the contrary, he&#39;s the most puzzled one . He not only deals with the curve&nbsp; balls of his own life, but also looks after his kingdom&#39;s people. The essence of writing so long is not that if we&#39;ll live in the present, every sorrow will diminish. Rather, the essence is sorrows and happiness are a part of life , but our life&#39;s balance is much inclined towards sorrows. Here where the problem arises , the life&#39;s balance should either be inclined towards happiness or should form a perpendicular. Who knew one day we&#39;ll be stuck in our homes and miss the good old happy days .We all are definitely regretting , we all are thinking&nbsp; that when we had good time in our hand , if we would have laughed a little louder, cried a little harder, hugged a little tighter. Life is always going to throw curve balls towards us , it&#39;s totally on us how we&#39;ll mould the tough time into a little good. All this could&nbsp; be done by seeing the positive aspect. Talking about quarantine, it gave us more time to laugh with our closed ones , to pop out the skills that were buried inside. It taught us a lesson that money can&#39;t buy happiness. The key to live a happy life is be satisfied with what you have but never show off. If you think that you are having too much, look at the ones who are above you. Someday, if you feel low have a look at those who are below you. In this way you&#39;ll always respect your status. There&#39;s nothing bad in becoming a Richie Rich, the problem is that your happiness should not be compromised.The almighty would have never created this universe,if he would have known about today&rsquo;s world.Our lord made the humans,we were the ones who corrupted it by means of so called religion.Why there&rsquo;s a need to fight?Why can&rsquo;t we live happily.<br />\r\n<br />\r\nOne day we&rsquo;ll burn in ashes,the only legacy we&#39;ll leave behind is our good deeds.My only urge to you is stop having cat&nbsp; fights over these issues. Spread peace and happiness so that people could remember you for something good. Talking more about death,we live in a world where the individuals are praised after death.Give it&nbsp; a thought. Start praising the people around you.Who knows your lovely words can save their life .Atleast that dying&nbsp; individual would be aware that the world needs him.Being jealous is a human tendency,but having a control over it, is what needed today. Writing an idealistic article about happiness is not tough. Hardest part is the implementation. I&#39;m also like you all, never satisfied, too emotional, too greedy but let&#39;s promise ourselves that we&#39;ll live our life to the fullest. We&#39;ll laugh a little louder and hug a little tighter. In a hope of betterment.</p>', '1650551229-39636life.jpg', 1, 'Life', 'April 21, 2022'),
(9, 'Life is what you make it', '<p>some random content would come here</p>', '1650544082.jpg', 2, 'Motivation', 'April 21, 2022'),
(10, 'Take Responsibilities Of Your Own Failure', '<p>This is the second attempt of writing something worthy.I&rsquo;ll again repeat myself I&rsquo;m not a good writer.All I know is to pour my heart out.I feel somewhat relaxed,unloaded when the river of thoughts that flows in my mind finds a destination.This year has been a challenging one.Each individual is struggling for one&rsquo;s survival.With every passing day, I fear would the things ever get back to normal.Somewhere I think this was the life I always dreamt off.i.e,I was so much puzzled of my routine, that I wanted this world to stop.I always used to complain, I always used to say I would have accomplished great things in my life if the time was in my hand.I always blamed the circumstances for not being able to achieve my targets.Today, when the whole country is locked,the time almost has paused,I realize that this is something I always wanted, then why am I so much puzzled today,why am I in a hurry to get back to my normal schedule.Somewhere,I realized that I myself is solely responsible for my failure.Today I&rsquo;have plenty of time in my hand still I&rsquo;m not able to do something fruitful which self-evidently says that I myself is responsible for my own failure.I have realized that the reason behind being unsuccessful is that we never accept the fact that our own deeds are responsible for not being able to be the one,we always wanted to.The day you&rdquo;ll accept your pros and cons,you&rsquo;ll be on the way of your dream.These words may seem too dramatic,too fictional,too imaginary but believe me this is the truth.I always used to complain I could not be not the one I wanted to be because I never had much time in my hand.But the truth is I could not achieve it because I&rsquo;m lagging somewhere.The first mantra of being successful according to me is to accept your pros and cons and to have a self realisation that you yourself are responsible for your failure.</p>\r\n\r\n<p>The second thing I realized is somewhere everyone is running behind the crowd and money.To be successful,try to earn from your passion.You can enjoy your work only when you are interested in it.Have the courage to stand against the society to live your passion.Every workman needs a break from his work,because he&rsquo;s doing it for the sake of money.Imagine if the person earns from what he enjoys,he would never demand a break.I may study hard for the whole day and I may score a 10 in exams too but I&rsquo;m never satisfied.I feel overwhelmed when people praise my public speaking.This was just an example to brief my point.</p>\r\n\r\n<p>The biggest mistake people make these days is underestimating their own self and idealising others qualities.What if a flower would compare itself to a fruit??.They both have their defined parameters.In the same same,the almighty has carved the individual in his own unique way.Try to exploit that uniqueness instead of running behind something you don&rsquo;t have.</p>\r\n\r\n<p>Don&rsquo;t pretend to this stupid fake world that you are striving hard for the success,take babysteps toward your goal.One day you&rdquo;ll definitely accomplish it.It&rsquo;s awesome to have friends,they make their life joyful but be selfish,be self-centered,when it comes to achieving your goals.In most of the cases,you are surrounded by people only when you are successful.When it&rsquo;s dark,even the shadow leaves you alone than is it worthy to trust humans?.Here the irony is these bullets are pointed out by a girl who hasn&#39;t achieved something yet and even she herself has not even followed a single bullet till now but this girl deeply feels that she could do much better if these traits are inculcated in one&rsquo;s personality.</p>\r\n\r\n<p>In the hope of betterment&hellip;&hellip;&hellip;&hellip;..</p>', '1650551113.jpg', 1, 'Motivation', 'April 21, 2022'),
(11, 'Mental Fitness is very important for your wellness!', '<p>Hello guys! I hope you all are doing great! You guys have always shown love to my blogs and as I always say you guys are the reason that motivates me to write more and more.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The topic I chose for the blog, as you can see in Mental Health. In my previous blogs I had covered about physical health, about a healthy diet and sleeplessness and it was just during the last blog that was on sleeplessness it struck me the mental well being is equally,&nbsp; no not equally but is the most important thing a person need to know before he can be fit mentally!&nbsp;</p>\r\n\r\n<p>The brain is like a muscle &ndash; if you don&rsquo;t give it a regular workout, it loses tone.</p>\r\n\r\n<p>Here are some tips to help you improve your mental fitness:</p>\r\n\r\n<ol>\r\n	<li>Exercise for 30 minutes every day.&nbsp;Physical exercise delivers oxygen to the brain. This can help to improve your memory, reasoning abilities and reaction times.</li>\r\n	<li>Read often and read widely.&nbsp;Keeping an active interest in the world around you will help to exercise your brain and improve your mental fitness.</li>\r\n	<li>Boost your levels of vitamin B.&nbsp;Eat plenty of wholegrain cereals, leafy greens and dairy foods. Vitamin B is essential to brain health.</li>\r\n	<li>Challenge your intellect and memory.&nbsp;Stretch yourself mentally by learning a new language, doing the cryptic crossword or playing chess. This is important for brain health and good for your social life.</li>\r\n	<li>Take time to relax.&nbsp;Excess stress hormones like cortisol can be harmful to the brain. Schedule regular periods of relaxation into your week.</li>\r\n	<li>Take up a new hobby.&nbsp;Learning something new gives the &lsquo;grey matter&rsquo; a workout and builds neural pathways in the brain.</li>\r\n	<li>Actively manage your health.Conditions such as diabetes or heart disease can affect mental performance if not diagnosed and treated. Have regular check-ups with your doctor to prevent future problems.</li>\r\n	<li>Engage in stimulating conversations.&nbsp;Talk to friends and family about a wide range of topics. This gives your brain an opportunity to explore, examine and enquire.</li>\r\n	<li>Take up a manual activity or craft.&nbsp;Hobbies such as woodwork and sewing or activities like skipping require you to move both sides of the body at the same time, in precise movements. This can help to improve your spatial awareness and increase your reaction time.</li>\r\n	<li>Exercise your brain with others.&nbsp;Watch, question and answer game shows and enjoy the competitive spirit. Involve the family in regular games to test their general knowledge.\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>So guys that is it for this blog! I am sure you all must have learned a lot from this one too! And just being honest from the above points there are few which I have taken from google, just for reference! And as always if you have liked my blog don&#39;t forget to share it with your friends, your family and yes also write your views down in the comment section below! See you guys in the next blog, till then stay healthy, stay happy!</p>\r\n\r\n<p>I believe in majority of the cases person try to become physically fit only when other people start commenting on the looks of that person.Like when somebody says a fat person how fat he/ she is they would join a gym or start a diet! And all this hard work is done just in order to get a good compliment by others. No their is not bad about it who doesn&#39;t want to get good compliments about how they look, but yes these compliments are not permanent. They stay with you until your physically fit but if your mentally fit, then no matter what other think about you, it won&#39;t matter until and unless your happy with yourself! The happiness you get in order to satisfy your needs apart from just getting other people&#39;s compliment, is what is permanent! This doesn&#39;t mean I am asking you to stop being physically fit, but along with that we must all also be mentally fit! So let&#39;s dive right into some of the points that can help you be mentally fit!&nbsp;</p>', '1650570881.jpg', 1, 'Happy', 'April 21, 2022'),
(12, 'Spider-Man', '<p>Throughout nearly two decades of web-slinging, rebooting, reversals of fortune, immersions into the Marvel Cinematic Universe, and sporadic reappearances by the Spidey-hating J. Jonah Jameson, the &ldquo;Spider-Man&rdquo; movie franchise has been wildly inconsistent, yet remarkably indestructible. &ldquo;Spider-Man: No Way Home,&rdquo; the latest episode, likely will stoke even greater enthusiasm for the series with its canny mix of redemptive evolutions, abundant Easter Eggs, emotional impacts, state-of-the-art special effects &mdash; and sly hints at a back-to-basics approach in films to come.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Naturally, the character also continues to attract diehard Spidey-fans to animated TV series and direct-to-video product, all-star MCU group gatherings &mdash; and, yes, the comic books that started it all. But the nine theatrical features (including an Oscar-winning animated one) &mdash; movies in which Spider-Man is the star, not an ensemble player &mdash; are our focus here in this revised least-to-best ranking..</p>', '1650570965.jpg', 1, 'Happy', 'April 21, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `user_id`, `blog_id`, `created_at`) VALUES
(10, 'Hello , this is just a trail comment!', 1, 9, '2022-04-21 23:08:13'),
(11, 'This is another trail comment!', 2, 9, '2022-04-21 23:11:39'),
(12, 'This is again a trail comment!', 1, 11, '2022-04-22 01:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_04_20_063101_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('98WuB0F26Uv8stXwyur9tSoIMmsUFSgevDUfiXsi', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 Edg/100.0.1185.44', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSlptUDJHZUI4TFFJaUZzVm8ydVRwMDZPSHBVdXp1djFPOTR5amNaRyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFNvMWM5VzVwd3Qyem1vOVljTXV4d2U5M2VBSEd1c1NFeG14U2pVaFYwLk85ckJibk9PckJTIjt9', 1650570340),
('GdsS3NFK1RfqXDXWCYZWyDhc6k6qm258NUd3fadq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 Edg/100.0.1185.44', 'YTo0OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6InhRQTFZVkNtRVhOQW5Dcm84c1RqanlQS1BXbmFiMHl5TkZ4bjZsYTEiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1650569725),
('NWdpy2BFoAlGFjpWE0OQ5mZkvM2vIcqAZ3mqz6uA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwLz9wYWdlPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiY2J1eGo4bEJMOGZqS3Zqc2N3MlZvb2RYVjRocm1iczZUT2FYSXZ2YiI7fQ==', 1650571230),
('Qi0XIqnCV7Z30oWAXSMYpAY7GvEbAPG2DlOYW1wl', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 Edg/100.0.1185.44', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYW1qMEVXOXZZVlBtWlU0dHpxVm96M0V6MVRoU3h6SVhDUFZ1RjVuNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1650571481);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Jayant', 'jayantchoraria4@gmail.com', NULL, '$2y$10$Fn9.J2jBRPGOCILZZuBTA.D2NyRu5qDYMpMI/z9J3ad4QoeRsZCUm', NULL, NULL, NULL, 'Dze2XnJO9X8g2Upiwc80SoMz1fcs6HwiLAeh7NYZJmfxJ0Yo65XMEnCUsOBF', NULL, NULL, '2022-04-20 02:39:37', '2022-04-21 14:20:48'),
(2, 'Pragya', 'pragyachoraria67149@gmail.com', NULL, '$2y$10$OJA.DsIh8cZWEMgUm./bp.DmjjJPRV.a8KXT6PvE/WKULrK2WTTT2', NULL, NULL, NULL, 'NgTS2wo5g3HHCVCDI5V3KzYl0sK03JXTGGL2UUEpLxuSwHRh6DQpQiI2AHLD', NULL, NULL, '2022-04-20 04:39:28', '2022-04-20 05:57:44'),
(3, 'jay', 'j@gmail.com', NULL, '$2y$10$NoQKtQplaCwmLvXXayhsa.6mVi9boy1cyuOk2fI44c6AhRv/kKluW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-20 04:41:38', '2022-04-20 04:41:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
