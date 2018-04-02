var myChart = echarts.init(document.getElementById('user_platform'));
myChart.setOption({
        // grid:{x: '100%', y: '100%', width: '100%', height: '100%'},
        series : [
            {
            color: ['#61a0a8', '#d48265', '#749f83', '#546570', '#c4ccd3', '#c23531', '#2f4554', '#ca8622', '#bda29a','#6e7074'],
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            shadowBlur: 200,
            shadowOffsetX: 0,
            shadowOffsetY: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)',
            itemStyle: {
                emphasis: {
                    shadowBlur: 200,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            },
            // roseType: 'angle',
            data:[
                {value:72, name:'QQ空间'},
                {value:40, name:'微信朋友圈、公众号'},
                {value:48, name:'新浪微博'},
                {value:8, name:'各类博客'},
                {value:56, name:'新闻网站'},
                {value:28, name:'各类论坛'},
                {value:20, name:'百度贴吧'},
                {value:9, name:'其他'}
            ]
        }
    ]
});

option = {
    color: ['#d48265',],
    xAxis: {
        axisLabel: {
           interval:0,
           rotate:40
       },
        type: 'category',
        data: [
            '合肥工业大学',
            '合肥工业大学团委',
            '微言合工大',
            '合肥工业大学学生会',
            '合工大建艺',
            '合工大资环学院',
            '合工大计算机与信息学院',
            '合工大食品学院',
            '合工大土木学院',
            '合工大材料学院',
            '仪器风发',
            '工大后院儿',
        ]
    },
    yAxis: {
        type: 'value'
    },
    series: [{
        data: [
            690,
            550,
            400,
            392,
            300,
            288,
            280,
            269,
            260,
            255,
            217,
            200
        ],
        type: 'bar'
    }]
};
var myChart = echarts.init(document.getElementById('WCI'));
myChart.setOption(option);


var myChart = echarts.init(document.getElementById('WeiBo'));
// myChart.showLoading();

$.getJSON('../data/weibo.json', function (json) {
    // myChart.hideLoading();
    myChart.setOption(option = {
        // animationDurationUpdate: 2000,
        // animationEasingUpdate: 'quinticInOut',
        series : [
            {
                type: 'graph',
                // layout: 'none',
                // progressiveThreshold: 700,
                data: json.nodes.map(function (node) {
                    return {
                        x: node.x,
                        y: node.y,
                        id: node.id,
                        name: node.label,
                        symbolSize: node.size,
                        itemStyle: {
                            normal: {
                                color: node.color
                            }
                        }
                    };
                }),
                edges: json.edges.map(function (edge) {
                    return {
                        source: edge.sourceID,
                        target: edge.targetID
                    };
                }),
                label: {
                    value: '',
                    emphasis: {
                        position: 'bottom',
                        show: true
                    }
                },
                // roam: true,
                focusNodeAdjacency: true,
                lineStyle: {
                    normal: {
                        width: 0.6,
                        curveness: 0.2,
                        opacity: 0.9
                    }
                }
            }
        ]
    }, true);
});
