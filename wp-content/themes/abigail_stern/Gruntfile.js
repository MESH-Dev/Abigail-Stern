module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // concat - combine files to production version
        concat: {
          css: {
            // add/remove/edit files and order to project needs
            src: ['assets/css/reset.css', 'assets/css/typography.css', 'assets/css/layout.css','assets/css/*.css', '!assets/css/*.min.css', 'assets/css/responsive.css'],
            dest: 'assets/prod/production.css'
          },
          js: {
            // add/remove/edit files and order to project needs
            src: ['assets/js/*.js'],
            dest: 'assets/prod/<%= pkg.name %>.js'
          }
        },
        // cssmin - minify production css file created through concat
        cssmin: {
          css: {
            src: 'assets/prod/production.css',
            dest: 'assets/prod/production.min.css'
          }
        },
        // uglify - minify production js file created through concat
        uglify: {
          js: {
            files: {
              'assets/prod/<%= pkg.name %>.js': ['assets/prod/<%= pkg.name %>.js']
            }
          }
        },
        // watch - tasks triggered with [grunt watch] is initiated in the cli
        watch:{
          cssconcat:{
            files: ['assets/css/*.css','!assets/css/*.min.css'],
            tasks: ['concat']
          },
          cssmin: {
            files: ['assets/prod/production.css'],
            tasks: ['cssmin']
          },
          jsuglify:{
            files: ['assets/js/*.js'],
            tasks: ['uglify']
          }
        }

    });
    // load tasks from node_modules
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    // tasks that will be triggered with [grunt] in the cli
    grunt.registerTask('default', ['concat:css', 'cssmin:css', 'concat:js', 'uglify:js']);
};
