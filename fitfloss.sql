-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 03:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitfloss`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bigImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `heading`, `content`, `bigImage`, `thumbImage`) VALUES
(8, 'We are FitFloss. A Dedicated Fitness Center Since 2004', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>', 'img/upload_images/big_image/1570463356about_img.jpg', 'img/upload_images/thumb_image/1570463356about_img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categoryp`
--

CREATE TABLE `categoryp` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoryp`
--

INSERT INTO `categoryp` (`id`, `name`) VALUES
(1, 'Fitness'),
(2, 'Health & Wellbeing'),
(3, 'Nutrition & Recipes'),
(4, 'Workouts'),
(5, 'Promotions');

-- --------------------------------------------------------

--
-- Table structure for table `choose_us`
--

CREATE TABLE `choose_us` (
  `id` int(11) NOT NULL,
  `heading` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bigImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choose_us`
--

INSERT INTO `choose_us` (`id`, `heading`, `content`, `bigImage`, `thumbImage`) VALUES
(3, 'Quality Training', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'img/upload_images/big_image/1570461189feature_icon_1.png', 'img/upload_images/thumb_image/1570461189feature_icon_1.png'),
(4, 'Flexible Timeframe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'img/upload_images/big_image/1570461211feature_icon_2.png', 'img/upload_images/thumb_image/1570461211feature_icon_2.png'),
(5, 'Qualified Trainers', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'img/upload_images/big_image/1570461229feature_icon_3.png', 'img/upload_images/thumb_image/1570461229feature_icon_3.png'),
(6, 'Affordable Price', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'img/upload_images/big_image/1570461246feature_icon_4.png', 'img/upload_images/thumb_image/1570461246feature_icon_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `heading` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bigImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availableSeats` int(11) NOT NULL,
  `overviews` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benifits` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `heading`, `content`, `bigImage`, `thumbImage`, `price`, `availableSeats`, `overviews`, `benifits`) VALUES
(2, 'Basic Body Building ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'img/upload_images/big_image/1570467080single_cource_1.png', 'img/upload_images/thumb_image/1570467080single_cource_1.png', '$140', 4, 'Of first, grass creepeth day divided evening. Fruitful first, whose so face void from yielding given fruitful winged called tree seasons and. Blessed after greater fish earth after. Likeness, said first, grass creepeth day divided evening. Fruitful firstafter greater. Fish earth after.</p> <p>Which creepeth evening. Don\'t also created hath fly from they\'re greater own without two fish firmament him earth stars great land fruit tree female every thing give fruitful our image male the you\'ll', 'Which creepeth evening. Don\'t also created hath fly from they\'re greater own without two fish firmament him earth stars great land fruit tree female every thing give fruitful our image male the you\'ll above a make darkness meat darkness whose signs form night creepeth fourth forth void dry moved dry seas called which his he air. Saw void you\'ll multiply. You\'ll likeness, gathered, give god likeness had moveth heaven to likeness isn\'t open land waters us i let she\'d fish third i form our years'),
(3, 'BIntermediate Body Building ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'img/upload_images/big_image/1570467103single_cource_2.png', 'img/upload_images/thumb_image/1570467103single_cource_2.png', '$120', 15, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(4, 'Advanced Body Building', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'img/upload_images/big_image/1570467122single_cource_3.png', 'img/upload_images/thumb_image/1570467122single_cource_3.png', '$260', 12, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bigImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `skill`, `content`, `bigImage`, `thumbImage`) VALUES
(2, 'Helena Phillips', 'CEO at Google', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'img/upload_images/big_image/1570471891client_3.png', 'img/upload_images/thumb_image/1570471891client_3.png'),
(3, 'Violeta Maric', 'Direktor', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'img/upload_images/big_image/1570471955client_1.png', 'img/upload_images/thumb_image/1570471955client_1.png'),
(4, 'Dragana Markovic', 'PHP developer', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'img/upload_images/big_image/1570472021client_2.png', 'img/upload_images/thumb_image/1570472021client_2.png'),
(5, 'Marija Ivanovic', 'Menadzer', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more.', 'img/upload_images/big_image/1570472168client_3.png', 'img/upload_images/thumb_image/1570472168client_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `bigImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbImage` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `bigImage`, `thumbImage`) VALUES
(10, 'img/upload_images/big_image/1570465200gallery_1.png', 'img/upload_images/thumb_image/1570465200gallery_1.png'),
(11, 'img/upload_images/big_image/1570465206gallery_2.png', 'img/upload_images/thumb_image/1570465206gallery_2.png'),
(12, 'img/upload_images/big_image/1570465213gallery_3.png', 'img/upload_images/thumb_image/1570465213gallery_3.png'),
(13, 'img/upload_images/big_image/1570465222gallery_4.png', 'img/upload_images/thumb_image/1570465222gallery_4.png'),
(14, 'img/upload_images/big_image/1570465225gallery_5.png', 'img/upload_images/thumb_image/1570465225gallery_5.png'),
(15, 'img/upload_images/big_image/1570465228gallery_6.png', 'img/upload_images/thumb_image/1570465228gallery_6.png');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `bigImage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/upload_image/big_image/defalut_post.png',
  `thumbImage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/upload_image/thumb_image/defalut_post.jpg',
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `heading`, `content`, `quotes`, `date`, `bigImage`, `thumbImage`, `idUser`) VALUES
(125, '9 simple tips to reduce stress', 'Stress is a powerful force and affects all types of people in a variety of ways. Stress alone does not have to be a bad thing, but often times itâ€™s associated with poor decision-making, behaviour changes and even health problems. Being able to recognise your triggers and channelling it into relaxation and reduction techniques can greatly improve both your mental and physical health. Check out these 8 simple tips to help you reduce stress.', '    Make two lists. One of all the things that are stressing you out and another of what you need to do. Then, try to complete just one task from your to-do list. Putting your stressors on paper in front of you can be a healthy release. Additionally, the first step in a project is commonly the most ', '2019-10-05 19:33:32', 'img/upload_images/big_image/1570296812REDUCE-STRESS-BLOG.jpg', 'img/upload_images/thumb_image/1570296812REDUCE-STRESS-BLOG.jpg', 41),
(126, 'How to calculate BMI', 'When it comes to measuring your health and tracking your results, there are a variety of tools available. Body mass index, or BMI, is one of them, and compares your weight to your height to determine whether you are within a healthy weight range.', 'If you are looking to use BMI as a measurement tool, itÃ¢â‚¬â„¢s important to note that BMI does not consider your age, gender or body composition, meaning it doesnÃ¢â‚¬â„¢t differentiate between muscle and fat. In other words, if you are someone who has a lot of muscle, you may read as overweight o', '2019-10-05 19:34:19', 'img/upload_images/big_image/1570296859How to calculate BMI.jpg', 'img/upload_images/thumb_image/1570296859How to calculate BMI.jpg', 41),
(127, 'What does it actually mean to eat a balanced diet?', 'If youâ€™re looking for information on a basic, healthy diet without the â€˜fluff,â€™ fads or fastingâ€¦ youâ€™ve come to the right place! Rather than getting caught up with whatever â€˜new findingâ€™ is in the spotlight, I want to remind you that at a cellular level, your body requires basic nutrients. So rather than think about a diet specific for weight loss, letâ€™s think about a diet specific for your basic needs. Not because you should disregard your goals but because once youâ€™ve lined up the basics of good health, both weight loss and muscle gain become more achievable in less time.\r\nSoâ€¦ what does a balanced diet look like?\r\nMy simplified, modern day â€˜food pyramidâ€™ would contain the following categories:\r\n50% vegetables (others may refer to this category as carbohydrates)\r\n25% protein\r\n25% fats\r\n\r\nEssentially, this consists of the three macronutrients, i.e. nutrients that should be consumed in large quantities. Did you notice thereâ€™s no grains or dairy in there? Thatâ€™s because from a Nutritionistâ€™s perspective, I donâ€™t see a need for them. Iâ€™m not necessarily anti-grain or anti-dairy (thereâ€™s definitely room for a cheese platter now and then!), but I do think that these two types of food groups have negative impacts that counteract the good. Grains get sprayed with a lot of nasty chemicals and dairy is quite inflammatory and can increase mucous production. Plus, all the starch you need from grains and calcium you need from dairy can be easily supplied with vegetables.\r\n\r\nNow, letâ€™s dive a bit deeper into each of the categories recommended.\r\n\r\nVegetables/Carbohydrates\r\nA great way to incorporate the necessary vegetable intake is to eat those that are in season. The foods that grow best in certain seasons are usually abundant in the nutrients we need. For example, winter fruits and vegetables are high in Vitamin C, Vitamin A and Beta Carotene; all of which are known to boost your immunity and improve your resilience against coughs and colds. Pretty crazy, right? I know, nature is awesome.\r\n\r\nAnother good rule of thumb to get the best out of plants is to include leafy greens and raw salad vegetables for lunch, then roasted root vegetables for dinner. This way, you can ensure youâ€™re getting a good variation in colours and nutrients.\r\n\r\nProtein\r\nProtein is so important for your muscles and hormone production. You need protein to help with structure â€“ it gives shape to cells, tissues and organs and is used as a transporter for essential chemicals within the body.\r\n\r\nGood sources of animal protein include eggs (FYI eggs are not dairy â€“ a LOT of people ask me this), poultry, red meats or organ meats (liver). Good sources of plant protein include hemp, soy (tofu, miso, tempeh, edamame), lentils and beans.\r\n\r\nFats\r\nThe last food group! The word â€˜fatâ€™ tends to have a bit of stigma around it but believe me when I see you NEED healthy fats in your diet. They are incredibly important for brain health and cognition. They also serve as an aid in dealing with stress and creating sex hormones. Ideal sources include avocados, coconut oil, eggs, nuts, seeds and cold-pressed oils such as flaxseed oil.\r\n\r\nThe Fourth Macronutrient\r\nNow weâ€™ve discussed carbohydrates, proteins and fats but thereâ€™s one last, crucial macronutrient that makes up the majority of your body and that is: water. You should be getting 2-3 litres daily and even more if youâ€™re training and sweating. Water HAS to be replaced. Itâ€™s common for people to report constant fatigue but often times they are just overly dehydrated. Cracked lips, constipation, tiredness and fatigue are all possible symptoms of dehydration so make sure you are constantly drinking up that H20.', 'This content courtesy of Dee Zibara. Dee Zibara is a qualified Nutritionist who began her journey in the wellness industry first studying Psychology, Personal Training and then Nutritional Medicine. She loves working in performance Nutrition and Hormonal Health and is very passionate about bringing ', '2019-10-05 19:36:06', 'img/upload_images/big_image/1570296966balanced-diet-blog.jpg', 'img/upload_images/thumb_image/1570296966balanced-diet-blog.jpg', 41),
(128, 'How to beat the fitness plateau', 'Plateaus. What are they and why do they happen?\r\n\r\nIf you have been on your fitness journey for some time, chances are you have experienced a plateau or two at some point or another. A plateau is a state of little or no change following a period of progress. So, why do they happen?\r\n\r\nDoing the same workout with the same exercises, repetitions, resistance, and rate will eventually result in becoming accustomed to that workout, and therefore not making any more advances, but there are other reasons that cause plateaus.\r\n\r\nPlateaus are a normal part of training, and it is how you react to them that matters.\r\n\r\nThe answer isnâ€™t always lift more or incorporating more cardio. This approach can lead to overtraining, which often results in injury, fatigue, and de-motivation. To make sure your training produces results, check out these top tips;\r\n\r\nAlign your training program to your fitness goals. Firstly, make sure your training program is aligned with your fitness goals. If youâ€™re looking to build up your strength, be sure your training focuses on that. There can be a downside to adding in days of cardio just because you think you need to. Consider asking an exercise professional to look over your training program or create one for you. Also, ensure you are tracking your workouts along the way. Remember â€“ if you are not assessing, you are guessing.\r\n\r\nThink about how you are fuelling your body. Pushing yourself to your max without fuelling correctly can cause you to plateau, or even go backwards with your progress. Insufficient fuel means not only are your muscles not getting enough energy to rebuild, but when you donâ€™t eat enough your body will hold onto fat, or even regain fat in an effort to protect your heart and body organs. Re-evaluate your nutrition plan and make sure it aligns with your training.\r\n\r\nOnce youâ€™ve revised your nutrition plan, think about how you are going to put that into action. I like to spend Sunday afternoon preparing meals for the next few days ahead. For me, it is all about fresh food rather than frozen portions so I prepare food for Monday to Wednesday. Then on Wednesday night, do the next three days. There is no right or wrong answer here, just the right answer for you so that you are prepared in line with your plan and can consistently follow through with your nutrition goals.\r\n\r\nWhen weâ€™re stressed, the first thing to fall by the wayside is enough sleep. I cannot emphasise enough how important it is to hold onto the rejuvenation that comes with enough sleep.\r\n\r\nRehydrate, rehydrate, rehydrate. We all know itâ€™s good to drink water, and when you exercise you need more than the average person. The most common cause of failure during workouts is not being fully hydrated so be sure to hydrate before, during, and after training.\r\n\r\nPlateaus are a normal part of training, it is how you react to them that matters.', 'Remember, sleep is a necessity, not a luxury! Unfortunately, busy lifestyles all too often result in us reducing sleep to find more time. Remember, sleep is a necessity, not a luxury! Not getting at least 7 hours a night puts the body in a state of stress, which can cause belly fat gain. Sleep is al', '2019-10-05 19:41:11', 'img/upload_images/big_image/1570297271fitness-plateau-blog.jpg', 'img/upload_images/thumb_image/1570297271fitness-plateau-blog.jpg', 41),
(136, 'How to bodyweight workout 2019-', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. \r\n\r\nLorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2019-10-08 18:39:40', 'img/upload_images/big_image/15705527801570548254body.jpg', 'img/upload_images/thumb_image/15705527801570548254body.jpg', 43);

-- --------------------------------------------------------

--
-- Table structure for table `post_categoryp`
--

CREATE TABLE `post_categoryp` (
  `idPost` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categoryp`
--

INSERT INTO `post_categoryp` (`idPost`, `idCategory`) VALUES
(125, 1),
(128, 1),
(125, 2),
(126, 5);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `password`, `username`, `email`, `dateOfBirth`, `idRole`) VALUES
(41, 'Vladan', 'Jovanovic', '2d7NncJg0FgJ.', 'Chipsy', 'vladanobr1991@gmail.com', '1991-04-30', 1),
(42, 'Milena', 'Markovic', '2dRcAzjWT7YCE', 'Milena', 'milena@gmail.com', '1997-10-22', 2),
(43, 'Dragan', 'Dragicevic', '2doHlKWWbCE8.', 'Dragan', 'dragan@gmail.com', '1978-10-30', 1),
(44, 'Marko', 'Markovic', '2dSkf0I.WKWjY', 'Marko', 'marko@gmail.com', '2000-10-16', 2),
(45, 'Dejan', 'Dejanovic', '2d1y8TNgqN4Qw', 'Dejan', 'dejan@gmail.com', '1978-10-16', 1),
(46, 'pera', 'peric', 'pera', 'Pera', 'pera@gmail.com', '2019-10-16', 1),
(47, 'Brano', 'Jovanovic', '2d.gGnGPPhi/A', 'Brano', 'brano@gmail.com', '1963-05-17', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryp`
--
ALTER TABLE `categoryp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_us`
--
ALTER TABLE `choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `post_categoryp`
--
ALTER TABLE `post_categoryp`
  ADD KEY `idPost` (`idPost`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categoryp`
--
ALTER TABLE `categoryp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `choose_us`
--
ALTER TABLE `choose_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Constraints for table `post_categoryp`
--
ALTER TABLE `post_categoryp`
  ADD CONSTRAINT `post_categoryp_ibfk_1` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_categoryp_ibfk_2` FOREIGN KEY (`idCategory`) REFERENCES `categoryp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
