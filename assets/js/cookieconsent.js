import 'cookieconsent/build/cookieconsent.min.css';
import 'cookieconsent/build/cookieconsent.min';

window.addEventListener("load", function () {
    window.cookieconsent.initialise({
        "palette":  {
            "popup":  {
                "background": "#081e5b"
            },
            "button": {
                "background": "transparent",
                "border":     "#fff",
                "text":       "#fff"
            }
        },
        "position": "bottom-right"
    });
});