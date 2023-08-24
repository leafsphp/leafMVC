<p align="center">
    <br><br>
    <img src="https://leafphp.dev/logo-circle.png" height="100"/>
    <br><br>
</p>

# Leaf MVC 3

[![Latest Stable Version](https://poser.pugx.org/leafs/mvc/v/stable)](https://packagist.org/packages/leafs/mvc)
[![Total Downloads](https://poser.pugx.org/leafs/mvc/downloads)](https://packagist.org/packages/leafs/mvc)
[![License](https://poser.pugx.org/leafs/mvc/license)](https://packagist.org/packages/leafs/mvc)

Leaf MVC is a lightweight but feature-rich MVC framework built on top of [leaf php](https://leafphp.dev). It provides a simple and opinionated structure with a tons of functionality built in.

## 📦 Installation

You can install Leaf MVC v3 with the [Leaf CLI](https://cli.leafphp.dev)

```sh
leaf create <project-name> --mvc
```

Or for a more personalized installation, you can add `--custom` to the command

```sh
leaf create <project-name> --mvc --custom
```

You can also use [Composer](https://getcomposer.org/) if you don't want to use the Leaf CLI, although we recommend using the CLI for a better experience:

```bash
composer create-project leafs/mvc <project-name>
```

Note that `<project-name>` is the name of the project you want to create, and that will be your folder name. You can also use `.` to install in the current directory.

## 🗂 Directory Structure

```bash
C:.
├───app
│   ├───console
│   ├───controllers
│   ├───database
│   │   ├───factories
│   │   ├───migrations
│   │   ├───schema
│   │   └───seeds
│   ├───helpers
│   ├───models
│   ├───routes
│   └───views
│       ├───css
│       └───errors
├───config
├───lib
├───public
│   └───assets
│       ├───css
│       └───img
├───storage
│   ├───app
│   │   └───public
│   ├───framework
│   │   └───views
│   └───logs
└───vendor
```

This directory structure is a blend of Ruby on Rails and Laravel

To run your Leaf MVC application, use

```bash
php leaf serve
```

Or with the Leaf CLI

```bash
leaf serve
```

## 📓 Learning Leaf MVC

- Leaf MVC has a very easy to understand [documentation](https://mvc.leafphp.dev) which contains information on all operations in Leaf MVC.
- Since Leaf MVC runs on Leaf, you should check out the Leaf PHP Framework documentation [here](https://leafphp.dev).
- You can also check out our [youtube channel](https://www.youtube.com/channel/UCllE-GsYy10RkxBUK0HIffw) which has video tutorials on different topics
- We are also working on [codelabs](https://codelabs.leafphp.dev) which will bring hands-on tutorials you can follow and contribute to.

## 😇 Contributing

We are glad to have you. All contributions are welcome! To get started, familiarize yourself with our [contribution guide](https://leafphp.dev/community/contributing.html) and you'll be ready to make your first pull request 🚀.

To report a security vulnerability, you can reach out to [@mychidarko](https://twitter.com/mychidarko) or [@leafphp](https://twitter.com/leafphp) on twitter. We will coordinate the fix and eventually commit the solution in this project.

## 🤩 Sponsoring Leaf

Your cash contributions go a long way to help us make Leaf even better for you. You can sponsor Leaf and any of our packages on [open collective](https://opencollective.com/leaf) or check the [contribution page](https://leafphp.dev/support/) for a list of ways to contribute.

We will furthermore like to thank our existing supporters, we love you all ❤️

## 💬 Stay In Touch

- [Twitter](https://twitter.com/leafphp)
- [Join the forum](https://github.com/leafsphp/leaf/discussions/37)
- [Chat on discord](https://discord.com/invite/Pkrm9NJPE3)

## 🎨 Links/Projects

- [Leaf Docs](https://leafphp.dev)
- [Leaf MVC Docs](https://mvc.leafphp.dev)
- [Leaf CLI Docs](https://cli.leafphp.dev)
- [Aloe CLI Docs](https://leafphp.dev/aloe-cli/)
