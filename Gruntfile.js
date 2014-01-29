module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: [
        'bower_components/foundation/scss/**/*',
        'assets/sass/**/*'
        ]
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: [{
          expand: true,
          cwd: 'styles',
          src: ['assets/scss/*.scss'],
          dest: '../../',
          ext: '.css'
        }]
      }
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  require('load-grunt-tasks')(grunt);

  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['build','watch']);
}
