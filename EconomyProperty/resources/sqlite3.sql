CREATE TABLE IF NOT EXISTS Property(
	landNum INTEGER PRIMARY KEY AUTOINCREMENT,
	price INTEGER NOT NULL,
	x INTEGER NOT NULL,
	y INTEGER NOT NULL,
	z INTEGER NOT NULL,
	level TEXT NOT NULL,
	startX INTEGER NOT NULL,
	startZ INTEGER NOT NULL,
	landX INTEGER NOT NULL,
	landZ INTEGER NOT NULL
)