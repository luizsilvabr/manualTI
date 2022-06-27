-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 27-Jun-2022 às 15:23
-- Versão do servidor: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manualTI`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `manual`
--

CREATE TABLE `manual` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `criadoPor` varchar(255) NOT NULL,
  `items` longtext NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `manual`
--

INSERT INTO `manual` (`id`, `titulo`, `subtitulo`, `criadoPor`, `items`, `data`) VALUES
(2, 'Como Configurar VPN', 'Manual de como configurar a VPN da Desktop', 'Administrador TI', '<h2 style="text-align: center; margin-bottom: 15px;"><b>Primeiro Passo</b></h2><p style="margin-bottom: 15px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean hendrerit auctor felis, vitae egestas dui placerat non. Cras ut viverra urna. Proin ultricies vel ante et tristique. In volutpat, odio ac rutrum suscipit, libero mi hendrerit ex, ac lacinia est dui nec nulla. Maecenas et quam ac lectus dignissim scelerisque. Phasellus laoreet nisi et lorem pulvinar, a viverra dui cursus. Vestibulum commodo mi a libero blandit, a ornare ipsum imperdiet. Nulla at iaculis neque. In tellus tortor, rutrum at sapien vitae, euismod facilisis mauris. Donec commodo eros sed justo suscipit tincidunt. Ut et sem mollis, gravida urna sed, dictum massa. Maecenas a lacus vitae nunc posuere pretium. Suspendisse nec enim id metus commodo gravida ac non nisi. Vivamus a ex pellentesque, vehicula erat eget, consequat nunc. Donec at aliquet nisl.</p><p style="margin-bottom: 15px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Sed congue lorem velit, id finibus arcu mollis et. Vestibulum sodales urna lacus, et ultricies lacus aliquet in. Nullam bibendum fringilla nulla sed laoreet. Aenean efficitur felis et blandit auctor. Donec vel mi ac massa interdum vehicula ut eget nisi. Cras ac egestas dolor, at volutpat nulla. Donec elit ante, pharetra eget rhoncus commodo, vulputate in metus. Aenean diam odio, placerat cursus diam eu, blandit finibus metus. Vivamus vitae enim a ante lacinia rhoncus id eget diam. Vivamus et luctus ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras id arcu ut metus lobortis malesuada eget id arcu. Donec gravida dapibus commodo. Fusce ullamcorper posuere eleifend. Proin fringilla tempus velit eget pulvinar.</p>', '2022-06-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `nome`, `sobrenome`) VALUES
(1, 'admin', '251e5419a601ce9050671367e3d9efb8', 'Administrador', 'TI'),
(3, 'luiz', 'c2e86bec881b41a46a27deceefc4abab', 'Luíz Felipe', 'Lopes da Silva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manual`
--
ALTER TABLE `manual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manual`
--
ALTER TABLE `manual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
