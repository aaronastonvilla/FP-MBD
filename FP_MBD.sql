CREATE TABLE event_login(
  el_id INT NOT NULL PRIMARY KEY,
  el_user VARCHAR(30),
  el_pwd VARCHAR(30)
);

-- drop table `event`;
CREATE TABLE `event`(
  e_id INT NOT NULL PRIMARY KEY,
  el_id INT,
  e_nama VARCHAR(100),
  e_lokasi VARCHAR(100),
  e_kota VARCHAR(30),
  e_telp VARCHAR(20),
  e_email VARCHAR(40),  
  e_tglmulai DATE,
  e_tglselesai DATE,
  e_jam TIME,
  e_deskripsi VARCHAR(500),
  FOREIGN KEY (el_id) REFERENCES event_login(el_id)
);
 
-- drop table stand_event;
CREATE TABLE stand_event(
  s_id INT NOT NULL PRIMARY KEY,
  e_id INT,
  s_panjang FLOAT,
  s_lebar FLOAT,
  s_harga INT,
  s_jumlah INT,
  s_fasilitas VARCHAR(500),
  FOREIGN KEY (e_id) REFERENCES `event`(e_id)
);


CREATE TABLE tenant_login(
  tl_id INT NOT NULL PRIMARY KEY,
  tl_user VARCHAR(30),
  tl_pwd VARCHAR(30)
);

-- drop table tenant;
CREATE TABLE tenant(
  t_id INT NOT NULL PRIMARY KEY,
  tl_id INT,
  t_nama VARCHAR(100),
  t_ktp VARCHAR(30),
  t_kota VARCHAR(30),
  t_telp VARCHAR(20),
  t_email VARCHAR(40),
  t_deskripsi VARCHAR(500),
  FOREIGN KEY (tl_id) REFERENCES tenant_login(tl_id)
);

-- DROP TABLE request_booking;
CREATE TABLE request_booking(
  b_id INT NOT NULL PRIMARY KEY,
  t_id INT,
  s_id INT,
  b_waktu TIMESTAMP,
  b_status INT,
  FOREIGN KEY (t_id) REFERENCES tenant(t_id),
  FOREIGN KEY (s_id) REFERENCES stand_event(s_id)
);

-- drop table feedback;
CREATE TABLE feedback(
  f_id INT NOT NULL PRIMARY KEY,
  t_id INT,
  e_id INT,
  f_nilai INT,
  f_komentar VARCHAR(300),
  FOREIGN KEY (t_id) REFERENCES tenant(t_id),
  FOREIGN KEY (e_id) REFERENCES `event`(e_id)
);

-- delete from event_login;
INSERT INTO EVENT_LOGIN VALUES(1,'aldinata','12345');
INSERT INTO EVENT_LOGIN VALUES(2,'aufa','112233');
INSERT INTO EVENT_LOGIN VALUES(3,'schematics','revolusi');

