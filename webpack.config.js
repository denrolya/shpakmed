var Encore = require('@symfony/webpack-encore');

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/reveal.js and public/build/reveal.css
    .addEntry('reveal', './assets/js/reveal.js')
    .addStyleEntry('login', './assets/css/login.scss')

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    // enable source maps during development
    .enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    .enableBuildNotifications()

    // create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // allow sass/scss files to be processed
    .enableSassLoader()
;

module.exports = Encore.getWebpackConfig();
