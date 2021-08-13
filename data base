-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 11:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `altras`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', '123'),
(2, 'zaki', 'zaki@yahoo.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `approvedans`
--

CREATE TABLE `approvedans` (
  `id` int(11) NOT NULL,
  `approved` varchar(30000) DEFAULT NULL,
  `questid` int(11) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedans`
--

INSERT INTO `approvedans` (`id`, `approved`, `questid`, `adminid`) VALUES
(4, 'The curriculum development process systematically organizes what will be taught, who will be taught, and how it will be taught. Each component affects and interacts with other components. For example, what will be taught is affected by who is being taught (e.g., their stage of development in age, maturity, and education).', 15, 1),
(5, 'The field of programming is a very large field with many specializations, but each specialization can increase or decrease the demand for it according to the changes in the labor market. Some people choose specialization on the basis of the most required specialization, but after a while the labor market changes and the specialization becomes not required after that.', 16, 1),
(7, 'Web development is the process associated with developing websites for the Internet (World Wide Web) or an intranet (a private network). This process includes web design, web content development, client-side/server-side scripting, and network security configuration, among other tasks.  Mobile app development is the work involved in developing a mobile app for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones.', 18, 1),
(8, 'It Guarantees You a Job We’re living in the era of technology, and technological growth is nowhere near stopping. As the use of technolo cangical devices is growing every year, there will always be a high demand for programmers. The Bureau of Labor Statistics stated that within this decade, computer programming jobs would mostly be available to those outside the United States. This due to the fact that companies are considering employing people all around the world since they would pay them lower wages.', 19, 1),
(14, '??????? ???????????????????', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` mediumtext DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `hours_no` int(11) NOT NULL,
  `article_no` int(11) NOT NULL,
  `instructorid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `desc`, `price`, `image`, `hours_no`, `article_no`, `instructorid`) VALUES
(20, 'Network Diploma', 'مفيش شركه او مؤسسه او حتى محل صغير الا وبتحتاج مهندس شبكات مهندس الشبكات واحده من اكتر الوظائف المطلوبة حاليا 🌐 بنقدملك دبلومة it كاملة بتاهلك لسوق العمل وبعدها شهرين تدريب في الشركة بشهادة تدريب عملي ❤ 🔷 هتدرس في الدبلومة 5 تراك : 1️⃣CCNA (R&S)‏ هنتعلم معاك  من اول ايه هي اجهزه الشبكات و طريقه التوصيل و تكوين الشبكه وازاي تقدر تقسمهم و تدخل علي الشبكه من بعد  بعدين ازاي تعرف تديرهم و تعمل serves تخدم علي الشبكه وكمان تربط الشبكه بتاعتك باكتر من فرع. 2️⃣CCNP (R&S) هنا هنعرف ندير الشبكه بشكل احترافي بعد ما تعلمنا اساسيات الشبكات في ال CCNA ونعلي من شغل ال security ونزود quality ال service بتاعت الشبكه بتاعتنا ونتكلم عن تكنولوجيا جديده زي ال sdn و شغل ال automation 3️⃣ BGP ودا البروتوكول الوحيد المستخدم لأداره الإنترنت ودا بنعرف فيه اكبر شركات الISP شغاله ازاي و كيفيه ربط اكتر من  ‏autonomous system ببعض ونعرف انواع autonomous system وتعرف الإنترنت بيتنقل بين الدول ازاي و ازاي الشركات ال ISP بتدي نت للشركات وكمان ال metric وازاي تحسبه  4️⃣ MPLS و دا هنتقن فيه كفيه تحسين فكره ربط الفروع ببعض من غير ما تعمل  load و delay', 5000, 'WhatsApp Image 2021-07-25 at 8.40.59 PM.jpeg', 150, 64, 4),
(21, 'Data Science Diploma ', 'ان عارف ان حجم الداتا من 2009 للنهاردة اتضاعف 10 مرات ومتوقع انها توصل لخمسين ضعف في السنين الجايه 🚀 الداتا ساينس اكتر جزء من ال AI مطلوب في مصر والعالم , اغلب الشركات في بتحتاج data scientist عشان تقدر تستثمر في الداتا بتاعتها  بنقدملك دبلومة كاملة تقدر تتخرج منها تشتغل : data scientist- data analyst- data engineer 🔷 هتدرس في الدبلومة 4 تراك : 1️⃣ mathematics for data science  هندرس فيه الاساس الاهم زي Statistics و Probability وlinear algebra وكمان هنوصل لمرحله اعلى زي Calculus    2️⃣ Python for data science : هندرس فيه Basics برمجة بال Python وبعدها OOP وبعدهم هناخد Data Structure و Algorithms وازاي تقدر توظف ال Python  في الداتا ساينس.  3️⃣ Data Analysis: هنعرف ازاي نحلل الداتا ونستخرج منها المعلومات المطلوبة , الي تقدر تساعد البيزنس او الشركة بتاعتك انها تاخد قرر مفيد لمستقبلها , ونعرف اهم  patterns الي موجودة في الداتا وربطهم بمجالات زي ال machine & deep learning وهنعرف ازاي نعرض الداتا ونعرض ال data schema  4️⃣ Data Science business tools : هنتعرف على اهم ال tools الخاصة بالداتا في البيزنس وازاي نربطها بالسيستم', 4500, 'WhatsApp Image 2021-07-25 at 8.41.39 PM.jpeg', 90, 60, 2),
(22, 'Android Diploma', 'أكبر محتوي لدبلومة أندرويد في مصر + شهرين تدريب لكل الطلاب بعد الدبلومة مباشرة في شركات  ال Mobile Application هو التخصص الأكثر طلباً حالياً في مصر ومتاح ليه شغل سواء في شركات او كـ Freelance او شغل ذاتي 📱  الدبلومة فيها شرح لكل المواضيع الـ Advanced الي بتحتاجها كـ Junior Android Developer + تدريب على شغل الشركات بشكل كامل لمده شهرين بعد الدبلومة ⏲  📣 الدبلومة بتحتوي على شرح للـ Data Structures و Algorithms و Design Patterns عشان تتعلم مجالك ويكون عندك الأساس الصحيح كمان   📣 خلال الدبلومة هتعمل 6 Projects كامله تضيفهم للـ CV غير الـ Tasks اللي بتتبع كل سيشن ومشروع التخرج في النهاية ', 5000, 'WhatsApp Image 2021-07-25 at 8.43.10 PM.jpeg', 120, 70, 2),
(23, 'AI Diploma', 'الوظيفة الاكثر طلبا والاغلى اجرا في العالم 🌐 4 شهور دبلومة + 2 شهر تدريب بشهاده معتمده 😎  انت عارف ان .. ‼ متوسط دخل الـعاملين في مجال  الAI بيوصل لـ 146 الف دولار سنوياً وانه يتوقع ان 75% من تطبيقات الشركات التجارية ستستخدم الذكاء الاصطناعي.   🔷 بنقدملك دبلومة كامل في مجال ال AI هتدرس فيها 4 تراك : 1️⃣ Python for AI : هندرس فيه Basics برمجة وبعدها OOP وبعدهم هناخد Data Structure و Algorithms عشان يكون عندك اساس برمجي كويس جدا في الاول. 🔝  2️⃣ Data Science : هندرس فيه الاساس الاهم زي Statistics و Probability و Calculus وكمان هنوصل لمرحله اعلى وندرس حجات زي Image Processing و Audio Analysis 🔊  3️⃣ Machine Learning : هنتعلم ازاى نخلى ال machine بتاعتنا تتدرب على المشكلة وتساعدنا فى عملية ال decision making و ال problem solving و نعرف ايه هى المشاكل ال AI بيعرف يحلها زى ال classification وال regression وال clustering🔥  4️⃣ Deep learning : هنبدا نعرف مفهوم  ال neural networks وازاى بنحل مشاكل ال machine learning مش بيقدر يحلها زى انه ازاى يقدر يتعرف على الأشخاص من خلال الصور وازاى يبدأ استخدمه فى ال analysis على الداتا الكبيرة وازاى بقدر من خلاله أعمل generation ل solutions احسن بكتير من اللى موجودة ، وكمان هنعرف ازاى نبنى architecture صح للشبكات العصبية 📝  📣 خلال الدبلومة هتعمل 10 Projects كامله بداتا حقيقه عشان تقدر تضيفهم للـ CV زي : Cancer detection - Multi user Chatbot - Image generator using GANs - face rocognition - Music Recommendation ❤الوظيفة الاكثر طلبا والاغلى اجرا في العالم 🌐 4 شهور دبلومة + 2 شهر تدريب بشهاده معتمده 😎  انت عارف ان .. ‼ متوسط دخل الـعاملين في مجال  الAI بيوصل لـ 146 الف دولار سنوياً وانه يتوقع ان 75% من تطبيقات الشركات التجارية ستستخدم الذكاء الاصطناعي.   🔷 بنقدملك دبلومة كامل في مجال ال AI هتدرس فيها 4 تراك : 1️⃣ Python for AI : هندرس فيه Basics برمجة وبعدها OOP وبعدهم هناخد Data Structure و Algorithms عشان يكون عندك اساس برمجي كويس جدا في الاول. 🔝  2️⃣ Data Science : هندرس فيه الاساس الاهم زي Statistics و Probability و Calculus وكمان هنوصل لمرحله اعلى وندرس حجات زي Image Processing و Audio Analysis 🔊  3️⃣ Machine Learning : هنتعلم ازاى نخلى ال machine بتاعتنا تتدرب على المشكلة وتساعدنا فى عملية ال decision making و ال problem solving و نعرف ايه هى المشاكل ال AI بيعرف يحلها زى ال classification وال regression وال clustering🔥  4️⃣ Deep learning : هنبدا نعرف مفهوم  ال neural networks وازاى بنحل مشاكل ال machine learning مش بيقدر يحلها زى انه ازاى يقدر يتعرف على الأشخاص من خلال الصور وازاى يبدأ استخدمه فى ال analysis على الداتا الكبيرة وازاى بقدر من خلاله أعمل generation ل solutions احسن بكتير من اللى موجودة ، وكمان هنعرف ازاى نبنى architecture صح للشبكات العصبية 📝  📣 خلال الدبلومة هتعمل 10 Projects كامله بداتا حقيقه عشان تقدر تضيفهم للـ CV زي : Cancer detection - Multi user Chatbot - Image generator using GANs - face rocognition - Music Recommendation ❤', 5000, 'ai.jpeg', 120, 80, 2),
(24, 'Flutter', 'ويب + اندرويد + IOS ) + شهرين تدريب بشهادة معتمده = دبلومة ال Flutter ❤️  كل واحد فينا ممكن يقضي عمره كله في دراسه مجال واحد من دول ويتقنه كويس بس ايه رأيك لو قولتلك انك ممكن تتعلمهم كلهم مره واحدة ؟؟ 🤔  سمعت عن Flutter قبل كدا ؟ فلاتر هي framework من جوجل حديث , وتعتبر cross platform يعني انت بتكتب كود واحد فقط بتطلع ال 3 platform دول واكتر 🔥  فلاتر هي حديث السوق كله دلوقتي حرفيا والطلب عليها بيزداد كل يوم عن الي قبله وخصوصا انها جديده فمفيش خبره كبيره فيها لسا فكل الناس عندهم فرصه 🌐  📣 الدبلومة بتحتوي على شرح للـ Data Structures و Algorithms و Design Patterns عشان تتعلم مجالك ويكون عندك الأساس الصحيح كمان 👌  📣 خلال الدبلومة هتعمل 6 Projects كامله تضيفهم للـ CV غير الـ Tasks اللي بتتبع كل سيشن ومشروع التخرج في النهاية 💪🏻', 2500, 'flutter.jpeg', 120, 80, 2),
(27, 'FullStack Diploma', 'Full Stack web contains two sections : Frontend & Backend. Frontend contains HTML,Css and Javascript. Backend contains PHP, SQL and Laravel.', 3000, '1.jpg', 60, 50, 6);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback` mediumtext NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `instname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `instname`, `email`, `phone`, `description`) VALUES
(2, 'mostafa', 'mostafa@yahoo.com', 1152222585, 'web developer'),
(4, 'ahmed', 'ahmed@yahoo.com', 1525486695, 'web developer'),
(5, 'kareem ali', 'kareem@yahoo.com', 123548879, 'front end developer'),
(6, 'kareem ahmed', 'kareem@yahoo.com', 123456789, 'mobile application developer');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `title` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `content`, `title`, `admin_id`, `image`) VALUES
(8, ' كلنا سمعنا عن التغيرات الاخيره الي سيسكو غيرتها في مناهجها !\r\nتفتكر هم ليه عملو كدا وايه السبب لدا ؟ 🤔\r\nالعالم دلوقتي فعليا في ثورة اسمها تكنولوجيا المعلومات كل حاجه انت ممكن تتخيلها بقت مربوطه بسيرفر وكلاود على النت  بيتحكم في حياتك كلها 🔥\r\nوعشان الاتصال بالبرامج والداتا بيز بقا ليه شكل جديد لان الاعتماد الاكبر في العالم دلوقتي على الموبايل ابلكيشن 📲   ', '...هنراستر معاك الراوتر', 1, 'WhatsApp Image 2021-07-25 at 10.11.16 PM.jpeg'),
(9, ' بنفكركوا ان ميعاد الورشة الساعة ٤ ان شاء الله النهاردة\r\nالناس اللي اتقبلت واللي بعتنالهم رسائل يشرفونا في المكان\r\nوالناس اللي لسه موصلهمش تأكيد ينتظرونا في مواعيد تانية وهنبعتلهم ان شاء الله عشان يحضروا الورشة ، منشنوا لاصحابكوا عشان هنفتح الفورم تاني ، بالتوفيق..    ', 'IBM Cloud', 1, 'WhatsApp Image 2021-07-25 at 10.13.20 PM.jpeg'),
(10, ' إعلان هام : \r\nفي خلال الأحداث الحالية من انتشار فيروس الكورونا..\r\nولأننا دايما نحرص علي صحة الفانز وطلابنا ولان سلامة الجميع هي اهم شئ \r\nقررنا نحن الآتي :\r\n1- إيقاف جميع كورساتنا الاوفلاين في المكان\r\n2- تحويل كل كورساتنا الحالية إلي اونلاين خلال أسبوعين بالظبط من النهاردة\r\n3- سنقوم بتخفيض وتوفير منصات تعلم عن بعد مساهمة منا في الحد من انتشار الفيروس ', 'Importnant News', 1, 'WhatsApp Image 2021-07-25 at 10.15.54 PM.jpeg'),
(11, ' Hurry up 🔥\r\n\r\nبعد 3 ايفنتات ناجحين في ال digital marketing المعتمد من جوجل ❤\r\n\r\n قررنا نفتح التسجيل تاني لايفنت جديد والعدد محدود 🔥\r\n\r\nالايفنت هيكون بكرة الأربعاء 5/2\r\n\r\n🔵 الايفنت هيكون في مركز @Ebda3  هيكون في شهاده معتمده من جوجل بعد الايفنت 😉❤\r\n\r\n⛔ العدد المره دي محدود جدا وهنقفل الفورم كمان ساعتين بالظبط ونبلغك بالتاكيد⭐', 'مهارات من جوجل', 1, 'WhatsApp Image 2021-07-25 at 10.14.06 PM.jpeg'),
(12, ' مهارات من فيسبوك وشهادة معتمدة مجاناً!! \r\n\r\nزي ما كلنا سمعنا عن مهارات من جوجل والشهادة المعتمدة\r\n\r\nجايبينلكم النهاردة مفاجأة من فيسبوك نفسها فـ لو لقيناكم مهتمين بالموضوع في البوست ده علي الكومنتات هنزل كل التفاصيل ان شاء الله , خلينا نشوف رأيكم وكام واحد مهتم  ⁦❤️⁩', 'مهارات من فيسبوك', 1, 'WhatsApp Image 2021-07-25 at 10.14.55 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `studentid` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `studentid`, `is_approved`) VALUES
(15, 'How is our programming curriculum being developed?', 6, 1),
(16, 'Where do I start learning programming?', 6, 1),
(18, 'What is better Web programming or mobile programming?', 6, 1),
(19, 'Why are we learning programming?\r\n', 6, 1),
(35, 'JFYJHVJHVJHVJHV', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `linkedin` text DEFAULT NULL,
  `github` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `password`, `phone`, `email`, `age`, `lastname`, `cpassword`, `linkedin`, `github`) VALUES
(4, ' Ahmed', '123', ' 01235879625', 'ahmed@yahoo.com', 20, ' mohamed', '25', '', ''),
(6, '  Ahmed', '123', '  5555', 'zaki@yahoo.com', 60, '  Mohamed', '123', 'ahmed@linkedin', 'ahmed50@github'),
(8, 'ali', '123456', '0123546849', 'ali@yahoo.com', 20, 'salah', '123456', NULL, NULL),
(10, 'yousef', '159357', '021547962', 'yousef@yahoo.com', 20, 'ahmed', '159357', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taken`
--

CREATE TABLE `taken` (
  `studentid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taken`
--

INSERT INTO `taken` (`studentid`, `courseid`) VALUES
(6, 20),
(6, 23),
(4, 22),
(4, 21),
(4, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approvedans`
--
ALTER TABLE `approvedans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questid` (`questid`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructorid` (`instructorid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentid` (`studentid`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentid` (`studentid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taken`
--
ALTER TABLE `taken`
  ADD KEY `courseid` (`courseid`),
  ADD KEY `studentid` (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approvedans`
--
ALTER TABLE `approvedans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvedans`
--
ALTER TABLE `approvedans`
  ADD CONSTRAINT `approvedans_ibfk_1` FOREIGN KEY (`questid`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `approvedans_ibfk_2` FOREIGN KEY (`adminid`) REFERENCES `admin` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`instructorid`) REFERENCES `instructor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taken`
--
ALTER TABLE `taken`
  ADD CONSTRAINT `taken_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `taken_ibfk_2` FOREIGN KEY (`studentid`) REFERENCES `student` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
