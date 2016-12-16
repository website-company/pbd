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
                    cwd: 'cwd/scss/',
                    src: ['main.scss'],
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
                dest: 'public/html'
            }
        },
        uglify: {
            my_target: {
                files: {
                    'public/js/main.js': ['cwd/js/main.js']
                }
            }
        },
        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: ['cwd/scss/*.scss','cwd/html/*.php','cwd/js/*.js'],
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
