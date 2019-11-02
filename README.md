## Leaf MVC
Leaf MVC is a PHP MVC framework that helps you create clean, simple but powerful web applications and APIs quickly and easily. Leaf MVC is built from the Leaf PHP micro-framework which contains pre-built modules to quickly whip up a full MVC application.
Leaf MVC is based on the ruby on rails framework😉😎


#### Installation
The best way to install LeafMVC is to use composer
```bash
composer create-project leafs/mvc <project-name>
```


#### Directory Structure
```bash
C:.
├───app
│   ├───controllers
│   ├───helpers
│   ├───migrations
│   ├───models
│   ├───routes
│   └───views
│       └───dist
├───config
│   └───command
│       └───stubs
├───lib
├───public
├───storage
└───vendor
```
As you can see, the structure of Leaf MVC isn't so different from other frameworks like Rails and Laravel, let's take a deeper look at the folder structure
`app` is where the main code for the app sits. All the controllers, models, views, helpers, migrations and routes. 
`config` holds configuration files for the Leaf framework, ie, Command Line suuport and class autoloader
`lib` is where additional library support would be kept if need be
`public` holds compiled assets which web browsers can use
`storage` is meant to hold "uploaded" files
`vendor` is where all Leaf MVC's dependencies are kept.


#### CMD
After installation, handy commands are made available to you through your shell. You can get a list of all commands by typing 
```bash
php leaf
``` 
or
```bash
php leaf list
```


### Read the full documentation [here](https://leaf-docs.netlify.com)