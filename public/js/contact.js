// APPROCH #1

(function () {


    const headers = document.getElementsByClassName("header1"),
        contents = document.getElementsByClassName("content1"),
        icons = document.getElementsByClassName("icon1");



    for (let i = 0; i < headers.length; i++) {
        headers[i].addEventListener("click", () => {

            for (let j = 0; j < contents.length; j++) {
                if (i === j) {
                    icons[j].innerHTML = contents[j].getBoundingClientRect().height === 0 ? "-" : "+";
                    contents[j].classList.toggle("content-transition1");
                } else {
                    icons[j].innerHTML = "+";
                    contents[j].classList.remove("content-transition1");
                }
            }

        });
    }


})()


