<?php $this->start('head'); ?>
<link rel="stylesheet" href="<?=PROOT?>assets/vendors/calendar/fullcalendar.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <main class="ttr-main">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li>
                        <a href=""><i class="flaticon-home-1"></i>Home</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="grid-home">
                    <div class="widget-card grid-full cs">
                        <div class="wc-item chart">
                            <div>
                                <h4 class="wc-num">1500</h4>
                                <div class="wc-des">
                                    <span>students</span>
                                    <p>total number of students</p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="widget-card cf">
                        <div class="wc-item">
                            <h4 class="wc-num">54</h4>
                            <div class="wc-des">
                                <span>faculty members</span>
                                <p>total number of faculties</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-card ca">
                        <div class="wc-item">
                            <h4 class="wc-num">5</h4>
                            <div class="wc-des">
                                <span>academic programs</span>
                                <p>total number of academic programs</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-card cc">
                        <div class="wc-item">
                            <h4 class="wc-num">613</h4>
                            <div class="wc-des">
                                <span>courses</span>
                                <p>total number of school courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>School Calendar</h4>
                    </div>
                    <div class="widget-inner">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- CALENDAR -->
    <script src="<?=PROOT?>assets/vendors/calendar/moment.min.js"></script>
    <script src="<?=PROOT?>assets/vendors/calendar/fullcalendar.js"></script>

    <!-- CHARTJS -->
    <script src="<?=PROOT?>assets/vendors/chart/Chart.min.js"></script>
    <script src="<?=PROOT?>assets/vendors/chart/chartjs-plugin-datalabels.js"></script>
    <script src="<?=PROOT?>assets/js/chart_script.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
        
            $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2019-03-12',
            navLinks: true, // can click day/week names to navigate views
        
            weekNumbers: true,
            weekNumbersWithinDays: true,
            weekNumberCalculation: 'ISO',
        
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                title: 'All Day Event',
                start: '2019-03-01'
                },
                {
                title: 'Long Event',
                start: '2019-03-07',
                end: '2019-03-10'
                },
                {
                id: 999,
                title: 'Repeating Event',
                start: '2019-03-09T16:00:00'
                },
                {
                id: 999,
                title: 'Repeating Event',
                start: '2019-03-16T16:00:00'
                },
                {
                title: 'Conference',
                start: '2019-03-11',
                end: '2019-03-13'
                },
                {
                title: 'Meeting',
                start: '2019-03-12T10:30:00',
                end: '2019-03-12T12:30:00'
                },
                {
                title: 'Lunch',
                start: '2019-03-12T12:00:00'
                },
                {
                title: 'Meeting',
                start: '2019-03-12T14:30:00'
                },
                {
                title: 'Happy Hour',
                start: '2019-03-12T17:30:00'
                },
                {
                title: 'Dinner',
                start: '2019-03-12T20:00:00'
                },
                {
                title: 'Birthday Party',
                start: '2019-03-13T07:00:00'
                },
                {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2019-03-28'
                }
            ]
            });
        
        });
    </script>
<?php $this->end(); ?>