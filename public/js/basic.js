var myChart = echarts.init(document.getElementById('user_time'));
myChart.setOption({
        series : [
            {
            color: ['#6e7074', '#749f83',  '#ca8622', '#bda29a', '#546570', '#c4ccd3', '#c23531','#2f4554', '#61a0a8', '#d48265', ],
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
            roseType: 'angle',
            data:[
                {value:4, name:'1小时以内'},
                {value:12, name:'1-3小时'},
                {value:38, name:'3-5小时'},
                {value:46, name:'5小时以上'},
            ]
        }
    ]
});
var myChart = echarts.init(document.getElementById('user_care'));
myChart.setOption({
        series : [
            {
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
            roseType: 'angle',
            data:[
                {value:68, name:'玩游戏'},
                {value:64, name:'关注动态 QQ空间、朋友圈、微博等、贴吧'},
                {value:20, name:'网上购物'},
                {value:72, name:'即时通讯(QQ、微信等)'},
                {value:44, name:'追剧看电影'},
                {value:44, name:'学习！'},
                {value:12, name:'其他'}
            ]
        }
    ]
});
