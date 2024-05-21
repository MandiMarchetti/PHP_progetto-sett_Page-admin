-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/05/2024 às 09:04
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pagina_admin`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sensitive_data`
--

CREATE TABLE `sensitive_data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sensitive_data`
--

INSERT INTO `sensitive_data` (`id`, `title`, `text`, `image`) VALUES
(11, 'Cachorro', 'I love it!', 'https://img.freepik.com/free-photo/little-labrador-retriever-playing-white-studio-background_155003-46342.jpg?t=st=1716229266~exp=1716232866~hmac=7fa2bdab88d980a6eb50aac09286d4e3f2e050c506c21323968c2ff00309b569&w=740'),
(12, 'Mais um cachorro!!!', 'Love you!!!', 'https://img.freepik.com/premium-photo/dog-sits-bench-park_357532-13202.jpg?w=360'),
(13, 'A cat', 'This is a cat!', 'https://img.freepik.com/free-photo/red-white-cat-i-white-studio_155003-13189.jpg?t=st=1716229658~exp=1716233258~hmac=399751b2e5514c493184632d36fe7cb5329053662d6a0caa7d8b2f0e2e3226e2&w=360'),
(14, 'Happy Dog', 'Hello, World!', 'https://img.freepik.com/free-photo/cute-dog-sleeping-ai-generated_23-2150651515.jpg?t=st=1716230161~exp=1716233761~hmac=9da7e6d28e909bb3f4884a220e517824964f1a4b87931cf336fb05c78a949686&w=740');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` smallint(255) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'amandathomaz', '654321');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sensitive_data`
--
ALTER TABLE `sensitive_data`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sensitive_data`
--
ALTER TABLE `sensitive_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
