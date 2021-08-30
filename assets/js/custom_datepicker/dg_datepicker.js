/**
* Created by Deepesh Gupta
*/

(function($){
        
/**
*    @type : array(
*            date, time, weekdays, month, year, (will consider ONLY{input} - mix inputs for combinations of multi-select) |
*            fulldate (date + weekdays + month + year), fullmonth (month + year) |
*            (wlil consider weeks also (week 3 to week 52)) |
*    )
*    @multiSelect : true/false (select-date, select-weekdays, select-month, select-year) --> <depricated>
*    @range : true/false ( date-range, time-range, weekdays-range, month-range, year-range, datetime-range, weekdaystime-range, monthtime-range, yeartime-range) --> <depricated>
*    @ampm : true/false,
*    @editByType : true/false
*    @disabled : true/false
*    @placeholder : PlaceHolder (type string)
*    @format : Format of date that will send as a value
*    @weekStart : 0 means week starts with sunday [0,1,2,3...] = [Sun, Mon, Tue..]
*    @startDate : Today with timezone of IST (Indian Standard TimeZone) (Max Limit is 100 Years before today)
*    @endDate : No End Date Limit (Max Limit is 100 Years after today)
*    @rangeSaperator : If use range:true, saperator between two dates/times
*    @multiSelectSelector : If use multiSelect:true, saperator between every value
*    @timezone : TimeZone of Date
*    @leftBtn : 
*    @rightBtn : 
*    @monthFullName : show Apr instead of 04
*    @zIndex : z-index of whole dg_datepicker DOM
*/

    $.fn.dg_datepicker = function(options){

        return this.each(function(global_i, global_e){
          var e = $(this);
          
          // Get default arguments
          var settings = $.extend(true, {}, $.fn.dg_datepicker.defaults, options);

          // Necessary Variables
          var dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
          var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
          var monthNamesShort = shorten(monthNames, 3);
          var dayNamesShort = shorten(dayNames, 3);

          // output
          finalOutput = `<div class="dg-datepicker" style="z-index: ${settings.zIndex}">
                              <div class="dg-datepicker-bg">
                                  <div id="dg_datepicker-container" class="dg-datepicker-container">
                                  <div>
                              </div>
                          </div>`;

          // Data
          // var selectedYear = '';
          // var selectedMonth = '';
          // var selectedDate = '';
          // var selectedDay = '';

          // Necessary Objects
          var formatFlags = {
              D: function(dateObj) {
                return dateObj.getDay();
              },
              DD: function(dateObj) {
                return pad(dateObj.getDay());
              },
              Do: function(dateObj, i18n) {
                return i18n.DoFn(dateObj.getDate());
              },
              d: function(dateObj) {
                return dateObj.getDate();
              },
              dd: function(dateObj) {
                return pad(dateObj.getDate());
              },
              ddd: function(dateObj, i18n) {
                return i18n.dayNamesShort[dateObj.getDay()];
              },
              dddd: function(dateObj, i18n) {
                return i18n.dayNames[dateObj.getDay()];
              },
              M: function(dateObj) {
                return dateObj.getMonth() + 1;
              },
              MM: function(dateObj) {
                return pad(dateObj.getMonth() + 1);
              },
              MMM: function(dateObj, i18n) {
                return i18n.monthNamesShort[dateObj.getMonth()];
              },
              MMMM: function(dateObj, i18n) {
                return i18n.monthNames[dateObj.getMonth()];
              },
              yy: function(dateObj) {
                return String(dateObj.getFullYear()).substr(2);
              },
              yyyy: function(dateObj) {
                return dateObj.getFullYear();
              },
              h: function(dateObj) {
                return dateObj.getHours() % 12 || 12;
              },
              hh: function(dateObj) {
                return pad(dateObj.getHours() % 12 || 12);
              },
              H: function(dateObj) {
                return dateObj.getHours();
              },
              HH: function(dateObj) {
                return pad(dateObj.getHours());
              },
              m: function(dateObj) {
                return dateObj.getMinutes();
              },
              mm: function(dateObj) {
                return pad(dateObj.getMinutes());
              },
              s: function(dateObj) {
                return dateObj.getSeconds();
              },
              ss: function(dateObj) {
                return pad(dateObj.getSeconds());
              },
              S: function(dateObj) {
                return Math.round(dateObj.getMilliseconds() / 100);
              },
              SS: function(dateObj) {
                return pad(Math.round(dateObj.getMilliseconds() / 10), 2);
              },
              SSS: function(dateObj) {
                return pad(dateObj.getMilliseconds(), 3);
              },
              a: function(dateObj, i18n) {
                return dateObj.getHours() < 12 ? i18n.amPm[0] : i18n.amPm[1];
              },
              A: function(dateObj, i18n) {
                return dateObj.getHours() < 12 ? i18n.amPm[0].toUpperCase() : i18n.amPm[1].toUpperCase();
              },
              ZZ: function(dateObj) {
                var o = dateObj.getTimezoneOffset();
                return (o > 0 ? '-' : '+') + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4);
              }
            };

          // Necessary Functions
          function shorten(arr, sLen){
              arr.forEach((e,i) => {
                  arr[i] = e.substr(0, sLen);
              });
              return arr;
          }

          function redesignInput(){
            e.attr('type', 'hidden');
            
            // cover input tag with a custom div element
            e.after(`<div data-dg-picker="dg-picker-number-${global_i}" id="dg-datepicker-date-input-${global_i}" class="dg-datepicker-date-input ${e.attr('class')}"></div>`);

            // After creating element, append clone of input type
            $(document).ready(function(){
              $(`#dg-datepicker-date-input-${global_i}`).append(e.clone());
            });

            // Remove Input Type Outside of our element
            e.remove();
          }

          function dg_datepicker_template(component = '', type = []){
            var outerComponent = `<div class="dg-datepicker" style="position :">
                                    <div class="dg-datepicker-container">
                                    
                                    <!-- Header -->
                                      <div class="dg-header">
                                        <%_headerComponent_%>
                                      </div>

                                      <!-- Body -->
                                      <div class="dg-body">
                                        <%_bodyComponent_%>
                                      </div>

                                      <!-- Footer -->
                                      <div class="dg-footer">
                                        <%_footerComponent_%>
                                      </div>
                                    </div>
                                  </div>`;
            
            var headerComponentFulldate = `<div class="dg-header-year">
                                                <p><%_headerYear_%></p>
                                            </div>
                                            <div class="dg-header-date-and-day">
                                                <div class="day">
                                                    <p><%_headerWeekday_%>,&nbsp;</p>
                                                </div>
                                                <div class="month">
                                                    <p><%_headerMonth_%>&nbsp;</p>
                                                </div>
                                                <div class="date">
                                                    <p><%_headerDate_%></p>
                                                </div>
                                            </div>`;

            

            if($.isArray(settings.type)) {
              if($.inArray('time', settings.type)) {
                headerComponentFulldate += `<div class="dg-header-time">

                                            </div>`;
              }
            }
            
            switch (component) {
              case 'outer':
                
                break;
            
              default:
                break;
            }
          }

          function _init(){

          }

          function _create(){
              
          }

          function _output(){

              $('body').append(finalOutput);
          }
          
          function dg_datepicker_open(){
            _init();
            _create();
            _output();
          }

          function autoCall(){
            redesignInput();
          }

          // Open Connection
          $(this).on('click', function(event){
            event.preventDefault();
            dg_datepicker_open();
          });

          // Function that does not need any event to run
          autoCall();

          // Console Anything
          print(settings);
        });
    }

    
    $.fn.dg_datepicker.defaults = {
        type : 'date', 
        // multiSelect : false,
        // range : false,
        ampm : true,
        editByType : false, 
        disabled : false, 
        placeholder : 'Please Pick A Day', 
        format : 'dd-MM-yyyy', 
        weekStart : 0, 
        startDate : '', 
        endDate : '', 
        rangeSaperator : 'to', 
        multiSelectSelector : ', ', 
        timezone : 'Asia/Kolkata',
        leftBtn : '<',
        rightBtn : '>',
        fullMonthNames : false,
        fullDayNames : false,
        zIndex : 1020,
    };

    // Design of Previous Month Button
    $.fn.dg_datepicker.leftBtn = function (text = '<') {
      return `<button class="dg-select-nav dg-select-nav-prev">${text}</button>`;
    };
    
    // Design of Next Month Button
    $.fn.dg_datepicker.rightBtn = function (text = '<') {
      return `<button class="dg-select-nav dg-select-nav-next">${text}</button>`;
    };

    function print(param = '', isAnError = false){
      if(isAnError === false || isAnError === undefined || isAnError === null) {
        window.console.log(param);
      } else {
        window.console.error(param);
      }
    }
}(jQuery));

// function dg_datepicker(){
//     $('form').each( (i,e) => {
//         $(`${e} .dg-datepicker`).each( (i,e) => {
//             var type = $(e).data('dg-type') !== undefined ? $(e).data('dg-type') : 'date';
//             var readonly = $(e).data('dg-readonly') !== undefined && typeof $(e).data('dg-readonly') === Boolean ? $(e).data('dg-disabled') : false;
//             var disabled = $(e).data('dg-disabled') !== undefined && typeof $(e).data('dg-disabled') === Boolean ? $(e).data('dg-disabled') : false;
//         });
//     });
// }