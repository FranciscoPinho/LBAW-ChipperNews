PRAGMA foreign_keys=ON;

CREATE TABLE user
(
	user_id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	username	TEXT NOT NULL UNIQUE,
	is_mod BOOLEAN,
	is_collab BOOLEAN,
    is_reader BOOLEAN
	password	TEXT NOT NULL,
	name	TEXT NOT NULL,
	email	TEXT NOT NULL UNIQUE,
	location	TEXT,
    bio TEXT,
    --tags
	--register_date	DATETIME DEFAULT CURRENT_TIMESTAMP,
	nationality	TEXT NOT NULL
);

CREATE TABLE news_article
(
);

