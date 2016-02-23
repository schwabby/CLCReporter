$(document).ready(function(){    
 var stringData = $("#jsonOutput").html();
 var jsonData = $.parseJSON( stringData );
 
 var data = {
     dateRange : [],
     cpuData : [],
     diskData : [],
     ramData : [],
     serverData : [],
     storageData : []
 };
 
jsonData.forEach(function(item){
   data.dateRange.push(item.Date);
   data.cpuData.push(parseInt(item.CPU));
   data.diskData.push(parseInt(item.Disks));
   data.ramData.push(parseInt(item.RAM));
   data.serverData.push(parseInt(item.Servers));
   data.storageData.push(parseInt(item.Storage));
 });

graphCustomerData(data);
});



function graphCustomerData (data) {
   $('#lineGraph').highcharts({
    chart: {
        type: 'line'
    },
    title: {
        text: 'ARRS_Resources Consumption'
    },
    xAxis: {
        categories: data.dateRange
    },
    yAxis: {
        title: {
            text: 'ARRS Resource Consumption'
        }
    },
    series: [{
            name: 'CPU',
            data: data.cpuData
        }, {
            name: 'Disks',
            data: data.diskData
        }, {
            name: 'RAM',
            data: data.ramData
        }, {
            name: 'Servers',
            data: data.serverData
        }, {
        name: 'Storage',
            data: data.storageData
        }
        ]
  })
};