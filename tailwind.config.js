module.exports = {
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                drdarkblue: "#0D2149",
                drlightblue: "#208AAE",
                drwhite: "#F9EBE0",
                drlightbrown: "#60492C",
                drdarkbrown: "#463F1A",
            },
        },
    },
    plugins: [],
};
