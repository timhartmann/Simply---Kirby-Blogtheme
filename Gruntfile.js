module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      files: [
        'assets/src/**'
      ],
      tasks: ['default']
    },
    sass: {
      build: {
        options: {
          style: 'expanded',
          compass: true
        },
        files: [
          {
            expanded: true,
            cwd: 'assets',
            src: ['assets/src/scss/application.scss'],
            dest: 'assets/build/stylesheets/application.css',
            filter: 'isFile'
          }
        ]
      }
    },
    copy: {
      main: {
        expand: true,
        src: ['assets/src/fonts/*'],
        dest: 'assets/build/fonts',
        filter: 'isFile',
        flatten: true
      }
    },
    cssmin: {
      minify: {
        expand: true,
        cwd: 'assets/build/stylesheets/',
        src: [
          'application.css'
        ],
        dest: 'assets/build/stylesheets/',
        ext: '.min.css'
      }
    },
    concat: {
      build: {
        src: [
          'assets/src/components/jquery/jquery.js',
          'assets/src/js/app.js'
        ],
        dest: 'assets/build/javascript/application.js'
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'assets/build/javascript/application.js',
        dest: 'assets/build/javascript/application.min.js'
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  grunt.registerTask('default', ['sass', 'copy', 'concat']);
  grunt.registerTask('release', ['default', 'cssmin', 'uglify']);
};