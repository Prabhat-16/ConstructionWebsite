-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2024 at 07:19 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

DROP TABLE IF EXISTS `blog_tbl`;
CREATE TABLE IF NOT EXISTS `blog_tbl` (
  `blog_id` int NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `blog_tags` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `blog_category` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `photos` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `blog_description` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`blog_id`, `blog_title`, `blog_tags`, `blog_category`, `photos`, `blog_description`, `added_date`, `user_id`) VALUES
(28, 'Technology and Negative Effects.', ' Disconnect from tech, connect with life.', 'Sports', 'pngtree-big-isolated-young-man-work-on-a-table-in-laptop-thinking-png-image_7258004.png', ' <p><span style=\"color: rgb(56, 62, 72); font-family: Manrope, sans-serif; font-size: 18px; text-align: justify;\">echnology is inevitable and even critical to our daily lives today and plays a vital role in our mental and physical existence in the world – it’s no longer “I think, therefore I am” but is “I digitize, therefore I am”.  While technology offers a new and unlimited medium for information and knowledge to our children and a border-free means of communication, the negative effects of technology cannot be overstated. Let’s see some of the most common dangers of technology use on the physical and mental health, education and social life of children and teenagers.</span><br></p>', '2023-08-16 06:39:48', 40),
(29, 'Our Family Story.', 'Family is strength.', 'Sports', 'maxresdefault.jpg', '<p style=\"border: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(55, 55, 55);\">&nbsp;heard so many stories of my grandfather’s exploits growing up that he became sort of a folk hero in the family. I’m grateful to be a part of a family of fantastic storytellers. In fact, every time my family is together we tell stories. We dig up our most precious, most hilarious and special memories and recount them together. The facts may change as we age and our memories fade, but we all work together to put the important moments of our lives into context and bond over our shared history.I never realized the true value of these stories until recently. Research has shown some surprising psychological benefits to family story telling, particularly with the younger generation, but the advantages last thro', '2023-08-16 06:46:14', 40),
(30, 'Healthy Habits Hub', 'Is the new standard.', 'Sports', '5-Pillars-Lifestyle-JKYog-NaturalCure.jpg', ' <p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgb(116, 116, 116); font-family: Arial; font-size: 14px;\"><em style=\"box-sizing: border-box;\">People tend to demonstrate a sedentary lifestyle nowadays.</em></p><p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgb(116, 116, 116); font-family: Arial; font-size: 14px;\"><em style=\"box-sizing: border-box;\">Most actors are into a healthy lifestyle in order to keep in attractive shape.</em></p><p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgb(116, 116, 116); font-family: Arial; font-size: 14px;\">What exactly is a lifestyle? How do you describe yours?</p><p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgb(116, 116, 116); font-family: Arial; font-size: 14px;\">The term of lifestyle was firstly introduced by Austrian psychologist named Alfred Adler in his book,&nbsp;<em style=\"box-sizing: border-box;\">The Case of Miss R.</em>&nbsp;(1929), revealing “a person’s basic character as established ', '2023-08-16 07:43:07', 40),
(31, 'Computer Graphics.', 'Making ideas come alive on the internet', 'Web Design', 'elements-web-design-opt-730x485.jpg', '<p><span style=\"color: rgb(55, 81, 116); font-family: Lato, sans-serif; font-size: 19px;\">Software reviews, inspiration, roundups and best practices put Web Design Ledger on the list. They have sections on typography and iconography, how to work in development environments and lists of tools that you want to make sure you’re familiar with.</span><span style=\"color: rgb(55, 81, 116); font-family: Lato, sans-serif; font-size: 19px;\">Fonts and freebies abound on Spoon Graphics, a web design blog that just feels right. Again, instead of providing the same-old resources that you can find anywhere, you can get</span><span style=\"color: rgb(55, 81, 116); font-family: Lato, sans-serif; font-size: 19px;\">&nbsp;font collections and other things you will actually use. There are also video tutorials for software like Illustrator and Photoshop.</span><span style=\"color: rgb(55, 81, 116); font-family: Lato, sans-serif; font-size: 19px;\">Medium has so much great curated content that it’s hard to find', '2023-08-16 07:52:25', 40),
(32, 'Joy the Baker.', 'For the love of delicious food.', 'Food', 'ZCCZKF2HGJ7BLJHVUDT7TPGZCE.jpg', '  <p style=\"box-sizing: border-box; overflow-wrap: break-word; border: 0px; font-size: 18px; margin-right: 0px; margin-bottom: 22px; margin-left: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; text-size-adjust: 100%; font-family: ubuntu, sans-serif; line-height: 32px; color: rgb(15, 15, 15);\"><span style=\"box-sizing: border-box; border: 0px; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; text-size-adjust: 100%;\">Green Kitchen Stories features healthy vegetarian recipes by the Swedish-based couple, David Frenkiel and Luise Vindahl. Luise describes herself as the hippie-health-minded one, while David considers himself a vegetarian, food stylist, and photographer.</span>David and Luise chose the name for their blog to represent their efforts to come up wi', '2023-08-16 08:02:08', 40),
(33, 'Adventure is a form of self care.', 'Travel’s in our blood', 'Travel', 'travel-istock.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I had been wanting to visit the Guanlan area for a while as there is an old print making Hakka village and an art village. However, my first visit to the area brought me to Guanlan Ancient Market, which I had never heard of before. This area had been under reconstruction for a few years and is now open. It was a short walk from Guanlan metro station on line 10. We came to the entrance to the main street. There was a nice wall sign saying ‘Yes, I like Longhua too’ surrounded by house numbers. Lots of people getting selfies there. I saw a dragon’s head costume behind a fence. It would have been nice to have seen it in action, but I don’t know if it had been used recently&nbsp;</span><br></p>', '2023-08-16 08:06:16', 40),
(34, 'a popular aesthetic expression', 'Fashion is art', 'Fashion', 'img_196767_designersxbrands_collage_bg.jpg', ' <p style=\"box-sizing: border-box; overflow-wrap: break-word; border: 0px; font-size: 18px; margin-right: 0px; margin-bottom: 22px; margin-left: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; text-size-adjust: 100%; font-family: ubuntu, sans-serif; line-height: 32px; color: rgb(15, 15, 15);\"><span style=\"box-sizing: border-box; border: 0px; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; text-size-adjust: 100%;\">Atlantic-Pacific creator Blair Eadie has been in the fashion industry for several years now. Having worked for companies such as Tory Burch and Gap, she has the insider’s experience in how the industry has evolved over the years. She started Atlantic-Pacific in 2010 to showcase her own fashion aesthetic, which she describes as “east-coast-meets-', '2023-08-16 08:08:46', 40),
(35, 'gym', 'Move Your Body, Shape Your Future', 'Fittness', 'Supplement-Fitness.jpg', '<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(1, 1, 1); font-family: Poppins, sans-serif; font-size: 18px;\">Today, more than ever, there is a renewed focus and awareness on health and fitness. The coronavirus pandemic has emphasized the need for daily exercise. As a result, people are looking for more information on their journey to good health. A proper fitness regime combined with healthy eating helps to maintain a healthy weight and support a strong immune system, both of which are beneficial in fighting infection.In this digital age, many people turn to the internet for guidance. Fitness blogs are a hugely popular source of information. As a fitness business owner, you can learn a thing or two from the way some of the best fitness blogs package their content and engage with the reader. In this article, we take a look at some key blogging statistics, what makes a successful fitness blog, and 12 fitness blogs you need to follow right now.&nbsp;</p>', '2023-08-16 08:11:19', 40),
(36, 'A headline', 'The news you need, not the fluff', 'News', 'download.jpg', ' <p><span style=\"color: rgb(51, 51, 51); font-family: Rubik, helvatica, Arial, sans-serif;\">Blogs test content Blogs test content Blogs test content Blogs test content Blogs test content Blogs test content Blogs test content Blogs test content Blogs test content Blogs</span><span style=\"color: rgb(51, 51, 51); font-family: Rubik, helvatica, Arial, sans-serif; font-size: 1rem;\">A refreshing account of the enduring dedication of a man who strove to awaken the social conscience of India.</span><br></p>', '2023-08-16 08:14:36', 40),
(37, 'Mishra', 'Hinduism is 330,000,000 ways to reach the divine.', 'Religious', 'slide_1.jpg', '<p><span style=\"color: rgb(68, 70, 66); font-family: Georgia, Utopia, &quot;Palatino Linotype&quot;, Palatino, serif; font-size: 24px;\">Aclay pyramid structure with four faces and a flat top used during&nbsp;</span><a href=\"http://www.hindu-blog.com/2009/08/onam-2009-thiruonam-in-kerala.html\" style=\"background: rgb(255, 255, 255); color: rgb(78, 156, 225); cursor: pointer; font-family: Georgia, Utopia, &quot;Palatino Linotype&quot;, Palatino, serif; font-size: 24px;\">Onam</a><span style=\"color: rgb(68, 70, 66); font-family: Georgia, Utopia, &quot;Palatino Linotype&quot;, Palatino, serif; font-size: 24px;\">&nbsp;celebrations symbolizes Thrikkakara Appan or Thrikakkarappan. This unique structure represents Vamana, an incarnation of Lord Vishnu. For some people, the pyramid represents both King Maveli and Vishnu. It is also referred as Onathappan. Thrikkakara Appan is the presiding deity in the famous Thrikkakara temple in Ernakulam District of Kerala and is closely associated with the On', '2023-08-16 08:18:29', 40),
(38, 'Member for India', 'Make love, not war', 'political', 'Political-Leaders.png', '<p><span style=\"color: rgb(26, 26, 26); font-family: Montserrat, Arial, Helvetica, sans-serif; font-size: 14px; letter-spacing: -0.2px;\">Prime Minister Narendra Modi on Thursday solidified his position in shaping the narrative leading up to the 2024 Lok Sabha elections by securing a resounding victory in a no-confidence motion brought forth by the Opposition’s…</span><span style=\"color: rgb(26, 26, 26); font-family: Montserrat, Arial, Helvetica, sans-serif; font-size: 14px; letter-spacing: -0.2px;\">A parliamentary debate stretching for three days of Parliament and with a very wide focus is bound to have its ridiculous moments. For reasons that aren’t always clear, Congress stalwart Rahul Gandhi has made it…</span><span style=\"color: rgb(26, 26, 26); font-family: Montserrat, Arial, Helvetica, sans-serif; font-size: 14px; letter-spacing: -0.2px;\">India has ambitious economic growth aspirations, aiming to become the third largest economy by 2027, and a developed one by 2047. We are also s', '2023-08-16 08:22:13', 40);

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