DELETE FROM `event`;
INSERT INTO `EVENT` VALUES(1,1, 'Pasar Jumat','ITS Surabaya', 'Surabaya', '0314455678', 'pasjum@itssurabaya.com','2018/01/22','2018/01/22','09:00','Pasar Jumat adalah kegiatan tahunan yang diselenggarakan oleh ITS Surabaya yang bertujuan untuk mencari makanan dan minuman enak tetapi murah dan berkualitas untuk mahasiswa di ITS.');
INSERT INTO `EVENT` VALUES(2,2, 'Festival Sepeda', 'Grand City Convex', 'Jakarta', '085790337272', 'mail@gmail.com', '2018/01/06', '2018/01/07', '08:00', 'Event atau festival sepeda Onthel selalu menarik perhatian masyarakat untuk hadir. Di setiap acara Onthel ternyata ada hal-hal unik dan seru.');
INSERT INTO `EVENT` VALUES(3,2, 'Lomba Balap Karung', 'Lapangan Balai Kota', 'Jambangan', '085790337272', 'mail@yahoo.co.id', '2018/04/12','2018/04/15', '08:00', 'Balap karung adalah salah satu lomba tradisional yang populer pada hari kemerdekaan Indonesia. Sejumlah peserta diwajibkan memasukkan bagian bawah badannya ke dalam karung kemudian berlomba sampai ke garis akhir.');
INSERT INTO `EVENT` VALUES(4,3, 'Reeva', 'Graha ITS', 'Surabaya', '08123400229', 'schematics@gmail.com', '2018/04/15','2018/04/15', '18:00', 'Konser terbesar dan paling meriah di Surabaya');
INSERT INTO `EVENT` VALUES(5,3, 'NST', 'Balai Budaya', 'Surabaya', '08123400229', 'schematics@gmail.com', '2018/03/15','2018/03/15', '10:00', 'Seminar terbesar dan paling meriah di Surabaya');
INSERT INTO `EVENT` VALUES(6,3, 'NLC', 'Graha ITS', 'Surabaya', '08123400229', 'schematics@gmail.com', '2018/03/20','2018/03/21', '08:00', 'Lomba logika terbesar dan paling meriah untuk seluruh siswa SMA/MA atau sederajat di seluruh Indonesia');
INSERT INTO `EVENT` VALUES(7,3, 'NPC', 'Graha ITS', 'Surabaya', '08123400229', 'schematics@gmail.com', '2018/04/21','2018/04/21', '08:00', 'Lomba pemrograman terbesar dan paling meriah di Indonesia');

-- delete from stand_event;
INSERT INTO STAND_EVENT VALUES(1,1,5.0,6.0,50000,10,'1 meja, 2 kursi, tenda');
INSERT INTO STAND_EVENT VALUES(2,2,8.0,10.0,150000,7,'tenda, 4 kursi, 1 meja, 1 layar LED');
INSERT INTO STAND_EVENT VALUES(3,3,4.0,4.0,40000,10,'1 meja, 2 kursi');
INSERT INTO STAND_EVENT VALUES(4,4,8.0,4.0,100000,10,'1 meja, 2 kursi, tenda');
INSERT INTO STAND_EVENT VALUES(5,4,8.0,6.0,150000,7,'1 meja, 2 kursi, tenda');
INSERT INTO STAND_EVENT VALUES(6,5,4.0,5.0,50000,10,'1 meja, 2 kursi, tenda');
INSERT INTO STAND_EVENT VALUES(7,5,6.0,5.0,75000,7,'1 meja, 2 kursi, tenda');
INSERT INTO STAND_EVENT VALUES(8,6,4.0,3.0,50000,10,'1 meja, 1 kursi, tenda');
INSERT INTO STAND_EVENT VALUES(9,7,4.0,3.0,50000,10,'1 meja, 1 kursi, tenda');

-- delete from tenant_login;
INSERT INTO tenant_login VALUES(1,'rafi','rafi');
INSERT INTO tenant_login VALUES(2,'bambang','bambang');
INSERT INTO tenant_login VALUES(3,'budi','budi');

-- delete from tenant;
INSERT INTO `TENANT` VALUES(1,1,'babarafi','123456789', 'Surabaya', '0314455678', 'babarafi@gmail.com','Kebab Turki khas Babarafi');
INSERT INTO `TENANT` VALUES(2,2,'Jus Buah','223456789', 'Surabaya', '0315533678', 'bambang@gmail.com','Menyediakan jus dari berbagai jenis buah segar');
INSERT INTO `TENANT` VALUES(3,2,'Pasco','223456789', 'Surabaya', '0315533678', 'bambang@gmail.com','Passion of Chocolate, menenangkan');
INSERT INTO `TENANT` VALUES(4,3,'Teh Poci','423456789', 'Surabaya', '0314545678', 'budi@gmail.com','Teh Poci khas Indonesia memberikan aroma teh tradisional');
INSERT INTO `TENANT` VALUES(5,3,'Banachip','423456789', 'Surabaya', '0314545678', 'budi@gmail.com','Olahan Pisang yang memiliki varian rasa modern');

