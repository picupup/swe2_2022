
DROP TABLE IF EXISTS itc_tester;

CREATE TABLE IF NOT EXISTS itc_tester (
    id INT NOT NULL AUTO_INCREMENT,
    sprache varchar(255),
    variante INT,
    PRIMARY KEY (id)
 );

insert INTO itc_tester(sprache, variante) values("englisch", 3);


SELECT * FROM itc_tester;

