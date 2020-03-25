  $.getJSON('api/select/getdata/getItem.php', {

  }, function(d){
      $("#card1").html(d.sum_equip);
      $("#card2").html(d.sum_item);
      $("#card3").html(d.sum_quest);
      $("#card4").html(d.sum_spell);
  });

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(chart_div1);
      google.charts.setOnLoadCallback(chart_div2);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.


  function chart_div1() {
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
            var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
            var btnSave = document.getElementById('save-pdf1');

            google.visualization.events.addListener(chart, 'ready', function () {
               btnSave.disabled = false;
             });

             btnSave.addEventListener('click', function () {
              var doc = new jsPDF();
              doc.addImage(chart.getImageURI(), 0, 0);
              doc.save('chart.pdf');
            }, false);

            chart.draw(data, options);
            //alert(nocheck + passcheck + nopasscheck);

        //

        },'json');
      }

      function chart_div2() {
          $.getJSON('api/select/getdata/getBugs.php', {

          }, function(d) {
                let type1 = d.type1;
                let type2 = d.type2;

              var data = google.visualization.arrayToDataTable([
                ['ประเภทบัค', 'จำนวน'],
                ['Feature Bugs',  type1],
                ['Bugs',  type2],
              ]);

              var options = {
                title: 'จำนวนของประเภทบัคที่เกิดขึ้น',
                'backgroundColor': { fill:'transparent' }

              };

              var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));
              var btnSave = document.getElementById('save-pdf2');

              google.visualization.events.addListener(chart, 'ready', function () {
                 btnSave.disabled = false;
               });

               btnSave.addEventListener('click', function () {
                var doc = new jsPDF();
                doc.addImage(chart.getImageURI(), 0, 0);
                doc.save('chart.pdf');
              }, false);
              chart.draw(data, options);
          });

       }
