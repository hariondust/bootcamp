/* MariaDB [perpustakaan]> SELECT * FROM books;
+----+-------------------------------------+------+-------+---------------------
--------+-------------+
| id | name                                | stok | image | deskripsi
        | category_id |
+----+-------------------------------------+------+-------+---------------------
--------+-------------+
|  1 | Sherlock Holmes                     |    5 |       | Buku fiksi bertema M
ystery  |           1 |
|  2 | Harry Potter and the Goblet of Fire |    7 |       | Buku fiksi bertema F
antasy  |           3 |
|  3 | Scream                              |    3 |       | Buku fiksi bertema T
hriller |           4 |
|  4 | Into the Water                      |    2 |       | Buku fiksi bertema T
hriller |           4 |
|  5 | The Red Hunter                      |    8 |       | Buku fiksi bertema T
hriller |           4 |
|  6 | It                                  |    1 |       | Buku fiksi bertema H
orror   |           2 |
|  7 | The Terror                          |   12 |       | Buku fiksi bertema H
orror   |           2 |
+----+-------------------------------------+------+-------+---------------------
--------+-------------+
7 rows in set (0.00 sec)

MariaDB [perpustakaan]> SELECT categories.name, books.name, books.stok FROM cate
gories JOIN books ON categories.id = books.category_id;
+----------+-------------------------------------+------+
| name     | name                                | stok |
+----------+-------------------------------------+------+
| Mystery  | Sherlock Holmes                     |    5 |
| Fantasy  | Harry Potter and the Goblet of Fire |    7 |
| Thriller | Scream                              |    3 |
| Thriller | Into the Water                      |    2 |
| Thriller | The Red Hunter                      |    8 |
| Horror   | It                                  |    1 |
| Horror   | The Terror                          |   12 |
+----------+-------------------------------------+------+
7 rows in set (0.02 sec)

MariaDB [perpustakaan]> SELECT * FROM books WHERE category_id='3';
+----+-------------------------------------+------+-------+---------------------
-------+-------------+
| id | name                                | stok | image | deskripsi
       | category_id |
+----+-------------------------------------+------+-------+---------------------
-------+-------------+
|  2 | Harry Potter and the Goblet of Fire |    7 |       | Buku fiksi bertema F
antasy |           3 |
+----+-------------------------------------+------+-------+---------------------
-------+-------------+
1 row in set (0.02 sec)