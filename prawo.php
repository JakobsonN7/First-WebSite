<div class="col-xl-3 col-l-3 col-md-3 col-s-12 col-xs-12 sidebarright">
    <div class="kal">
        <div class="kalendarz">
            <h1 class="title">Kalendarz</h1>
            <div id="container" class="calendar-container"></div>

            <script>
                $(document).ready(function () {
                    $("#container").simpleCalendar({
                        fixedStartDay: 0,
                        disableEmptyDetails: true,
                        events: [
                            {
                                startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
                                endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
                                summary: 'Rezerwacja budowy'
                            },
                            {
                                startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
                                endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
                                summary: 'Budowa'
                            },
                            {
                                startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
                                endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
                                summary: 'Transport'
                            }
                        ],

                    });
                });
            </script>
        </div>
    </div>
    <div>
        <script data-ad-client="ca-pub-9854708000813055" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </div>
</div>