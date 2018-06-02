-- View
SELECT e.e_nama, f.f_komentar
FROM `event` e JOIN feedback f ON e.e_id = f.e_id
GROUP BY e.e_nama;

-- Function
DELIMITER $$
CREATE OR REPLACE FUNCTION stand_delayed()
    RETURNS INT
    DETERMINISTIC
    BEGIN
    DECLARE jml INT;
    SELECT COUNT(t.t_nama) INTO jml
        FROM request_booking r JOIN tenant t ON t.t_id=r.t_id
        WHERE r.b_status=0;
    RETURN jml;
    END$$
DELIMITER $$
SELECT stand_delayed();

-- Triger
-- drop table log_event;
CREATE TABLE log_event(
  t_id INT,
  tl_id INT,
  t_nama VARCHAR(100),
  t_ktp VARCHAR(30),
  t_kota VARCHAR(30),
  t_telp VARCHAR(20),
  t_email VARCHAR(40),
  t_deskripsi VARCHAR(500),
  tanggal_log	DATE,
  status_log	VARCHAR(10)
);
-- delete from log_event;

DELIMITER$$
CREATE OR REPLACE TRIGGER catat_insert_event
AFTER INSERT ON `tenant`
FOR EACH ROW
BEGIN
  INSERT INTO log_event VALUES (new.t_id,
  new.tl_id,
  new.t_nama,
  new.t_ktp,
  new.t_kota,
  new.t_telp,
  new.t_email,
  new.t_deskripsi, SYSDATE(), 'INSERT');
END$$
DELIMITER$$

SELECT * FROM log_event

INSERT INTO `TENANT` VALUES(6,2,'ruajk cingur','4243456789', 'Surabaya', '03144553578', 'mail@rujakcingur.com','Rujak Cingur khas Babarafi');

UPDATE `event`
SET e_jam = '09:30'
WHERE e_id=8;

DELETE FROM `event` WHERE e_id=8;
SELECT * FROM  request_booking
-- Procedure
DELIMITER$$
CREATE OR REPLACE PROCEDURE denda_stand_tgl()
BEGIN
-- nyari id event dari stand yg akan diberi diskon

-- beri diskon
  UPDATE stand_event s
  SET s.s_harga = s.s_harga *1.3
  WHERE s.s_id IN (SELECT r.s_id AS tempid
  FROM TENANT t JOIN request_booking r ON t.t_id=r.t_id
  WHERE r.b_waktu BETWEEN '2018/06/12 00:00:00' AND '2018/06/18 00:00:00');
END$$
DELIMITER$$
-- delete from stand_event where s_id=10;
CALL denda_stand_tgl();
-- index
CREATE INDEX indeks_harga
ON `stand_event`(s_harga);


-- join
SELECT t.t_nama,COUNT(t.t_nama) AS jumlah
FROM feedback f JOIN tenant t ON f.t_id = t.t_id
     JOIN `event` e ON f.e_id = e.e_id
GROUP BY t.t_nama
ORDER BY jumlah DESC LIMIT 1;
-- cursor
DELIMITER$$
CREATE OR REPLACE PROCEDURE update_jumlah_stand();
BEGIN
  UPDATE stand_event s
  SET s.s_harga = s.s_harga * 0.75;
  WHERE s.s_id IN (SELECT r.s_id
    FROM TENANT t JOIN request_booking r ON t.t_id=r.t_id
    JOIN feedback f ON t.t_id = f.t_id
    WHERE f.f_nilai>3);
END$$
DELIMITER$$
CALL update_jumlah_stand();
