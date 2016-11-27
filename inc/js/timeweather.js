var today = new Date();
var h = today.getHours();
function startTime() {
    var today = new Date();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time-live').innerHTML =
    h + ":" + m + "<span>:" + s + "</span>";
    var t = setTimeout(function(){requestAnimationFrame(startTime)}, 1000);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

jQuery(document).ready(function() {
  'use strict';
  var weatherlocation = jQuery('.weather-city').html();

  jQuery.simpleWeather({
    location: weatherlocation,
    woeid: '',
    unit: 'c',
    success: function(weather) {
      var html = '<div class="icon-wrap"><i class="icon-'+weather.code+'"></i></div><div class="weather-content"><div class="wather-content-inside"><div class="head-city">'+weather.city+'</div><div class="head-temp ">+'+weather.temp+'</div><div class="head-temp-unit">&deg;'+weather.units.temp+'</div></div></div>';
      jQuery("#weather").html(html);
    },
    error: function(error) {
      jQuery("#weather").html('<p>'+error+'</p>');
    }
  });
});

/*! simpleWeather v3.1.0 */
!function(t){"use strict";function e(t,e){return"f"===t?Math.round(5/9*(e-32)):Math.round(1.8*e+32)}t.extend({simpleWeather:function(i){i=t.extend({location:"",woeid:"",unit:"f",success:function(t){},error:function(t){}},i);var o=new Date,n="https://query.yahooapis.com/v1/public/yql?format=json&rnd="+o.getFullYear()+o.getMonth()+o.getDay()+o.getHours()+"&diagnostics=true&callback=?&q=";if(""!==i.location){var r="";r=/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/.test(i.location)?"("+i.location+")":i.location,n+='select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="'+r+'") and u="'+i.unit+'"'}else{if(""===i.woeid)return i.error("Could not retrieve weather due to an invalid location."),!1;n+="select * from weather.forecast where woeid="+i.woeid+' and u="'+i.unit+'"'}return t.getJSON(encodeURI(n),function(t){if(null!==t&&null!==t.query&&null!==t.query.results&&"Yahoo! Weather Error"!==t.query.results.channel.description){var o,n=t.query.results.channel,r={},s=["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW","N"],a="https://s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png";r.title=n.item.title,r.temp=n.item.condition.temp,r.code=n.item.condition.code,r.todayCode=n.item.forecast[0].code,r.currently=n.item.condition.text,r.high=n.item.forecast[0].high,r.low=n.item.forecast[0].low,r.text=n.item.forecast[0].text,r.humidity=n.atmosphere.humidity,r.pressure=n.atmosphere.pressure,r.rising=n.atmosphere.rising,r.visibility=n.atmosphere.visibility,r.sunrise=n.astronomy.sunrise,r.sunset=n.astronomy.sunset,r.description=n.item.description,r.city=n.location.city,r.country=n.location.country,r.region=n.location.region,r.updated=n.item.pubDate,r.link=n.item.link,r.units={temp:n.units.temperature,distance:n.units.distance,pressure:n.units.pressure,speed:n.units.speed},r.wind={chill:n.wind.chill,direction:s[Math.round(n.wind.direction/22.5)],speed:n.wind.speed},n.item.condition.temp<80&&n.atmosphere.humidity<40?r.heatindex=-42.379+2.04901523*n.item.condition.temp+10.14333127*n.atmosphere.humidity-.22475541*n.item.condition.temp*n.atmosphere.humidity-6.83783*Math.pow(10,-3)*Math.pow(n.item.condition.temp,2)-5.481717*Math.pow(10,-2)*Math.pow(n.atmosphere.humidity,2)+1.22874*Math.pow(10,-3)*Math.pow(n.item.condition.temp,2)*n.atmosphere.humidity+8.5282*Math.pow(10,-4)*n.item.condition.temp*Math.pow(n.atmosphere.humidity,2)-1.99*Math.pow(10,-6)*Math.pow(n.item.condition.temp,2)*Math.pow(n.atmosphere.humidity,2):r.heatindex=n.item.condition.temp,"3200"==n.item.condition.code?(r.thumbnail=a,r.image=a):(r.thumbnail="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.condition.code+"ds.png",r.image="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.condition.code+"d.png"),r.alt={temp:e(i.unit,n.item.condition.temp),high:e(i.unit,n.item.forecast[0].high),low:e(i.unit,n.item.forecast[0].low)},"f"===i.unit?r.alt.unit="c":r.alt.unit="f",r.forecast=[];for(var m=0;m<n.item.forecast.length;m++)o=n.item.forecast[m],o.alt={high:e(i.unit,n.item.forecast[m].high),low:e(i.unit,n.item.forecast[m].low)},"3200"==n.item.forecast[m].code?(o.thumbnail=a,o.image=a):(o.thumbnail="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.forecast[m].code+"ds.png",o.image="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.forecast[m].code+"d.png"),r.forecast.push(o);i.success(r)}else i.error("There was a problem retrieving the latest weather information.")}),this}})}(jQuery);
