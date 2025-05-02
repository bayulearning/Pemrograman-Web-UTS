# Pengetesan SQL Injection sederhana

Pada file Login ![alt-text](login_tanpa_prepared.php)

- belum ditambahkan pengaman prepared statement sehingga form login dapat diinject hanya dengan memasukas username admin' -- tanpa password
  ![alt-text](tanpaprepared.png)

- sudah ditambahkan prepared. tidak dapat login hanya menggunkan username admin' -- ![alt-text](login.php)
  ![alt-text](denganprepared.png)
