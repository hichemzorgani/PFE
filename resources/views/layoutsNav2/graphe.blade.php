@include('partials.nav2')
<html lang="en">
  <head>
    <!-- Other meta tags and stylesheets -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
  </head>
  <body>
    <!-- Your HTML content -->
    <div class="container">
      <div class="d-flex justify-content-center row mt-5">
        <div class="col-10">
          <canvas id="bar-chart"></canvas>
        </div>
      </div>
    </div>

    <!-- Your other scripts -->
    <script type="text/javascript">
      // Chart data
      const dataBar = {
        type: 'bar',
        data: {
          labels: [{{$currentYear - 15}},{{$currentYear - 14}},{{$currentYear - 13}},{{$currentYear - 12}},{{$currentYear - 11}}, {{$currentYear - 10}}, {{$currentYear - 9}}, {{$currentYear - 8}}, {{$currentYear - 7}}, {{$currentYear - 6}}
          , {{$currentYear - 5}},{{$currentYear - 4}},{{$currentYear - 3}},{{$currentYear - 2}},{{$currentYear - 1}},{{$currentYear}}],
          datasets: [{
            label: 'Traffic',
            data: [{{$C15}}, {{$C14}}, {{$C13}}, {{$C12}}, {{$C11}}, {{$C10}}, {{$C9}}, {{$C8}}, {{$C7}}, {{$C6}}, {{$C5}},{{$C4}},{{$C3}},{{$C2}},{{$C1}},{{$C0}}],
            backgroundColor: 'rgb(219, 145, 8)', // Background color
            borderColor: 'gray', // Border color
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                stepSize: 2, // Adjust step size as needed
                callback: function (value) {
                  return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
              }
            }
          }
        }
      };

      // Create the chart
      new Chart(document.getElementById('bar-chart'), dataBar);
    </script>
  </body>
</html>
