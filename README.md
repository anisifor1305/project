первое - реализация скелета и связывания фронтенда и бэкенда 
(https://itelmenko.ru/devops/docker-laravel-reactjs-app/)
первый коммит 

создаем верстку для базовой страницы 
второй коммит

создаем мидлвар и аутентификацию
третий коммит.

авторизация (права, чек прав). переделка реакта. 4 коммит

реализация добавления проекта 
5 коммит

все выше делалось из документации laravel. указать сей факт

реалиация чека проектов на странице юзеров (взятие их из бд и отрисовка в реакт)
6 коммит

реализация "Отчитаться о выполнении" 
7 коммит

реализация "Добавить пользователю проект"
8 коммит

реализация списка пользователей с проектами в админ-панели
9 коммит

Реализация добавления пользователя и логаута. 
10 коммит
Всё!

php artisan make:middleware isUserAdmin
добавляем соответсвующий middleware в web.php
написать еще, кстати, про маршруты в web.php
также выяснилось, что в логике отображения польз. и проект. была допущена ошибка. 
внесли соответствующие изменения в mainPageController и RenderUsers.jsx
выяснилось также, что один и тот же проект можно добавить несколько раз, что не являтся логичным.
соответствующие изменения в ProjectController и расширяем страницу ошибки.
также тепеь понятно, что админ не видит весь список проектов. Это странно. Переименуем файл RenderUsers в RenderUsersAndProjects.
Соответствующие изменения в mainPageController, и RenderUsersAndProjects.
Еще ошибка: если пользователя с введенными данными нет, то приожение падает
Исправляем: неоходимо добавить всего одно маленькое условие в метод auth. 

Готово!
11 коммит.