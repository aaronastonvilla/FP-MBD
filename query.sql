CREATE TABLE `event`(
  e_id INT,
  el_id INT,
  id_feedback INT,
  t_id INT,
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
  e_id INT,
  el_user VARCHAR(30),
  el_pwd VARCHAR(30),
  PRIMARY KEY (el_id)
);

CREATE TABLE stand_event(
  se_id INT,
  b_id INT,
  e_id INT,
  panjang_stand FLOAT,
  lebar_stand FLOAT,
  harga_sewa INT,
  jml_stand_tersedia INT,
  fasilitas VARCHAR(999),
  PRIMARY KEY (se_id)
);

CREATE TABLE request_booking(
  b_id INT,
  t_id INT,
  se_id INT,
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
