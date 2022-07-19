--CREATE DATABASE IF NOT EXISTS itc_db;
--Über all wo FOREIGN KEY steht solte man die tablle zuerst löschen, bevor man seine Eltern löscht.
--Immer da wo eine Erweiterungstabelle wie adresse angeliegt wird sollte auch die Foreign key stehen, weil dadurch die Haupt Tabelle gelöscht werden kann, wenn man die neben Tabelle durch foreign key on delete CASCADE automatisch löschen.

DROP TABLE IF EXISTS itc_skills;


DROP TABLE IF EXISTS itc_dolmetscher_auf;
DROP TABLE IF EXISTS itc_uebersetzer_auf;
DROP TABLE IF EXISTS itc_translator;

DROP TABLE IF EXISTS itc_dateien;
DROP TABLE IF EXISTS itc_uebersetzer_anf;
DROP TABLE IF EXISTS itc_dolmetscher_anf;
DROP TABLE IF EXISTS itc_kunden;
DROP TABLE IF EXISTS itc_adresse;

DROP TABLE IF EXISTS itc_sprachen;

--erstelle wenn die Tabelle nicht schon gibt.
--IF NOT EXISTS

CREATE TABLE  itc_sprachen (
    id INT NOT NULL AUTO_INCREMENT,
    sprache TEXT,
    variante INT,
    PRIMARY KEY (id)
);

CREATE TABLE itc_adresse (
    id INT NOT NULL AUTO_INCREMENT,
    strasse  TEXT,
    hausnr TEXT,
    plz TEXT,
    ort TEXT,
    PRIMARY KEY (id)
);

CREATE TABLE itc_translator (
    id INT NOT NULL AUTO_INCREMENT,
    vorname  TEXT,
    nachname TEXT,
    geschlecht TEXT,
    gbdatum TEXT,
    staatsang TEXT,
    gbort TEXT,
    beruf TEXT,
    adresse INT,
    PRIMARY KEY (id),
    FOREIGN KEY (adresse) REFERENCES itc_adresse(id)
);

--TODO: NEU Sortieren.

CREATE TABLE itc_skills (
    id INT NOT NULL AUTO_INCREMENT,
    translator_id INT,
    sprach_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY  (translator_id) REFERENCES itc_translator(id),
    FOREIGN KEY  (sprach_id) REFERENCES itc_sprachen(id) 
);


CREATE TABLE itc_kunden (
    id INT NOT NULL AUTO_INCREMENT,
    vorname  TEXT,
    nachname TEXT,
    geschlecht TEXT,
    gbdatum TEXT,
    art TEXT,
    adresse INT,
    PRIMARY KEY (id),
    FOREIGN KEY (adresse) REFERENCES itc_adresse(id)
);


--TODO:Adresse in der jeweiligen Eintrag der Kunden oder Translators einfügen.

CREATE TABLE itc_uebersetzer_anf(
    id INT NOT NULL AUTO_INCREMENT,
    kunden_id INT,
    aufklaerung TEXT,
    namen_aufklaerung TEXT,
    PRIMARY KEY (id),
    FOREIGN KEY (kunden_id) REFERENCES itc_kunden(id)
);

CREATE TABLE itc_dolmetscher_anf (
    id INT NOT NULL AUTO_INCREMENT,
    kunden_id INT,
    aufklaerung TEXT,
    datum_time_start DATETIME,
    datum_time_end DATETIME,
    ort TEXT,
    PRIMARY KEY (id),
    FOREIGN KEY  (kunden_id) REFERENCES itc_kunden(id)
);

CREATE TABLE itc_dolmetscher_auf (
    id INT NOT NULL AUTO_INCREMENT,
    kunden_id  INT,
    status INT,
    anmerkungen TEXT,
    translator_id INT,
    dol_anfrage_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (kunden_id) REFERENCES itc_kunden(id),
    FOREIGN KEY (dol_anfrage_id) REFERENCES itc_dolmetscher_anf (id),
    FOREIGN key (translator_id) REFERENCES itc_translator(id)
);


CREATE TABLE itc_uebersetzer_auf (
    id INT NOT NULL AUTO_INCREMENT,
    kunden_id  INT,
    status INT,
    anmerkungen TEXT,
    translator_id INT,
    ub_anfrage_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (kunden_id) REFERENCES itc_kunden(id),
    FOREIGN KEY (ub_anfrage_id) REFERENCES itc_uebersetzer_anf(id),
    FOREIGN key (translator_id) REFERENCES itc_translator(id)
);

CREATE TABLE itc_dateien (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    anfrage_id INT,
    datei_name TEXT,
    FOREIGN KEY (anfrage_id) REFERENCES itc_uebersetzer_anf(id)
);
