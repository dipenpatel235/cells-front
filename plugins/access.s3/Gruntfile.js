module.exports = function(grunt) {

    const {Externals} = require('../gui.ajax/res/js/dist/libdefs.js');

    grunt.initConfig({
        babel: {
            options: {},

            dist: {
                files: [
                    {
                        expand: true,
                        cwd: 'res/js/',
                        src: ['**/*.js'],
                        dest: 'res/build/',
                        ext: '.js'
                    }
                ]
            }
        },
        browserify: {
            ui: {
                options: {
                    external:Externals,
                    browserifyOptions:{
                        standalone: 'S3Actions'
                    }
                },
                files: {
                    'res/build/S3Actions.js': 'res/build/S3Actions.js'
                }
            }
        },
        watch: {
            js: {
                files: [
                    "res/**/*"
                ],
                tasks: ['babel', 'browserify'],
                options: {
                    spawn: false
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-babel');
    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['babel', 'browserify']);

};
