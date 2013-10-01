/**
 * Gruntfile used for deployment tasks, such as minification/uglification application JavaScript
 * code, as well as CSS minification, etc.
 *
 * @param grunt
 */
module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            development: {
                files: {
                    'styles/main.css': 'styles/less/main.less'
                }
            },
            production: {
                options: {
                    compress: true
                },
                files: {
                    'styles/main.css': 'styles/less/main.less'
                }
            }
        }
    });

    /**
     * Load any external Grunt tasks that we may need
     */
    grunt.loadNpmTasks('grunt-contrib-less');

    /**
     * Register default tasks, so we only need to invoke "grunt" at the command line
     * and Grunt will do the rest for us
     */
    grunt.registerTask('css', ['less:development']);
};