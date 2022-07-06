'use strict';


const activeDate = [
    {
        date: 3,
        month: "April",
        year: 2022
    },{
        date: 4,
        month: "May",
        year: 2022
    },{
        date: 6,
        month: "June",
        year: 2022
    },{
        date: 20,
        month: "July",
        year: 2022
    },{
        date: 5,
        month: "August",
        year: 2022
    },{
        date: 10,
        month: "September",
        year: 2022
    },{
        date: 28,
        month: "October",
        year: 2022
    },{
        date: 2,
        month: "November",
        year: 2022
    },{
        date: 7,
        month: "December",
        year: 2022
    }
]

let dt = new Date();
function renderDate() {
    // let dateString = new Date();
    dt.setDate(1);
    let day = dt.getDay();
    let endDate = new Date(
        dt.getFullYear(),
        dt.getMonth() + 1,
        0
    ).getDate();
    let prevDate = new Date(
        dt.getFullYear(),
        dt.getMonth(),
        0
    ).getDate();
    let today = new Date();
    let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    document.getElementById("icalendarMonth").innerHTML = months[dt.getMonth()]  + " , " + dt.getFullYear();
    // document.getElementById("icalendarDateStr").innerHTML = dateString.toDateString();
    let cells = "";
    let countDate = 0;
    for (let x = day; x > 0; x--) {
        cells += "<div class='icalendar__prev-date'>" + (prevDate - x + 1) + "</div>";
    }
    for (let i = 1; i <= endDate; i++) {
        if (i === today.getDate() && dt.getMonth() === today.getMonth() && dt.getFullYear() === today.getFullYear()) {            
            cells += "<div class='icalendar__today'>" + i + "</div>";
        }else {
            let dateN = true;
            activeDate.map((item)=>{
                if(item.date == i && item.month == months[dt.getMonth()] && item.year == dt.getFullYear()){
                    cells += "<div class='booked'>" + i + "</div>";
                    dateN = false;
                }
                else if (dateN)
                {
                    cells += "<div>" + i + "</div>";
                    dateN = false;
                }
            })
            
        }
        countDate = i;
    }
    let reservedDateCells = countDate + day + 1;
    for (let j1 = reservedDateCells, j2 = 1; j1 <= 42; j1++, j2++) {
        cells += "<div class='icalendar__next-date'>" + j2 + "</div>";
    }
    document.getElementsByClassName("icalendar__days")[0].innerHTML = cells;
}
renderDate();
function moveDate(param) {
    if (param === 'prev') {
        dt.setMonth(dt.getMonth() - 1);
    } else if (param === 'next') {
        dt.setMonth(dt.getMonth() + 1);
    }
    renderDate();
}

// function moveMonth(param) {
//     dt.setMonth(param);
//     renderDate();
// }

// function moveYear(param) {
//     dt.setFullYear(param);
//     renderDate();
// }