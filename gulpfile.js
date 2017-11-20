var elixir = require('laravel-elixir');

// elixir(function(mix) {
//     mix.sass("app.scss");
// });

elixir((mix) => mix.browserSync({ proxy: 'http://localhost:8001/' })
                   .webpack('app.js')
                   .sass("app.scss")
                  //  .js('resources/assets/js/app.js', 'public/js').version()
);
