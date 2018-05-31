CREATE TABLE event_login(
  el_id INT NOT NULL PRIMARY KEY,
  el_user VARCHAR(30),
  el_pwd VARCHAR(30)
);

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

CREATE TABLE request_booking(
  b_id INT NOT NULL PRIMARY KEY,
  t_id INT,
  s_id INT,
  b_waktu TIMESTAMP,
  b_status INT,
  FOREIGN KEY (t_id) REFERENCES tenant(t_id),
  FOREIGN KEY (s_id) REFERENCES stand_event(s_id)
);

CREATE TABLE feedback(
  f_id INT NOT NULL PRIMARY KEY,
  t_id INT,
  e_id INT,
  f_nilai INT,
  f_komentar VARCHAR(300),
  FOREIGN KEY (t_id) REFERENCES tenant(t_id),
  FOREIGN KEY (e_id) REFERENCES `event`(e_id)
);