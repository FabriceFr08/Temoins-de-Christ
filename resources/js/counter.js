const calculateTimeLeft = () => {
    const now = new Date().getTime();
    const endDate = new Date('2024-07-15T00:00:00Z').getTime(); // Date de début de la formation

    let timeLeft = endDate - now;

    if (timeLeft < 0) {
        timeLeft = 0;
    }

    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    return {
        total: timeLeft,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds
    };
};

const startTimer = () => {
    const interval = setInterval(() => {
        const timeLeft = calculateTimeLeft();

        document.getElementById('days').textContent = String(timeLeft.days).padStart(2, '0');
        document.getElementById('hours').textContent = String(timeLeft.hours).padStart(2, '0');
        document.getElementById('minutes').textContent = String(timeLeft.minutes).padStart(2, '0');
        document.getElementById('seconds').textContent = String(timeLeft.seconds).padStart(2, '0');

        if (timeLeft.total <= 0) {
            clearInterval(interval);
        }
    }, 1);
};

startTimer();
