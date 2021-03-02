# Day#2 Week 3 - Laravel

## Objectives

In this task we will learn how to create controller, routing, and request handler from URL and form.

You will create a static Laravel app with 3 route: Home, Register, and Welcome
First, create route for each path. Then add two controllers: `HomeController` and `AuthController`. The first one controls `Home` path while the latter controls `Register` and `Welcome`.

The program root path `/` starts from Home, then there will be link to Register path `/register`. In the Register page, there will be a form to be filled by user with front name, last name, etc. When the form submitted, user will be directed to Welcome page `/welcome` which displays the front name and last name.

The result should similar to the image below.
![laravel static](laravel-static.gif)