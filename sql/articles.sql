CREATE TABLE articles
(
    id INT(16) unsigned NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    intro TEXT NOT NULL,
    text TEXT NOT NULL,
    date INT(32) NOT NULL,
    author VARCHAR(32) NOT NULL
);
CREATE UNIQUE INDEX id ON articles (id);