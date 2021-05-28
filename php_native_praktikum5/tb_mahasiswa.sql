
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `praktikum5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `nbi` int(10) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `jurusan` char(10) DEFAULT NULL,
  `jeniskelamin` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nbi`, `nama`, `jurusan`, `jeniskelamin`) VALUES
(12345, 'abcdr', 'Teknik Ars', 'pria'),
(12356, 'toha', 'Teknik Mes', 'pria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
 ADD PRIMARY KEY (`nbi`);
