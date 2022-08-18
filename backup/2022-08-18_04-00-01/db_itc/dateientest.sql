
DROP TABLE IF EXISTS itc_skills;

DROP TABLE IF EXISTS itc_translator;
DROP TABLE IF EXISTS itc_auftrag;
DROP TABLE IF EXISTS itc_dateien;
DROP TABLE IF EXISTS itc_uebersetzer_af;
DROP TABLE IF EXISTS itc_dolmetscher_af;
DROP TABLE IF EXISTS itc_kunden;
DROP TABLE IF EXISTS itc_adresse;

DROP TABLE IF EXISTS itc_sprachen;

CREATE TABLE itc_uebersetzer_af(
    id INT NOT NULL AUTO_INCREMENT,
    kunden_id INT,
    aufklaerung VARCHAR(255),
    namen_aufklaerung VARCHAR(255),
    PRIMARY KEY (id)
);


CREATE TABLE itc_dateien(
    id INT NOT NULL,
    anfrage_id INT,
    datei_name VARCHAR(255),  
    PRIMARY KEY (id)
    );
