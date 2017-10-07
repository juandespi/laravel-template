var elixir = require('laravel-elixir');

// elixir(function(mix) {
//     mix.sass("app.scss");
// });

elixir((mix) => mix.sass("app.scss")
                   .webpack('app.js')
                   .browserSync({
                     proxy: 'project.dev'
                   })
);
