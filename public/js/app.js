//
//
//
// Init AOS
//
//
//

if (window.AOS !== undefined) {
    AOS.init({
        offset: 100,
        duration: 1000,
        disable: () => window.matchMedia("(max-width: 990px)").matches,
        once: true,
        delay: 100,
    });
}

//
//
//
//  Leaflet - Maps
//

// Intersection Observer for Map on Home Page and Contact Page, for better performance and to avoid loading all maps at once.
const dataMap = document.querySelectorAll("[data-map='true']");
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            // INIT MAP
            //
            //  Leaflet HOME -  Map // Łask, Stefana Batorego 98-100, były targ
            //
            const mapLocation = document.getElementById("map-location");
            console.log(mapLocation);

            if (mapLocation) {
                let $coordinates = [51.58942104546394, 19.1482133204735]; // Łask, Stefana Batorego 98-100, były targ
                var map = L.map("map-location").setView($coordinates, 13);

                L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    maxZoom: 22,
                }).addTo(map);

                var myIcon = L.icon({
                    // iconUrl:
                    //   "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAApCAYAAADAk4LOAAAFgUlEQVR4Aa1XA5BjWRTN2oW17d3YaZtr2962HUzbDNpjszW24mRt28p47v7zq/bXZtrp/lWnXr337j3nPCe85NcypgSFdugCpW5YoDAMRaIMqRi6aKq5E3YqDQO3qAwjVWrD8Ncq/RBpykd8oZUb/kaJutow8r1aP9II0WmLKLIsJyv1w/kqw9Ch2MYdB++12Onxee/QMwvf4/Dk/Lfp/i4nxTXtOoQ4pW5Aj7wpici1A9erdAN2OH64x8OSP9j3Ft3b7aWkTg/Fm91siTra0f9on5sQr9INejH6CUUUpavjFNq1B+Oadhxmnfa8RfEmN8VNAsQhPqF55xHkMzz3jSmChWU6f7/XZKNH+9+hBLOHYozuKQPxyMPUKkrX/K0uWnfFaJGS1QPRtZsOPtr3NsW0uyh6NNCOkU3Yz+bXbT3I8G3xE5EXLXtCXbbqwCO9zPQYPRTZ5vIDXD7U+w7rFDEoUUf7ibHIR4y6bLVPXrz8JVZEql13trxwue/uDivd3fkWRbS6/IA2bID4uk0UpF1N8qLlbBlXs4Ee7HLTfV1j54APvODnSfOWBqtKVvjgLKzF5YdEk5ewRkGlK0i33Eofffc7HT56jD7/6U+qH3Cx7SBLNntH5YIPvODnyfIXZYRVDPqgHtLs5ABHD3YzLuespb7t79FY34DjMwrVrcTuwlT55YMPvOBnRrJ4VXTdNnYug5ucHLBjEpt30701A3Ts+HEa73u6dT3FNWwflY86eMHPk+Yu+i6pzUpRrW7SNDg5JHR4KapmM5Wv2E8Tfcb1HoqqHMHU+uWDD7zg54mz5/2BSnizi9T1Dg4QQXLToGNCkb6tb1NU+QAlGr1++eADrzhn/u8Q2YZhQVlZ5+CAOtqfbhmaUCS1ezNFVm2imDbPmPng5wmz+gwh+oHDce0eUtQ6OGDIyR0uUhUsoO3vfDmmgOezH0mZN59x7MBi++WDL1g/eEiU3avlidO671bkLfwbw5XV2P8Pzo0ydy4t2/0eu33xYSOMOD8hTf4CrBtGMSoXfPLchX+J0ruSePw3LZeK0juPJbYzrhkH0io7B3k164hiGvawhOKMLkrQLyVpZg8rHFW7E2uHOL888IBPlNZ1FPzstSJM694fWr6RwpvcJK60+0HCILTBzZLFNdtAzJaohze60T8qBzyh5ZuOg5e7uwQppofEmf2++DYvmySqGBuKaicF1blQjhuHdvCIMvp8whTTfZzI7RldpwtSzL+F1+wkdZ2TBOW2gIF88PBTzD/gpeREAMEbxnJcaJHNHrpzji0gQCS6hdkEeYt9DF/2qPcEC8RM28Hwmr3sdNyht00byAut2k3gufWNtgtOEOFGUwcXWNDbdNbpgBGxEvKkOQsxivJx33iow0Vw5S6SVTrpVq11ysA2Rp7gTfPfktc6zhtXBBC+adRLshf6sG2RfHPZ5EAc4sVZ83yCN00Fk/4kggu40ZTvIEm5g24qtU4KjBrx/BTTH8ifVASAG7gKrnWxJDcU7x8X6Ecczhm3o6YicvsLXWfh3Ch1W0k8x0nXF+0fFxgt4phz8QvypiwCCFKMqXCnqXExjq10beH+UUA7+nG6mdG/Pu0f3LgFcGrl2s0kNNjpmoJ9o4B29CMO8dMT4Q5ox8uitF6fqsrJOr8qnwNbRzv6hSnG5wP+64C7h9lp30hKNtKdWjtdkbuPA19nJ7Tz3zR/ibgARbhb4AlhavcBebmTHcFl2fvYEnW0ox9xMxKBS8btJ+KiEbq9zA4RthQXDhPa0T9TEe69gWupwc6uBUphquXgf+/FrIjweHQS4/pduMe5ERUMHUd9xv8ZR98CxkS4F2n3EUrUZ10EYNw7BWm9x1GiPssi3GgiGRDKWRYZfXlON+dfNbM+GgIwYdwAAAAASUVORK5CYII=",
                    iconUrl: "../images/reusable/map-icon.png",
                    iconSize: [56, 56],
                    iconAnchor: [43, 54],
                });

                var marker = L.marker($coordinates, { icon: myIcon }).addTo(map);
            }
            observer.unobserve(entry.target);
        });
    },
    {
        rootMargin: "50px",
    }
);

