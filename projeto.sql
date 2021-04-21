-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2020 às 03:58
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_turma`
--

CREATE TABLE `alunos_turma` (
  `id` int(11) NOT NULL,
  `cod_turma` int(11) DEFAULT NULL,
  `cod_aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos_turma`
--

INSERT INTO `alunos_turma` (`id`, `cod_turma`, `cod_aluno`) VALUES
(1, 2, 1),
(2, 3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id` int(11) NOT NULL,
  `cod_aluno` int(11) DEFAULT NULL,
  `cod_prof` int(11) DEFAULT NULL,
  `cod_disciplina` int(11) DEFAULT NULL,
  `nota1` double DEFAULT NULL,
  `nota2` double DEFAULT NULL,
  `nota_final` double DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id`, `cod_aluno`, `cod_prof`, `cod_disciplina`, `nota1`, `nota2`, `nota_final`, `frequencia`) VALUES
(2, 1, 17, 9, 10, 5, 7.5, 80),
(3, 20, 18, 8, 4, 10, 7, 70);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_aluno`
--

CREATE TABLE `cad_aluno` (
  `mat` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `end` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `nome_curso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_aluno`
--

INSERT INTO `cad_aluno` (`mat`, `nome`, `end`, `tel`, `nome_curso`) VALUES
(1, 'Chard', 'rua mota ', 123, 'ADS'),
(2, 'Mendonça', 'rua mota ', 1234, 'ADS'),
(3, 'Luciana', 'Rua 1 ', 123456, 'ADS'),
(4, 'Sandro', 'rua mota ', 1234, 'ADS'),
(5, 'Novais', 'Rua 1', 1234, 'ADS'),
(20, 'Gabriel', 'rua mota ', 123, 'ADS'),
(22, 'Luciene', 'Setor Sul', 789456, 'informática'),
(23, '', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_curso`
--

CREATE TABLE `cad_curso` (
  `id` int(11) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `coordenador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_curso`
--

INSERT INTO `cad_curso` (`id`, `curso`, `coordenador`) VALUES
(3, 'ADS', 'Viviane'),
(4, 'Engenharia Civil', 'Vilma'),
(5, 'Técnico em Informática', 'Alexandre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_disciplina`
--

CREATE TABLE `cad_disciplina` (
  `cod` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `carga` varchar(5) NOT NULL,
  `ementa` varchar(200) NOT NULL,
  `biblio` varchar(255) NOT NULL,
  `pre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_disciplina`
--

INSERT INTO `cad_disciplina` (`cod`, `nome`, `carga`, `ementa`, `biblio`, `pre`) VALUES
(1, 'Projeto Integrador', '54', 'Integrar disciplinas', 'Web1', 'projeto web '),
(8, 'Redes', '54', 'Redes', 'redes', 'redes'),
(9, 'Banco de Dados II', '54', 'Banco de dados relacionais', 'PostegreSQL', 'Banco de Dados I');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_prof`
--

CREATE TABLE `cad_prof` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `titulacao_maxima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_prof`
--

INSERT INTO `cad_prof` (`id`, `nome`, `endereco`, `telefone`, `titulacao_maxima`) VALUES
(16, 'chard', 'rua mota ', '123', 'Especialização'),
(17, 'Luciana', 'rua mota ', '123', 'Mestrado'),
(18, 'Moreira', 'rua mota ', '123', 'Doutorado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso_prof`
--

CREATE TABLE `curso_prof` (
  `id` int(11) NOT NULL,
  `cod_prof` int(11) DEFAULT NULL,
  `cod_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso_prof`
--

INSERT INTO `curso_prof` (`id`, `cod_prof`, `cod_curso`) VALUES
(4, 16, 3),
(5, 16, 5),
(6, 17, 3),
(7, 17, 4),
(8, 17, 5),
(9, 18, 3),
(10, 18, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dias_horario`
--

CREATE TABLE `dias_horario` (
  `id` int(11) NOT NULL,
  `cod_turma` int(11) DEFAULT NULL,
  `dia` varchar(30) DEFAULT NULL,
  `horario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dias_horario`
--

INSERT INTO `dias_horario` (`id`, `cod_turma`, `dia`, `horario`) VALUES
(4, 2, '12', '20:00'),
(5, 3, '10', '19:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`) VALUES
(1, 'Chard', '$2y$10$ZvLDatGIknuxxEa9B.nYJe42e8cDUl0cZGVBON90M363wxetHPM7C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof_turma`
--

CREATE TABLE `prof_turma` (
  `id` int(11) NOT NULL,
  `cod_turma` int(11) DEFAULT NULL,
  `cod_prof` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prof_turma`
--

INSERT INTO `prof_turma` (`id`, `cod_turma`, `cod_prof`) VALUES
(2, 2, 16),
(3, 2, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `cod_curso` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `cod_curso`, `ano`, `semestre`) VALUES
(2, 3, 2020, 2),
(3, 4, 2020, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_disciplina`
--

CREATE TABLE `turma_disciplina` (
  `id` int(11) NOT NULL,
  `cod_turma` int(11) DEFAULT NULL,
  `cod_disciplina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma_disciplina`
--

INSERT INTO `turma_disciplina` (`id`, `cod_turma`, `cod_disciplina`) VALUES
(2, 2, 0),
(3, 2, 1),
(4, 2, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos_turma`
--
ALTER TABLE `alunos_turma`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cad_aluno`
--
ALTER TABLE `cad_aluno`
  ADD PRIMARY KEY (`mat`);

--
-- Índices para tabela `cad_curso`
--
ALTER TABLE `cad_curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cad_disciplina`
--
ALTER TABLE `cad_disciplina`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `cad_prof`
--
ALTER TABLE `cad_prof`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso_prof`
--
ALTER TABLE `curso_prof`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dias_horario`
--
ALTER TABLE `dias_horario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `prof_turma`
--
ALTER TABLE `prof_turma`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turma_disciplina`
--
ALTER TABLE `turma_disciplina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos_turma`
--
ALTER TABLE `alunos_turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cad_aluno`
--
ALTER TABLE `cad_aluno`
  MODIFY `mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `cad_curso`
--
ALTER TABLE `cad_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cad_disciplina`
--
ALTER TABLE `cad_disciplina`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `cad_prof`
--
ALTER TABLE `cad_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `curso_prof`
--
ALTER TABLE `curso_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `dias_horario`
--
ALTER TABLE `dias_horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `prof_turma`
--
ALTER TABLE `prof_turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `turma_disciplina`
--
ALTER TABLE `turma_disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
