

(function($) {
    $(document).ready(function(){




        let currentThreats = 4; //Immediate Threats  
    
         $(".slider , .toggleMobile .button").click(function(e){

            if($(this).hasClass("button")){
                e.preventDefault();
                

                    if($(this).hasClass("active")){
                       return;
                    }else{
                        $(this).parent().find(".active").removeClass("active")
                        $(this).addClass("active");
                    }
            }





            
            if(currentThreats==4){
                currentThreats=5;
            }else{
                currentThreats=4;
            }


             fetch(`${document.location.href}wp-json/wp/v2/threats?Prioritize=${currentThreats}`).then(res=>res.json()).then((response)=>{
                
               
                response.map((element , index)=>{

                    let date = new Date(`${element.acf.date.slice(0 , 4)}-${element.acf.date.slice(4 , 6)}-${element.acf.date.slice(6)}`);

                    date = date.toDateString().split(" ");

                    $(`.boxes > div:nth(${index})`).find(".date").text(`${date[1]} ${date[2]}, ${date[3]}`);
                    $(`.boxes > div:nth(${index})`).find(".title").text(element.acf.title);
                    $(`.boxes > div:nth(${index})`).find(".description").text(element.acf.description);
                })



             }).catch((err)=>{
                    console.log(err);
             })

            

         })
    })
})( jQuery );