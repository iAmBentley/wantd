# Fresh-Laravel-w-Tailwind

> __This is a template repo__

This repo is meant to serve as a template repo for Laravel projects. This particular repo uses the following:

- Laravel
- TailwindCSS
- Vue.js
- User Authentication (Laravel's)


### To use (with Valet):

1. Click the 'Use This Template' button - Next to the 'Clone or Download' button above the file list of the repo

2. Fill in the fields on the resulting form and click create

3. Once created, clone the new repo. You will need to click the 'Clone or Download' button and copy the URL provided.

```shell
cd Your-Sites-Folder
git clone https://github.com/iAmBentley/aos.git new-project-name
cd new-project-name
```

4. Install Composer Dependencies

```shell
composer install
```

5. Install NPM Dependencies

This is technically two commands. 'Install' installs the dependencies and 'Run' compiles the css and javascript
 
```shell
npm install && npm run dev
```

6. Create a database

```shell
mysql -uroot -p
**** (enter your mysql password)
create database new-db-name;
show tables; // to confirm it was created
exit;
```

7. Create and Modify a .Env File

Technically not creating the file, but rather coping and modifiy it.

```shell
cp .env.example .env
code .env (code is a bash alias I use to open files in VS Code)
```

In VS Code, change the APP_NAME, APP_URL, DB_DATABASE, DB_USERNAME + DB_PASSWORD to the credentials used when making the database in step 6.

8. Run Initial Database Migrations

```shell
php artisan migrate
```

9. App Encryption Key

```shell
php artisan key:generate
```

10. [Optional] Serve the dev site locally over HTTPS

```shell
valet secure new-project-name
**** (enter computer users password)
```

11. View the site in a browser

Visit new-project-name.test in your browser of choice. 


### Conclusion

You should be rocking and rolling at this point. If you see any problems or have suggestions to improve this template repo, please let me know by submitting an Issue or Pull Request on the repo.
