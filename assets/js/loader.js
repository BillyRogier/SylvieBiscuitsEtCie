(window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}),
    (document.onreadystatechange = function () {
        "complete" == document.readyState &&
            setTimeout(function () {
                document
                    .getElementById("loader_background")
                    .classList.add("active"),
                    document
                        .getElementsByClassName("loader-img")[0]
                        .classList.add("active"),
                    document
                        .getElementsByClassName("bt-spinner")[0]
                        .classList.add("active"),
                    setTimeout(function () {
                        (document.querySelector("body").style.overflowY =
                            "auto"),
                            (document.getElementById(
                                "loader"
                            ).style.visibility = "hidden"),
                            (document.getElementById("loader").style.display =
                                "none");
                    }, 1000);
            }, 500);
    });
