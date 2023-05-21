-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 11:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `username`, `email`) VALUES
(1, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `contact_mobile`, `contact_email`, `contact_msg`) VALUES
(5, 'badhon khan', '+8801706455347', 'badhonkhan2033@gmail.com', 'I am A Web Developer'),
(15, 'tanjila', '01522555556', 'Tanjila@gmail.com', 'nice Work'),
(16, 'nahid', '01455555555', 'nahid@gmail.com', 'all is WELL'),
(18, 'Hasan', '01732224572', 'hasan23333@gmail.com', 'Good Work Good Work'),
(19, 'sakib hasan', '01732224572', 'sakibhasan23333@gmail.com', 'nice city'),
(20, 'khan', '+8801706455347', 'badhonkhan2033@gmail.com', 'sgdugfdhvd');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_totalenroll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_totalclass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_des`, `course_fee`, `course_totalenroll`, `course_totalclass`, `course_link`, `course_img`) VALUES
(14, 'লারাভেল প্রোজেক্ট ABC', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '4০০০ টাকা /-', '3০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/raravel.jpg'),
(16, 'লারাভেল প্রোজেক্ট BA', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '7০০০ টাকা /-', '1০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(21, 'লারাভেল প্রোজেক্ট AB', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '4০০০ টাকা /-', '3০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(22, 'লারাভেল প্রোজেক্ট B', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '7০০০ টাকা /-', '1০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg'),
(23, 'লারাভেল প্রোজেক্ট D', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '২০০০ টাকা /-', '5০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(24, 'লারাভেল প্রোজেক্ট AB', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '4০০০ টাকা /-', '3০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(25, 'লারাভেল প্রোজেক্ট B', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '7০০০ টাকা /-', '1০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(26, 'লারাভেল প্রোজেক্ট D', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '২০০০ টাকা /-', '5০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg'),
(27, 'লারাভেল প্রোজেক্ট AB', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '4০০০ টাকা /-', '3০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(28, 'লারাভেল প্রোজেক্ট B', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '7০০০ টাকা /-', '1০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(29, 'লারাভেল প্রোজেক্ট D', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '২০০০ টাকা /-', '5০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(30, 'লারাভেল প্রোজেক্ট AB', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '4০০০ টাকা /-', '3০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(31, 'লারাভেল প্রোজেক্ট B', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '7০০০ টাকা /-', '1০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg'),
(33, 'লারাভেল প্রোজেক্ট AB', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '4০০০ টাকা /-', '3০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(34, 'লারাভেল', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '7০০০ টাকা /-', '1০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(35, 'লারাভেল প্রোজেক্ট Badhon', 'আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল', '২০০০ টাকা /-', '5০০ জন', '৩০০ টি', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo_name`) VALUES
(124, 'http://127.0.0.1:8000/storage/4tcOq7G7UYvg2nZYWItTrdBYEviR0kBaUU61LRp6.jpg'),
(125, 'http://127.0.0.1:8000/storage/wGy7UwSMUGjlsgKXo8e4skYpqJFbrLksG6AjgH7e.jpg'),
(126, 'http://127.0.0.1:8000/storage/2nMMFORvrl7UgDEEYfXYIzNprD48VqtjV4XnJNkI.gif'),
(127, 'http://127.0.0.1:8000/storage/ZuqdHbvTERYAuWDu3CDwx5CKxsSm7Ie1KlLHvw6Y.jpg'),
(128, 'http://127.0.0.1:8000/storage/HVjPFxkwkMlBMXaQ4YGwBEu43cfkMLepDYpZaQBX.jpg'),
(129, 'http://127.0.0.1:8000/storage/PeqfGxA0fPXZtHZ3aI3LC70WxkeWlm22SvB29vC8.jpg'),
(130, 'http://127.0.0.1:8000/storage/LvsKbAof8CIBjWA4DkeETKENHDxWaTghu7P4h70E.jpg'),
(131, 'http://127.0.0.1:8000/storage/SAuiV8lOYC17RhSOy8XAdfFW0EPnuesDSDlIgZAt.jpg'),
(132, 'http://127.0.0.1:8000/storage/n0GE6RgapnfeK6yeDxco9ymWxmUXz2yrxDID7qZY.jpg'),
(133, 'http://127.0.0.1:8000/storage/cq1ITc9VM6tvSC39SVlxMq9EKOsM2L8w0myOKQgX.jpg'),
(134, 'http://127.0.0.1:8000/storage/TcsaQV29PO3PUbomInrwySxWrKFnsjvSc3Aafuth.jpg'),
(135, 'http://127.0.0.1:8000/storage/3A0AYrQAcKeaPZCJe1QlFu6uVyY8KfqsY9vfCdul.jpg'),
(136, 'http://127.0.0.1:8000/storage/Ub8IszE0Eoe25djCyr9CbvbGwKXeJSBcjmpEsDmL.jpg'),
(137, 'http://127.0.0.1:8000/storage/pdzo0l7xDj6DhdDksacKlxhCGTGx3cxJobq6LKQs.jpg'),
(138, 'http://127.0.0.1:8000/storage/JHBTbryaQhbCUqpLcH7IR6RgWwcdsy23hW8kuqZL.jpg'),
(139, 'http://127.0.0.1:8000/storage/NBH9pXVfnZkZ6joRXgk80PUhBUReMiBZ3CX0RkHE.jpg'),
(140, 'http://127.0.0.1:8000/storage/WqvcUGeI8znIqJUNiQGKePk6taBWdUKhE5qYO2id.jpg'),
(141, 'http://127.0.0.1:8000/storage/LFJGnZFWygSs8jcQNEprwWC7UEixiPXC5DNwCucI.jpg'),
(142, 'http://127.0.0.1:8000/storage/IoX9q6MqoJ9nsHMvjLf4hMofNy1EnXQxphGKkvZG.jpg'),
(143, 'http://127.0.0.1:8000/storage/mkwi2P4cFmzYpBNvrftguqOq9VKUD09q6lc2p7WA.jpg'),
(144, 'http://127.0.0.1:8000/storage/GwVe0ymkIv2MTh6LlI1xOzoWcKhRw9sM2QM70IRY.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_19_092724_visitor_table', 1),
(6, '2022_09_21_152024_service_table', 2),
(7, '2022_10_02_150545_courses_table', 3),
(8, '2022_10_04_151556_project__table', 4),
(9, '2022_10_05_140909_contact_table', 5),
(10, '2022_10_06_145755_review_table', 6),
(11, '2022_10_09_043023_admin_table', 7),
(12, '2022_10_17_065111_photo_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_des`, `project_link`, `project_img`) VALUES
(36, 'আইটি কোর্স sakib1', 'মোবাইল এন্ড ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg'),
(38, 'আইটি কোর্স Badhon', 'মোবাইল এন্ড ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg'),
(39, 'আইটি কোর্স 34', 'মোবাইল এন্ড ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg'),
(41, 'আইটি কোর্স nahid12', 'মোবাইল এন্ড ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/react.jpg'),
(42, 'আইটি কোর্স sakib12', 'মোবাইল এন্ড ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'https://somadhan900.blogspot.com/', 'http://localhost/Laravel-project/frontEnd/UserFront/images/laravel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `des`, `img`) VALUES
(7, 'বিল গেটস 14', 'Bogura Is a min-small city in Bangladesh', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(13, 'বিল গেটস 12', 'মাইক্রোসফটের প্রতিষ্ঠাতা বিল গেটসের জীবন কেটেছে নানা ঘটনার মধ্য দিয়ে। হার্ভার্ড বিশ্ববিদ্যালয়ে লেখাপড়া শেষ না করেই মাইক্রোসফট প্রতিষ্ঠা করা', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(14, 'বিল গেটস 11', 'Bogura Is a min-small city in Bangladesh', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(15, 'বিল গেটস 9', 'Bogura Is a min-small city in Bangladesh', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(16, 'বিল গেটস 8', 'মাইক্রোসফটের প্রতিষ্ঠাতা বিল গেটসের জীবন কেটেছে নানা ঘটনার মধ্য দিয়ে। হার্ভার্ড বিশ্ববিদ্যালয়ে লেখাপড়া শেষ না করেই মাইক্রোসফট প্রতিষ্ঠা করা', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(17, 'বিল গেটস 7', 'Bogura Is a min-small city in Bangladesh', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(18, 'বিল গেটস 6', 'মাইক্রোসফটের প্রতিষ্ঠাতা বিল গেটসের জীবন কেটেছে নানা ঘটনার মধ্য দিয়ে। হার্ভার্ড বিশ্ববিদ্যালয়ে লেখাপড়া শেষ না করেই মাইক্রোসফট প্রতিষ্ঠা করা', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(19, 'বিল গেটস 5', 'Bogura Is a min-small city in Bangladesh', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(25, 'বিল গেটস 10', 'মাইক্রোসফটের প্রতিষ্ঠাতা বিল গেটসের জীবন কেটেছে নানা ঘটনার মধ্য দিয়ে। হার্ভার্ড বিশ্ববিদ্যালয়ে লেখাপড়া শেষ না করেই মাইক্রোসফট প্রতিষ্ঠা করা', 'http://localhost/Laravel-project/site/public/images/bill.jpg'),
(26, 'বিল গেটস 11', 'Bogura Is a min-small city in Bangladesh', 'http://localhost/Laravel-project/site/public/images/bill.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_des` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_des`, `service_img`) VALUES
(63, 'আইটি কোর্স AA', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/knowledge.svg'),
(66, 'মোবাইল', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/knowledge.svg'),
(71, 'আইটি কোর্স', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/knowledge.svg'),
(81, 'আইটি কোর্স sakib', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/knowledge.svg'),
(82, 'মোবাইল', 'বং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'মোবাইল');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visit_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip_address`, `visit_time`) VALUES
(1, '127.0.0.1', '2022-09-19 04:21:25pm'),
(2, '127.0.0.1', '2022-09-19 04:22:06pm'),
(3, '127.0.0.1', '2022-09-19 04:36:40pm'),
(4, '127.0.0.1', '2022-09-21 10:16:36am'),
(5, '127.0.0.1', '2022-09-21 10:16:37am'),
(6, '127.0.0.1', '2022-09-21 10:16:43am'),
(7, '127.0.0.1', '2022-09-21 10:16:45am'),
(8, '127.0.0.1', '2022-09-21 10:16:46am'),
(9, '127.0.0.1', '2022-09-21 10:16:48am'),
(10, '127.0.0.1', '2022-09-21 10:16:49am'),
(11, '127.0.0.1', '2022-09-21 10:16:51am'),
(12, '127.0.0.1', '2022-09-21 10:16:52am'),
(13, '127.0.0.1', '2022-09-21 10:16:54am'),
(14, '127.0.0.1', '2022-09-21 10:16:55am'),
(15, '127.0.0.1', '2022-09-21 10:17:29am'),
(16, '127.0.0.1', '2022-09-21 10:17:33am'),
(17, '127.0.0.1', '2022-09-21 10:22:42am'),
(18, '127.0.0.1', '2022-09-21 10:25:56am'),
(19, '127.0.0.1', '2022-09-21 10:37:56am'),
(20, '127.0.0.1', '2022-09-21 10:46:39am'),
(21, '127.0.0.1', '2022-09-21 02:15:14pm'),
(22, '127.0.0.1', '2022-09-21 06:02:26pm'),
(23, '127.0.0.1', '2022-09-21 06:03:00pm'),
(24, '127.0.0.1', '2022-09-21 06:03:03pm'),
(25, '127.0.0.1', '2022-09-21 10:57:23pm'),
(26, '127.0.0.1', '2022-09-21 10:57:58pm'),
(27, '127.0.0.1', '2022-10-02 08:45:52pm'),
(28, '127.0.0.1', '2022-10-02 08:49:37pm'),
(29, '127.0.0.1', '2022-10-02 08:50:58pm'),
(30, '127.0.0.1', '2022-10-02 09:00:15pm'),
(31, '127.0.0.1', '2022-10-02 09:00:21pm'),
(32, '127.0.0.1', '2022-10-02 09:01:40pm'),
(33, '127.0.0.1', '2022-10-02 09:02:51pm'),
(34, '127.0.0.1', '2022-10-02 09:11:15pm'),
(35, '127.0.0.1', '2022-10-02 09:11:34pm'),
(36, '127.0.0.1', '2022-10-02 09:14:23pm'),
(37, '127.0.0.1', '2022-10-02 10:34:35pm'),
(38, '127.0.0.1', '2022-10-02 10:37:07pm'),
(39, '127.0.0.1', '2022-10-02 10:37:57pm'),
(40, '127.0.0.1', '2022-10-02 10:39:06pm'),
(41, '127.0.0.1', '2022-10-02 10:55:09pm'),
(42, '127.0.0.1', '2022-10-02 10:56:31pm'),
(43, '127.0.0.1', '2022-10-02 11:06:35pm'),
(44, '127.0.0.1', '2022-10-02 11:08:06pm'),
(45, '127.0.0.1', '2022-10-02 11:09:02pm'),
(46, '127.0.0.1', '2022-10-02 11:09:06pm'),
(47, '127.0.0.1', '2022-10-02 11:10:45pm'),
(48, '127.0.0.1', '2022-10-02 11:11:18pm'),
(49, '127.0.0.1', '2022-10-02 11:12:08pm'),
(50, '127.0.0.1', '2022-10-02 11:13:06pm'),
(51, '127.0.0.1', '2022-10-02 11:13:35pm'),
(52, '127.0.0.1', '2022-10-02 11:13:59pm'),
(53, '127.0.0.1', '2022-10-02 11:14:34pm'),
(54, '127.0.0.1', '2022-10-02 11:15:08pm'),
(55, '127.0.0.1', '2022-10-02 11:15:30pm'),
(56, '127.0.0.1', '2022-10-02 11:15:43pm'),
(57, '127.0.0.1', '2022-10-02 11:16:15pm'),
(58, '127.0.0.1', '2022-10-02 11:17:10pm'),
(59, '127.0.0.1', '2022-10-03 09:55:56am'),
(60, '127.0.0.1', '2022-10-04 08:57:37pm'),
(61, '127.0.0.1', '2022-10-04 09:12:57pm'),
(62, '127.0.0.1', '2022-10-04 09:38:03pm'),
(63, '127.0.0.1', '2022-10-04 09:39:49pm'),
(64, '127.0.0.1', '2022-10-04 09:40:40pm'),
(65, '127.0.0.1', '2022-10-04 09:42:19pm'),
(66, '127.0.0.1', '2022-10-04 09:42:46pm'),
(67, '127.0.0.1', '2022-10-04 09:45:31pm'),
(68, '127.0.0.1', '2022-10-04 10:14:56pm'),
(69, '127.0.0.1', '2022-10-04 10:15:23pm'),
(70, '127.0.0.1', '2022-10-05 04:51:52pm'),
(71, '127.0.0.1', '2022-10-05 05:05:57pm'),
(72, '127.0.0.1', '2022-10-05 05:07:20pm'),
(73, '127.0.0.1', '2022-10-05 09:02:58pm'),
(74, '127.0.0.1', '2022-10-05 09:03:48pm'),
(75, '127.0.0.1', '2022-10-05 09:04:06pm'),
(76, '127.0.0.1', '2022-10-05 09:06:09pm'),
(77, '127.0.0.1', '2022-10-05 09:06:35pm'),
(78, '127.0.0.1', '2022-10-05 09:09:28pm'),
(79, '127.0.0.1', '2022-10-05 09:09:31pm'),
(80, '127.0.0.1', '2022-10-05 09:09:33pm'),
(81, '127.0.0.1', '2022-10-05 09:09:34pm'),
(82, '127.0.0.1', '2022-10-05 09:09:48pm'),
(83, '127.0.0.1', '2022-10-05 09:10:53pm'),
(84, '127.0.0.1', '2022-10-05 09:12:11pm'),
(85, '127.0.0.1', '2022-10-05 09:17:14pm'),
(86, '127.0.0.1', '2022-10-05 09:21:36pm'),
(87, '127.0.0.1', '2022-10-05 09:24:50pm'),
(88, '127.0.0.1', '2022-10-05 09:25:40pm'),
(89, '127.0.0.1', '2022-10-05 09:25:58pm'),
(90, '127.0.0.1', '2022-10-05 09:26:09pm'),
(91, '127.0.0.1', '2022-10-05 09:27:55pm'),
(92, '127.0.0.1', '2022-10-05 09:29:10pm'),
(93, '127.0.0.1', '2022-10-05 09:35:04pm'),
(94, '127.0.0.1', '2022-10-05 09:35:08pm'),
(95, '127.0.0.1', '2022-10-05 09:36:17pm'),
(96, '127.0.0.1', '2022-10-05 09:36:42pm'),
(97, '127.0.0.1', '2022-10-05 09:44:19pm'),
(98, '127.0.0.1', '2022-10-05 09:46:37pm'),
(99, '127.0.0.1', '2022-10-05 09:47:15pm'),
(100, '127.0.0.1', '2022-10-05 09:49:40pm'),
(101, '127.0.0.1', '2022-10-05 09:50:02pm'),
(102, '127.0.0.1', '2022-10-05 09:52:49pm'),
(103, '127.0.0.1', '2022-10-05 09:53:33pm'),
(104, '127.0.0.1', '2022-10-05 09:55:33pm'),
(105, '127.0.0.1', '2022-10-05 09:55:50pm'),
(106, '127.0.0.1', '2022-10-05 09:56:33pm'),
(107, '127.0.0.1', '2022-10-05 10:01:08pm'),
(108, '127.0.0.1', '2022-10-05 10:02:28pm'),
(109, '127.0.0.1', '2022-10-05 10:04:07pm'),
(110, '127.0.0.1', '2022-10-05 10:04:35pm'),
(111, '127.0.0.1', '2022-10-05 10:14:39pm'),
(112, '127.0.0.1', '2022-10-05 10:15:13pm'),
(113, '127.0.0.1', '2022-10-05 10:16:20pm'),
(114, '127.0.0.1', '2022-10-05 10:16:31pm'),
(115, '127.0.0.1', '2022-10-05 10:19:18pm'),
(116, '127.0.0.1', '2022-10-05 10:19:41pm'),
(117, '127.0.0.1', '2022-10-05 10:22:56pm'),
(118, '127.0.0.1', '2022-10-05 10:25:50pm'),
(119, '127.0.0.1', '2022-10-05 10:27:15pm'),
(120, '127.0.0.1', '2022-10-05 10:27:22pm'),
(121, '127.0.0.1', '2022-10-05 10:27:34pm'),
(122, '127.0.0.1', '2022-10-05 10:27:46pm'),
(123, '127.0.0.1', '2022-10-05 10:28:45pm'),
(124, '127.0.0.1', '2022-10-05 10:29:22pm'),
(125, '127.0.0.1', '2022-10-05 10:30:03pm'),
(126, '127.0.0.1', '2022-10-05 10:30:38pm'),
(127, '127.0.0.1', '2022-10-05 10:30:48pm'),
(128, '127.0.0.1', '2022-10-05 10:30:58pm'),
(129, '127.0.0.1', '2022-10-05 10:31:22pm'),
(130, '127.0.0.1', '2022-10-05 10:31:48pm'),
(131, '127.0.0.1', '2022-10-05 11:02:36pm'),
(132, '127.0.0.1', '2022-10-05 11:03:07pm'),
(133, '127.0.0.1', '2022-10-05 11:15:32pm'),
(134, '127.0.0.1', '2022-10-05 11:15:40pm'),
(135, '127.0.0.1', '2022-10-05 11:16:42pm'),
(136, '127.0.0.1', '2022-10-06 12:11:41pm'),
(137, '127.0.0.1', '2022-10-06 08:43:29pm'),
(138, '127.0.0.1', '2022-10-06 08:44:12pm'),
(139, '127.0.0.1', '2022-10-06 09:03:18pm'),
(140, '::1', '2022-10-06 09:14:30pm'),
(141, '::1', '2022-10-06 09:14:56pm'),
(142, '127.0.0.1', '2022-10-06 09:19:43pm'),
(143, '127.0.0.1', '2022-10-06 09:19:55pm'),
(144, '127.0.0.1', '2022-10-06 09:35:28pm'),
(145, '127.0.0.1', '2022-10-06 09:36:08pm'),
(146, '127.0.0.1', '2022-10-06 09:36:34pm'),
(147, '127.0.0.1', '2022-10-06 09:38:13pm'),
(148, '127.0.0.1', '2022-10-06 11:50:35pm'),
(149, '127.0.0.1', '2022-10-06 11:52:44pm'),
(150, '127.0.0.1', '2022-10-06 11:53:43pm'),
(151, '127.0.0.1', '2022-10-06 11:55:27pm'),
(152, '127.0.0.1', '2022-10-06 11:55:36pm'),
(153, '127.0.0.1', '2022-10-06 11:57:32pm'),
(154, '127.0.0.1', '2022-10-06 11:59:34pm'),
(155, '127.0.0.1', '2022-10-06 11:59:45pm'),
(156, '127.0.0.1', '2022-10-07 12:00:04am'),
(157, '127.0.0.1', '2022-10-07 12:00:38am'),
(158, '127.0.0.1', '2022-10-07 12:00:43am'),
(159, '127.0.0.1', '2022-10-07 12:01:53am'),
(160, '127.0.0.1', '2022-10-07 12:02:01am'),
(161, '127.0.0.1', '2022-10-07 12:03:14am'),
(162, '127.0.0.1', '2022-10-07 12:03:27am'),
(163, '127.0.0.1', '2022-10-07 12:10:49am'),
(164, '127.0.0.1', '2022-10-07 12:14:22am'),
(165, '127.0.0.1', '2022-10-07 12:15:30am'),
(166, '127.0.0.1', '2022-10-07 12:26:42am'),
(167, '127.0.0.1', '2022-10-07 07:19:08pm'),
(168, '127.0.0.1', '2022-10-07 07:25:08pm'),
(169, '127.0.0.1', '2022-10-07 07:25:44pm'),
(170, '127.0.0.1', '2022-10-07 07:48:40pm'),
(171, '127.0.0.1', '2022-10-07 07:51:21pm'),
(172, '127.0.0.1', '2022-10-07 07:53:26pm'),
(173, '127.0.0.1', '2022-10-07 07:54:11pm'),
(174, '127.0.0.1', '2022-10-07 07:58:58pm'),
(175, '127.0.0.1', '2022-10-07 07:59:05pm'),
(176, '127.0.0.1', '2022-10-07 07:59:51pm'),
(177, '127.0.0.1', '2022-10-07 08:06:51pm'),
(178, '127.0.0.1', '2022-10-07 08:08:18pm'),
(179, '127.0.0.1', '2022-10-07 08:08:24pm'),
(180, '127.0.0.1', '2022-10-07 08:25:46pm'),
(181, '127.0.0.1', '2022-10-07 08:25:50pm'),
(182, '127.0.0.1', '2022-10-07 08:27:46pm'),
(183, '127.0.0.1', '2022-10-08 11:13:25am'),
(184, '127.0.0.1', '2022-10-08 11:18:54am'),
(185, '127.0.0.1', '2022-10-08 11:19:58am'),
(186, '127.0.0.1', '2022-10-08 11:22:04am'),
(187, '127.0.0.1', '2022-10-08 11:22:08am'),
(188, '127.0.0.1', '2022-10-08 11:24:27am'),
(189, '127.0.0.1', '2022-10-08 11:36:10am'),
(190, '127.0.0.1', '2022-10-08 11:38:25am'),
(191, '127.0.0.1', '2022-10-08 11:43:08am'),
(192, '127.0.0.1', '2022-10-08 11:43:12am'),
(193, '127.0.0.1', '2022-10-08 11:54:33am'),
(194, '127.0.0.1', '2022-10-08 11:54:39am'),
(195, '127.0.0.1', '2022-10-08 11:54:44am'),
(196, '127.0.0.1', '2022-10-08 11:59:42am'),
(197, '127.0.0.1', '2022-10-08 12:02:06pm'),
(198, '127.0.0.1', '2022-10-08 12:18:14pm'),
(199, '127.0.0.1', '2022-10-08 12:51:30pm'),
(200, '127.0.0.1', '2022-10-08 12:54:11pm'),
(201, '127.0.0.1', '2022-10-08 01:13:45pm'),
(202, '127.0.0.1', '2022-10-08 01:21:53pm'),
(203, '127.0.0.1', '2022-10-08 01:21:57pm'),
(204, '127.0.0.1', '2022-10-08 01:21:58pm'),
(205, '127.0.0.1', '2022-10-08 01:27:06pm'),
(206, '127.0.0.1', '2022-10-08 04:59:26pm'),
(207, '127.0.0.1', '2022-10-08 04:59:41pm'),
(208, '127.0.0.1', '2022-10-08 05:00:06pm'),
(209, '127.0.0.1', '2022-10-08 05:00:19pm'),
(210, '127.0.0.1', '2022-10-08 05:00:55pm'),
(211, '127.0.0.1', '2022-10-08 05:10:14pm'),
(212, '127.0.0.1', '2022-10-08 05:10:20pm'),
(213, '127.0.0.1', '2022-10-08 05:43:10pm'),
(214, '127.0.0.1', '2022-10-08 05:43:18pm'),
(215, '127.0.0.1', '2022-10-08 05:43:28pm'),
(216, '127.0.0.1', '2022-10-08 05:45:36pm'),
(217, '127.0.0.1', '2022-10-08 05:45:39pm'),
(218, '127.0.0.1', '2022-10-08 05:45:47pm'),
(219, '127.0.0.1', '2022-10-08 05:45:52pm'),
(220, '127.0.0.1', '2022-10-08 07:11:11pm'),
(221, '127.0.0.1', '2022-10-08 07:11:49pm'),
(222, '127.0.0.1', '2022-10-08 07:11:51pm'),
(223, '127.0.0.1', '2022-10-08 07:11:54pm'),
(224, '127.0.0.1', '2022-10-08 07:12:01pm'),
(225, '127.0.0.1', '2022-10-08 07:46:35pm'),
(226, '127.0.0.1', '2022-10-08 07:50:04pm'),
(227, '127.0.0.1', '2022-10-08 07:50:08pm'),
(228, '127.0.0.1', '2022-10-08 07:50:50pm'),
(229, '127.0.0.1', '2022-10-08 07:52:36pm'),
(230, '127.0.0.1', '2022-10-08 07:53:02pm'),
(231, '127.0.0.1', '2022-10-08 07:53:09pm'),
(232, '127.0.0.1', '2022-10-08 07:53:48pm'),
(233, '127.0.0.1', '2022-10-18 10:06:28am'),
(234, '127.0.0.1', '2022-10-18 07:24:19pm'),
(235, '127.0.0.1', '2022-10-18 07:24:47pm'),
(236, '127.0.0.1', '2022-11-02 09:25:45am'),
(237, '127.0.0.1', '2022-11-02 09:25:56am'),
(238, '127.0.0.1', '2022-11-02 09:25:58am'),
(239, '127.0.0.1', '2022-11-02 09:28:48am'),
(240, '::1', '2022-11-03 12:43:39pm'),
(241, '::1', '2022-11-03 12:46:13pm'),
(242, '::1', '2022-11-03 01:07:16pm'),
(243, '::1', '2022-11-03 01:07:34pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