DROP TABLE IF EXISTS `client_tbl`;
CREATE TABLE IF NOT EXISTS `client_tbl` (
  `client_id` int NOT NULL AUTO_INCREMENT,
  `profile` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_tbl`
--

INSERT INTO `client_tbl` (`client_id`, `profile`, `added_date`) VALUES
(1, '1.png', '2023-10-05 05:16:59'),
(2, '2.png', '2023-10-05 05:16:59'),
(3, '3.png', '2023-10-05 05:16:59'),
(4, '4.png', '2023-10-05 05:16:59'),
(7, '5.png', '2023-10-05 05:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tbl`
--

DROP TABLE IF EXISTS `detail_tbl`;
CREATE TABLE IF NOT EXISTS `detail_tbl` (
  `detail_id` int NOT NULL AUTO_INCREMENT,
  `header_no` bigint NOT NULL,
  `footer_no` bigint NOT NULL,
  `detail_email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `detail_email2` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_tbl`
--

INSERT INTO `detail_tbl` (`detail_id`, `header_no`, `footer_no`, `detail_email`, `detail_email2`) VALUES
(22, 7412589630, 6325874912, 'cunst@gmail.com', 'support@info.com');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_tbl`
--

DROP TABLE IF EXISTS `enquiry_tbl`;
CREATE TABLE IF NOT EXISTS `enquiry_tbl` (
  `enquiry_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry_tbl`
--

INSERT INTO `enquiry_tbl` (`enquiry_id`, `name`, `email`, `subject`, `message`, `added_date`) VALUES
(1, 'Prabhat Mishra', 'mprabhat1607@gmail.com', 'Nice Web', 'Please make this kind of osm blogs.', '2023-10-05 04:49:21'),
(10, 'Prabhat Mishra', 'mprabhat1607@gmail.com', 's56u5e6u', 'ue56u5e7u76', '2023-10-05 04:49:21'),
(11, 'Deep Pandya', 'bkhbkik@gmail.com', 'fefqw', '4rqw4r34q', '2023-10-05 04:49:21'),
(12, 'Meet Panchal', 'iyuiytuytu@gmail.com', 't345t453t', 'fyukff', '2023-10-05 04:49:21'),
(13, 'Prabhat Mishra', 'mprabhat1607@gmail.com', 'Query', 'wefwefwee', '2023-10-05 04:49:21'),
(18, 'Prabhat Mishra', 'mprabhat1607@gmail.com', 'Query', 'This is a good website ', '2023-10-05 04:49:21'),
(19, 'Deep Pandya', 'deep@gmail.com', 's56u5e6u', '4efr24f4', '2023-10-05 04:49:21'),
(20, 'Meet Panchal', 'meet@gmail.com', 'Nice Web', 'fwefwefwffwrf', '2023-10-05 04:49:21'),
(25, 'minakshi', 'mink@gmail.com', 'Website', 'nice!', '2023-12-11 07:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `form_tbl`
--

DROP TABLE IF EXISTS `form_tbl`;
CREATE TABLE IF NOT EXISTS `form_tbl` (
  `form_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `last_Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `post_code` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `profile` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_tbl`
--

INSERT INTO `form_tbl` (`form_id`, `first_name`, `last_Name`, `email`, `gender`, `dob`, `username`, `password`, `street`, `city`, `state`, `post_code`, `country`, `profile`) VALUES
(47, 'Prabhat', 'Mishra', 'mprabhat@gmail.com', 'Male', '2003-07-16', 'tryon', '1230', 'Adajan', 'Surat', 'Gujarat', '395009', 'India', '10466877.jpg'),
(61, 'Minakshi', 'Barabde', 'mink@gmail.com', 'Female', '2000-10-23', 'mink', '7890', 'gug', 'surat', 'guj', '395002', 'india', 'surreal_art_2-wallpaper-1920x1080.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tbl`
--

DROP TABLE IF EXISTS `gallery_tbl`;
CREATE TABLE IF NOT EXISTS `gallery_tbl` (
  `gallery_id` int NOT NULL AUTO_INCREMENT,
  `service_id` int NOT NULL,
  `gallery` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_tbl`
--

INSERT INTO `gallery_tbl` (`gallery_id`, `service_id`, `gallery`, `added_date`) VALUES
(16, 38, 'servicepage.jpg', '2023-08-16 07:47:50'),
(23, 37, 'product-jpeg.jpg', '2023-08-16 08:22:56'),
(24, 41, 'industrial-construction-service.jpg', '2023-08-16 08:23:08'),
(26, 40, 'istockphoto-1345384816-612x612.jpg', '2023-08-21 07:30:01'),
(27, 39, 'istockphoto-857627420-612x612.jpg', '2023-08-21 07:30:29'),
(31, 36, 'civil-construction-services-1530505022-4044360.jpeg', '2023-10-04 06:34:55'),
(32, 38, 'image3.jpg', '2023-10-14 07:51:25'),
(33, 39, 'image2.jpg', '2023-10-14 07:51:42'),
(34, 37, 'image4.jpg', '2023-10-14 07:52:01'),
(35, 36, 'image1.jpg', '2023-10-14 07:52:15'),
(36, 41, '3.jpg', '2023-10-14 07:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

DROP TABLE IF EXISTS `product_tbl`;
CREATE TABLE IF NOT EXISTS `product_tbl` (
  `product_id` bigint NOT NULL AUTO_INCREMENT,
  `category_id` bigint NOT NULL,
  `unit_id` bigint NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` decimal(18,0) NOT NULL,
  `product_qty` decimal(18,0) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `category_id`, `unit_id`, `product_name`, `product_price`, `product_qty`) VALUES
(10, 7, 0, 'Animee', 500, 5),
(11, 6, 0, 'Masala', 80, 3),
(12, 5, 12, 'Crunch', 50, 1),
(13, 7, 6, 'GOJO', 250, 12),
(14, 8, 9, 'ORANGE', 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

DROP TABLE IF EXISTS `review_tbl`;
CREATE TABLE IF NOT EXISTS `review_tbl` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `profile` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `review` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_tbl`
--

INSERT INTO `review_tbl` (`review_id`, `name`, `profile`, `review`) VALUES
(6, 'Prabhat Mishra', 'd06ab4b11a2cdea21e7fb0086221235a.jpg', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con<br></p>'),
(9, 'Deep Pandya', 'HD wallpaper_ Sunset, Birds, 4K, Mood, Alone, Silhouette, Dark.jpg', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con<br></p>'),
(10, 'Meet Panchal', 'Political-Leaders.png', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con<br></p>'),
(11, 'Murtaza Motagam', '25.jpg', '<p>The Website is Very Good We Can&nbsp; Customize every thing in this..</p>');

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

DROP TABLE IF EXISTS `service_tbl`;
CREATE TABLE IF NOT EXISTS `service_tbl` (
  `service_id` int NOT NULL AUTO_INCREMENT,
  `service_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tag_line` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `profile` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`service_id`, `service_type`, `title`, `tag_line`, `profile`, `description`) VALUES
(36, 'Civil Construction ', 'Civil-Service', 'Unleashing the power of Civil Construction', 'civil-construction-services-1530505022-4044360.jpeg', '<p style=\"border: 0px; margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(68, 68, 68); font-family: Poppins, sans-serif;\"><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 18px;\">Civil construction services form the backbone of our infrastructure. These services are focused on designing, building, and maintaining public works like bridges, roads, and utility systems. They also include large-scale projects such as dams, railways, and airports.</span><br></p>'),
(37, 'House Construction ', 'Druva Data Resiliency Cloud.', 'Your virtual hard drive', 'product-jpeg.jpg', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 2rem; margin-left: 0px; line-height: 2.6rem; font-size: 18px; letter-spacing: 0.01em; font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; letter-spacing: normal;\">House construction services revolve around the building of residential homes. From single-family houses to large apartment complexes, these services cover all aspects of residential construction.</span><br></p>'),
(38, 'Building Construction ', 'chief Information Security Officer', 'Data privacy is a human right, and it belongs to you.', 'servicepage.jpg', '<p style=\"box-sizing: border-box; margin-bottom: 1rem; font-size: 1.15rem; line-height: 1.7; color: rgb(33, 37, 41); font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 18px;\">Building construction services cover commercial, industrial, and residential buildings. They encompass everything from the initial site preparation and foundation laying to the construction of the building and final finishing touches.</span><br></p>'),
(39, 'Residential Construction ', 'on-demand support, or ad-hoc support', 'We never leave you hanging - remote support is our thing', 'istockphoto-857627420-612x612.jpg', '<ul style=\"margin: 1.5rem 0px 1.5rem 1rem; padding: 0px; list-style: outside; color: rgb(82, 105, 127); font-family: Poppins, Poppins-Fallback, Verdana, sans-serif; font-size: medium;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px;\"><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 18px;\">Residential construction services specialize in creating spaces for people to live in. Whether it’s a single-family home, a duplex, or a high-rise apartment building, residential construction services work to build comfortable, safe, and durable homes.</span><br></p></li></ul>'),
(40, 'Commercial Construction ', '@gamil.com', 'Work and save with us.', 'istockphoto-1345384816-612x612.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 18px;\">Commercial construction services focus on the creation of business spaces, from office buildings and shopping centers to restaurants and hotels. These services often involve working closely with business owners to meet specific needs, such as aesthetics, functionality, and building codes.</span><br></p>'),
(41, 'Industrial Construction ', 'upgrating to see u ', 'watch to improve', 'industrial-construction-service.jpg', '<h3 style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; padding: 0px; border: 0px; outline-style: initial; outline-width: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; clear: none; line-height: 1.3; font-family: Assistant, sans-serif; font-weight: 600; font-size: 24px; color: rgb(17, 17, 17);\"><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 18px; font-weight: 400;\">Industrial construction services specialize in building structures for manufacturing and other industrial purposes. This can include factories, power plants, and chemical processing facilities. These projects often require specialized knowledge and skills due to their complexity and the stringent safety and regulatory standards they must meet.</span><br></h3>');

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

DROP TABLE IF EXISTS `slider_tbl`;
CREATE TABLE IF NOT EXISTS `slider_tbl` (
  `slider_id` int NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `semi_title` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `tag_1` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tag_2` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tag_3` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `profile` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`slider_id`, `slider_title`, `semi_title`, `tag_1`, `tag_2`, `tag_3`, `profile`, `added_date`) VALUES
(7, 'We Are Available For', 'Any Construction Work', 'RESIDENTIAL', 'COMMERCIAL', 'INDUSTRIAL', 'image1.jpg', '2023-08-21 07:00:50'),
(19, 'We Renovate', 'Your home With Heart', 'CIVIL', 'HOUSE', 'BUILDING', 'image3.jpg', '2023-10-14 07:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` bigint NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `category_code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_code`) VALUES
(1, 'PIZZA 123', 'PIZZA'),
(2, 'SANDWICH 456', 'SANDWICH 4'),
(4, 'BURGER', 'BURGER'),
(5, 'FRINKY 123', 'FRINKY'),
(6, 'DOSA', 'DOSA'),
(7, 'T-Shirt', 'ZARA'),
(8, 'JUICE', 'JUICE');

-- --------------------------------------------------------

--
-- Table structure for table `unit_tbl`
--

DROP TABLE IF EXISTS `unit_tbl`;
CREATE TABLE IF NOT EXISTS `unit_tbl` (
  `unit_id` bigint NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit_tbl`
--

INSERT INTO `unit_tbl` (`unit_id`, `unit_name`) VALUES
(6, 'PCS'),
(8, 'GRAM'),
(9, 'LTR'),
(10, 'MTR'),
(12, 'KG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
