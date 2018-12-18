# TDDCrud

TDD Test-driven development (TDD) is a software development process that relies on the repetition of a very short development cycle: first the developer writes an (initially failing) automated test case that defines a desired improvement or new function, then produces the minimum amount of code to pass that.

CRUD The CRUD cycle describes the elemental functions of a persistent database. CRUD stands for Create, Read, Update and Delete. (Retrieve may occasionally be substituted for Read.) These functions are also descriptive of the data life cycle.

So, the TDD approach we are going to follow is very simple.

    -  Think of the feature we are going to implement
    -  Write Feature/unit test required to test the feature
    -  Run the test, keep writing code to take the test from green to red
    -  Once test passes, optimize and refactor the code
    -  Keep running the test in refactor process to verify you are not breaking the functionality


1/ Setup Model and Migrations
* php artisan make:auth
* php artisan make:model Task -mr
* php artisan migrate

2/ Generate Model Factory
* php artisan make:factory TaskFactory --model=Task
* php artisan tinker
* factory('App\Task',20)->create();

3/ Getting Started with Test Driven Development

4/ A user can read all the tasks [READ]
* vendor/bin/phpunit --filter a_user_can_read_all_the_tasks
* 
5/ A user can read a single task [READ]
* vendor/bin/phpunit --filter a_user_can_read_single_task

6/ An authenticated user can create new task [CREATE]
* vendor/bin/phpunit --filter authenticated_users_can_create_a_new_task
* vendor/bin/phpunit --filter unauthenticated_users_cannot_create_a_new_task
* vendor/bin/phpunit --filter a_task_requires_a_title
* vendor/bin/phpunit --filter a_task_requires_a_description

7/ Authorized user can update the task [UPDATE]
* vendor/bin/phpunit --filter authorized_user_can_update_the_task
* vendor/bin/phpunit --filter unauthorized_user_cannot_update_the_task
* php artisan make:policy TaskPolicy --model=Task

8/ Authorized user can delete the task [DELETE]
* vendor/bin/phpunit --filter authorized_user_can_delete_the_task
* vendor/bin/phpunit --filter unauthorized_user_cannot_delete_the_task

9/ Run Full Test Suite
* vendor/bin/phpunit