dataMap.forEach((element) => {
    observer.observe(element);
});

//
//
//
//
//
// SLICK SLIDERS
//
//

//  SLIDER || O inwestycji - home.html
const slickInvestment = document.querySelector(".slick-slider-investment");
if (slickInvestment) {
    $(document).ready(function () {
        $(".slick-slider-investment").slick({
            dots: false,
            infinite: false,
            speed: 250,
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true,
            prevArrow: $(".slick-slider-investment-prev"),
            nextArrow: $(".slick-slider-investment-next"),
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        infinite: true,
                    },
                },
            ],
        });

        AOS.refresh();
    });
}

//  SLIDER || Atuty Osiedla
const slickAsset = document.querySelector(".slick-slider-asset");
if (slickAsset) {
    $(document).ready(function () {
        $(".slick-slider-asset").slick({
            dots: false,
            infinite: true,
            speed: 250,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: $(".slick-slider-asset-prev"),
            nextArrow: $(".slick-slider-asset-next"),
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 998,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: true,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                    },
                },
            ],
        });

        AOS.refresh();
    });
}

//  SLIDER || Rekomendacje
const slickRecommendation = document.querySelector(
    ".slick-slider-recommendation"
);
if (slickRecommendation) {
    $(document).ready(function () {
        $(".slick-slider-recommendation").slick({
            dots: false,
            infinite: false,
            speed: 250,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 460,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: "15px",
                        infinite: true,
                    },
                },
            ],
        });

        AOS.refresh();
    });
}

//  SLIDER || O inwestycji - O inwestycji.html
const slickInvestment2 = document.querySelector(".slick-slider-investment2");
if (slickInvestment2) {
    $(document).ready(function () {
        $(".slick-slider-investment2").slick({
            dots: false,
            infinite: false,
            speed: 250,
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true,
            prevArrow: $(".slick-slider-investment-prev2"),
            nextArrow: $(".slick-slider-investment-next2"),
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        infinite: true,
                    },
                },
            ],
        });

        AOS.refresh();
    });
}

