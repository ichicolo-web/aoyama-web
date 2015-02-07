/**
 * データベーステーブル定義
 */

DROP TABLE IF EXISTS atelier;
DROP TABLE IF EXISTS posts_piano;
DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS contacts;

-- アトリエ

CREATE TABLE atelier (
    id INTEGER PRIMARY KEY AUTO_INCREMENT
  , date TEXT NOT NULL
  , file TEXT
  , writer TEXT NOT NULL
  , title TEXT NOT NULL
  , description TEXT NOT NULL
  , created_at TIMESTAMP NOT NULL DEFAULT 0
  , updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()
) ENGINE = InnoDB
DEFAULT CHARACTER SET 'utf8';
ALTER TABLE atelier AUTO_INCREMENT = 1001;


-- ピアノ

CREATE TABLE posts_piano (
    id INTEGER PRIMARY KEY AUTO_INCREMENT
  , date TEXT NOT NULL
  , file TEXT
  , writer TEXT NOT NULL
  , title TEXT NOT NULL
  , description TEXT NOT NULL
  , created_at TIMESTAMP NOT NULL DEFAULT 0
  , updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()
) ENGINE = InnoDB
DEFAULT CHARACTER SET 'utf8';
ALTER TABLE posts_piano AUTO_INCREMENT = 1001;


-- バイオリン

CREATE TABLE posts (
    id INTEGER PRIMARY KEY AUTO_INCREMENT
  , date TEXT NOT NULL
  , file TEXT
  , writer TEXT NOT NULL
  , title TEXT NOT NULL
  , description TEXT NOT NULL
  , created_at TIMESTAMP NOT NULL DEFAULT 0
  , updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()
) ENGINE = InnoDB
DEFAULT CHARACTER SET 'utf8';
ALTER TABLE posts_piano AUTO_INCREMENT = 1001;


-- 問い合わせ

CREATE TABLE contacts (
    id INTEGER PRIMARY KEY AUTO_INCREMENT
  , name varchar(128) NOT NULL
  , address varchar(500)
  , email varchar(128) NOT NULL
  , tel varchar(20)
  , category varchar(20)
  , description TEXT NOT NULL
  , created_at TIMESTAMP NOT NULL DEFAULT 0
  , updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()
) ENGINE = InnoDB
DEFAULT CHARACTER SET 'utf8';
ALTER TABLE contacts AUTO_INCREMENT = 1001;
