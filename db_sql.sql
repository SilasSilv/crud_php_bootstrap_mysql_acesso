CREATE DATABASE "my_keys";

USE my_keys;

CREATE TABLE usuarios(
  id_user INT(10) NOT NULL,
  login VARCHAR(34),
  senha VARCHAR(34)
);

CREATE TABLE sistemas(
  id INT(10) PRIMARY KEY,
  id_usuario_fk INT(10) NOT NULL,
  name VARCHAR(34),
  password VARCHAR(34),
  created datatime,
  modified datatime

);

ALTER TABLE usuarios  MODIFY id_user int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE sistemas  MODIFY id int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE sistemas
ADD FOREIGN KEY (id_usuario_fk) REFERENCES usuarios(id_user);
