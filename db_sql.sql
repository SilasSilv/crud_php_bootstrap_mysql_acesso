CREATE DATABASE "crud_php_acesso";

USE crud_php_acesso;

CREATE TABLE usuarios(
  id_usuario INT(10) NOT NULL,
  login VARCHAR(34),
  senha VARCHAR(34)
);

CREATE TABLE sistemas(
  id INT(10) PRIMARY KEY,
  id_usuario_fk INT(10) NOT NULL,
  senha_sistema VARCHAR(34),
  sistema_ds VARCHAR(34) 
);

ALTER TABLE usuarios  MODIFY id_usuario int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE sistemas  MODIFY id int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE sistemas
ADD FOREIGN KEY (id_usuario_fk) REFERENCES usuarios(id_usuario);
