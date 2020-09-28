# ProjectCreate-HMS
**Modus Operandi**
* Making contributions
  * Clone the the project repo.
  * Create **.env** and update it with content from **.env.example**
  * Update your mysql admin username and password in the .env.
  * Database name is **'hms'**, create a db with this name in your *phpmyadmin*
  * Run 
  > composer install

  > npm install && npm run dev
  
  > php artisan migrate
  * Create a new branch for every contribution.
  * Prefix each branch with **f-** if adding a feature and **b-** if fixing bugs.
  * Add evry work in progress to the **in progress** panel in the projects tab>laravel-hms .
  * Register every problem as an issue in the *issues* tab.
