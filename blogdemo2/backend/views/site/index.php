<?php

use common\models\Comment;
use common\models\User;
use common\models\Adminuser;
use common\models\Post;
use common\models\Tag;
/* @var $this yii\web\View */



$this->title = '管理员后台';
?>
<div id="main" style="width: 1200px;height:700px;"></div>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: 'Dashboard'
        },
        tooltip: {},
        legend: {
            data: ['数量']
        },
        xAxis: {
            data: ['用户数', '管理员数', '文章数', '标签数', '评论数', '待审核评论']
        },
        yAxis: {},
        series: [
            {
                name: '数量',
                type: 'bar',
                data: [{
                    value: <?=User::getUserCount()?>,
                    // 设置单个柱子的样式
                    itemStyle: {
                        color: '#91cc75',
                        shadowColor: '#91cc75',
                        borderType: 'dashed',
                        opacity: 0.5
                    }
                }, {
                    value: <?=Adminuser::getAdminuserCount()?>,
                    // 设置单个柱子的样式
                    itemStyle: {
                        color: '#75cccc',
                        shadowColor: '#91cc75',
                        borderType: 'dashed',
                        opacity: 0.5
                    }
                },{
                    value:  <?=Post::getPostCount()?>,
                    // 设置单个柱子的样式
                    itemStyle: {
                        color: '#7591cc',
                        shadowColor: '#75ccb2',
                        borderType: 'dashed',
                        opacity: 0.5
                    }
                },{
                    value: <?=Tag::getTagCount()?>,
                    // 设置单个柱子的样式
                    itemStyle: {
                        color: '#8875cc',
                        shadowColor: '#7593cc',
                        borderType: 'dashed',
                        opacity: 0.5
                    }
                },{
                    value: <?=Comment::getCommentCount()?>,
                    // 设置单个柱子的样式
                    itemStyle: {
                        color: '#cc75c8',
                        shadowColor: '#8b75cc',
                        borderType: 'dashed',
                        opacity: 0.5
                    }
                } ,{
                    value:  <?=Comment::getPengdingCommentCount()?>,
                    // 设置单个柱子的样式
                    itemStyle: {
                        color: '#cc7575',
                        shadowColor: '#cc75cb',
                        borderType: 'dashed',
                        opacity: 0.5
                    }
                }]
            }
        ]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>