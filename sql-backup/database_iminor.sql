-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2015 at 10:51 
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_iminor`
--

-- --------------------------------------------------------

--
-- Table structure for table `couch_attachments`
--

CREATE TABLE IF NOT EXISTS `couch_attachments` (
  `attach_id` bigint(11) unsigned NOT NULL,
  `file_real_name` varchar(255) NOT NULL,
  `file_disk_name` varchar(255) NOT NULL,
  `file_extension` varchar(255) NOT NULL,
  `file_size` int(20) unsigned NOT NULL DEFAULT '0',
  `file_time` int(10) unsigned NOT NULL DEFAULT '0',
  `is_orphan` tinyint(1) unsigned DEFAULT '1',
  `hit_count` int(10) unsigned DEFAULT '0',
  `creation_ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `couch_comments`
--

CREATE TABLE IF NOT EXISTS `couch_comments` (
  `id` int(11) NOT NULL,
  `tpl_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` tinytext,
  `email` varchar(128) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `ip_addr` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `data` text,
  `approved` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `couch_data_numeric`
--

CREATE TABLE IF NOT EXISTS `couch_data_numeric` (
  `page_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` decimal(65,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `couch_data_text`
--

CREATE TABLE IF NOT EXISTS `couch_data_text` (
  `page_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` longtext,
  `search_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_data_text`
--

INSERT INTO `couch_data_text` (`page_id`, `field_id`, `value`, `search_value`) VALUES
(1, 2, '  I - MiNOR', 'I - MiNOR'),
(1, 3, '<p><strong>Bayu riano putra</strong></p>\r\n', 'Bayu riano putra');

-- --------------------------------------------------------

--
-- Table structure for table `couch_fields`
--

CREATE TABLE IF NOT EXISTS `couch_fields` (
  `id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `k_desc` varchar(255) DEFAULT NULL,
  `k_type` varchar(128) NOT NULL,
  `hidden` int(1) DEFAULT NULL,
  `search_type` varchar(20) DEFAULT 'text',
  `k_order` int(11) DEFAULT NULL,
  `data` longtext,
  `default_data` longtext,
  `required` int(1) DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL,
  `validator` varchar(255) DEFAULT NULL,
  `validator_msg` text,
  `k_separator` varchar(20) DEFAULT NULL,
  `val_separator` varchar(20) DEFAULT NULL,
  `opt_values` text,
  `opt_selected` tinytext,
  `toolbar` varchar(20) DEFAULT NULL,
  `custom_toolbar` text,
  `css` text,
  `custom_styles` text,
  `maxlength` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `k_group` varchar(128) DEFAULT NULL,
  `collapsed` int(1) DEFAULT NULL,
  `assoc_field` varchar(128) DEFAULT NULL,
  `crop` int(1) DEFAULT '0',
  `enforce_max` int(1) DEFAULT '1',
  `quality` int(11) DEFAULT NULL,
  `show_preview` int(1) DEFAULT '0',
  `preview_width` int(11) DEFAULT NULL,
  `preview_height` int(11) DEFAULT NULL,
  `no_xss_check` int(1) DEFAULT '0',
  `rtl` int(1) DEFAULT '0',
  `body_id` tinytext,
  `body_class` tinytext,
  `disable_uploader` int(1) DEFAULT '0',
  `_html` text COMMENT 'Internal',
  `dynamic` text,
  `custom_params` text,
  `searchable` int(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_fields`
--

INSERT INTO `couch_fields` (`id`, `template_id`, `name`, `label`, `k_desc`, `k_type`, `hidden`, `search_type`, `k_order`, `data`, `default_data`, `required`, `deleted`, `validator`, `validator_msg`, `k_separator`, `val_separator`, `opt_values`, `opt_selected`, `toolbar`, `custom_toolbar`, `css`, `custom_styles`, `maxlength`, `height`, `width`, `k_group`, `collapsed`, `assoc_field`, `crop`, `enforce_max`, `quality`, `show_preview`, `preview_width`, `preview_height`, `no_xss_check`, `rtl`, `body_id`, `body_class`, `disable_uploader`, `_html`, `dynamic`, `custom_params`, `searchable`) VALUES
(2, 1, 'title_page', '', '', 'text', 0, 'text', 0, NULL, '  ', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 0, '', 0, 0, 80, 0, 0, 0, 0, 0, '', '', 0, '<cms:editable\r\nname=''title_page''\r\ntype=''text''/>', '', NULL, 1),
(3, 1, 'about', '', '', 'richtext', 0, 'text', 0, NULL, ' ', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 0, '', 0, 0, 80, 0, 0, 0, 0, 0, '', '', 0, '<cms:editable\r\nname=''about''\r\ntype=''richtext''/>', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `couch_folders`
--

CREATE TABLE IF NOT EXISTS `couch_folders` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT '-1',
  `template_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `k_desc` mediumtext,
  `image` text,
  `access_level` int(11) DEFAULT '0',
  `weight` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `couch_fulltext`
--

CREATE TABLE IF NOT EXISTS `couch_fulltext` (
  `page_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_fulltext`
--

INSERT INTO `couch_fulltext` (`page_id`, `title`, `content`) VALUES
(1, 'Default page for index.php * PLEASE CHANGE THIS TITLE *', 'I - MiNOR Bayu riano putra ');

-- --------------------------------------------------------

--
-- Table structure for table `couch_levels`
--

CREATE TABLE IF NOT EXISTS `couch_levels` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `k_level` int(11) DEFAULT '0',
  `disabled` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_levels`
--

INSERT INTO `couch_levels` (`id`, `name`, `title`, `k_level`, `disabled`) VALUES
(1, 'superadmin', 'Super Admin', 10, 0),
(2, 'admin', 'Administrator', 7, 0),
(3, 'authenticated_user_special', 'Authenticated User (Special)', 4, 0),
(4, 'authenitcated_user', 'Authenticated User', 2, 0),
(5, 'unauthenticated_user', 'Everybody', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `couch_pages`
--

CREATE TABLE IF NOT EXISTS `couch_pages` (
  `id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `page_title` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `creation_date` datetime DEFAULT '0000-00-00 00:00:00',
  `modification_date` datetime DEFAULT '0000-00-00 00:00:00',
  `publish_date` datetime DEFAULT '0000-00-00 00:00:00',
  `status` int(11) DEFAULT NULL,
  `is_master` int(1) DEFAULT '0',
  `page_folder_id` int(11) DEFAULT '-1',
  `access_level` int(11) DEFAULT '0',
  `comments_count` int(11) DEFAULT '0',
  `comments_open` int(1) DEFAULT '1',
  `nested_parent_id` int(11) DEFAULT '-1',
  `weight` int(11) DEFAULT '0',
  `show_in_menu` int(1) DEFAULT '1',
  `menu_text` varchar(255) DEFAULT NULL,
  `is_pointer` int(1) DEFAULT '0',
  `pointer_link` text,
  `pointer_link_detail` text,
  `open_external` int(1) DEFAULT '0',
  `masquerades` int(1) DEFAULT '0',
  `strict_matching` int(1) DEFAULT '0',
  `file_name` varchar(260) DEFAULT NULL,
  `file_ext` varchar(20) DEFAULT NULL,
  `file_size` int(11) DEFAULT '0',
  `file_meta` text,
  `creation_IP` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_pages`
--

INSERT INTO `couch_pages` (`id`, `template_id`, `parent_id`, `page_title`, `page_name`, `creation_date`, `modification_date`, `publish_date`, `status`, `is_master`, `page_folder_id`, `access_level`, `comments_count`, `comments_open`, `nested_parent_id`, `weight`, `show_in_menu`, `menu_text`, `is_pointer`, `pointer_link`, `pointer_link_detail`, `open_external`, `masquerades`, `strict_matching`, `file_name`, `file_ext`, `file_size`, `file_meta`, `creation_IP`) VALUES
(1, 1, 0, 'Default page for index.php * PLEASE CHANGE THIS TITLE *', 'default-page-for-index-php-please-change-this-title', '2015-09-05 21:01:16', '2015-09-05 21:11:48', '2015-09-05 21:01:16', NULL, 1, -1, 0, 0, 1, -1, 0, 1, NULL, 0, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `couch_relations`
--

CREATE TABLE IF NOT EXISTS `couch_relations` (
  `pid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `weight` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `couch_settings`
--

CREATE TABLE IF NOT EXISTS `couch_settings` (
  `k_key` varchar(255) NOT NULL,
  `k_value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_settings`
--

INSERT INTO `couch_settings` (`k_key`, `k_value`) VALUES
('k_couch_version', '1.4.5'),
('nonce_secret_key', '2CBxn0tHV2FuML4wWchQRMnfq0czylE0oFXc6QjrjomwAQsXtadKn0qdr2cpOhPC'),
('secret_key', '28jSmAzA5cvdZlWKNrE9miUKY40znzyP7i8Ti8UOKPr9AOkOFons6ICuc3uZ2tfA');

-- --------------------------------------------------------

--
-- Table structure for table `couch_templates`
--

CREATE TABLE IF NOT EXISTS `couch_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `clonable` int(1) DEFAULT '0',
  `executable` int(1) DEFAULT '1',
  `title` varchar(255) DEFAULT NULL,
  `access_level` int(11) DEFAULT '0',
  `commentable` int(1) DEFAULT '0',
  `hidden` int(1) DEFAULT '0',
  `k_order` int(11) DEFAULT '0',
  `dynamic_folders` int(1) DEFAULT '0',
  `nested_pages` int(1) DEFAULT '0',
  `gallery` int(1) DEFAULT '0',
  `handler` text,
  `custom_params` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_templates`
--

INSERT INTO `couch_templates` (`id`, `name`, `description`, `clonable`, `executable`, `title`, `access_level`, `commentable`, `hidden`, `k_order`, `dynamic_folders`, `nested_pages`, `gallery`, `handler`, `custom_params`) VALUES
(1, 'index.php', '', 0, 1, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `couch_users`
--

CREATE TABLE IF NOT EXISTS `couch_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_key` varchar(64) DEFAULT NULL,
  `password_reset_key` varchar(64) DEFAULT NULL,
  `registration_date` datetime DEFAULT NULL,
  `access_level` int(11) DEFAULT '0',
  `disabled` int(11) DEFAULT '0',
  `system` int(11) DEFAULT '0',
  `last_failed` bigint(11) DEFAULT '0',
  `failed_logins` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couch_users`
--

INSERT INTO `couch_users` (`id`, `name`, `title`, `password`, `email`, `activation_key`, `password_reset_key`, `registration_date`, `access_level`, `disabled`, `system`, `last_failed`, `failed_logins`) VALUES
(1, 'bayu', 'bayu', '$P$BnB27dO1lyvD1JdWmbdD5GDCI2XuNY/', 'bayurianoputra@gmail.com', '', '', '2015-09-05 20:57:11', 10, 0, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couch_attachments`
--
ALTER TABLE `couch_attachments`
  ADD PRIMARY KEY (`attach_id`),
  ADD KEY `couch_attachments_Index01` (`is_orphan`),
  ADD KEY `couch_attachments_Index02` (`file_time`),
  ADD KEY `couch_attachments_Index03` (`is_orphan`,`file_time`),
  ADD KEY `couch_attachments_Index04` (`creation_ip`,`file_time`);

--
-- Indexes for table `couch_comments`
--
ALTER TABLE `couch_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `couch_comments_Index01` (`date`),
  ADD KEY `couch_comments_Index02` (`page_id`,`approved`,`date`),
  ADD KEY `couch_comments_Index03` (`tpl_id`,`approved`,`date`),
  ADD KEY `couch_comments_Index04` (`approved`,`date`),
  ADD KEY `couch_comments_Index05` (`tpl_id`,`page_id`,`approved`,`date`);

--
-- Indexes for table `couch_data_numeric`
--
ALTER TABLE `couch_data_numeric`
  ADD PRIMARY KEY (`page_id`,`field_id`),
  ADD KEY `couch_data_numeric_Index01` (`value`),
  ADD KEY `couch_data_numeric_Index02` (`field_id`,`value`);

--
-- Indexes for table `couch_data_text`
--
ALTER TABLE `couch_data_text`
  ADD PRIMARY KEY (`page_id`,`field_id`),
  ADD KEY `couch_data_text_Index01` (`search_value`(255)),
  ADD KEY `couch_data_text_Index02` (`field_id`,`search_value`(255));

--
-- Indexes for table `couch_fields`
--
ALTER TABLE `couch_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `couch_fields_index01` (`k_group`,`k_order`,`id`),
  ADD KEY `couch_fields_Index02` (`template_id`);

--
-- Indexes for table `couch_folders`
--
ALTER TABLE `couch_folders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couch_folders_Index02` (`template_id`,`name`),
  ADD KEY `couch_folders_Index01` (`template_id`,`id`);

--
-- Indexes for table `couch_fulltext`
--
ALTER TABLE `couch_fulltext`
  ADD PRIMARY KEY (`page_id`),
  ADD FULLTEXT KEY `couch_fulltext_Index01` (`title`);
ALTER TABLE `couch_fulltext`
  ADD FULLTEXT KEY `couch_fulltext_Index02` (`content`);

--
-- Indexes for table `couch_levels`
--
ALTER TABLE `couch_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couch_levels_index01` (`k_level`);

--
-- Indexes for table `couch_pages`
--
ALTER TABLE `couch_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couch_pages_Index03` (`template_id`,`page_name`),
  ADD KEY `couch_pages_Index01` (`template_id`,`publish_date`),
  ADD KEY `couch_pages_Index02` (`template_id`,`page_folder_id`,`publish_date`),
  ADD KEY `couch_pages_Index04` (`template_id`,`modification_date`),
  ADD KEY `couch_pages_Index05` (`template_id`,`page_folder_id`,`modification_date`),
  ADD KEY `couch_pages_Index06` (`template_id`,`page_folder_id`,`page_name`),
  ADD KEY `couch_pages_Index07` (`template_id`,`comments_count`),
  ADD KEY `couch_pages_Index08` (`template_id`,`page_title`),
  ADD KEY `couch_pages_Index09` (`template_id`,`page_folder_id`,`page_title`),
  ADD KEY `couch_pages_Index10` (`template_id`,`page_folder_id`,`comments_count`),
  ADD KEY `couch_pages_Index11` (`template_id`,`parent_id`,`modification_date`),
  ADD KEY `couch_pages_Index12` (`parent_id`,`modification_date`),
  ADD KEY `couch_pages_Index13` (`template_id`,`is_pointer`,`masquerades`,`pointer_link_detail`(255)),
  ADD KEY `couch_pages_Index14` (`template_id`,`file_name`(255)),
  ADD KEY `couch_pages_Index15` (`template_id`,`page_folder_id`,`file_name`(255)),
  ADD KEY `couch_pages_Index16` (`template_id`,`file_ext`,`file_name`(255)),
  ADD KEY `couch_pages_Index17` (`template_id`,`page_folder_id`,`file_ext`,`file_name`(255)),
  ADD KEY `couch_pages_Index18` (`template_id`,`file_size`),
  ADD KEY `couch_pages_Index19` (`template_id`,`page_folder_id`,`file_size`),
  ADD KEY `couch_pages_Index20` (`creation_IP`,`creation_date`);

--
-- Indexes for table `couch_relations`
--
ALTER TABLE `couch_relations`
  ADD PRIMARY KEY (`pid`,`fid`,`cid`),
  ADD KEY `couch_relations_Index01` (`pid`,`fid`,`weight`),
  ADD KEY `couch_relations_Index02` (`fid`,`cid`,`weight`),
  ADD KEY `couch_relations_Index03` (`cid`,`fid`);

--
-- Indexes for table `couch_settings`
--
ALTER TABLE `couch_settings`
  ADD PRIMARY KEY (`k_key`);

--
-- Indexes for table `couch_templates`
--
ALTER TABLE `couch_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couch_templates_Index01` (`name`);

--
-- Indexes for table `couch_users`
--
ALTER TABLE `couch_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couch_users_email` (`email`),
  ADD UNIQUE KEY `couch_users_name` (`name`),
  ADD KEY `couch_users_activation_key` (`activation_key`),
  ADD KEY `couch_users_password_reset_key` (`password_reset_key`),
  ADD KEY `couch_users_index01` (`access_level`),
  ADD KEY `couch_users_index02` (`access_level`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couch_attachments`
--
ALTER TABLE `couch_attachments`
  MODIFY `attach_id` bigint(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `couch_comments`
--
ALTER TABLE `couch_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `couch_fields`
--
ALTER TABLE `couch_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `couch_folders`
--
ALTER TABLE `couch_folders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `couch_levels`
--
ALTER TABLE `couch_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `couch_pages`
--
ALTER TABLE `couch_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `couch_templates`
--
ALTER TABLE `couch_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `couch_users`
--
ALTER TABLE `couch_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
