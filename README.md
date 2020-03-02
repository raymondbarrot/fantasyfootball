Instructions:
1. Setup the local database using the values in .env
	- DB_DATABASE=fantasyfootball
	- DB_USERNAME=root
	- DB_PASSWORD=secret
2. Run the app with 'php artisan serve'
3. Run 'php artisan migrate'
4. Importer command is in app/Console/Command/ImportPlayersData
5. Run the importer using 'php artisan command:ImportPlayersData' to populate the database
7. Run the unit test using '.\vendor\bin\phpunit'
6. Go to http://127.0.0.1:8000/ and test the app

Locations:
- Model: app/Player
- Controller: app/Http/Contollers/PlayerController
- API Controller: app/Http/Contollers/PlayerApiController
- Player Factory: database/factories/PlayerFactory
- Migration: database/migrations/2020_02_27_091335_create_players_table.php
- Seeder: database/seeds/PlayersTableSeeder.php
- Unit Test: tests/Feature/PlayerTest.php
- API Routes: routes/api.php
- Routes: routes/web.php
	
