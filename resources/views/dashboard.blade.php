<x-app-layout>

    <h5 class="mt-3">Bem vindo ao Monstrawn Academia</h5>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Atividades', 'Quantidade Vendida'],
          ['Tirar Foto "Tá Pago"',     13],
          ['Utilizar equipamento errado',      2],
          ['Ficar Impressionante',  1],
          ['Dar em cima de Casadas', 2],
          ['Ficar de Conversinha',    6]
        ]);

        var options = {
          title: 'O que as pessoas fazem na Academia'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div class="d-flex justify-content-center">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
</x-app-layout>