-- delete from request_booking;
-- 0 belum dikonfirmasi, 1 diterima, 2 ditolak
INSERT INTO request_booking VALUES(1,1,1,NOW(),1);
INSERT INTO request_booking VALUES(2,1,2,NOW(),0);
INSERT INTO request_booking VALUES(3,1,3,NOW(),1);
INSERT INTO request_booking VALUES(4,2,1,NOW(),0);
INSERT INTO request_booking VALUES(5,2,4,NOW(),1);
INSERT INTO request_booking VALUES(6,2,5,NOW(),1);
INSERT INTO request_booking VALUES(7,3,3,NOW(),2);
INSERT INTO request_booking VALUES(8,3,6,NOW(),1);
INSERT INTO request_booking VALUES(9,4,5,NOW(),1);
INSERT INTO request_booking VALUES(10,4,6,NOW(),1);
INSERT INTO request_booking VALUES(11,4,7,NOW(),1);
INSERT INTO request_booking VALUES(12,5,7,NOW(),0);
INSERT INTO request_booking VALUES(13,5,8,NOW(),0);
INSERT INTO request_booking VALUES(14,5,9,NOW(),1);

-- delete from feedback;
INSERT INTO FEEDBACK VALUES(1,1,1,4,'bagus dan keren');
INSERT INTO FEEDBACK VALUES(2,1,3,4,'bagus, memuaskan');
INSERT INTO FEEDBACK VALUES(3,2,4,5,'Gila, rame pengunjung');
INSERT INTO FEEDBACK VALUES(4,2,4,5,'rame pembeli, tempat luas');
INSERT INTO FEEDBACK VALUES(5,3,5,2,'Kotor');
INSERT INTO FEEDBACK VALUES(6,4,4,3,'lumayan lah, alhamdulillah');
INSERT INTO FEEDBACK VALUES(7,4,5,4,'tempat bersih dan rapi, sip');
INSERT INTO FEEDBACK VALUES(8,4,5,5,'panitianya sigap, fasilitas memuaskan');
INSERT INTO FEEDBACK VALUES(9,5,7,2,'mahal harganya, pengunjung kurang ramai');
INSERT INTO FEEDBACK VALUES(10,5,6,2,'sepi acaranya');


-- Query Aldinata
-- View
SELECT e.e_nama, e.e_lokasi, e.e_tglmulai, e.e_tglselesai, e.e_jam, SUM(s.s_jumlah), MIN(s.s_harga), MAX(s.s_harga)
FROM `event` e JOIN stand_event s ON e.e_id = s.e_id
GROUP BY e.e_nama
ORDER BY e.e_id;
-- Function
DELIMITER $$
CREATE OR REPLACE FUNCTION jumlah_stand(nama_event VARCHAR(100))
    RETURNS INT
    DETERMINISTIC
    BEGIN
    DECLARE jml INT;
    SELECT SUM(s.s_jumlah) AS jml_stand INTO jml
    FROM stand_event s JOIN `event` e ON e.e_id = s.e_id
    WHERE e.e_nama = nama_event
    GROUP BY e.e_nama;
    RETURN jml;
    END$$
DELIMITER $$
SELECT DISTINCT jumlah_stand('NLC') AS `jumlah stand`;

-- Triger
-- drop table log_event;
CREATE TABLE log_event(
  e_id INT,
  el_id INT,
  e_nama VARCHAR(100),
  e_lokasi VARCHAR(100),
  e_kota VARCHAR(30),
  e_telp VARCHAR(20),
  e_email VARCHAR(40),  
  e_tglmulai DATE,
  e_tglselesai DATE,
  e_jam TIME,
  e_deskripsi VARCHAR(500),
  tanggal_log	DATE,
  status_log	VARCHAR(10)
);
-- delete from log_event;

