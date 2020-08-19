'use strict';

// noUiSlider Demo
//https://refreshless.com/nouislider/
// =============================================================

var nouisliderDemo = {
  defaultFilters: {
    "shape":"0,1,2,3,4,5,6,7,8,9",
    "solitaire_width":"3.60-20.00",
    "price":"1000000.00-1000000000.00",
    "solitaire_color":"j,i,h,g,f,e,d",
    "solitaire_clarity":"si2,si1,vs2,vs1,vvs2,vvs1,if,fl"
  },
  init: function init() {
    var self = this;
    //var filters = self.defaultFilters;
    //self.filterChange(filters);
    this.bindUIActions();
  },
  bindUIActions: function bindUIActions() {
    this.initCheckShape();
    this.initWidthSlider();
    this.initClaritySlider();
    this.initColorSlider();
    this.initPriceSlider();
  },
  filterChange: function(data, isOverwrite) {
    this.setProductFilter(data, isOverwrite);
  },
  loadData: function loadData(vhinh,vminPriceNumber,vmaxPriceNumber,vminWidthNumber,vmaxWidthNumber,vinputColorSlider,vinputClaritySlider,page){
     var selt = this;
     $.ajax({
        type: "POST",
        url: "./ajax_paging/ajax_paging.php",
        data: {
          page:page,
          vhinh:vhinh,
          vminPriceNumber:vminPriceNumber,
          vmaxPriceNumber:vmaxPriceNumber,
          vminWidthNumber:vminWidthNumber,
          vmaxWidthNumber:vmaxWidthNumber,
          vinputColorSlider:vinputColorSlider,
          vinputClaritySlider:vinputClaritySlider
        },
        success: function(msg){
          var d = $('#result-search');
          d.html(msg);
          var c = $("#result-search .pagination li.active");
          c.click(function() {
            var pager = $(this).attr("p");
            selt.loadData(vhinh,vminPriceNumber,vmaxPriceNumber,vminWidthNumber,vmaxWidthNumber,vinputColorSlider,vinputClaritySlider,pager);
          });
        }
    });
  },
  setProductFilter: function(filterData, isOverwrite){
    var self = this;
    var str = '';
    var hinh = document.getElementById('input-images-slider');
    str += '&hinh='+hinh.value;
    var minPriceNumber = document.getElementById('input-min-price');
    var maxPriceNumber = document.getElementById('input-max-price');
    str += '&minprice='+minPriceNumber.value + '&maxprice='+maxPriceNumber.value;

    var minWidthNumber = document.getElementById('input-min-width');
    var maxWidthNumber = document.getElementById('input-max-width');
    str += '&minwidth='+minWidthNumber.value + '&maxwidth='+maxWidthNumber.value;

    var inputColorSlider = document.getElementById('input-color-slider');
    str += '&colorslider='+inputColorSlider.value;

    var inputClaritySlider = document.getElementById('input-clarity-slider');
    str += '&claritylider='+inputClaritySlider.value;

    var linkNext = document.getElementById('link-next');
    

    if(linkNext.value=='kim-cuong-vien'){
      window.location.href = base_url + linkNext.value;
    }else{
      var vhinh = hinh.value;
      var vminPriceNumber = minPriceNumber.value;
      var vmaxPriceNumber = maxPriceNumber.value;
      var vminWidthNumber = minWidthNumber.value;
      var vmaxWidthNumber = maxWidthNumber.value;
      var vinputColorSlider = inputColorSlider.value;
      var vinputClaritySlider = inputClaritySlider.value;
      $('#overlay').css('display',"block");
      setTimeout(function(){
        $('#overlay').css('display',"none");
        self.loadData(vhinh,vminPriceNumber,vmaxPriceNumber,vminWidthNumber,vmaxWidthNumber,vinputColorSlider,vinputClaritySlider,1);
      }, 3000);
    }

    
  },
  initCheckShape: function initCheckShape(){
    var self = this;
    
    var inputSlider = document.getElementById('input-images-slider');
    var checklist = new Array();
    var checkboxes = document.querySelectorAll("input[type=checkbox]");
    for(var i = 0; i < checkboxes.length; i++){
      checkboxes[i].addEventListener("change", function() {
       var obj = this.value;
        if(this.checked){
          checklist.push( obj );
        }else{
          checklist.splice(checklist.indexOf(obj),1);
        }
        inputSlider.value = checklist.join();
        self.filterChange({
          shape: inputSlider.value
        });
      }); 
    }


  },
  convertPriceTextToValue: function convertPriceTextToValue(textPrice, priceFormat) {
      var trim = priceFormat.pattern.replace('%s', '');
      textPrice = textPrice.replace(trim, '');
      var regex2 = new RegExp('\\' + priceFormat.groupSymbol, 'g');
      return textPrice.replace(regex2, '');
  },
  formatNumber: function formatNumber(nStr, decSeperate, groupSeperate) {
      nStr += '';
      var x,x1,x2;
      x = nStr.split(decSeperate);
      x1 = x[0];
      x2 = x.length > 1 ? '.' + x[1] : '';
      var rgx = /(\d+)(\d{3})/;
      while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
      }
      return x1 + x2;
  },
  initPriceSlider: function initPriceSlider() {
    var self = this;
    var priceSlider = document.getElementById('price-slider');
    var minPriceNumber = document.getElementById('input-min-price');
    var maxPriceNumber = document.getElementById('input-max-price');
    var strPriceStart = '1000000.00-1000000000.00';
    var priceStart = strPriceStart.split('-');
    if (priceSlider != null) {
        if (priceSlider.noUiSlider) {
            priceSlider.noUiSlider.destroy();
        }
        noUiSlider.create(priceSlider, {
            start: [priceStart[0], priceStart[1]],
            connect: true,
            range: {
                'min': [1000000],
                'max': [1000000000]
            }
        });
        priceSlider.noUiSlider.on('update', function(values, handle) {
            var value = values[handle];
            if (handle == 0) {
                minPriceNumber.value = self.formatNumber(value, '.', ',') + 'đ';
            } else {
                maxPriceNumber.value = self.formatNumber(value, '.', ',') + 'đ';
            }
        });
        minPriceNumber.addEventListener('change', function() {
            priceSlider.noUiSlider.set([self.convertPriceTextToValue(this.value, priceFormat), null]);
        });
        maxPriceNumber.addEventListener('change', function() {
            priceSlider.noUiSlider.set([null, self.convertPriceTextToValue(this.value, priceFormat)]);
        });
        priceSlider.noUiSlider.on('set', function(values, handle, unencoded, tap) {
            var data = priceSlider.noUiSlider.get();

            minPriceNumber.value = self.formatNumber(data[0], '.', ',') + 'đ';
            maxPriceNumber.value = self.formatNumber(data[1], '.', ',') + 'đ';

            this.filterChange({
                price: data[0] + '-' + data[1]
            });
        }.bind(this));
    }
  },

  initColorSlider: function initColorSlider() {
    function getColor(value, isNormalized) {
        switch (true) {
            case (value == 0):
                value = isNormalized ? 'j' : "J";
                break;
            case (value == 1):
                value = isNormalized ? 'i' : "I";
                break;
            case (value == 2):
                value = isNormalized ? 'h' : "H";
                break;
            case (value == 3):
                value = isNormalized ? 'g' : "G";
                break;
            case (value == 4):
                value = isNormalized ? 'f' : "F";
                break;
            case (value == 5):
                value = isNormalized ? 'e' : "E";
                break;
            case (value == 6):
                value = isNormalized ? 'd' : "D";
                break;
        }
        return value;
    }

    function clickOnPip() {
        var value = Number(this.getAttribute('data-value'));
        colorSlider.noUiSlider.set(value);
    }
    var colorSlider = document.getElementById('color-slider');
    var inputColorSlider = document.getElementById('input-color-slider');
    if (colorSlider != null) {
      if (colorSlider.noUiSlider) {
          colorSlider.noUiSlider.destroy();
      }
      noUiSlider.create(colorSlider, {
          range: {
              min: [0],
              '0%': [0, 1],
              '16.6666666667%': [1, 2],
              '33.3333333333%': [2, 3],
              '50%': [3, 4],
              '66.6666666667%': [4, 5],
              '83.3333333333%': [5, 6],
              '100%': [6, 6],
              max: [6]
          },
          connect: true,
          start: [0, 6],
          pips: {
              mode: 'positions',
              values: [0, 16.6666666667, 33.3333333333, 50, 66.6666666667, 83.3333333333, 100],
              density: 6,
              format: {
                  to: getColor
              }
          }
      });
      var pips = colorSlider.querySelectorAll('.noUi-value');
      for (var i = 0; i < pips.length; i++) {
          pips[i].style.cursor = 'pointer';
          pips[i].addEventListener('click', clickOnPip);
      }
      // colorSlider.noUiSlider.on('update', function(values, handle) {
      //     var value = values[handle];
      //     inputColorSlider.value = value;
      // });
      colorSlider.noUiSlider.on('set', function() {
          var data = colorSlider.noUiSlider.get();
          var colorList = [];
          for (var i = parseInt(data[0]); i <= parseInt(data[1]); i++) {
              var value = getColor(i, true);
              colorList.push(value);
          }
          inputColorSlider.value = colorList.join();
          this.filterChange({
              solitaire_color: colorList.join(',')
          });
      }.bind(this));
    }
  },
  initClaritySlider: function initClaritySlider() {
    function getClarity(value, isNormalized) {
      switch (true) {
          case (value == 0):
              value = isNormalized ? 'si2' : "SI2";
              break;
          case (value == 1):
              value = isNormalized ? 'si1' : "SI1";
              break;
          case (value == 2):
              value = isNormalized ? 'vs2' : "VS2";
              break;
          case (value == 3):
              value = isNormalized ? 'vs1' : "VS1";
              break;
          case (value == 4):
              value = isNormalized ? 'vvs2' : "VVS2";
              break;
          case (value == 5):
              value = isNormalized ? 'vvs1' : "VVS1";
              break;
          case (value == 6):
              value = isNormalized ? 'if' : "IF";
              break;
          case (value == 7):
              value = isNormalized ? 'fl' : "FL";
              break;
      }
      return value;
    }

    function clickOnPip() {
        var value = Number(this.getAttribute('data-value'));
        claritySlider.noUiSlider.set(value);
    }
    var claritySlider = document.getElementById('clarity-slider');
    var inputClaritySlider = document.getElementById('input-clarity-slider');
    if (claritySlider != null) {
        if (claritySlider.noUiSlider) {
            claritySlider.noUiSlider.destroy();
        }
        noUiSlider.create(claritySlider, {
            range: {
                min: [0],
                '0%': [0, 1],
                '14.2857142857%': [1, 2],
                '28.5714285714%': [2, 3],
                '42.8571428571%': [3, 4],
                '57.1428571429%': [4, 5],
                '71.4285714286%': [5, 6],
                '85.7142857143%': [6, 7],
                '100%': [7, 7],
                max: [7]
            },
            connect: true,
            start: [0, 7],
            pips: {
                mode: 'positions',
                values: [0, 14.2857142857, 28.5714285714, 42.8571428571, 57.1428571429, 71.4285714286, 85.7142857143, 100],
                density: 7,
                format: {
                    to: getClarity
                }
            }
        });
        var pips = claritySlider.querySelectorAll('.noUi-value');
        for (var i = 0; i < pips.length; i++) {
            pips[i].style.cursor = 'pointer';
            pips[i].addEventListener('click', clickOnPip);
        }
        // claritySlider.noUiSlider.on('update', function(values, handle) {
        //   var value = values[handle];
        //   inputClaritySlider.value = value;
        // });
        claritySlider.noUiSlider.on('set', function() {
            
            var data = claritySlider.noUiSlider.get();
            var clarityList = [];
            for (var i = parseInt(data[0]); i <= parseInt(data[1]); i++) {
                var value = getClarity(i, true);
                clarityList.push(value);
            }
            inputClaritySlider.value = clarityList.join();
            this.filterChange({
                solitaire_clarity: clarityList.join(',')
            });
        }.bind(this));
    }
  },
  initWidthSlider: function initWidthSlider() {
    var widthSlider = document.getElementById('width-slider');
    var minWidthNumber = document.getElementById('input-min-width');
    var maxWidthNumber = document.getElementById('input-max-width');
    var strWidthStart = '3.60-15.00';
    var widthStart = strWidthStart.split('-');
    if (widthSlider != null) {
        if (widthSlider.noUiSlider) {
            widthSlider.noUiSlider.destroy();
        }
        noUiSlider.create(widthSlider, {
            start: [widthStart[0], widthStart[1]],
            connect: true,
            range: {
                'min': [3.6],
                'max': [20]
            }
        });
        widthSlider.noUiSlider.on('update', function(values, handle) {
            var value = values[handle];
            if (handle == 0) {
                minWidthNumber.value = value;
            } else {
                maxWidthNumber.value = value;
            }
        });
        minWidthNumber.addEventListener('change', function() {
            widthSlider.noUiSlider.set([this.value, null]);
        });
        maxWidthNumber.addEventListener('change', function() {
            widthSlider.noUiSlider.set([null, this.value]);
        });
        widthSlider.noUiSlider.on('set', function() {
            var data = widthSlider.noUiSlider.get();
            this.filterChange({
                solitaire_width: data[0] + '-' + data[1]
            });
        }.bind(this));
    }
  },
  initCutSlider: function initCutSlider(){
      function getCut(value, isNormalized) {
        switch (true) {
          case (value == 0):
            value = isNormalized ? 'fair' : "Khá tốt";
            break;
          case (value == 1):
            value = isNormalized ? 'good' : "Tốt";
            break;
          case (value == 2):
            value = isNormalized ? 'very-good' : "Rất tốt";
            break;
          case (value == 3):
            value = isNormalized ? 'excellent' : "Lý tưởng";
            break;
          case (value == 4):
            value = isNormalized ? 'finest' : "Hoàn hảo";
            break;
        }
        return value;
      }

      function clickOnPip() {
        var value = Number(this.getAttribute('data-value'));
        cutSlider.noUiSlider.set(value);
      }
      var cutSlider = document.getElementById('cut-slider');
      //var cutSliderValue = document.getElementById('cut-slider-value');
      if (noUiSlider != null) {
        if (cutSlider.noUiSlider) {
          cutSlider.noUiSlider.destroy();
        }
        noUiSlider.create(cutSlider, {
          animate: true,
          range: {
            min: [0],
            '25%': [1],
            '50%': [2],
            '75%': [3],
            max: [4]
          },
          connect: [true, false],
          start: [0],
          pips: {
            // mode: 'count',
            // values: 5,
            mode: 'positions',
            values: [0, 25, 50, 75, 100],
            stepped: true,
            format: {
              to: getCut
            },
            density: 20
          }
        });
        var pips = cutSlider.querySelectorAll('.noUi-value');
        for (var i = 0; i < pips.length; i++) {
          pips[i].style.cursor = 'pointer';
          pips[i].addEventListener('click', clickOnPip);
        }
        cutSlider.noUiSlider.on('update', function (values, handle) {
            //cutSliderValue.innerHTML = values[handle];
            
        });
        cutSlider.noUiSlider.on('set', function() {
          var data = cutSlider.noUiSlider.get();
          
          var cutList = [];
          for (var i = parseInt(data[0]); i <= parseInt(data[1]); i++) {
            var value = getCut(i, true);
            cutList.push(value);
          }
          // var d = new Date();
          // var n = d.getTime();
          // $.ajax({
          //   url: 'ajax.php?time='+n,
          //   type: 'POST',
          //   data: {param1: data},
          //   success: function(){

          //   }
          // });
          

        }.bind(this));
      }
    }
};

nouisliderDemo.init();