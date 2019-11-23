<p align="center">
    <br><br>
    <img src="https://leaf-docs.netlify.com/images/logo.png" height="100"/>
    <h1 align="center">Leaf MVC</h1>
    <br>
    <br><br><br>
</p>


[![Latest Stable Version](https://poser.pugx.org/leafs/mvc/v/stable)](https://packagist.org/packages/leafs/mvc)
[![Total Downloads](https://poser.pugx.org/leafs/mvc/downloads)](https://packagist.org/packages/leafs/mvc)
[![License](https://poser.pugx.org/leafs/mvc/license)](https://packagist.org/packages/leafs/mvc)


# Leaf
LeafMVC is a simple MVC framework built on top of the leaf php micro-framework. LeafMVC lets you create clean but powerful web apps and APIs quickly. Leaf provides simple to use functions to take care of complex issues, eventually speeding up development and taking the pain out of development.


## Installation

**This is a simple blog built as a demo for leafMVC, you can start a project with this demo with:**
```bash
$ composer create project leafs/mvc <project-name> --prefer-dist dev-blog
```

This will start a new LeafMVC blog app.


## Basic Info
```bash
C:.
├───app
│   ├───console
│   ├───controllers
│   │   └───Auth
│   ├───database
│   │   ├───factories
│   │   ├───migrations
│   │   └───seeds
│   ├───helpers
│   ├───models
│   ├───routes
│   └───views
│       ├───assets
│       │   ├───css
│       │   ├───images
│       │   ├───js
│       │   └───sass
│       ├───components
│       └───pages
│           ├───posts
│           └───errors
├───config
│   └───command
├───public
├───storage
│   ├───app
│   │   └───public
│   ├───framework
│   │   └───views
│   └───logs
└───vendor
```
This directory structure is a blend of Ruby on Rails and Laravel

To run your LeafMVC application, use 
```bash
php leaf serve
```

## Setup

Connect your database and run:
```bash
php leaf db:migrate
```

That's all✔✔🔥

## Learning LeafMVC

LeafMVC has a very easy to understand [documentation](https://leafmvc.netlify.com/) which contains information on all operations in LeafMVC.

Since LeafMVC runs on Leaf, you can check out the Leaf PHP Framework documentation [here](https://leaf-docs.netlify.com).


## License

The LeafMVC framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## View LeafMVC's docs [here](https://leafmvc.netlify.com/)
## View Leaf's docs [here](https://leaf-docs.netlify.com/)
