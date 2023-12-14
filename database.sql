CREATE TABLE tb_category (
      cat_id INT(11) NOT NULL AUTO_INCREMENT,
      cat_name VARCHAR(100) NOT NULL,
      cat_text TEXT DEFAULT NULL,
      PRIMARY KEY(cat_id),
      UNIQUE KEY(cat_name)
);

CREATE TABLE tb_pelanggan (
      pel_id INT(11) NOT NULL AUTO_INCREMENT,
      pel_nama VARCHAR(100) NOT NULL,
      pel_alamat TEXT DEFAULT NULL,
      pel_hp VARCHAR(30) NOT NULL,
      PRIMARY KEY(pel_id)
);