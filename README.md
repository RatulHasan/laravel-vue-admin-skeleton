# CoreUI Vue - Free Bootstrap Admin Template [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social)](https://twitter.com/intent/tweet?text=CoreUI%20-%20Free%20Vue%20Admin%20Template%20&url=http://coreui.io/vue/&hashtags=bootstrap,admin,template,dashboard,panel,free,angular,react,vue)

### Check out our Vue Admin Templates and support CoreUI Development

[![Bootstrap Admin Templates Bundle](https://genesisui.com/img/bundle2.png)](https://genesisui.com/bundle.html?support=1)

[Check out Bootstrap Admin Templates Bundle](https://genesisui.com/bundle.html?support=1)

This is Vue.js version of our Bootstrap 4 admin template [CoreUI](https://github.com/coreui/coreui-free-bootstrap-admin-template).

Please help us on [Product Hunt](https://www.producthunt.com/posts/coreui-open-source-bootstrap-4-admin-template-with-angular-2-react-js-vue-js-support) & [Designer News](https://www.designernews.co/stories/81127). Thanks in advance!

Why I decided to create CoreUI? Please read this article: [Jack of all trades, master of none. Why Boostrap Admin Templates suck.](https://medium.com/@lukaszholeczek/jack-of-all-trades-master-of-none-5ea53ef8a1f#.7eqx1bcd8)

CoreUI is an Open Source Vue & Bootstrap Admin Template. But CoreUI is not just another Admin Template. It goes way beyond hitherto admin templates thanks to transparent code and file structure. And if that's not enough, let’s just add that CoreUI consists bunch of unique features and over 1000 high quality icons.

CoreUI is based on Bootstrap 4 and offers 6 versions: [HTML5 AJAX](https://github.com/coreui/coreui-free-bootstrap-admin-template-ajax), [HTML5 Static](https://github.com/coreui/coreui-free-bootstrap-admin-template), [AngularJS](https://github.com/mrholek/CoreUI-AngularJS), [Angular 2+](https://github.com/coreui/coreui-free-angular-admin-template), [React.js](https://github.com/coreui/coreui-free-react-admin-template) & [Vue.js](https://github.com/coreui/coreui-free-vue-admin-template).

CoreUI is meant to be the UX game changer. Pure & transparent code is devoid of redundant components, so the app is light enough to offer ultimate user experience. This means mobile devices also, where the navigation is just as easy and intuitive as on a desktop or laptop. The CoreUI Layout API lets you customize your project for almost any device – be it Mobile, Web or WebApp – CoreUI covers them all!


**NOTE:** Please remember to **STAR** this project and **FOLLOW** [my Github](https://github.com/coreui) to keep you update with this template.

## Demo

A fully functional demo is available at [CoreUI](http://coreui.io/)

## Table of Contents

* [Versions](#versions)
* [CoreUI Pro](#coreui-pro)
* [Admin Templates built on top of CoreUI Pro](#admin-templates-built-on-top-of-coreui-pro)
* [Installation](#installation)
* [Usage](#usage)
* [What's included](#whats-included)
* [Documentation](#documentation)
* [Contributing](#contributing)
* [Versioning](#versioning)
* [Creators](#creators)
* [Community](#community)
* [Community Projects](#community-projects)
* [License](#license)
* [Support CoreUI Development](#support-coreui-development)

## Versions

CoreUI is built on top of Bootstrap 4 and supports popular frameworks.

* [CoreUI Free Bootstrap Admin Template](https://github.com/coreui/coreui-free-bootstrap-admin-template)
* [CoreUI Free Bootstrap Admin Template (Ajax)](https://github.com/coreui/coreui-free-bootstrap-admin-template-ajax)
* [CoreUI Free Angular 2+ Admin Template](https://github.com/coreui/coreui-free-angular-admin-template)
* 🚧 [CoreUI Free .NET Core 2 Admin Template](https://github.com/mrholek/CoreUI-NET) (Available Soon)
* [CoreUI Free React.js Admin Template](https://github.com/coreui/coreui-free-react-admin-template)
* 🚧 [CoreUI Free Vue.js Admin Template](https://github.com/coreui/coreui-free-vue-admin-template)

## CoreUI Pro

* 💪  [CoreUI Pro Bootstrap Admin Template](https://coreui.io/pro/)
* 💪  [CoreUI Pro Bootstrap Admin Template (Ajax)](https://coreui.io/pro/)
* 💪  [CoreUI Pro Angular Admin Template](https://coreui.io/pro/angular)
* 💪  [CoreUI Pro React Admin Template](https://coreui.io/pro/react)
* 💪  [CoreUI Pro Vue Admin Template](https://coreui.io/pro/vue)

## Admin Templates built on top of CoreUI Pro

| CoreUI Pro | Prime | Root | Alba | Leaf |
| --- | --- | --- | --- | --- |
| [![CoreUI Pro Admin Template](https://coreui.io/assets/img/example-coureui.jpg)](https://coreui.io/pro/) | [![Prime Admin Template](https://genesisui.com/assets/img/templates/prime1280.jpg)](https://genesisui.com/admin-templates/bootstrap/prime/?support=1) | [![Root Admin Template](https://genesisui.com/assets/img/templates/root1280.jpg)](https://genesisui.com/admin-templates/bootstrap/root/?support=1) | [![Alba Admin Template](https://genesisui.com/assets/img/templates/alba1280.jpg)](https://genesisui.com/admin-templates/bootstrap/alba/?support=1) | [![Leaf Admin Template](https://genesisui.com/assets/img/templates/leaf1280.jpg)](https://genesisui.com/admin-templates/bootstrap/leaf/?support=1)

## Installation

### Clone repo

``` bash
# clone the repo
$ git clone https://github.com/coreui/coreui-free-vue-admin-template.git CoreUI-Vue

# go into app's directory
$ cd CoreUI-Vue

# install app's dependencies
$ npm install
```

## Usage

``` bash
# serve with hot reload at localhost:8080
npm run serve

# build for production with minification
npm run build

# run linter
npm run lint

# run unit tests
npm run test:unit

# run e2e tests
npm run test:e2e

```

For a detailed explanation on how things work, check out the [Vue CLI Guide](https://cli.vuejs.org/guide/).

## What's included

Within the download you'll find the following directories and files:

```
CoreUI-Vue/
├── public/              # pure static assets (directly copied)
│   └── index.html           # index.html template
├── src/                 # project root
│   ├── assets/                 # module assets (processed by webpack)
│   │   └── scss/               # user styles
│   ├── components/             # ui components
│   ├── containers/             # ui containers
│   ├── router/                 # routing 
│   ├── shared/                 # utils
│   ├── views/                  # ui views
│   ├── _nav.js                 # sidebar nav config
│   ├── App.vue                 # main app component
│   └── main.js                 # app entry file
├── test/
│   └── unit/            # unit tests
│   └── e2e/             # e2e tests
├── .eslintrc.js         # eslint config
├── .gitignore           # defaults for gitignore
├── .postcssrc.js        # postcss config
├── CHANGELOG.md
├── README.md
├── babel.config.js      # babel config
├── jest.config.js       # jest config
├── vue.config.js        # vue-cli config
├── LICENSE
└── package.json         # build scripts and dependencies
```
