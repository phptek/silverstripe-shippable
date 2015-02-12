# silverstripe-shippable

A small bundle of files to help you get a [SilverStripe](http://silverstripe.org) project up and running on the [Shippable](http://shippable.com) CI SaaS.

Shippable is a flexible SaaS for CI and Deployments. It uses [Docker](http://docker.io) based containerisation and is super-fast. It connects to both your [BitBucket](http://bitbucket.org) and [GitHub](http://github.com) repos, and can be configured to trigger a build from specific branches.

The `shippable.yml` file is in the same format as [Travis's](http://travis-ci.org) and valid Travis YML is valid Shippable YML. [See the docs](http://docs.shippable.com/en/latest/) for more info.

By default `shippable.yml` is configured to only run builds on the your project's `master` branch. You can change this to have shippable build from any project branch. [See the docs](http://docs.shippable.com/en/latest/) for more info.

You can optionally show a "Shippable" / "Not shippable" Travis-like icon in your markdown documents, simply uncomment and adapt the (raw) markdown below.

Out of the box, these files will build your SilverStripe project as per your composer file (See `Requirements` below) and run unit tests from your `mysite` directory. Simply edit `shippable.yml` with your own project-specific settings.

<!--
# Build Status
[![Build
Status](https://api.shippable.com/projects/<your-project-sha>/badge?branchName=<your-branch>)](https://app.shippable.com/projects/<your-project-sha>/builds/latest)
-->

## Requirements

[Composer!](http://getcomposer.org) Out of the box, your project will fail to build if you don't have composer files. If you have no need of composer (why not?) change/delete that line in `shippable.yml`.

## Installation

* Get the files: `git clone https://github.com/phptek/silverstripe-shippable.git`
* Copy `_ss_environment.php` and `shippable.yml` into your project's root
* Edit `ss_environment.php` as per comments at the top of the file
* Edit `shippable.yml` and change `ss_mysite` to the name of your own database

## Feedback / bugs


`russ AT theruss DOT com`
