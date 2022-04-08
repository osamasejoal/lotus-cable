

        </div>
        <!--.container-fluid-->
    </div>
    <!--.page-content-->



    <div class="control-panel-container">
        <ul>
            <li class="tasks">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle">
                        <span class="caret-down fa fa-caret-down"></span>
                        <span class="icon fa fa-tasks"></span>
                    </a>
                    <span class="text">Task list</span>
                    <div class="actions">
                        <a href="#">
                            <span class="fa fa-refresh"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-cog"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
                <div class="control-item-content">
                    <div class="control-item-content-text">You don't have pending tasks.</div>
                </div>
            </li>
            <li class="sticky-note">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle">
                        <span class="caret-down fa fa-caret-down"></span>
                        <span class="icon fa fa-file"></span>
                    </a>
                    <span class="text">Sticky Note</span>
                    <div class="actions">
                        <a href="#">
                            <span class="fa fa-refresh"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-cog"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
                <div class="control-item-content">
                    <div class="control-item-content-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut quas sapiente earum, expedita ullam
                        reprehenderit
                    </div>
                </div>
            </li>
            <li class="emails">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle">
                        <span class="caret-down fa fa-caret-down"></span>
                        <span class="icon fa fa-envelope"></span>
                    </a>
                    <span class="text">Recent e-mails</span>
                    <div class="actions">
                        <a href="#">
                            <span class="fa fa-refresh"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-cog"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
                <div class="control-item-content">
                    <section class="control-item-actions">
                        <a href="#" class="link">My e-mails</a>
                        <a href="#" class="mark">Mark visible as read</a>
                    </section>
                    <ul class="control-item-lists">
                        <li>
                            <a href="#">
                                <h6>Welcome to the Community!</h6>
                                <div>Hi, welcome to the my app...</div>
                                <div>
                                    Message text
                                </div>
                            </a>
                            <a href="#" class="reply-all">Reply all</a>
                        </li>
                        <li>
                            <a href="#">
                                <h6>Welcome to the Community!</h6>
                                <div>Hi, welcome to the my app...</div>
                                <div>
                                    Message text
                                </div>
                            </a>
                            <a href="#" class="reply-all">Reply all</a>
                        </li>
                        <li>
                            <a href="#">
                                <h6>Welcome to the Community!</h6>
                                <div>Hi, welcome to the my app...</div>
                                <div>
                                    Message text
                                </div>
                            </a>
                            <a href="#" class="reply-all">Reply all</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="add">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle no-caret">
                        <span class="icon fa fa-plus"></span>
                    </a>
                </div>
            </li>
        </ul>
        <a class="control-panel-toggle">
            <span class="fa fa-angle-double-left"></span>
        </a>
    </div>

    <script src="{{ asset('backend/assets') }}/js/lib/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/lib/popper/popper.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/lib/tether/tether.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/plugins.js"></script>

    <script type="text/javascript" src="{{ asset('backend/assets') }}/js/lib/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend/assets') }}/js/lib/lobipanel/lobipanel.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend/assets') }}/js/lib/match-height/jquery.matchHeight.min.js">
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        $(document).ready(function() {




            /*
            |--------------------------------------------------------------------------
            |                           ADD USER JS
            |--------------------------------------------------------------------------
            */
            $('.typeaccount').on('change', function() {

                let var2 = $('.typeaccount').val();

                if (var2 == 1) {
                    $("#admin-form").show();
                    $("#staff-form").hide();
                    $("#customer-form").hide();
                } else if (var2 == 2) {
                    $("#staff-form").show();
                    $("#admin-form").hide();
                    $("#customer-form").hide();
                } else {
                    $("#customer-form").show();
                    $("#admin-form").hide();
                    $("#staff-form").hide();
                }


            });




            $('.panel').each(function() {
                try {
                    $(this).lobiPanel({
                        sortable: true
                    }).on('dragged.lobiPanel', function(ev, lobiPanel) {
                        $('.dahsboard-column').matchHeight();
                    });
                } catch (err) {}
            });

            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataTable = new google.visualization.DataTable();
                dataTable.addColumn('string', 'Day');
                dataTable.addColumn('number', 'Values');
                // A column for custom tooltip content
                dataTable.addColumn({
                    type: 'string',
                    role: 'tooltip',
                    'p': {
                        'html': true
                    }
                });
                dataTable.addRows([
                    ['MON', 130, ' '],
                    ['TUE', 130, '130'],
                    ['WED', 180, '180'],
                    ['THU', 175, '175'],
                    ['FRI', 200, '200'],
                    ['SAT', 170, '170'],
                    ['SUN', 250, '250'],
                    ['MON', 220, '220'],
                    ['TUE', 220, ' ']
                ]);

                var options = {
                    height: 314,
                    legend: 'none',
                    areaOpacity: 0.18,
                    axisTitlesPosition: 'out',
                    hAxis: {
                        title: '',
                        textStyle: {
                            color: '#fff',
                            fontName: 'Proxima Nova',
                            fontSize: 11,
                            bold: true,
                            italic: false
                        },
                        textPosition: 'out'
                    },
                    vAxis: {
                        minValue: 0,
                        textPosition: 'out',
                        textStyle: {
                            color: '#fff',
                            fontName: 'Proxima Nova',
                            fontSize: 11,
                            bold: true,
                            italic: false
                        },
                        baselineColor: '#16b4fc',
                        ticks: [0, 25, 50, 75, 100, 125, 150, 175, 200, 225, 250, 275, 300, 325, 350],
                        gridlines: {
                            color: '#1ba0fc',
                            count: 15
                        }
                    },
                    lineWidth: 2,
                    colors: ['#fff'],
                    curveType: 'function',
                    pointSize: 5,
                    pointShapeType: 'circle',
                    pointFillColor: '#f00',
                    backgroundColor: {
                        fill: '#008ffb',
                        strokeWidth: 0,
                    },
                    chartArea: {
                        left: 0,
                        top: 0,
                        width: '100%',
                        height: '100%'
                    },
                    fontSize: 11,
                    fontName: 'Proxima Nova',
                    tooltip: {
                        trigger: 'selection',
                        isHtml: true
                    }
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                chart.draw(dataTable, options);
            }
            $(window).resize(function() {
                drawChart();
                setTimeout(function() {}, 1000);
            });
        });
    </script>
    <script src="{{ asset('backend/assets') }}/js/app.js"></script>


    @yield('main-script-content')


</body>

</html>
