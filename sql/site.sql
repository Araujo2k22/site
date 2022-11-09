CREATE DATABASE site;
USE site;

CREATE TABLE usuario (
    codUsuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(50),
    nomeUsuario VARCHAR(20),
    email VARCHAR(60),
    telefone INT(11),
    senha VARCHAR(20),
    score INT,
    habilitado BOOLEAN
);

CREATE TABLE video (
    codVideo INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    titulo VARCHAR(50),
    autor VARCHAR(50),
    dataPubli DATE,
    filePath VARCHAR(255),
    private BOOLEAN,
    fk_Usuario_codUsuario INT,
    fk_materia_codMateria INT
);

CREATE TABLE materia (
    codMateria INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(30),
    assunto VARCHAR(255)
);

CREATE TABLE comentario_comenta (
    mensagem VARCHAR(255),
    dataHora DATE,
    fk_video_codVideo INT,
    fk_usuario_codUsuario INT
);

CREATE TABLE avalia (
    fk_video_codVideo INT,
    fk_usuario_codUsuario INT,
    nome VARCHAR(255),
    denuncia VARCHAR(255)
);

CREATE TABLE denuncia (
    fk_usuario_codUsuario INT,
    motivo VARCHAR(255),
    descricao VARCHAR(255),
    dataHora DATE
);
 
ALTER TABLE video ADD CONSTRAINT FK_video_2
    FOREIGN KEY (fk_usuario_codUsuario)
    REFERENCES usuario (codUsuario)
    ON DELETE RESTRICT;
 
ALTER TABLE video ADD CONSTRAINT FK_video_3
    FOREIGN KEY (fk_materia_codMateria)
    REFERENCES materia (codMateria)
    ON DELETE CASCADE;
 
ALTER TABLE comentario_comenta ADD CONSTRAINT FK_comentario_comenta_1
    FOREIGN KEY (fk_video_codVideo)
    REFERENCES video (codVideo);
 
ALTER TABLE comentario_comenta ADD CONSTRAINT FK_comentario_comenta_2
    FOREIGN KEY (fk_usuario_codUsuario)
    REFERENCES usuario (codUsuario);
 
ALTER TABLE avalia ADD CONSTRAINT FK_avalia_1
    FOREIGN KEY (fk_video_codVideo)
    REFERENCES video (codVideo)
    ON DELETE SET NULL;
 
ALTER TABLE avalia ADD CONSTRAINT FK_avalia_2
    FOREIGN KEY (fk_usuario_codUsuario)
    REFERENCES usuario (codUsuario)
    ON DELETE SET NULL;
 
ALTER TABLE denuncia ADD CONSTRAINT FK_denuncia_1
    FOREIGN KEY (fk_usuario_codUsuario)
    REFERENCES usuario (codUsuario)
    ON DELETE SET NULL;
    
insert into materia (nome, assunto) values ('Matemática','');
insert into materia  (nome, assunto) values('Português','');