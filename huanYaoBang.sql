-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2016-08-25 12:08:13
-- 服务器版本： 5.7.13
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huanYaoBang`
--

-- --------------------------------------------------------

--
-- 表的结构 `hyb_activity_receive_record`
--

CREATE TABLE `hyb_activity_receive_record` (
  `id` int(11) NOT NULL,
  `receive_open_id` varchar(50) NOT NULL,
  `activity_id` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='活动领取记录';

-- --------------------------------------------------------

--
-- 表的结构 `hyb_admin`
--

CREATE TABLE `hyb_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `register_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员';

--
-- 转存表中的数据 `hyb_admin`
--

INSERT INTO `hyb_admin` (`id`, `admin_name`, `admin_password`, `register_time`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1471941889);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_article`
--

CREATE TABLE `hyb_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `auther` varchar(255) NOT NULL,
  `digest` text NOT NULL COMMENT '摘要',
  `content` text NOT NULL,
  `read_number` int(11) NOT NULL DEFAULT '0',
  `logo_name` varchar(255) NOT NULL,
  `logo_file_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `tag_string` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章表';

--
-- 转存表中的数据 `hyb_article`
--

INSERT INTO `hyb_article` (`id`, `title`, `auther`, `digest`, `content`, `read_number`, `logo_name`, `logo_file_name`, `type`, `tag_string`, `create_time`, `update_time`) VALUES
(1, '标题1', '系统1234', '测试测试测试测试测试测试测试', '测试测试测试测试测试测试', 0, '14721102602011.jpg', '300001057318129078956430743_950.jpg', '1', 'NULL', 1472110260, 1472111408);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_department`
--

CREATE TABLE `hyb_department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='科室信息';

--
-- 转存表中的数据 `hyb_department`
--

INSERT INTO `hyb_department` (`id`, `name`, `create_time`, `update_time`) VALUES
(1, '普外科', 1471922149, 1471922149),
(2, '骨科', 1471922149, 1471922149),
(3, '发烧科', 1472011422, 1472011422),
(4, '五官科', 1472011513, 1472011513);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_department_detail`
--

CREATE TABLE `hyb_department_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='科室详情';

--
-- 转存表中的数据 `hyb_department_detail`
--

INSERT INTO `hyb_department_detail` (`id`, `name`, `create_time`, `update_time`) VALUES
(1, '胃肠', 1471922149, 1471922149),
(2, '肛肠科', 1471922149, 1471922149),
(3, '血管外科', 1471922149, 1471922149),
(4, '直肠癌', 1472017439, 1472017439),
(5, '五官科123', 1472019317, 1472019317),
(6, '五官科2223124', 1472102737, 1472102737);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_department_relation`
--

CREATE TABLE `hyb_department_relation` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `department_detail_id` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='科室关联表';

--
-- 转存表中的数据 `hyb_department_relation`
--

INSERT INTO `hyb_department_relation` (`id`, `department_id`, `department_detail_id`, `create_time`, `update_time`) VALUES
(1, 2, 1, 1471922149, 1471922149),
(2, 2, 2, 1471922149, 1471922149),
(3, 2, 4, 1472017439, 1472017439),
(4, 4, 5, 1472019317, 1472019317),
(5, 4, 6, 1472102737, 1472102737);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_doctor`
--

