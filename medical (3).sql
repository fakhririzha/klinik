-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 02:06 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `chronical_problem_history`
--

CREATE TABLE `chronical_problem_history` (
  `sf_id` int(11) NOT NULL,
  `sf_cph_name` varchar(50) NOT NULL,
  `sf_cph_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_data`
--

CREATE TABLE `employee_data` (
  `ed_nip` int(11) NOT NULL,
  `ed_nama` varchar(100) NOT NULL,
  `ed_tanggal_lahir` date NOT NULL,
  `ed_tahun_masuk` varchar(4) NOT NULL,
  `ed_bulan_masuk` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `jabatan_kode` int(11) NOT NULL,
  `ed_password` varchar(32) NOT NULL,
  `ed_status` enum('Logged_in','Logged_out') NOT NULL,
  `ed_role` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_payment`
--

CREATE TABLE `e_payment` (
  `pd_id` int(11) NOT NULL,
  `ep_saldo` int(11) NOT NULL,
  `ep_status_aktivasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family_history`
--

CREATE TABLE `family_history` (
  `sf_id` int(11) NOT NULL,
  `sf_fh_alzheimer` tinyint(1) NOT NULL,
  `sf_fh_alzheimer_source` varchar(50) NOT NULL,
  `sf_fh_breast_cancer` tinyint(1) NOT NULL,
  `sf_fh_breast_cancer_source` varchar(50) NOT NULL,
  `sf_fh_cad` tinyint(1) NOT NULL,
  `sf_fh_cad_source` varchar(50) NOT NULL,
  `sf_fh_cerebrovas` tinyint(1) NOT NULL,
  `sf_fh_cerebrovas_source` varchar(50) NOT NULL,
  `sf_fh_cervic_cancer` tinyint(1) NOT NULL,
  `sf_fh_cervic_cancer_source` varchar(50) NOT NULL,
  `sf_fh_colon_cancer` tinyint(1) NOT NULL,
  `sf_fh_colon_cancer_source` varchar(50) NOT NULL,
  `sf_fh_depression` tinyint(1) NOT NULL,
  `sf_fh_depression_source` varchar(50) NOT NULL,
  `sf_fh_dm` tinyint(1) NOT NULL,
  `sf_fh_dm_source` varchar(50) NOT NULL,
  `sf_fh_fe_storage` tinyint(1) NOT NULL,
  `sf_fh_fe_storage_source` varchar(50) NOT NULL,
  `sf_fh_glaucoma` tinyint(1) NOT NULL,
  `sf_fh_glaucoma_source` varchar(50) NOT NULL,
  `sf_fh_hyperchol` tinyint(1) NOT NULL,
  `sf_fh_hyperchol_source` varchar(50) NOT NULL,
  `sf_fh_htn` tinyint(1) NOT NULL,
  `sf_fh_htn_source` varchar(50) NOT NULL,
  `sf_fh_ovarian_cancer` tinyint(1) NOT NULL,
  `sf_fh_ovarian_cancer_source` varchar(50) NOT NULL,
  `sf_fh_prostate_cancer` tinyint(1) NOT NULL,
  `sf_fh_prostate_cancer_source` varchar(50) NOT NULL,
  `sf_fh_skin_cancer` tinyint(1) NOT NULL,
  `sf_fh_skin_cancer_source` varchar(50) NOT NULL,
  `sf_fh_thyroid` tinyint(1) NOT NULL,
  `sf_fh_thyroid_source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flowsheet_medication`
--

CREATE TABLE `flowsheet_medication` (
  `fm_id` int(11) NOT NULL,
  `mr_id` int(11) NOT NULL,
  `fm_allergic` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flowsheet_medication_detail`
--

CREATE TABLE `flowsheet_medication_detail` (
  `fm_id` int(11) NOT NULL,
  `fm_fmd_date` date NOT NULL,
  `fm_fmd_height` int(11) NOT NULL,
  `fm_fmd_weight` int(11) NOT NULL,
  `fm_fmd_blood_pressure` varchar(7) NOT NULL,
  `fm_fmd_pulse` int(11) NOT NULL,
  `fm_fmd_temperature` int(11) NOT NULL,
  `fm_fmd_tobacco_use` enum('Current','Former','Never') NOT NULL,
  `fm_fmd_tobacco_counseling` tinyint(1) NOT NULL,
  `fm_fmd_fingerstick` varchar(10) NOT NULL,
  `fm_fmd_cholesterol` varchar(5) NOT NULL,
  `fm_fmd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalization_history`
--

CREATE TABLE `hospitalization_history` (
  `sf_id` int(11) NOT NULL,
  `sf_hosp_detail` varchar(50) NOT NULL,
  `sf_hosp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `initial_risk_assessment`
--

CREATE TABLE `initial_risk_assessment` (
  `sf_id` int(11) NOT NULL,
  `sf_ira_alcohol_drug` tinyint(1) NOT NULL,
  `sf_ira_alcohol_drug_date` date NOT NULL,
  `sf_ira_std` tinyint(1) NOT NULL,
  `sf_ira_std_date` date NOT NULL,
  `sf_ira_domestic_violence` tinyint(1) NOT NULL,
  `sf_ira_domestic_violence_date` date NOT NULL,
  `sf_ira_depression` tinyint(1) NOT NULL,
  `sf_ira_depression_date` date NOT NULL,
  `sf_ira_osteoporosis` tinyint(1) NOT NULL,
  `sf_ira_osteoporosis_date` date NOT NULL,
  `sf_ira_geriatric_assessment` tinyint(1) NOT NULL,
  `sf_ira_geriatric_assessment_date` date NOT NULL,
  `sf_ira_mmse` tinyint(1) NOT NULL,
  `sf_ira_mmse_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_obat`
--

CREATE TABLE `inventaris_obat` (
  `ib_kode` int(11) NOT NULL,
  `ib_nama` varchar(100) NOT NULL,
  `ib_jenis` enum('Tablet','Sirup','Kapsul') NOT NULL,
  `ib_harga_beli` int(11) NOT NULL,
  `ib_harga_jual` int(11) NOT NULL,
  `ib_kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_peralatan`
--

CREATE TABLE `inventaris_peralatan` (
  `ip_id` int(11) NOT NULL,
  `ip_nama` varchar(100) NOT NULL,
  `ip_harga_beli` int(11) NOT NULL,
  `ip_kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_kode` int(11) NOT NULL,
  `jabatan_nama` varchar(50) NOT NULL,
  `jabatan_gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_dose`
--

CREATE TABLE `medical_dose` (
  `fm_fmd_id` int(11) NOT NULL,
  `fmd_md_medicine_name` varchar(50) NOT NULL,
  `fmd_md_frequency` enum('daily','bid','tid','qid','nightly','prn') NOT NULL,
  `fmd_md_medicine_consumed_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `mr_id` int(11) NOT NULL,
  `pd_id` int(11) NOT NULL,
  `mr_type` enum('Pemeriksaan Kesehatan') NOT NULL,
  `mr_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medication_sheet`
--

CREATE TABLE `medication_sheet` (
  `fm_id` int(11) NOT NULL,
  `fm_ms_date` date NOT NULL,
  `fm_ms_short_time_medication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

CREATE TABLE `patient_data` (
  `pd_id` int(11) NOT NULL,
  `pd_nama` varchar(100) NOT NULL,
  `pd_tanggal_lahir` date NOT NULL,
  `pd_tempat_lahir` varchar(50) NOT NULL,
  `pd_jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `pd_alamat` varchar(50) NOT NULL,
  `pd_nomor_darurat` varchar(13) NOT NULL,
  `pd_nomor_narahubung` varchar(13) NOT NULL,
  `pd_relasi_nomor_narahubung` varchar(30) NOT NULL,
  `pd_faskes_utama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`pd_id`, `pd_nama`, `pd_tanggal_lahir`, `pd_tempat_lahir`, `pd_jenis_kelamin`, `pd_alamat`, `pd_nomor_darurat`, `pd_nomor_narahubung`, `pd_relasi_nomor_narahubung`, `pd_faskes_utama`) VALUES
(0, 'Fakhri Rizha Ananda', '2001-03-27', 'Medan', 'Pria', 'Jl. Sidodadi Komplek Johor Regency Blok B6', '1234567890', '1234567890', 'Abang', 'Klinik Harapan Bunda'),
(2, 'Fakhri Rizha Ananda', '2018-12-18', 'Medan', 'Pria', 'Jl. Sidodadi Komplek Johor Regency Blok B6', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(3, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(4, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(5, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(6, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(7, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(8, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(9, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(10, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(11, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(12, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(13, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(14, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa'),
(15, 'Fakhri Rizha Ananda', '2018-12-18', '', '', '', '123456789', '123456789', 'asadasd', 'asdasdsa');

-- --------------------------------------------------------

--
-- Table structure for table `patient_update`
--

CREATE TABLE `patient_update` (
  `pu_id` int(11) NOT NULL,
  `pd_id` int(11) NOT NULL,
  `pu_question_1` tinyint(1) NOT NULL,
  `pu_question_1_detail_where` varchar(500) NOT NULL,
  `pu_question_1_detail_when` date NOT NULL,
  `pu_question_2` tinyint(1) NOT NULL,
  `pu_question_2_list` varchar(500) NOT NULL,
  `pu_question_2_list_where` varchar(50) NOT NULL,
  `pu_question_2_list_when` date NOT NULL,
  `pu_question_3` tinyint(1) NOT NULL,
  `pu_question_3_detail` varchar(500) NOT NULL,
  `pu_question_4` tinyint(1) NOT NULL,
  `pu_question_4_detail_who` varchar(100) NOT NULL,
  `pu_question_4_detail_when` date NOT NULL,
  `pu_question_5` tinyint(1) NOT NULL,
  `pu_question_5_detail` enum('Flu','Tetanus','Pneumonia','Other') NOT NULL,
  `pu_question_6` tinyint(1) NOT NULL,
  `pu_question_6_detail` varchar(100) NOT NULL,
  `pu_question_7` tinyint(1) NOT NULL,
  `pu_question_7_detail` varchar(100) NOT NULL,
  `pu_question_8` tinyint(1) NOT NULL,
  `pu_question_8_detail` varchar(100) NOT NULL,
  `pu_question_9a` enum('Sometimes','Always','N/A') NOT NULL,
  `pu_question_9b` enum('Sometimes','Always','N/A') NOT NULL,
  `pu_question_10` tinyint(1) NOT NULL,
  `pu_question_11` tinyint(1) NOT NULL,
  `pu_question_12` tinyint(1) NOT NULL,
  `pu_question_13` tinyint(1) NOT NULL,
  `pu_question_14` tinyint(1) NOT NULL,
  `pu_question_15a` tinyint(1) NOT NULL,
  `pu_question_15b` tinyint(1) NOT NULL,
  `pu_question_16` tinyint(1) NOT NULL,
  `pu_question_17` tinyint(1) NOT NULL,
  `pu_question_18` tinyint(1) NOT NULL,
  `pu_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physical_exam`
--

CREATE TABLE `physical_exam` (
  `pn_id` int(11) NOT NULL,
  `pn_pe_appearance` tinyint(1) NOT NULL,
  `pn_pe_vs` tinyint(1) NOT NULL,
  `pn_pe_conjuctiva_or_lids` tinyint(1) NOT NULL,
  `pn_pe_pupils` tinyint(1) NOT NULL,
  `pn_pe_disc_or_fundi` tinyint(1) NOT NULL,
  `pn_pe_eom` tinyint(1) NOT NULL,
  `pn_pe_ear_infection` tinyint(1) NOT NULL,
  `pn_pe_tm_and_canal` tinyint(1) NOT NULL,
  `pn_pe_hearing` tinyint(1) NOT NULL,
  `pn_pe_weber` tinyint(1) NOT NULL,
  `pn_pe_rhinne` tinyint(1) NOT NULL,
  `pn_pe_nasal_mucosa_or_septum_or_turb` tinyint(1) NOT NULL,
  `pn_pe_lips_or_gum_teeth` tinyint(1) NOT NULL,
  `pn_pe_oropharnyx` tinyint(1) NOT NULL,
  `pn_pe_neck_appearance` tinyint(1) NOT NULL,
  `pn_pe_neck_symmetry` tinyint(1) NOT NULL,
  `pn_pe_trachea` tinyint(1) NOT NULL,
  `pn_pe_thyroid` tinyint(1) NOT NULL,
  `pn_pe_lymph_nodes` tinyint(1) NOT NULL,
  `pn_pe_respiratory_effort` tinyint(1) NOT NULL,
  `pn_pe_rib_excursion` tinyint(1) NOT NULL,
  `pn_pe_lungs_auscultation` tinyint(1) NOT NULL,
  `pn_pe_percussion` tinyint(1) NOT NULL,
  `pn_pe_lungs_palpation` tinyint(1) NOT NULL,
  `pn_pe_pmi` tinyint(1) NOT NULL,
  `pn_pe_palpation` tinyint(1) NOT NULL,
  `pn_pe_auscultation` tinyint(1) NOT NULL,
  `pn_pe_rhytm` tinyint(1) NOT NULL,
  `pn_pe_rate` tinyint(1) NOT NULL,
  `pn_pe_s1` tinyint(1) NOT NULL,
  `pn_pe_s2` tinyint(1) NOT NULL,
  `pn_pe_carotid_artery` tinyint(1) NOT NULL,
  `pn_pe_abdominial_aorta` tinyint(1) NOT NULL,
  `pn_pe_fem_pulses` tinyint(1) NOT NULL,
  `pn_pe_edema_or_varicose_veins` tinyint(1) NOT NULL,
  `pn_pe_chest_inspection` tinyint(1) NOT NULL,
  `pn_pe_chest_palpation` tinyint(1) NOT NULL,
  `pn_pe_right_breast` tinyint(1) NOT NULL,
  `pn_pe_left_breast` tinyint(1) NOT NULL,
  `pn_pe_right_axillae` tinyint(1) NOT NULL,
  `pn_pe_left_axillae` tinyint(1) NOT NULL,
  `pn_pe_abdomen_inspection` tinyint(1) NOT NULL,
  `pn_pe_bowel_sounds` tinyint(1) NOT NULL,
  `pn_pe_abdomen_palpation` tinyint(1) NOT NULL,
  `pn_pe_liver_span` tinyint(1) NOT NULL,
  `pn_pe_spleen` tinyint(1) NOT NULL,
  `pn_pe_inguinal_area` tinyint(1) NOT NULL,
  `pn_pe_neck` tinyint(1) NOT NULL,
  `pn_pe_supraclavicular` tinyint(1) NOT NULL,
  `pn_pe_axillary` tinyint(1) NOT NULL,
  `pn_pe_inguinal` tinyint(1) NOT NULL,
  `pn_pe_skin_inspection` tinyint(1) NOT NULL,
  `pn_pe_skin_palpation` tinyint(1) NOT NULL,
  `pn_pe_cranial_nerves` tinyint(1) NOT NULL,
  `pn_pe_tendon_reflexes` tinyint(1) NOT NULL,
  `pn_pe_biceps` tinyint(1) NOT NULL,
  `pn_pe_triceps` tinyint(1) NOT NULL,
  `pn_pe_patellar` tinyint(1) NOT NULL,
  `pn_pe_achilles` tinyint(1) NOT NULL,
  `pn_pe_brachioradialis` tinyint(1) NOT NULL,
  `pn_pe_motor_strength` tinyint(1) NOT NULL,
  `pn_pe_upper_extension_strength` tinyint(1) NOT NULL,
  `pn_pe_lower_extension_strength` tinyint(1) NOT NULL,
  `pn_pe_sensory` tinyint(1) NOT NULL,
  `pn_pe_light_touch` tinyint(1) NOT NULL,
  `pn_pe_pin_prick` tinyint(1) NOT NULL,
  `pn_pe_neuro_vibration` tinyint(1) NOT NULL,
  `pn_pe_neuro_temperature` tinyint(1) NOT NULL,
  `pn_pe_proprioception` tinyint(1) NOT NULL,
  `pn_pe_romberg` tinyint(1) NOT NULL,
  `pn_pe_rom` tinyint(1) NOT NULL,
  `pn_pe_babinski_eval` tinyint(1) NOT NULL,
  `pn_pe_msk_inspection` tinyint(1) NOT NULL,
  `pn_pe_exam_of_joint` tinyint(1) NOT NULL,
  `pn_pe_head_and_neck` tinyint(1) NOT NULL,
  `pn_pe_spine_or_ribs` tinyint(1) NOT NULL,
  `pn_pe_pelvis` tinyint(1) NOT NULL,
  `pn_pe_gait` tinyint(1) NOT NULL,
  `pn_pe_clubbing_or_cyanos_edema` tinyint(1) NOT NULL,
  `pn_pe_orientation` tinyint(1) NOT NULL,
  `pn_pe_mental_status` tinyint(1) NOT NULL,
  `pn_pe_judgment` tinyint(1) NOT NULL,
  `pn_pe_insight` tinyint(1) NOT NULL,
  `pn_pe_short_term_memory` tinyint(1) NOT NULL,
  `pn_pe_long_term_memory` tinyint(1) NOT NULL,
  `pn_pe_mood` tinyint(1) NOT NULL,
  `pn_pe_affection` tinyint(1) NOT NULL,
  `pn_pe_concentration` tinyint(1) NOT NULL,
  `pn_pe_speech` tinyint(1) NOT NULL,
  `pn_pe_comments` varchar(1000) NOT NULL,
  `pn_pe_assessment_and_plan` varchar(10000) NOT NULL,
  `pn_pe_medical_decision_making` enum('SF','L','M','H','See Continuation Sheet') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progress_note`
--

CREATE TABLE `progress_note` (
  `pn_id` int(11) NOT NULL,
  `mr_id` int(11) NOT NULL,
  `pn_type` enum('New','Return','Periodic') NOT NULL,
  `pn_date` date NOT NULL,
  `pn_time_counseling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_of_system`
--

CREATE TABLE `review_of_system` (
  `pn_id` int(11) NOT NULL,
  `ros_change_wt` tinyint(1) NOT NULL,
  `ros_fatigue` tinyint(1) NOT NULL,
  `ros_temperature_chills` tinyint(1) NOT NULL,
  `ros_weakness` tinyint(1) NOT NULL,
  `ros_change_color` tinyint(1) NOT NULL,
  `ros_change_hair_nails` tinyint(1) NOT NULL,
  `ros_new_lesions` tinyint(1) NOT NULL,
  `ros_pruritis` tinyint(1) NOT NULL,
  `ros_rash` tinyint(1) NOT NULL,
  `ros_xerosis` tinyint(1) NOT NULL,
  `ros_cataracts` tinyint(1) NOT NULL,
  `ros_change_vision` tinyint(1) NOT NULL,
  `ros_glaucoma` tinyint(1) NOT NULL,
  `ros_redness` tinyint(1) NOT NULL,
  `ros_bleeding_gums` tinyint(1) NOT NULL,
  `ros_change_hearings` tinyint(1) NOT NULL,
  `ros_change_voice` tinyint(1) NOT NULL,
  `ros_dentures` tinyint(1) NOT NULL,
  `ros_epistaxis` tinyint(1) NOT NULL,
  `ros_hoarseness` tinyint(1) NOT NULL,
  `ros_sinusitis` tinyint(1) NOT NULL,
  `ros_tinnitus` tinyint(1) NOT NULL,
  `ros_ulcers` tinyint(1) NOT NULL,
  `ros_asthma` tinyint(1) NOT NULL,
  `ros_bronchitis` tinyint(1) NOT NULL,
  `ros_cough` tinyint(1) NOT NULL,
  `ros_doe` tinyint(1) NOT NULL,
  `ros_hemoptysis` tinyint(1) NOT NULL,
  `ros_pneumonia` tinyint(1) NOT NULL,
  `ros_sob` tinyint(1) NOT NULL,
  `ros_angina` tinyint(1) NOT NULL,
  `ros_cad` tinyint(1) NOT NULL,
  `ros_chest_pain` tinyint(1) NOT NULL,
  `ros_claudication` tinyint(1) NOT NULL,
  `ros_edema` tinyint(1) NOT NULL,
  `ros_htn` tinyint(1) NOT NULL,
  `ros_orthopnea` tinyint(1) NOT NULL,
  `ros_palpitations` tinyint(1) NOT NULL,
  `ros_pnd` tinyint(1) NOT NULL,
  `ros_brbpr` tinyint(1) NOT NULL,
  `ros_change_bowel_habits` tinyint(1) NOT NULL,
  `ros_constipation` tinyint(1) NOT NULL,
  `ros_diarrhea` tinyint(1) NOT NULL,
  `ros_dysphagia` tinyint(1) NOT NULL,
  `ros_fecal_incontinence` tinyint(1) NOT NULL,
  `ros_gerd` tinyint(1) NOT NULL,
  `ros_hematochezia` tinyint(1) NOT NULL,
  `ros_hemorrhoids` tinyint(1) NOT NULL,
  `ros_melena` tinyint(1) NOT NULL,
  `ros_n_v` tinyint(1) NOT NULL,
  `ros_pud` tinyint(1) NOT NULL,
  `ros_change_stream` tinyint(1) NOT NULL,
  `ros_hematuria` tinyint(1) NOT NULL,
  `ros_hernia` tinyint(1) NOT NULL,
  `ros_hesitancy` tinyint(1) NOT NULL,
  `ros_impotence` tinyint(1) NOT NULL,
  `ros_incontinence` tinyint(1) NOT NULL,
  `ros_nocturia` tinyint(1) NOT NULL,
  `ros_polyuria` tinyint(1) NOT NULL,
  `ros_scrotal_masses_pain` tinyint(1) NOT NULL,
  `ros_std` tinyint(1) NOT NULL,
  `ros_urgency` tinyint(1) NOT NULL,
  `ros_arthritis` tinyint(1) NOT NULL,
  `ros_cervical_pain` tinyint(1) NOT NULL,
  `ros_decreased_motion` tinyint(1) NOT NULL,
  `ros_gout` tinyint(1) NOT NULL,
  `ros_injuries` tinyint(1) NOT NULL,
  `ros_joint_pain` tinyint(1) NOT NULL,
  `ros_joint_stiffness` tinyint(1) NOT NULL,
  `ros_locking_joints` tinyint(1) NOT NULL,
  `ros_low_back_pain` tinyint(1) NOT NULL,
  `ros_swelling` tinyint(1) NOT NULL,
  `ros_depression` tinyint(1) NOT NULL,
  `ros_homicidal_ideation` tinyint(1) NOT NULL,
  `ros_substance_abuse` tinyint(1) NOT NULL,
  `ros_suicidal_ideation` tinyint(1) NOT NULL,
  `ros_time_or_place_orientation` tinyint(1) NOT NULL,
  `ros_recent_or_remote_memory` tinyint(1) NOT NULL,
  `ros_anxiety_or_agitation` tinyint(1) NOT NULL,
  `ros_abnormal_menses` tinyint(1) NOT NULL,
  `ros_dryness` tinyint(1) NOT NULL,
  `ros_dyspareunia` tinyint(1) NOT NULL,
  `ros_sexual_abuse` tinyint(1) NOT NULL,
  `ros_vaginal_discharge` tinyint(1) NOT NULL,
  `ros_breast_pain` tinyint(1) NOT NULL,
  `ros_breast_lumps` tinyint(1) NOT NULL,
  `ros_breast_discharge` tinyint(1) NOT NULL,
  `ros_heat_or_cold_intolerance` tinyint(1) NOT NULL,
  `ros_neck_enlargement` tinyint(1) NOT NULL,
  `ros_polydipsia` tinyint(1) NOT NULL,
  `ros_xerosis_endocrine` tinyint(1) NOT NULL,
  `ros_change_concentration` tinyint(1) NOT NULL,
  `ros_change_memory` tinyint(1) NOT NULL,
  `ros_dizziness` tinyint(1) NOT NULL,
  `ros_headache` tinyint(1) NOT NULL,
  `ros_imbalance` tinyint(1) NOT NULL,
  `ros_numbness` tinyint(1) NOT NULL,
  `ros_seizures` tinyint(1) NOT NULL,
  `ros_tremor` tinyint(1) NOT NULL,
  `ros_weakness_neurologic` tinyint(1) NOT NULL,
  `ros_anemia` tinyint(1) NOT NULL,
  `ros_easy_bruisability` tinyint(1) NOT NULL,
  `ros_enlarged_ln` tinyint(1) NOT NULL,
  `ros_hx_transfusions` tinyint(1) NOT NULL,
  `ros_comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `social_history`
--

CREATE TABLE `social_history` (
  `sf_id` int(11) NOT NULL,
  `sf_sh_marital_status` enum('Married','Single','Civil Union','Divorced') NOT NULL,
  `sf_sh_living_status` enum('Lives Alone','Separated','','') NOT NULL,
  `sf_sh_occupation` varchar(50) NOT NULL,
  `sf_sh_religion` enum('Islam','Christian','Catholic','Hindu','Buddha','Konghucu','Other Religious Beliefs') NOT NULL,
  `sf_sh_advanced_directives` tinyint(1) NOT NULL,
  `sf_sh_advanced_directives_date` date NOT NULL,
  `sf_sh_education` enum('Junior High School','High School','College','Uneducated') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `summary_form`
--

CREATE TABLE `summary_form` (
  `sf_id` int(11) NOT NULL,
  `mr_id` int(11) NOT NULL,
  `sf_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surgical_history`
--

CREATE TABLE `surgical_history` (
  `sf_id` int(11) NOT NULL,
  `sf_sh_name` varchar(50) NOT NULL,
  `sf_sh_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_data`
--

CREATE TABLE `transaksi_data` (
  `td_kode` int(11) NOT NULL,
  `pd_id` int(11) NOT NULL,
  `td_total` int(11) NOT NULL,
  `td_epayment_use` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_data_detail`
--

CREATE TABLE `transaksi_data_detail` (
  `tdd_id` int(11) NOT NULL,
  `td_kode` int(11) NOT NULL,
  `ib_kode` int(11) NOT NULL,
  `tdd_kuantitas` int(11) NOT NULL,
  `tdd_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vital_signs`
--

CREATE TABLE `vital_signs` (
  `pn_id` int(11) NOT NULL,
  `pn_vs_age` int(11) NOT NULL,
  `pn_vs_weight` int(11) NOT NULL,
  `pn_vs_temperature` int(11) NOT NULL,
  `pn_vs_blood_pressure` varchar(7) NOT NULL,
  `pn_vs_pulse` int(11) NOT NULL,
  `pn_vs_respirations` int(11) NOT NULL,
  `pn_vs_fingerstick` int(11) NOT NULL,
  `pn_vs_lmp` int(11) NOT NULL,
  `pn_vs_oxygen_saturation` int(11) NOT NULL,
  `pn_vs_initials` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chronical_problem_history`
--
ALTER TABLE `chronical_problem_history`
  ADD KEY `sf_id` (`sf_id`);

--
-- Indexes for table `employee_data`
--
ALTER TABLE `employee_data`
  ADD PRIMARY KEY (`ed_nip`),
  ADD KEY `jabatan_kode` (`jabatan_kode`);

--
-- Indexes for table `e_payment`
--
ALTER TABLE `e_payment`
  ADD KEY `pd_id` (`pd_id`);

--
-- Indexes for table `family_history`
--
ALTER TABLE `family_history`
  ADD KEY `sf_id` (`sf_id`);

--
-- Indexes for table `flowsheet_medication`
--
ALTER TABLE `flowsheet_medication`
  ADD PRIMARY KEY (`fm_id`),
  ADD KEY `mr_id` (`mr_id`);

--
-- Indexes for table `flowsheet_medication_detail`
--
ALTER TABLE `flowsheet_medication_detail`
  ADD PRIMARY KEY (`fm_fmd_id`),
  ADD KEY `fm_id` (`fm_id`);

--
-- Indexes for table `hospitalization_history`
--
ALTER TABLE `hospitalization_history`
  ADD KEY `sf_id` (`sf_id`);

--
-- Indexes for table `initial_risk_assessment`
--
ALTER TABLE `initial_risk_assessment`
  ADD KEY `sf_id` (`sf_id`);

--
-- Indexes for table `inventaris_obat`
--
ALTER TABLE `inventaris_obat`
  ADD PRIMARY KEY (`ib_kode`);

--
-- Indexes for table `inventaris_peralatan`
--
ALTER TABLE `inventaris_peralatan`
  ADD PRIMARY KEY (`ip_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_kode`);

--
-- Indexes for table `medical_dose`
--
ALTER TABLE `medical_dose`
  ADD KEY `fm_fmd_id` (`fm_fmd_id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`mr_id`),
  ADD KEY `pd_id` (`pd_id`);

--
-- Indexes for table `medication_sheet`
--
ALTER TABLE `medication_sheet`
  ADD KEY `fm_id` (`fm_id`);

--
-- Indexes for table `patient_data`
--
ALTER TABLE `patient_data`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `patient_update`
--
ALTER TABLE `patient_update`
  ADD PRIMARY KEY (`pu_id`),
  ADD KEY `pd_id` (`pd_id`);

--
-- Indexes for table `physical_exam`
--
ALTER TABLE `physical_exam`
  ADD KEY `pn_id` (`pn_id`);

--
-- Indexes for table `progress_note`
--
ALTER TABLE `progress_note`
  ADD PRIMARY KEY (`pn_id`),
  ADD KEY `mr_id` (`mr_id`);

--
-- Indexes for table `review_of_system`
--
ALTER TABLE `review_of_system`
  ADD KEY `pn_id` (`pn_id`);

--
-- Indexes for table `social_history`
--
ALTER TABLE `social_history`
  ADD KEY `sf_id` (`sf_id`);

--
-- Indexes for table `summary_form`
--
ALTER TABLE `summary_form`
  ADD PRIMARY KEY (`sf_id`),
  ADD KEY `mr_id` (`mr_id`);

--
-- Indexes for table `surgical_history`
--
ALTER TABLE `surgical_history`
  ADD KEY `sf_id` (`sf_id`);

--
-- Indexes for table `transaksi_data`
--
ALTER TABLE `transaksi_data`
  ADD PRIMARY KEY (`td_kode`),
  ADD KEY `pd_id` (`pd_id`);

--
-- Indexes for table `transaksi_data_detail`
--
ALTER TABLE `transaksi_data_detail`
  ADD PRIMARY KEY (`tdd_id`),
  ADD KEY `td_kode` (`td_kode`);

--
-- Indexes for table `vital_signs`
--
ALTER TABLE `vital_signs`
  ADD KEY `pn_id` (`pn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_data`
--
ALTER TABLE `employee_data`
  MODIFY `ed_nip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flowsheet_medication`
--
ALTER TABLE `flowsheet_medication`
  MODIFY `fm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flowsheet_medication_detail`
--
ALTER TABLE `flowsheet_medication_detail`
  MODIFY `fm_fmd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_obat`
--
ALTER TABLE `inventaris_obat`
  MODIFY `ib_kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_peralatan`
--
ALTER TABLE `inventaris_peralatan`
  MODIFY `ip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `mr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_data`
--
ALTER TABLE `patient_data`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patient_update`
--
ALTER TABLE `patient_update`
  MODIFY `pu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progress_note`
--
ALTER TABLE `progress_note`
  MODIFY `pn_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `summary_form`
--
ALTER TABLE `summary_form`
  MODIFY `sf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_data`
--
ALTER TABLE `transaksi_data`
  MODIFY `td_kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_data_detail`
--
ALTER TABLE `transaksi_data_detail`
  MODIFY `tdd_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
