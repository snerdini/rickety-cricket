'use strict';
var util = require('util');
var path = require('path');
var yeoman = require('yeoman-generator');


var N4mHtmlGenerator = module.exports = function N4mHtmlGenerator(args, options, config) {
  yeoman.generators.Base.apply(this, arguments);

  this.on('end', function () {
    this.installDependencies({ skipInstall: options['skip-install'] });
  });

  this.pkg = JSON.parse(this.readFileAsString(path.join(__dirname, '../package.json')));
};

util.inherits(N4mHtmlGenerator, yeoman.generators.Base);

N4mHtmlGenerator.prototype.askFor = function askFor() {
  var cb = this.async();

  // have Yeoman greet the user.
  console.log(this.yeoman);

  var prompts = [{
    type: 'confirm',
    name: 'someOption',
    message: 'Would you like to enable this option?',
    default: true
  }];

  this.prompt(prompts, function (props) {
    this.someOption = props.someOption;

    cb();
  }.bind(this));
};

N4mHtmlGenerator.prototype.app = function app() {
  this.copy('_package.json', 'package.json');
  this.copy('_bower.json', 'bower.json');
  this.copy('_Gruntfile.js', 'Gruntfile.js');

  this.mkdir('templates');
  this.copy('masters/1column.php', 'templates/1column.php');
  this.copy('masters/1column.php', 'templates/2column-left.php');
  this.copy('masters/1column.php', 'templates/2column-right.php');
  this.copy('masters/1column.php', 'templates/3column.php');

  this.mkdir('includes');
  this.copy('includes/Tonto.php', 'includes/Tonto.php');

  this.mkdir('styles');
  this.mkdir('styles/less');
  this.mkdir('styles/less/n4m-framework');

  this.copy('less/mega-menus.less', 'styles/less/n4m-framework/mega-menus.less');
  this.copy('less/portal-base.less', 'styles/less/n4m-framework/portal-base.less');

  this.copy('less/main.less', 'styles/less/main.less');
  this.copy('less/variables.less', 'styles/less/variables.less');
  this.copy('less/mixins.less', 'styles/less/mixins.less');

  this.mkdir('webparts');

  this.write('webparts/header.php', '');
  this.write('webparts/nav-top.php', '');
  this.write('webparts/footer.php', '');
};

N4mHtmlGenerator.prototype.projectfiles = function projectfiles() {
  this.copy('editorconfig', '.editorconfig');
  this.copy('jshintrc', '.jshintrc');
};
