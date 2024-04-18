CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  first_name varchar(255),
  last_name varchar(255),
  email varchar(255),
  document varchar(11)
);

INSERT INTO users (first_name, last_name, email, document) VALUES
  ('Robson', 'Santos', 'robson1@email.com.br', NULL),
  ('Alexandre', 'Santos', 'alexandre27@email.com.br', NULL),
  ('Willian', 'Santos', 'willian28@email.com.br', NULL),
  ('Eleno', 'Santos', 'eleno29@email.com.br', NULL),
  ('Lucas', 'Santos', 'lucas30@email.com.br', NULL),
  ('Mateus', 'Santos', 'mateus31@email.com.br', NULL),
  ('João', 'Santos', 'joão32@email.com.br', NULL),
  ('Felipe', 'Santos', 'felipe33@email.com.br', NULL),
  ('Anderson', 'Santos', 'anderson34@email.com.br', NULL),
  ('Elton', 'Santos', 'elton35@email.com.br', NULL),
  ('Leonardo', 'Santos', 'leonardo36@email.com.br', NULL);

SELECT * FROM users

CREATE TABLE users_address (
  user_id INT REFERENCES users(id) ON DELETE CASCADE,
  id SERIAL PRIMARY KEY,
  street varchar(255),
  number varchar(255),
  complement varchar(255)
);

INSERT INTO users_address (user_id, street, number, complement) VALUES
  (1, 'rua manoel pedro vieira, 810', '810', 'casa 1'),
  (2, 'paraguai', '2041', 'casa 1'),
  (3, 'emilio daroz', '107', 'casa 1'),
  (4, 'rua lavinia moreira da silva', '145', 'casa 1'),
  (5, 'padre anchieta', '121', 'casa 1'),
  (6, 'rua amoroso costa', '254', 'casa 1'),
  (7, 'alaor martins', '312', 'casa 1'),
  (8, 'rua das violetas', '330', 'casa 1'),
  (9, 'francisco carlos', '105', 'casa 1'),
  (10, 'torino', '95', 'casa 1'),
  (11, 'rua erotidas', '64', 'casa 1');

SELECT * FROM users_address


SELECT first_name, last_name FROM users WHERE email = 'allan@developer.com.br'
INSERT INTO users  (first_name, last_name, email, document) VALUES ('Allan', 'Rodrigues',' allan@email.com', '2343243')
UPDATE users SET email = 'allan@developer.com.br', document = '1233333333' WHERE first_name = 'Allan'