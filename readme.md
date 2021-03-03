# PRUEBA XCOOP
<br>
Ruta búsqueda de ticket por email: <h4>http:/{dominio}/email/{parámetro}</h4>
<br>
Ruta búsqueda de ticket: <h4>http:/{dominio}/ticket/{parámetro}</h4>
<br>
Ruta de listado de tickets y emails: <h4>http:/{dominio}/ticket/{parámetro}</h4>
<br>
# EJECUTAR
<br>
php artisan migrate --path=database\migrations\2021_03_02_144401_create_emails_table.php
<br>
php artisan migrate --path=database\migrations\2021_03_02_145329_create_tickets_table.php
<br>
php artisan db:seed --class=database\seeds\EmailsTableSeeder.php
<br>
php artisan db:seed --class=database\seeds\TicketsTableSeeder.php
