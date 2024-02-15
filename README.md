<h1>How to clone?</h1>

<table>
<tr>1.Run git clone https://github.com/Malitha1997/CompetencyAssessmentTool.git<br></tr>
<tr>2.Run composer install<br></tr>
<tr>3.Run cp .env.example .env<br></tr>
<tr>4.Run php artisan key:generate (Put the generated key to .env->APP_KEY)<br></tr>
<tr>5.Run php artisan migrate<br></tr>
<tr>6.Run php artisan serve<br></tr>
<tr>7.Go to link 127.0.0.1:8000/login<br></tr>
</table>
Note : Before run the "php artisan migrate" you should make a database in localhost and change the database name in .env->DB_DATABASE.
