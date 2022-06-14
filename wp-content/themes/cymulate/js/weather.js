(function($) {
    $(document).ready(function(){


        const apiKey = "L08OULN1I5g9AG4KyC2yeDadcLgKyxJ0"

if(navigator.geolocation){
  
    navigator.geolocation.getCurrentPosition((position)=>{

      fetch(`https://dataservice.accuweather.com/locations/v1/cities/geoposition/search?apikey=${apiKey}&q=${position.coords.latitude},${position.coords.longitude}`).then(res=>res.json()).then(response=>{

        
        setWeatherLocation(response.Key ,response.LocalizedName)


      }).catch(error=>{
              console.log(error.toString())
      })



    });
  }



  const setWeatherLocation = (locationKey , locationName) =>{

    fetch(`https://dataservice.accuweather.com/currentconditions/v1/${locationKey}?apikey=${apiKey}`).then(res=>res.json()).then((response)=>{

      $(".weather").html(`
        <div class='forcast'>
            <div>${Math.floor(response[0].Temperature.Metric.Value)} <sup>C</sup></div>
            <img src='https://developer.accuweather.com/sites/default/files/${(response[0].WeatherIcon<10) ?`0${response[0].WeatherIcon}` : response[0].WeatherIcon}-s.png'/>
        </div>
        <div class='location'>${locationName}</div>
      `)

    }).catch(error=>{
        console.log(error.toString())
    })


  }


})
})( jQuery );