//  SLIDER || Apartments
const slickApartments = document.querySelector(".slick-slider-apartments");
if (slickApartments) {
    $(document).ready(function () {
        $(".slick-slider-apartments").slick({
            dots: false,
            infinite: false,
            speed: 250,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: $(".slick-slider-apartments-prev"),
            nextArrow: $(".slick-slider-apartments-next"),
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: true,
                        centerMode: true,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: true,
                        centerMode: true,
                        infinite: true,
                        centerPadding: "15px",
                    },
                },
            ],
        });

        AOS.refresh();
    });
}

//
//
//
//
//
// Counter
//
//

class Counter {
    constructor(element, targetValue, duration = 2000) {
        this.element = element;
        this.targetValue = targetValue;
        this.duration = duration;
        this.startValue = 0;
        this.startTime = null;
    }

    animate = (currentTime) => {
        if (!this.startTime) this.startTime = currentTime;
        const progress = currentTime - this.startTime;
        const value = Math.min(
            this.startValue + (progress / this.duration) * this.targetValue,
            this.targetValue
        );
        this.element.textContent = Math.floor(value);
        if (value < this.targetValue) {
            requestAnimationFrame(this.animate);
        }
    };

    start() {
        requestAnimationFrame(this.animate);
    }
}

const numbersArr = document.querySelectorAll("[data-number]");
if (numbersArr.length > 0) {
    const observerNumber = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const numberPattern = /\d+/g;
                    let number = entry.target.dataset.number;
                    let reg = number.match(numberPattern);
                    const counter = new Counter(entry.target, reg[0]);
                    counter.start();
                    observerNumber.unobserve(entry.target);
                }
            });
        },
        {
            rootMargin: "50px",
        }
    );
    numbersArr.forEach((element) => {
        observerNumber.observe(element);
    });
}

//
//
//
//
//  CHECKBOX IN SELECT -
//
//

const chBoxes = document.querySelectorAll(
    '.dropdown-menu input[type="checkbox"]'
);
const dpBtn = document.getElementById("multiSelectDropdown");
let mySelectedListItems = [];

function handleCB() {
    mySelectedListItems = [];
    let mySelectedListItemsText = "";

    chBoxes.forEach((checkbox) => {
        if (checkbox.checked) {
            mySelectedListItems.push(checkbox.value);
            mySelectedListItemsText += checkbox.value + ", ";
        }
    });

    dpBtn.innerText =
        mySelectedListItems.length > 0
            ? mySelectedListItemsText.slice(0, -2)
            : "Udogodnienia";
}

if (chBoxes && dpBtn) {
    chBoxes.forEach((checkbox) => {
        checkbox.addEventListener("change", handleCB);
    });
}

//
//
//
// Add non-breaking space after single letter
//
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("p").forEach(function (p) {
        p.innerHTML = p.innerHTML.replace(/ (\w) /g, " $1&nbsp;");
    });
});

//
//
//
//
// Changing rows to columns
//

const mainAxis = document.querySelector("#main-ap-axis");
const buttons = document.querySelector(".row-grid-btns");

if (mainAxis) {
    const rows = mainAxis.querySelectorAll("[data-axis='row']");
    const rowBtn = buttons.querySelector(".row-btn");
    const gridBtn = buttons.querySelector(".grid-btn");

    const setActiveButton = (activeButton) => {
        rowBtn.classList.toggle("active", activeButton === rowBtn);
        gridBtn.classList.toggle("active", activeButton === gridBtn);
    };

    gridBtn.addEventListener("click", () => {
        rows.forEach((row) => {
            row.classList.add("main-ap-box-grid");
        });
        setActiveButton(gridBtn);
    });

    rowBtn.addEventListener("click", () => {
        rows.forEach((row) => {
            row.classList.remove("main-ap-box-grid");
        });
        setActiveButton(rowBtn);
    });
}
