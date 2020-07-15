-- phpMyAdmin SQL Dump

--
-- Banco de dados: `XXXXXXXx`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_post`
--

CREATE TABLE `t_post` (
  `id` int(11) NOT NULL,
  `tema` varchar(20) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `id_user` int(11) NOT NULL,
  `apagado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_resp`
--

CREATE TABLE `t_resp` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `texto` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `apagado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `pass` varchar(20) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `apagado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_user`
--

INSERT INTO `t_user` (`id`, `nick`, `nome`, `email`, `data_nasc`, `pass`, `foto`, `apagado`) VALUES
XXXXXXXXXXXXx
--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_post`
--
ALTER TABLE `t_post`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_resp`
--
ALTER TABLE `t_resp`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_post`
--
ALTER TABLE `t_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `t_resp`
--
ALTER TABLE `t_resp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
