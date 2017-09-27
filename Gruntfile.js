module.exports = function(grunt){
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options:{
                    style: 'compressed'
                },
                files: [{
                    expand: true,
                    cwd: 'cwd/scss-theme-1/',
                    src: ['theme1.scss'],
                    dest: 'public/css/',
                    ext: '.css'
                }]
            }
        },
        htmlclean: {
            deploy: {
                expand: true,
                cwd: 'cwd/html',
                src: '**/*.php',
                dest: 'pbd_press/wp-content/themes/pbd-theme/'
            }
        },
        uglify: {
            my_target: {
                files: {
                    'public/js/main.js': ['cwd/js/jquery-3.1.1.js','cwd/js/slick.js','cwd/js/main.js','cwd/js/equal-heights.js']
                }
            }
        },
        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: ['cwd/scss/*.scss','cwd/html/*.php','cwd/js/*.js','cwd/scss-theme-1/*.scss'],
                tasks: ['sass','htmlclean','uglify']
            }

        }
    });
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-htmlclean');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Do the Task
    grunt.registerInitTask('default', ['sass','htmlclean','uglify','watch']);
}
