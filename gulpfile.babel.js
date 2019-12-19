'use strict'

import gulp from 'gulp'

const requireDir = require('require-dir'),
  paths = {
    views: {
      src: ['./src/views/index.{html,php}', './src/views/pages/*.{html,php}'],
      dist: './dist/',
      watch: ['./src/blocks/**/*.{html,php}', './src/views/**/*.{html,php}']
    },
    api: {
      src: ['./src/api/*.{html,php}'],
      dist: './dist/api/',
      watch: ['./src/api/*.{html,php}']
    },
    styles: {
      src: './src/styles/main.{scss,sass}',
      dist: './dist/styles/',
      watch: ['./src/blocks/**/*.{scss,sass}', './src/styles/**/*.{scss,sass}']
    },
    scripts: {
      src: './src/js/*.js',
      dist: './dist/js/',
      watch: ['./src/blocks/**/*.js', './src/js/**/*.js']
    },
    images: {
      src: [
        './src/img/**/*.{jpg,jpeg,png,gif,tiff,svg}',
        '!./src/img/favicon/*.{jpg,jpeg,png,gif,tiff}'
      ],
      dist: './dist/img/',
      watch: './src/img/**/*.{jpg,jpeg,png,gif,svg,tiff}'
    },
    webp: {
      src: [
        './src/img/**/*.{jpg,jpeg,png,tiff}',
        '!./src/img/favicon/*.{jpg,jpeg,png,gif,tiff}'
      ],
      dist: './dist/img/',
      watch: [
        './src/img/**/*.{jpg,jpeg,png,tiff}',
        '!./src/img/favicon/*.{jpg,jpeg,png,gif,tiff}'
      ]
    },
    sprites: {
      src: './src/img/svg/*.svg',
      dist: './dist/img/sprites/',
      watch: './src/img/svg/*.svg'
    },
    fonts: {
      src: './src/fonts/**/*.{woff,woff2}',
      dist: './dist/fonts/',
      watch: './src/fonts/**/*.{woff,woff2}'
    },
    favicons: {
      src: './src/img/favicon/*.{jpg,jpeg,png,gif}',
      dist: './dist/img/favicons/'
    },
    gzip: {
      src: './src/.htaccess',
      dist: './dist/'
    }
  }

requireDir('./gulp-tasks/')

export { paths }

export const development = gulp.series(
  'clean',
  gulp.parallel([
    'views',
    'api',
    'styles',
    'scripts',
    'images',
    'webp',
    'sprites',
    'fonts',
    'favicons'
  ]),
  gulp.parallel('serve')
)

export const prod = gulp.series(
  'clean',
  gulp.series([
    'views',
    'api',
    'styles',
    'scripts',
    'images',
    'webp',
    'sprites',
    'fonts',
    'favicons',
    'gzip'
  ])
)

export default development
