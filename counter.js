let interval;
let timeLeft;

const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');

const startCounter = (minutesNumber = 25) => {
    let dateSet;
    if (timeLeft != null) {
        dateSet = dayjs().add(timeLeft, 'ms').add(100, 'ms');
    } else {
        dateSet = dayjs().add(minutesNumber, 'minutes').add(1, 'second');
    }
    interval = setInterval(() => {
        const currentDateMS = dateSet.diff(dayjs());
        const currentDate = dayjs(currentDateMS);
        minutes.innerText = currentDate.minute();
        seconds.innerText = currentDate.second();
        timeLeft = dateSet.diff(dayjs(), 'ms');
    }, 100);
}

startCounter(25);

const pause = () => {
    clearInterval(interval);
    interval = null;
}
const stop = () => {
    clearInterval(interval);
    timeLeft = null;
    interval = null;
    minutes.innerText = '00';
    seconds.innerText = '00';
    var modal1 = document.getElementById("executing_task_modal");
    modal1.style.display = "none";
    let tid;
    var table = document.getElementsByTagName('table')[0];
    var rows = table.getElementsByTagName('tr');
    for (var i = 0; i < rows.length; i++) {
        var cols = rows[i].getElementsByTagName('td');
        if (cols.length > 0 && cols[2].innerText === 'Executando') {
            // Open the modal
            tid = cols[0].innerText;
            break;
        }
    }
    fetch(`stop.php?tid=${tid}`, {
        method: 'GET', headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        }
    }).then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    }).then(data => {
        console.log('Success:', data);
        setTimeout(() => {
            location.reload();
        }, 200);
    }).catch((error) => {
        console.error('Error:', error);
    });
}