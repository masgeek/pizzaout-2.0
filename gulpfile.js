'use strict';

const gulp = require('gulp');
//,watch = require('gulp-watch');

//npm install --save-dev gulp

const includedFileTypes = "js,css,png,jpeg,jpg,svg,tiff,woff,woff2,eot,ttf";

const sharedAssetsSource = './environments/_shared-assets/**/*.{' + includedFileTypes + '}';
const $frontendSource = './environments/_front_end-assets/**/*.{' + includedFileTypes + '}';
const $backendSource = './environments/_back_end-assets/**/*.{' + includedFileTypes + '}';

//Development Path
const $backendDestDevPath = './environments/dev/backend/web/';
const $frontendDestDevPath = './environments/dev/frontend/web/';

//Production paths
const $backendDestProdPath = './environments/prod/backend/web/';
const $frontendDestProdPath = './environments/prod/frontend/web/';


const $webFrontendPath = './frontend/web/';
const $adminBackendPath = './backend/web/';

const $webFrontendAssetsPath = './backend/web/assets';
const $adminBackendAssetsPath = './backend/web/assets';

gulp.task('default', function () {
    //--- Copy to front end ---//
    gulp.src(sharedAssetsSource)
        .pipe(gulp.dest($webFrontendPath))
        .pipe(gulp.dest($adminBackendPath));

    gulp.src($frontendSource)
        .pipe(gulp.dest($webFrontendPath));

    gulp.src($backendSource)
        .pipe(gulp.dest($adminBackendPath));
});