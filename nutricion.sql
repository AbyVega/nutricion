-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2017 a las 15:08:38
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutricion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ante_patologicos`
--

CREATE TABLE `ante_patologicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `enfermedades_impor` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ninguna',
  `alergias` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'alergias',
  `quirurgico` tinyint(1) NOT NULL DEFAULT '0',
  `farmacos_suplementos` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'si',
  `transtornos` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '["anorexia"]',
  `cronico_hereditario` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gastrointestinal` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `backups`
--

CREATE TABLE `backups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `backup_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre_de_carrera` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Seleccione Carrera'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `deleted_at`, `created_at`, `updated_at`, `nombre_de_carrera`) VALUES
(1, NULL, '2017-04-04 19:57:08', '2017-04-04 19:57:08', 'Tecnologias de la informacion'),
(2, NULL, '2017-04-04 19:58:14', '2017-04-04 19:58:14', 'Maestria en Ingenieria de Software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tags` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[]',
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`id`, `name`, `tags`, `color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Administration', '[]', '#000', NULL, '2017-03-23 07:04:56', '2017-03-23 07:04:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Male',
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mobile2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dept` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` date NOT NULL DEFAULT '1990-01-01',
  `date_hire` date NOT NULL,
  `date_left` date NOT NULL DEFAULT '1990-01-01',
  `salary_cur` decimal(15,3) NOT NULL DEFAULT '0.000',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `gender`, `mobile`, `mobile2`, `email`, `dept`, `city`, `address`, `about`, `date_birth`, `date_hire`, `date_left`, `salary_cur`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'bioazard', 'Super Admin', 'Male', '8888888888', '', 'rjmultimedia@gmail.com', 1, 'Pune', 'Karve nagar, Pune 411030', 'About user / biography', '2017-03-23', '2017-03-23', '2017-03-23', '0.000', NULL, '2017-03-23 07:05:38', '2017-03-23 07:05:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evalu_antropometricas`
--

CREATE TABLE `evalu_antropometricas` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fache` date NOT NULL DEFAULT '2017-11-09',
  `talla` decimal(15,3) NOT NULL DEFAULT '1.890',
  `peso` decimal(15,3) NOT NULL DEFAULT '78.900',
  `circ_abdominal` decimal(15,3) NOT NULL DEFAULT '78.000',
  `cintura` decimal(15,3) NOT NULL DEFAULT '45.600',
  `cadera` decimal(15,3) NOT NULL DEFAULT '67.900',
  `musculo` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '78%',
  `viseral` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2%',
  `act_fisica` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[]',
  `pcb` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pct` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cmb` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pcse` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pcsi` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `grasa_corporal` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `agua` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `kcal` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `imc` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `comentarios` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_configs`
--

CREATE TABLE `la_configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `la_configs`
--

INSERT INTO `la_configs` (`id`, `key`, `section`, `value`, `created_at`, `updated_at`) VALUES
(1, 'sitename', '', 'LaraAdmin 1.0', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(2, 'sitename_part1', '', 'Lara', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(3, 'sitename_part2', '', 'Admin 1.0', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(4, 'sitename_short', '', 'LA', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(5, 'site_description', '', 'LaraAdmin is a open-source Laravel Admin Panel for quick-start Admin based applications and boilerplate for CRM or CMS systems.', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(6, 'sidebar_search', '', '1', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(7, 'show_messages', '', '1', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(8, 'show_notifications', '', '1', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(9, 'show_tasks', '', '1', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(10, 'show_rightsidebar', '', '1', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(11, 'skin', '', 'skin-white', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(12, 'layout', '', 'fixed', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(13, 'default_email', '', 'test@example.com', '2017-03-23 07:04:56', '2017-03-23 07:04:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_menus`
--

CREATE TABLE `la_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa-cube',
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'module',
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `hierarchy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `la_menus`
--

INSERT INTO `la_menus` (`id`, `name`, `url`, `icon`, `type`, `parent`, `hierarchy`, `created_at`, `updated_at`) VALUES
(1, 'Team', '#', 'fa-group', 'custom', 0, 8, '2017-03-23 07:04:56', '2017-04-03 06:35:43'),
(2, 'Users', 'users', 'fa-group', 'module', 1, 5, '2017-03-23 07:04:56', '2017-04-03 05:27:10'),
(3, 'Uploads', 'uploads', 'fa-files-o', 'module', 0, 5, '2017-03-23 07:04:56', '2017-04-03 06:35:46'),
(4, 'Departments', 'departments', 'fa-tags', 'module', 1, 1, '2017-03-23 07:04:56', '2017-04-03 05:26:58'),
(5, 'Employees', 'employees', 'fa-group', 'module', 1, 2, '2017-03-23 07:04:56', '2017-04-03 05:26:58'),
(6, 'Roles', 'roles', 'fa-user-plus', 'module', 1, 3, '2017-03-23 07:04:56', '2017-04-03 05:26:58'),
(8, 'Permissions', 'permissions', 'fa-magic', 'module', 1, 4, '2017-03-23 07:04:56', '2017-04-03 05:26:58'),
(21, 'Ante_patologicos', 'ante_patologicos', 'fa-500px', 'module', 0, 7, '2017-04-03 06:35:38', '2017-04-03 06:35:46'),
(16, 'Historia_clinicas', 'historia_clinicas', 'fa-bar-chart-o', 'module', 0, 6, '2017-04-03 05:29:56', '2017-04-03 06:35:46'),
(20, 'historia clinica', 'http://', 'fa-cube', 'custom', 0, 1, '2017-04-03 05:54:52', '2017-04-03 06:35:46'),
(15, 'Organizations', 'organizations', 'fa-university', 'module', 0, 4, '2017-04-03 05:22:48', '2017-04-03 06:35:46'),
(17, 'paciente', 'http://', 'fa-cube', 'custom', 0, 3, '2017-04-03 05:38:47', '2017-04-03 06:35:46'),
(19, 'antecedentes patologicos', 'http://Ante_patologicos', 'fa-cube', 'custom', 0, 2, '2017-04-03 05:54:07', '2017-04-03 06:35:46'),
(22, 'ante_patologicos', 'ante_patologicos', 'fa-anchor', 'custom', 0, 0, '2017-04-03 06:36:40', '2017-04-03 06:36:40'),
(23, 'Evalu_antropometricas', 'evalu_antropometricas', 'fa fa-anchor', 'module', 0, 0, '2017-04-04 19:48:20', '2017-04-04 19:48:20'),
(24, 'Carreras', 'carreras', 'fa fa-cube', 'module', 0, 0, '2017-04-04 19:56:41', '2017-04-04 19:56:41'),
(25, 'Pacientes', 'pacientes', 'fa fa-optin-monster', 'module', 0, 0, '2017-04-04 20:00:15', '2017-04-04 20:00:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_26_050000_create_modules_table', 1),
('2014_05_26_055000_create_module_field_types_table', 1),
('2014_05_26_060000_create_module_fields_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_12_01_000000_create_uploads_table', 1),
('2016_05_26_064006_create_departments_table', 1),
('2016_05_26_064007_create_employees_table', 1),
('2016_05_26_064446_create_roles_table', 1),
('2016_07_05_115343_create_role_user_table', 1),
('2016_07_06_140637_create_organizations_table', 1),
('2016_07_07_134058_create_backups_table', 1),
('2016_07_07_134058_create_menus_table', 1),
('2016_09_10_163337_create_permissions_table', 1),
('2016_09_10_163520_create_permission_role_table', 1),
('2016_09_22_105958_role_module_fields_table', 1),
('2016_09_22_110008_role_module_table', 1),
('2016_10_06_115413_create_la_configs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_db` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view_col` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fa_icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa-cube',
  `is_gen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`id`, `name`, `label`, `name_db`, `view_col`, `model`, `controller`, `fa_icon`, `is_gen`, `created_at`, `updated_at`) VALUES
(1, 'Users', 'Users', 'users', 'name', 'User', 'UsersController', 'fa-group', 1, '2017-03-23 07:04:53', '2017-03-23 07:04:56'),
(2, 'Uploads', 'Uploads', 'uploads', 'name', 'Upload', 'UploadsController', 'fa-files-o', 1, '2017-03-23 07:04:54', '2017-03-23 07:04:56'),
(3, 'Departments', 'Departments', 'departments', 'name', 'Department', 'DepartmentsController', 'fa-tags', 1, '2017-03-23 07:04:54', '2017-03-23 07:04:56'),
(4, 'Employees', 'Employees', 'employees', 'name', 'Employee', 'EmployeesController', 'fa-group', 1, '2017-03-23 07:04:54', '2017-03-23 07:04:56'),
(5, 'Roles', 'Roles', 'roles', 'name', 'Role', 'RolesController', 'fa-user-plus', 1, '2017-03-23 07:04:54', '2017-03-23 07:04:56'),
(6, 'Organizations', 'Organizations', 'organizations', 'name', 'Organization', 'OrganizationsController', 'fa-university', 1, '2017-03-23 07:04:55', '2017-03-23 07:04:56'),
(7, 'Backups', 'Backups', 'backups', 'name', 'Backup', 'BackupsController', 'fa-hdd-o', 1, '2017-03-23 07:04:55', '2017-03-23 07:04:56'),
(8, 'Permissions', 'Permissions', 'permissions', 'name', 'Permission', 'PermissionsController', 'fa-magic', 1, '2017-03-23 07:04:55', '2017-03-23 07:04:56'),
(10, 'Pacientes', 'Pacientes', 'pacientes', 'paciente_carrera', 'Paciente', 'PacientesController', 'fa-optin-monster', 1, '2017-04-03 05:05:27', '2017-04-04 20:00:15'),
(11, 'Historia_clinicas', 'Historia_clinicas', 'historia_clinicas', '', 'Historia_clinica', 'Historia_clinicasController', 'fa-bar-chart-o', 0, '2017-04-03 05:28:24', '2017-04-03 05:28:24'),
(12, 'Ante_patologicos', 'Ante_patologicos', 'ante_patologicos', 'enfermedades_impor', 'Ante_patologico', 'Ante_patologicosController', 'fa-500px', 1, '2017-04-03 05:44:05', '2017-04-04 19:52:43'),
(13, 'Evalu_antropometricas', 'Evalu_antropometricas', 'evalu_antropometricas', 'fache', 'Evalu_antropometrica', 'Evalu_antropometricasController', 'fa-anchor', 1, '2017-04-03 06:19:48', '2017-04-04 19:48:20'),
(14, 'Carreras', 'Carreras', 'carreras', 'nombre_de_carrera', 'Carrera', 'CarrerasController', 'fa-cube', 1, '2017-04-04 19:55:34', '2017-04-04 19:56:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `module_fields`
--

CREATE TABLE `module_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `colname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `module` int(10) UNSIGNED NOT NULL,
  `field_type` int(10) UNSIGNED NOT NULL,
  `unique` tinyint(1) NOT NULL DEFAULT '0',
  `defaultvalue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minlength` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `maxlength` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `popup_vals` text COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `module_fields`
--

INSERT INTO `module_fields` (`id`, `colname`, `label`, `module`, `field_type`, `unique`, `defaultvalue`, `minlength`, `maxlength`, `required`, `popup_vals`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'name', 'Name', 1, 16, 0, '', 5, 250, 1, '', 0, '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(2, 'context_id', 'Context', 1, 13, 0, '0', 0, 0, 0, '', 0, '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(3, 'email', 'Email', 1, 8, 1, '', 0, 250, 0, '', 0, '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(4, 'password', 'Password', 1, 17, 0, '', 6, 250, 1, '', 0, '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(5, 'type', 'User Type', 1, 7, 0, 'Employee', 0, 0, 0, '["Employee","Client"]', 0, '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(6, 'name', 'Name', 2, 16, 0, '', 5, 250, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(7, 'path', 'Path', 2, 19, 0, '', 0, 250, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(8, 'extension', 'Extension', 2, 19, 0, '', 0, 20, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(9, 'caption', 'Caption', 2, 19, 0, '', 0, 250, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(10, 'user_id', 'Owner', 2, 7, 0, '1', 0, 0, 0, '@users', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(11, 'hash', 'Hash', 2, 19, 0, '', 0, 250, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(12, 'public', 'Is Public', 2, 2, 0, '0', 0, 0, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(13, 'name', 'Name', 3, 16, 1, '', 1, 250, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(14, 'tags', 'Tags', 3, 20, 0, '[]', 0, 0, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(15, 'color', 'Color', 3, 19, 0, '', 0, 50, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(16, 'name', 'Name', 4, 16, 0, '', 5, 250, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(17, 'designation', 'Designation', 4, 19, 0, '', 0, 50, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(18, 'gender', 'Gender', 4, 18, 0, 'Male', 0, 0, 1, '["Male","Female"]', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(19, 'mobile', 'Mobile', 4, 14, 0, '', 10, 20, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(20, 'mobile2', 'Alternative Mobile', 4, 14, 0, '', 10, 20, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(21, 'email', 'Email', 4, 8, 1, '', 5, 250, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(22, 'dept', 'Department', 4, 7, 0, '0', 0, 0, 1, '@departments', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(23, 'city', 'City', 4, 19, 0, '', 0, 50, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(24, 'address', 'Address', 4, 1, 0, '', 0, 1000, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(25, 'about', 'About', 4, 19, 0, '', 0, 0, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(26, 'date_birth', 'Date of Birth', 4, 4, 0, '1990-01-01', 0, 0, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(27, 'date_hire', 'Hiring Date', 4, 4, 0, 'date(\'Y-m-d\')', 0, 0, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(28, 'date_left', 'Resignation Date', 4, 4, 0, '1990-01-01', 0, 0, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(29, 'salary_cur', 'Current Salary', 4, 6, 0, '0.0', 0, 2, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(30, 'name', 'Name', 5, 16, 1, '', 1, 250, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(31, 'display_name', 'Display Name', 5, 19, 0, '', 0, 250, 1, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(32, 'description', 'Description', 5, 21, 0, '', 0, 1000, 0, '', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(33, 'parent', 'Parent Role', 5, 7, 0, '1', 0, 0, 0, '@roles', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(34, 'dept', 'Department', 5, 7, 0, '1', 0, 0, 0, '@departments', 0, '2017-03-23 07:04:54', '2017-03-23 07:04:54'),
(35, 'name', 'Name', 6, 16, 1, '', 5, 250, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(36, 'email', 'Email', 6, 8, 1, '', 0, 250, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(37, 'phone', 'Phone', 6, 14, 0, '', 0, 20, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(38, 'website', 'Website', 6, 23, 0, 'http://', 0, 250, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(39, 'assigned_to', 'Assigned to', 6, 7, 0, '0', 0, 0, 0, '@employees', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(40, 'connect_since', 'Connected Since', 6, 4, 0, 'date(\'Y-m-d\')', 0, 0, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(41, 'address', 'Address', 6, 1, 0, '', 0, 1000, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(42, 'city', 'City', 6, 19, 0, '', 0, 250, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(43, 'description', 'Description', 6, 21, 0, '', 0, 1000, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(44, 'profile_image', 'Profile Image', 6, 12, 0, '', 0, 250, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(45, 'profile', 'Company Profile', 6, 9, 0, '', 0, 250, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(46, 'name', 'Name', 7, 16, 1, '', 0, 250, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(47, 'file_name', 'File Name', 7, 19, 1, '', 0, 250, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(48, 'backup_size', 'File Size', 7, 19, 0, '0', 0, 10, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(49, 'name', 'Name', 8, 16, 1, '', 1, 250, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(50, 'display_name', 'Display Name', 8, 19, 0, '', 0, 250, 1, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(51, 'description', 'Description', 8, 21, 0, '', 0, 1000, 0, '', 0, '2017-03-23 07:04:55', '2017-03-23 07:04:55'),
(53, 'enfermedades_impor', 'enfermedades_impor', 12, 22, 0, 'ninguna', 0, 100, 1, '', 0, '2017-04-03 05:46:33', '2017-04-03 06:00:44'),
(54, 'alergias', 'alergias', 12, 22, 0, 'alergias', 0, 100, 1, '', 0, '2017-04-03 05:52:34', '2017-04-03 05:52:34'),
(55, 'quirurgico', 'quirurgico', 12, 2, 0, 'quirurgico', 0, 0, 1, '', 0, '2017-04-03 05:56:34', '2017-04-03 05:57:03'),
(56, 'farmacos_suplementos', 'farmacos_suplementos', 12, 18, 0, 'si', 0, 0, 1, '["si","no","en ocaciones"]', 0, '2017-04-03 05:59:05', '2017-04-03 05:59:05'),
(57, 'transtornos', 'transtornos', 12, 15, 0, 'anorexia', 0, 0, 1, '["anorexia","bulimia"]', 0, '2017-04-03 06:00:18', '2017-04-03 06:00:18'),
(58, 'cronico_hereditario', 'cronico_hereditario', 12, 18, 0, '', 0, 0, 1, '["diabetes","cancer","HTA","hipercolesterolemia","enf.cardiovasculares"]', 0, '2017-04-03 06:14:25', '2017-04-03 06:14:25'),
(59, 'gastrointestinal', 'gastrointestinal', 12, 18, 0, '', 0, 0, 1, '["nauseas y vomito","diarrea","estrenimiento","empleo de laxantes","flatulencias","gastritis","colitis","ulcera","pirosis","uso de antiacidos"]', 0, '2017-04-03 06:17:34', '2017-04-03 06:17:34'),
(60, 'fache', 'fecha', 13, 4, 0, '2017-11-09', 0, 0, 1, '', 0, '2017-04-03 06:20:46', '2017-04-03 06:20:46'),
(61, 'talla', 'talla', 13, 6, 0, '1.89', 0, 11, 1, '', 0, '2017-04-03 06:21:28', '2017-04-04 19:47:26'),
(62, 'peso', 'peso', 13, 6, 0, '78.9', 0, 11, 1, '', 0, '2017-04-03 06:23:09', '2017-04-03 06:23:09'),
(63, 'circ_abdominal', 'circ_abdominal', 13, 6, 0, '78.0', 0, 11, 1, '', 0, '2017-04-03 06:24:21', '2017-04-03 06:24:21'),
(64, 'cintura', 'cintura', 13, 6, 0, '45.6', 0, 11, 1, '', 0, '2017-04-03 06:25:03', '2017-04-03 06:25:03'),
(65, 'cadera', 'cadera', 13, 6, 0, '67.9', 0, 11, 1, '', 0, '2017-04-03 06:25:30', '2017-04-03 06:25:30'),
(66, 'musculo', 'musculo', 13, 22, 0, '78%', 0, 256, 1, '', 0, '2017-04-03 06:26:21', '2017-04-03 06:26:21'),
(67, 'viseral', 'viseral', 13, 22, 0, '2%', 0, 256, 1, '', 0, '2017-04-03 06:27:00', '2017-04-04 19:48:52'),
(68, 'act_fisica', 'act_fisica', 13, 15, 0, '', 0, 0, 1, '["sedentario"]', 0, '2017-04-03 06:28:07', '2017-04-03 06:28:07'),
(69, 'pcb', 'pcb', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:28:54', '2017-04-03 06:28:54'),
(70, 'pct', 'pct', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:29:30', '2017-04-03 06:29:30'),
(71, 'cmb', 'cmb', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:29:55', '2017-04-03 06:29:55'),
(72, 'pcse', 'pcse', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:30:31', '2017-04-03 06:30:31'),
(73, 'pcsi', 'pcsi', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:31:03', '2017-04-03 06:31:03'),
(74, 'grasa_corporal', 'grasa_corporal', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:31:59', '2017-04-03 06:31:59'),
(75, 'agua', 'agua', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:33:00', '2017-04-03 06:33:00'),
(76, 'kcal', 'kcal', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:33:32', '2017-04-03 06:33:32'),
(77, 'imc', 'imc', 13, 22, 0, '', 0, 256, 1, '', 0, '2017-04-03 06:33:53', '2017-04-03 06:33:53'),
(78, 'comentarios', 'comentarios', 13, 21, 0, '', 0, 0, 0, '', 0, '2017-04-03 06:34:53', '2017-04-03 06:34:53'),
(79, 'nombre_de_carrera', 'nombre de la carrera', 14, 22, 1, 'Seleccione Carrera', 0, 256, 1, '', 0, '2017-04-04 19:56:32', '2017-04-04 20:06:39'),
(80, 'paciente_carrera', 'nombre de la carrera', 10, 15, 0, 'Seleccione Carrera', 0, 0, 1, '@carreras', 3, '2017-04-04 19:59:24', '2017-04-04 20:05:10'),
(81, 'nombre_de_paciente', 'Nombre', 10, 22, 0, 'nombre', 5, 15, 1, '', 1, '2017-04-04 20:02:19', '2017-04-04 20:02:19'),
(82, 'codigo_de_paciente', 'Codigo', 10, 22, 0, 'codigo', 9, 9, 1, '', 2, '2017-04-04 20:03:47', '2017-04-04 20:03:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `module_field_types`
--

CREATE TABLE `module_field_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `module_field_types`
--

INSERT INTO `module_field_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Address', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(2, 'Checkbox', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(3, 'Currency', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(4, 'Date', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(5, 'Datetime', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(6, 'Decimal', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(7, 'Dropdown', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(8, 'Email', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(9, 'File', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(10, 'Float', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(11, 'HTML', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(12, 'Image', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(13, 'Integer', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(14, 'Mobile', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(15, 'Multiselect', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(16, 'Name', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(17, 'Password', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(18, 'Radio', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(19, 'String', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(20, 'Taginput', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(21, 'Textarea', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(22, 'TextField', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(23, 'URL', '2017-03-23 07:04:53', '2017-03-23 07:04:53'),
(24, 'Files', '2017-03-23 07:04:53', '2017-03-23 07:04:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizations`
--

CREATE TABLE `organizations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://',
  `assigned_to` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `connect_since` date NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` int(11) NOT NULL,
  `profile` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paciente_carrera` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '["Seleccione Carrera"]',
  `nombre_de_paciente` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'nombre',
  `codigo_de_paciente` varchar(9) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'codigo'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `display_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN_PANEL', 'Admin Panel', 'Admin Panel Permission', NULL, '2017-03-23 07:04:56', '2017-03-23 07:04:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `display_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `dept` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `parent`, `dept`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SUPER_ADMIN', 'Super Admin', 'Full Access Role', 1, 1, NULL, '2017-03-23 07:04:56', '2017-03-23 07:04:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_module`
--

CREATE TABLE `role_module` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `acc_view` tinyint(1) NOT NULL,
  `acc_create` tinyint(1) NOT NULL,
  `acc_edit` tinyint(1) NOT NULL,
  `acc_delete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_module`
--

INSERT INTO `role_module` (`id`, `role_id`, `module_id`, `acc_view`, `acc_create`, `acc_edit`, `acc_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(2, 1, 2, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(3, 1, 3, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(4, 1, 4, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(5, 1, 5, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(6, 1, 6, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(7, 1, 7, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(8, 1, 8, 1, 1, 1, 1, '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(9, 1, 12, 1, 1, 1, 1, '2017-04-03 06:01:24', '2017-04-03 06:01:24'),
(10, 1, 13, 1, 1, 1, 1, '2017-04-04 19:48:20', '2017-04-04 19:48:20'),
(11, 1, 14, 1, 1, 1, 1, '2017-04-04 19:56:41', '2017-04-04 19:56:41'),
(12, 1, 10, 1, 1, 1, 1, '2017-04-04 20:00:15', '2017-04-04 20:00:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_module_fields`
--

CREATE TABLE `role_module_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `field_id` int(10) UNSIGNED NOT NULL,
  `access` enum('invisible','readonly','write') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_module_fields`
--

INSERT INTO `role_module_fields` (`id`, `role_id`, `field_id`, `access`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(2, 1, 2, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(3, 1, 3, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(4, 1, 4, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(5, 1, 5, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(6, 1, 6, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(7, 1, 7, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(8, 1, 8, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(9, 1, 9, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(10, 1, 10, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(11, 1, 11, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(12, 1, 12, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(13, 1, 13, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(14, 1, 14, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(15, 1, 15, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(16, 1, 16, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(17, 1, 17, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(18, 1, 18, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(19, 1, 19, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(20, 1, 20, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(21, 1, 21, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(22, 1, 22, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(23, 1, 23, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(24, 1, 24, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(25, 1, 25, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(26, 1, 26, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(27, 1, 27, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(28, 1, 28, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(29, 1, 29, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(30, 1, 30, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(31, 1, 31, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(32, 1, 32, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(33, 1, 33, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(34, 1, 34, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(35, 1, 35, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(36, 1, 36, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(37, 1, 37, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(38, 1, 38, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(39, 1, 39, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(40, 1, 40, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(41, 1, 41, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(42, 1, 42, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(43, 1, 43, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(44, 1, 44, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(45, 1, 45, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(46, 1, 46, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(47, 1, 47, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(48, 1, 48, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(49, 1, 49, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(50, 1, 50, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(51, 1, 51, 'write', '2017-03-23 07:04:56', '2017-03-23 07:04:56'),
(52, 1, 52, 'write', '2017-04-03 04:40:04', '2017-04-03 04:40:04'),
(53, 1, 53, 'write', '2017-04-03 05:46:33', '2017-04-03 05:46:33'),
(54, 1, 54, 'write', '2017-04-03 05:52:34', '2017-04-03 05:52:34'),
(55, 1, 55, 'write', '2017-04-03 05:56:34', '2017-04-03 05:56:34'),
(56, 1, 56, 'write', '2017-04-03 05:59:05', '2017-04-03 05:59:05'),
(57, 1, 57, 'write', '2017-04-03 06:00:18', '2017-04-03 06:00:18'),
(58, 1, 58, 'write', '2017-04-03 06:14:25', '2017-04-03 06:14:25'),
(59, 1, 59, 'write', '2017-04-03 06:17:34', '2017-04-03 06:17:34'),
(60, 1, 60, 'write', '2017-04-03 06:20:47', '2017-04-03 06:20:47'),
(61, 1, 61, 'write', '2017-04-03 06:21:28', '2017-04-03 06:21:28'),
(62, 1, 62, 'write', '2017-04-03 06:23:09', '2017-04-03 06:23:09'),
(63, 1, 63, 'write', '2017-04-03 06:24:22', '2017-04-03 06:24:22'),
(64, 1, 64, 'write', '2017-04-03 06:25:03', '2017-04-03 06:25:03'),
(65, 1, 65, 'write', '2017-04-03 06:25:30', '2017-04-03 06:25:30'),
(66, 1, 66, 'write', '2017-04-03 06:26:22', '2017-04-03 06:26:22'),
(67, 1, 67, 'write', '2017-04-03 06:27:00', '2017-04-03 06:27:00'),
(68, 1, 68, 'write', '2017-04-03 06:28:08', '2017-04-03 06:28:08'),
(69, 1, 69, 'write', '2017-04-03 06:28:54', '2017-04-03 06:28:54'),
(70, 1, 70, 'write', '2017-04-03 06:29:30', '2017-04-03 06:29:30'),
(71, 1, 71, 'write', '2017-04-03 06:29:56', '2017-04-03 06:29:56'),
(72, 1, 72, 'write', '2017-04-03 06:30:31', '2017-04-03 06:30:31'),
(73, 1, 73, 'write', '2017-04-03 06:31:04', '2017-04-03 06:31:04'),
(74, 1, 74, 'write', '2017-04-03 06:31:59', '2017-04-03 06:31:59'),
(75, 1, 75, 'write', '2017-04-03 06:33:00', '2017-04-03 06:33:00'),
(76, 1, 76, 'write', '2017-04-03 06:33:32', '2017-04-03 06:33:32'),
(77, 1, 77, 'write', '2017-04-03 06:33:54', '2017-04-03 06:33:54'),
(78, 1, 78, 'write', '2017-04-03 06:34:53', '2017-04-03 06:34:53'),
(79, 1, 79, 'write', '2017-04-04 19:56:33', '2017-04-04 19:56:33'),
(80, 1, 80, 'write', '2017-04-04 19:59:25', '2017-04-04 19:59:25'),
(81, 1, 81, 'write', '2017-04-04 20:02:20', '2017-04-04 20:02:20'),
(82, 1, 82, 'write', '2017-04-04 20:03:48', '2017-04-04 20:03:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hash` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `context_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Employee',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `context_id`, `email`, `password`, `type`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'bioazard', 1, 'rjmultimedia@gmail.com', '$2y$10$FHhAxBtEKtI0uGClMhPioucPzDwBenJ.x4jYK3DHVvuobctWeJlx6', 'Employee', 'GsAroSsDrVLGXINa08P2bhaAfiiUsNSC9MgJIsJTR34GcLfZpt47SX6Oo1Ap', NULL, '2017-03-23 07:05:38', '2017-03-23 07:06:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ante_patologicos`
--
ALTER TABLE `ante_patologicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `backups`
--
ALTER TABLE `backups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `backups_name_unique` (`name`),
  ADD UNIQUE KEY `backups_file_name_unique` (`file_name`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_dept_foreign` (`dept`);

--
-- Indices de la tabla `evalu_antropometricas`
--
ALTER TABLE `evalu_antropometricas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `la_configs`
--
ALTER TABLE `la_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `la_menus`
--
ALTER TABLE `la_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `module_fields`
--
ALTER TABLE `module_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_fields_module_foreign` (`module`),
  ADD KEY `module_fields_field_type_foreign` (`field_type`);

--
-- Indices de la tabla `module_field_types`
--
ALTER TABLE `module_field_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizations_name_unique` (`name`),
  ADD UNIQUE KEY `organizations_email_unique` (`email`),
  ADD KEY `organizations_assigned_to_foreign` (`assigned_to`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD KEY `roles_parent_foreign` (`parent`),
  ADD KEY `roles_dept_foreign` (`dept`);

--
-- Indices de la tabla `role_module`
--
ALTER TABLE `role_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_module_role_id_foreign` (`role_id`),
  ADD KEY `role_module_module_id_foreign` (`module_id`);

--
-- Indices de la tabla `role_module_fields`
--
ALTER TABLE `role_module_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_module_fields_role_id_foreign` (`role_id`),
  ADD KEY `role_module_fields_field_id_foreign` (`field_id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploads_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ante_patologicos`
--
ALTER TABLE `ante_patologicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `backups`
--
ALTER TABLE `backups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `evalu_antropometricas`
--
ALTER TABLE `evalu_antropometricas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `la_configs`
--
ALTER TABLE `la_configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `la_menus`
--
ALTER TABLE `la_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `module_fields`
--
ALTER TABLE `module_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT de la tabla `module_field_types`
--
ALTER TABLE `module_field_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `role_module`
--
ALTER TABLE `role_module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `role_module_fields`
--
ALTER TABLE `role_module_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