CREATE TABLE `hyb_doctor` (
  `id` int(11) NOT NULL,
  `openid` varchar(40) NOT NULL DEFAULT '0',
  `name` varchar(12) NOT NULL,
  `sex_id` int(1) NOT NULL,
  `hospital_name` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `department_relation_id` int(11) NOT NULL,
  `year_money` int(11) NOT NULL DEFAULT '0',
  `check_status` int(1) NOT NULL DEFAULT '1',
  `cover_pic_url` varchar(50) DEFAULT NULL,
  `cover_pic_url_file_name` varchar(50) DEFAULT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='医生表';

--
-- 转存表中的数据 `hyb_doctor`
--

INSERT INTO `hyb_doctor` (`id`, `openid`, `name`, `sex_id`, `hospital_name`, `phone`, `department_relation_id`, `year_money`, `check_status`, `cover_pic_url`, `cover_pic_url_file_name`, `create_time`, `update_time`) VALUES
(1, 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平1234', 1, '医院1234', '', 1, 12321312, 1, '', '', 1471923701, 1471923701),
(4, '0', '医生1234', 2, '静安区人民医院', '13524446831', 4, 0, 2, '14720208881952.jpg', '翟晓平－近期生活照.jpg', 1472019894, 1472020888),
(3, '0', '翟晓平', 1, '上海医院1234', '13524446830', 4, 0, 3, '14720195332998.jpg', '300001057318129078956430743_950.jpg', 1472019533, 1472020940);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_hospital`
--

CREATE TABLE `hyb_hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `province` varchar(11) NOT NULL,
  `city` varchar(11) NOT NULL,
  `area` varchar(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `hospital_type` int(1) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `introduce` text NOT NULL,
  `zs_name` varchar(255) NOT NULL COMMENT '证书名称',
  `zs_file_name` varchar(255) NOT NULL,
  `logo_name` varchar(255) NOT NULL COMMENT '封面图片',
  `logo_file_name` varchar(255) NOT NULL COMMENT 'logo原文件',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='医院';

--
-- 转存表中的数据 `hyb_hospital`
--

INSERT INTO `hyb_hospital` (`id`, `name`, `province`, `city`, `area`, `address`, `hospital_type`, `phone`, `introduce`, `zs_name`, `zs_file_name`, `logo_name`, `logo_file_name`, `create_time`, `update_time`) VALUES
(1, '上海中医医院', '上海', '上海市', '闸北', '西藏中路110号', 2, '021-123214', '测试啊测试啊测试啊测试啊测试啊测试啊测试啊', '14720941315400.jpg', '翟晓平－1寸电子版.jpg', '14720941311695.jpg', '300001057318129078956430743_950.jpg', 1471834770, 1472094131),
(2, '上海复旦大学附属医院1234', '上海', '上海市', NULL, '呼伦贝尔1321241', 3, '021-31232132314', '测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下测试一下', '14720937616638.jpg', '300001057318129078956430743_950.jpg', '14720932385239.jpg', '300001057318129078956430743_950.jpg', 1472093238, 1472094016);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_order`
--

CREATE TABLE `hyb_order` (
  `id` int(11) NOT NULL,
  `order_sn` varchar(30) NOT NULL,
  `open_id` varchar(50) NOT NULL,
  `name` varchar(5) NOT NULL,
  `hospital_name` varchar(20) NOT NULL,
  `operation_info` varchar(30) NOT NULL,
  `total_money` float NOT NULL DEFAULT '0',
  `remain_money` float NOT NULL DEFAULT '0',
  `service_time` int(11) NOT NULL,
  `sex_id` int(1) NOT NULL,
  `operation_time` int(11) NOT NULL,
  `buy_number` int(4) NOT NULL,
  `province` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `pay_status` int(1) NOT NULL,
  `order_status` int(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hyb_order`
--

INSERT INTO `hyb_order` (`id`, `order_sn`, `open_id`, `name`, `hospital_name`, `operation_info`, `total_money`, `remain_money`, `service_time`, `sex_id`, `operation_time`, `buy_number`, `province`, `city`, `area`, `address`, `phone`, `pay_status`, `order_status`, `create_time`, `update_time`) VALUES
(1, '2016081515492279572', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 2, 5, 1471247362, 1471247362),
(2, '2016081515492352515', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 4, 1471247363, 1471247363),
(3, '2016081515492498784', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 3, 4, 1471247364, 1471247364),
(4, '2016081515492457910', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 4, 1471247364, 1471247364),
(5, '2016081515492451375', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 2, 5, 1471247364, 1471247364),
(6, '2016081515492452015', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247364, 1471247364),
(7, '2016081515492430660', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247364, 1471247364),
(8, '2016081515492526383', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247365, 1471247365),
(9, '2016081515492568134', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247365, 1471247365),
(10, '2016081515492540004', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247365, 1471247365),
(11, '2016081515492556652', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247365, 1471247365),
(12, '2016081515492574589', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247365, 1471247365),
(13, '2016081515492649117', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 4, 1471247366, 1471247366),
(14, '2016081515492639360', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247366, 1471247366),
(15, '2016081515492680091', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247366, 1471247366),
(16, '2016081515492698839', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247366, 1471247366),
(17, '2016081515492689302', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247366, 1471247366),
(18, '2016081515492654560', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247366, 1471247366),
(19, '2016081515492757509', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1471247367, 1471247367),
(20, '2016081515565574998', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446350400, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 4, 1471247815, 1471247815),
(21, '2016082516520332979', 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '翟晓平', '上海1234', '眼耳鼻部手术', 540, 0, 1446307200, 1, 1427817600, 3, '上海', '上海', '闸北区', '1312313', '', 1, 1, 1472115123, 1472115123);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_refund_record`
--

CREATE TABLE `hyb_refund_record` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `refund_content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='退款备注纪录';

-- --------------------------------------------------------

--
-- 表的结构 `hyb_relation`
--

CREATE TABLE `hyb_relation` (
  `id` int(11) NOT NULL,
  `weixin_info_id` varchar(50) NOT NULL,
  `friend_info_id` varchar(50) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关系表';

-- --------------------------------------------------------

--
-- 表的结构 `hyb_type`
--

CREATE TABLE `hyb_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `belong_type` int(1) NOT NULL COMMENT '1:文章类型 2:文章标签'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='类型库';

--
-- 转存表中的数据 `hyb_type`
--

INSERT INTO `hyb_type` (`id`, `name`, `belong_type`) VALUES
(1, '文章类型1', 1),
(2, '文章内容1', 1),
(3, '文章内容1', 2),
(4, '文章内容3', 2),
(5, '文章内容4', 2),
(6, '文章内容5', 2),
(7, '文章内容77', 2),
(8, 'ccccc', 2);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_user_review`
--

CREATE TABLE `hyb_user_review` (
  `id` int(11) NOT NULL,
  `open_id` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `review_type` int(1) NOT NULL,
  `on_time_score` int(1) NOT NULL,
  `major_score` int(1) NOT NULL,
  `service_score` int(1) NOT NULL,
  `review_content` text NOT NULL,
  `total_score` float NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `review_object_type` int(1) NOT NULL,
  `up_list` text NOT NULL COMMENT '点赞数',
  `read_number` int(11) NOT NULL COMMENT '阅读数'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户评价表';

--
-- 转存表中的数据 `hyb_user_review`
--

INSERT INTO `hyb_user_review` (`id`, `open_id`, `order_id`, `review_type`, `on_time_score`, `major_score`, `service_score`, `review_content`, `total_score`, `create_time`, `update_time`, `reply_id`, `review_object_type`, `up_list`, `read_number`) VALUES
(3, 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', 1, 1, 3, 3, 4, '评价一下', 3.3, 1471836362, 1471836362, 0, 1, '', 0),
(2, 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', 1, 1, 3, 3, 4, '评价一下', 4, 1471836289, 1471836289, 0, 1, '["o6gycwNXTzGD17jxPj2jwwfbJSZQ"]', 5),
(4, 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', 1, 2, 3, 3, 4, '评价一下', 4, 1471836455, 1471836455, 2, 1, '', 5),
(5, 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', 1, 2, 3, 3, 4, '评价一下', 4, 1471836474, 1471836474, 4, 1, '', 5),
(6, 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', 1, 2, 3, 3, 4, '评价一下', 4, 1471836476, 1471836476, 2, 1, '', 5);

-- --------------------------------------------------------

--
-- 表的结构 `hyb_weixin_info`
--

CREATE TABLE `hyb_weixin_info` (
  `id` int(11) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `language` varchar(10) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `province` varchar(5) NOT NULL,
  `city` varchar(5) NOT NULL,
  `country` varchar(5) NOT NULL,
  `headimgurl` varchar(255) NOT NULL,
  `privilege` varchar(10) NOT NULL,
  `unionid` varchar(50) NOT NULL,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='微信信息表';

--
-- 转存表中的数据 `hyb_weixin_info`
--

INSERT INTO `hyb_weixin_info` (`id`, `openid`, `phone`, `nickname`, `language`, `sex`, `province`, `city`, `country`, `headimgurl`, `privilege`, `unionid`, `create_time`, `update_time`) VALUES
(1, 'o6gycwNXTzGD17jxPj2jwwfbJSZQ', '', 'Mr.翟', 'zh_CN', '1', '上海', '闸北', '中国', 'http://wx.qlogo.cn/mmopen/LBVaoRdS5kwoyHpx3XibTI4yOzgMhXY8eYIAkqGl0l7y6oZ4ZfzicfEDTVVsGmiaJRQAqnCulmoktaL0tnRHQhn7pc7B8VoQMDu/0', '[]', '', 1470708422, 1470708422);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hyb_activity_receive_record`
--
ALTER TABLE `hyb_activity_receive_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_admin`
--
ALTER TABLE `hyb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_article`
--
ALTER TABLE `hyb_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_department`
--
ALTER TABLE `hyb_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_department_detail`
--
ALTER TABLE `hyb_department_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_department_relation`
--
ALTER TABLE `hyb_department_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_doctor`
--
ALTER TABLE `hyb_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_hospital`
--
ALTER TABLE `hyb_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_order`
--
ALTER TABLE `hyb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_refund_record`
--
ALTER TABLE `hyb_refund_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_relation`
--
ALTER TABLE `hyb_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_type`
--
ALTER TABLE `hyb_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_user_review`
--
ALTER TABLE `hyb_user_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyb_weixin_info`
--
ALTER TABLE `hyb_weixin_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `openid` (`openid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `hyb_activity_receive_record`
--
ALTER TABLE `hyb_activity_receive_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `hyb_admin`
--
ALTER TABLE `hyb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `hyb_article`
--
ALTER TABLE `hyb_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `hyb_department`
--
ALTER TABLE `hyb_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `hyb_department_detail`
--
ALTER TABLE `hyb_department_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `hyb_department_relation`
--
ALTER TABLE `hyb_department_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `hyb_doctor`
--
ALTER TABLE `hyb_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `hyb_hospital`
--
ALTER TABLE `hyb_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hyb_order`
--
ALTER TABLE `hyb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `hyb_refund_record`
--
ALTER TABLE `hyb_refund_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `hyb_relation`
--
ALTER TABLE `hyb_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `hyb_type`
--
ALTER TABLE `hyb_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `hyb_user_review`
--
ALTER TABLE `hyb_user_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `hyb_weixin_info`
--
ALTER TABLE `hyb_weixin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
