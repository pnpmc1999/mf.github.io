  $.getJSON('api/select/getdata/card.php', {

      }, function(d){
        //$("#card1").html();
        //$("#card2").html();
        $("#card3").html(d.sum_news);
        $("#card4").html(d.sum_bug);
      });

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChartLine);
      google.charts.setOnLoadCallback(drawChartPiehole);
      google.charts.setOnLoadCallback(drawChartTest);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'ระบบปฏิบติการ');
        data.addColumn('number', 'เปอร์เซ็นต์');
        data.addRows([
          ['IOS', 1000],
          ['ANDROID', 2000],
        ]);

        // Set chart options
        var options = {'title':'จำนวนผู้เล่นบนระบบปฏิบัติการต่างๆ',
                       'width':400,
                       'height':300,
                       'legend' : { position: 'bottom' },
                       'backgroundColor': { fill:'transparent' }
                     };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        var btnSave = document.getElementById('save-pdf1');

        google.visualization.events.addListener(chart, 'ready', function () {
           btnSave.disabled = false;
         });

         btnSave.addEventListener('click', function () {
          var doc = new jsPDF();
          doc.addImage(chart.getImageURI(), 0, 0);
          doc.save('รายงานจำนวนผู้เล่น.pdf');
        }, false);

        chart.draw(data, options);


      }

      function drawChartPiehole() {
         var data = google.visualization.arrayToDataTable([
           ['VIP', 'All Player'],
           ['VIP',     500],
           ['None',      1500],
         ]);

         var options = {
           title: 'จำนวนผู้เล่น VIP',
           'backgroundColor': { fill:'transparent' }

         };

         var chart = new google.visualization.BarChart(document.getElementById('donutchart'));
         var btnSave = document.getElementById('save-pdf2');

         google.visualization.events.addListener(chart, 'ready', function () {
            btnSave.disabled = false;
          });

          btnSave.addEventListener('click', function () {
           var doc = new jsPDF();
           doc.addImage(chart.getImageURI(), 0, 0);
           doc.save('รายงานจำนวนผู้เล่นประเภทVIP.pdf');
         }, false);

         chart.draw(data, options);
       }

      function drawChartLine() {
       var data = google.visualization.arrayToDataTable([
         ['เดือน', 'ใน Store', 'นอก Store'],
         ['มกราคม',  1000,      400],
         ['กุมภาพันธ์',  1170,      460],
         ['มีนาคม',  660,       1120],
         ['เมษายน',  1030,      800],
         ['พฤษภาคม',  700,      600],
         ['มิถุนายน',  658,      985],
         ['กรกรฎาคม',  800,      1500],
         ['สิงหาคม',  900,      1750],
         ['กันยายน',  785,      650],
         ['ตุลาคม',  765,      765],
         ['พฤศจิกายน',  635,      785],
         ['ธันวาคม',  1030,      285],
       ]);

       var options = {
         title: 'การเติมเงินภายใน / นอก Store ใน 1 ปี',
         curveType: 'function',
         legend: { position: 'right' },
         'backgroundColor': { fill:'transparent' }
       };

       var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
       var btnSave = document.getElementById('save-pdf3');

       google.visualization.events.addListener(chart, 'ready', function () {
          btnSave.disabled = false;
        });

        btnSave.addEventListener('click', function () {
         var doc = new jsPDF('l','pt','a4');
         doc.addImage(chart.getImageURI(), 0, 0,800,200);
         doc.save('รายงานการเติมเงิน.pdf');
       }, false);

       chart.draw(data, options);
     }




  function drawChartTest() {
        $.getJSON('api/select/getdata/getBugs.php', {

        }, function(d){

            var nocheck = d.nocheck;
            var passcheck = d.passcheck;
            var nopasscheck = d.nopasscheck;

            console.log(nocheck + passcheck + nopasscheck);
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'จำนวนบัค');
            data.addColumn('number', 'บัค');
            data.addRows([
              ['ยังไม่ได้ตรวจสอบ', nocheck],
              ['ผ่าน', passcheck],
              ['ไม่ผ่าน', nopasscheck],
            ]);

            // Set chart options
            var options = {'title':'จำนวนบัคที่ได้รับการตรวจสอบ',
                           'width':400,
                           'height':300,
                           'legend' : { position: 'bottom' },
                           'backgroundColor': { fill:'transparent' }
                         };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_test'));
            var btnSave = document.getElementById('save-pdf4');

            google.visualization.events.addListener(chart, 'ready', function () {
               btnSave.disabled = false;
             });

             btnSave.addEventListener('click', function () {
              var doc = new jsPDF();
              doc.addImage(chart.getImageURI(), 0, 0);
              doc.save('รายงานบัค.pdf');
            }, false);


            chart.draw(data, options);
            //alert(nocheck + passcheck + nopasscheck);

        //

        },'json');
      }