DELIMITER$$
CREATE OR REPLACE TRIGGER catat_insert_event
AFTER INSERT ON `event`
FOR EACH ROW
BEGIN
  INSERT INTO log_event VALUES (new.e_id, new.el_id, new.e_nama, new.e_lokasi, new.e_kota, new.e_telp, new.e_email, new.e_tglmulai, new.e_tglselesai, new.e_jam, new.e_deskripsi, SYSDATE(), 'INSERT');
END$$
DELIMITER$$

DELIMITER$$
CREATE OR REPLACE TRIGGER catat_update_event
AFTER UPDATE ON `event`
FOR EACH ROW
BEGIN
  INSERT INTO log_event VALUES (old.e_id, old.el_id, old.e_nama, old.e_lokasi, old.e_kota, old.e_telp, old.e_email, old.e_tglmulai, old.e_tglselesai, old.e_jam, old.e_deskripsi, SYSDATE(), 'PRE-UPDATE');
  INSERT INTO log_event VALUES (old.e_id, old.el_id, new.e_nama, new.e_lokasi, new.e_kota, new.e_telp, new.e_email, new.e_tglmulai, new.e_tglselesai, new.e_jam, new.e_deskripsi, SYSDATE(), 'UPDATED');
END$$
DELIMITER$$

DELIMITER$$
CREATE OR REPLACE TRIGGER catat_delete_event
AFTER DELETE ON `event`
FOR EACH ROW
BEGIN
  INSERT INTO log_event VALUES (old.e_id, old.el_id, old.e_nama, old.e_lokasi, old.e_kota, old.e_telp, old.e_email, old.e_tglmulai, old.e_tglselesai, old.e_jam, old.e_deskripsi, SYSDATE(), 'DELETED');
END$$
DELIMITER$$
DROP

INSERT INTO `event` VALUES(8,3, 'RoboComp', 'Robotika ITS', 'Surabaya', '08123400229', 'schematics@gmail.com', '2018/07/20','2018/07/21', '08:00', 'Lomba robot terbesar dan paling meriah di Indonesia');

UPDATE `event`
SET e_jam = '09:30'
WHERE e_id=8;

DELETE FROM `event` WHERE e_id=8;

-- Procedure
DELIMITER$$
CREATE OR REPLACE PROCEDURE diskon_harga_stand(nama_event VARCHAR(100))
BEGIN
  DECLARE id_event INT;
-- nyari id event dari stand yg akan diberi diskon
  SELECT s.e_id AS id INTO id_event
  FROM stand_event s JOIN `event` e ON e.e_id = s.e_id
  WHERE e.e_nama = nama_event;
-- beri diskon
  UPDATE stand_event
  SET s_harga = s_harga *0.9 
  WHERE e_id = id_event;
END$$
DELIMITER$$
-- delete from stand_event where s_id=10;
INSERT INTO STAND_EVENT VALUES(10,8,5.0,4.0,150000,10,'1 meja, 1 kursi, tenda');
CALL diskon_harga_stand('RoboComp');
-- index
CREATE INDEX idx_event
ON `event`(e_nama);
-- join
SELECT DISTINCT t.t_nama
FROM tenant t JOIN request_booking b ON b.t_id = t.t_id
     JOIN stand_event s ON b.s_id = s.s_id
     JOIN `event` e ON s.e_id = e.e_id
WHERE b.b_status=1 AND e.e_nama = 'NST';
-- cursor
DELIMITER$$
CREATE OR REPLACE PROCEDURE update_jumlah_stand(id_stand INT)
BEGIN
  UPDATE stand_event
  SET s_jumlah = s_jumlah - 1 
  WHERE s_id = id_stand;
END$$
DELIMITER$$
CALL update_jumlah_stand(10)


-- Query Aufa
