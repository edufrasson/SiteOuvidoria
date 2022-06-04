<script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([

                ['Status','Total'],
                <?php foreach($data as $item): ?>
                    <?php echo "['".$item->status_reclamacao."',".$item->total."],"; ?>
                <?php endforeach ?>    
            ]);

            var options = {
                title: 'Total de reclamações por status',
                pieHole: 0.5,
                pieSliceTextStyle: {
                    color: 'white',
                }
                
            };
            var chart = new google.visualization.PieChart(document.getElementById("columnchart1"));
            chart.draw(data,options);
        }

</script>