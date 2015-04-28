function getServerUsage($val){
    $.ajax({
        url : "http://harrisonsouth.co.uk/blip/api/servers/" + $val + "/usage",
        method : "GET",
        success : function(data){
           $cpu = (data[data.length-1].cpu);
           $ram = (data[data.length-1].memory);
           $hdd = (data[data.length-1].diskspace);
           $ban = (data[data.length-1].bandwidth);

           document.getElementById('bandHolder').innerHTML=$ban;
           document.getElementById('hddHolder').innerHTML=$hdd;
           document.getElementById('cpuHolder').innerHTML=$cpu + "%";
           document.getElementById('ramHolder').innerHTML=$ram;
           $s=getBaseHardwareStats($val);
           $totRam=$s[0];
           $totHdd=$s[1];

           $hddp=Math.floor((($hdd/$totHdd)*100));
           document.getElementById('ramHolder').innerHTML=$hddp + "%";


           $ramp=Math.floor((($ram/$totRam)*100));
           document.getElementById('hddHolder').innerHTML=$ramp + "%";

           console.log("RAM PERCENT" + $ramp);

           var cpuDiv = document.querySelector("#cpuHolder");
           cpuDiv.style.backgroundColor = "rgb(" + Math.floor((255*$cpu)/100)+ "," + Math.floor(((100-$cpu)*255)/100) +",0)";

           var hddDiv = document.querySelector("#hddHolder");
           hddDiv.style.backgroundColor = "rgb(" + Math.floor((255*$hddp)/100)+ "," + Math.floor(((100-$hddp)*255)/100) +",0)";

           var ramDiv = document.querySelector("#ramHolder");
           ramDiv.style.backgroundColor = "rgb(" + Math.floor((255*$ramp)/100)+ "," + Math.floor(((100-$ramp)*255)/100) +",0)";

           $d=data;
       }

   });


return $cpu;
}

function getBaseHardwareStats($val){
    $.ajax({
        url : "http://harrisonsouth.co.uk/blip/api/servers/" + $val,
        method : "GET",
        success : function(data){

           $totRam=data.ram_space;
           $totHdd=data.hdd_space;

           
       }

   });
    
    
    $s=[$totRam, $totHdd];
    return $s;
}

function graph() {
    $(function () {
        $(document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC: false
                }
            });

            $('#containerr').highcharts({
                chart: {
                    type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                            y = getServerUsage(getGlobalServer())
                            series.addPoint([x, y], true, true);
                        }, 2000);
                    }
                }
            },
            title: {
                text: 'Live CPU usage %'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150
            },
            credits: {
                enabled: false
            },
            yAxis: {
                title: {
                    text: 'CPU%'
                },

                min:0,
                max:100,

                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                    Highcharts.numberFormat(this.y, 2);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Random data',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                    time = (new Date()).getTime(),
                    i;

                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: null
                        });
                    }
                    return data;
                }())
            }]
        });
});
});
}