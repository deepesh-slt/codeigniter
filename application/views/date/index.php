<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Picker Pluign</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.datepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom_datepicker/dg_datepicker.css'); ?>">
</head>
<body>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2">
                    <form action="" autocomplete="off">
                        <input type="text" name="date" id="date" class="form-control">
                        <input type="text" name="time" class="form-control">
                        <input type="date" name="newDate" class="form-control" min-date="22-09-2021">
                        <input type="submit" name="submit" id="submit" class="form-control btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div id="dg-datepicker-wrapper" class="dg-datepicker d-none">
        <div class="dg-datepicker-container">
            <div class="dg-header">
                <div class="dg-header-range">
                    <h4>From</h4>
                </div>
                <div class="dg-header-year">
                    <p>{2021}</p>
                </div>
                <div class="dg-header-date-and-day">
                    <div class="day">
                        <p>{Friday},&nbsp;</p>
                    </div>
                    <div class="month">
                        <p>{August}&nbsp;</p>
                    </div>
                    <div class="date">
                        <p>{13}</p>
                    </div>
                </div>
                <div class="dg-header-time">

                </div>
            </div>
            <div class="dg-select">
                <select name="dg-select-year" id="dg-select-year" class="dg-select-year" title="Select a year">
                    <option value="{2021}">{2021}</option>
                    <option value="{2022}">{2022}</option>
                </select>
                <select name="dg-select-month" id="dg-select-month" class="dg-select-month" title="Select a month">
                    <option value="{0}">{January}</option>
                    <option value="{1}">{February}</option>
                </select>
                <button class="dg-select-nav dg-select-nav-prev"><</button>
                <button class="dg-select-nav dg-select-nav-next">></button>
            </div>
            <div class="dg-table-wrapper">
                <table class="dg-table">
                    <thead>
                        <tr>
                            <th title="{Sunday}">Sun</th>
                            <th title="{Monday}">Mon</th>
                            <th title="{Tueday}">Tue</th>
                            <th title="{Wednesday}">Wed</th>
                            <th title="{Thursday}">Thu</th>
                            <th title="{Friday}">Fri</th>
                            <th title="{Satday}">Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                                <div class="dg-date" date-pick="1628706600000" aria-label="2021/08/12">12</div>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="dg-footer"></div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/custom_datepicker/dg_datepicker.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.datepicker.min.js'); ?>"></script>

    <script>
        var today = new Date();
        var endDate = new Date(today.getTime() + (30*86400000)); // (mili-seconds from 1-1-1970) + (days*mili-seconds in one day)
        $('input[type=text]').dg_datepicker();
        $('input[type=date]').dg_datepicker();
        $('#date').dg_datepicker({
            type: 'month',
            readonly: true,
            disabled: false,
            placeholder: 'Pick a date',
            format: 'dd-MM-yyyy',
            weekStart: '1',
            startDate: today,
            endDate: endDate,
            rangeSeparator: 'to',
            // timezone : 'Asia/Kolkata',
            // monthFullName : true,
            // zIndex: 1020,
        });

        // console.log(`${today} and ${endDate}`);
    </script>
    <script>
        function setPosition(){
            var offset = $('#date').offset();
            var height = $('#date').outerHeight();
            var width = $('#date').outerWidth()/2;
            var top = offset.top + height + "px";
            var right = offset.left + width + "px";

            $('#dg-datepicker-wrapper').css( {
                'position': 'fixed',
                'right': right,
                'top': top,
                'left' : 'auto',
                'bottom' : 'auto',
                'transform' : 'translateX(50%)'
            });

            // var position = $(`#date`).position();
            // $(`#dg-datepicker-wrapper`).css({'position' : 'fixed', 'left' : position.left, 'top' : position.top, 'right' : 'auto', 'bottom' : 'auto'});

            // console.log(position);
        }

        setPosition();
        $(window).scroll(setPosition);
    </script>
</body>
</html>