CREATE TABLE clip (id BIGINT AUTO_INCREMENT, html VARCHAR(128), song_id BIGINT, INDEX song_id_idx (song_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ENGINE = InnoDB;
CREATE TABLE song (id BIGINT AUTO_INCREMENT, title VARCHAR(128), lyrics TEXT, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ENGINE = InnoDB;
ALTER TABLE clip ADD CONSTRAINT clip_song_id_song_id FOREIGN KEY (song_id) REFERENCES song(id);