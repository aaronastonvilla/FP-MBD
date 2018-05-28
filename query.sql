CREATE TABLE `event`(
  e_id INT,
  e_name VARCHAR(100),
  e_lokasi VARCHAR(100),
  e_notelp VARCHAR(20),
  e_tglmulai DATE,
  e_tglselesai DATE,
  e_jam TIME,
  e_deskripsi VARCHAR(9999),
  e_email VARCHAR(99),
  PRIMARY KEY (e_id)
);

CREATE TABLE event_login(
  el_id INT,
  el_user VARCHAR(30),
  el_pwd VARCHAR(30),
  PRIMARY KEY (el_id)
);

CREATE TABLE stand_event(
  se_id INT,
  panjang_stand FLOAT,
  lebar_stand FLOAT,
  harga_sewa INT,
  jml_stand_tersedia INT,
  fasilitas VARCHAR(999),
  PRIMARY KEY (se_id)
);

CREATE TABLE request_booking(
  b_id INT,
  waktu_booking TIMESTAMP,
  STATUS SMALLINT,
  PRIMARY KEY (b_id)
);

CREATE TABLE tenant(
  t_id INT,
  t_name VARCHAR(99),
  t_noktp VARCHAR(99),
  t_alamat VARCHAR(999),
  t_asalkota VARCHAR(99),
  t_email VARCHAR(99),
  t_deskripsi VARCHAR(999),
  t_telp VARCHAR(99),
  PRIMARY KEY (t_id)
);

CREATE TABLE tenant_login(
  tl_id INT,
  tl_user VARCHAR(30),
  tl_pwd VARCHAR(30),
  PRIMARY KEY (tl_id)
);

CREATE TABLE feedback(
  id_feedback INT,
  komentar VARCHAR(999),
  nilai INT,
  PRIMARY KEY (id_feedback)
);

ALTER TABLE `event_login`
ADD e_id INT;

ALTER TABLE `event_login`
ADD FOREIGN KEY (e_id) REFERENCES `event`(e_id);

ALTER TABLE `event`
ADD el_id INT;

ALTER TABLE `event`
ADD FOREIGN KEY (el_id) REFERENCES event_login(el_id);

ALTER TABLE `event`
ADD id_feedback INT;

ALTER TABLE `event`
ADD FOREIGN KEY (id_feedback) REFERENCES feedback(id_feedback);

ALTER TABLE `event`
ADD t_id INT;

ALTER TABLE `event`
ADD FOREIGN KEY (t_id) REFERENCES tenant(t_id);

ALTER TABLE `stand_event`
ADD b_id INT;

ALTER TABLE `stand_event`
ADD FOREIGN KEY (b_id) REFERENCES request_booking(b_id);

ALTER TABLE `stand_event`
ADD e_id INT;

ALTER TABLE `stand_event`
ADD FOREIGN KEY (e_id) REFERENCES EVENT(e_id);

ALTER TABLE `request_booking`
ADD t_id INT;

ALTER TABLE `request_booking`
ADD FOREIGN KEY (t_id) REFERENCES tenant(t_id);

ALTER TABLE `request_booking`
ADD se_id INT;

ALTER TABLE `request_booking`
ADD FOREIGN KEY (se_id) REFERENCES stand_event(se_id);

ALTER TABLE `tenant`
ADD tl_id INT;

ALTER TABLE `tenant`
ADD FOREIGN KEY (tl_id) REFERENCES tenant_login(tl_id);

ALTER TABLE `tenant_login`
ADD t_id INT;

ALTER TABLE `tenant_login`
ADD FOREIGN KEY (t_id) REFERENCES tenant(t_id);

ALTER TABLE `feedback`
ADD e_id INT;

ALTER TABLE `feedback`
ADD FOREIGN KEY (e_id) REFERENCES EVENT(e_id);

ALTER TABLE `feedback`
ADD t_id INT;

ALTER TABLE `feedback`
ADD FOREIGN KEY (t_id) REFERENCES tenant(t_id);
