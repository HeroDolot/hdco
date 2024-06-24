const lendingData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Lending Amount',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
        data: [1000, 1500, 1200, 1800, 2000, 1700] // Sample lending amounts for each month
    }]
};

// Create Lending Chart
const ctxLending = document.getElementById('lendingChart').getContext('2d');
const lendingChart = new Chart(ctxLending, {
    type: 'bar',
    data: lendingData,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
})

// pintig Palay data
const pintigPalay = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Pintig Palay Amount',
        backgroundColor: 'rgba(92, 184, 92, 0.2)', // Green color for success
        borderColor: 'rgba(92, 184, 92, 1)', // Dark green color for success
        borderWidth: 1,
        data: [800, 1200, 1000, 1500, 1800, 1600] // Sample pintig palay amounts for each month
    }]
};

// Create Pintig Palay Chart
const ctxPintigPalay = document.getElementById('pintigPalayChart').getContext('2d');
const pintigPalayChart = new Chart(ctxPintigPalay, {
    type: 'bar',
    data: pintigPalay,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});