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
}